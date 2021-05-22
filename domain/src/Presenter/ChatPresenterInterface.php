<?php

declare(strict_types=1);

namespace Kilfox09\FrienziedWarriorsHub\Domain\Presenter;

use Kilfox09\FrienziedWarriorsHub\Domain\Response\ChatResponse;

/**
 * Interface ChatPresenterInterface
 * @package Kilfox09\FrienziedWarriorsHub\Domain\Presenter
 */
interface ChatPresenterInterface
{
    /**
     * @param ChatResponse $response
     * @return mixed
     */
    public function present(ChatResponse $response);
}
