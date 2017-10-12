EXT: group_mm_workspaces_test
==========================================
This extensions helps to reproduce a suspected bug in TYPO3 Workspaces. When having a m:n relation of type group or select with an intermediate MM table, the workspace preview does not properly reflect the state of relations in the staged version even though the database entries are correct.

The extensions aims to make this reproducible with a minimum amount of code inspired by EXT:news.

Preparations
------------
* Install extension (if you install it without composer, make sure to add the autoloading configuration to your root composer.json)
* Create a page which will be used for the frontend preview of the records and add the "News" plugin.
* Add the static TypoScript to this page.
* Create a new folder and add some contacts and one news record without a relation to a contact.
* Create a workspace
* Add the following Page TSConfig to the folder containing your contacts and news:

```
TCEMAIN.preview.tx_groupmmworkspacestest_domain_model_news {
	# uid of the page containing the plugin
	previewPageId = 111
	useDefaultLanguageRecord = 0
	fieldToParameterMap {
		uid = tx_groupmmworkspacestest_news[news_preview]
		t3ver_oid = tx_groupmmworkspacestest_news[news_preview_oid]
	}
	additionalGetParameters {
		tx_groupmmworkspacestest_news {
			controller = News
			action = show
		}
	}
}
```

Steps to reproduce
---------------
* Initial state: You have a news record without a relation to a contact in your live version.
* Switch to your workspace, edit the record and add a relation.
* Current state: You have a news record with at least one relation in your staged version.
* Click "Save and view" record to open the Workspaces preview
* The staged version won't show any contacts even though you added them.
* Publish your changes: The relations you added will be correctly shown even though they were not visible in the workspace preview.

Credits
--------
Developed by visol digitale Dienstleistungen GmbH, www.visol.ch