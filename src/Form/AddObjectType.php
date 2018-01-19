<?php
/**
 * Created by PhpStorm.
 * User: mohamedkaddouri
 * Date: 19-01-18
 * Time: 13:04
 */

namespace Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateIntervalType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddObjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('chassisnummer', TextType::class)
            ->add('objId',NumberType::class)
            ->add('kenteken',TextType::class)
            ->add('objType',TextType::class)
            ->add('beschikbaarheid',CheckboxType::class)
            ->add('objDatumTerug',DateType::class)
            ->add('objDatumUit',DateType::class)
            ->add('objDagenVerhuur',DateIntervalType::class);

    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }
}