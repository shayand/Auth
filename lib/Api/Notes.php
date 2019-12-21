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
