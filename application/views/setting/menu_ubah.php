<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 mt-3">
			<div class="card">
			  	<div class="card-header font-weight-bold text-primary">
			    	<?= $title; ?>
			  	</div>
			  	<div class="card-body">
			    	<form action="" method="post">
			    		<input type="hidden" name="id" value="<?= $menu['id']; ?>">
						<div class="form-group">
						    <label for="menu">Menu</label>
						   	<input type="text" class="form-control form-control" id="menu" name="menu" value="<?= $menu['menu']; ?>">
						   	<?= form_error('menu', '<small class="text-danger">', '</small>'); ?>
						</div>
						<button name="ubah" type="submit" class="btn btn-primary mt-2 float-right">Update</button>
					</form>
			  	</div>
			</div>
		</div>
	</div>
</div>