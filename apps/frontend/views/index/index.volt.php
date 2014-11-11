<!DOCTYPE html>
<html>
    <head>
        <title><?php echo (empty($title) ? ('title') : ($title)); ?></title>


<?php echo $this->tag->stylesheetlink('css/normalize.css'); ?>
<?php echo $this->tag->stylesheetlink('css/animate.css'); ?>
<?php echo $this->tag->stylesheetlink('css/1140.css'); ?>


<?php echo $this->tag->stylesheetlink('css/all.css'); ?>
<?php echo $this->tag->javascriptInclude('js/jquery-2.1.1.min.js'); ?>
<?php echo $this->tag->javascriptInclude('js/underscore-min.js'); ?>
<?php echo $this->tag->javascriptInclude('js/backbone-min.js'); ?>

    </head>
    <body>
    <?php echo $this->partial('part/_header'); ?>
    <div id="container">
        





    </div>
    <?php echo $this->partial('part/_footer'); ?>
    </body>
  <?php echo $this->tag->javascriptInclude('js/all.js'); ?>  

<style>
  body{

  }
</style>


</html>