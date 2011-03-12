<?php

foreach ($posts as $post) {
	$postTime = strtotime($post['Post']['created']);
	$postLink = array(
	'controller' => 'posts',
	'action' => 'view',
	'year' => date('Y', $postTime),
	'month' => date('m', $postTime),
	'day' => date('d', $postTime),
	$post['Post']['slug']);
	// You should import Sanitize
	App::import('Sanitize');
	// This is the part where we clean the body text for output as the description
	// of the rss item, this needs to have only text to make sure the feed validates
	$bodyText = preg_replace('=\(.*?\)=is', '', $post['Post']['body']);
	$bodyText = $this->Text->stripLinks($bodyText);
	$bodyText = Sanitize::stripAll($bodyText);
	$bodyText = $this->Text->truncate($bodyText, 400, array(
	'ending' => '...',
	'exact' => true,
	'html' => true,
	));
	echo $this->Rss->item(array(), array(
		'title' => $post['Post']['title'],
		'link' => $postLink,
		'guid' => array('url' => $postLink, 'isPermaLink' => 'true'),
		'description' => $bodyText,
		'dc:creator' => $post['Post']['author'],
		'pubDate' => $post['Post']['created']));
}