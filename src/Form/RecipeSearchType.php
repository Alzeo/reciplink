<?php

namespace App\Form;

use App\Entity\RecipeSearch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecipeSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', ChoiceType::class, [
                'multiple' => false,
                'required' => false,
                'label' => false,
                'choices' => [
                    'Petit déjeuner' => 'Petit déjeuner',
                    'Déjeuner/Dîner' => 'Déjeuner/Dîner',
                    'Goûter' => 'Goûter',
                    'Dessert' => 'Dessert',
                    'Pré-Workout' => 'Pré-Workout',
                    'Post-Workout' => 'Post-Workout',
                    'Smoothie/Shaker' => 'Smoothie/Shaker',
                ],
            ])
            ->add('regime', ChoiceType::class, [
                'multiple' => false,
                'required' => false,
                'label' => false,
                'choices' => [
                    'Paléo' => 'Paléo',
                    'Végétarien' => 'Végétarien',
                    'Végétalien' => 'Végétalien',
                    'Végan' => 'Végan',
                    'Sans gluten' => 'Sans gluten'
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RecipeSearch::class,
            'method' => 'get',
            'csrf_protection' => false
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}
