<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-X06VNNFFPK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-X06VNNFFPK');
    </script>
    
    <title>Документы БФ "Добро Во Благо"</title>
    
    <meta name="keywords" content="фонд, благотворительность, документы">
    <meta name="description" content="Документы БФ Добро Во Благо ">
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

<!--Учредительный документы заголовок-->
<div class="jumbotron text-center" style="margin-bottom: 0; background: #79af5b;">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 style="color: white; text-align: center;">Учредительные документы</h1>
            </div>
        </div>
    </div>
</div>

            

<!--Учредительный документы основной текст-->
<div class="jumbotron text-center" style="margin-bottom: 0; background: snow;">
    <div class="container" style="text-align: left;">
        <div class="row">
            <div class="col-sm-4">
               <h5 style="text-align: left;">Свидетельство о государственной регистрации НКО БФ "ДОБРО ВО БЛАГО"</h5>
               <a href = "/svidetelstvo.pdf" target = "_blank">Ссылка для скачивания скана в формате PDF</a>
            </div>
            <div class="col-sm-4">   
               <h5 style="text-align: left;">Свидетельство о постановке на учет в налоговом органе</h5>
               <a href = "/inn.pdf" target = "_blank">Ссылка для скачивания скана в формате PDF</a>
            </div>
            <div class="col-sm-4">
                <h5 style="text-align: left;">Устав БФ "ДОБРО ВО БЛАГО"</h5>
                <a href = "/ustav_fonda.pdf" target = "_blank">Ссылка для скачивания скана в формате PDF</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
               <h5 style="text-align: left;">Справка Сбербанка, подтверждающая реквизиты счета фонда для приёма пожертований</h5>
               <a href = "/spravka_sber_rekviziti_fonda.pdf" target = "_blank">Ссылка для скачивания скана в формате PDF</a>
            </div>
            <div class="col-sm-4">   
               
            </div>
            <div class="col-sm-4">
               
            </div>
            
        </div>
        <hr>
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

<!--Bitrix24 виджет на сайт-->
<script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn-ru.bitrix24.ru/b16504784/crm/site_button/loader_2_wuqc64.js');
</script>

</body>
</html>
