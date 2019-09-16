<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GenusControllerController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {
        return new Response('The genus: '.$genusName);
    
    }

}
