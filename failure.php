<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <title>Успешная отправка пожертвования на счет БФ "Добро Во Благо"</title>
    
    <meta name="keywords" content="пожертвование, отправка, успех, спасибо, благотворительность">
    <meta name="description" content="Успешная отправка пожертвования на счет БФ "Добро Во Благо" ">
    <meta name="author" content="Козлов Олег Иванович">
    
    <!--Основные теги и скрипты сайта-->    
    <?php include './php/meta_tags.php';?>
    
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        body {
            background: #2a2b2c;
        }
        p {
            text-align: left;
            
        }
    </style>
</head>
<body>
    
<!--Меню сайта-->    
<?php include './php/menu.php';?>

<!--Отзыв родителей Зозули Вани о работе БФ "Добро Во Благо"-->
<div class="jumbotron text-center" style="margin-bottom: 0; background: #79af5b;">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 style="color: white; text-align: center;">Ой! Что-то пошло не так. Перевод не был проведен.</h1>
                <p style="color: white; text-align: center;">Возможно произошол сбой в оплате. Попробуйте еще раз отправить пожертвание. Приносим вам свои извинения за возникшее неудобство.</p>
            </div>
        </div>
    </div>
</div>


<!--Форма для отправки вопросов в Bitrix24-->
<div class="jumbotron text-center" style="margin-bottom: 0; background: snow;">
    <div class="container" style="text-align: center;">
        <div class="row">
            <div class="col-sm-12">
               <h5 style="text-align: center;">Есть вопросы? <br>Пишите. Ответим на все в течение дня.</h5>
               <br>
               <script data-b24-form="inline/10/opmsio" data-skip-moving="true">
                    (function(w,d,u){
                        var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);
                        var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
                    })(window,document,'https://cdn-ru.bitrix24.ru/b16504784/crm/form/loader_10.js');
                </script>
            </div>
        </div>
    </div>
</div>

<!--Подвал-->
<?php include './php/footer.php';?>


<!--GOODY Виджет  -->
<script src="https://goody.im/widget/c5b301344ee87c34e26b6f78.js"></script>

<!--GOODY форма -->
<script src="https://goody.im/form/c5b301344ee87c34e26b6f78.js"></script>

<!-- Bitrix24 -->
<script>
    (function(w,d,u){
        var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
        var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
    })(window,document,'https://cdn-ru.bitrix24.ru/b16504784/crm/site_button/loader_2_wuqc64.js');
</script>

</body>
</html>
