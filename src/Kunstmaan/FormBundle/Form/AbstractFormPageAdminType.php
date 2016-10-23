<?php

namespace Kunstmaan\FormBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * An abstract Form Page Admin Type
 */
class AbstractFormPageAdminType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder The form builder
     * @param array                $options The options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', TextType::class, array(
            'label' => 'kuma_form.form.page_admin.title.label',
        ));
        $builder->add('thanks', TextareaType::class, array(
            'label' => 'kuma_form.form.page_admin.thanks.label',
            'required' => false,
            'attr' => array(
                'class' => 'js-rich-editor rich-editor'
            ),
        ));
        $builder->add('subject', TextType::class, array(
            'label' => 'kuma_form.form.page_admin.subject.label',
        ));
        $builder->add('from_email', EmailType::class, array(
            'label' => 'kuma_form.form.page_admin.from_email.label',
        ));
        $builder->add('to_email', TextType::class, array(
            'label' => 'kuma_form.form.page_admin.to_email.label',
        ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Kunstmaan\FormBundle\Entity\AbstractFormPage',
        ));
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'formpage';
    }
}
