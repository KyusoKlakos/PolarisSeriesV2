<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Equipe;
use App\Entity\Division;
use App\Entity\Rencontre;
use App\Entity\Map;
use App\Entity\MapPool;
use App\Entity\Championnat;

class EquipeController extends AbstractController
{
    /**
     * @Route("/teams", name="show_team")
     */
    public function showTeams()
    {
        $em = $this->getDoctrine()->getManager();
        $equipes = $em->getRepository(Equipe::class)->findAll();
        $divisions = $em->getRepository(Division::class)->findDivAvecEquipe();
        $rencontres = $em->getRepository(Rencontre::class)->findAll();
        return $this->render('front/equipe/show_teams.html.twig', [
            'equipes'=>$equipes,
            'divisions'=>$divisions,
            'rencontres'=>$rencontres
        ]);
    }

    /**
    * @Route("/standing", name="standing")
    */
    public function standing(){
        $em = $this->getDoctrine()->getManager();
        $equipes = $em->getRepository(Equipe::class)->findAll();
        $divisions = $em->getRepository(Division::class)->findAll();

        usort($equipes, function($a, $b) {
            if ($a->getVictoires() == $b->getVictoires())
            {
              // score is the same, sort by endgame
              if (($a->getVictoireMap() - $a->getDefaiteMap()) < ($b->getVictoireMap() - $b->getDefaiteMap())) return 1;
            }
            // sort the higher score first:
            return $a->getVictoires() < $b->getVictoires() ? 1 : -1;
        });
        return $this->render('front/equipe/show_standing.html.twig', [
            'equipes'=>$equipes,
            'divisions'=>$divisions
        ]);
    }

    /**
    * @Route("/meetings", name="show_renc")
    */
    public function match(){
        $em = $this->getDoctrine()->getManager();
        $rencontres = $em->getRepository(Rencontre::class)->findAll();
        $divisions = $em->getRepository(Division::class)->findDivAvecEquipe();
        $numSemaine = $em->getRepository(Championnat::class)->findAll()[0]->getSemaine();
        $nbSemaine = $em->getRepository(Championnat::class)->findAll()[0]->getNbSemaine();
        $datesSemaine = $em->getRepository(Championnat::class)->findAll()[0]->getDatesSemaines();
        $datesNextSemaine = $em->getRepository(Championnat::class)->findAll()[0]->getDatesNextSemaines();
        $mapPools = $em->getRepository(MapPool::class)->findAll();
        return $this->render('front/equipe/show_matchs.html.twig', [
            'rencontres'=>$rencontres,
            'divisions'=>$divisions,
            'mapPools'=>$mapPools,
            'numSemaine'=>$numSemaine,
            'nbSemaine'=>$nbSemaine,
            'datesSemaine'=>$datesSemaine,
            'datesNextSemaine'=>$datesNextSemaine
        ]);
    }
}
