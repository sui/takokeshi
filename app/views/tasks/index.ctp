<?php
echo $form->create('Task',array('action'=>'add'));
echo $form->input('title');
echo $form->end('Save Task')

?>

<table>
<tr>
    <td>ID</td>
    <td>Title</td>
    <td>Status</td>
    <td></td>
    <td>Completed</td>
    <td>Created</td>
</tr>
<?php foreach($tasks as $task): ?>
<?php $t = $task['Task']?>
<tr>
    <td><?php echo $t['id'];?></td>
    <td><?php echo $t['title'];?></td>
    <td><?php echo $t['status'];?></td>
    <td><?php echo $html->link("完了",'complete/'.$t['id']);?>
    </td>
    <td><?php echo $t['completed'];?></td>
    <td><?php echo $t['created'];?></td>
</tr>
<?php endforeach; ?>
<script type="text/javascript" src="/js/jquery.js">
    
</script>
</table>
