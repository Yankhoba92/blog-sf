<?php

namespace App\Form;

use App\Entity\Post;
use App\Entity\category;
use App\Entity\user;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('slug')
            ->add('extract')
            ->add('content')
            ->add('isPublished')
            ->add('created_at')
            ->add('updated_at')
            ->add('image')
            ->add('author', EntityType::class, [
                'class' => user::class,
'choice_label' => 'id',
            ])
            ->add('category', EntityType::class, [
                'class' => category::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
