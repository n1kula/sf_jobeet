<?php

namespace Jobeet\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Category
 *
 * @ORM\Table(name="Category")
 * @ORM\Entity
 */
class Category
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Job", mappedBy="category")
     * @var ArrayCollection
     */
    protected $jobs;
    
    /**
     * @ORM\OneToMany(targetEntity="CategoryAffiliate", mappedBy="category")
     * @var ArrayCollection
     */
    protected $cateogry_affiliates;
        
        
    public function __construct()
    {
        $this->jobs = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add jobs
     *
     * @param \Jobeet\BackendBundle\Entity\Job $jobs
     * @return Category
     */
    public function addJob(\Jobeet\BackendBundle\Entity\Job $jobs)
    {
        $this->jobs[] = $jobs;

        return $this;
    }

    /**
     * Remove jobs
     *
     * @param \Jobeet\BackendBundle\Entity\Job $jobs
     */
    public function removeJob(\Jobeet\BackendBundle\Entity\Job $jobs)
    {
        $this->jobs->removeElement($jobs);
    }

    /**
     * Get jobs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * Add cateogry_affiliates
     *
     * @param \Jobeet\BackendBundle\Entity\CategoryAffiliate $cateogryAffiliates
     * @return Category
     */
    public function addCateogryAffiliate(\Jobeet\BackendBundle\Entity\CategoryAffiliate $cateogryAffiliates)
    {
        $this->cateogry_affiliates[] = $cateogryAffiliates;

        return $this;
    }

    /**
     * Remove cateogry_affiliates
     *
     * @param \Jobeet\Bundle\BackendBundle\Entity\CategoryAffiliate $cateogryAffiliates
     */
    public function removeCateogryAffiliate(\Jobeet\BackendBundle\Entity\CategoryAffiliate $cateogryAffiliates)
    {
        $this->cateogry_affiliates->removeElement($cateogryAffiliates);
    }

    /**
     * Get cateogry_affiliates
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCateogryAffiliates()
    {
        return $this->cateogry_affiliates;
    }
    //category class to be used by the Category drop down from the edit job form
    public function __toString()
    {
         return $this->getName();
    }
}
