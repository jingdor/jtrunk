a:13:{i:0;s:115:"<!DOCTYPE html>
<html>
    <head>
        <title><?php echo (empty($title) ? ('title') : ($title)); ?></title>
";s:4:"meta";N;i:1;s:191:"

<?php echo $this->tag->stylesheetlink('css/normalize.css'); ?>
<?php echo $this->tag->stylesheetlink('css/animate.css'); ?>
<?php echo $this->tag->stylesheetlink('css/1140.css'); ?>

";s:4:"link";N;i:2;s:274:"


<?php echo $this->tag->stylesheetlink('css/all.css'); ?>
<?php echo $this->tag->javascriptInclude('js/jquery-2.1.1.min.js'); ?>
<?php echo $this->tag->javascriptInclude('js/underscore-min.js'); ?>
<?php echo $this->tag->javascriptInclude('js/backbone-min.js'); ?>
";s:6:"script";a:1:{i:0;a:4:{s:4:"type";i:357;s:5:"value";s:2:"
";s:4:"file";s:41:"../apps/frontend/views/layout/master.volt";s:4:"line";i:19;}}i:3;s:112:"
    </head>
    <body>
    <?php echo $this->partial('part/_header'); ?>
    <div id="container">
        ";s:7:"content";N;i:4;s:141:"
    </div>
    <?php echo $this->partial('part/_footer'); ?>
    </body>
  <?php echo $this->tag->javascriptInclude('js/all.js'); ?>  
";s:5:"style";N;i:5;s:2:"
";s:2:"js";N;i:6;s:9:"
</html>";}