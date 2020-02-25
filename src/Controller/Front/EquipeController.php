<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;
use App\Entity\Equipe;
use App\Entity\Division;
use App\Entity\Rencontre;
use App\Entity\Map;
use App\Entity\MapPool;
use App\Entity\Championnat;

class EquipeController extends AbstractController
{

    const PASSWORD = "TScreateM4tchs";

    /**
     * @Route("/teams", name="show_team")
     */
    public function showTeams()
    {
        $em = $this->getDoctrine()->getManager();
        $equipes = $em->getRepository(Equipe::class)->findAll();
        $divisions = $em->getRepository(Division::class)->findDivAvecEquipe();
        $rencontres = $em->getRepository(Rencontre::class)->findAll();
        $numSemaine = $em->getRepository(Championnat::class)->findAll()[0]->getSemaine();
        return $this->render('front/equipe/show_teams.html.twig', [
            'equipes'=>$equipes,
            'divisions'=>$divisions,
            'rencontres'=>$rencontres,
            "numSemaine" => $numSemaine
        ]);
    }

    /**
    * @Route("/standing", name="standing")
    */
    public function standing(){
        $em = $this->getDoctrine()->getManager();
        $equipes = $em->getRepository(Equipe::class)->findAll();
        $divisions = $em->getRepository(Division::class)->findAll();
        $numSemaine = $em->getRepository(Championnat::class)->findAll()[0]->getSemaine();

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
            'divisions'=>$divisions,
            "numSemaine" => $numSemaine
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

    /**
    * @Route("/meetings/playoff", name="show_renc_playoff")
    */
    public function playoff(){
        $em = $this->getDoctrine()->getManager();
        $divisions = $em->getRepository(Division::class)->findDivAvecEquipePlayoff();
        $datesSemaine = $em->getRepository(Championnat::class)->findAll()[0]->getDatesSemaines();
        $datesNextSemaine = $em->getRepository(Championnat::class)->findAll()[0]->getDatesNextSemaines();
        $numSemaine = $em->getRepository(Championnat::class)->findAll()[0]->getSemaine();
        $mapPools = $em->getRepository(MapPool::class)->findAll();
        $rencontres = $em->getRepository(Rencontre::class)->findAll();

        return $this->render('front/equipe/show_matchs_playoff.html.twig',[
            "divisions" => $divisions,
            "numSemaine" => $numSemaine,
            'datesSemaine'=>$datesSemaine,
            'mapPools'=>$mapPools,
            'rencontres'=>$rencontres,
            'numNextSemaine'=> $numSemaine + 1,
            'datesNextSemaine'=>$datesNextSemaine
        ]);
    }


    //Génération aléatoire des rencontres
    function scheduler($teams, $division){
        if (count($teams)%2 != 0){
            $teamBye = new Equipe();
            $teamBye->setNom("BYE");
            $teamBye->setId(0);
            array_push($teams,$teamBye);
        }
        $away = array_splice($teams,(count($teams)/2));
        $home = $teams;
        for ($i=0; $i < count($home)+count($away)-1; $i++){
            for ($j=0; $j<count($home); $j++){
                $round[$i][$j]["Home"]=$home[$j];
                $round[$i][$j]["Away"]=$away[$j];
            }
            if(count($home)+count($away)-1 > 2){
                $temp2 = array_splice($home,1,1);
                $temp = array_shift($temp2);
                array_unshift($away,$temp);
                array_push($home,array_pop($away));
            }
        }
        return $round;
    }

     /**
     * @Route("/rencontre/create", name="create_renc")
     */
    public function creationRencontres(Request $request)
    {
        if($request->isMethod('POST')){
            if($request->request->has('formCreate')) {
                $password = $request->request->get('password');

                if ($password === self::PASSWORD) {
                    $em = $this->getDoctrine()->getManager();
                    $divisions = $em->getRepository('BackBundle:Division')->findDivAvecEquipe();
                    foreach ($divisions as $division) {
                        $equipes = $em->getRepository('BackBundle:Equipe')->findByDiv($division);
                        $schedule = $this->scheduler($equipes, $division);
                        foreach ($schedule AS $round => $games) {
                            foreach ($games AS $play) {
                                $rencontre = new Rencontre();
                                $rencontre->setNumSemaine($round + 1);
                                $rencontre->setEquipeDom($play["Home"]);
                                $rencontre->setEquipeExt($play["Away"]);
                                if($rencontre->getEquipeDom()->getId() != 0 && $rencontre->getEquipeExt()->getId() != 0) {
                                    $em->persist($rencontre);
                                }
                            }
                        }
                    }
                    $em->flush();
                    $request->getSession()->getFlashBag()->add('success', "Les rencontres ont été crééééees");
                    return $this->redirectToRoute('index');

                } else {
                    return $this->render('BackBundle:Rencontre:administration.html.twig', array(
                        'message' => "Wrong password"
                    ));
                }
            }
        }
        return $this->render('front/equipe/administration.html.twig');
    }


}
