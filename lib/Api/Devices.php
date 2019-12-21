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
 * Devices Context
 */
class Devices extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'devices';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'devices';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'device';
}
