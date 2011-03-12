<?php
// $Id: app_controller.php 7 2009-04-07 19:14:13Z esmith $
/**
* @file  app_controller.php
*
*/
class AppController extends Controller {
  /**
  * Add the Javascript helper to all controllers.
  */
  var $helpers = array('Session', 'Html', 'Form', 'Javascript', 'Text');
  var $components = array('DebugKit.Toolbar','RequestHandler');
  

}