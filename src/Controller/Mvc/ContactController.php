<?php

namespace App\Controller\Mvc;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route("/contact", name: "contact")]
class ContactController extends AbstractController
{
    #[Route("/", name: "_index")]
    public function index(): Response
    {
        $form = $this->createForm(ContactType::class);
        return $this->render("pages/contact/form.html.twig", [
            "form" => $form->createView()
        ]);
    }

    #[Route("/confirm", name: "_confirm", methods: ["POST"])]
    public function confirm(
        Request $request
    ): Response {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        if (!$form->isSubmitted() || !$form->isValid()) {
            return $this->render('pages/contact/form.html.twig', [
                "form" => $form->createView()
            ]);
        }
        return $this->render('pages/contact/confirm.html.twig', [
            "form" => $form->createView(),
            "confirm" => $this->createFormBuilder()->getForm()->createView()
        ]);
    }

    #[Route("/complete", name: "_complete")]
    public function complete(): Response
    {
        return $this->render("pages/contact/complete.html.twig", []);
    }
}