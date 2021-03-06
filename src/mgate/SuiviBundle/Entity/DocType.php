<?php
        
/*
This file is part of Incipio.

Incipio is an enterprise resource planning for Junior Enterprise
Copyright (C) 2012-2014 Florian Lefevre.

Incipio is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as
published by the Free Software Foundation, either version 3 of the
License, or (at your option) any later version.

Incipio is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with Incipio as the file LICENSE.  If not, see <http://www.gnu.org/licenses/>.
*/


namespace mgate\SuiviBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \mgate\CommentBundle\Entity;

/** @ORM\MappedSuperclass */
class DocType
{
    /**
     * @var bool
     */
    private $knownSignataire2 = false;
        
    /**
     *
     */
    private $newSignataire2;   
    
    
    /**
     * @var integer $version
     *
     * @ORM\Column(name="version", type="integer", nullable=true)
     */
    private $version;

    /**
     * @ORM\OneToOne(targetEntity="\mgate\CommentBundle\Entity\Thread", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $thread;

    /**
     * @var boolean $redige
     *
     * @ORM\Column(name="redige", type="boolean",nullable=true)
     */
    private $redige;

    /**
     * @var boolean $relu
     *
     * @ORM\Column(name="relu", type="boolean",nullable=true)
     */
    private $relu;

    /**
     * @var boolean $spt1
     *
     * @ORM\Column(name="spt1", type="boolean",nullable=true)
     */
    private $spt1;
    
    /**
     * @var boolean $spt2
     *
     * @ORM\Column(name="spt2", type="boolean",nullable=true)
     */
    private $spt2;
    
    /**
     * @ORM\ManyToOne(targetEntity="mgate\PersonneBundle\Entity\Personne", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $signataire1;
    
    /**
     * @ORM\ManyToOne(targetEntity="mgate\PersonneBundle\Entity\Personne", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $signataire2;

    /**
     * @var \DateTime $dateSignature
     *
     * @ORM\Column(name="dateSignature", type="datetime",nullable=true)
     */
    private $dateSignature;

    /**
     * @var boolean $envoye
     *
     * @ORM\Column(name="envoye", type="boolean",nullable=true)
     */
    private $envoye;

    /**
     * @var boolean $receptionne
     *
     * @ORM\Column(name="receptionne", type="boolean",nullable=true)
     */
    private $receptionne;
    
    /**
     * @var integer $generer
     * 
     * @ORM\Column(name="generer", type="integer",nullable=true)
     */
    private $generer;

    public function __construct()
    {
        $this->setVersion(1);
    }
    
    
/// rajout à la main
    public function isKnownSignataire2()
    {
        return $this->knownSignataire2;
    }
    public function setKnownSignataire2($boolean)
    {
        $this->knownSignataire2 = $boolean;
    }
    
    public function getNewSignataire2()
    {
        return $this->newSignataire2;
    }
    public function setNewSignataire2($var)
    {
        $this->newSignataire2 = $var;

    }
/// fin rajout
    
    /**
     * Set version
     *
     * @param integer $version
     * @return DocType
     */
    public function setVersion($version)
    {
        $this->version = $version;
    
        return $this;
    }

    /**
     * Get version
     *
     * @return integer 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set thread
     *
     * @param \mgate\CommentBundle\Entity\Thread $thread
     * @return Prospect
     */
    public function setThread(\mgate\CommentBundle\Entity\Thread $thread)
    {
        $this->thread = $thread;
    
        return $this;
    }

    /**
     * Get thread
     *
     * @return mgate\CommentBundle\Entity\Thread 
     */
    public function getThread()
    {
        return $this->thread;
    }

    /**
     * Set redige
     *
     * @param boolean $redige
     * @return DocType
     */
    public function setRedige($redige)
    {
        $this->redige = $redige;
    
        return $this;
    }

    /**
     * Get redige
     *
     * @return boolean 
     */
    public function getRedige()
    {
        return $this->redige;
    }

    /**
     * Set relu
     *
     * @param boolean $relu
     * @return DocType
     */
    public function setRelu($relu)
    {
        $this->relu = $relu;
    
        return $this;
    }

    /**
     * Get relu
     *
     * @return boolean 
     */
    public function getRelu()
    {
        return $this->relu;
    }

    /**
     * Set spt1
     *
     * @param boolean $spt1
     * @return DocType
     */
    public function setSpt1($spt1)
    {
        $this->spt1 = $spt1;
    
        return $this;
    }

    /**
     * Get spt1
     *
     * @return boolean 
     */
    public function getSpt1()
    {
        return $this->spt1;
    }

    /**
     * Set dateSignature
     *
     * @param \DateTime $dateSignature
     * @return DocType
     */
    public function setDateSignature($dateSignature)
    {
        $this->dateSignature = $dateSignature;
    
        return $this;
    }

    /**
     * Get dateSignature
     *
     * @return \DateTime 
     */
    public function getDateSignature()
    {
        return $this->dateSignature;
    }

    /**
     * Set envoye
     *
     * @param boolean $envoye
     * @return DocType
     */
    public function setEnvoye($envoye)
    {
        $this->envoye = $envoye;
    
        return $this;
    }

    /**
     * Get envoye
     *
     * @return boolean 
     */
    public function getEnvoye()
    {
        return $this->envoye;
    }

    /**
     * Set receptionne
     *
     * @param boolean $receptionne
     * @return DocType
     */
    public function setReceptionne($receptionne)
    {
        $this->receptionne = $receptionne;
    
        return $this;
    }

    /**
     * Get receptionne
     *
     * @return boolean 
     */
    public function getReceptionne()
    {
        return $this->receptionne;
    }

    /**
     * Set spt2
     *
     * @param boolean $spt2
     * @return DocType
     */
    public function setSpt2($spt2)
    {
        $this->spt2 = $spt2;
    
        return $this;
    }

    /**
     * Get spt2
     *
     * @return boolean 
     */
    public function getSpt2()
    {
        return $this->spt2;
    }

    /**
     * Set signataire1
     *
     * @param \mgate\PersonneBundle\Entity\Personne $signataire1
     * @return DocType
     */
    public function setSignataire1(\mgate\PersonneBundle\Entity\Personne $signataire1)
    {
        $this->signataire1 = $signataire1;
    
        return $this;
    }

    /**
     * Get signataire1
     *
     * @return \mgate\PersonneBundle\Entity\Personne 
     */
    public function getSignataire1()
    {
        return $this->signataire1;
    }

    /**
     * Set signataire2
     *
     * @param \mgate\PersonneBundle\Entity\Personne $signataire2
     * @return DocType
     */
    public function setSignataire2(\mgate\PersonneBundle\Entity\Personne $signataire2)
    {
        $this->signataire2 = $signataire2;
    
        return $this;
    }

    /**
     * Get signataire2
     *
     * @return \mgate\PersonneBundle\Entity\Personne 
     */
    public function getSignataire2()
    {
        return $this->signataire2;
    }


    /**
     * Set generer
     *
     * @param integer $generer
     * @return DocType
     */
    public function setGenerer($generer)
    {
        $this->generer = $generer;
    
        return $this;
    }

    /**
     * Get generer
     *
     * @return integer 
     */
    public function getGenerer()
    {
        return $this->generer;
    }
}