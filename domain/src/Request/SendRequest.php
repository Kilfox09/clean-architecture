<?php

declare(strict_types=1);

namespace Kilfox09\FrienziedWarriorsHub\Domain\Request;

/**
 * Class SendRequest
 * @package Kilfox09\FrienziedWarriorsHub\Domain\Request
 */
class SendRequest
{
    /**
     * @var string
     */
    private string $message;

    /**
     * SendRequest constructor.
     * @param string $message
     */
    public function __construct(string $message)
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
