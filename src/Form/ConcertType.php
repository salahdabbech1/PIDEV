<?php

namespace App\Form;

use App\Entity\Concert;
use App\Entity\Musician;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ConcertType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('idmusician',EntityType::class,[


                'class'=>Musician::class,
                'choice_label'=>'name'

            ])
            ->add('musics')
            ->add('image')
            ->add('trailer')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Concert::class,
        ]);
    }
}
