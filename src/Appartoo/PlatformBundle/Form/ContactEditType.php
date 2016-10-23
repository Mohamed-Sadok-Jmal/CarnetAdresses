<?php
// src/Appartoo/PlatformBundle/Form/ContactEditType.php

namespace Appartoo\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactEditType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    //$builder->remove('date');
  }

  public function getParent()
  {
    return ContactType::class;
  }
}
