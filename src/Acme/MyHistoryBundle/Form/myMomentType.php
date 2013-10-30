<?php

namespace Acme\MyHistoryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class myMomentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('myYear', 'text', array('label' => 'DATE'))

            ->add('myPlace', 'text', array('label'  => 'PLACE'))

        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\MyHistoryBundle\Entity\myMoment'
        ));
    }

    public function getName()
    {
        return 'acme_myhistorybundle_mymomenttype';
    }
}
