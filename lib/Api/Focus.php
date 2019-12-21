<?php
/*
 * @package     Shayand
 * @copyright   2014 Shayand, NP. All rights reserved.
 * @author      Shayand
 * @link        http://shayand.com
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Shayand\Api;

/*
 * Emails Context
 */
class Focus extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'focus';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'focus';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'focus';

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
