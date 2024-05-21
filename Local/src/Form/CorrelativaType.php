<?php

namespace App\Form;

use App\Entity\Correlativa;
use App\Entity\Asignatura;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CorrelativaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('asignatura',EntityType::class,[
            'class' => Asignatura::class,
            'choice_label' => 'nombre',
            'attr' => ['class' => 'form-control']
        ])
            ->add('nombre',EntityType::class,[
                'class' => Asignatura::class,
                'choice_label' => 'nombre',
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Correlativa::class,
        ]);
    }
}
