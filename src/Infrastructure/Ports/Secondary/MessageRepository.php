<?php

declare(strict_types=1);

namespace App\Infrastructure\Ports\Secondary;

use Kilfox09\FrienziedWarriorsHub\Domain\Entity\Message;
use Kilfox09\FrienziedWarriorsHub\Domain\Gateway\MessageGatewayInterface;

class MessageRepository implements MessageGatewayInterface
{
    public function add(Message $message): void
    {
    }

    public function findAll(): array
    {
        return array_fill(0, 10, new Message('Message'));
    }
}
