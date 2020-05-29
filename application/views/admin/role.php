<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Role Management</h1>

    <div class="row">
        <div class="col-lg">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>"><i class="fas fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Role</li>
                </ol>
            </nav>

            <?= form_error('role', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= $this->session->flashdata('message'); ?>
            
            <div class="card mb-4">
                <div class="card-body">
                    <a href="" class="btn btn-primary btn-block mb-3 btn-sm" data-toggle="modal" data-target="#addRole"><i class="fas fa-fw fa-plus"></i> Add New</a>

                    <table class="table table-hover table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" style="text-align:center; width:8%; padding-right:7px;">No</th>
                                <th scope="col" style="width:75%;">Role</th>
                                <th scope="col" style="text-align:center; width:17%; padding-right:7px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($role as $row) : ?>
                                <tr>
                                    <th scope="row" style="text-align:center;"><?= $i; ?></th>
                                    <td><?= $row['role']; ?></td>
                                    <td style="text-align:center;">
                                        <a href="<?= base_url('admin/roleaccess/') . $row['id']; ?>" class="badge badge-success">Access</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- Modal Add New Role -->
<div class="modal fade" id="addRole" tabindex="-1" role="dialog" aria-labelledby="addRoleLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addRoleLabel">Add New Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/role'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="role">Role Name</label>
                        <input type="text" class="form-control" id="role" name="role"></input>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>