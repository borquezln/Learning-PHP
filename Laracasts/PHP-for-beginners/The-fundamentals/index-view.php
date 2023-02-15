<!DOCTYPE html>
<html>
    <head>
        <title>Demo</title>
        <style>
            h1 {
                font-family: sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Libros filtrados</h1>

        <ul>
            <?php foreach($filtered as $item) : ?>
                <li> <?= "{$item["titulo"]}; {$item["autor"]}; {$item["publicacion"]}" ?> </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>