<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\MessageRequest;
use App\Repositories\MessageRepository;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class MessageController extends Controller
{
    public function store(MessageRequest $request, MessageRepository $messageRepository): JsonResponse
    {
        $message = $messageRepository->createFromArray($request->all());
        if (!$message) {
            throw new BadRequestHttpException();
        }

        return new JsonResponse();
    }
}
