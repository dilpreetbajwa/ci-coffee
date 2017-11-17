<section class="content">
	<div class="row">
        <div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add Offers</h3>
				</div>
				<form method="POST">
					<div class="box-body">
						<div class="form-group">
							<label>Title <em>*</em></label>
							<input type="text" class="form-control" name="title" value="<?=$getData->title;?> "  required>
						</div>
						<div class="form-group">
							<label>Icon <em>*</em></label>
							<input type="text" class="form-control" name="icon" value="<?=$getData->icon;?> " required>
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