<?php
session_start();
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin" && $_POST["Password"] == "123") {
        // Buat Session
        $_SESSION["login"] = true;
        header("Location: index.php");
    } else {
        $eror = true;
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Admin</title>
    <style>
        * {
            text-decoration: none;
            list-style-type: none;
            border: none;
            font-family: 'poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url(../assets/img/daniel-leone-v7daTKlZzaw-unsplash.jpg);
            background-position: center;
            background-size: cover;
            background-color: rgba(0, 0, 0, 0.5);
        }

        form {
            width: 30rem;
            padding: 2rem 6rem;
            border-radius: .5rem;
            text-align: center;
            position: relative;
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(.4rem);
            color: #edededed;
        }

        form h2 {
            margin-bottom: 2rem;
        }

        label {
            display: flex;
            flex-direction: column;
            padding: .5rem;
        }

        input {
            width: 100%;
            padding: .3rem;
            background: transparent;
            border: none;
            border-bottom: .1rem solid #ededed;
            margin-bottom: 1rem;
            color: #ededed;
        }

        button {
            width: 100%;
            padding: .5rem 0;
            background-color: #1b72e5;
            cursor: pointer;
            border-radius: .4rem;
            color: #ededed;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 2rem;
        }

        form > h5 {
            font-weight: 500;
            margin-top: 1rem;
            font-weight: 400;
            color: #cb2b27;
            transform: translate(-50% -50%);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: .3rem;
        }
        form input:focus{
            outline:none;
            color: #ededed;
        }
    </style>
</head>
<body>
<section class="container">
        <form action="" method="post">
            <h2>Silahkan Login</h2>
            <li>
                <label for="username">Username :</label>
                <input type="username" name="username" id="username" autocomplete="off">
            </li>
            <li>
                <label for="Password">Password :</label>
                <input type="Password" name="Password" id="Password" autocomplete="off">
            </li>
            <button type="submit" name="submit">Masuk</button>
            <?php if (isset($eror)) : ?>
                <h5 id="countdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                    </svg>
                    password atau username tidak valid
                </h5>
            <?php endif; ?>

        </form>
    </section>
</body>
</html>