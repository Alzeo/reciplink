<?php

namespace App\Form;

use App\Entity\Food;
use App\Entity\Recipe;
use App\Entity\Tags;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use function Sodium\add;

class RecipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom de votre recette'
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type de recette',
                'choices' => [
                    'Petit déjeuner' => 'Petit déjeuner',
                    'Déjeuner/Dîner' => 'Déjeuner/Dîner',
                    'Dessert' => 'Dessert',
                    'Goûter' => 'Goûter',
                    'Pré-Workout' => 'Pré-Workout',
                    'Post-Workout' => 'Post-Workout',
                    'Smoothie/Shaker' => 'Smoothie/Shaker',
                ]
            ])
            ->add('dificulty', ChoiceType::class, [
                'label' => 'Difficulté',
                'choices' => [
                    'Facile' => 'Facile',
                    'Moyen' => 'Moyen',
                    'Difficile' => 'Difficile',
                ]
            ])
            ->add('time', IntegerType::class, [
                'label' => 'Durée'
            ])
            ->add('timeUnity', ChoiceType::class, [
                'label' => 'Unité',
                'choices' => [
                    'Minutes' => 'Minutes',
                    'Heures' => 'Heures',
                ]
            ])
            ->add('part', IntegerType::class, [
                'label' => 'Portion'
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Détaillez votre recette'
            ])
            ->add('protein', IntegerType::class, [
                'label' => 'Protéine'
            ])
            ->add('glucide', IntegerType::class, [
                'label' => 'Glucide'
            ])
            ->add('regime', ChoiceType::class, [
                'label' => 'Régime alimentaire',
                'choices' => [
                    'Paléo' => 'Paléo',
                    'Végétarien' => 'Végétarien',
                    'Végétalien' => 'Végétalien',
                    'Végan' => 'Végan',
                    'Sans gluten' => 'Sans gluten'
                ]
            ])
            ->add('lipide', IntegerType::class, [
                'label' => 'Lipide'
            ])
            ->add('calorie', IntegerType::class, [
                'label' => 'Calorie'
            ])
            ->add('tags', EntityType::class, [
                'class' => Tags::class,
                'label' => 'Tags',
                'multiple' => true,
                'choice_label' => 'name'
            ])
            ->add('foods', CollectionType::class, array(
                'entry_type'   => FoodType::class,
                'label' => 'Les ingrédients de votre recette',
                'allow_add'    => true,
                'allow_delete' => true,
                'by_reference' => false,
                'attr' => [
                    'class' => "20percent"
                ]
            ))
            ->add('picture', FileType::class, [
                'required' => false,
                'label' => 'Photo du plat'
                ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Recipe::class,
        ]);
    }
}
