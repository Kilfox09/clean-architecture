<?php

declare(strict_types=1);

namespace Kilfox09\FrienziedWarriorsHub\Domain\UseCase;

use Kilfox09\FrienziedWarriorsHub\Domain\Entity\Message;
use Kilfox09\FrienziedWarriorsHub\Domain\Gateway\MessageGatewayInterface;
use Kilfox09\FrienziedWarriorsHub\Domain\Request\SendRequest;

/**
 * Class Send
 * @package Kilfox09\FrienziedWarriorsHub\Domain\UseCase
 */
class Send
{
    /**
     * @var MessageGatewayInterface
     */
    private MessageGatewayInterface $messageGateway;

    /**
     * Send constructor.
     * @param MessageGatewayInterface $messageGateway
     */
    public function __construct(MessageGatewayInterface $messageGateway)
    {
        $this->messageGateway = $messageGateway;
    }

    /**
     * @param SendRequest $request
     */
    public function execute(SendRequest $request): void
    {
        $this->messageGateway->add(new Message($request->getMessage()));
    }
}
