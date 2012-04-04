<?php

namespace Application\Prism\PollBundle\Entity;

use Prism\PollBundle\Entity\BasePoll;

/**
 * Application\Prism\PollBundle\Entity\Poll
 */
class Poll extends BasePoll
{
    /**
     * @var string $author
     */
    private $author;

    /**
     * Set author
     *
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }
}