<!-- Start Content-->
<div class="container-fluid">

	<!-- start page title -->
	<div class="row">
		<div class="col-12">
			<div class="page-title-box">
				<div class="page-title-right">
					<form class="d-flex">
						<div class="input-group">
							<input type="text" class="form-control form-control-light" id="dash-daterange">
							<span class="input-group-text bg-primary border-primary text-white">
								<i class="mdi mdi-calendar-range font-13"></i>
							</span>
						</div>
					</form>
				</div>
				<h4 class="page-title">Data Keluhan Pelanggan</h4>
			</div>
		</div>
	</div>
	<!-- end page title -->

	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">

					<h4 class="header-title"><?= $title; ?></h4>
					<p class="text-muted font-14">
						Menu ini digunakan untuk data keluhan pelanggan
					</p>
					<?= form_error('keluhan', '<div class="alert alert-danger" role="alert">
										', '
										</div>'); ?>
					<?= $this->session->flashdata('message_keluhan'); ?>
					<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#inputModal"
						onclick="addKeluhanPelanggan()">Tambah Keluhan Pelanggan</button>
					<table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">CID</th>
								<th scope="col">Nama</th>
								<th scope="col">Keluhan</th>
								<th scope="col">Gambar</th>
								<th scope="col">Validasi</th>
								<th scope="col">Action</th>
							</tr>
						</thead>

						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($keluhan as $k) : ?>
							<tr>
								<td scope="row"><?= $i; ?></td>
								<td><?= $k['cid']; ?></td>
								<td><?= $k['nama']; ?></td>
								<td>
									<?php if($k['keluhan'] == "taki"): ?>
										Tidak Ada Koneksi Internet
									<?php elseif($k['keluhan'] == "takilmm"): ?>
										Tidak Ada Koneksi Internet Lampu Modem Merah
									<?php elseif($k['keluhan'] == "il"): ?>
										Internet Lambat
									<?php elseif($k['keluhan'] == "its"): ?>
										Internet Tidak Stabil
									<?php elseif($k['keluhan'] == "tbbwt"): ?>
										Tidak Bisa Buka Web Tertentu
									<?php elseif($k['keluhan'] == "wl"): ?>
										Wifi Lambat
									<?php elseif($k['keluhan'] == "wts"): ?>
										Wifi Tidak Stabil
									<?php elseif($k['keluhan'] == "wta"): ?>
										Wifi Tidak Ada
									<?php elseif($k['keluhan'] == "wtbnkk"): ?>
										Wifi Tidak Bisa Nyambung Ke Komputer
									<?php elseif($k['keluhan'] == "wtbnkh"): ?>
										Wifi Tidak Bisa Nyambung Ke HP
									<?php elseif($k['keluhan'] == "wtbnpl"): ?>
										Wifi Tidak Bisa Nyambung Perangkat Lain
									<?php elseif($k['keluhan'] == "stta"): ?>
										Siaran TV Tidak Ada
									<?php elseif($k['keluhan'] == "sttsm"): ?>
										Siaran TV Tidak Stabil Muter
									<?php elseif($k['keluhan'] == "sttbkct"): ?>
										Siaran TV Tidak Bisa Ke Channel Tertentu
									<?php elseif($k['keluhan'] == "o"): ?>
										Others
									<?php else: ?>
										Tidak Ada
									<?php endif; ?>
								</td>
								<td>
									<img style="height: 80px; width: 80px;" src="<?= base_url('assets/img/keluhan/') . $k['gambar']; ?>" alt="" class="img-thumbnail">
								</td>
								<td>
									<?php if($k['validasi'] == 1): ?>
										<h5 class="text-info">Belum Dikerjakan</h5>
									<?php elseif($k['validasi'] == 2): ?>
										<h5 class="text-success">Sudah Dikerjakan</h5>
									<?php else: ?>
										<h5 class="text-danger">Komplain Ditolak</h5>
									<?php endif; ?>
								</td>
								<td>
									<div class="dropdown float-end">
										<a href="#" class="dropdown-toggle text-muted arrow-none"
											data-bs-toggle="dropdown" aria-expanded="false">
											<i class="mdi mdi-dots-vertical font-18"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<!-- item-->
											<button class="dropdown-item" data-toggle="modal" data-target="#inputModal"
												data-id="<?= $k['id_keluhan']; ?>"
												onclick="editKeluhanPelanggan(`<?= $k['id_keluhan']; ?>`)"><i
													class="mdi mdi-pencil me-1"></i> Edit </button>
											<!-- item-->
											<button class="dropdown-item" data-toggle="modal" data-target="#deleteModal"
												data-id="<?= $k['id_keluhan']; ?>"
												onclick="deleteKeluhanPelanggan(`<?= $k['id_keluhan']; ?>`)"><i
													class="mdi mdi-delete me-1"></i> Hapus </button>
										</div>
									</div>
								</td>
							</tr>
							<?php $i++; ?>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div> <!-- end card body-->
			</div> <!-- end card -->
		</div><!-- end col-->
	</div>
	<!-- end row-->

</div>
<!-- container -->

<!-- Modal Tambah Keluhan -->
<div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="InputModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="InputModalLabel">Form Keluhan</h5>
				<button onclick="javascript:void(0);" data-dismiss="modal" class="btn btn-close"></button>
			</div>
			<?= form_open_multipart('management/keluhan'); ?>
				<input type="hidden" name="id_tu" id="id_tu" value="1">
				<div class="card-body">
					<div id="progressbarwizard">

						<ul class="nav nav-pills nav-justified form-wizard-header mb-3">
							<li class="nav-item">
								<a href="#pelanggan" data-bs-toggle="tab" data-toggle="tab"
									class="nav-link rounded-0 pt-2 pb-2">
									<i class="mdi mdi-account me-1"></i>
									<span class="d-none d-sm-inline">Pelanggan</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="#keluhan" data-bs-toggle="tab" data-toggle="tab"
									class="nav-link rounded-0 pt-2 pb-2">
									<i class="mdi mdi-file-document me-1"></i>
									<span class="d-none d-sm-inline">Keluhan</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="#finish" data-bs-toggle="tab" data-toggle="tab"
									class="nav-link rounded-0 pt-2 pb-2">
									<i class="mdi mdi-checkbox-marked-circle-outline me-1 text-success"></i>
									<span class="d-none d-sm-inline">Finish</span>
								</a>
							</li>
						</ul>

						<div class="tab-content b-0 mb-0">

							<div id="bar" class="progress mb-3" style="height: 7px;">
								<div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success">
								</div>
							</div>

							<!-- DATA 1 -->
							<!-- ################################################################################################################################# -->
							<div class="tab-pane" id="pelanggan">
								<div class="row">
									<div class="col-12">

										<div class="form-floating mb-2">
											<input type="text" class="form-control" name="cid" id="floatingCID" placeholder="Masukan CID" />
											<input type="hidden" name="cid" id="cid">
											<label for="form-control">Nomer CID</label>
										</div>

										<div class="datanePelanggan"></div>

									</div> <!-- end col -->
								</div> <!-- end row -->
							</div>

							<!-- DATA 2 -->
							<!-- ################################################################################################################################# -->
							<div class=" tab-pane" id="keluhan">
								<div class="row">
									<div class="col-12">
										<div class="form-floating mb-2">
											<select class="form-select" id="jp" name="jp"
												aria-label="Floating label select example">
												<option selected>Pilih Keluhan</option>
												<option value="taki">Tidak Ada Koneksi Internet</option>
												<option value="takilmm">Tidak Ada Koneksi Internet Lampu Modem Merah
												</option>
												<option value="il">Internet Lambat</option>
												<option value="its">Internet Tidak Stabil</option>
												<option value="tbbwt">Tidak Bisa Buka Web Tertentu</option>
												<option value="wl">Wifi Lambat</option>
												<option value="wts">Wifi Tidak Stabil</option>
												<option value="wta">Wifi Tidak Ada</option>
												<option value="wtbnkk">Wifi Tidak Bisa Nyambung Ke Komputer</option>
												<option value="wtbnkh">Wifi Tidak Bisa Nyambung Ke HP</option>
												<option value="wtbnpl">Wifi Tidak Bisa Nyambung Perangkat Lain
												</option>
												<option value="stta">Siaran TV Tidak Ada</option>
												<option value="sttsm">Siaran TV Tidak Stabil Muter</option>
												<option value="sttbkct">Siaran TV Tidak Bisa Ke Channel Tertentu
												</option>
												<option value="o">Others</option>
											</select>
											<label for="floatingKeluhan">Optional Keluhan</label>
										</div>

										<div class="form-floating mb-2">
											<select class="form-select" id="validasi" name="validasi" aria-label="Floating label select example">
												<option selected>Pilih Validasi</option>
												<option value="1">Belum Dikerjakan</option>
												<option value="2">Sudah Dikerjakan</option>
												<option value="3">Komplain Ditolak</option>
											</select>
											<label for="floatingValidasi">Validasi</label>
										</div>

										<div class="row mb-3">
											<label class="col-md-3 col-form-label" for="userName1">Upload Foto
												Perangkat</label>
											<div class="col-md-9">
												<div class="form-group row">
													<div class="col-sm-12">
														<div class="row">
															<div class="image-preview col-sm-8" id="imagePreview_1">
																<img src="" alt="Image Preview" id="img1"
																	class="image-preview__image img-thumbnail input_data_1">
																<span
																	class="image-preview__default-text text_input_data_1">
																	Image Preview
																</span>
															</div>
															<input type="hidden" id="img" name="img">
															<div class="col-sm-12">
																<div class="custom-file">
																	<input type="file" id="image" name="image" class="form-control">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> <!-- end col -->
								</div> <!-- end row -->
							</div>

							<div class="tab-pane" id="finish">
								<div class="row">
									<div class="col-12">
										<div class="text-center">
											<h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
											<h3 class="mt-0">Terima Kasih !</h3>

											<p class="w-75 mb-2 mx-auto">Jika ada data Komplain yang
												kosong, anda Harus di
												isi data tersebut.</p>

											<div class="mb-3">
												<div class="form-check d-inline-block">
													<input type="checkbox" class="form-check-input" id="customCheck3">
													<label class="form-check-label" for="customCheck3">Saya setuju
														upload data ini selesai</label>
												</div>
											</div>
										</div>
									</div> <!-- end col -->
									<div class="col-9"></div>
									<div class="col-3 mb-3">
										<button type="button" class="btn btn-secondary align-items-end"
											data-dismiss="modal">Batal</button>
										<button type="submit" class="btn btn-primary align-items-end">Kirim</button>
									</div>
								</div> <!-- end row -->
							</div>

							<ul class="list-inline mb-0 wizard modal-footer">
								<li class="previous list-inline-item">
									<a href="#" class="btn btn-info">Previous</a>
								</li>
								<li class="next list-inline-item float-end">
									<a href="#" class="btn btn-info">Next</a>
								</li>
							</ul>

						</div> <!-- tab-content -->
					</div> <!-- end #progressbarwizard-->
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="DeleteModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="DeleteModalLabel">Hapus Menu</h5>
				<button onclick="javascript:void(0);" data-dismiss="modal" class=" btn btn-close">
				</button>
			</div>
			<div class="modal-body">Apakah anda yakin ingin menghapus menu ini?</div>
			<form method="POST">
				<input type="hidden" name="id_s" id="id_s">
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Hapus</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	// input data 1
	// ##############################################################################
	const inpFile_1 = document.getElementById('image');
	const previewContainer_1 = document.getElementById('imagePreview_1');
	const previewImage_1 = previewContainer_1.querySelector('.input_data_1');
	const previewDefaultText_1 = previewContainer_1.querySelector('.text_input_data_1');

	inpFile_1.addEventListener("change", function () {
		const file = this.files[0];

		if (file) {
			const reader = new FileReader();

			previewDefaultText_1.style.display = "none";
			previewImage_1.style.display = "block";

			reader.addEventListener("load", function () {
				previewImage_1.setAttribute("src", this.result);
			});
			reader.readAsDataURL(file);
		} else {
			previewDefaultText_1.style.display = null;
			previewImage_1.style.display = null;
			previewImage_1.setAttribute("src", "");
		}
	});
</script>
