<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Data Absen</h1>


	<!-- DataTales Example -->
	<div class="card shadow mb-4">

		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Name</th>
							<th>IN</th>
							<th>OUT</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Name</th>
							<th>IN</th>
							<th>OUT</th>
						</tr>
					</tfoot>
					<tbody>
						<?php
						foreach ($queryAbsen as $row) {
						?>
							<tr>
								<td><?= $row->name ?></td>
								<td><?= $row->in ?></td>
								<td><?= $row->out ?></td>
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