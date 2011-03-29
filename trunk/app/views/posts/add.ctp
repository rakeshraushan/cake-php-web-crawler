<fieldset>
<legend><?php __('Created Rss');?></legend>
Please fill in all fields
<?php
echo $form->create('Post',array('action'=>'add'));
echo $form->input('diachi',array('label'=>'Nhập vào Url<br>(Không thể thiếu trường này)'));
echo $form->input('path',array('label'=>'Nhập vào Class'));
echo $form->end ('Add');
?>
<br><br>
<?php echo $html->link('Back',array('action'=>'index'));?>
</fieldset>