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

class IndexController extends Controller{

    /**
     * @Route("/hello",name="hello_world")
     */
    public function indexAction() {

        return new Response('<html><body>Hello World !</body></html>');
    }

    public function index() {

        return new Response('<html><body>Hello World 2!</body></html>');
    }

    /**
     * @Route("/accueil",name="accueil")
     */
    public function accueil() {

        return $this->render(
            'accueil/hello.html.twig'
        );
    }

}