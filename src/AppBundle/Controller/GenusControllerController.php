<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use  Symfony\Component\HttpFoundation\Response;

class GenusControllerController 
{
    /**
     * @Route("/genus")
     */
    public function showAction()
    {
        return new Response('Under the sea');
    
    }

}
