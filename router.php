
<pre>
    <?php
    // var_dump($_SERVER);
    // die();
    ?>
</pre>

<?php
//IF WRONG URL THEN REFIRECT IT TO HOME PAGE I.E Index.php
//CREATED HTDOCS FOR ABOVE COMMENT
//SOLVED



// GET PAGE NAME USER IS TRYING TO ACCESS
$request_uri    =   parse_url($_SERVER['REQUEST_URI'])['path'];
// echo($request_uri);

//CHECK IF PAGE EXISTS
//IF YES THEN REDIRECT USER TO PAGE


//GETTING ROUTES FROM FILE

$routes =   require("routes.php");

// if ($request_uri    === "/home"){
//     require("./controllers/home.php");
// }
if (array_key_exists($request_uri, $routes)){
    require($routes[$request_uri]);
} else{
    abort();
}
?>