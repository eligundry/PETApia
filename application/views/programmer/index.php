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
			<td><?php echo $p->height; ?> CM</td>
			<td><?php echo $p->weight; ?> KG</td>
			<td>
				<a href="/programmer/view/<?php echo $p->id; ?>" class="btn btn-mini btn-info"><i class="icon-user icon-white"></i> View</a>
				<a href="/programmer/edit/<?php echo $p->id; ?>" class="btn btn-mini btn-primary"><i class="icon-pencil icon-white"></i> Edit</a>
				<a href="/programmer/delete/<?php echo $p->id; ?>" class="btn btn-mini btn-danger"><i class="icon-trash icon-white"></i> Delete</a>
			</td>
        </tr>
		<?php endforeach; ?>
	</tbody>
</table>
