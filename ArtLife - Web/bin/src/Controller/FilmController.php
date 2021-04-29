<?php

namespace App\Controller;

use App\Entity\Factor;
use App\Entity\Film;
use App\Repository\FilmRepository;
use App\Form\Film1Type;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use App\Entity\Comments;
use App\Form\Comments1Type;


/**
 * @Route("/film")
 */
class FilmController extends AbstractController
{


    /**
     * @Route("/", name="film_index", methods={"GET"})
     */
    public function index(Request $request,PaginatorInterface $paginator): Response
    {
        // Retrieve the entity manager of Doctrine
        $data=$request->get('data');
        $em = $this->getDoctrine()->getManager();

        // Get some repository of data, in our case we have an Films entity
        $FilmRepository = $em->getRepository(Film::class);

        // Find all the data on the Films table, filter your query as you need
        $allFilmQuery = $FilmRepository->createQueryBuilder('Film')
            ->orWhere('Film.name Like :name ')
            ->setParameter('name', '%'.$data.'%')
            ->getQuery();

        // Paginate the results of the query
        $films = $paginator->paginate(
        // Doctrine Query, not results
            $allFilmQuery,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            6
        );


        return $this->render('film/index.html.twig', [
            'films' => $films,
        ]);
    }






    /**
     * @Route("/admin", name="film_index2", methods={"GET"})
     */
    public function index2(): Response
    {
        $films = $this->getDoctrine()
            ->getRepository(Film::class)
            ->findAll();


        return $this->render('film/indexAdmin.html.twig', [
            'films' => $films,
        ]);
    }

    /**
     * @Route("/admin/new", name="film_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $film = new Film();
        $form = $this->createForm(Film1Type::class, $film);
        $form->handleRequest($request);
        $formView = $form->createView();


        if ($form->isSubmitted() && $form->isValid()) {
            $req=$form->get('image')->getData();
            $film->setImage("/images/Films/".$req) ;
            $req=$form->get('imageb')->getData();
            $film->setImageb("/images/Films/background/".$req) ;

            $entityManager = $this->getDoctrine()->getManager();
            $factor= $entityManager->getRepository(Factor::class)
                ->findOneBy(['name'=>'Kit Harington']);
            $film->addFilmActor($factor);
            $entityManager->persist($film);
            $entityManager->flush();




            return $this->redirectToRoute('film_index2');

        }

        return $this->render('film/new.html.twig', [
            'film' => $film,
            'form' => $formView,
        ]);
    }

    /**
     * @Route("/{id}", name="film_show", methods={"GET"})
     */
    public function show(Film $film,Request $request): Response
    {


        $factors = $this->getDoctrine()
            ->getRepository(Factor::class)
            ->findAll();


        $comments = $this->getDoctrine()
            ->getRepository(Comments::class)
            ->findAll();
        $ids=[];
        foreach($comments as $r) {
            $ids[]=$r->getIdUser();
        }




        $users=$this->getDoctrine()
            ->getRepository(Film::class)
            ->getuserdetails($ids);

        $comment = new Comments();
        $form2 = $this->createForm(Comments1Type::class, $comment);
        $form2->handleRequest($request);

        if ($form2->isSubmitted() && $form2->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('comments_index');
        }

        $form = $this->createForm(Film1Type::class, $film);
        return $this->render('film/show.html.twig', [
            'film' => $film,
            'users' => $users,
            'factors' => $factors,
            'form' => $form->createView(),
            'comments' => $comments,
            'comment' => $comment,
            'form2' => $form2->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="film_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Film $film): Response
    {
        $form = $this->createForm(Film1Type::class, $film);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $req=$form->get('image')->getData();
            $film->setImage("/images/Films/".$req) ;
            $req=$form->get('imageb')->getData();
            $film->setImageb("/images/Films/background/".$req) ;
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('film_index2');
        }

        return $this->render('film/edit.html.twig', [
            'film' => $film,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="film_delete", methods={"POST"})
     */
    public function delete(Request $request, Film $film): Response
    {
        if ($this->isCsrfTokenValid('delete'.$film->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($film);
            $entityManager->flush();

        }

        return $this->redirectToRoute('film_index2');
    }

    /**
     * @Route("/admin/stat", name="film_stati", methods={"GET"})
     */
    public function indexAction(): Response{
        $films = $this->getDoctrine()
            ->getRepository(Film::class)
            ->findAll();

        $em = $this->getDoctrine()->getManager();

        $sci=0;
        $action=0;
        $Drama=0;
        $horror=0;
        $cartoon=0;


        foreach ($films as $Film)
        {
            if ($Film->getGenre() == 'Sci-Fi')  :

                $sci+=1;
            elseif ($Film->getGenre() == 'Action'):

                $action+=1;
            elseif ($Film->getGenre() == 'Drama'):

                $Drama+=1;
            elseif ($Film->getGenre() == 'Horror'):

                $horror+=1;
            elseif ($Film->getGenre() == 'Cartoon'):

                $cartoon+=1;

            endif;

        }


        $Cats = [
            "Sci-Fi" => $sci,
            "Action" => $action,
            "Horror" => $horror,
            "Cartoon" => $cartoon,
            "Drama" => $Drama,
        ];

        return $this->render('film/stat.html.twig', array('piechart' => $Cats));
    }


}
