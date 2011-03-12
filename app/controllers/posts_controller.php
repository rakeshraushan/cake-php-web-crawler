<?php
class PostsController extends AppController{
    var $name='Posts';
    var $components=array('RequestHandler');
 function index(){
    $posts=$this->Post->find('all');
    $this->set('list',$posts);		
	// Rss section
	$channelData = array('title' => 'Current posts | The blogger',
				'link' => array('controller' => 'posts', 'action' => 'index', 'ext' => 'rss'),
				'url' => array('controller' => 'posts', 'action' => 'index', 'ext' => 'rss'),
				'description' => 'The current posts in our blog',
				'language' => 'en-uk'
				);
	$posts = $this->Post->find('all', array('limit' => 10, 'order' => 'Post.created'));	
	$this->set(compact('channelData', 'posts'));	
    }
  function view($id=NULL){
        $temp=$this->Post->read(NULL,$id);
        $this->set('list1',$temp);
    }
  function add(){
    if(!empty($this->data)){
      if ($this->Post->save($this->data)){
          $this->Session->setFlash('Save thanh cong');
          $this->redirect(array('action'=>'index'));

      }
      else {
            $this->Session->setFlash('Save khong thanh cong');
        }
      }
    }
}
?>

