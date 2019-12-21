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
 * Categories Context
 */
class Categories extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'categories';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'categories';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'category';

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array(
        'ids',
        'is:published',
        'is:unpublished',
    );
}
