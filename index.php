<!--
Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.
-->

<?php

//phpinfo();
include 'dataArray.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Google Faq</title>
</head>
<body>

    <?php
    foreach ($faqArray as $faq) {
        //creo un div per ogni faq
        echo('<div class="question">');
            //creo un h2 per ogni domanda
            echo('<h2>'. $faq['question']. '</h2>');
            //creo un p per ogni risposta
            echo($faq['answer']);
        echo('</div>');
    }
     
    ?>
    
    
</body>
</html>