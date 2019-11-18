<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Championnat;
use App\Entity\GagnantSaison;

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

    /**
    * @Route("/winner", name="play_win")
    */
    public function playoffsWinner(){
        $em = $this->getDoctrine()->getManager();
        $numSemaine = $em->getRepository(Championnat::class)->findAll()[0]->getSemaine();
        $winners = $em->getRepository(GagnantSaison::class)->findAll();
        return $this->render('front/default/winners_playoffs.html.twig', [
            "numSemaine" => $numSemaine,
            "winners" => array_reverse($winners)
        ]);
    }
}
