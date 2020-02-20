<?php

namespace App\Form;

use App\Entity\Estudiante;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
//use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

class EstudianteFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class, [
                'label' => 'First name',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter your first name',
                    ]),
                    new Length([
                        'max' => 60,
                        'maxMessage' => 'The first name must not be more than {{ limit }} characters',
                    ]),
                ],
            ])
            ->add('apellidos', TextType::class, [
                'label' => 'Last name',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter your last name',
                    ]),
                    new Length([
                        'max' => 100,
                        'maxMessage' => 'The last name must not be more than {{ limit }} characters',
                    ]),
                ],
            ])
            ->add('calle', TextType::class, [
                'label' => 'Street',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter your street',
                    ]),
                    new Length([
                        'max' => 100,
                        'maxMessage' => 'The street must not be more than {{ limit }} characters',
                    ]),
                ],
            ])
            ->add('provincia', TextType::class, [
                'label' => 'State',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter your state',
                    ]),
                    new Length([
                        'max' => 18,
                        'maxMessage' => 'The state must not be more than {{ limit }} characters',
                    ]),
                ],
            ])
            ->add('cp', TextType::class, [
                'label' => 'Zip code',
                'attr' => [
                    'pattern' => '((0[1-9])|[1-4][0-9]|5[0-2])\d{3}',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter your {{ label }}',
                    ]),
                    new Length([
                        'max' => 5,
                        'min' => 5,
                        'exactMessage' => '{{ label }} must be {{ limit }} characters',
                    ]),
                ],
            ])
            ->add('tlfno', TelType::class, [
                'label' => 'Phone number',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter your phone number',
                    ]),
                ],
            ])
            ->add('fNacimiento', DateType::class, [
                'label' => 'Birth date',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter your birth date',
                    ]),
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Register',
            ])
            //->add('usuario')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Estudiante::class,
        ]);
    }
}
