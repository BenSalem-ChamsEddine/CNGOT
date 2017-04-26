<?php

namespace CNGOTBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AbstractVideoType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('titre')
                ->add('categorie', ChoiceType::class, array('choices' => array(
                        'Andrologie' => 'Andrologie',
                        'Génétique' => 'Génétique',
                        'Embryologie' => 'Embryologie',
                        'PMA' => 'PMA',
                        'Gynécologie' => 'Gynécologie',
                        'Obstétrique' => 'Obstétrique',
                        'Médecine Fœtale' => 'Médecine Fœtale',
                        'Gynécologie Oncologique' => 'Gynécologie Oncologique',
                        'Sénologie' => 'Sénologie',
                    ),))
                ->add('auteur1')
                ->add('auteur2')
                ->add('auteur3')
                ->add('institution')
                ->add('introduction')
                ->add('materiel')
                ->add('resultats')
                ->add('conclusions')
                ->add('file', null, array(
                    'required' => false
                ))

        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'CNGOTBundle\Entity\AbstractVideo'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'CNGOTBundle_abstractvideo';
    }

}
