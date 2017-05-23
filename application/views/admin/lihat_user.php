<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Mangrove
 * Date: 23/05/2017
 * Time: 14.02
 */
?>
<!doctype html>
<html>
<?php require 'assets/head.php'; ?>
<body>
<div class="container">
<?php require 'assets/header.php'; ?>
    <div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Dibuat</th>
                <th>Level</th>
                <th>status</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 0;
            foreach ($user as $u) {?>
                <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $u->username; ?></td>
                    <td><?php echo $u->dibuat; ?></td>
                    <td><?php echo $u->level; ?></td>
                    <td><?php
                        if($u->status == 1){
                            echo 'Aktif';
                        }else{
                            echo 'Nonaktif';
                        }
                    ?>
                    </td>
                    <td>
                        <?php echo anchor('admin/update_user/' . $u->id_user, 'Update'); ?>
                        <?php echo anchor('admin/hapus_user/' . $u->id_user, 'Hapus'); ?>
                    </td>
                </tr>
            <?php };?>
            </tbody>
        </table>
    </div>
<?php require 'assets/footer.php'; ?>
</div>
</body>
</html>
