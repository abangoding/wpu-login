<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= $this->session->flashdata('message'); ?>
            <div class="card mb-4">
                <div class="card-body">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>"><i class="fas fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url('admin/role/'); ?>"><i class="fas fa-fw fa-user-tie"></i> Role</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $role['role']; ?></li>
                        </ol>
                    </nav>
                    <hr>
                    <h5>Role : <?= $role['role']; ?></h5>

                    <table class="table table-hover table-bordered table-sm">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" style="text-align:center;width:5%;">No</th>
                                <th scope="col" style="width:85%;">Menu</th>
                                <th scope="col" style="text-align:center;width:10%;">Access</th>
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