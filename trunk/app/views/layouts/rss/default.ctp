<?php
$this->set('documentData', array(
'xmlns:dc' => 'http://purl.org/dc/elements/1.1/'));
$this->set('channelData', array(
'title' => __("Most Recent Posts", true),
'link' => $this->Html->url('/', true),
'description' => __("Most recent posts.", true),
'language' => 'en-us'));