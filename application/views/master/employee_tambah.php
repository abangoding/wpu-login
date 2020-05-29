<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">Employee Management</h1>
	<div class="row">
		<div class="col-md">
			<nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>"><i class="fas fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('master/employee'); ?>">Employee</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add</li>
                </ol>
            </nav>
			<div class="card">
				<div class="card-header py-3">
                 	<h6 class="m-0 text-primary"><a href="<?= base_url('master/employee'); ?>"><i class="fas fa-fw fa-arrow-left"></i> Back</a></h6>
                </div>
			  	<div class="card-body">
			    	<form action="" method="post">
						<div class="form-group">
						    <label for="name">Name</label>
						   	<input type="text" class="form-control" id="name" name="name">
						   	<?= form_error('name', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
						    <label for="position">Position</label>
						   	<input type="text" class="form-control" id="position" name="position">
						   	<?= form_error('position', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
						    <label for="department">Department</label>
						   	<input type="text" class="form-control" id="department" name="department">
						   	<?= form_error('department', '<small class="text-danger">', '</small>'); ?>
						</div>
						<button name="tambah" type="submit" class="btn btn-primary btn-sm float-right">Add</button>
					</form>
			  	</div>
			</div>
		</div>
	</div>
</div>