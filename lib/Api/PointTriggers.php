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
 * PointTriggers Context
 */
class PointTriggers extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'points/triggers';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'triggers';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'trigger';

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array(
        'ids',
    );

    /**
     * Remove events from a point trigger
     *
     * @param integer $triggerId
     * @param array   $eventIds
     *
     * @return array|mixed
     */
    public function deleteTriggerEvents($triggerId, array $eventIds)
    {
        return $this->makeRequest($this->endpoint.'/'.$triggerId.'/events/delete', array('events' => $eventIds), 'DELETE');
    }

    /**
     * Get list of available event types
     *
     * @return array|mixed
     */
    public function getEventTypes()
    {
        return $this->makeRequest($this->endpoint.'/events/types');
    }
}
