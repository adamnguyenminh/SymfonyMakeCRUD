<?php

namespace App\Form;

use App\Entity\Song;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SongType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('SongName',TextType::class, [
                'attr' => [
                    'placeholder' => 'Type Name Here',
                    'class' => 'form-control'
                ]
            ])
            ->add('Single',TextType::class, [
                'attr' => [
                    'placeholder' => 'Single Name here',
                    'class' => 'form-control'
                ]
            ])
            ->add('slug',TextType::class, [
                'attr' => [
                    'placeholder' => 'Type Name Here',
                    'class' => 'form-control'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Song::class,
        ]);
    }
}
