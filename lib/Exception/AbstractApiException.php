<?php
/**
 * @package     Nextlead
 * @copyright   2014 Nextlead, NP. All rights reserved.
 * @author      Nextlead
 * @link        http://nextlead.dev
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Nextlead\Exception;

/**
 * Abstract Exception class with common behavour - DRY implementation.
 */
abstract class AbstractApiException extends \Exception
{
    /**
     * The default message to be used if a specific message is not provided.
     * Note: Overriden in subclass.
     */
    const DEFAULT_MESSAGE = 'Unknown Error';

    /**
     * {@inheritdoc}
     */
    public function __construct($message = '', $code = 500, \Exception $previous = null)
    {
        if (empty($message)) {
            // Use message appropriate to the subclass with late binding
            $message = static::DEFAULT_MESSAGE;
        }

        parent::__construct($message, $code, $previous);
    }
}
