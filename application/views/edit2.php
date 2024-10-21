<div class="tambah">
    <h1>Edit data</h1>

    <form action="<?= base_url ('data_event/update') ?>" method="POST">

        <input type="hidden" value="<?= $edit['id_jns'];?>" name="id_jns">


        <label for="">Nama Lomba</label>
        <input type="text" name="nama_lomba" value="<?= $edit['nama_lomba'];?>" >
        <br>
        <label for="">Penyelenggara</label>
        <input type="text" name="penyelenggara" value="<?= $edit['penyelenggara'];?>" >

        <input type="submit" value="SIMPAN">
    </form>