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
 * Marketing Messages Context
 */
class Messages extends Api
{
    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'messages';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'messages';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'message';
}
