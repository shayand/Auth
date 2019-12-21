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
