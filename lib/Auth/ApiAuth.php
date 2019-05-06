<?php

/*
 * @copyright   2014 Nextlead Contributors. All rights reserved
 * @author      Nextlead, Inc.
 *
 * @link        https://Nextlead.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Nextlead\Auth;

/**
 * OAuth Client modified from https://code.google.com/p/simple-php-oauth/
 */
class ApiAuth
{
    /**
     * Get an API Auth object
     *
     * @param array  $parameters
     * @param string $authMethod
     *
     * @return AuthInterface
     *
     * @deprecated
     */
    public static function initiate($parameters = array(), $authMethod = 'OAuth')
    {
        $object = new self;

        return $object->newAuth($parameters, $authMethod);
    }

    /**
     * Get an API Auth object
     *
     * @param array  $parameters
     * @param string $authMethod
     *
     * @return AuthInterface
     */
    public function newAuth($parameters = array(), $authMethod = 'OAuth')
    {
        $class      = 'Nextlead\\Auth\\'.$authMethod;
        $authObject = new $class();

        $reflection = new \ReflectionMethod($class, 'setup');
        $pass       = array();

        foreach ($reflection->getParameters() as $param) {
            if (isset($parameters[$param->getName()])) {
                $pass[] = $parameters[$param->getName()];
            } else {
                $pass[] = null;
            }
        }

        $reflection->invokeArgs($authObject, $pass);

        return $authObject;
    }
}
