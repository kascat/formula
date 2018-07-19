<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class AppController
 * @Route("/app")
 */
class AppController extends Controller
{
    // TODO: pegar do BD
    /**
     * @Route("/auth_color", name="auth_color")
     */
    public function authColorAction()
    {
        return $this->json(['color' => 'green']);
    }

//    /**
//     * @Route("/menu_color", name="menu_color")
//     */
//    public function menuColorAction()
//    {
//        return $this->json([
//            'color' => 'green',
//            'background' => 'red'
//        ]);
//    }
}
