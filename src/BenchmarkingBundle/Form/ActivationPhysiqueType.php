<?php

namespace BenchmarkingBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActivationPhysiqueType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('commandePhysique', EntityType::class, array(
                'class' => 'BenchmarkingBundle:CommandePhysique',
                'choice_label' => 'nom'
            ))
            ->add('localisation', EntityType::class, array(
                'class' => 'BenchmarkingBundle:Localisation',
                'choice_label' => 'nom'
            ))
            ->add('image', ImageType::class, array(
                'label' => 'Photo de la commande physqiue'
            ))
            
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BenchmarkingBundle\Entity\ActivationPhysique'
        ));
    }
}
