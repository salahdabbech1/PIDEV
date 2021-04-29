<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     *  * @param AuthenticationUtils $utils
     */
    public function index(AuthenticationUtils $utils): Response
    {
        $error =$utils->getLastAuthenticationError();

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'error'       => $error,

        ]);
    }


    /**
     * @Route("/SignUp", name="user_SignUp", methods={"GET","POST"})
     */
    public function new(Request $request,\Swift_Mailer $mailer): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $req=$form->get('image')->getData();
            $user->setImage("/images/".$req) ;
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            $message = (new \Swift_Message('Welcome To Artlife'))
                ->setFrom('send@example.com')
                ->setTo($user->getEmail())
                ->setBody($this->renderView(
                // templates/emails/registration.html.twig
                    'home/email.html.twig' ,
                    ['name' => $user->getName()]
                ),
                    'text/html'
                );


            $mailer->send($message);
            return $this->redirectToRoute('home');
        }

        return $this->render('home/SignUp.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

}
