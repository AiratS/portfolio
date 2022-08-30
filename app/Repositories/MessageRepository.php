<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Message;

/**
 * @see Message
 */
class MessageRepository
{
    /**
     * @noinspection PhpIncompatibleReturnTypeInspection
     *
     * @param array<string, string> $data
     */
    public function createFromArray(array $data): ?Message
    {
        return Message::query()->create($data);
    }
}
