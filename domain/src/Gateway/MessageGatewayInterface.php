<?php

declare(strict_types=1);

namespace Kilfox09\FrienziedWarriorsHub\Domain\Gateway;

use Kilfox09\FrienziedWarriorsHub\Domain\Entity\Message;

/**
 * Interface MessageGatewayInterface
 * @package Kilfox09\FrienziedWarriorsHub\Domain\Gateway
 */
interface MessageGatewayInterface
{
    /**
     * @param Message $message
     */
    public function add(Message $message): void;

    /**
     * @return Message[]
     */
    public function findAll(): array;
}
