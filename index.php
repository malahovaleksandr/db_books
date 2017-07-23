<?php
error_reporting(E_ALL); // E_ALL - отображаем ВСЕ ошибки
ini_set('display_errors', 'off'); // теперь сообщений НЕ будет

    require_once 'php/config.php';
    require_once 'php/lists-filter.php';
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <div class="flex">
        <div class="container">
            <div class="blockSearch">
                <div class="buttonShowAll button js_allBooks">Показать все книги</div>
                <select class="selectAvtor js_selectAuthor">
                    <option disabled selected>Авторы</option>
                    <?php
                        while( $res = mysqli_fetch_assoc($authors) ){
                       echo '<option>'.$res['author'].'</option>';
                     } ?>
                </select>
                <select class="selectGenre js_selectGenre">
                    <option disabled selected>Жанры</option>
                    <?php
                        while( $res = mysqli_fetch_assoc($genres)){
                            echo '<option>'.$res['genre'].'</option>';
                        }
                    ?>
                </select>
<!--                <div class="buttonFilter button">Отфильтровать</div>-->
            </div>
            <div class="resultFilter">
                <div class="titleSelectBook">Результат: </div>
                <?php while( $res = mysqli_fetch_assoc($books)){
                    echo '
                     <!-- one product -->
                    <div  class="oneBook js_selectBook" data-id="'.$res['id_book'].'">
                        <div class="td id">
                            Название
                            <span class="result_avtor js_name">'.$res['name'].'</span>
                        </div>
                        <div class="td avtor">
                            Автор
                            <span class="result_avtor js_author">'.$res['author'].'</span>
                        </div>
                        <div class="td genre">
                            Жанр
                            <span class="result_avtor js_genre"> '.$res['genre'].'</span>
                        </div>
                        <div class="td description ">Описание <br>
                            <span class="result_avtor">
                            '.$res['description'].'
                        </span>
                        </div>
                    </div>
                     <!-- end one product -->
                ';
                }?>

            </div>
            <div class="selectBooks">
                <div class="titleSelectBook">Выбранная книга: </div>
                <div  class="oneBook js_selectedBook" data-id="1">
                    <div class="td id">
                        Название
                        <span class="result_avtor js_selectedBook_name"></span>
                    </div>
                    <div class="td avtor">
                        Автор
                        <span class="result_avtor js_selectedBook_author"></span>
                    </div>
                    <div class="td genre">
                        Жанр
                        <span class="result_avtor js_selectedBook_genre"> </span>
                    </div>
                    <div class="td description">Описание <br>
                        <span class="result_avtor js_selectedBook_description">

                        </span>
                    </div>
                </div>
                <div class="formOrder">
                    <form action="php/order.php" >
                        <input type="text" placeholder="ФИО" class="input js_name">
                        <input type="number" placeholder="E-mail" class="input js_mail">
                        <input type="text" placeholder="Адрес" class="input js_address">
                        <input type="number" placeholder="кол-во" class="input js_count">
                        <button type="submit" class="js_buttonOrder">заказaть</button>
                    </form>
                </div>
            </div>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="js/scripts.js" type="text/javascript"></script>
</body>
</html>
