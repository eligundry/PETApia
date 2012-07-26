<h1><?php echo $programmer->first_name . " " . $programmer->last_name; ?></h1>
<dl>
	<dt>Height</dt>
	<dd><?php echo $programmer->height; ?></dd>
	<dt>Weight</dt>
	<dd><?php echo $programmer->weight; ?></dd>
	<?php if (isset($typing)) : ?>
	<dt>Keyboard</dt>
	<dd><?php echo $typing->keyboard; ?></dd>
	<dt><abbr title="Words Per Minute">WPM</abbr></dt>
	<dd><?php echo $typing->wpm; ?></dd>
	<dt>Home Row?</dt>
	<dd><?php echo ($typing->home_row) ? 'Yes' : 'No';  ?></dd>
	<?php endif; ?>
</dl>
