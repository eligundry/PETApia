<?php echo Form::open('programmer/destroy', array()); ?>
	<fieldset>
		<legend>Delete <?php echo $programmer->first_name . " " . $programmer->last_name; ?>?</legend>
	    <p>Are you sure you want to delete <?php echo $programmer->first_name . " " . $programmer->last_name; ?>?</p>
		<div class="form-actions">
			<a href="/programmer/destroy/<?php echo $programmer->id; ?>" class="btn btn-danger">Delete</a>
			<a href="/" class="btn">Cancel</a>
		</div>
	</fieldset>
<?php echo Form::close(); ?>
