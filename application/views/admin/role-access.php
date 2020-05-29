<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Role <?= $role['role']; ?></h1>

    <div class="row">
        <div class="col-lg">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>"><i class="fas fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/role/'); ?>">Role</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $role['role']; ?></li>
                </ol>
            </nav>
            <?= $this->session->flashdata('message'); ?>
            <div class="card mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 text-primary"><a href="<?= base_url('admin/role'); ?>"><i class="fas fa-fw fa-arrow-left"></i> Back</a></h6>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" style="text-align:center; width:8%; padding-right:7px;">No</th>
                                <th scope="col" style="width:75%;">Menu</th>
                                <th scope="col" style="text-align:center; width:17%; padding-right:7px;">Access</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($menu as $row) : ?>
                                <tr>
                                    <th scope="row" style="text-align:center;"><?= $i; ?></th>
                                    <td><?= $row['menu']; ?></td>
                                    <td style="text-align:center;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $row['id']); ?> data-role="<?=$role['id']; ?>" data-menu="<?=$row['id']; ?>">
                                        </div>
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