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
 * Notes Context
 */
class Notes extends Api
{
    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'notes';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'notes';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'note';

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array(
        'ids',
    );
}
