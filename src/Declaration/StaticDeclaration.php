<?php

namespace Pascal\Container\Declaration;

use Pascal\Container\Container\AbstractContainer;

class StaticDeclaration extends Declaration
{

    /**
     * @param AbstractContainer $container
     * @return mixed
     */
    public function instantiate(AbstractContainer $container)
    {
        return $this->statement;
    }
}
