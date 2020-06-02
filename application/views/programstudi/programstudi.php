<?php defined('BASEPATH') OR exit('No direct script access allowed');?>


<div class="my-2"></div>

<!-- button tambah data kota -->
<a href="<?php echo site_url('programstudi/insert');?>" class="btn btn-success btn-icon-split">
	<span class="icon text-white-50">
		<i class="fas fa-plus-circle"></i>
	</span>
	<span class="text">Tambah Data</span>
</a>

<!-- Spacing class -->
<div class="my-2"></div>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Daftar Program Studi</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead class ="thead-dark">
					<tr>
						<th>#</th>
						<th>Kode Prodi</th>
						<th>Nama Prodi</th>
						<th>Nama Fakultas</th>
						<th>Status</th>
					</tr>
				</thead>

				<tbody>
					<?php $a = 1;
					foreach($data_prodi as $prodi):?>
					<tr>
						<td><?php echo $a++; ?></td>
						<td><?php echo $prodi['kode_prodi'];?></td>
						<td><?php echo $prodi['nama_prodi'];?></td>
						<td><?php echo $prodi['nama_fakultas'];?></td>
						<td>
							<a href="<?php echo site_url('programstudi/update/'.$prodi['kode_prodi']);?>" class="btn btn-warning">
							Ubah
							</a>
							|
							<a href="<?php echo site_url('programstudi/delete/'.$prodi['kode_prodi']);?>" class="btn btn-danger"  onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
							Hapus
							</a>
						</td>
					</tr>
					<?php endforeach?>		
				</tbody>
			</table>
		</div>
	</div>
</div>


<script>
	$(document).ready(function() {
		$('#dataTable').DataTable();
	});
</script>