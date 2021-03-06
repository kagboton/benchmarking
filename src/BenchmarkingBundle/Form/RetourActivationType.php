<?php

namespace BenchmarkingBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetourActivationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeRetourActivation', EntityType::class, array(
                'class' => 'BenchmarkingBundle:TypeRetourActivation',
                'choice_label' => 'nom',
                'required'    => false,
                'placeholder' => 'Retour Activation',
                'empty_data'  => null
            ))
            ->add('image', ImageType::class, array(
                'label' => 'Photo du retour d\'activation'
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BenchmarkingBundle\Entity\RetourActivation'
        ));
    }
}
