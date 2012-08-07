<?php

########################################################################
# Extension Manager/Repository config file for ext "additional_reports".
#
# Auto generated 19-07-2012 10:53
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Useful informations in reports module',
	'description' => 'Useful informations in the reports module : xclass, ajax, cliKeys, eID, general status of the system (encoding, DB, php vars...), hooks, compare local and TER extension (diff), used content type, used plugins, ExtDirect... It can really help you during migration or new existing project (to have a global reports of the system).',
	'category' => 'misc',
	'shy' => 0,
	'version' => '2.5.6',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'CERDAN Yohann',
	'author_email' => 'cerdanyohann@yahoo.fr',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.0.0-0.0.0',
			'typo3' => '4.0.0-4.7.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:72:{s:9:"ChangeLog";s:4:"d3ab";s:16:"ext_autoload.php";s:4:"6876";s:12:"ext_icon.gif";s:4:"87d7";s:17:"ext_localconf.php";s:4:"ee41";s:14:"ext_tables.php";s:4:"ff9c";s:13:"locallang.xml";s:4:"f6b0";s:43:"classes/class.tx_additionalreports_main.php";s:4:"19ce";s:49:"classes/class.tx_additionalreports_templating.php";s:4:"7c1b";s:43:"classes/class.tx_additionalreports_util.php";s:4:"fe36";s:14:"doc/manual.sxw";s:4:"6c1f";s:33:"eID/class.tx_compareFiles_eID.php";s:4:"acdb";s:14:"libs/close.png";s:4:"370c";s:16:"libs/loading.gif";s:4:"69f7";s:13:"libs/next.png";s:4:"1c8c";s:14:"libs/pause.png";s:4:"b960";s:13:"libs/play.png";s:4:"a404";s:17:"libs/previous.png";s:4:"156f";s:18:"libs/shadowbox.css";s:4:"6b2e";s:17:"libs/shadowbox.js";s:4:"e302";s:13:"mod1/conf.php";s:4:"8f18";s:14:"mod1/index.php";s:4:"70ab";s:22:"mod1/locallang_mod.xml";s:4:"9dbb";s:19:"mod1/moduleicon.gif";s:4:"87d7";s:56:"reports/reports_ajax/class.tx_additionalreports_ajax.php";s:4:"63e2";s:50:"reports/reports_ajax/tx_additionalreports_ajax.png";s:4:"84bb";s:62:"reports/reports_clikeys/class.tx_additionalreports_clikeys.php";s:4:"810c";s:56:"reports/reports_clikeys/tx_additionalreports_clikeys.png";s:4:"84bb";s:62:"reports/reports_dbcheck/class.tx_additionalreports_dbcheck.php";s:4:"6a53";s:56:"reports/reports_dbcheck/tx_additionalreports_dbcheck.png";s:4:"84bb";s:54:"reports/reports_eid/class.tx_additionalreports_eid.php";s:4:"737d";s:48:"reports/reports_eid/tx_additionalreports_eid.png";s:4:"84bb";s:66:"reports/reports_extdirect/class.tx_additionalreports_extdirect.php";s:4:"958c";s:60:"reports/reports_extdirect/tx_additionalreports_extdirect.png";s:4:"84bb";s:68:"reports/reports_extensions/class.tx_additionalreports_extensions.php";s:4:"cc79";s:62:"reports/reports_extensions/tx_additionalreports_extensions.png";s:4:"84bb";s:58:"reports/reports_hooks/class.tx_additionalreports_hooks.php";s:4:"ef52";s:52:"reports/reports_hooks/tx_additionalreports_hooks.png";s:4:"84bb";s:66:"reports/reports_logerrors/class.tx_additionalreports_logerrors.php";s:4:"c500";s:60:"reports/reports_logerrors/tx_additionalreports_logerrors.png";s:4:"84bb";s:62:"reports/reports_plugins/class.tx_additionalreports_plugins.php";s:4:"2d93";s:56:"reports/reports_plugins/tx_additionalreports_plugins.png";s:4:"84bb";s:74:"reports/reports_realurlerrors/class.tx_additionalreports_realurlerrors.php";s:4:"60e9";s:68:"reports/reports_realurlerrors/tx_additionalreports_realurlerrors.png";s:4:"84bb";s:60:"reports/reports_status/class.tx_additionalreports_status.php";s:4:"83c9";s:54:"reports/reports_status/tx_additionalreports_status.png";s:4:"84bb";s:72:"reports/reports_websitesconf/class.tx_additionalreports_websitesconf.php";s:4:"a9f0";s:66:"reports/reports_websitesconf/tx_additionalreports_websitesconf.png";s:4:"84bb";s:60:"reports/reports_xclass/class.tx_additionalreports_xclass.php";s:4:"43d1";s:54:"reports/reports_xclass/tx_additionalreports_xclass.png";s:4:"84bb";s:32:"res/css/tx_additionalreports.css";s:4:"2d6f";s:28:"res/images/control_first.gif";s:4:"04e1";s:37:"res/images/control_first_disabled.gif";s:4:"62ae";s:27:"res/images/control_last.gif";s:4:"78a2";s:36:"res/images/control_last_disabled.gif";s:4:"bcce";s:27:"res/images/control_next.gif";s:4:"7d21";s:36:"res/images/control_next_disabled.gif";s:4:"9fa2";s:31:"res/images/control_previous.gif";s:4:"d0d7";s:40:"res/images/control_previous_disabled.gif";s:4:"9cc0";s:24:"res/images/refresh_n.gif";s:4:"18f6";s:23:"res/templates/ajax.html";s:4:"3a7c";s:26:"res/templates/clikeys.html";s:4:"eb9f";s:26:"res/templates/dbcheck.html";s:4:"260b";s:22:"res/templates/eid.html";s:4:"562d";s:28:"res/templates/extdirect.html";s:4:"a931";s:29:"res/templates/extensions.html";s:4:"9af5";s:24:"res/templates/hooks.html";s:4:"1285";s:28:"res/templates/logerrors.html";s:4:"1b0a";s:26:"res/templates/plugins.html";s:4:"43df";s:32:"res/templates/realurlerrors.html";s:4:"22e0";s:25:"res/templates/status.html";s:4:"2d4c";s:30:"res/templates/websiteconf.html";s:4:"8da9";s:25:"res/templates/xclass.html";s:4:"e899";}',
	'suggests' => array(
	),
);

?>