<?php

namespace App\Controller;

use App\Model\UserModel;

class EditprofileController
{
    public function index()
    {
        session_start(); // Start the session

        if (isset($_SESSION['id'])) {
            $userId = $_SESSION['id']; // Get the user's ID from the session
            $userModel = new UserModel();
            $userData = $userModel->getUserById($userId); // Get the user data by ID

            if ($userData) {
                // Split fullname into first_name and last_name
                $fullName = $userData['full_name'];
                $nameParts = explode(' ', $fullName, 2); // Split fullname into two parts
                $userData['first_name'] = $nameParts[0]; // Set first_name
                $userData['last_name'] = isset($nameParts[1]) ? $nameParts[1] : ''; // Set last_name


                include "../app/View/editprofile.php"; // Include the view for editing user profile
            } else {
                // Handle error: User data not found
                $_SESSION['error'] = "User data not found";
                $redirect = URL_DIR . 'error404';
                header("Location: $redirect"); // Redirect to error page
            }
        } else {
            $redirect = URL_DIR . 'signin';
            header("Location: $redirect");
        }
    }


    public function updateProfile()
    {
        session_start(); // Start the session

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['id'])) {
            $userId = $_SESSION['id']; // Get the user's ID from the session
            $userModel = new UserModel();

            // If form validation passes, update the user's profile
            $userData = [
                'full_name' => $_POST['first_name'] . " " . $_POST['last_name'],
                'email' => $_POST['email'],
                'phone_number' => $_POST['phone_number'],
            ];

            $userUpdated = $userModel->updateUser($userId, $userData); // Update the user's data

            if ($userUpdated) {
                $_SESSION['full_name'] = $userData['full_name'];
                $_SESSION['email'] = $userData['email'];
                $_SESSION['phone_number'] = $userData['phone_number'];
                $_SESSION['success'] = "Your profile has been updated successfully";
                $redirect = URL_DIR . 'profile';
                header("Location: $redirect");
                exit();
            } else {
                $_SESSION['error'] = "Failed to update your profile";
            }
            header("Location: ../app/View/editprofile.php"); // Redirect back to the edit profile page
        } else {
            $redirect = URL_DIR . 'signin';
            header("Location: $redirect");
        }
    }
}
