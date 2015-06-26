<?php

namespace BCG\ContactBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BCGContactBundle extends Bundle
{
	public function getParent()
    {
    	//Override a FOS Bundle file if we have it in the BCG Bundle.
        return 'FOSUserBundle';
    }
}
