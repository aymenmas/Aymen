<?php

namespace Esprit\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ManagerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom',        'text')
            ->add('prenom',       'text')
            ->add('telephone',     'text')
            ->add('service',      'text')
            ->add('date',         'date')
            ->add('email',        'email')
          ->add('image',        new ImageType()) // Rajoutez cette ligne
      ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\AdminBundle\Entity\Manager'
        ));
    }

    public function getName()
    {
        return 'esprit_adminbundle_managertype';
    }
}
