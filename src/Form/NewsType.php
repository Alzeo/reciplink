<?php

namespace App\Form;

use App\Entity\Newsletter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categorie', ChoiceType::class, [
                'label' => false,
                'choices' => [
                    'Recettes paléo' => 'Recettes paléo',
                    'Recettes Végétarien' => 'Recettes Végétarien',
                    'Recettes Végétalien' => 'Recettes Végétalien',
                    'Recettes Végan' => 'Recettes Végan',
                    'Recettes sans gluten' => 'Recettes sans gluten',
                    'Toutes les recettes' => 'Toutes les recettes'
                ]
            ])
            ->add('mail', EmailType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'monadresse@mail.com'
                ]
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Newsletter::class,
        ]);
    }
}
