<style>
    .h2 {
    margin : 0 auto;
    height : auto;
    width: 500px;
    box-sizing: border-box;
    padding : 15px 20px;
    border-radius : 8px;
    border: 2px solid rgb(226, 121, 156);
    box-shadow: 0 0 25px palevioletred;
    }
</style>

<div class="tambah">
<h2>edit profil</h2>
<form action="<?= base_url() ?>profil/updateprofil" method="POST">

    <input type="hidden" name="id" value="<?= $user['id'] ?>"><br><br>
    <input type="text" name="nama" value="<?= $user['nama'] ?>"><br><br>
    <input type="text" name="username" value="<?= $user['username'] ?>"><br><br>
    <input type="password" name="password" value="<?= $user['password'] ?>"><br><br>

    <input type="submit" value="edit profil">
</form>