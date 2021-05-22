<?php

declare(strict_types=1);

namespace Kilfox09\FrienziedWarriorsHub\Domain\Tests;

use App\UserInterface\ViewModel\ChatViewModel;
use Kilfox09\FrienziedWarriorsHub\Domain\Entity\Message;
use Kilfox09\FrienziedWarriorsHub\Domain\Gateway\MessageGatewayInterface;
use Kilfox09\FrienziedWarriorsHub\Domain\Presenter\ChatPresenterInterface;
use Kilfox09\FrienziedWarriorsHub\Domain\Response\ChatResponse;
use Kilfox09\FrienziedWarriorsHub\Domain\UseCase\Chat;
use PHPUnit\Framework\TestCase;

class ChatTest extends TestCase
{
    /**
     * @var ChatPresenterInterface
     */
    private ChatPresenterInterface $presenter;

    /**
     * @var MessageGatewayInterface
     */
    private MessageGatewayInterface $messageGateway;

    /**
     *
     */
    protected function setUp(): void
    {
        $this->messageGateway = new class () implements MessageGatewayInterface {
            /**
             * @param Message $message
             */
            public function add(Message $message): void
            {
            }

            /**
             * @return array
             */
            public function findAll(): array
            {
                return array_fill(0, 10, new Message('Message'));
            }
        };

        $this->presenter = new class () implements ChatPresenterInterface {
            /**
             * @var array
             */
            public array $message;

            /**
             * @param ChatResponse $chatResponse
             */
            public function present(ChatResponse $chatResponse)
            {
                $this->message = array_map(
                    fn(Message $message) => $message->getContent(),
                    $chatResponse->getMessage()
                );
            }
        };
    }

    public function test()
    {
        $chat = new Chat($this->messageGateway);

        $chat->execute($this->presenter);

        $this->assertCount(10, $this->presenter->message);
    }
}
