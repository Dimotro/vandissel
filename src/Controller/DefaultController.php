<?php
/**
 * Created by PhpStorm.
 * User: imoz
 * Date: 16/01/2018
 * Time: 20:01
 */

namespace App\Controller;


use App\Entity\Klantaccount;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DefaultController extends Controller
{
    public function home(){
        return $this->render('home.html.twig', [
            'something' => 'Awesome!'
        ]);
    }
    public function contact(){
        return $this->render('contact.html.twig');

    }

    public function overons(){
        return $this->render('overons.html.twig');
    }

    public function loginForm(){
        return $this->render('pages/login.html.twig', array(

        ));
    }

    public function registerForm(){
        $user = new Klantaccount();

        $form  = $this->createFormBuilder()
            ->add('klantEmail', TextType::class)
            ->add('klantGebruikersnaam', TextType::class)
            ->add('klantWachtwoord', TextType::class)
            ->getForm();

        return $this->render('partials/register-form.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function login(){
        return $this->render('pages/login.html.twig');
    }

    public function register(){
        return $this->render('pages/register.html.twig');
    }
}

