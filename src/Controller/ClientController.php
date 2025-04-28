<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Client;
use App\Entity\Statut;
use App\Entity\Formation;
use App\Entity\SessionFormation;
use App\Entity\PlanFormation;

use App\Repository\ClientRepository;
use App\Repository\StatutRepository;
use App\Repository\FormationRepository;
use App\Repository\SessionFormationRepository;
use App\Repository\PlanFormationRepository;

use Doctrine\Persistence\ManagerRegistry;

class ClientController extends AbstractController
{
    #[Route('/client', name: 'client')]
    public function authentif(Request $request, ManagerRegistry $doctrine, AuthenticationUtils $authenticationUtils)
    {
        $this->denyAccessUnlessGranted('ROLE_CLIENT');

        // On récupère l'utilisateur authentifié
		$user = $this->getUser();
		$username = $this->getUser()->getUsername();
		//var_dump($user);
		// On controle si quelqu'un est connecté et possède le rôle ADMIN
		if ($user && (in_array("ROLE_CLIENT", $user->getRoles())))
		{
            return $this->render('client/index.html.twig', Array('username' => $username));
		}
		else
		{
			// Sinon on redirige vers la connexion
			// get the login error if there is one
			$error = $authenticationUtils->getLastAuthenticationError();
			// last username entered by the user
			$lastUsername = $authenticationUtils->getLastUsername();
			return $this->redirectToRoute('login');
		}
    }



    #[Route('/client/sessions/non_totalements_pourvues',name: 'sessions_ntp')] # ntp = non totalements pourvues
    public function sessions_ntp(Request $request, ManagerRegistry $doctrine)
    {
        $this->denyAccessUnlessGranted('ROLE_CLIENT');
        $em = $doctrine->getManager();
		$rep = $em->getRepository(SessionFormation::class);

        $queryBuilder = $rep->createQueryBuilder('sf')
        ->innerJoin('sf.formation', 'f')
        ->addSelect('f')
        ->where('sf.dateDebut BETWEEN \'2025-01-04\' AND \'2025-05-31\'')
        ->andWhere('sf.nbPlaces > sf.nbInscrits');

        $resultat = $queryBuilder->getQuery()->getResult();

        return $this->render('client/session_ntp.html.twig', Array('lesSessionsNTP' => $resultat));
    }



    #[Route('/client/sessions/non_inscrit',name: 'sessions_ni')] # ni = Non Inscrit
    public function sessions_ni(Request $request, ManagerRegistry $doctrine)
    {        
        $this->denyAccessUnlessGranted('ROLE_CLIENT');
        $em = $doctrine->getManager();
		$rep = $em->getRepository(SessionFormation::class);

        $queryBuilder = $rep->createQueryBuilder('sf')
        ->innerJoin('sf.formation', 'f')
        ->addSelect('f')
        ->where('sf.dateDebut BETWEEN \'2025-01-04\' AND \'2025-05-31\'');
        
        $resultat = $queryBuilder->getQuery()->getResult();
        return $this->render('client/session_ni.html.twig', Array("lesSessionsNI" => $resultat));
    }

    
    
    
    #[Route('/client/sessions/plan_formation',name: 'sessions_dmpf')] # dmpf = dans mon plan de formation
    public function sessions_dmpf(Request $request, ManagerRegistry $doctrine)
    {
        $this->denyAccessUnlessGranted('ROLE_CLIENT');

        return $this->render('client/session_dmpf.html.twig');
    }


    // Sessions non closes
    #[Route('/client/sessions/non_closes',name: 'sessions_nc')]
    public function sessions_nc()
    {
        $this->denyAccessUnlessGranted('ROLE_CLIENT');


        return $this->render('client/session_nc.html.twig');
    }
}
