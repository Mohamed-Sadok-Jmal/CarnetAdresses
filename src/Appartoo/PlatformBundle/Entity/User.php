<?php

namespace Appartoo\PlatformBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
   * @ORM\OneToMany(targetEntity="Appartoo\PlatformBundle\Entity\Contact", mappedBy="user")
   */
  protected $contacts;

    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->contacts = new ArrayCollection();
    }

    public function addContact(Contact $contact)
  {
    $this->contacts[] = $contact;
    $contact->setUser($this);
    return this;
  }

  public function removeContact(Contact $contact)
  {
    $this->Contacts->removeElement($contact);
  }

  public function getContacts()
  {
    return $this->contacts;
  }
}