<?php
/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
 	require_once("./functions/templating.php");

	$App 	= new App();
	$Nav	= new Nav();
	$Menu 	= new Menu();

	include($App->getProjectCommon());	
	$localVersion = false;
	
	// 	# Paste your HTML content between the EOHTML markers!
	$html = get_include_contents('pages/template.html');
	if ($html == false) {
		$html = "Error! Couldn't load file pages/template.html";
	}

	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>
Path this time