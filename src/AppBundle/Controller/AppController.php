<?php

namespace AppBundle\Controller;

use AppBundle\Menu\Menu;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class AppController
 * @Route("/app")
 */
class AppController extends Controller
{
    /**
     * @Route("/menu", name="app_menu")
     */
    public function menuAction()
    {
        $items = Menu::getMenuMapping($this->getUser()->getRole());

        return $this->render('template/menuContent.html.twig', [
            'items' => $items
        ]);
    }





    // TODO: rota de teste
    /**
     * @Route("/teste", name="rota_teste")
     */
    public function showAction()
    {
        return $this->render('formulator/index.html.twig');
    }
}
