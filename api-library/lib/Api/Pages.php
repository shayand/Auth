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
 * Pages Context
 */
class Pages extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'pages';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'pages';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'page';

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
