<?php

namespace BCG\ContactBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BCGContactBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
