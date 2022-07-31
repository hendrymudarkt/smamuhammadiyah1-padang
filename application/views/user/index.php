<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data User</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Add</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Level</th>
                            <th>Jenis Guru</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($user as $u) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $u['nama']; ?></td>
                                <td><?php echo $u['username']; ?></td>
                                <td><?php echo $this->encryption->decrypt($u['password']); ?></td>
                                <td><?php if ($u['level'] == '1') {
                                        echo "Admin";
                                    } elseif ($u['level'] == '3') {
                                        echo "Kepala Sekolah";
                                    } elseif ($u['level'] == '4') {
                                        echo "Guru";
                                    } ?></td>
                                <td><?php if ($u['jenis_guru'] == '1') {
                                        echo "Bahasa Indonesia";
                                    } elseif ($u['jenis_guru'] == '2') {
                                        echo "Bahasa Inggris";
                                    } elseif ($u['jenis_guru'] == '3') {
                                        echo "IPA";
                                    } elseif ($u['jenis_guru'] == '4') {
                                        echo "Matematika";
                                    } else {
                                        echo "-";
                                    } ?></td>
                                <td align="center">
                                    <a href="<?php echo site_url('user/edit/' . $u['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                    <a href="<?php echo site_url('user/remove/' . $u['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>