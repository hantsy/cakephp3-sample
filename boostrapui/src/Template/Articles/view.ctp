<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $article->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?> </li>
    <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?> </li>
    </ul>
<?php $this->end(); ?>

<h2><?= h($article->title) ?></h2>
<div class="row">
        <div class="col-lg-5">
                                    <h6><?= __('Title') ?></h6>
                    <p><?= h($article->title) ?></p>
                                </div>
            <div class="col-lg-2">
                    <h6><?= __('Id') ?></h6>
                <p><?= $this->Number->format($article->id) ?></p>
                </div>
            <div class="col-lg-2">
                    <h6><?= __('Created') ?></h6>
                <p><?= h($article->created) ?></p>
                    <h6><?= __('Modified') ?></h6>
                <p><?= h($article->modified) ?></p>
                </div>
        </div>
    <div class="row texts">
            <div class="col-lg-9">
                <h6><?= __('Body') ?></h6>
                <?= $this->Text->autoParagraph(h($article->body)); ?>
            </div>
        </div>
    
