<?php

namespace EmployerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Home controller.
 *
 * @Route("home")
 */class HomeController extends Controller
{
    /**
     * @Route("/", name="home_index")
     */
    public function indexAction()
    {
        return $this->render('EmployerBundle:Home:index.html.twig');
    }
}