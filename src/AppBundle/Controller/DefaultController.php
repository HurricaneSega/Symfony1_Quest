<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * $param $id
     * @Route("/personnage/{id}", name="personnage")
     */
    public function showPersonnageAction ($id)
    {
        $em = $this->getDoctrine()->getManager();

        $personnage = $em->getRepository('AppBundle:Personnage')->find($id);

        return $this->render('default/personnage/show.html.twig', ['personnage' => $personnage]);
    }

    /**
     * $param $id
     * @Route("/kingdom/{id}", name="kingdom")
     */
    public function showKingdomAction ($id)
    {

        $em = $this->getDoctrine()->getManager();

        $kingdom = $em->getRepository('AppBundle:Kingdom')->find($id);

        return $this->render('default/kingdom/showK.html.twig', ['kingdom' => $kingdom]);
    }

    public function ()
    {

    }
}
