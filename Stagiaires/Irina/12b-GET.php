<?php



$arrayData = [
    'about' => [
        'Title' => 'A propos',
        'Text' => "<p> Bienvenue  sur la section concernant mes travaux </p><p>Bonne viiste",
    ], 
]

// si la variable est une section
elseif(isset($_GET['section']))
    //Si la section est valide( clef dans le tableau arrayData)
if(in_array($_GET['section'],$arrayData)) echo "EXISTE";

$title = $arrayData[$_GET['section']]['Title'];
$text = $arrayData[$_GET['section']]['Text'];
}else{
    $title = $arrayData[$_GET['section']]['Title'];


}




 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    
 </body>
 </html>