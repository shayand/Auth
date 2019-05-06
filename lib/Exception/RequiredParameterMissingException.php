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
 * Exception representing a required parameter is missing for Basic Authentication
 */
class RequiredParameterMissingException extends AbstractApiException
{
    /**
     * {@inheritdoc}
     */
    const DEFAULT_MESSAGE = 'Required Parameter is missing.';
}
