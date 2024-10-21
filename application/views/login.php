<div class="login">
            <h2>LOGIN PENDAFTARAAN EVENT</h2>
            
            <?= $this->session->flashdata('massage'); ?>

            <form action="<?= base_url ()?>login/validasi" method="POST">
                <label for="">Username :</label>
                <input type="text" name="username" placeholder="Masukkan Username" required>
                <br>
                <label for="">Password :</label>
                <input type="password" name="password" placeholder="Masukkan Password" required>
                <br>
                
                <input type="submit" value="Login">
                <br>
                <br>

                <p>Belum punya akun? <a href="<?= base_url ('daftar')?>">Daftar</a></p>

            </form>
        </div>