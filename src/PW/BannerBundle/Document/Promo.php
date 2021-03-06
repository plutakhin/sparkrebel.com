<?php

namespace PW\BannerBundle\Document;

use PW\ApplicationBundle\Document\AbstractDocument,
    Symfony\Component\Validator\Constraints as Assert,
    Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB,
    Gedmo\Mapping\Annotation as Gedmo;

/**
 * Promo
 *
 * @MongoDB\Document(collection="promos", repositoryClass="PW\BannerBundle\Repository\PromoRepository")
 */
class Promo extends AbstractDocument
{
    /**
     * @MongoDB\Id
     */
    protected $id;
    
    /**
     * @var string
     * @MongoDB\String
     */
    protected $description;
    
    /**
     * @var string
     * @MongoDB\String
     * @Assert\NotBlank(message="Promo Url cannot be left blank.")
     */
    protected $url;
    
    /**
     * @MongoDB\Boolean
     */
    protected $isUrlTargetBlank; // open link in new window?
    
    /**
     * @var \PW\AssetBundle\Document\Asset
     * @MongoDB\ReferenceOne(targetDocument="PW\AssetBundle\Document\Asset")
     */
    protected $image;

    /**
     * @MongoDB\Date
     */
    protected $startDate;
    
    /**
     * @MongoDB\Date
     */
    protected $endDate;

    /**
     * @MongoDB\ReferenceOne(targetDocument="PW\UserBundle\Document\User")
     */
    protected $user;

    /**
     * @MongoDB\Boolean
     */
    protected $inMyBrands;
    
    /**
     * @MongoDB\Boolean
     */
    protected $inMyStream;

    /**
     * @MongoDB\Boolean
     */
    protected $inShop;

    /**
     * @MongoDB\Boolean
     */
    protected $inAllCategories;
    
    /**
     * @MongoDB\Boolean
     */
    protected $isActive;
    
    /**
     * @Gedmo\Timestampable(on="create")
     * @MongoDB\Date
     */
    protected $created;
    
    /**
     * @MongoDB\ReferenceOne(targetDocument="PW\UserBundle\Document\User")
     */
    protected $createdBy;
    
    /**
     * @Gedmo\Timestampable(on="update")
     * @MongoDB\Date
     */
    protected $modified;

    /**
     * @MongoDB\ReferenceOne(targetDocument="PW\UserBundle\Document\User")
     */
    protected $modifiedBy;

    /**
     * @MongoDB\Date
     */
    protected $deleted;

    /**
     * @MongoDB\ReferenceOne(targetDocument="PW\UserBundle\Document\User")
     */
    protected $deletedBy;
    
    
    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Set url
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Get url
     *
     * @return string $url
     */
    public function getUrl()
    {
        return $this->url;
    }
    
    /**
     * Set isUrlTargetBlank
     *
     * @param boolean $isUrlTargetBlank
     */
    public function setIsUrlTargetBlank($isUrlTargetBlank)
    {
        $this->isUrlTargetBlank = $isUrlTargetBlank;
    }

    /**
     * Get isUrlTargetBlank
     *
     * @return boolean $isUrlTargetBlank
     */
    public function getIsUrlTargetBlank()
    {
        return $this->isUrlTargetBlank;
    } 
    
    /**
     * Set image
     *
     * @param PW\AssetBundle\Document\Asset $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }
    
    /**
     * Get image
     *
     * @return PW\AssetBundle\Document\Asset $image
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * Set bannerFile
     *
     * @param UploadedFile $bannerFile
     */
    public function setBannerFile($bannerFile)
    {
        //$this->banner = $banner;
    }

    /**
     * Get bannerFile
     *
     * @return UploadedFile $bannerFile
     */
    public function getBannerFile()
    {
        //return $this->banner;
    }
    
    /**
     * Set startDate
     *
     * @param date $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * Get startDate
     *
     * @return date $startDate
     */
    public function getStartDate()
    {
        return $this->startDate;
    }
    
    /**
     * Set endDate
     *
     * @param date $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * Get endDate
     *
     * @return date $endDate
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
    
    /**
     * Set user
     *
     * @param $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return $user
     */
    public function getUser()
    {
        return $this->user;
    }
    
    /**
     * Set inMyStream
     *
     * @param boolean $inMyStream
     */
    public function setInMyStream($inMyStream)
    {
        $this->inMyStream = $inMyStream;
    }

    /**
     * Get inMyStream
     *
     * @return boolean $inMyStream
     */
    public function getInMyStream()
    {
        return $this->inMyStream;
    }
    
    /**
     * Set inMyBrands
     *
     * @param boolean $inMyBrands
     */
    public function setInMyBrands($inMyBrands)
    {
        $this->inMyBrands = $inMyBrands;
    }

    /**
     * Get inMyBrands
     *
     * @return boolean $inMyBrands
     */
    public function getInMyBrands()
    {
        return $this->inMyBrands;
    }    
    
    /**
     * Set inShop
     *
     * @param boolean $inShop
     */
    public function setInShop($inShop)
    {
        $this->inShop = $inShop;
    }

    /**
     * Get inShop
     *
     * @return boolean $inShop
     */
    public function getInShop()
    {
        return $this->inShop;
    }   
    
    /**
     * Set inAllCategories
     *
     * @param boolean $inAllCategories
     */
    public function setInAllCategories($inAllCategories)
    {
        $this->inAllCategories = $inAllCategories;
    }

    /**
     * Get inAllCategories
     *
     * @return boolean $inAllCategories
     */
    public function getInAllCategories()
    {
        return $this->inAllCategories;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    /**
     * Get isActive
     *
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set created
     *
     * @param date $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * Get created
     *
     * @return date $created
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set createdBy
     *
     * @param PW\UserBundle\Document\User $createdBy
     */
    public function setCreatedBy(\PW\UserBundle\Document\User $createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * Get createdBy
     *
     * @return PW\UserBundle\Document\User $createdBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set deleted
     *
     * @param date $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    /**
     * Get deleted
     *
     * @return date $deleted
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set deletedBy
     *
     * @param PW\UserBundle\Document\User $deletedBy
     */
    public function setDeletedBy(\PW\UserBundle\Document\User $deletedBy = null)
    {
        $this->deletedBy = $deletedBy;
    }

    /**
     * Get deletedBy
     *
     * @return PW\UserBundle\Document\User $deletedBy
     */
    public function getDeletedBy()
    {
        return $this->deletedBy;
    }

    /**
     * Set modified
     *
     * @param date $modified
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    }

    /**
     * Get modified
     *
     * @return date $modified
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set modifiedBy
     *
     * @param PW\UserBundle\Document\User $modifiedBy
     */
    public function setModifiedBy(\PW\UserBundle\Document\User $modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;
    }

    /**
     * Get modifiedBy
     *
     * @return PW\UserBundle\Document\User $modifiedBy
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

     /**
     * Is this Banner running now, in future, expired, or is inactive?
     *
     * @return string
     */   
    public function getRunningStatus()
    {
        if (!$this->getIsActive()) return 'inactive';
        if ($this->getStartDate()->getTimestamp() <= time() && $this->getEndDate()->getTimestamp() >= time()) return 'active';
        if ($this->getEndDate()->getTimestamp() < time()) return 'expired';   
        return 'future';
    }
}
