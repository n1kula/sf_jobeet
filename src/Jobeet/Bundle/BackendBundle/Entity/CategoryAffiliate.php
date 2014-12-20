<?php

namespace Jobeet\Bundle\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryAffiliate
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class CategoryAffiliate
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
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="category_affiliates")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     *
     * @var Jobeet\BackendBundle\Entity\CategoryAffiliate
     */
    private $category_id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Affiliate", inversedBy="category_affiliates")
     * @ORM\JoinColumn(name="affiliate_id", referencedColumnName="id")
     *
     * @var Jobeet\BackendBundle\Entity\CategoryAffiliate
     */
    private $affiliate_id;

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
     * Set category_id
     *
     * @param \Jobeet\Bundle\BackendBundle\Entity\Category $categoryId
     * @return CategoryAffiliate
     */
    public function setCategoryId(\Jobeet\Bundle\BackendBundle\Entity\Category $categoryId = null)
    {
        $this->category_id = $categoryId;

        return $this;
    }

    /**
     * Get category_id
     *
     * @return \Jobeet\Bundle\BackendBundle\Entity\Category 
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * Set affiliate_id
     *
     * @param \Jobeet\Bundle\BackendBundle\Entity\Affiliate $affiliateId
     * @return CategoryAffiliate
     */
    public function setAffiliateId(\Jobeet\Bundle\BackendBundle\Entity\Affiliate $affiliateId = null)
    {
        $this->affiliate_id = $affiliateId;

        return $this;
    }

    /**
     * Get affiliate_id
     *
     * @return \Jobeet\Bundle\BackendBundle\Entity\Affiliate 
     */
    public function getAffiliateId()
    {
        return $this->affiliate_id;
    }
}
