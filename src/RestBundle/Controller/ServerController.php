<?php

namespace RestBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServerController extends Controller
{
    /**
     * @Route("/rest/server", name="restserver")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
    
    /**
     * @Route("/rest/server/get", name="restget")
     */
    public function getAction()
    {
    
    	$array['a'] = 1;
    	$array['b'] = 2;
    	echo json_encode($array);
    	die;
    }    
}
