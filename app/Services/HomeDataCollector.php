<?php

declare(strict_types=1);

namespace App\Services;

use App\Enums\HistoricalPointType;
use App\Exceptions\InvalidValueException;
use App\Models\Personal;
use App\Repositories\HistoricalPointRepository;
use App\Repositories\ImageRepository;
use App\Repositories\PersonalRepository;
use App\Repositories\QualityRepository;

class HomeDataCollector
{
    public function __construct(
        private PersonalRepository $personalRepository,
        private QualityRepository $qualityRepository,
        private HistoricalPointRepository $historicalPointRepository,
        private ImageRepository $imageRepository,
    ) {}

    /**
     * @return array<string, mixed>
     *
     * @throws InvalidValueException
     */
    public function collect(): array
    {
        return [
            'profile' => $this->getProfile(),
            'aboutMe' => $this->getAboutMe(),
            'education' => $this->getHistoricalPointsByType(HistoricalPointType::EDUCATION),
            'experience' => $this->getHistoricalPointsByType(HistoricalPointType::EXPERIENCE),
        ];
    }

    /**
     * @return array<string, string>
     *
     * @throws InvalidValueException
     */
    private function getProfile(): array
    {
        return $this->findPersonalOrFail()->toArray();
    }

    /**
     * @return array<string, string|array>
     *
     * @throws InvalidValueException
     */
    private function getAboutMe(): array
    {
        $personal = $this->findPersonalOrFail();
        $qualities = $this->qualityRepository->fetchQualityNamesAndValues();

        return [
            'specialty' => $personal->speciality,
            'info' => $personal->info,
            'qualities' => $qualities->toArray(),
        ];
    }

    private function getHistoricalPointsByType(HistoricalPointType $type): array
    {
        return $this->historicalPointRepository
            ->fetchByType($type)
            ->toArray();
    }

    /**
     * @throws InvalidValueException
     */
    private function findPersonalOrFail(): Personal
    {
        $personal = $this->personalRepository->findLast();
        if (!$personal) {
            throw new InvalidValueException('There is no person.');
        }

        return $personal;
    }
}
