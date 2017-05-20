<?php

namespace gdm\AdminBundle\Form;

//use symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MaisonType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dispo','checkbox')
            ->add('nbrMaison','text')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'gdm\AdminBundle\Entity\Maison'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gdm_adminbundle_maison';
    }
}
