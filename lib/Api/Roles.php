<?php
/**
 * @package     Shayand
 * @copyright   2014 Shayand, NP. All rights reserved.
 * @author      Shayand
 * @link        http://shayand.com
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Shayand\Api;

/**
 * Roles Context
 */
class Roles extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'roles';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'roles';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'role';

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array(
        'ids',
        'is:admin',
        'name',
    );
}