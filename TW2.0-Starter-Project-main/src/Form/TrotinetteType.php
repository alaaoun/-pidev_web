<?php

namespace App\Form;

use App\Entity\Trotinette;
use App\Entity\Station;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrotinetteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('vitesse')
            ->add('charge')
            ->add('couleur')
            ->add('dispo')
            ->add('idStation' , EntityType::class , 
            [
                'class' => Station::class ,
                'choice_label' => 'name'
            ])
            ->add('Save' , SubmitType::class , 
            [
                'attr' => ['class' => 'btn btn-success']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Trotinette::class,
        ]);
    }
}
