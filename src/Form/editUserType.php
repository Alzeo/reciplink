<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class editUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [

            ])
            ->add('regime', ChoiceType::class, [
                'label' => 'Régime alimentaire',
                'choices' => [
                    'Paléovore' => 'Paléovore',
                    'Végétarien' => 'Végétarien',
                    'Végétalien' => 'Végétalien',
                    'Végan' => 'Végan',
                    'Sans gluten' => 'Sans gluten'
                ]
            ])
            ->add('facebook', TextType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'https://www.facebook.com/user'
                ]
            ])
            ->add('instagram', TextType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'https://www.instagram.com/user'
                ]
            ])
            ->add('pinterest', TextType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'https://www.pinterest.com/user'
                ]
            ])
            ->add('snapchat', TextType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Pseudonyme Snap'
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
