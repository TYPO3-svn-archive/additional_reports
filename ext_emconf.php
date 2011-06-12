<?php

########################################################################
# Extension Manager/Repository config file for ext "additional_reports".
#
# Auto generated 12-06-2011 13:48
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
	'version' => '2.3.2',
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
			'typo3' => '4.0.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:50:{s:9:"ChangeLog";s:4:"edd2";s:16:"ext_autoload.php";s:4:"4bde";s:12:"ext_icon.gif";s:4:"87d7";s:17:"ext_localconf.php";s:4:"1bd0";s:14:"ext_tables.php";s:4:"074e";s:13:"locallang.xml";s:4:"9086";s:24:"tx_additionalreports.css";s:4:"458e";s:43:"classes/class.tx_additionalreports_main.php";s:4:"1407";s:14:"doc/manual.sxw";s:4:"6c1f";s:33:"eID/class.tx_compareFiles_eID.php";s:4:"6418";s:14:"libs/close.png";s:4:"370c";s:16:"libs/loading.gif";s:4:"69f7";s:13:"libs/next.png";s:4:"1c8c";s:14:"libs/pause.png";s:4:"b960";s:13:"libs/play.png";s:4:"a404";s:17:"libs/previous.png";s:4:"156f";s:18:"libs/shadowbox.css";s:4:"6b2e";s:17:"libs/shadowbox.js";s:4:"e302";s:13:"mod1/conf.php";s:4:"8f18";s:14:"mod1/index.php";s:4:"23b1";s:22:"mod1/locallang_mod.xml";s:4:"9dbb";s:19:"mod1/moduleicon.gif";s:4:"87d7";s:48:"reports_ajax/class.tx_additionalreports_ajax.php";s:4:"1a8b";s:42:"reports_ajax/tx_additionalreports_ajax.png";s:4:"84bb";s:54:"reports_clikeys/class.tx_additionalreports_clikeys.php";s:4:"bc46";s:48:"reports_clikeys/tx_additionalreports_clikeys.png";s:4:"84bb";s:46:"reports_eid/class.tx_additionalreports_eid.php";s:4:"0169";s:40:"reports_eid/tx_additionalreports_eid.png";s:4:"84bb";s:58:"reports_extdirect/class.tx_additionalreports_extdirect.php";s:4:"f825";s:52:"reports_extdirect/tx_additionalreports_extdirect.png";s:4:"84bb";s:60:"reports_extensions/class.tx_additionalreports_extensions.php";s:4:"8160";s:54:"reports_extensions/tx_additionalreports_extensions.png";s:4:"84bb";s:50:"reports_hooks/class.tx_additionalreports_hooks.php";s:4:"87a9";s:44:"reports_hooks/tx_additionalreports_hooks.png";s:4:"84bb";s:54:"reports_plugins/class.tx_additionalreports_plugins.php";s:4:"fa4a";s:48:"reports_plugins/tx_additionalreports_plugins.png";s:4:"84bb";s:52:"reports_status/class.tx_additionalreports_status.php";s:4:"a40b";s:46:"reports_status/tx_additionalreports_status.png";s:4:"84bb";s:52:"reports_xclass/class.tx_additionalreports_xclass.php";s:4:"5caf";s:46:"reports_xclass/tx_additionalreports_xclass.png";s:4:"84bb";s:21:"res/control_first.gif";s:4:"04e1";s:30:"res/control_first_disabled.gif";s:4:"62ae";s:20:"res/control_last.gif";s:4:"78a2";s:29:"res/control_last_disabled.gif";s:4:"bcce";s:20:"res/control_next.gif";s:4:"7d21";s:29:"res/control_next_disabled.gif";s:4:"9fa2";s:24:"res/control_previous.gif";s:4:"d0d7";s:33:"res/control_previous_disabled.gif";s:4:"9cc0";s:19:"res/information.png";s:4:"6235";s:17:"res/refresh_n.gif";s:4:"18f6";}',
	'suggests' => array(
	),
);

?>