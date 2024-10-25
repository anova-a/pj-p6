<style>
    .profil
    {
        background-color: rgb(255, 223, 242);
        width: 350px;
        padding: 30px;
        margin: auto;
        margin-top: 100px;
        border: 2px solid black;
        font-size: 18px;
    }
</style>

<div class="profil">
    <h2>profil</h2>

<p>Nama : <?= $user['nama'] ?></p>
<p>Username : <?= $user['username'] ?></p>

<a href="<?= base_url()?>profil/editprofil">Edit profil</a>