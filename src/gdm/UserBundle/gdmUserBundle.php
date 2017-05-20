<?php

namespace gdm\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class gdmUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
