<?php

namespace AppBundle\Controller\PublicAccess;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class UtilsController
 * @Route("/utils")
 */
class UtilsController extends Controller
{
    // TODO: pegar do BD
    /**
     * @Route("/auth_color", name="auth_color")
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function authColorAction()
    {
        return $this->json([
            'filterColor' => 'black'    // black | purple | info | green | orange | (danger | red) | rose
        ]);
    }

    /**
     * @Route("/menu_color", name="menu_color")
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function menuColorAction()
    {
        return $this->json([
            'activeItem' => 'purple',   // purple | azure | green | orange | danger | rose
            'filterColor' => 'black'    // black | white | red
        ]);
    }
}
