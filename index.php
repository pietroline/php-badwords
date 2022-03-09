<!-- 
    Esercizio di oggi: PHP Badwords
    nome repo: php-badwords
    Descrizione: Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall’utente tramite parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
 -->

<?php
    $paragrafo = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,";
    $lunghzzaParagrafo = strlen($paragrafo);

    $parolaCensurata = $_GET["censura"];
    $paragrafoModificato = str_ireplace($parolaCensurata,"***", $paragrafo);
    $lunghzzaParagrafoModificato = strlen($paragrafoModificato);
?>
  
    
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <b>Paragrafo test:</b>
        <p style="display: inline;">
            <?php echo $paragrafo?>
        </p>

        <b>Lunghezza paragrafo test:</b>
        <span>
            <?php echo $lunghzzaParagrafo?> caratteri
        </span>


        
        <br>
        <br>


        <b>Paragrafo test modificato:</b>
        <p style="display: inline;">
            <?php echo $paragrafoModificato?>
        </p>

        <b>Lunghezza paragrafo test modificato:</b>
        <span>
            <?php echo $lunghzzaParagrafoModificato?> caratteri
        </span>



    </body>

</html>