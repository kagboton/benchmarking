<?php

namespace BenchmarkingBundle\Form;


use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VehiculeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array(
                'label' => 'Modèle'
            ))
            ->add('marque', EntityType::class, array(
                'class' => 'BenchmarkingBundle:Marque',
                'choice_label' => 'nom',
            ))
            ->add('annee', NumberType::class, array(
                'label' => 'Année de fabrication'
            ))
            ->add('segment', EntityType::class, array(
                'class' => 'BenchmarkingBundle:Segment',
                'choice_label' => 'nom'
            ))
            ->add('motorisation', EntityType::class, array(
                'class' => 'BenchmarkingBundle:Motorisation',
                'choice_label' => 'nom'
            ))
            ->add('boiteVitesse', EntityType::class, array(
                'class' => 'BenchmarkingBundle:BoiteVitesse',
                'choice_label' => 'nom'
            ))

                        
            ->add('image', ImageType::class, array(
                'label' => 'Photo du véhicule'
            ))

            /*
             * Rappel :
             * - 1er argument : nom du champ, ici « categories », car c'est le nom de l'attribut
             * - 2e argument : type du champ, ici « CollectionType » qui est une liste de quelque chose
             * - 3e argument : tableau d'options du champ
             *
             */

            ->add('composantsAffichage', CollectionType::class, array(
                'entry_type' => ComposantAffichageType::class,
                'allow_add' => true,
                'allow_delete' => true
            ))
            ->add('fonctions', CollectionType::class, array(
                'entry_type' => FonctionType::class,
                'allow_add' => true,
                'allow_delete' => true
            ))

            ->add('enregistrer', SubmitType::class)

        ;
    }


    public function buildYearChoices() {
        $distance = 5;
        $yearsBefore = date('Y', mktime(0, 0, 0, date("m"), date("d"), date("Y") - $distance));
        $yearsAfter = date('Y', mktime(0, 0, 0, date("m"), date("d"), date("Y") + $distance));
        return array_combine(range($yearsBefore, $yearsAfter), range($yearsBefore, $yearsAfter));
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BenchmarkingBundle\Entity\Vehicule'
        ));
    }
}
