<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash') ) : ?> <?php endif; ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Laptop Management</h1>

    <div class="row">
        <div class="col-md">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>"><i class="fas fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Laptop</li>
                </ol>
            </nav>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <a href="<?= base_url(); ?>master/add_employee" class="btn btn-primary btn-block btn-sm mb-3"><i class="fas fa-fw fa-plus"></i>Add New</a>
                    <div class="table-responsive">
                        <table class="table table-sm table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" style="text-align:left; width:10%;">Tag</th>
                                    <th scope="col" style="text-align:left; width:15%;">Model</th>
                                    <th scope="col" style="text-align:left; width:18%;">Operating System</th>
                                    <th scope="col" style="text-align:left; width:25%;">Serial Number</th>
                                    <th scope="col" style="text-align:left; width:10%;">Status</th>
                                    <th scope="col" style="text-align:center; width:17%; padding-right:7px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($laptop as $lpt) : ?>
                                    <tr>
                                        <td><?= $lpt['inv_number'] ?></td>
                                        <td><?= $lpt['inv_model'] ?></td>
                                        <td><?= $lpt['inv_os'] ?></td>
                                        <td><?= $lpt['inv_serial_number'] ?></td>
                                        <td><?= $lpt['inv_status'] ?></td>
                                        <td style="text-align: center;">
                                            <a href="<?= base_url(); ?>asset/update_laptop/<?= $lpt['id']; ?>" class="badge badge-success">View</a>
                                            <a href="<?= base_url(); ?>asset/update_laptop/<?= $lpt['id']; ?>" class="badge badge-success">Update</a>
                                            <a href="<?= base_url(); ?>asset/delete_laptop/<?= $lpt['id']; ?>" class="badge badge-success button-delete">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>        
    </div>

</div>
<!-- /.container-fluid -->