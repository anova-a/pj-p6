<div class="tambah">
    <h1>Edit data</h1>

    <form action="<?= base_url ('pendaftaran/update') ?>" method="POST">

        <input type="hidden" value="<?= $edit['id'];?>" name="id">

        <label for="">Nama Pendaftar</label>
        <input type="text" name="nama_pendaftaran" value="<?= $edit['nama_pendaftaran'];?>" >
        <br>
        <label for="">Jenis Lomba</label>
            <br>
            <select name="nama_lomba">
            <?php foreach($tb_jnslomba as $jns) : ?>
                <option value="<?= $jns['id_jns']?>"><?= $jns['nama_lomba'] ?></option>
                <?php endforeach ; ?>
            </select> 
            <br>
        <label for="">Kelas</label>
        <input type="text" name="kelas" value="<?= $edit['kelas'];?>" >
        <br>
        <label for="">No HP</label>
        <input type="text" name="no_hp" value="<?= $edit['no_hp'];?>" >
        <br>
        <label for="">Tanggal Daftar</label>
        <input type="date" name="tgl_daftar" value="<?= $edit['tgl_daftar'];?>" >

        <input type="submit" value="SIMPAN">
    </form>


</div>