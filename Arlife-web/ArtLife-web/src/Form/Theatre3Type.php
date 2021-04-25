<?php

namespace App\Form;

use App\Entity\Theatre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Theatre3Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('genre')
            ->add('rdate')
            ->add('image')
            ->add('trailer')
            ->add('description')
            ->add('poster')
            ->add('tactor')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Theatre::class,
        ]);
    }
}