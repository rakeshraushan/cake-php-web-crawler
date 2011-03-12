<?php
class Post extends AppModel{
    var $name="Post";
    var $validate=array('title'=>array(
        'rule'=>VALID_NOT_EMPTY,
        'message'=>'Title Không được để trống'
    ),'url'=>array(
        'rule'=>VALID_NOT_EMPTY,
        'message'=>'Url Không được để trống'));

}
 ?>

