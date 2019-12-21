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
 * Webhooks Context
 */
class Webhooks extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'hooks';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'hooks';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'hook';

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

    /**
     * Get list of available webhook triggers
     *
     * @return array|mixed
     */
    public function getTriggers()
    {
        return $this->makeRequest($this->endpoint.'/triggers');
    }
}
