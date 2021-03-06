<?php

namespace PW\UserBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB,
    JMS\SerializerBundle\Annotation\ExclusionPolicy,
    JMS\SerializerBundle\Annotation\Exclude,
    FOS\UserBundle\Model\User as BaseUser,
    PW\UserBundle\Document\User;

/**
 * @MongoDB\Document
 * @ExclusionPolicy("none")
 */
class Merchant extends User
{
    /**
     * @var \MongoId
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @var string
     */
    protected $type;

    /**
     * @return string
     */
    public function getUserType()
    {
        return 'merchant';
    }

    /**
     * @return \PW\UserBundle\Document\User\Settings
     */
    public function getSettings()
    {
        return parent::getSettings();
    }

    /**
     * @return \PW\FlagBundle\Document\FlagSummary
     */
    public function getFlagSummary()
    {
        return parent::getFlagSummary();
    }

    /**
     * Sets the email.
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        return BaseUser::setEmail($email);
    }

    /**
     * Sets the last login time
     *
     * @param \DateTime $time
     */
    public function setLastLogin(\DateTime $time)
    {
        return parent::setLastLogin($time);
    }

    /**
     * Sets the timestamp that the user requested a password reset.
     *
     * @param \DateTime $date
     */
    public function setPasswordRequestedAt(\DateTime $date = null)
    {
        return parent::setPasswordRequestedAt($date);
    }

    /**
     * Sets the roles of the user.
     *
     * This overwrites any previous roles.
     *
     * @param array $roles
     */
    public function setRoles(array $roles)
    {
        return parent::setRoles($roles);
    }

    /**
     * Get roles
     *
     * @return hash $roles
     */
    public function getRoles()
    {
        return parent::getRoles();
    }

    /**
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug)
    {
        return parent::setSlug($slug);
    }

    /**
     * Get counts
     *
     * @return PW\UserBundle\Document\User\Counts $counts
     */
    public function getCounts()
    {
        return parent::getCounts();
    }

    //
    // Doctrine Generation Below
    //

    /**
     * @var string $slug
     */
    protected $slug;

    /**
     * @var string $facebookId
     */
    protected $facebookId;

    /**
     * @var hash $facebookData
     */
    protected $facebookData;

    /**
     * @var boolean $isActive
     */
    protected $isActive;

    /**
     * @var string $username
     */
    protected $username;

    /**
     * @var string $usernameCanonical
     */
    protected $usernameCanonical;

    /**
     * @var string $email
     */
    protected $email;

    /**
     * @var string $emailCanonical
     */
    protected $emailCanonical;

    /**
     * @var string $algorithm
     */
    protected $algorithm;

    /**
     * @var string $salt
     */
    protected $salt;

    /**
     * @var string $password
     */
    protected $password;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @var PWDate $birthday
     */
    protected $birthday;

    /**
     * @var string $about
     */
    protected $about;

    /**
     * @var string $websiteUrl
     */
    protected $websiteUrl;

    /**
     * @var string $websiteTitle
     */
    protected $websiteTitle;

    /**
     * @var hash $roles
     */
    protected $roles;

    /**
     * @var date $passwordRequestedAt
     */
    protected $passwordRequestedAt;

    /**
     * @var date $lastLogin
     */
    protected $lastLogin;

    /**
     * @var increment $loginCount
     */
    protected $loginCount;

    /**
     * @var string $confirmationToken
     */
    protected $confirmationToken;

    /**
     * @var boolean $enabled
     */
    protected $enabled;

    /**
     * @var date $created
     */
    protected $created;

    /**
     * @var date $modified
     */
    protected $modified;

    /**
     * @var date $deleted
     */
    protected $deleted;

    /**
     * @var PW\AssetBundle\Document\Asset
     */
    protected $icon;

    /**
     * @var PW\UserBundle\Document\User\Counts
     */
    protected $counts;

    /**
     * @var PW\UserBundle\Document\User\Settings
     */
    protected $settings;

    /**
     * @var PW\FlagBundle\Document\FlagSummary
     */
    protected $flagSummary;

    /**
     * @var PW\InviteBundle\Document\Code
     */
    protected $assignedInviteCode;

    /**
     * @var PW\InviteBundle\Document\Code
     */
    protected $usedInviteCode;

    /**
     * @var PW\UserBundle\Document\User
     */
    protected $modifiedBy;

    /**
     * @var PW\UserBundle\Document\User
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
     * Get slug
     *
     * @return string $slug
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set facebookId
     *
     * @param string $facebookId
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;
    }

    /**
     * Get facebookId
     *
     * @return string $facebookId
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * Set facebookData
     *
     * @param hash $facebookData
     */
    public function setFacebookData($facebookData)
    {
        $this->facebookData = $facebookData;
    }

    /**
     * Get facebookData
     *
     * @return hash $facebookData
     */
    public function getFacebookData()
    {
        return $this->facebookData;
    }

    /**
     * Set icon
     *
     * @param PW\AssetBundle\Document\Asset $icon
     */
    public function setIcon(\PW\AssetBundle\Document\Asset $icon)
    {
        $this->icon = $icon;
    }

    /**
     * Get icon
     *
     * @return PW\AssetBundle\Document\Asset $icon
     */
    public function getIcon()
    {
        return $this->icon;
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
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string $username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set usernameCanonical
     *
     * @param string $usernameCanonical
     */
    public function setUsernameCanonical($usernameCanonical)
    {
        $this->usernameCanonical = $usernameCanonical;
    }

    /**
     * Get usernameCanonical
     *
     * @return string $usernameCanonical
     */
    public function getUsernameCanonical()
    {
        return $this->usernameCanonical;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set emailCanonical
     *
     * @param string $emailCanonical
     */
    public function setEmailCanonical($emailCanonical)
    {
        $this->emailCanonical = $emailCanonical;
    }

    /**
     * Get emailCanonical
     *
     * @return string $emailCanonical
     */
    public function getEmailCanonical()
    {
        return $this->emailCanonical;
    }

    /**
     * Set algorithm
     *
     * @param string $algorithm
     */
    public function setAlgorithm($algorithm)
    {
        $this->algorithm = $algorithm;
    }

    /**
     * Get algorithm
     *
     * @return string $algorithm
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Set salt
     *
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * Get salt
     *
     * @return string $salt
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string $password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set birthday
     *
     * @param PWDate $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * Get birthday
     *
     * @return PWDate $birthday
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set about
     *
     * @param string $about
     */
    public function setAbout($about)
    {
        $this->about = $about;
    }

    /**
     * Get about
     *
     * @return string $about
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set websiteUrl
     *
     * @param string $websiteUrl
     */
    public function setWebsiteUrl($websiteUrl)
    {
        $this->websiteUrl = $websiteUrl;
    }

    /**
     * Get websiteUrl
     *
     * @return string $websiteUrl
     */
    public function getWebsiteUrl()
    {
        return $this->websiteUrl;
    }

    /**
     * Set websiteTitle
     *
     * @param string $websiteTitle
     */
    public function setWebsiteTitle($websiteTitle)
    {
        $this->websiteTitle = $websiteTitle;
    }

    /**
     * Get websiteTitle
     *
     * @return string $websiteTitle
     */
    public function getWebsiteTitle()
    {
        return $this->websiteTitle;
    }

    /**
     * Set counts
     *
     * @param PW\UserBundle\Document\User\Counts $counts
     */
    public function setCounts(\PW\UserBundle\Document\User\Counts $counts)
    {
        $this->counts = $counts;
    }

    /**
     * Set settings
     *
     * @param PW\UserBundle\Document\User\Settings $settings
     */
    public function setSettings(\PW\UserBundle\Document\User\Settings $settings)
    {
        $this->settings = $settings;
    }

    /**
     * Set flagSummary
     *
     * @param PW\FlagBundle\Document\FlagSummary $flagSummary
     */
    public function setFlagSummary(\PW\FlagBundle\Document\FlagSummary $flagSummary)
    {
        $this->flagSummary = $flagSummary;
    }

    /**
     * Set assignedInviteCode
     *
     * @param PW\InviteBundle\Document\Code $assignedInviteCode
     */
    public function setAssignedInviteCode(\PW\InviteBundle\Document\Code $assignedInviteCode)
    {
        $this->assignedInviteCode = $assignedInviteCode;
    }

    /**
     * Get assignedInviteCode
     *
     * @return PW\InviteBundle\Document\Code $assignedInviteCode
     */
    public function getAssignedInviteCode()
    {
        return $this->assignedInviteCode;
    }

    /**
     * Set usedInviteCode
     *
     * @param PW\InviteBundle\Document\Code $usedInviteCode
     */
    public function setUsedInviteCode(\PW\InviteBundle\Document\Code $usedInviteCode)
    {
        $this->usedInviteCode = $usedInviteCode;
    }

    /**
     * Get usedInviteCode
     *
     * @return PW\InviteBundle\Document\Code $usedInviteCode
     */
    public function getUsedInviteCode()
    {
        return $this->usedInviteCode;
    }

    /**
     * Get passwordRequestedAt
     *
     * @return date $passwordRequestedAt
     */
    public function getPasswordRequestedAt()
    {
        return $this->passwordRequestedAt;
    }

    /**
     * Get lastLogin
     *
     * @return date $lastLogin
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set loginCount
     *
     * @param increment $loginCount
     */
    public function setLoginCount($loginCount)
    {
        $this->loginCount = $loginCount;
    }

    /**
     * Get loginCount
     *
     * @return increment $loginCount
     */
    public function getLoginCount()
    {
        return $this->loginCount;
    }

    /**
     * Set confirmationToken
     *
     * @param string $confirmationToken
     */
    public function setConfirmationToken($confirmationToken)
    {
        $this->confirmationToken = $confirmationToken;
    }

    /**
     * Get confirmationToken
     *
     * @return string $confirmationToken
     */
    public function getConfirmationToken()
    {
        return $this->confirmationToken;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * Get enabled
     *
     * @return boolean $enabled
     */
    public function getEnabled()
    {
        return $this->enabled;
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
     * @var string $subId
     */
    protected $subId;

    /**
     * @var hash $utmData
     */
    protected $utmData;

    /**
     * @var PW\BoardBundle\Document\Board
     */
    protected $boards = array();

    public function __construct()
    {
        parent::__construct();
        $this->boards = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set subId
     *
     * @param string $subId
     */
    public function setSubId($subId)
    {
        $this->subId = $subId;
    }

    /**
     * Get subId
     *
     * @return string $subId
     */
    public function getSubId()
    {
        return $this->subId;
    }

    /**
     * Set utmData
     *
     * @param hash $utmData
     */
    public function setUtmData($utmData)
    {
        $this->utmData = $utmData;
    }

    /**
     * Get utmData
     *
     * @return hash $utmData
     */
    public function getUtmData()
    {
        return $this->utmData;
    }

    /**
     * Add boards
     *
     * @param PW\BoardBundle\Document\Board $boards
     */
    public function addBoards(\PW\BoardBundle\Document\Board $boards)
    {
        $this->boards[] = $boards;
    }

    /**
     * Get boards
     *
     * @return Doctrine\Common\Collections\Collection $boards
     */
    public function getBoards()
    {
        return $this->boards;
    }
    /**
     * @var boolean $disabledNotifications
     */
    protected $disabledNotifications;


    /**
     * Set disabledNotifications
     *
     * @param boolean $disabledNotifications
     * @return Merchant
     */
    public function setDisabledNotifications($disabledNotifications)
    {
        $this->disabledNotifications = $disabledNotifications;
        return $this;
    }

    /**
     * Get disabledNotifications
     *
     * @return boolean $disabledNotifications
     */
    public function getDisabledNotifications()
    {
        return $this->disabledNotifications;
    }
}
