<?php
/**
 * Created by PhpStorm.
 * User: mohamedkaddouri
 * Date: 19-01-18
 * Time: 13:04
 */

namespace App\Form;


use App\Entity\ObjectProduct;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddObjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('chassisnummer', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control'
                ),
                'label' => 'Chassisnummer',
                'label_attr' => array(
                    'class' => 'tk-prixima-nova'
                )
            ))
            ->add('kenteken',TextType::class, array(
                'attr' => array(
                    'class' => 'form-control'
                ),
                'label' => 'Kenteken',
                'label_attr' => array(
                    'class' => 'tk-prixima-nova'
                )
            ))
            ->add('objType',TextType::class, array(
                'attr' => array(
                    'class' => 'form-control'
                ),
                'label' => 'Object Type',
                'label_attr' => array(
                    'class' => 'tk-prixima-nova'
                )
            ))
            ->add('prijs',NumberType::class, array(
                'attr' => array(
                    'class' => 'form-control'
                ),
                'label' => 'Prijs',
                'label_attr' => array(
                    'class' => 'tk-prixima-nova'
                )
            ))
            ->add('fotos',FileType::class, array(
                'attr' => array(
                    'class' => 'form-control'
                ),
                'label' => "Foto's",
                'multiple' => true
            ))
            ->add('beschikbaarheid',CheckboxType::class, array(
                'attr' => array(
                    'class' => 'form-check-input'

                ),
                'label' => 'Beschikbaar',
                'label_attr' => array(
                    'class' => 'tk-prixima-nova'
                    
                )
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => ObjectProduct::class
        ));
    }
}