<?php

declare(strict_types=1);

namespace Kilfox09\FrienziedWarriorsHub\Domain\UseCase;

use Kilfox09\FrienziedWarriorsHub\Domain\Gateway\MessageGatewayInterface;
use Kilfox09\FrienziedWarriorsHub\Domain\Presenter\ChatPresenterInterface;
use Kilfox09\FrienziedWarriorsHub\Domain\Response\ChatResponse;

/**
 * Class Chat
 * @package Kilfox09\FrienziedWarriorsHub\Domain\UseCase
 */
class Chat
{
    /**
     * @var MessageGatewayInterface
     */
    private MessageGatewayInterface $messageGateway;

    /**
     * Chat constructor.
     * @param MessageGatewayInterface $messageGateway
     */
    public function __construct(MessageGatewayInterface $messageGateway)
    {
        $this->messageGateway = $messageGateway;
    }

    /**
     * @param ChatPresenterInterface $presenter
     * @return void
     */
    public function execute(ChatPresenterInterface $presenter): void
    {
        $presenter->present(new ChatResponse($this->messageGateway->findAll()));
    }
}
