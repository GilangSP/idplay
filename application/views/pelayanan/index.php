    <style type="text/css">
    	.autocomplete-suggestions {
    		border: 1px solid #999;
    		background: #FFF;
    		overflow: auto;
    	}

    	.autocomplete-suggestion {
    		padding: 2px 5px;
    		white-space: nowrap;
    		overflow: hidden;
    	}

    	.autocomplete-selected {
    		background: #F0F0F0;
    	}

    	.autocomplete-suggestions strong {
    		font-weight: normal;
    		color: #3399FF;
    	}

    	.autocomplete-group {
    		padding: 2px 5px;
    	}

    	.autocomplete-group strong {
    		display: block;
    		border-bottom: 1px solid #000;
    	}

    </style>

<div class="hero-wrap" style="background-image: url('<?= base_url(); ?>assets/frontend/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
    			<div class="col-lg-6 col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
    				<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> PT. Trans
    					Indonesia
    					Superkoridor
    					<br><span>SUPERCORRIDOR</span>
    				</h1>
    				<p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
    						class="icon-map-marker mr-2"></span><a href="https://goo.gl/maps/BANRSpxnMg8EfdkFA"
    						style="color: black;">
    						Jl. Setia Bhakti No.9, Podosugih, Kec. Pekalongan Bar., Kota Pekalongan,
    						Jawa Tengah 51111
    					</a></p>
    				<div id="timer" class="d-flex">
    					<div class="time" id="days"></div>
    					<div class="time pl-3" id="hours"></div>
    					<div class="time pl-3" id="minutes"></div>
    					<div class="time pl-3" id="seconds"></div>
    				</div>
    			</div>
    			<div class="col-lg-2 col"></div>
    			<div class="col-lg-4 col-md-6 mt-0 mt-md-5">
    				<div class="request-form ftco-animate">
    					<h2 style="font-weight: bold;">Form Keluhan</h2>
    					<p>Jika ada keluhan masalah jaringan atau masalah providernya bisa isi di bawah ini dan segera
    						kami proses</p>
    					<div class="form-group">
    						<button class="btn btn-primary py-3 px-4" data-toggle="modal"
    							data-target="#tambahKeluhanModal" data-id="" onclick="addKeluhanPelangganF()"><i
    								class="mdi mdi-layers"></i> Isi Form Keluhan </button>
    						<!-- <input type="submit" value="Join now" class="btn btn-primary py-3 px-4"> -->
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

    <!-- Modal Tambah Keluhan -->
    <div class="modal fade" id="tambahKeluhanModal" tabindex="-1" role="dialog" aria-labelledby="InputModalLabel"
    	aria-hidden="true">
    	<div class="modal-dialog modal-lg">
    		<div class="modal-content">
    			<div class="modal-header">
    				<h5 class="modal-title" id="InputModalLabel">Form Keluhan</h5>
    				<button onclick="javascript:void(0);" data-dismiss="modal" class="btn btn-close"></button>
    			</div>
    			<form class="form-horizontal" id="submit">
    				<div class="card-body">
    					<div id="progressbarwizard">

    						<ul class="nav nav-pills nav-justified form-wizard-header mb-3">
    							<li class="nav-item">
    								<a href="#usaha" data-bs-toggle="tab" data-toggle="tab"
    									class="nav-link rounded-0 pt-2 pb-2">
    									<i class="mdi mdi-account me-1"></i>
    									<span class="d-none d-sm-inline">Pelanggan</span>
    								</a>
    							</li>
    							<li class="nav-item">
    								<a href="#jp" data-bs-toggle="tab" data-toggle="tab"
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
    							<div class="tab-pane" id="usaha">
    								<div class="row">
    									<div class="col-12">

    										<div class="form-floating mb-2">
    											<label for="form-control">Nomer CID</label>
    											<input type="text" class="form-control" name="cid" id="floatingCID"
    												placeholder="Masukan CID" />
											<input type="hidden" name="cid" id="cid">
    										</div>

    										<div class="datanePelanggan"></div>

    									</div> <!-- end col -->
    								</div> <!-- end row -->
    							</div>

    							<!-- DATA 2 -->
    							<!-- ################################################################################################################################# -->
    							<div class=" tab-pane" id="jp">
    								<div class="row">
    									<div class="col-12">
    										<div class="form-floating mb-2">
    											<label for="form-control">Optional Keluhan</label>
    											<select class="form-control" id="floatingjp" name="jp" aria-label="Floating label select example">
    												<option value="" selected>Pilih Keluhan</option>
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
    															<input type="hidden" id="img_1" name="img_1">
    															<div class="col-sm-12">
    																<div class="custom-file">
    																	<input type="file" id="image_1" name="image_1"
    																		class="form-control">
    																</div>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    									</div> <!-- end col -->
    									<div class="data-form-jp"></div>
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
    													<input type="checkbox" class="form-check-input"
    														id="customCheck3">
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

    <section class="ftco-section services-section bg-primary">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
    				<div class="media block-6 services d-block">
    					<div class="icon"><a href="https://goo.gl/maps/BANRSpxnMg8EfdkFA"><span
    								class="flaticon-placeholder"></span></a></div>
    					<div class="media-body">
    						<h3 class="heading mb-3">Lokasi</h3>
    						<p> Jl. Setia Bhakti No.9, Podosugih, Kec. Pekalongan Bar., Kota Pekalongan,
    							Jawa Tengah 51111</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
    				<div class="media block-6 services d-block">
    					<div class="mt-1 mb-2"><img src="<?= base_url(); ?>assets/frontend/images/chatbot.png" alt=""
    							width="80"></div>
    					<div class="media-body">
    						<h3 class="heading mb-3">Pelayanan</h3>
    						<p>Untuk memberikan pelayanan maksimal, saat ini sedang berlangsung perluasan jaringan kabel
    							fiber optik ring
    							nasional, regional dan distrik Pekalongan dan sekitarnya.</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
    				<div class="media block-6 services d-block">
    					<div class="mt-1 mb-2"><img src="<?= base_url(); ?>assets/frontend/images/settings2.png" alt=""
    							width="80"></div>
    					<div class="media-body">
    						<h3 class="heading mb-3">Keluhan</h3>
    						<p>Untuk keluhan pelanggan akan di proses melalui website ini dan selalu terupdate .</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
    				<div class="media block-6 services d-block">
    					<div class="mt-1 mb-2"><img src="<?= base_url(); ?>assets/frontend/images/networking.png" alt=""
    							width="80">
    					</div>
    					<div class="media-body">
    						<h3 class="heading mb-3">Jaringan</h3>
    						<p>Memperluas jaringan didukung infrastruktur yang luas serta terus meningkatkan perbaikan
    							di segala aspek
    							jaringan telekomunikasi. Kami juga menjalin kemitraan strategis guna memberikan solusi
    							serta kemudahan
    							bagi pelanggan.</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
    				style="background-image: url(<?= base_url(); ?>assets/frontend/images/bg_3.jpg);">
    			</div>
    			<div class="col-md-7 wrap-about py-md-5 ftco-animate">
    				<div class="heading-section mb-5 pt-5 pl-md-5">
    					<div class="pr-md-5 mr-md-5">
    						<h2 class="mb-4">Tentang Kami</h2>
    					</div>
    					<p>PT Trans Indonesia Superkoridor (Supercorridor) berdiri sejak Juni 2018, berlokasi di Jakarta
    						dan sejumlah
    						cabang yang tersebar di seluruh Indonesia berlokasi di Bogor, Tangerang, Bekasi, Bandung,
    						Tegal,
    						Pekalongan, Semarang, Surabaya, Balikpapan, Morowali dan Kendari.</p>
    					<p>Sebagai penyedia jaringan telekomunikasi, kami memberikan layanan dengan Infrastruktur
    						terintegrasi
    						Innercity, Backhaul dan Backbone.</p>
    					<div class="pr-md-5 mr-md-5">
    						<h2 class="mb-4">Visi</h2>
    					</div>
    					<p>Terdepan dalam memberikan solusi terbaik kepada masyarakat terhadap kebutuhan koneksi
    						internet. Terlebih
    						mendukung pembangunan infrastruktur ICT yang andal dan memberikan kepuasan pelanggan.</p>
    					<div class="pr-md-5 mr-md-5">
    						<h2 class="mb-4">Misi</h2>
    					</div>
    					<p>Memperluas jaringan didukung infrastruktur yang luas serta terus meningkatkan perbaikan di
    						segala aspek
    						jaringan telekomunikasi. Kami juga menjalin kemitraan strategis guna memberikan solusi serta
    						kemudahan bagi
    						pelanggan.</p>
    					<p><a href="https://goo.gl/maps/BANRSpxnMg8EfdkFA" class="btn btn-primary">Cari Lokasi</a></p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>


    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
    			<div class="col-md-7 text-center heading-section ftco-animate">
    				<h2 class="mb-3">Artikel</h2>
    			</div>
    		</div>
    		<div class="ftco-schedule">
    			<div class="row">
    				<div class="col-md-3 nav-link-wrap text-center text-md-right">
    					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
    						aria-orientation="vertical">
    						<a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill"
    							href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">First Day
    							<span>21 July 2019</span></a>

    						<a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
    							role="tab" aria-controls="v-pills-2" aria-selected="false">Second Day <span>22 July
    								2019</span></a>

    						<a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3"
    							role="tab" aria-controls="v-pills-3" aria-selected="false">Third Day <span>23 July
    								2019</span></a>

    					</div>
    				</div>
    				<div class="col-md-9 tab-wrap">

    					<div class="tab-content" id="v-pills-tabContent">

    						<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
    							aria-labelledby="day-1-tab">
    							<div class="speaker-wrap ftco-animate d-md-flex">
    								<div class="img speaker-img"
    									style="background-image: url(<?= base_url(); ?>assets/frontend/images/staff-1.jpg);">
    								</div>
    								<div class="text">
    									<h2><a href="#">Introduction to Business Leaders</a></h2>
    									<p>A small river named Duden flows by their place and supplies it with the
    										necessary regelialia. It is a paradisematic country, in which roasted parts
    										of sentences fly into your mouth.</p>
    									<span class="time">09:00 am - 4:30 pm</span>
    									<p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall,
    										Building Los Angeles CA</p>
    									<p>A small river named Duden flows by their place and supplies it with the
    										necessary regelialia. It is a paradisematic country, in which roasted parts
    										of sentences fly into your mouth.</p>
    									<h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span
    											class="position">Founder of Wordpress</span></h3>
    								</div>
    							</div>
    							<div class="speaker-wrap ftco-animate d-md-flex">
    								<div class="img speaker-img"
    									style="background-image: url(<?= base_url(); ?>assets/frontend/images/staff-2.jpg);">
    								</div>
    								<div class="text">
    									<h2><a href="#">Introduction to Business Leaders</a></h2>
    									<p>A small river named Duden flows by their place and supplies it with the
    										necessary regelialia. It is a paradisematic country, in which roasted parts
    										of sentences fly into your mouth.</p>
    									<span class="time">09:00 am - 4:30 pm</span>
    									<p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall,
    										Building Los Angeles CA</p>
    									<p>A small river named Duden flows by their place and supplies it with the
    										necessary regelialia. It is a paradisematic country, in which roasted parts
    										of sentences fly into your mouth.</p>
    									<h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span
    											class="position">Founder of Wordpress</span></h3>
    								</div>
    							</div>
    							<div class="speaker-wrap ftco-animate d-md-flex">
    								<div class="img speaker-img"
    									style="background-image: url(<?= base_url(); ?>assets/frontend/images/staff-3.jpg);">
    								</div>
    								<div class="text">
    									<h2><a href="#">Introduction to Business Leaders</a></h2>
    									<p>A small river named Duden flows by their place and supplies it with the
    										necessary regelialia. It is a paradisematic country, in which roasted parts
    										of sentences fly into your mouth.</p>
    									<span class="time">09:00 am - 4:30 pm</span>
    									<p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall,
    										Building Los Angeles CA</p>
    									<p>A small river named Duden flows by their place and supplies it with the
    										necessary regelialia. It is a paradisematic country, in which roasted parts
    										of sentences fly into your mouth.</p>
    									<h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span
    											class="position">Founder of Wordpress</span></h3>
    								</div>
    							</div>
    						</div>

    						<div class="tab-pane fade" id="v-pills-2" role="tabpanel"
    							aria-labelledby="v-pills-day-2-tab">
    							<div class="speaker-wrap ftco-animate d-md-flex">
    								<div class="img speaker-img"
    									style="background-image: url(<?= base_url(); ?>assets/frontend/images/staff-4.jpg);">
    								</div>
    								<div class="text">
    									<h2><a href="#">Introduction to Business Leaders</a></h2>
    									<p>A small river named Duden flows by their place and supplies it with the
    										necessary regelialia. It is a paradisematic country, in which roasted parts
    										of sentences fly into your mouth.</p>
    									<span class="time">09:00 am - 4:30 pm</span>
    									<p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall,
    										Building Los Angeles CA</p>
    									<p>A small river named Duden flows by their place and supplies it with the
    										necessary regelialia. It is a paradisematic country, in which roasted parts
    										of sentences fly into your mouth.</p>
    									<h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span
    											class="position">Founder of Wordpress</span></h3>
    								</div>
    							</div>
    							<div class="speaker-wrap ftco-animate d-md-flex">
    								<div class="img speaker-img"
    									style="background-image: url(<?= base_url(); ?>assets/frontend/images/staff-1.jpg);">
    								</div>
    								<div class="text">
    									<h2><a href="#">Introduction to Business Leaders</a></h2>
    									<p>A small river named Duden flows by their place and supplies it with the
    										necessary regelialia. It is a paradisematic country, in which roasted parts
    										of sentences fly into your mouth.</p>
    									<span class="time">09:00 am - 4:30 pm</span>
    									<p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall,
    										Building Los Angeles CA</p>
    									<p>A small river named Duden flows by their place and supplies it with the
    										necessary regelialia. It is a paradisematic country, in which roasted parts
    										of sentences fly into your mouth.</p>
    									<h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span
    											class="position">Founder of Wordpress</span></h3>
    								</div>
    							</div>
    							<div class="speaker-wrap ftco-animate d-md-flex">
    								<div class="img speaker-img"
    									style="background-image: url(<?= base_url(); ?>assets/frontend/images/staff-2.jpg);">
    								</div>
    								<div class="text">
    									<h2><a href="#">Introduction to Business Leaders</a></h2>
    									<p>A small river named Duden flows by their place and supplies it with the
    										necessary regelialia. It is a paradisematic country, in which roasted parts
    										of sentences fly into your mouth.</p>
    									<span class="time">09:00 am - 4:30 pm</span>
    									<p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall,
    										Building Los Angeles CA</p>
    									<p>A small river named Duden flows by their place and supplies it with the
    										necessary regelialia. It is a paradisematic country, in which roasted parts
    										of sentences fly into your mouth.</p>
    									<h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span
    											class="position">Founder of Wordpress</span></h3>
    								</div>
    							</div>
    						</div>
    						<div class="tab-pane fade" id="v-pills-3" role="tabpanel"
    							aria-labelledby="v-pills-day-3-tab">
    							<div class="speaker-wrap ftco-animate d-md-flex">
    								<div class="img speaker-img"
    									style="background-image: url(<?= base_url(); ?>assets/frontend/images/staff-3.jpg);">
    								</div>
    								<div class="text">
    									<h2><a href="#">Introduction to Business Leaders</a></h2>
    									<p>A small river named Duden flows by their place and supplies it with the
    										necessary regelialia. It is a paradisematic country, in which roasted parts
    										of sentences fly into your mouth.</p>
    									<span class="time">09:00 am - 4:30 pm</span>
    									<p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall,
    										Building Los Angeles CA</p>
    									<p>A small river named Duden flows by their place and supplies it with the
    										necessary regelialia. It is a paradisematic country, in which roasted parts
    										of sentences fly into your mouth.</p>
    									<h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span
    											class="position">Founder of Wordpress</span></h3>
    								</div>
    							</div>
    							<div class="speaker-wrap ftco-animate d-md-flex">
    								<div class="img speaker-img"
    									style="background-image: url(<?= base_url(); ?>assets/frontend/images/staff-4.jpg);">
    								</div>
    								<div class="text">
    									<h2><a href="#">Introduction to Business Leaders</a></h2>
    									<p>A small river named Duden flows by their place and supplies it with the
    										necessary regelialia. It is a paradisematic country, in which roasted parts
    										of sentences fly into your mouth.</p>
    									<span class="time">09:00 am - 4:30 pm</span>
    									<p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall,
    										Building Los Angeles CA</p>
    									<p>A small river named Duden flows by their place and supplies it with the
    										necessary regelialia. It is a paradisematic country, in which roasted parts
    										of sentences fly into your mouth.</p>
    									<h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span
    											class="position">Founder of Wordpress</span></h3>
    								</div>
    							</div>
    							<div class="speaker-wrap ftco-animate d-md-flex">
    								<div class="img speaker-img"
    									style="background-image: url(<?= base_url(); ?>assets/frontend/images/staff-1.jpg);">
    								</div>
    								<div class="text">
    									<h2><a href="#">Introduction to Business Leaders</a></h2>
    									<p>A small river named Duden flows by their place and supplies it with the
    										necessary regelialia. It is a paradisematic country, in which roasted parts
    										of sentences fly into your mouth.</p>
    									<span class="time">09:00 am - 4:30 pm</span>
    									<p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall,
    										Building Los Angeles CA</p>
    									<p>A small river named Duden flows by their place and supplies it with the
    										necessary regelialia. It is a paradisematic country, in which roasted parts
    										of sentences fly into your mouth.</p>
    									<h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span
    											class="position">Founder of Wordpress</span></h3>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-gallery ftco-no-pt">
    	<div class="container-fluid px-4">
    		<div class="row justify-content-center mb-5">
    			<div class="col-md-7 text-center heading-section ftco-animate">
    				<h2 class="mb-3">Galeri</h2>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-3 ftco-animate">
    				<a href="<?= base_url(); ?>assets/frontend/images/galeri/131623393_157873542775344_8855698782418941842_n.jpg"
    					class="gallery image-popup img d-flex align-items-center" style="background-image:
    					url(<?= base_url(); ?>assets/frontend/images/galeri/131623393_157873542775344_8855698782418941842_n.jpg);">
    					<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
    				</a>
    			</div>
    			<div class="col-md-3 ftco-animate">
    				<a href="<?= base_url(); ?>assets/frontend/images/galeri/132353087_159384735957558_6087309040607535690_n.jpg"
    					class="gallery image-popup img d-flex align-items-center" style="background-image:
    					url(<?= base_url(); ?>assets/frontend/images/galeri/132353087_159384735957558_6087309040607535690_n.jpg);">
    					<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
    				</a>
    			</div>
    			<div class="col-md-3 ftco-animate">
    				<a href="<?= base_url(); ?>assets/frontend/images/galeri/134481139_166029698626395_3905216129212335467_n.png"
    					class="gallery image-popup img d-flex align-items-center" style="background-image:
    					url(<?= base_url(); ?>assets/frontend/images/galeri/134481139_166029698626395_3905216129212335467_n.png);">
    					<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
    				</a>
    			</div>
    			<div class="col-md-3 ftco-animate">
    				<a href="<?= base_url(); ?>assets/frontend/images/galeri/134481139_166029698626395_3905216129212335467_n.png"
    					class="gallery image-popup img d-flex align-items-center" style="background-image:
    					url(<?= base_url(); ?>assets/frontend/images/galeri/134481139_166029698626395_3905216129212335467_n.png);">
    					<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
    				</a>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section testimony-section ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
    			<div class="col-md-7 text-center heading-section ftco-animate">
    				<h2 class="mb-3">Petugas</h2>
    			</div>
    		</div>
    		<div class="row ftco-animate">
    			<div class="col-md-12">
    				<div class="carousel-testimony owl-carousel ftco-owl">
    					<div class="item">
    						<div class="testimony-wrap text-center py-4 pb-5">
    							<div class="user-img mb-4"
    								style="background-image: url(<?= base_url(); ?>assets/frontend/images/user.png)">
    							</div>
    							<div class="text pt-4">
    								<p class="mb-4">Di bidang marketing.</p>
    								<p class="name">Nama User</p>
    								<span class="position">Marketing Manager</span>
    							</div>
    						</div>
    					</div>
    					<div class="item">
    						<div class="testimony-wrap text-center py-4 pb-5">
    							<div class="user-img mb-4"
    								style="background-image: url(<?= base_url(); ?>assets/frontend/images/user.png)">
    							</div>
    							<div class="text pt-4">
    								<p class="mb-4">Dibidang desain.</p>
    								<p class="name">Nama User</p>
    								<span class="position">Interface Designer</span>
    							</div>
    						</div>
    					</div>
    					<div class="item">
    						<div class="testimony-wrap text-center py-4 pb-5">
    							<div class="user-img mb-4"
    								style="background-image: url(<?= base_url(); ?>assets/frontend/images/user.png)">
    							</div>
    							<div class="text pt-4">
    								<p class="mb-4">Dibidang desain website UI.</p>
    								<p class="name">Nama User</p>
    								<span class="position">UI Designer</span>
    							</div>
    						</div>
    					</div>
    					<div class="item">
    						<div class="testimony-wrap text-center py-4 pb-5">
    							<div class="user-img mb-4"
    								style="background-image: url(<?= base_url(); ?>assets/frontend/images/user.png)">
    							</div>
    							<div class="text pt-4">
    								<p class="mb-4">Dibidang web developer.</p>
    								<p class="name">Nama User</p>
    								<span class="position">Web Developer</span>
    							</div>
    						</div>
    					</div>
    					<div class="item">
    						<div class="testimony-wrap text-center py-4 pb-5">
    							<div class="user-img mb-4"
    								style="background-image: url(<?= base_url(); ?>assets/frontend/images/user.png)">
    							</div>
    							<div class="text pt-4">
    								<p class="mb-4">Dibidang analis sistem.</p>
    								<p class="name">Nama User</p>
    								<span class="position">System Analyst</span>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
    			<div class="col-md-7 heading-section ftco-animate text-center">
    				<h2 class="mb-4">Harga Paket</h2>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-4 ftco-animate">
    				<div class="block-7">
    					<div class="text-center">
    						<h2 class="heading font-weight-bold">SIMPLI - FUN</h2>
    						<!-- <h3 class="heading-2 my-4">Up To 10 Mbps</h3> -->
    						<h3 class="heading-2">Up To 10 Mbps</h3>

    						<span class="price"><sup>Rp.</sup> <span class="number">199</span><sup>k</sup></span>
    						<span class="excerpt d-block">per bulan</span>
    						<ul class="pricing-text">
    							<li class="font-weight-bold">Single</li>
    							<li>Internet Only</li>
    							<li>&nbsp</li>
    						</ul>
    						<a href="https://api.whatsapp.com/send?phone=6285328792517&text=Saya%20tertarik%20untuk%20memesan%20produk%20ini%20SIMPLI%20-%20FUN%20->%20Up%20to%2010%20Mbps%20(SINGLE)."
    							class="btn btn-primary d-block px-2 py-3 mb-5">Pesan Single</a>

    						<span class="price"><sup>Rp.</sup> <span class="number">289</span><sup>k</sup></span>
    						<span class="excerpt d-block">per bulan</span>
    						<ul class="pricing-text">
    							<li class="font-weight-bold">Double</li>
    							<li>Internet + 40 Channels TV</li>
    							<li>&nbsp</li>
    						</ul>
    						<a href="https://api.whatsapp.com/send?phone=6285328792517&text=Saya%20tertarik%20untuk%20memesan%20produk%20ini%20SIMPLI%20-%20FUN%20->%20Up%20to%2010%20Mbps%20(DOUBLE)."
    							class="btn btn-primary d-block px-2 py-3 mb-5">Pesan Double</a>

    						<span class="price"><sup>Rp.</sup> <span class="number">699</span><sup>k</sup></span>
    						<span class="excerpt d-block">per bulan</span>
    						<ul class="pricing-text">
    							<li class="font-weight-bold">Double Plus</li>
    							<li>Internet + 80 Channels TV</li>
    							<li>&nbsp</li>
    						</ul>
    						<a href="https://api.whatsapp.com/send?phone=6285328792517&text=Saya%20tertarik%20untuk%20memesan%20produk%20ini%20SIMPLI%20-%20FUN%20->%20Up%20to%2010%20Mbps%20(DOUBLE%20PLUS)."
    							class="btn btn-primary d-block px-2 py-3">Pesan Double Plus</a>

    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 ftco-animate">
    				<div class="block-7 active">
    					<div class="text-center">
    						<h2 class="heading font-weight-bold">SUPER FUN</h2>
    						<h3 class="heading-2">Up To 20 Mbps</h3>

    						<span class="price"><sup>Rp.</sup> <span class="number">269</span><sup>k</sup></span>
    						<span class="excerpt d-block">per bulan</span>
    						<ul class="pricing-text">
    							<li class="font-weight-bold">Single</li>
    							<li>Internet Only</li>
    							<li>&nbsp</li>
    						</ul>
    						<a href="https://api.whatsapp.com/send?phone=6285328792517&text=Saya%20tertarik%20untuk%20memesan%20produk%20ini%20SIMPLI%20-%20FUN%20->%20Up%20to%2020%20Mbps%20(SINGLE)."
    							class="btn btn-primary d-block px-2 py-3 mb-5">Pesan Single</a>

    						<span class="price"><sup>Rp.</sup> <span class="number">369</span><sup>k</sup></span>
    						<span class="excerpt d-block">per bulan</span>
    						<ul class="pricing-text">
    							<li class="font-weight-bold">Double</li>
    							<li>Internet + 40 Channels TV</li>
    							<li>&nbsp</li>
    						</ul>
    						<a href="https://api.whatsapp.com/send?phone=6285328792517&text=Saya%20tertarik%20untuk%20memesan%20produk%20ini%20SIMPLI%20-%20FUN%20->%20Up%20to%2020%20Mbps%20(DOUBLE)."
    							class="btn btn-primary d-block px-2 py-3 mb-5">Pesan Double</a>

    						<span class="price"><sup>Rp.</sup> <span class="number">769</span><sup>k</sup></span>
    						<span class="excerpt d-block">per bulan</span>
    						<ul class="pricing-text">
    							<li class="font-weight-bold">Double Plus</li>
    							<li>Internet + 80 Channels TV</li>
    							<li>&nbsp</li>
    						</ul>
    						<a href="https://api.whatsapp.com/send?phone=6285328792517&text=Saya%20tertarik%20untuk%20memesan%20produk%20ini%20SIMPLI%20-%20FUN%20->%20Up%20to%2020%20Mbps%20(DOUBLE%20PLUS)."
    							class="btn btn-primary d-block px-2 py-3">Pesan Double Plus</a>

    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 ftco-animate">
    				<div class="block-7">
    					<div class="text-center">
    						<h2 class="heading font-weight-bold">FUN - TASTIC</h2>
    						<h3 class="heading-2">Up To 50 Mbps</h3>

    						<span class="price"><sup>Rp.</sup> <span class="number">329</span><sup>k</sup></span>
    						<span class="excerpt d-block">per bulan</span>
    						<ul class="pricing-text">
    							<li class="font-weight-bold">Single</li>
    							<li>Internet Only</li>
    							<li>&nbsp</li>
    						</ul>
    						<a href="https://api.whatsapp.com/send?phone=6285328792517&text=Saya%20tertarik%20untuk%20memesan%20produk%20ini%20SIMPLI%20-%20FUN%20->%20Up%20to%2050%20Mbps%20(SINGLE)."
    							class="btn btn-primary d-block px-2 py-3 mb-5">Pesan Single</a>

    						<span class="price"><sup>Rp.</sup> <span class="number">419</span><sup>k</sup></span>
    						<span class="excerpt d-block">per bulan</span>
    						<ul class="pricing-text">
    							<li class="font-weight-bold">Double</li>
    							<li>Internet + 40 Channels TV</li>
    							<li>&nbsp</li>
    						</ul>
    						<a href="https://api.whatsapp.com/send?phone=6285328792517&text=Saya%20tertarik%20untuk%20memesan%20produk%20ini%20SIMPLI%20-%20FUN%20->%20Up%20to%2050%20Mbps%20(DOUBLE)."
    							class="btn btn-primary d-block px-2 py-3 mb-5">Pesan Double</a>

    						<span class="price"><sup>Rp.</sup> <span class="number">829</span><sup>k</sup></span>
    						<span class="excerpt d-block">per bulan</span>
    						<ul class="pricing-text">
    							<li class="font-weight-bold">Double Plus</li>
    							<li>Internet + 80 Channels TV</li>
    							<li>&nbsp</li>
    						</ul>
    						<a href="https://api.whatsapp.com/send?phone=6285328792517&text=Saya%20tertarik%20untuk%20memesan%20produk%20ini%20SIMPLI%20-%20FUN%20->%20Up%20to%2050%20Mbps%20(DOUBLE%20PLUS)."
    							class="btn btn-primary d-block px-2 py-3">Pesan Double Plus</a>

    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section-parallax ftco-section ftco-no-pt">
    	<div class="parallax-img d-flex align-items-center">
    		<div class="container">
    			<div class="row d-flex justify-content-center">
    				<div class="col-md-10 col-lg-7 text-center heading-section ftco-animate">
    					<h2>Bantu kami untuk Subcribe</h2>
    					<p>Satisfaction is a rating. Loyalty is a brand.</p>
    					<p>Kepuasan adalah peringkat. Loyalitas adalah sebuah merek.</p>
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

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript">
    	// input data 1
    	// ##############################################################################
    	const inpFile_1 = document.getElementById('image_1');
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
		
		// function btne(){
			$('#submit').submit(function(e){
			e.preventDefault();
			var cidne = document.getElementById("cid").value;
			var floatingjpne = document.getElementById("floatingjp").value;
			var inpFilene = document.getElementById('image_1').value;
			if(cidne == "" || floatingjpne == ""){
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
					url:'<?php echo base_url();?>pelayanan/doUpload',
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
						// alert(cidne + ' ' + floatingjpne + ' ' + inpFile_1);
						$("#cid").val(null);
						$("#floatingCID").val(null);
						$("#floatingjp").val("");
						inpFilene.val(null);
						previewDefaultText_1.style.display = null;
						previewImage_1.style.display = null;
						previewImage_1.setAttribute("src", "");
					}
				});
			}
		});
		// }

    </script>
