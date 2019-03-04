<?php
/**
 * Created by PhpStorm.
 * User: ColinHowlin
 * Date: 01/03/2019
 * Time: 15:09
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController {

    /**
     * @Route("/")
     */
    public function home(){

        return $this->render('main/home.html.twig', []
        );
    }

    /**
     * @Route("/menu")
     */
    public function menu(){
        return $this->render('main/menu.html.twig');
    }

    /**
     * @Route("/register")
     */
    public function register(){
        return $this->render('main/register.html.twig');
    }
}