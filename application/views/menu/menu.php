<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= $this->session->flashdata('message'); ?>

            <div class="card mb-4">
                <div class="card-body">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>"><i class="fas fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Menu Management</li>
                        </ol>
                    </nav>
                    <hr>
                    <a href="" class="btn btn-primary mb-3 btn-block btn-sm" data-toggle="modal" data-target="#addMenu">Add New Menu</a>
                    <table class="table table-hover table-bordered table-sm">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" style="text-align:center;width:5%;">No</th>
                                <th scope="col" style="width:60%;">Menu</th>
                                <th scope="col" style="width:35%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($menu as $row) : ?>
                                <tr>
                                    <th scope="row" style="text-align:center;"><?= $i; ?></th>
                                    <td><?= $row['menu']; ?></td>
                                    <td>
                                        <a href="#" class="badge badge-success">Edit</a>
                                        <a href="#" class="badge badge-success">Delete</a>
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

</div>
<!-- End of Main Content -->

<!-- Modal Add New Menu -->
<div class="modal fade" id="addMenu" tabindex="-1" role="dialog" aria-labelledby="addMenuLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addMenuLabel">Add New Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-sm" id="menu" name="menu" placeholder="Menu name"></input>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>