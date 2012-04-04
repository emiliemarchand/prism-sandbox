<?php

namespace Application\Prism\PollBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApplicationPrismPollBundle extends Bundle
{
    /**
     * Get the parent class
     *
     * return string
     */
    public function getParent()
    {
        return 'PrismPollBundle';
    }
}
