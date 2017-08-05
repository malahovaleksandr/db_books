$(function(){

    var js_allBooks   = $('.js_allBooks'),
        wrapperResult = $('.resultFilter');//block where show result

    //function for insert info about books
    function insertBooksInfo (arrayBooks){
        $.each(arrayBooks,function(key,value) {
            wrapperResult.append(
                '<div  class="oneBook js_selectBook" data-id="'+value['id_book']+'">' +
                '<div class="td id">Название ' +
                '<span class="result_avtor js_name">'+value['name']+'</span>' +
                '</div>' +
                '<div class="td avtor">Автор' +
                '<span class="result_avtor js_author">'+value['author']+'</span>'+
                '</div>'+
                '<div class="td genre">Жанр'+
                '<span class="result_avtor js_genre">'+ value['genre']+'</span>'+
                '</div>'+
                '<div class="td description ">Описание <br>'+
                '<span class="result_avtor">'+value['description']+'</span>'+
                '</div>'+
                '</div>');
        });
    }
    //function insert info selected book
    var selectBook            = $('.js_selectBook'),
        selectedBook          = $('.js_selectedBook'),
        insertNameBook        = $('.js_selectedBook_name'),
        insertDescriptionBook = $('.js_selectedBook_description'),
        insertAuthorBook      = $('.js_selectedBook_author'),
        insertGenreBook       = $('.js_selectedBook_genre');


    function insetInfoSelectedBook(selectBook) {
        var thisBlock       = selectBook,
            idBook          = thisBlock.data('id'),
            NameBook        = thisBlock.find('.js_name').text(),
            DescriptionBook = thisBlock.find('.description').text(),
            AuthorBook      = thisBlock.find('.js_author').text(),
            GenreBook       = thisBlock.find('.js_genre').text();

        selectedBook.data('id',idBook);
        insertNameBook.text(NameBook);
        insertDescriptionBook.text(DescriptionBook);
        insertAuthorBook.text(AuthorBook);
        insertGenreBook.text(GenreBook);
    }

    //function valid mail
    function isValidEmailAddress(emailAddress) {
        var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
        return pattern.test(emailAddress);
    }
    //button filter - show all books
    js_allBooks.on('click',function(){
        $.ajax({
            type: "POST",
            url: "../php/lists-filter.php",
            data:{
                request : 'all_books'
            },
            success: function(msg){
                wrapperResult.find('.oneBook').remove();
                var answer = $.parseJSON(msg);
                insertBooksInfo(answer);
            }
        });
    });
// filter books by Author
    var selectAuthors = $('.js_selectAuthor');

    selectAuthors.on('change',function(){
        var author = $(this).val();
         console.log(author);
        $.ajax({
            type: "POST",
            url: "../php/lists-filter.php",
            data:{
                request : 'filter_author',
                filter  : author
            },
            success: function(msg){
                //console.log('автор- '+msg);
                wrapperResult.find('.oneBook').remove();
                var answer = $.parseJSON(msg);
                insertBooksInfo(answer);

            }
        });
    });

// filter books by Genre
    var selectGenres = $('.js_selectGenre');

    selectGenres.on('change',function(){
        var genre = $(this).val();
         console.log(genre);
        $.ajax({
            type: "POST",
            url: "../php/lists-filter.php",
            data:{
                request : 'filter_genre',
                filter  : genre
            },
            success: function(msg){
                //console.log('жанр- '+msg);
                wrapperResult.find('.oneBook').remove();
                var answer = $.parseJSON(msg);
                insertBooksInfo(answer);

            }
        });
    });


    //sand mail-----------------------------------------------------------------
    var sandMail   = $('.js_buttonOrder'),//button sand mail
        nameClient = $('.js_nameClient'),//name client`s
        address    = $('.js_address'),//address
        name_book  = $('.js_selectedBook').data('id'),//id selected book
        count      = $('.js_count');//count books order
//function clear inputs form
    function clearInputForm(){
        nameClient.val(' ');
        address.val(' ');
        count.val(' ');

    }

    sandMail.on('click',function(e){
        e.preventDefault();



        $.ajax({
            type: "POST",
            url: "../php/sand_mail.php",
            data: {
                nameClient : nameClient.val(),
                address    : address.val(),
                name_book  :  name_book,
                count      : count.val()

            },
            success: function(msg){
                clearInputForm();
                console.log(msg);
            }
        });
    });

    //show info select books
    $('.resultFilter').on('click','.js_selectBook',function(){
        var selectBook = $(this);

        $('.resultFilter').find('.active').removeClass('active');
        selectBook.addClass('active');

        insetInfoSelectedBook(selectBook);
    });



});