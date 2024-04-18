<?php

namespace App\Form;
use Symfony\Component\Validator\Constraints\NotBlank;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints as Assert;

class UserType extends AbstractType
{ public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', null, [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Regex([
                        'pattern' => '/^[a-zA-Z]+$/',
                        'message' => 'Le nom doit contenir uniquement des lettres alphabétiques',
                    ]),
                ],
            ])
            ->add('mail', null, [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Email(['message' => 'Adresse e-mail invalide']),
                ],
            ])
            ->add('numTel', null, [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Regex([
                        'pattern' => '/^\d{8}$/',
                        'message' => 'Le numéro de téléphone doit contenir exactement 8 chiffres',
                    ]),
                ],
            ])
            ->add('adresse', null, [
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            ->add('mdp', null, [
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            ->add('role')
        ;
    }
    

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
