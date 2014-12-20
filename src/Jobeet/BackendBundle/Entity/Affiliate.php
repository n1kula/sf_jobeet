<?php

namespace Jobeet\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Affiliate
 *
 * @ORM\Table(name="Affiliate")
 * @ORM\Entity
 */
class Affiliate
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
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255)
     */
    private $token;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;
    
    /**
     * @ORM\OneToMany(targetEntity="CategoryAffiliate", mappedBy="affiliate")
     * @var ArrayCollection
     */
    protected $cateogry_affiliates;


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
     * Set url
     *
     * @param string $url
     * @return Affiliate
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Affiliate
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return Affiliate
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Affiliate
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = new \DateTime();
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cateogry_affiliates = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cateogry_affiliates
     *
     * @param \Jobeet\Bundle\BackendBundle\Entity\CategoryAffiliate $cateogryAffiliates
     * @return Affiliate
     */
    public function addCateogryAffiliate(\Jobeet\Bundle\BackendBundle\Entity\CategoryAffiliate $cateogryAffiliates)
    {
        $this->cateogry_affiliates[] = $cateogryAffiliates;

        return $this;
    }

    /**
     * Remove cateogry_affiliates
     *
     * @param \Jobeet\Bundle\BackendBundle\Entity\CategoryAffiliate $cateogryAffiliates
     */
    public function removeCateogryAffiliate(\Jobeet\Bundle\BackendBundle\Entity\CategoryAffiliate $cateogryAffiliates)
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
}
