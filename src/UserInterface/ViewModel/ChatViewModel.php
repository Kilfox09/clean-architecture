<?php

declare(strict_types=1);

namespace App\UserInterface\ViewModel;

/**
 * Class ChatViewModel
 * @package App\UserInterface\ViewModel
 */
class ChatViewModel
{
    /**
     * @var string[]
     */
    private array $message;

    /**
     * ChatViewModel constructor.
     * @param array $message
     */
    public function __construct(array $message)
    {
        $this->message = $message;
    }

    /**
     * @return array
     */
    public function getMessage(): array
    {
        return $this->message;
    }
}
