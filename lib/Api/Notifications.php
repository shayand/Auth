<?php
/**
 * @package     Nextlead
 * @copyright   2014 Nextlead, NP. All rights reserved.
 * @author      Nextlead
 * @link        http://nextlead.dev
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Nextlead\Api;

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
