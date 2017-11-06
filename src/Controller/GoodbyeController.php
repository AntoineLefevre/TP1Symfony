<?php
/**
 * Created by PhpStorm.
 * User: antoine.lefevre
 * Date: 25/10/17
 * Time: 13:38
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GoodbyeController extends Controller{


    /**
     * @Route("/goodbye",name="goodbye")
     */
    public function goodbye() {

        return $this->render(
            'goodbye/goodbye.html.twig'
        );
    }

}