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
 * Tweets Context
 */
class Tweets extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'tweets';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'tweets';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'tweet';

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array();
}
