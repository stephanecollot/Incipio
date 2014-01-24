<?php

namespace mgate\TresoBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * NoteDeFraisRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BVRepository extends EntityRepository
{
    /**
     * 
     * @return array
     */
    public function findAllByMandat() {        
        $entities = $this->findBy(array(), array('mandat' => 'desc', 'dateDeVersement' => 'asc'));
        $bvsParMandat = array();
        foreach($entities as $bv){
            $mandat = $bv->getMandat();
            if(array_key_exists($mandat, $bvsParMandat))
                $bvsParMandat[$mandat][] = $bv;
            else
                $bvsParMandat[$mandat] = array($bv);
        }        
        return $bvsParMandat;
    }
}