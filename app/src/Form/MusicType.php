<?php

namespace App\Form;

use App\Entity\Music;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Category;
use App\Entity\Tag;

class MusicType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
            'label' => 'Entrer le nom de la music',
            'attr' => [
                'placeholder' => 'test'
                ]
            ])
            ->add('url', TextType::class)
            ->add('save', SubmitType::class)
       // ;

        ->add('name', TextType::class, [
            'label' => 'Nom de la musique',
        ])
        ->add('url', TextType::class, [
            'label' => 'URL de la musique',
        ])
        ->add('category', EntityType::class, [
            'class' => Category::class,
            'choice_label' => 'name',
            'label' => 'Catégorie',
        ])
        ->add('tags', EntityType::class, [
            'class' => Tag::class,
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
            'label' => 'Tags',
        ])
        ->add('save', SubmitType::class, [
            'label' => 'Enregistrer',
        ]);
        


    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Music::class,
        ]);
    }
}
