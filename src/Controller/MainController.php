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

class LuckyController extends AbstractController {

    /**
     * @Route("/lucky/number/")
     */
    public function number(){
        $number = random_int(0, 255);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
            ]
        );
    }
}