<?php
namespace App\Controller;

use App\Model\Stadium;

class StadiumController
{
    public function index()
    {
        $stadiumModel = new Stadium();
        $stadiums = $stadiumModel->readStadium();
        include "../app/View/dashboard/stadium.php";
    }
    public function createStadium()
    {
        $stadiumModel = new Stadium();

        $data = [];
        $data['name'] = $_POST['name'];
        $data['location'] = $_POST['location'];
        $data['capacity'] = $_POST['capacity'];

        $stadiumModel->createStadium($data);
        $redirect = URL_DIR. "stadium";
        return header("Location: $redirect");
    }

    // public function getStadiums()
    // {
    //     $stadiumModel = new Stadium();
    //     return $stadiumModel->readStadium();
    // }

    public function updateStadium()
    {
        $stadiumModel = new Stadium();
        $id = $_POST['id'];
        unset($_POST['id']);
        $stadiumModel->updateStadium($_POST, $id);
        $redirect = URL_DIR. "stadium";
        return header("Location: $redirect");
    }

    public function deleteStadium($id)
    {
        $stadiumModel = new Stadium();
        $stadiumModel->deleteStadium($id);
        $redirect = URL_DIR. "stadium";
        return header("Location: $redirect");
    }
}
