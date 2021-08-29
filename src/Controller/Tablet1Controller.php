<?php

namespace App\Controller;
use App\Form\TabletType;
use App\Entity\Tablet1;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use function PHPUnit\Framework\throwException;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @IsGranted("ROLE_USER")
 */

class Tablet1Controller extends AbstractController
{
    /**
     * @Route("/tablet", name="tablet_index")
     */
    public function indexTablet() 
    {
        $tablets = $this->getDoctrine()->getRepository(Tablet1::class)->findAll();

        return $this->render(
            'tablet1/index.html.twig',
            [
                'tablets' => $tablets
            ]
        );
    }

    /**
     * @Route("/tablet/detail/{id}", name="tablet_detail")
     */
    public function detailPhone($id) {
        $tablet = $this->getDoctrine()->getRepository(Tablet1::class)->find($id);

        return $this->render(
            'tablet1/detail.html.twig',
            [
                'tablet' => $tablet
            ]
        );
    }
    /**
     * @Route("/tablet/create", name = "tablet_create")
     */

    public function createnewtablet(Request $request) {
        $tablet = new tablet1();        
        $form = $this->createForm(TabletType::class, $tablet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($tablet);
            $manager->flush();
            $this->addFlash("Info","Add successfully !");
            return $this->redirectToRoute("tablet_index");
        } 

        return $this->render(
            "tablet1/create.html.twig",
            [
                'form' => $form->createView()
            ]
        );
    }
    /**
     * @Route("/tablet/update/{id}", name = "tablet_update")
     */

    public function updateTablet(Request $request, $id) {  
        $tablet = $this->getDoctrine()->getRepository(Tablet1::class)->find($id);    
        $form = $this->createForm(TabletType::class, $tablet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($tablet);
            $manager->flush();
            $this->addFlash("Info","Add successfully !");
            return $this->redirectToRoute("tablet_index");
        } 

        return $this->render(
            "tablet1/create.html.twig",
            [
                'form' => $form->createView()
            ]
        );
    }
    /**
     * @Route("/tablet/delete/{id}", name="tablet_delete")
     */
    public function deletePhone($id) {
        $tablet = $this->getDoctrine()->getRepository(Tablet1::class)->find($id);

        if ($tablet == null) {
            $this->addFlash("Error", "Delete tablet failed !");
            return $this->redirectToRoute("tablet_index");
        }

        $manager = $this->getDoctrine()->getManager();
        $manager->remove($tablet);
        $manager->flush();

        $this->addFlash("Info","Delete tablet succeed !");
        return $this->redirectToRoute("tablet_index");
    }

}
