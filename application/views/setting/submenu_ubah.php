<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">Submenu Management</h1>
	<div class="row">
		<div class="col-md">
			<nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>"><i class="fas fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('setting/submenu'); ?>">Submenu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update</li>
                </ol>
            </nav>
			<div class="card">
			  	<div class="card-header py-3">
                 	<h6 class="m-0 text-primary"><a href="<?= base_url('setting/submenu'); ?>"><i class="fas fa-fw fa-arrow-left"></i> Back</a></h6>
                </div>
			  	<div class="card-body">
			    	<form action="" method="post">
			    		<input type="hidden" name="id" value="<?= $submenu['id']; ?>">
						<div class="form-group">
						    <label for="title">Title</label>
						   	<input type="text" class="form-control" id="title" name="title" value="<?= $submenu['title']; ?>">
						   	<?= form_error('title', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
						    <label for="menu_id">Menu</label>
						    <select class="form-control" id="menu_id" name="menu_id">
						    	<?php foreach ( $menu as $row ) : ?>
						      		<?php if ( $row['id'] == $submenu['menu_id']) : ?>
						      			<option value="<?= $submenu['menu_id']; ?>" selected><?= $row['id']; ?> | <?= $row['menu']; ?></option>
						      		<?php else : ?>
						      			<option value="<?= $row['id']; ?>"><?= $row['id']; ?> | <?= $row['menu']; ?></option>
						      		<?php endif; ?>
						    	<?php endforeach; ?>
						    </select>
						</div>
						<div class="form-group">
						    <label for="url">Url</label>
						   	<input type="text" class="form-control" id="url" name="url" value="<?= $submenu['url']; ?>">
						   	<?= form_error('url', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
						    <label for="icon">Icon</label>
						   	<input type="text" class="form-control" id="icon" name="icon" value="<?= $submenu['icon']; ?>">
						   	<?= form_error('icon', '<small class="text-danger">', '</small>'); ?>
						</div>
						<button name="ubah" type="submit" class="btn btn-primary btn-sm float-right">Update</button>
					</form>
			  	</div>
			</div>
		</div>
	</div>
</div>