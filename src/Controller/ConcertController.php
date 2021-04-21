<?php

namespace App\Controller;

use App\Entity\Concert;
use App\Entity\Musician;
use App\Form\ConcertType;
use App\Repository\ConcertRepository;
use App\Repository\MusicianRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Flasher\Prime\Factory\NotificationFactory;
use Flasher\Prime\Storage\StorageManagerInterface;
use Flasher\Toastr\Prime\ToastrFactory;
/**
 * @Route("/concert")
 */
class ConcertController extends AbstractController
{
    /**
     * @Route("/front", name="concert_index2")
     */
    public function index2(Request $request,PaginatorInterface $paginator): Response
    {
        // Retrieve the entity manager of Doctrine
        $data=$request->get('data');
        $em = $this->getDoctrine()->getManager();

        // Get some repository of data, in our case we have an Concerts entity
        $ConcertRepository = $em->getRepository(Concert::class);

        // Find all the data on the Concerts table, filter your query as you need
        $allConcertQuery = $ConcertRepository->createQueryBuilder('Concert')
            ->orWhere('Concert.name Like :name ')
            ->setParameter('name', '%'.$data.'%')
            ->getQuery();

        // Paginate the results of the query
        $concerts = $paginator->paginate(
        // Doctrine Query, not results
            $allConcertQuery,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            3
        );


        return $this->render('concert/indexFront.html.twig', [
            'concerts' => $concerts,
        ]);
    }
    /**
     * @Route("/exportXML",  name="export")
     */
    public function export()
    {
        $spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setTitle('User List');
        $sheet->getCell('A1')->setValue('Nom');
        $sheet->getCell('B1')->setValue('Id musicien');
        $sheet->getCell('C1')->setValue('Musiques');

        // Increase row cursor after header write
        $sheet->fromArray($this->getData(),null, 'A2', true);


        $writer = new Xlsx($spreadsheet);

        $writer->save('concerts.xlsx');
        $this->addFlash('success','Fichier Excel crée avec succès');

        return $this->redirectToRoute('concert_index');
    }
    /**
     * @Route("/", name="concert_index", methods={"GET"})
     */
    public function index(): Response
    {
        $concerts = $this->getDoctrine()
            ->getRepository(Concert::class)
            ->findAll();

        return $this->render('concert/index.html.twig', [
            'concerts' => $concerts,
        ]);
    }

    /**
     * @Route("/new", name="concert_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $concert = new Concert();
        $form = $this->createForm(ConcertType::class, $concert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $req=$form->get('image')->getData();
            $concert->setImage("images/Concerts/".$req) ;
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($concert);
            $entityManager->flush();
            $this->addFlash('success','Concert ajouté avec succès');

            return $this->redirectToRoute('concert_index');
        }

        return $this->render('concert/new.html.twig', [
            'concert' => $concert,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="concert_show", methods={"GET"})
     */
    public function show(Concert $concert): Response
    {
        return $this->render('concert/show.html.twig', [
            'concert' => $concert,
        ]);
    }

    /**
     * @Route("/front/{id}", name="concert_front", methods={"GET"})
     */
    public function showfront(Concert $concert,MusicianRepository $musicianRepository): Response
    {
        return $this->render('concert/showfront.html.twig', [
            'concert' => $concert,
            'musicians' => $musicianRepository->findBy(array('name'=>$concert->getIdmusician())),
        ]);
    }
    /**
     * @Route("/{id}/edit", name="concert_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Concert $concert): Response
    {
        $form = $this->createForm(ConcertType::class, $concert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $req=$form->get('image')->getData();
            $concert->setImage("images/Concerts/".$req) ;
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('concert_index');
        }

        return $this->render('concert/edit.html.twig', [
            'concert' => $concert,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="concert_delete", methods={"POST"})
     */
    public function delete(Request $request, Concert $concert): Response
    {
        if ($this->isCsrfTokenValid('delete'.$concert->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($concert);
            $entityManager->flush();
        }

        return $this->redirectToRoute('concert_index');
    }
    /**
     * @Route ("/Supp/{id}",name="deleteC")
     */
    function Supprimer($id,ConcertRepository $repo){
        $concert=$repo->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($concert);
        $em->flush();
        return $this->redirectToRoute('concert_index');}

    private function getData(): array
    {
        /**
         * @var $concert Concert[]
         */
        $list = [];
        $concerts = $this->getDoctrine()->getRepository(Concert::class)->findAll();

        foreach ($concerts as $concert) {
            $list[] = [
                $concert->getName(),
                $concert->getIdmusician(),
                $concert->getMusics()
            ];
        }
        return $list;
    }

}
