<?php
/**
 * @package     Nextlead
 * @copyright   2014 Nextlead, NP. All rights reserved.
 * @author      Nextlead
 * @link        http://nextlead.dev
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Nextlead\Exception;


class AuthorizationRequiredException extends \Exception
{
    /**
     * @var string
     */
    private $authUrl;

    /**
     * AuthorizationRequiredException constructor.
     * @param string $authUrl
     * {@inheritdoc}
     */
    public function __construct($authUrl, $message = 'Authorization is required.', $code = 401, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->authUrl = $authUrl;
    }

    /**
     * @return string
     */
    public function getAuthUrl()
    {
        return $this->authUrl;
    }
}