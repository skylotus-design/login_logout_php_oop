
<?php
    class Registrasi extends Database{

        public function sandiCek($pass1, $pass2)
        {
            if($pass1 == $pass2){
                return True;
            } else {
                return False;
            }
        }

        public function emailCek($email)
        {
            $sql = $this->conn->prepare("SELECT alamat_email FROM pengguna_oop WHERE alamat_email = ? LIMIT 1");
            $sql->bind_param("s", $email);
            $sql->execute();
            $query = $sql->get_result();
            if($query->num_rows > 0){
                return True;
            } else {
                return False;
            }
        }

        public function registrasi($nama, $email, $sandi)
        {
            $sql = $this->conn->prepare("INSERT INTO pengguna_oop(nama_pengguna, alamat_email, kata_sandi) VALUES(?,?,?)");
            $sql->bind_param('sss', $nama, $email, $sandi);
            $sql->execute();
            return True;
        }
    }

    $registrasi = new Registrasi();
?>