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
