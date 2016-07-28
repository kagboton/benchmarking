<?php

namespace BenchmarkingBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ComposantAffichageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomAfficheur', EntityType::class, array(
                'class' => 'BenchmarkingBundle:AfficheurExistant',
                'choice_label' => 'nom'
            ))
            ->add('tailleEcran', EntityType::class, array(
                'class' => 'BenchmarkingBundle:TailleEcran',
                'choice_label' => 'taille',
                'label' => 'Taille écran (pouces)'
            ))
            ->add('formatEcran', EntityType::class, array(
                'class' => 'BenchmarkingBundle:FormatEcran',
                'choice_label' => 'format'
            ))
            ->add('technologieAfficheur', EntityType::class, array(
                'class' => 'BenchmarkingBundle:TechnologieAfficheur',
                'choice_label' => 'nom'
            ))
            ->add('sousTechnologieAfficheur', EntityType::class, array(
                'class' => 'BenchmarkingBundle:SousTechnologieAfficheur',
                'choice_label' => 'nom'
            ))                     
            ->add('typeTdB', EntityType::class, array(
                'class' => 'BenchmarkingBundle:TypeTdB',
                'choice_label' => 'nom',
                'label' => 'Type Tableau de Bord'
            ))
            ->add('image', ImageType::class, array(
                'label' => 'Photo du composant d\'affichage'
            ))
            
            /*
            ->add('vehicules')
            ->add('fonctions')
            */
            
           
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BenchmarkingBundle\Entity\ComposantAffichage'
        ));
    }
}
