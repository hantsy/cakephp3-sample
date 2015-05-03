<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
        <li><?=
            $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $article->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]
            )
            ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
    </ul>
<?php $this->end(); ?>
<?= $this->Form->create($article); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Article']) ?></legend>
    <?php
        echo $this->Form->input('title');
                echo $this->Form->input('body');
                ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>