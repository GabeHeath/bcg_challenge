<?php

namespace BCG\ContactBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class AgencyRepository extends EntityRepository
{
	// Get all agencies and eager load users
	public function getAgencies()
    {
        $agencies = $this->createQueryBuilder('a')
                    ->select('a, u')
                    ->leftJoin('a.users', 'u')
                    ->addOrderBy('a.name', 'ASC');
                    
        return $agencies->getQuery()
                        ->getResult();
    }
}
