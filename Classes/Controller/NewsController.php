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
 * NewsController
 */
class NewsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * newsRepository
     *
     * @var \Visol\GroupMmWorkspacesTest\Domain\Repository\NewsRepository
     * @inject
     */
    protected $newsRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $news = $this->newsRepository->findAll();
        $this->view->assign('news', $news);
    }

    /**
     * action show
     *
     * @param \Visol\GroupMmWorkspacesTest\Domain\Model\News $news
     * @return void
     */
    public function showAction(\Visol\GroupMmWorkspacesTest\Domain\Model\News $news = null)
    {
        $previewNewsId = 0;
        if ($this->request->hasArgument('news_preview')) {
            $previewNewsId = (int)$this->request->getArgument('news_preview');
        }

        if ($this->request->hasArgument('news_preview_oid')) {
            $previewNewsOrigUid = (int)$this->request->getArgument('news_preview_oid');
            // In LIVE we won't have a t3ver_oid value
            if ($previewNewsOrigUid !== 0) {
                $previewNewsId = $previewNewsOrigUid;
            }
        }

        if ($previewNewsId > 0) {
            $news = $this->newsRepository->findByUid($previewNewsId, false);
        }

        $this->view->assign('news', $news);
    }
}
