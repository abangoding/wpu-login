<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">Submenu Management</h1>
	<div class="row">
		<div class="col-md">
			<nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>"><i class="fas fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('setting/submenu'); ?>">Submenu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add</li>
                </ol>
            </nav>
			<div class="card">
				<div class="card-header py-3">
                 	<h6 class="m-0 text-primary"><a href="<?= base_url('setting/submenu'); ?>"><i class="fas fa-fw fa-arrow-left"></i> Back</a></h6>
                </div>
			  	<div class="card-body">
			    	<form action="" method="post">
						<div class="form-group">
						    <label for="title">Title</label>
						   	<input type="text" class="form-control" id="title" name="title">
						   	<?= form_error('title', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
						    <label for="url">Url</label>
						   	<input type="text" class="form-control" id="url" name="url">
						   	<?= form_error('url', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
						    <label for="icon">Icon</label>
						   	<input type="text" class="form-control" id="icon" name="icon">
						   	<?= form_error('icon', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="menu_id">Menu</label>
					    	<select class="form-control" name="menu_id">
						    	<option disabled selected>Select a Menu</option>
						    	<?php foreach ( $menu as $mn ) : ?>
						    		<option value="<?= $mn['id'] ?>"><?= $mn['menu'] ?></option>
						 		<?php endforeach; ?>
						    </select>
						    <?= form_error('menu_id', '<small class="text-danger">', '</small>'); ?>
						</div>
						<button type="submit" class="btn btn-primary btn-sm float-right">Add</button>
					</form>
			  	</div>
			</div>
		</div>
	</div>
</div>