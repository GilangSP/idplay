<section class="hero-wrap hero-wrap-2 js-fullheight"
	style="background-image: url('<?= base_url(); ?>assets/frontend/images/bg_2.jpg');"
	data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
			<div class="col-md-9 ftco-animate pb-5">
				<h1 class="mb-3 bread">Blog</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url(); ?>pelayanan">Home <i
								class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a
							href="<?= base_url(); ?>pelayanan/artikel">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i
							class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-degree-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-8 order-md-last ftco-animate">
				<p>
					<img class="img-fluid" src="<?= base_url('assets/img/berita/') . $artikel['image']; ?>" alt="">
				</p>	
				<h2 class="mb-3"><?= $artikel['judul']; ?></h2>
				<h5 class="mb-3"><?= $artikel['subject']; ?></h5>
				<p><?= $artikel['isi']; ?></p>
				<div class="tag-widget post-tag-container mb-5 mt-5">
					<div class="tagcloud">
						<a href="#" class="tag-cloud-link">Life</a>
						<a href="#" class="tag-cloud-link">Sport</a>
						<a href="#" class="tag-cloud-link">Tech</a>
						<a href="#" class="tag-cloud-link">Travel</a>
					</div>
				</div>
			</div> <!-- .col-md-8 -->
			<div class="col-md-4 sidebar ftco-animate">
				<div class="sidebar-box">
					<form action="#" class="search-form">
						<div class="form-group">
							<span class="icon icon-search"></span>
							<input type="text" class="form-control" placeholder="Type a keyword and hit enter">
						</div>
					</form>
				</div>

				<div class="sidebar-box ftco-animate">
					<h3>Recent Blog</h3>
					<?php for ($i = 0; $i < count($beritalist); ++$i) { ?>
					<?php ($page+$i+1); ?>
					<div class="block-21 mb-4 d-flex">
						<a class="blog-img mr-4"
							style="background-image: url('<?= base_url('assets/img/berita/') . $beritalist[$i]->image; ?>');"></a>
						<div class="text">
							<h3 class="heading"><a
									href="<?= base_url('pelayanan/detailArtikel/') . $beritalist[$i]->id; ?>"><?= $beritalist[$i]->judul; ?></a>
							</h3>
							<div class="meta">
								<div><a href="#"><span class="icon-calendar"></span> <?= tgl_indo($beritalist[$i]->tanggal); ?></a></div>
								<div><a href="#"><span class="icon-person"></span> <?= $beritalist[$i]->role; ?></a></div>
								<div><a href="#"><span class="icon-chat"></span> 19</a></div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>

				<div class="sidebar-box ftco-animate">
					<h3>Tag Cloud</h3>
					<div class="tagcloud">
						<a href="#" class="tag-cloud-link">dish</a>
						<a href="#" class="tag-cloud-link">menu</a>
						<a href="#" class="tag-cloud-link">food</a>
						<a href="#" class="tag-cloud-link">sweet</a>
						<a href="#" class="tag-cloud-link">tasty</a>
						<a href="#" class="tag-cloud-link">delicious</a>
						<a href="#" class="tag-cloud-link">desserts</a>
						<a href="#" class="tag-cloud-link">drinks</a>
					</div>
				</div>

				<div class="sidebar-box ftco-animate">
					<h3>Paragraph</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus
						voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur
						similique, inventore eos fugit cupiditate numquam!</p>
				</div>
			</div>

		</div>
	</div>
</section> <!-- .section -->
