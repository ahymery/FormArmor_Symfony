<?php

namespace App\Repository;

use App\Entity\SessionFormation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SessionFormation>
 *
 * @method SessionFormation|null find($id, $lockMode = null, $lockVersion = null)
 * @method SessionFormation|null findOneBy(array $criteria, array $orderBy = null)
 * @method SessionFormation[]    findAll()
 * @method SessionFormation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SessionFormationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SessionFormation::class);
    }

    public function listeSessions() // Liste toutes les sessions avec pagination
	{
		$queryBuilder = $this->createQueryBuilder('s');

		// On n'ajoute pas de critère ou tri particulier ici car on veut toutes les sessions, la construction
		// de notre requête est donc finie

		// On récupère la Query à partir du QueryBuilder
		$query = $queryBuilder->getQuery();

		// On gère ensuite la pagination grace au service KNPaginator
		return $query->getResult();
	}
	public function suppSession($id) // Suppression de la session d'identifiant $id
	{
		$qb = $this->createQueryBuilder('s');
		$query = $qb->delete('App\Entity\SessionFormation', 's')
		  ->where('s.id = :id')
		  ->setParameter('id', $id);
		
		return $qb->getQuery()->getResult();
	}

	public function sessionsNTP()
	{
		// SELECT f.libelle, f.niveau, sf.date_debut, sf.nb_places, sf.nb_inscrits 
		// FROM session_formation sf 
		// INNER JOIN formation f ON sf.formation_id = f.id 
		// WHERE sf.date_debut BETWEEN '2025-04-01' AND '2025-05-31' 
		// AND sf.nb_places > sf.nb_inscrits;
		return $this->createQueryBuilder('sf')
        ->innerJoin('sf.sessions', 's')
        ->where('s.date_debut BETWEEN :startDate AND :endDate')
        ->setParameter('startDate', $startDate)
        ->setParameter('endDate', $endDate)
        ->getQuery()
        ->getResult();
	}

}
