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
				<h4 class="page-title">Data Berita</h4>
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
						Menu ini digunakan untuk menambah data berita
					</p>
					<?= form_error('berita', '<div class="alert alert-danger" role="alert">
										', '
										</div>'); ?>
					<?= $this->session->flashdata('message_berita'); ?>
					<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#inputModal" onclick="tambahBerita();">Tambah Berita</button>
					<table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Judul</th>
								<th scope="col">Subject</th>
								<th scope="col">Gambar</th>
								<th scope="col">Tangal</th>
								<th scope="col">Action</th>
							</tr>
						</thead>

						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($berita as $b) : ?>
							<tr>
								<td scope="row"><?= $i; ?></td>
								<td><?= $b['judul']; ?></td>
								<td><?= $b['subject']; ?></td>
								<td>
									<img style="height: 80px; width: 80px;" src="<?= base_url('assets/img/berita/') . $b['image']; ?>" alt="" class="img-thumbnail">
								</td>
								<td><?= $b['tanggal']; ?></td>
								<td>
									<div class="dropdown float-end">
										<a href="#" class="dropdown-toggle text-muted arrow-none"
											data-bs-toggle="dropdown" aria-expanded="false">
											<i class="mdi mdi-dots-vertical font-18"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<!-- item-->
											<button class="dropdown-item" data-toggle="modal" id="btnEdit" data-target="#inputModal"
												data-id="<?= $b['id']; ?>"
												onclick="editBerita()"><i
													class="mdi mdi-pencil me-1"></i> Edit </button>
											<!-- item-->
											<button class="dropdown-item" data-toggle="modal" data-target="#deleteModal"
												data-id="<?= $b['id']; ?>"
												onclick="deleteBerita(`<?= $b['id']; ?>`)"><i
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
				<a onclick="javascript:void(0);" data-dismiss="modal" class="btn btn-close"></a>
			</div>
			<form class="form-horizontal" id="submit">
			<input type="hidden" name="id" id="id">
			<input type="hidden" name="url" id="url">
			<div class="card-body">
				<div id="progressbarwizard">

					<ul class="nav nav-pills nav-justified form-wizard-header mb-3">
						<li class="nav-item">
							<a href="#bertia" data-bs-toggle="tab" data-toggle="tab"
								class="nav-link rounded-0 pt-2 pb-2">
								<i class="mdi mdi-account me-1"></i>
								<span class="d-none d-sm-inline">Berita</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#upload" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
								<i class="mdi mdi-file-document me-1"></i>
								<span class="d-none d-sm-inline">Upload</span>
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
						<div class="tab-pane" id="bertia">
							<div class="row">
								<div class="col-12">

									<div class="form-floating mb-2">
										<input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan Judul" autofocus />
										<label for="judul">Judul</label>
									</div>
									<div class="form-floating mb-2">
										<input type="text" class="form-control" id="subject" name="subject" placeholder="Masukan Subject" />
										<label for="subject">Subject</label>
									</div>
									<div class="form-floating mb-2">
										<!-- <textarea name="pesan" id="pesan" cols="30" rows="7" class="form-control" placeholder="Pesan"></textarea> -->
										<input id="isi" type="hidden" name="isi">
										<trix-editor input="isi" class="trix-content" id="isine" placeholder="Isi"></trix-editor>
										<!-- <label for="pesan">Pesan</label> -->
									</div>

								</div> <!-- end col -->
							</div> <!-- end row -->
						</div>

						<!-- DATA 2 -->
						<!-- ################################################################################################################################# -->
						<div class=" tab-pane" id="upload">
							<div class="row">
								<div class="col-12">
									<div class="form-floating mb-2">
										<input type="date" class="form-control" id="tanggal" name="tanggal" />
										<label for="tanggal">Tanggal</label>
									</div>

									<div class="row mb-3">
										<label class="col-md-2 col-form-label" for="userName1">Upload Foto Berita</label>
										<div class="col-md-9">
											<div class="form-group row">
												<div class="row data-form-berita">
												</div>
												<div class="mt-3">
													<input type="hidden" id="img" name="img">
													<div class="col-sm-12">
														<div class="custom-file">
															<input type="file" id="image" name="image"
																class="form-control">
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
				<h5 class="modal-title" id="DeleteModalLabel">Hapus Berita</h5>
				<button onclick="javascript:void(0);" data-dismiss="modal" class=" btn btn-close">
				</button>
			</div>
			<div class="modal-body">Apakah anda yakin ingin menghapus ini?</div>
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

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script type="text/javascript">
	function viewImage(){
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
	}

	$('#submit').submit(function(e){
		e.preventDefault();
		var urln = $("#url").val(urle);
		var judul = $("#judul").val();
		var subject = $("#subject").val();
		var isi = $("#isi").val();
		var tanggal = $("#tanggal").val();
		var inpFilene = $("#image").val();
		if(judul == "" || subject == ""){
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Harus Di isi semua!',
			});
		}else if(inpFilene == ""){
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Image Harus diupload!',
			});
		}else{
			$.ajax({
				url: urln,
				type:"post",
				data:new FormData(this),
				processData:false,
				contentType:false,
				cache:false,
				async:false,
				success: function(data){
					Swal.fire({
						icon: 'success',
						title: 'Berhasil',
						text: 'Anda Berhasil Menyimpan!',
					});
					$("#judul").val(null);
					$("#subject").val(null);
					$("#isine").val(null);
					$("#tanggal").val(null);
					$("#image").val(null);
				}
			});
		}
	});
</script>
