<?php
/**
 * @package     Shayand
 * @copyright   2014 Shayand, NP. All rights reserved.
 * @author      Shayand
 * @link        http://shayand.com
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Shayand\Exception;


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