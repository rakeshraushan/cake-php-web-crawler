<?php 

$this->Rss->header('Content-Type: application/atom+xml');
//$this->Rss->header('Content-Type: text/xml');
if (!isset($documentData)) {    
	$documentData = array();
}
if (!isset($channelData)) {    
	$channelData = array();
}
if (!isset($channelData['title'])) {    
	$channelData['title'] = $title_for_layout;
} 
$channel = $this->Rss->channel(array(), $channelData, $content_for_layout);
echo $this->Rss->document($documentData,$channel);
?>