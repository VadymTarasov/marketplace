<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Product;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name',TextType::class, [
                'label'=>'product.name',
            ])
            ->add('description',TextType::class, [
                'label'=>'product.description',
            ])
//            ->add('updateAt')
//            ->add('createAt')
//            ->add('shop')
            ->add('category', EntityType::class, [
                'label'=>'category.name',
                'class'=> Category::class,
                'choice_label'=>'name'
            ])
            ->add('submit',SubmitType::class,
                [
                    'label'=>'product.add'
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
