<?php

namespace MonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('MonBundle:Default:index.html.twig');
    }


    
     /**
     * @Route("/test")
     */
    public function testAction()
    {
        
        return $this->render('@Mon/Default/index.html.twig');

    }

     /**
     * @Route("/test2", name="test2")
     */
    public function test2Action()
    {


        return new Response(
            '<html><body>2: </body></html>'

        );
    }

  /**
     * @Route("/somme/{x}/{y}",name="psomme")
     */
    public function sommeAction($x,$y)
    {
        $s=$x+$y;
        return $this->render('@Mon/Default/somme.html.twig',array("nbr"=>$s));

    }

    /**
     * @Route("/affiche/{nb}")
     */
    public function afficheAction($nb)
    {
        $tab=array();
      return  $this->redirectToRoute('test2');
        for ($i=0; $i<$nb; $i++) {
            array_push($tab,'nom'.$i);

        }
        return $this->render('@Mon/Default/affiche.html.twig',array("tab"=>$tab));

    }

}
