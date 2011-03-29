<?php echo $html->image('item.jpg', array('alt' => 'CakePHP'))?>
<h2>Hi everybody</h2>
<br>
<div>
 <span>
     <?php echo $html->link("RSS", array('action'=>'index.rss'));?>

   </span>
   </div>
<?php echo $html->link('Home',array('action'=>'index'));?>
<?php echo "         ";?>
<?php echo $html->link('Rss Creater',array('action'=>'add'));?>
<br><br>
<p>Danh sách các trang</p>
<table>
  <tr>
    <td style="background:#CCFF99"><b>ID</b></td>
    <td style="background:#CCFF99"><b>Url</b></td>
    <td style="background:#CCFF99"><b>Nội dung tóm tắt</b></td>
    <td style="background:#CCFF99"><b>Image</b></td>
    <td style="background:#CCFF99"><b>Created</b></td>
 </tr>
    <?php foreach ($posts as $li):?>

 <tr>
  <td><div align="left"><?php echo $li['Post']['id'];?></div></td>
  <td><div align="left">
  	<a href="<?php echo $li['Post']['url'];?>" target="_blank"><?php echo $li['Post']['url'];?></a>
    <?php //echo $html ->link($li['Post']['url'],   array('action'=>'view',$li['Post']['id']));?> </div></td>
  <td  width="400"><div  align="left"><?php echo $li['Post']['content'];?></div></td>
   <td width="400">
   <a href="<?php echo $li['Post']['image'];?>"><?php echo $li['Post']['image']?></a></td>
  <td width ="120"><?php echo $li['Post']['created'];?></td>
 </tr>
 <?php endforeach;?>
 </table>