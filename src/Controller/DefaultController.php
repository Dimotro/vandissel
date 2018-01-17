<?php
/**
 * Created by PhpStorm.
 * User: imoz
 * Date: 16/01/2018
 * Time: 20:01
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function home(){
        return $this->render('home.html.twig', [
            'something' => 'Awesome!'
        ]);
    }
}