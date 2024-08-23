

<?php
    class Login extends Database {

        public function login_sekarang($email, $pass)
        {
            $sql = $this->conn->prepare("SELECT id_pengguna, alamat_email, Kata_sandi FROM pengguna WHERE alamat_email = ? AND kata_sandi = ? LIMIT 1"); //potensi error-> nama kolom tdk dipangil
            $sql->bind_param('ss', $email, $pass);
            $sql->execute();
            $query = $sql->get_result();
            
            if($query->num_rows>0){
                $res = $query->fetch_assoc();
                $usr = $res['id_pengguna'];
                $this->pengguna_login($usr);
                return True;
            } else {
                return False;
            }
        }
        public function pengguna_login($p)
        {
            $_SESSION['status_login'] = True;
            $_SESSION['sesi_pengguna'] = $p;
        }

        public function pengguna_logout()
        {
            if(isset($_SESSION['status_login'])){
                unset( $_SESSION['status_login']);
                unset( $_SESSION['sesi_pengguna']);
                return True;
            } else {
                return False;
            }
        } 

        public function apakah_login()
        {
            if(!isset($_SESSION['status_login'])){
                fungsi_redirek('publik/login.php');
            }
        }
    }

    $login = new Login();
?>