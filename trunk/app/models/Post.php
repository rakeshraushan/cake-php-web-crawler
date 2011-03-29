<?php
class Post extends AppModel{
    var $name="Post";
    var $validate=array('url'=>array(
          'rule' => 'notEmpty',
        'message'=>' Không có dữ liệu '
    ),'content'=>array(
          'rule' => 'notEmpty',
        'message'=>'Không có dữ liệu')
    ,'image'=>array('rule'=>'notEmpty'
    ,'message'=>'Không có dữ liệu'));
}
 ?>

