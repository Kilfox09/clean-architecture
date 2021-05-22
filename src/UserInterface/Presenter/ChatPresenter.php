<?php

declare(strict_types=1);

namespace App\UserInterface\Presenter;

use App\UserInterface\ViewModel\ChatViewModel;
use Kilfox09\FrienziedWarriorsHub\Domain\Entity\Message;
use Kilfox09\FrienziedWarriorsHub\Domain\Presenter\ChatPresenterInterface;
use Kilfox09\FrienziedWarriorsHub\Domain\Response\ChatResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ChatPresenter
 * @package App\UserInterface\Presenter
 */
class ChatPresenter implements ChatPresenterInterface
{
    private ChatViewModel $chatViewModel;

    /**
     * @param ChatResponse $chatResponse
     * @return void
     */
    public function present(ChatResponse $chatResponse): void
    {
        $this->chatViewModel = new ChatViewModel(
            array_map(
                fn(Message $message) => $message->getContent(),
                $chatResponse->getMessage()
            )
        );
    }

    /**
     * @return ChatViewModel
     */
    public function getChatViewModel(): ChatViewModel
    {
        return $this->chatViewModel;
    }
}
