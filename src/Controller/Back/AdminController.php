<?php

namespace App\Controller\Back;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ParametersType;

/**
 * @IsGranted("ROLE_ADMIN")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/admin/parameters", name="admin_param")
     */
    public function index()
    {
        $form = $this->createForm(ParametersType::class);

        return $this->render('back/admin/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
