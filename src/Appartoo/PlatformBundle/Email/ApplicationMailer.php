<?php
// src/Appartoo/PlatformBundle/Email/ApplicationMailer.php

namespace Appartoo\PlatformBundle\Email;

use Appartoo\PlatformBundle\Entity\Contact;

class ApplicationMailer
{
  /**
   * @var \Swift_Mailer
   */
  private $mailer;

  public function __construct(\Swift_Mailer $mailer)
  {
    $this->mailer = $mailer;
  }

  public function sendNewNotification(Contact $contact)
  {
    $message = new \Swift_Message(
      'Nouvelle candidature',
      'Vous avez reçu une nouvelle candidature.'
    );

    $message->addTo($contact->getEmail())->addFrom("jmal.mohamedsadok@gmail.com");

    $this->mailer->send($message);
  }
}
