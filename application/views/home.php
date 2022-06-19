<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Data User</h1>


	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a href="<?= base_url('/home/halaman_tambah'); ?>" class="btn btn-primary ">Create</a>

		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Username</th>
							<th>Password</th>
							<th>Role</th>
							<th>departemen</th>
							<th>Position</th>
							<th>Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Username</th>
							<th>Password</th>
							<th>Role</th>
							<th>departemen</th>
							<th>Position</th>
							<th>Action</th>
						</tr>
					</tfoot>
					<tbody>
						<?php
						$count = 0;
						foreach ($queryUser as $row) {
							$count = $count + 1;
						?>
							<tr>
								<td><?= $id = $row->id ?></td>
								<td><?= $row->name ?></td>
								<td><?= $row->username ?></td>
								<td><?= $row->password ?></td>
								<td><?= $row->role ?></td>
								<td><?= $row->departemen ?></td>
								<td><?= $row->position ?></td>
								<td><a href="<?= base_url('/home/halaman_edit/') ?><?= $row->id ?>">updates</a> |
									<a href="<?= base_url('/home/prosesDelete/') ?><?= $row->id ?>">delete</a>
								</td>
							</tr>
						<?php
						};
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>