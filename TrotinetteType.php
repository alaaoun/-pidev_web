<?php 
namespace App\Form;



use App\Entity\Trotinette;
use App\Entity\Station;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Component\Validator\Constraints\GreaterThan;

// ...

class TrotinetteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('vitesse', null, [
                'constraints' => [
                    new Assert\Type([
                        'type' => 'numeric',
                        'message' => 'La vitesse doit être un nombre.',
                    ]),
                    new GreaterThan([
                        'value' => 0,
                        'message' => 'La vitesse doit être supérieure à zéro.',
                    ]),
                ],
            ])
            ->add('charge')
            ->add('couleur')
            ->add('dispo')
            ->add('idStation', EntityType::class, [
                'class' => Station::class,
                'choice_label' => 'name',
            ])
            ->add('Save', SubmitType::class, [
                'attr' => ['class' => 'btn btn-success'],
            ]);
    }

    // ...
}
