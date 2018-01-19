<?php
/**
 * Created by PhpStorm.
 * User: mohamedkaddouri
 * Date: 19-01-18
 * Time: 13:22
 */

namespace Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SpecificatieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('merk',TextType::class)
            ->add('type',TextType::class)
            ->add('bouwjaar',NumberType::class)
            ->add('massaInventaris',NumberType::class)
            ->add('')
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }
}