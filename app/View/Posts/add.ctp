<!-- File: /app/View/Posts/add.ctp -->

<h1>Add Post</h1>
<p><?php echo $this->Session->read('Auth.User.username'); ?></p>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('message', array('rows' => '3'));
echo $this->Form->end('Save Post');
?>
<p><?php echo $this->Html->link('back', array('controller' => 'posts', 'action' => 'index')); ?></p>
