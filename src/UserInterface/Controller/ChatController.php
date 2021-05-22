<?php

declare(strict_types=1);

namespace App\UserInterface\Controller;

use App\UserInterface\Presenter\ChatPresenter;
use Kilfox09\FrienziedWarriorsHub\Domain\UseCase\Chat;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class ChatController
 * @package App\UserInterface\Controller
 */
class ChatController
{
    /**
     * @param Chat $chat
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    public function __invoke(
        Chat $chat,
        SerializerInterface $serializer
    ): Response {
        $presenter = new ChatPresenter();

        $chat->execute($presenter);

        return new JsonResponse($serializer->serialize($presenter->getChatViewModel(), 'json'), 200, [], true);
    }
}
