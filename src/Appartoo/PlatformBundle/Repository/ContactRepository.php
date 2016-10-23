<?php
// src/Appartoo/PlatformBundle/Repository/ContactRepository.php

namespace Appartoo\PlatformBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;

class ContactRepository extends EntityRepository
{
  public function getContacts($page, $nbPerPage,$uid)
  {
    $query = $this->createQueryBuilder('a')
      // Jointure sur l'attribut image
      /*->leftJoin('a.image', 'i')
      ->addSelect('i')*/
      ->leftjoin('a.user', 'u')
      ->where('u.id = :aid')
      ->setParameter('aid', $uid)
      ->addSelect('u')
      ->leftJoin('a.image', 'i')
      ->addSelect('i')
      //->orderBy('a.id', 'DESC')
      ->getQuery();

    $query
      // On définit l'annonce à partir de laquelle commencer la liste
      ->setFirstResult(($page-1) * $nbPerPage)
      // Ainsi que le nombre d'annonce à afficher sur une page
      ->setMaxResults($nbPerPage)
    ;

    // Enfin, on retourne l'objet Paginator correspondant à la requête construite
    // (n'oubliez pas le use correspondant en début de fichier)
    return new Paginator($query, true);
  }

  public function myFindAll()
  {
    // Méthode 1 : en passant par l'EntityManager
    $queryBuilder = $this->_em->createQueryBuilder()
      ->select('a')
      ->from($this->_entityName, 'a')
    ;
    // Dans un repository, $this->_entityName est le namespace de l'entité gérée
    // Ici, il vaut donc OC\PlatformBundle\Entity\Advert

    // Méthode 2 : en passant par le raccourci (je recommande)
    $queryBuilder = $this->createQueryBuilder('a');

    // On n'ajoute pas de critère ou tri particulier, la construction
    // de notre requête est finie

    // On récupère la Query à partir du QueryBuilder
    $query = $queryBuilder->getQuery();

    // On récupère les résultats à partir de la Query
    $results = $query->getResult();

    // On retourne ces résultats
    return $results;
  }

  public function myFind()
  {
    $qb = $this->createQueryBuilder('a');

    // On peut ajouter ce qu'on veut avant
    $qb
      ->where('a.user.id = :user')
      ->setParameter('user', 'user')
    ;

    // On peut ajouter ce qu'on veut après
    $qb->orderBy('a.id', 'DESC');

    return $qb
      ->getQuery()
      ->getResult()
    ;
  }

}