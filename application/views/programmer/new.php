<?php echo Form::open('programmer/create', array('class' => 'form-horizontal')); ?>
	<fieldset>
	    <legend>Create New Programmer</legend>
		<div class="control-group">
			<?php echo Form::label('first_name', 'Name', array('class' => 'control-label')); ?>
			<div class="controls">
				<?php echo Form::input('first_name', NULL, array('class' => 'input-medium', 'placeholder' => 'First Name', 'required' => 'required')); ?>
				<?php echo Form::input('last_name', NULL, array('class' => 'input-medium', 'placeholder' => 'Last Name', 'required' => 'required')); ?>
			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('height', 'Height', array('class' => 'control-label')); ?>
			<div class="controls">
				<div class="input-append">
					<?php echo Form::input('height', NULL, array('class' => 'span1')); ?>
					<span class="add-on">CM</span>
				</div>
			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('weight', 'Weight', array('class' => 'control-label')); ?>
			<div class="controls">
				<div class="input-append">
					<?php echo Form::input('weight', NULL, array('class' => 'span1')); ?>
					<span class="add-on">KG</span>
				</div>
			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('keyboard', 'Keyboard', array('class' => 'control-label')); ?>
			<div class="controls">
				<?php echo Form::input('keyboard', NULL, array()); ?>
			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('wpm', 'Typing Speed', array('class' => 'control-label')); ?>
			<div class="controls">
				<div class="input-append">
					<?php echo Form::input('wpm', NULL, array('class' => 'span1')); ?>
					<span class="add-on">
						<abbr title="Words Per Minute">WPM</abbr>
					</span>
				</div>
			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('home_row', 'Home Row', array('class' => 'control-label')); ?>
			<div class="controls">
				<label class="checkbox">
					<?php echo Form::checkbox('home_row', 'true', false); ?>
					Does this programmer use the home row when typing?
				</label>
			</div>
		</div>
		<div class="form-actions">
			<?php echo Form::submit('submit', 'Submit', array('class' => 'btn btn-primary')); ?>
		</div>
	</fieldset>
<?php echo Form::close(); ?>
