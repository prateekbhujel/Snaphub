				<div class="col-sm-4 col-md-3 col-lg-2 m-2 text-center bg-light">
					<a href="<?=ROOT?>/photo/<?=$row->id?>">
						<img src="<?=get_image($image->getThumbnail($row->image, 251, 250));?>" class="img-thumbnail" sstyle="object-fit: cover;width: 250px; height: 250px;">
						<div class="card-header"> <?=esc($row->title); ?> </div>
					</a>
				</div>Test