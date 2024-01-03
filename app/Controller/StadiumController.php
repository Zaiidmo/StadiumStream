<?php
namespace App\Controller;

use App\Model\Stadium;

class StadiumController
{
    public function index()
    {
        include "../app/View/dashboard/stadium.php";
    }
    public function createStadium($data)
    {
        $stadiumModel = new Stadium();

        $data = [];
        if (isset($_FILES['img_path']) && !empty($_FILES['img_path']['tmp_name'])) {
            // Process file upload here and store the file path in the $data array
            $img_path = $_FILES['img_path'];
            $uploadDirectory = "C:/laragon/www/StadiumStream/public/assets/uploads/"; // Update this path to your local directory
            $filename = preg_replace("/[^a-zA-Z0-9]/", "_", $_POST['name']);
            $targetFileName = $uploadDirectory . $filename . "." . strtolower(pathinfo($img_path['name'], PATHINFO_EXTENSION));

            if (move_uploaded_file($img_path['tmp_name'], $targetFileName)) {
                // File uploaded successfully, add file path to the $data array
                $data['img_path'] = $filename . '.jpeg';
            } else {
                // Handle file upload error
                echo 'File upload failed.';
                return;
            }
        }
        $data['name'] = $_POST['name'];
        $data['location'] = $_POST['location'];
        $data['capacity'] = $_POST['capacity'];

        $stadiumModel->createStadium($data);
        // header("Location: ");
    }

    public function getStadiums()
    {
        $stadiumModel = new Stadium();
        return $stadiumModel->readStadium();
    }

    public function updateStadium($id, $data)
    {
        $stadiumModel = new Stadium();
        return $stadiumModel->updateStadium($id, $data);
    }

    public function deleteStadium($id)
    {
        $stadiumModel = new Stadium();
        return $stadiumModel->deleteStadium($id);
    }
}
