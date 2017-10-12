<?php
namespace Visol\GroupMmWorkspacesTest\Controller;

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
 * ContactController
 */
class ContactController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * contactRepository
     *
     * @var \Visol\GroupMmWorkspacesTest\Domain\Repository\ContactRepository
     * @inject
     */
    protected $contactRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $contacts = $this->contactRepository->findAll();
        $this->view->assign('contacts', $contacts);
    }

    /**
     * action show
     *
     * @param \Visol\GroupMmWorkspacesTest\Domain\Model\Contact $contact
     * @return void
     */
    public function showAction(\Visol\GroupMmWorkspacesTest\Domain\Model\Contact $contact)
    {
        $this->view->assign('contact', $contact);
    }
}
