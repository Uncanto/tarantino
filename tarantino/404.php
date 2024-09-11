<!DOCTYPE html>
<html>
<head>
        <title>Tarantino Official Website</title>    
        <meta name="description" content="Sito ufficiale di Quentin Tarantino">
        <meta name="keywords" content="Quentin Tarantino, Pulp Fiction, Once Upon in Hollywood, Inglorious Bastards">
        <?php include('heading.php'); ?>
</head>


    <body>
        
        <?php 
            $page= '404';
            include('menu.php'); 
        ?>

<div class="row g-0" >
    <div class="error-pg">

    <div class="error-number">
    <div class="number left-coffee">4</div>
    <div class="coffee-mug"></div>
    <div class="number right-coffee">4</div>
    </div>
    <div class="sm-screen">404</div>
    <div class="mean-msg">
        Niente da vedere qui...
    </div>
    <div class="mean-msg"  style="text-decoration:none; margin-top:1rem; padding-bottom:5rem;">
            <button onClick="history_back()" class="btn btn-primary" type="button" id="button-404">
                Torna indietro
                <i class="bi bi-arrow-left-short"></i>
            </button>
    </div>

    </div>
</div>

            

        <?php 
            include('footer.php');
            include('scripts.php');
         ?>
    </body>
</html>