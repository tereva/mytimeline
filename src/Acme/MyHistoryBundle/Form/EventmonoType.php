<?php

namespace Acme\MyHistoryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EventmonoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('syear')
            ->add('smonth')
            ->add('sday')
            ->add('stime')
            ->add('ersyear')
            ->add('ersmonth')
            ->add('ersday')
            ->add('erstime')
            ->add('scountry')
            ->add('sstate')
            ->add('scity')
            ->add('eyear')
            ->add('emonth')
            ->add('eday')
            ->add('etime')
            ->add('laeyear')
            ->add('laemonth')
            ->add('laeday')
            ->add('laetime')
            ->add('ecountry')
            ->add('estate')
            ->add('ecity')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\MyHistoryBundle\Entity\Eventmono'
        ));
    }

    public function getName()
    {
        return 'acme_myhistorybundle_eventmonotype';
    }
}
