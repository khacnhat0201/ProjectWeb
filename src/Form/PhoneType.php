<?php

namespace App\Form;

use App\Entity\Phone;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Brand;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class PhoneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Name')
            ->add('Description')
            ->add('Date',
            DateType::class,
            [
                'widget' => 'single_text' 
            ]
            )
            ->add('price')
            ->add('Image', 
                FileType::class,
                [
                    // 'label' => 'Manga Image',
                    'data_class' => null,
                    'required' => is_null($builder->getData()->getImage())
                ]
            )
            ->add('Brand',
            EntityType::class,
                [
                    'class' => Brand::class,
                    'choice_label' => 'name',
                    'multiple' => false,
                    'expanded' => false
                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Phone::class,
        ]);
    }
}
