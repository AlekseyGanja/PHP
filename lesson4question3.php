<title>Анимация</title>

<head>
<script src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
// Обрабатывает клик на картинке
            $('.img_block img').click(function() {
// Получаем адрес картинки
                var imgAddr = $(this).attr("src");
// Задаем свойство SRC картинке, которая в скрытом диве.
                $('#img_big_block img').attr({src: imgAddr});
// Показываем скрытый контейнер
                $('#img_big_block').fadeIn('slow');
            });
// Обрабатывает клик по большой картинке
            $('#img_big_block').click(function() {
                $(this).fadeOut();
            });
        });
</script>

    <style type="text/css">
        .img_block {
            display: inline-block;
            /*padding: 5px 5px 5px 5px;*/
        }
        /* Отображение миниатюр */
        .img_block img {
            display: inline-block;
            width: 350px;
            border: 2px solid red;
        }
        /* Выделение миниатюры при наведении */
        .img_block img:hover {
            display: inline-block;
            width:350px;
            border: 2px solid blue;
            cursor: pointer;
        }
        /* Скрытый контейнер с большим изображением */
        #img_big_block {
            position: absolute;
            display: none;
            left: 30%;
            margin-left: -350px;
            z-index: 999;
            top: 20px;
            border: 1px solid #D4DEE8;
        }
    </style>

</head>

<!-- Блок в котором мы будем отображать большую картинку -->
<div id="img_big_block"><img src="" width="100%"></div>

<?php

$files = scandir("pictures_big");

for($i=2;$i<count($files);$i++):?> <!--  Перебираем все файлы в папке "pictures_big"-->
    <div class="img_block"><img src="pictures_big/p<?=($i-1)?>.jpg"></div> <!-- Выводим картинки в виде блоков-->
<?php
endfor;
?>

<body>
</body>


</html>


