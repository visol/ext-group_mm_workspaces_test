<?php
namespace Visol\GroupMmWorkspacesTest\Domain\Model;

/***
 *
 * This file is part of the "Group MM Relation Workspaces Test" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Lorenz Ulrich <lorenz.ulrich@visol.ch>, visol digitale Dienstleistungen GmbH
 *
 ***/

/**
 * News
 */
class News extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * title
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * Contacts
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Visol\GroupMmWorkspacesTest\Domain\Model\Contact>
     */
    protected $contacts = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->contacts = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Adds a Contact
     *
     * @param \Visol\GroupMmWorkspacesTest\Domain\Model\Contact $contact
     * @return void
     */
    public function addContact(\Visol\GroupMmWorkspacesTest\Domain\Model\Contact $contact)
    {
        $this->contacts->attach($contact);
    }

    /**
     * Removes a Contact
     *
     * @param \Visol\GroupMmWorkspacesTest\Domain\Model\Contact $contactToRemove The Contact to be removed
     * @return void
     */
    public function removeContact(\Visol\GroupMmWorkspacesTest\Domain\Model\Contact $contactToRemove)
    {
        $this->contacts->detach($contactToRemove);
    }

    /**
     * Returns the contacts
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Visol\GroupMmWorkspacesTest\Domain\Model\Contact> $contacts
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Sets the contacts
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Visol\GroupMmWorkspacesTest\Domain\Model\Contact> $contacts
     * @return void
     */
    public function setContacts(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $contacts)
    {
        $this->contacts = $contacts;
    }
}
