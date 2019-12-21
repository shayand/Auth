<?php
/**
 * @package     Shayand
 * @copyright   2014 Shayand, NP. All rights reserved.
 * @author      Shayand
 * @link        http://shayand.com
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Shayand\Exception;

/**
 * Exception representing a required parameter is missing for Basic Authentication
 */
class RequiredParameterMissingException extends AbstractApiException
{
    /**
     * {@inheritdoc}
     */
    const DEFAULT_MESSAGE = 'Required Parameter is missing.';
}
