<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{

    /**
     * @Route("/", name="homepage")
     */
    public function homepage(){
        return $this->render('Student/homepage.html.twig');
    }

}