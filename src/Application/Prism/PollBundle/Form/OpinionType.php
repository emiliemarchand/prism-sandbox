<?php

namespace Application\Prism\PollBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

use Prism\PollBundle\Form\OpinionType as BaseOpinionType;

/**
 * OpinionType
 */
class OpinionType extends BaseOpinionType
{
    /**
     * Get Default Options
     *
     * @param array $options
     *
     * @return array
     */
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Application\Prism\PollBundle\Entity\Opinion',
        );
    }
}