<section class="hero-wrap hero-wrap-2 js-fullheight"
	style="background-image: url('<?= base_url(); ?>assets/frontend/images/bg_2.jpg');"
	data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
			<div class="col-md-9 ftco-animate pb-5">
				<h1 class="mb-3 bread">Informasi Keluhan</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url(); ?>pelayanan">Home <i
								class="ion-ios-arrow-forward"></i></a></span> <span>Informasi Keluhan <i
							class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-counter img mt-md-5" id="section-counter">
	<div class="container">
		<div class="row">
			<div class="col-md-3 justify-content-center counter-wrap ftco-animate">
				<div class="block-18 text-center py-4 bg-primary mb-4">
					<div class="text">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-guest"></span>
						</div>
						<strong class="number"
							data-number="<?= $this->db->get('pelanggan')->num_rows(); ?>">0</strong>
						<span>Total Pelanggan</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 justify-content-center counter-wrap ftco-animate">
				<div class="block-18 text-center py-4 bg-primary mb-4">
					<div class="text">
						<div class="icon d-flex justify-content-center align-items-center">
							<span>
								<img src=" <?= base_url(); ?>assets/frontend/images/chatbot.png" height="50" width="50"
									alt="">
							</span>
						</div>
						<strong class="number"
							data-number="<?= $this->db->get_where('keluhan', ['validasi' => 2])->num_rows(); ?>">0</strong>
						<span>Keluhan yang sudah diproses</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 justify-content-center counter-wrap ftco-animate">
				<div class="block-18 text-center py-4 bg-primary mb-4">
					<div class="text">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="image.png">
								<img src=" <?= base_url(); ?>assets/frontend/images/global-marketing.png" height="50"
									width="50" alt="">
							</span>
						</div>
						<strong class="number" data-number="<?= $this->db->get('keluhan')->num_rows(); ?>">0</strong>
						<span>Total Keluhan Pelanggan</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 justify-content-center counter-wrap ftco-animate">
				<div class="block-18 text-center py-4 bg-primary mb-4">
					<div class="text">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-idea"></span>
						</div>
						<strong class="number" data-number="<?= $this->db->get('berita')->num_rows(); ?>">0</strong>
						<span>Topik</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section testimony-section ftco-no-pt">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-md-7 text-center heading-section ftco-animate">
				<h2 class="mb-3">Tabel Keluhan</h2>
			</div>
		</div>
		<div class="row ftco-animate">
			<div class="col-md-12">

				<table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">CID</th>
							<th scope="col">Nama Pelanggan</th>
							<th scope="col">Keluhan</th>
							<th scope="col">Petugas</th>
							<th scope="col">Pengerjaan</th>
						</tr>
					</thead>

					<tbody>
						<?php for ($i = 0; $i < count($keluhanlist); ++$i) { ?>
						<tr>
							<td scope="row"><?= ($page+$i+1); ?></td>
							<td><?= $keluhanlist[$i]->id_p; ?></td>
							<td><?= $keluhanlist[$i]->nama; ?></td>
							<td>
								<?php if($keluhanlist[$i]->keluhan == "taki"): ?>
									Tidak Ada Koneksi Internet
								<?php elseif($keluhanlist[$i]->keluhan == "takilmm"): ?>
									Tidak Ada Koneksi Internet Lampu Modem Merah
								<?php elseif($keluhanlist[$i]->keluhan == "il"): ?>
									Internet Lambat
								<?php elseif($keluhanlist[$i]->keluhan == "its"): ?>
									Internet Tidak Stabil
								<?php elseif($keluhanlist[$i]->keluhan == "tbbwt"): ?>
									Tidak Bisa Buka Web Tertentu
								<?php elseif($keluhanlist[$i]->keluhan == "wl"): ?>
									Wifi Lambat
								<?php elseif($keluhanlist[$i]->keluhan == "wts"): ?>
									Wifi Tidak Stabil
								<?php elseif($keluhanlist[$i]->keluhan == "wta"): ?>
									Wifi Tidak Ada
								<?php elseif($keluhanlist[$i]->keluhan == "wtbnkk"): ?>
									Wifi Tidak Bisa Nyambung Ke Komputer
								<?php elseif($keluhanlist[$i]->keluhan == "wtbnkh"): ?>
									Wifi Tidak Bisa Nyambung Ke HP
								<?php elseif($keluhanlist[$i]->keluhan == "wtbnpl"): ?>
									Wifi Tidak Bisa Nyambung Perangkat Lain
								<?php elseif($keluhanlist[$i]->keluhan == "stta"): ?>
									Siaran TV Tidak Ada
								<?php elseif($keluhanlist[$i]->keluhan == "sttsm"): ?>
									Siaran TV Tidak Stabil Muter
								<?php elseif($keluhanlist[$i]->keluhan == "sttbkct"): ?>
									Siaran TV Tidak Bisa Ke Channel Tertentu
								<?php elseif($keluhanlist[$i]->keluhan == "o"): ?>
									Others
								<?php else: ?>
									Tidak Ada
								<?php endif; ?>
							</td>
							<td>
								<?php if($keluhanlist[$i]->id_petugas == 1): ?>
									Belum Ditentukan Petugas
								<?php elseif($keluhanlist[$i]->id_petugas > 1): ?>
									<?= $keluhanlist[$i]->name; ?>
								<?php endif; ?>
							</td>
							<td>
								<?php if($keluhanlist[$i]->validasi == 1): ?>
									<h6 class="text-info">Belum Dikerjakan</h6>
								<?php elseif($keluhanlist[$i]->validasi == 2): ?>
									<h6 class="text-success">Sudah Dikerjakan</h6>
								<?php else: ?>
									<h6 class="text-danger">Komplain Ditolak</h6>
								<?php endif; ?>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>

			</div>
		</div>
	</div>
</section>

<section class="ftco-section-parallax ftco-section ftco-no-pt">
	<div class="parallax-img d-flex align-items-center">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-10 col-lg-7 text-center heading-section ftco-animate">
					<h2>Subcribe to our Newsletter</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
						live the blind texts. Separated they live in</p>
					<div class="row d-flex justify-content-center mt-4 mb-4">
						<div class="col-md-8">
							<form action="#" class="subscribe-form">
								<div class="form-group d-flex">
									<input type="text" class="form-control" placeholder="Enter email address">
									<input type="submit" value="Subscribe" class="submit px-3">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
