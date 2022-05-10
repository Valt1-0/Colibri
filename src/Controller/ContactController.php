<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Contact;
use App\Form\ContactType;

class ContactController extends AbstractController
{
    public function addContact(Request $request): Response
    {
        $contact = new Contact();
        $formContact = $this->createForm(ContactType::class, $contact);
        $formContact->handleRequest($request);

        if ($formContact->isSubmitted() && $formContact->isValid()) {
            $contact = $formContact->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();

            $this->addFlash('success', 'Votre message a bien était envoyé !');

            return $this->redirectToRoute('index');

        } else {

            return $this->render('Contact/contact.html.twig', array('formContact' => $formContact->createView(),));
        }
    }
}
