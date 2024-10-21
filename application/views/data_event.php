<table>
        <tr>
            <th>No</th>
            <th>Nama Event</th>
            <th>Penyelenggara</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($tb_jnslomba as $lmb) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $lmb['nama_lomba']?></td>
                <td><?= $lmb['penyelenggara']?></td>
                <td><a href="<?= base_url(); ?>data_event/edit/<?= $lmb['id_jns'] ?>">edit</a></td>
                <td><a onclick="return confirm('Yakin Hapus?')" href="<?= base_url(); ?>data_event/hapus/<?= $lmb['id_jns'] ?>">hapus</a></td>
                
            </tr>
            <?php $i++; ?>
        <?php endforeach;?>
    </table>

    <a class="daftar" href="<?php echo base_url(); ?>tambah2">Tambah Data</a>