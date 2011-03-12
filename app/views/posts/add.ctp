<fieldset>
<legend><?php __('Add a post!');?></legend>
Please fill in all fields
<?php
echo $form->create('Post',array('action'=>'add'));
echo $form->input('Post.url');
echo $form->input('Post.title');
echo $form->end ('Create a rss');
?>
<br><br>
<?php echo $html->link('Back',array('action'=>'index'));?>
</fieldset>