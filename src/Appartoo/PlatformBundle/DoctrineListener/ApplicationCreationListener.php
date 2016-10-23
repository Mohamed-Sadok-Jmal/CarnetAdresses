<?php
// src/Appartoo/PlatformBundle/DoctrineListener/ApplicationCreationListener.php

namespace Appartoo\PlatformBundle\DoctrineListener;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Appartoo\PlatformBundle\Email\ApplicationMailer;
use Appartoo\PlatformBundle\Entity\Contact;

class ApplicationCreationListener
{
  /**
   * @var ApplicationMailer
   */
  private $applicationMailer;

  public function __construct(ApplicationMailer $applicationMailer)
  {
    $this->applicationMailer = $applicationMailer;
  }

  public function postPersist(LifecycleEventArgs $args)
  {
    $entity = $args->getObject();

    // On ne veut envoyer un email que pour les entités Contact
    if (!$entity instanceof Contact) {
      return;
    }

    $this->applicationMailer->sendNewNotification($entity);
  }
}
