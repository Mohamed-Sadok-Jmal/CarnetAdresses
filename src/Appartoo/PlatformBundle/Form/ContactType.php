<?php

namespace Appartoo\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Appartoo\PlatformBundle\Form\ImageType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;


class ContactType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', TextType::class)
            ->add('address', TextType::class)
            ->add('phone', TextType::class)
            ->add('website', TextType::class)
            ->add('image', ImageType::class)
            ->add('save', SubmitType::class);

        // On ajoute une fonction qui va écouter un évènement
    $builder->addEventListener(
      FormEvents::PRE_SET_DATA,    // 1er argument : L'évènement qui nous intéresse : ici, PRE_SET_DATA
      function(FormEvent $event) { // 2e argument : La fonction à exécuter lorsque l'évènement est déclenché
        // On récupère notre objet Advert sous-jacent
        $contact = $event->getData();

        // Cette condition est importante, on en reparle plus loin
        if (null === $contact) {
          return; // On sort de la fonction sans rien faire lorsque $advert vaut null
        }
      }
    );
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Appartoo\PlatformBundle\Entity\Contact'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appartoo_platformbundle_contact';
    }


}
