<?php
class Post extends AppModel{
    var $name="Post";
    var $validate=array('title'=>array(
          'rule' => 'notEmpty',
        'message'=>'Title Không được để trống'
    ),'url'=>array(
          'rule' => 'notEmpty',
        'message'=>'Url Không được để trống'));

}
 ?>

