<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>discos</title>
</head>
<body>
    <header>
        <ul>
            <li>
                <a href="">Discos</a>
            </li>
           {if !$isUser} 
            <li>
                <a href="login">Login</a>
            </li>
            {else}
                <li>
                    <a href="logout">Logout</a>
                </li>
            {/if}
            <li>
                <a href='generos/' class='btn btn-danger'>Ver Generos </a>
            </li>
          </ul>
    </header>

    <!-- inicio main container -->
    <main>