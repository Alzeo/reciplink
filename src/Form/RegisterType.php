<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Pseudonyme'
                ]
            ])
            ->add('password', PasswordType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Votre mot de passe'
                ]
            ])
            ->add('passwordConfirm', PasswordType::class, [
                'label' => false,
                'attr' => [
                    "placeholder" => 'Confirmez votre mot de passe'
                ]
            ])
            ->add('email', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Adresse mail'
                ]
            ])
            ->add('rgpd', CheckboxType::class, [
                'label' => "J'accepte les conditions générales d'utilisations",
                'attr' => [
                    'class' => 'text-left',
                    'multiple' => false
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
