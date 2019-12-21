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
 * Notifications Context
 */
class Notifications extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'notifications';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'notifications';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'notification';

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array(
        'ids',
        'is:published',
        'is:unpublished',
        'is:mine',
        'is:uncategorized',
        'category',
        'lang',
    );
}
