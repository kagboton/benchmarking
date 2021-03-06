<?php

namespace BenchmarkingBundle\Repository;

/**
 * FonctionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FonctionRepository extends \Doctrine\ORM\EntityRepository
{
    public function getFunctionsByFamilly($famillyNames){
        
        $qb = $this
            ->createQueryBuilder('f')
            ->join('f.famille', 'fm')
            ->addSelect('fm')
        ;
        
        $qb->where($qb->expr()->in('fm.name', $famillyNames));
            
        return $qb->getQuery()->getResult();
        

    }


}
