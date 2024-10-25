<table>
        <tr>
            <th>No</th>
            <th>Nama Event</th>
            <th>Nama Pendaftar</th>
            <th>Kelas</th>
            <th>No Telp.</th>
            <th>Tanggal Daftar</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($tb_pendaftaran as $dftr) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $dftr['nama_lomba']?></td>
                <td><?php echo $dftr['nama_pendaftaran']?></td>
                <td><?php echo $dftr['kelas']?></td>
                <td><?php echo $dftr['no_hp']?></td>
                <td><?php echo $dftr['tgl_daftar']?></td>
                <td><a class="edit" href="<?php echo base_url(); ?>pendaftaran/edit/<?= $dftr['id_jns'] ?>">edit</a></td>
                <td><a class="hapus" onclick="return confirm('Yakin Hapus?')" href="<?= base_url(); ?>pendaftaran/hapus/<?= $dftr['id_jns'] ?>">hapus</a></td>
                
            </tr>
            <?php $i++; ?>
        <?php endforeach;?>
    </table>
   

    <a class="daftar" href="<?php echo base_url(); ?>tambah">Tambah Data</a>