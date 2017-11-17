<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title" style="width: 100%;">Bordered Table  
						
						<a href="<?=base_url();?>admin/gallery/add" class="btn btn-round btn-success space-preview pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add</a></h3>
						
					  
					
				
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table class="table table-bordered">
						<tbody><tr>
							<th style="width: 10px">#</th>
							<th>Title</th>
							<th>Featured</th>
							<th>Status</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
						<?php foreach($getData as $k => $row){ ?>
						<tr>
							<tr>
								<td><?=$k+1;?></td>
								<td><?=$row->title;?></td>
								<td><?=$row->featured;?></td>
								<td><?=$row->status;?></td>
								<td><?=$row->created;?></td>
								
							
							<td>
					
	                   <a href="" title="Active" class="success"><i class="fa fa-check"></i></a>&nbsp;&nbsp;
		               <a href="<?=base_url();?>admin/gallery/edit/<?=$row->id;?>" title="Edit" class="warning"><i class="fa fa-pencil-square-o"></i></a>&nbsp;&nbsp;
							
								
								</td>
						</tr>
							<?php } ?>
						</tbody></table>
				</div>
				<!-- /.box-body -->
				
			</div>
			<!-- /.box -->
			
			
			<!-- /.box -->
		</div>
	</div>			
</section>		


