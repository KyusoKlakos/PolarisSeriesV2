<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Championnat;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $numSemaine = $em->getRepository(Championnat::class)->findAll()[0]->getSemaine();
        return $this->render('front/default/index.html.twig', [
            "numSemaine" => $numSemaine
        ]);
    }

    /**
    * @Route("/terms", name="terms")
    */
    public function terms(){
        $em = $this->getDoctrine()->getManager();
        $numSemaine = $em->getRepository(Championnat::class)->findAll()[0]->getSemaine();
        return $this->render('front/default/terms.html.twig', [
            "numSemaine" => $numSemaine
        ]);
    }

    /**
    * @Route("/twitch", name="twitch")
    */
    public function twitch(){
        $em = $this->getDoctrine()->getManager();
        $numSemaine = $em->getRepository(Championnat::class)->findAll()[0]->getSemaine();
        return $this->render('front/default/twitch.html.twig', [
            "numSemaine" => $numSemaine
        ]);
    }
}
