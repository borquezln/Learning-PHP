<?php
    $libros = [
        ["titulo" => "Harry Potter", "autor" => "JK Rowling", "publicacion" => 1997],
        ["titulo" => "The Illustrated Man", "autor" => "Ray Bradbury", "publicacion" => 1951],
        ["titulo" => "The Traveler", "autor" => "John Katzenbach", "publicacion" => 1987]];
    
    function filter($data, $fn) {
        $filtered = [];

        foreach($data as $item) {
            if($fn($item)) {
                $filtered[] = $item;
            }
        }

        return $filtered;
    }

    $filtered = filter($libros, function($libro) {
        return $libro["publicacion"] > 1980;
    });

    require "index-view.php";
?>