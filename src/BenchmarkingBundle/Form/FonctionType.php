<?php

namespace BenchmarkingBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FonctionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomFonction', EntityType::class, array(
                'class' => 'BenchmarkingBundle:FonctionExistante',
                'choice_label' => 'nom'
            ))
            ->add('activationPhysique', ActivationPhysiqueType::class)
            ->add('activationLogique', ActivationLogiqueType::class)
            ->add('retourActivation', RetourActivationType::class)
            /*
            ->add('composantsAffichage')
            ->add('vehicules')
            */
                        
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BenchmarkingBundle\Entity\Fonction'
        ));
    }
}
