<?php

namespace App\Controller;
use App\Entity\Brand;
use App\Form\BrandType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use function PHPUnit\Framework\throwException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;



/**
 * @IsGranted("ROLE_USER")
 */

class BrandController extends AbstractController
{

    /**
     * @Route ("/brand", name="brand_index")
     */
    public function indexBrand() {
        $brands = $this->getDoctrine()
                       ->getRepository(Brand::class)
                       ->findAll();
        return $this->render(
            "brand/index.html.twig",
            [
               "brands" => $brands 
            ]
        );
    }
    
    /**
     * @Route("/brand/detail/{id}", name="brand_detail")
     */
    public function detailBook($id) {
        $brand = $this->getDoctrine()->getRepository(Brand::class)->find($id);

        return $this->render(
            'brand/detail.html.twig',
            [
                'brand' => $brand
            ]
        );
    }
    /**
     * @Route("/brand/create", name = "brand_create")
     */

    public function createnewbrand(Request $request) {
        $brand = new brand();        
        $form = $this->createForm(BrandType::class, $brand);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($brand);
            $manager->flush();
            $this->addFlash("Info","Add successfully !");
            return $this->redirectToRoute("brand_index");
        } 

        return $this->render(
            "brand/create.html.twig",
            [
                'form' => $form->createView()
            ]
        );
    }

    /**
    * @Route ("/brand/update/{id}", name="brand_update")
    */
    public function updateBrand(Request $request, $id) {
        $brand = $this->getDoctrine()
                      ->getRepository(Brand::class)
                      ->find($id);      
        $form = $this->createForm(BrandType::class,$brand);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($brand);
            $manager->flush();
            $this->addFlash("Info","Update successfully !");
            return $this->redirectToRoute("brand_index");
        }  

        return $this->render(
            "brand/update.html.twig",
            [
                'form' => $form->createView()
            ]
        );
    }

    /**
     * @Route ("/brand/delete/{id}", name="brand_delete")
     */
    public function deleteBrand($id) {
        $brand = $this->getDoctrine()
                      ->getRepository(Brand::class)
                      ->find($id);
        if ($brand == null) {
            $this->addFlash("Error","Delete failed !");
            return $this->redirectToRoute("brand_index");
        }
        //if brand is not null
        $manager = $this->getDoctrine()
                        ->getManager();
        $manager->remove($brand);
        $manager->flush();
        $this->addFlash("Info","Delete succeed !");
        return $this->redirectToRoute("brand_index");
    }
}
