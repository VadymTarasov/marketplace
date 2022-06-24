<?php

namespace App\Form;

use App\Entity\Shop;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddShopFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,
            [
                'label'=>'shop.name'
            ])
            ->add('description', TextType::class,
            [
                'label'=>'shop.desc'
            ])
//            ->add('status')
//            ->add('createdAt')
//            ->add('updatedAt')
//            ->add('user')
            ->add('submit',SubmitType::class,
                [
                    'label'=>'shop.add.submit'
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Shop::class,
        ]);
    }
}
