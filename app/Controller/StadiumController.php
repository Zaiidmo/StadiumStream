<?php

namespace App\Controller;

use App\Model\Stadium;

class StadiumController
{
    public function index()
    {
        $stadiumModel = new Stadium();
        $stadiums = $stadiumModel->readStadium();
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

use App\Model\Permission;
    // public function getStadiums()
    // {
    //     $stadiumModel = new Stadium();
    //     return $stadiumModel->readStadium();
    // }

class StadiumController
{
    public function index()
    {
        $Stadiumpage = new Permission();
        $role = $Stadiumpage->check();
        // If the user is logged in and has the role of admin (role_id = 2)
        if ($role == 2) {
            $stadiums = new StadiumModel();
            $stadiums = $stadiums->readTeams();
            include "../app/View/dashboard/stadiums.php";
        } else {
            // Handle other cases, or simply redirect if necessary
            $redirect = URL_DIR . 'signin';
            header("Location: $redirect");
        }
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
