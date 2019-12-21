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
 * Companies Context
 */
class Companies extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'companies';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'companies';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'company';

    /**
     * @var array
     */
    protected $bcRegexEndpoints = array(
        'companies/(.*?)/contact/(.*?)/add'    => 'companies/$1/contact/add/$2', // 2.6.0
        'companies/(.*?)/contact/(.*?)/remove' => 'companies/$1/contact/remove/$2' // 2.6.0
    );

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array(
        'ids',
        'is:mine',
    );

    /**
     * Add a contact to the company
     *
     * @param int $id        Company ID
     * @param int $contactId Contact ID
     *
     * @return array|mixed
     */
    public function addContact($id, $contactId)
    {
        return $this->makeRequest($this->endpoint.'/'.$id.'/contact/'.$contactId.'/add', array(), 'POST');
    }

    /**
     * Remove a contact from the company
     *
     * @param int $id        Company ID
     * @param int $contactId Contact ID
     *
     * @return array|mixed
     */
    public function removeContact($id, $contactId)
    {
        return $this->makeRequest($this->endpoint.'/'.$id.'/contact/'.$contactId.'/remove', array(), 'POST');
    }
}
