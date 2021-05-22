<?php

declare(strict_types=1);

namespace App\UserInterface\Controller;

use Kilfox09\FrienziedWarriorsHub\Domain\Request\SendRequest;
use Kilfox09\FrienziedWarriorsHub\Domain\UseCase\Send;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class SendController
 * @package App\UserInterface\Controller
 */
class SendController
{
    /**
     * @param Send $send
     * @param Request $request
     * @return Response
     */
    public function __invoke(Send $send, Request $request, SerializerInterface $serializer)
    {
        $request = $serializer->deserialize($request->getContent(), SendRequest::class, 'json');

        $send->execute($request);

        return new Response(null, Response::HTTP_CREATED);
    }
}
