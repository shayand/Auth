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
 * Points Context
 */
class Points extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'points';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'points';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'point';

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array(
        'ids',
    );

    /**
     * Get list of available action types
     *
     * @return array|mixed
     */
    public function getPointActionTypes()
    {
        return $this->makeRequest($this->endpoint.'/actions/types');
    }
}
