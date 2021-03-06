<?php

namespace WouterJ\Bundleless\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser as BaseControllerNameParser;

class ControllerNameParser extends BaseControllerNameParser
{
    public function build($controller)
    {
        if ('\\' === substr($controller, 0, 1)) {
            $controller = substr($controller, 1);
        }

        return parent::build($controller);
    }
}
