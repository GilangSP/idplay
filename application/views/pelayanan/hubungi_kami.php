<section class="hero-wrap hero-wrap-2 js-fullheight"
	style="background-image: url('<?= base_url(); ?>assets/frontend/images/bg_2.jpg');"
	data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
			<div class="col-md-9 ftco-animate pb-5">
				<h1 class="mb-3 bread">Contact</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url(); ?>pelayanan">Home <i
								class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i
							class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section contact-section">
	<div class="container">
		<div class="row d-flex mb-5 contact-info">
			<div class="col-md-12 mb-4">
				<h2 class="h3">Kontak Inofrmasi</h2>
			</div>
			<div class="w-100"></div>
			<div class="col-md-3">
				<p><span>Alamat:</span>Jl. Setia Bhakti No.9, Podosugih, Kec. Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51111
				</p>
			</div>
			<div class="col-md-3">
				<p><span>Phone:</span> <a href="tel://081119505828">0811-1950-5828</a></p>
			</div>
			<div class="col-md-3">
				<p><span>Email:</span> <a href="mailto:wal@supercorridor.co.id">wal@supercorridor.co.id</a></p>
			</div>
			<div class="col-md-3">
				<p><span>Website</span> <a href="https://www.supercorridor.co.id/">www.supercorridor.co.id</a></p>
			</div>
		</div>
		<div class="row block-9" style="background-color: white;">
			<div class="col-md-6 order-md-last d-flex">
				<form action="#" class="bg-light p-5 contact-form">
					<div class="form-group">
						<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
					</div>
					<div class="form-group">
						<!-- <textarea name="pesan" id="pesan" cols="30" rows="7" class="form-control"
							placeholder="Pesan"></textarea> -->
						<input id="pesan" type="hidden" name="content">
						<trix-editor input="pesan" placeholder="Pesan"></trix-editor>
					</div>
					<div class="form-group">
						<input type="submit" value="Kirim Pesan" class="btn btn-primary py-3 px-5">
					</div>
				</form>

			</div>

			<div class="col-md-6 d-flex">
				<!-- <div id="map" class="bg-white"></div> -->
				<div class="bg-white">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1980.4594017846828!2d109.669625!3d-6.900314!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe0889eab813a4ada!2sIdPlay%20Jateng!5e0!3m2!1sen!2sid!4v1671012837623!5m2!1sen!2sid"
						width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</div>
</section>
