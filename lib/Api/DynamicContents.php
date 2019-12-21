<?php
/**
 * @package     Shayand
 * @copyright   2016 Shayand, NP. All rights reserved.
 * @author      Shayand
 * @link        http://shayand.com
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Shayand\Api;

/**
 * Dynamiccontents Context
 */
class DynamicContents extends Api
{
    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'dynamiccontents';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'dynamicContents';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'dynamicContent';

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
