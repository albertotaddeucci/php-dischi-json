<?php


$albums = file_get_contents('./data-albums.json');

$albumsList = json_decode($albums);

header("Content-Type: application/json");

echo json_encode($albumsList);
