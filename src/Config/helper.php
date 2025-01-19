<?php

function redirect($dir) {

    Header('Location: ' . $dir);

}

function loadPages($path) {
    require "src/Views/pages/$path.php";
}

function loadThread($path, $data = []) {
    extract($data);
    var_dump($data);
    require "src/Views/pages/$path.php";
}

function loadPartials($path) {
    require "src/Views/partials/$path.php";
}

function var_dump_pre($mixed) {
    echo '<pre>';
    var_dump($mixed);
    echo '</pre>';
    return null;
}