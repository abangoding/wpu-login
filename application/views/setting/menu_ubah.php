<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">Menu Management</h1>
	<div class="row">
		<div class="col-md">
			<nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>"><i class="fas fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('setting/menu'); ?>">Menu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update</li>
                </ol>
            </nav>
			<div class="card">
			  	<div class="card-header py-3">
                 	<h6 class="m-0 text-primary"><a href="<?= base_url('setting/menu'); ?>"><i class="fas fa-fw fa-arrow-left"></i> Back</a></h6>
                </div>
			  	<div class="card-body">
			    	<form action="" method="post">
			    		<input type="hidden" name="id" value="<?= $menu['id']; ?>">
						<div class="form-group">
						    <label for="menu">Menu</label>
						   	<input type="text" class="form-control" id="menu" name="menu" value="<?= $menu['menu']; ?>">
						   	<?= form_error('menu', '<small class="text-danger">', '</small>'); ?>
						</div>
						<button name="ubah" type="submit" class="btn btn-primary btn-sm float-right">Update</button>
					</form>
			  	</div>
			</div>
		</div>
	</div>
</div>