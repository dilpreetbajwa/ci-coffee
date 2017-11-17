<section class="content">
	<div class="row">
        <div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add Gallery</h3>
				</div>
				<form method="POST" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label>Title <em>*</em></label>
							<input type="text" class="form-control" name="title" value="<?=$getData->title;?>" required>
						</div>
						
						<div class="form-group">
							<label>Description <em>*</em></label>
							<input type="text" class="form-control" name="description" value="<?=$getData->description;?>"required>
						</div>
						<div class="form-group">
						<?php if($getData->image){ ?>
					<img style="width:30%" src="<?=base_url().'assets/images/gallery/'.$getData->image;?>"></br>
					<?php } ?>
							<label>Image <em>*</em></label>
							<input type="file"  name="image" >
						</div>
						<div class="form-group">
							<label >Featured <em>*</em></label>
							
							<input type="checkbox" name="featured" <?= ($getData->featured=='on')?'checked':'';?>> 
							
						</div>
						
						<div class="form-group">
							<label>Type <em>*</em></label>
							<select class="form-control" name="type" required>
								<option <?= ($getData->type=='Coffee')?'selected':'';?>>Coffee</option>
								<option <?= ($getData->type=='Pastery')?'selected':'';?>>Pastery</option>
								<option <?= ($getData->type=='Softdrink')?'selected':'';?>>Softdrink</option>
						
							</select>
						</div>
						<div class="form-group">
							<label>Status</label><br>
							<label class="radio-inline">
								<input checked name="status" type="radio" value="1">Active &nbsp;&nbsp;&nbsp;&nbsp;
								<input name="status" type="radio" value="0">De-active
							</label>
						</div>
						<input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">				
					</div>
				</form>
			</div>
		</div>
	</div>
</section>	