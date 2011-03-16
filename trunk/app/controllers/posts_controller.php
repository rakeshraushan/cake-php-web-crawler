<?php
class PostsController extends AppController{
	var $name='Posts';
	function index(){
		if( $this->RequestHandler->isRss() ){    
   			$posts = $this->Post->find('all', array('limit' => 20, 'order' => 'Post.created DESC'));
   			$this->set(compact('posts'));
		}    
		// this is not an Rss request, so deliver    
		// data used by website's interface    
		$this->paginate['Post'] = array('order' => 'Post.created DESC', 'limit' => 10);        
		$posts = $this->paginate();    
		$this->set(compact('posts'));

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

