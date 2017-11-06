<?php
/**
 * Created by PhpStorm.
 * User: antoine.lefevre
 * Date: 25/10/17
 * Time: 13:38
 */

namespace App\Controller;

use App\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManager;

class UserController extends Controller{

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

        //$listeUser = $this->getDoctrine()->getRepository('User')->listAll();

        $listeUser = [[new User(1,'Lefevre','Antoine','antoine.lefevre.isn@gmail.com','AntoineLefevre','Mogami#2889')],[new User(2,'Durand','Nael','antoine.lefevre.isn@gmail.com','AntoineLefevre','Mogami#2889')]];
        return $this->render(
            'accueil/hello.html.twig',array('Liste'=>$listeUser)
        );
    }

}