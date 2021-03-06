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
							<input type="text" class="form-control" name="title" required>
						</div>
						
						<div class="form-group">
							<label>Description <em>*</em></label>
							<input type="text" class="form-control" name="description" required>
						</div>
						<div class="form-group">
							<label>Image <em>*</em></label>
							<input type="file"  name="image" required>
						</div>
						<div class="form-group">
							<label >Featured <em>*</em></label>
							
							<input type="checkbox" name="featured" > 
							
						</div>
						
						<div class="form-group">
							<label>Type <em>*</em></label>
							<select class="form-control" name="type" required>
								<option>Coffee</option>
								<option>Pastery</option>
								<option>Softdrink</option>
						
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