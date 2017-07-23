<?php
//require_once 'config.php';
//
//$mysqli    = new mysqli(DB_LOCAL,DB_LOGIN,DB_PASS,DB_NAME);
//$mysqli->set_charset("utf8");
//
////create DB
//$query_create_books = 'CREATE TABLE books (id INT NOT NULL AUTO_INCREMENT, name char(100) NOT NULL, discription TEXT NOT NULL,PRIMARY KEY (id)
//                      ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;CHARACTER SET utf8 COLLATE utf8_general_ci;';
//$query_create_author_books = 'CREATE TABLE author_books (id INT NOT NULL AUTO_INCREMENT,id_book INT NOT NULL,author TEXT NOT NULL, PRIMARY KEY (id)
//                      ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1';
//$query_create_genre_books = 'CREATE TABLE genre_books (id INT NOT NULL AUTO_INCREMENT,id_book INT NOT NULL,genre TEXT NOT NULL, PRIMARY KEY (id)
//                      ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1';
//$query_create_genre = ' CREATE TABLE genres (id INT NOT NULL AUTO_INCREMENT,genre TEXT NOT NULL,PRIMARY KEY (id)
//                      ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1';
//$query_create_authors = '   CREATE TABLE authors (id INT NOT NULL AUTO_INCREMENT, author TEXT NOT NULL, PRIMARY KEY (id)
//                      ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1';
//
////Insert data in tables
//$query_books = '   INSERT INTO `books` (`id`, `name`, `description`) VALUES
//   (NULL, \'Сто лет одиночества\', \'Сто лет одиночества» – одно из наиболее характерных и популярных произведений в направлении магического реализма.\'),
//    (NULL, \'Моби Дик, или Белый кит\', \'Повествование ведется от имени американского моряка Измаила, ушедшего в рейс на китобойном судне «Пекод», капитан которого, Ахав, одержим идеей мести .\'),
//   (NULL, \'Великий Гэтсби\', \'Действие романа происходит недалеко от Нью-Йорка, на «золотом побережье» Лонг-Айленда, среди вилл богачей. В 1920-е годы вслед за хаосом Первой мировой американское \'),
//   (NULL, \'Гроздья гнева\', \'Действие романа происходит во времена Великой депрессии. Бедная семья фермеров-арендаторов, Джоуды, вынуждена .\'),
//   (NULL, \'Улисс\', \'Роман повествует об одном дне (16 июня 1904 года, в настоящее время эта дата отмечается как Блумсдэй, «день Блума») дублинского .\'),
//   (NULL, \'Лолита\', \'«Лолита» является наиболее известным из всех романов Набокова. Тема романа была немыслимой для своего времени – история взрослого мужчины, .\'),
//    (NULL, \'Шум и ярость\', \'Основная сюжетная линия повествует об увядании одного из старейших и наиболее в.\'),
//     (NULL, \'На маяк\', \'В центре романа оказываются два визита семьи Рэмзи в съемный загородный дом на острове Скай в Шотландии в 1910 и 1920 году. .\'),
//     (NULL, \'Шум и ярость\', \'Основная сюжетная линия повествует об увядании одного из старейших и наиболее влиятельных семейств американского .\'),
//     (NULL, \'На маяк\', \'В центре романа оказываются два визита семьи Рэмзи в съемный загородный дом на острове Скай в Шотландии в 1910 и 1920 году. «На маяк» .\')';
//
//
//$query_genre_books = 'INSERT INTO `genre_books` (`id`, `id_book`, `genre`) VALUES (NULL, \'1\', \'Повесть\'), (NULL, \'2\', \'Триллер\'),(NULL, \'3\', \'Повесть\'), (NULL, \'4\', \'Триллер\'),(NULL, \'5\', \'Повесть\'), (NULL, \'6\', \'Триллер\'),(NULL, \'7\', \'Повесть\'), (NULL, \'8\', \'Триллер\'),(NULL, \'1\', \'Роман\'), (NULL, \'2\', \'Детектив\'),(NULL, \'3\', \'Детектив\'), (NULL, \'4\', \'Роман\'),(NULL, \'6\', \'Роман\'),(NULL, \'7\', \'Роман\')';
//$query_genres = ' INSERT INTO `genres` (`id`, `genre`) VALUES (NULL, \'Повесть\'), (NULL, \'Триллер\'),(NULL, \'Детектив\'), (NULL, \'Роман\');';
//$query_author_books = ' INSERT INTO `author_books` (`id`, `id_book`, `author`) VALUES (NULL, \'1\', \'Габриэль\'), (NULL, \'2\', \'Герман\'),(NULL, \'3\', \'Фрэнси\'), (NULL, \'4\', \'Джон\'),(NULL, \'5\', \'Джеймс\'), (NULL, \'6\', \'Набоков\'),(NULL, \'7\', \'Уильям\'), (NULL, \'8\', \'Вирджиния\'),(NULL, \'2\', \'Фрэнси\'), (NULL, \'5\', \'Джон\'),(NULL, \'6\', \'Джеймс\'), (NULL, \'3\', \'Набоков\'),(NULL, \'1\', \'Уильям\'), (NULL, \'2\', \'Вирджиния\')';
//$query_authors = ' INSERT INTO `authors` (`id`, `author`) VALUES (NULL, \'Габриэль\'),(NULL, \'Герман\'),(NULL, \'Фрэнсис\'),(NULL, \'Джон\'),(NULL, \'Джеймс\'),(NULL, \'Уильям\'),(NULL, \'Набоков\'),(NULL, \'Вирджиния\');';
//
//$authors = $mysqli->query($query_create_books);
//$authors = $mysqli->query($query_create_author_books);
//$authors = $mysqli->query($query_create_genre_books);
//$authors = $mysqli->query($query_create_genre);
//$authors = $mysqli->query($query_create_authors);
//$authors = $mysqli->query($query_books);
//$authors = $mysqli->query($query_genre_books);
//$authors = $mysqli->query($query_genres);
//$authors = $mysqli->query($query_author_books);
//$authors = $mysqli->query($query_authors);
//
//
//
//
//
//
//
