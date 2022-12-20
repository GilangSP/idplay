<section class="hero-wrap hero-wrap-2 js-fullheight"
	style="background-image: url('<?= base_url(); ?>assets/frontend/images/bg_2.jpg');"
	data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
			<div class="col-md-9 ftco-animate pb-5">
				<h1 class="mb-3 bread">Berita</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url(); ?>pelayanan">Home <i
								class="ion-ios-arrow-forward"></i></a></span> <span>Berita <i
							class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<?php 
		$attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "judul" => "form1");
		echo form_open("pelayanan/search", $attr);?>
		<div class="sidebar-box">
			<div class="search-form">
				<div class="form-group">
					<a type="submit" id="btn_search" name="btn_search" class="icon icon-search"></a>
					<input class="form-control" id="berita_name" name="berita_name" placeholder="Search for Judul Name..." type="text" value="<?php echo set_value('berita_name'); ?>" />
				</div>
			</div>
		</div>
		<?php echo form_close(); ?>
		
		<div class="row d-flex">
			<?php for ($i = 0; $i < count($beritalist); ++$i) { ?>
				<div class="col-md-4 d-flex ftco-animate">
					<?php ($page+$i+1); ?>
					<div class="blog-entry justify-content-end">
						<a href="<?= base_url('pelayanan/detailArtikel/') . $beritalist[$i]->id; ?>" class="block-20"
							style="background-image: url('<?= base_url('assets/img/berita/') . $beritalist[$i]->image; ?>');">
						</a>
						<div class="text pt-4">
							<div class="meta mb-3">
								<div><a
										href="<?= base_url('pelayanan/artikel_detail/') . $beritalist[$i]->id; ?>"><?= tgl_indo($beritalist[$i]->tanggal); ?></a>
								</div>
								<div><a
										href="<?= base_url('pelayanan/artikel_detail/') . $beritalist[$i]->id; ?>"><?= $beritalist[$i]->role; ?></a>
								</div>
								<!-- <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> -->
							</div>
							<h3 class="heading mt-2"><a
									href="<?= base_url('pelayanan/artikel_detail/') . $beritalist[$i]->id; ?>"><?= $beritalist[$i]->judul; ?></a>
							</h3>
							<p>
								<?= $beritalist[$i]->subject; ?>
							</p>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		<div class="row mt-5">
			<div class="col text-center">
				<div class="block-27">
					<?php echo $pagination; ?>
				</div>
			</div>
		</div>
	</div>
</section>
