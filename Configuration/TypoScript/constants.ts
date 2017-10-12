
plugin.tx_groupmmworkspacestest_news {
    view {
        # cat=plugin.tx_groupmmworkspacestest_news/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:group_mm_workspaces_test/Resources/Private/Templates/
        # cat=plugin.tx_groupmmworkspacestest_news/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:group_mm_workspaces_test/Resources/Private/Partials/
        # cat=plugin.tx_groupmmworkspacestest_news/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:group_mm_workspaces_test/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_groupmmworkspacestest_news//a; type=string; label=Default storage PID
        storagePid =
    }
}
