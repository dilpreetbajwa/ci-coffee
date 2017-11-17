<section class="content">
	<div class="row">
        <div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add Offers</h3>
				</div>
				<form method="POST" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label>Title <em>*</em></label>
							<input type="text" class="form-control" name="title" value="<?=$getData->title;?> "  required>
						</div>
						<div class="form-group">
							<label>Image <em>*</em></label>
							<?php if($getData->image){ ?>
								<img style="height:200px;width:200px" class="form-control" src="<?=base_url().'assets/images/reviews/'.$getData->image;?>"></br>
							<?php } ?>
							<input type="file"  name="image">
						</div>
						<div class="form-group">
							<label>Description <em>*</em></label>
							<input type="text" class="form-control" name="description" value="<?=$getData->description;?> "required>
						</div>
						<div class="form-group">
							<label>Status</label><br>
							<label class="radio-inline">
								
								<input name="status" type="radio" value="1" <?= ($getData->status==1)?'checked':'';?>>Active &nbsp;&nbsp;
								<input name="status" type="radio" value="0" <?= ($getData->status==0)?'checked':'';?>>De-active
								
							</label>
						</div>
						<input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">				
					</div>
				</form>
			</div>
		</div>
	</div>
</section>	