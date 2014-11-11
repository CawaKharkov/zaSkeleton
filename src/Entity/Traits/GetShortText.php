<?php

namespace IdeaFlow\AppBundle\Entity\Traits;


/**
 * Class GetShortText
 * @package IdeaFlow\AppBundle\Entity\Traits
 */
trait GetShortText
{
    public function getShortText($field)
    {
        return $this->truncate($this->{$field},250);
    }


    public function truncate($str, $len)
    {
        $tail = max(0, $len - 10);
        $trunk = substr($str, 0, $tail);
        $trunk .= strrev(preg_replace('~^..+?[\s,:]\b|^...~', '...', strrev(substr($str, $tail, $len - $tail))));
        return $trunk;
    }
}