<?php

namespace App\Controller;
use App\Entity\Phone;
use App\Form\PhoneType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use function PHPUnit\Framework\throwException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @IsGranted("ROLE_USER")
 */

class PhoneController extends AbstractController
{
    /**
     * @Route("/phone", name="phone_index")
     */
    public function indexPhone() 
    {
        $phones = $this->getDoctrine()->getRepository(Phone::class)->findAll();

        return $this->render(
            'phone/index.html.twig',
            [
                'phones' => $phones
            ]
        );
    }

    /**
     * @Route("/phone/detail/{id}", name="phone_detail")
     */
    public function detailPhone($id) {
        $phone = $this->getDoctrine()->getRepository(Phone::class)->find($id);

        return $this->render(
            'phone/detail.html.twig',
            [
                'phone' => $phone
            ]
        );
    }

    /**
     * * @IsGranted("ROLE_ADMIN")
     * @Route("/phone/delete/{id}", name="phone_delete")
     */
    public function deletePhone($id) {
        $phone = $this->getDoctrine()->getRepository(Phone::class)->find($id);

        if ($phone == null) {
            $this->addFlash("Error", "Delete phone failed !");
            return $this->redirectToRoute("phone_index");
        }

        $manager = $this->getDoctrine()->getManager();
        $manager->remove($phone);
        $manager->flush();

        $this->addFlash("Info","Delete phone succeed !");
        return $this->redirectToRoute("phone_index");
    }

     /**
      * * @IsGranted("ROLE_ADMIN")
     * @Route("/phone/create", name="phone_create")
     */
    public function createPhone(Request $request) {
        $phone = new Phone();
        $form = $this->createForm(PhoneType::class,$phone);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //get Image from uploaded file
            $image = $phone ->getImage();
            //create an unique image name
            $fileName = md5(uniqid());
            //get image extension
            $fileExtension = $image->guessExtension();
            //merge image name & image extension => get a complete image name
            $imageName = $fileName . '.' . $fileExtension;
            //move upload file to a predefined location
            try {
                $image->move(
                    $this->getParameter('phone_image'), $imageName
                );
            } catch (FileException $e) {
                throwException($e);
            }
            //set imageName to database
            $phone->setImage($imageName);

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($phone);
            $manager->flush();

            $this->addFlash("Info", "Create phone succeed !");
            return $this->redirectToRoute("phone_index"); 
        }

        return $this->render(
            'phone/create.html.twig',
            [
                'form' => $form->createView()
            ]
        );
    }

    /**
     * * @IsGranted("ROLE_ADMIN")
     * @Route("phone/update/{id}", name="phone_update")
     */
    public function updatePhone(Request $request, $id) {
        $phone = $this->getDoctrine()->getRepository(Phone::class)->find($id);
        $form = $this->createForm(PhoneType::class,$phone);
        $form->handleRequest($request); 

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadFile = $form['Image']->getData();
            if ($uploadFile != null) {
                //get Image from uploaded file
                $image = $phone->getImage();

                //create an unique image name
                $fileName = md5(uniqid());
                //get image extension
                $fileExtension = $image->guessExtension();
                //merge image name & image extension => get a complete image name
                $imageName = $fileName . '.' . $fileExtension;

                //move upload file to a predefined location
                try {
                    $image->move(
                        $this->getParameter('phone_image'), $imageName
                    );
                } catch (FileException $e) {
                    throwException($e);
                }

                //set imageName to database
                $phone->setImage($imageName);
            } 

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($phone);
            $manager->flush();

            $this->addFlash("Info", "Update phone succeed !");
            return $this->redirectToRoute("phone_index"); 
        }

        return $this->render(
            'phone/update.html.twig',
            [
                'form' => $form->createView()
            ]
        );
    }
}
