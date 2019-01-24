<?php

namespace Socket\Action\Chat;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class ChatController
 */
class ChatController extends Controller
{
    /**
     * @Route("/", name="chat")
     */
    public function __invoke()
    {
        return $this->render('chat/index.html.twig');
    }
}
