<?php

declare(strict_types=1);

namespace Kilfox09\FrienziedWarriorsHub\Domain\Response;

use Kilfox09\FrienziedWarriorsHub\Domain\Entity\Message;

/**
 * Class ChatResponse
 * @package Kilfox09\FrienziedWarriorsHub\Domain\Response
 */
class ChatResponse
{
    /**
     * @var Message[]
     */
    private array $message = [];

    /**
     * ChatResponse constructor.
     * @param Message[] $message
     */
    public function __construct(array $message)
    {
        $this->message = $message;
    }

    /**
     * @return Message[]
     */
    public function getMessage(): array
    {
        return $this->message;
    }
}
