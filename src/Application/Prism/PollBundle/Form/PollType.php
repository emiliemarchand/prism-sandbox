<?php

namespace Application\Prism\PollBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

use Prism\PollBundle\Form\PollType as BasePollType;

/**
 * PollType
 */
class PollType extends BasePollType
{
    /**
     * Build Form
     *
     * @param FormBuilder $builder
     * @param array       $options
     */
    public function buildForm(FormBuilder $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->add('author');
    }
}