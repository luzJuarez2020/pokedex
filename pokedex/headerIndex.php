<!DOCTYPE html>
<html>
<title>pokedex</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body, h1, h2, h3, h4, h5, h6 {
        font-family: "Raleway", sans-serif
    }
    .button{
        background-color: #f44336 ;
        color: white;
        border: 2px solid #f44336;
    }

    .button:hover {
        background-color: white;
        color: black;
    }

</style>

<body class="w3-light-grey w3-content" style="max-width:1900px">

<header id="portfolio" class="w3-row" >
    <div class="w3-col s4 w3-center" style="padding: 1%">
        <a href="index.php"><img src="logos/pokebola.png" width="20%" height="20%"></a>
    </div>
    <div class="w3-col s4" >
        <h1 ><b>POKEDEX</b></h1>
    </div >
    <div class="w3-col s4" style="padding-top: 25px">
        <form action="procesarlogin.php" method="post">
            <input type="text" name="usuario" id="usuario" >
            <input type="password" name="contra" id="contra" >
            <button type="submit"  class="button">Ingresar</button>
        </form>
    </div>

</header>
