<?php

$this->start("title");
echo 'SwitchLearn - Learn';
$this->end();

$this->start("header-title");
echo 'Learn';
$this->end();

?>

<?= $this->element('page-title', array('title' => 'Learn')); ?>

<div id="courseSearch">
    <input type="text" placeholder="Search course content">
    <div id="searchButton-med">
        <?= $this->Html->image('searchIcon-med.png', array('alt' => 'Search Icon')) ?>
    </div>
</div>