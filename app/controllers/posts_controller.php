<?php
include 'app/controllers/simple_html_dom.php';
class PostsController extends AppController{
	var $name='Posts';
	var $components = array('RequestHandler');
	var $helpers = array('Text');
	function index(){
		//$html=file_get_html('http://dantri.com.vn');
		///foreach ($html->find('div[class=mt1 clearfix]') as $conte){
		//echo $conte;
		////}
		//div[class=fl wid335 pt5]
		//this is rss
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
		////xu li chinh
	  $html=file_get_html($this->data['Post']['diachi']);
	  if ($this->data['Post']['path']!=''){
		foreach ($html->find($this->data['Post']['path']) as $link){
		   foreach ($link->find('a') as $url){
		 	 $url=$url->href;
		 	 if(substr(($url),0,4)!='http'){
		 	 $url1=$this->data['Post']['diachi'].$url;
		 	}
		 	 else{
		 	 $url1=$url;
		 	}
		   }
           foreach ($link->find('img') as $tr){
       	   $content=$tr->title;
           if(substr(($tr->src),0,4)!='http'){
		 	 $image=$this->data['Post']['diachi'].$tr->src;
		 	}
		 	 else{
		 	 $image=$tr->src;
		 	}
		   }
		$day=gmdate('Y:n:j');
        $sql ="INSERT INTO posts (url,content,image,created) VALUES ('$url1','$content','$image','$day')";
        mysql_query($sql);
          }	
	   }
	   else {
	   	
	   }
	
	}
}
?>

