<table class="table table-stripped table-bordered">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Height</th>
            <th>Weight</th>
            <th>Actions</th>
        </tr>
    </thead>
	<tbody>
		<?php foreach($programmers as $p) : ?>
        <tr>
			<td><?php echo $p->first_name; ?></td>
			<td><?php echo $p->last_name; ?></td>
			<td><?php echo $p->height; ?> cm</td>
			<td><?php echo $p->weight; ?> kg</td>
			<td>
				<a href="/programmer/edit/<?php echo $p->id; ?>">Edit</a>
				<a href="/programmer/delete/<?php echo $p->id; ?>">Delete</a>
			</td>
        </tr>
		<?php endforeach; ?>
	</tbody>
</table>
