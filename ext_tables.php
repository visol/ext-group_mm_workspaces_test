<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Visol.GroupMmWorkspacesTest',
            'News',
            'News'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('group_mm_workspaces_test', 'Configuration/TypoScript', 'Group MM Relation Workspaces Test');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_groupmmworkspacestest_domain_model_news', 'EXT:group_mm_workspaces_test/Resources/Private/Language/locallang_csh_tx_groupmmworkspacestest_domain_model_news.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_groupmmworkspacestest_domain_model_news');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_groupmmworkspacestest_domain_model_contact', 'EXT:group_mm_workspaces_test/Resources/Private/Language/locallang_csh_tx_groupmmworkspacestest_domain_model_contact.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_groupmmworkspacestest_domain_model_contact');

    }
);
