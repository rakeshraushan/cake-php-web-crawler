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
    <td style="background:#CCFF99"><b>Tiêu đề</b></td>
    <td style="background:#CCFF99"><b>Nội dung tóm tắt</b></td>
    <td style="background:#CCFF99"><b>Created</b></td>
    <td style="background:#CCFF99"><b>Modified</b></td>
    <td colspan="2" style="background:#CCFF99"><b>&nbsp;&nbsp;Image</b></td>
 </tr>
    <?php foreach ($posts as $li):?>

 <tr>
  <td><div align="left"><?php echo $li['Post']['id'];?></div></td>
  <td><div align="left"><?php echo $html ->link($li['Post']['title'],
  array('action'=>'view',$li['Post']['id']));?> </div></td>
  <td  width="700"><div  align="left"><?php echo $li['Post']['content'];?></td></div>
   <td width="120"><?php echo $li['Post']['created'];?></td>
  <td width ="120"><?php echo $li['Post']['modified'];?></td>
  <td width='20'><?php echo $li['Post']['image'];?></td>
 </tr>
 <?php endforeach;?>
 </table>