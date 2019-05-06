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
 * Tags Context
 */
class Tags extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'tags';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'tags';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'tag';
}
