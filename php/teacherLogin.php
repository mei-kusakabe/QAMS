<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <link href=" https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel='stylesheet' href="../css/loginRegistration.css">
    <title>Teacher Login</title>
</head>

<body
    class="min-h-screen bg-gradient-to-r from-pink-200 to-indigo-200 text-gray-700 flex justify-center items-center p-6">
    <div
        class="max-w-lg w-full bg-purple-600 bg-opacity-20 flex flex-col justify-center items-center font-bold shadow-lg rounded-lg text-center space-y-6 py-8">
        <h1 class="text-4xl">Teacher login!</h1>
        <form class="text-gray-600" action="login.php" method="POST">
            <?php include('errors.php'); ?>
            <div class="relative my-8">
                <input class="bg-purple-300 border border-purple-500 rounded-lg max-w-full py-2 px-6" type="text"
                    placeholder=" " name="name" required>
                <label>ID</label>
            </div>

            <div class="relative my-8">
                <input class="bg-purple-300 border border-purple-500 rounded-lg max-w-full py-2 px-6" type="password"
                    placeholder=" " name="password" required>
                <label>Password</label>
            </div>

            <!--<div class="logIn">
                <button class="log_button" onclick="window.open('index.php');"> 
                <button type="submit" name="login" class="btn"> <b>Login<b></button>
            </div>-->
            <button type="submit" name="login"
                class="bg-purple-900 text-base font-bold mb-6 py-2 px-6 rounded-full text-gray-200"
                onclick="window.location.href ='../html/teacherDashboard.html'">Login</button>
            <h4>Don't have an account? <a href="../php/teacherRegistration.php"
                    class="text-blue-700 underline hover:text-blue-500">Sign Up
                    Now</a>
            </h4>
        </form>
        <tr>
            <td>
                <a href="../html/home.html">Back to Home</a>
            </td>
        </tr>
    </div>
    <script src="../js/mn.js"></script>
    <!--<script>
    function alrt() {
        alert("Message received!\nThank you for your feedback.");
    }
    </script>-->

</body>

</html>