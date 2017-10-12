<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Visol.GroupMmWorkspacesTest',
            'News',
            [
                'News' => 'list, show'
            ],
            // non-cacheable actions
            [
                'News' => '',
                'Contact' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    news {
                        iconIdentifier = group_mm_workspaces_test-plugin-news
                        title = LLL:EXT:group_mm_workspaces_test/Resources/Private/Language/locallang_db.xlf:tx_group_mm_workspaces_test_news.name
                        description = LLL:EXT:group_mm_workspaces_test/Resources/Private/Language/locallang_db.xlf:tx_group_mm_workspaces_test_news.description
                        tt_content_defValues {
                            CType = list
                            list_type = groupmmworkspacestest_news
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'group_mm_workspaces_test-plugin-news',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:group_mm_workspaces_test/Resources/Public/Icons/user_plugin_news.svg']
			);
		
    }
);
