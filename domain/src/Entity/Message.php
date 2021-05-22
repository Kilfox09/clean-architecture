<?php

declare(strict_types=1);

namespace Kilfox09\FrienziedWarriorsHub\Domain\Entity;

/**
 * Class Message
 * @package Kilfox09\FrienziedWarriorsHub\Domain\Entity
 */
class Message
{
    /**
     * @var string
     */
    private string $content;

    /**
     * Message constructor.
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }
}
