<?php
require_once 'config.php';


$mysqli    = new mysqli(DB_LOCAL,DB_LOGIN,DB_PASS,DB_NAME);
$mysqli->set_charset("utf8");

$query_author = 'SELECT author FROM authors';
$query_genres = 'SELECT genre FROM genres';
$query_books  = 'SELECT * FROM books AS t1 LEFT JOIN author_books AS t2 ON t1.id = t2.id_book LEFT JOIN genre_books AS t3 ON t1.id = t3.id_book ' ;

$authors = $mysqli->query($query_author);
$genres  = $mysqli->query($query_genres);
$books = $mysqli->query($query_books);

//$query_books  = 'SELECT * FROM books AS t1 LEFT JOIN author_books AS t2 ON t1.id = t2.id_book LEFT JOIN genre_books AS t3 ON t1.id = t3.id_book WHERE t2.author="Вульф"' ;
//$books = $mysqli->prepare($query_books);
//$books = $mysqli->bind_param("s", 'Гоголь');
//$books = $mysqli->execute();


// return list all books
if ( $_POST['request'] == 'all_books'){

    $books_author = $mysqli->query($query_books);
    $result       = array();
    $i = 0;
    while( $res = mysqli_fetch_assoc($books_author) ){
        $result[$i] = $res;
        $i++;
    }
    echo json_encode($result);
    return;
}

function selectByTag($query){
    $dataInf = $_POST['filter'];
    $mysqli    = new mysqli(DB_LOCAL,DB_LOGIN,DB_PASS,DB_NAME);
    $mysqli->set_charset("utf8");
    $query_author_books  = $query ;
    $books_author        = $mysqli->query($query_author_books);
    $result = array();
    $i = 0;
    while( $res = mysqli_fetch_assoc($books_author) ){
        $result[$i] = $res;
        $i++;
    }
    echo json_encode($result);
    return;
}
//return books with select author
if ( $_POST['request'] == 'filter_author'){
    $dataInf = $_POST['filter'];
    $query = 'SELECT * FROM books AS t1 LEFT JOIN author_books AS t2 ON t1.id = t2.id_book LEFT JOIN genre_books AS t3 ON t1.id = t3.id_book WHERE author="'.$dataInf.'"';

    selectByTag($query);
}
//return books with select genre
if ( $_POST['request'] == 'filter_genre'){
    $dataInf = $_POST['filter'];
    $query = 'SELECT * FROM books AS t1 LEFT JOIN genre_books AS t2 ON t1.id = t2.id_book LEFT JOIN author_books AS t3 ON t1.id = t3.id_book WHERE genre="'.$dataInf.'"';

    selectByTag($query);
}



?>

