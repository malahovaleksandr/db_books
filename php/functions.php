<?php

//function quote html tags and quotes
function checkData($data,$link){
    $checkData = mysqli_real_escape_string($link,$data);//We quote quotes
    $checkData = htmlspecialchars($checkData);//We quote html tags
    return $checkData;
}
 //function delete html tags
function deleteTags($data){
    $checkData = strip_tags($data);
    return $checkData;
}

//function for select by tag
function selectByTag($query){
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
