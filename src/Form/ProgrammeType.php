<?php

namespace App\Form;

use App\Entity\Programmes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProgrammeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom du programme'
            ])
            ->add('extract', TextType::class, [
                'label' => 'Description du programme'
            ])
            ->add('picture',FileType::class, [
                'required' => false,
                'label' => 'Icone du programme<',
                'data_class' => null
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Programmes::class,
        ]);
    }
}
