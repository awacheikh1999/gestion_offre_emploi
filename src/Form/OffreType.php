<?php

namespace App\Form;

use App\Entity\Offre;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('TitreOffre', TextType::class, array('required' => true, 'label'=>"Tittre de l offre", 'attr'=>array('class'=>'form-control form-group')))

            ->add('Salaire', Integer::class, array('required' => true, 'label'=>"Salaire", 'attr'=>array('class'=>'form-control form-group')))

            ->add('Entreprise', TextType::class, array('required' => true, 'label'=>"Entreprise", 'attr'=>array('class'=>'form-control form-group')))
            ->add('Poste', TextType::class, array('required' => true, 'label'=>"Poste", 'attr'=>array('class'=>'form-control form-group')))
            ->add('Disponiblite', TextType::class, array('required' => true, 'label'=>"Dispiniblite", 'attr'=>array('class'=>'form-control form-group')))
            ->add('Postuler', SubmitType::class, array('attr'=>array('class'=>'btn btn-success')))

        ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offre::class,
        ]);
    }
}
