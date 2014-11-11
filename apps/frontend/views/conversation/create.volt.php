<!DOCTYPE html>
<html>
    <head>
        <title><?php echo (empty($title) ? ('title') : ($title)); ?></title>


<?php echo $this->tag->stylesheetlink('css/normalize.css'); ?>
<?php echo $this->tag->stylesheetlink('css/animate.css'); ?>
<?php echo $this->tag->stylesheetlink('css/1140.css'); ?>


<?php echo $this->tag->stylesheetlink('css/font-awesome.css'); ?>
<?php echo $this->tag->stylesheetlink('css/simditor.css'); ?>
<?php echo $this->tag->stylesheetlink('css/default.css'); ?>
<?php echo $this->tag->stylesheetlink('css/component.css'); ?>



<?php echo $this->tag->stylesheetlink('css/all.css'); ?>
<?php echo $this->tag->javascriptInclude('js/jquery-2.1.1.min.js'); ?>
<?php echo $this->tag->javascriptInclude('js/underscore-min.js'); ?>
<?php echo $this->tag->javascriptInclude('js/backbone-min.js'); ?>

<?php echo $this->tag->javascriptInclude('js/module.js'); ?>
<?php echo $this->tag->javascriptInclude('js/uploader.js'); ?>
<?php echo $this->tag->javascriptInclude('js/simditor.js'); ?>
<?php echo $this->tag->javascriptInclude('js/modernizr.custom.js'); ?>


    </head>
    <body>
    <?php echo $this->partial('part/_header'); ?>
    <div id="container">
        

	<div class="container16 conversation-create-box">
	 <div class="row title">
	 	<input placeholder=" Conversation title"/>
	 </div>
	 <div class="row content">
		<textarea id="editor" placeholder=" Conversation content" autofocus></textarea>
 	 </div>
 	 	<div>
 	 		<button class="btn btn-6 btn-6i">submit</button>
 	 	<div>
	<div>




    </div>
    <?php echo $this->partial('part/_footer'); ?>
    </body>
  <?php echo $this->tag->javascriptInclude('js/all.js'); ?>  


<script>
var editor = new Simditor({
  textarea: $('#editor')
});
</script>

</html>