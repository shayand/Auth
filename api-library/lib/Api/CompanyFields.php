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
 * CompanyFields Context
 */
class CompanyFields extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'fields/company';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'fields';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'field';
}
