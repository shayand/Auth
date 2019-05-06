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
 * Assets Context
 */
class Assets extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'assets';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'assets';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'asset';

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
    );
}
