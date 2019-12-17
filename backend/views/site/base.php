<?php

/* @var $this yii\web\View */

$this->title = 'AB12 Marketing';
?>
<!-- <div class="wrapper"> -->

<div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->

    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text">
            Creative Tim
        </a>
    </div>

    <?php $this->beginContent('@app/views/site/menu.php'); ?>    
    <?php $this->endContent(); ?>       
</div>

<!-- <div class="main-panel">
    
    <div class="content">
        <div class="container-fluid">
            <div class="row">
        </div>
    </div>

</div> -->
<!-- </div> -->

