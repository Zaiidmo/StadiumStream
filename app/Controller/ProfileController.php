<?php 
namespace App\Controller;
class ProfileController {
    public function index() {
        if (isset($_SESSION['id'])){       
        include "../app/View/profile.php";
        } else { 
            $redirect = URL_DIR . 'signin';
            header("Location: $redirect");
        }
    }
}
