<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash') ) : ?> <?php endif; ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Menu Management</h1>

    <div class="row">
        <div class="col-md">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>"><i class="fas fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Menu</li>
                </ol>
            </nav>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <a href="<?= base_url(); ?>setting/tambah" class="btn btn-primary btn-block btn-sm mb-3"><i class="fas fa-fw fa-plus"></i>Add New</a>
                    <div class="table-responsive">
                        <table class="table table-sm table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" style="text-align:center; width:8%; padding-right:7px;">No</th>
                                    <th scope="col" style="text-align:left; width:75%;">Menu</th>
                                    <th scope="col" style="text-align:center; width:17%; padding-right:7px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($menu as $mn) : ?>
                                    <tr>
                                        <th style="text-align: center;"><?= $no++; ?></th>
                                        <td><?= $mn['menu'] ?></td>
                                        <td style="text-align: center;">
                                            <a href="<?= base_url(); ?>setting/ubah/<?= $mn['id']; ?>" class="badge badge-success">Update</a>
                                            <a href="<?= base_url(); ?>setting/hapus/<?= $mn['id']; ?>" class="badge badge-success button-delete">Delete</a>
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