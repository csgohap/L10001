<?php/* =================================================////
////																										 ////
////                     Шаблон L-пакета				         ////
////																										 ////
////=====================================================////
//// 			        		 		   ////
//// 			  Оглавление			 ////
//// 			         				   ////
////=========================////


    А. Содержимое HEAD html-разметки шаблона
    ----------------------------------------
      А1. Подключение тэга title с названием документа
      А2. Подключение локального CSS документа

    Б. Содержимое BODY html-разметки шаблона
    ----------------------------------------
      Б1. ...

    В. Подключение ресурсов шаблона
    -------------------------------
      В1. Принять данные для шаблона с сервера
      В2. Подключение JS-скрипта наследника шаблона


////==================================================== */?>

<!doctype html>
<html lang="ru">


<?php /*----------------------------------------->
<!-- А. Содержимое HEAD html-разметки шаблона  -->
<!-------------------------------------------*/ ?>
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="{!! asset('public/L10001/assets/Fav.png') !!}" />

  <?php /*-- А1. Подключение тэга title с названием документа -->
  <!--------------------------------------------------------*/ ?>
  @yield('title')

  <?php /*-- А2. Подключение локального CSS документа -->
  <!------------------------------------------------*/ ?>
  @yield('css')
  <!-- Изменение keyframes для одной из анимаций loaders.css -->
  <style>

    .ball-scale-ripple-multiple>div {
      border-width: 6px;
    }

    @-webkit-keyframes ball-scale-ripple-multiple {

      0% {
        opacity: 1;
        -webkit-transform: scale(0.1);
                transform: scale(0.1);
      }

      90% {
        opacity: 0;
        -webkit-transform: scale(.9);
                transform: scale(1);
      }

      100% {
        opacity: 0;
        -webkit-transform: scale(1);
                transform: scale(1);
      }

    }

    @keyframes ball-scale-ripple-multiple {

      0% {
        opacity: 1;
        -webkit-transform: scale(0.1);
                transform: scale(0.1);
      }

      90% {
        opacity: 0;
        -webkit-transform: scale(.9);
                transform: scale(1);
      }

      100% {
        opacity: 0;
        -webkit-transform: scale(1);
                transform: scale(1);
      }

    }

  </style>

  <!-- Стили 2-го варианта загрузочного экрана-->
  <style>
    @-webkit-keyframes animIn {
        0% {
            -webkit-transform: translateX(-100px);
            transform: translateX(-100px);
            opacity: 0;
        }
        50% {
            opacity: 1;
        }
        100% {
            -webkit-transform: translateX(100px);
            transform: translateX(100px);
            opacity: 0;
        }
    }
    @keyframes animIn {
        0% {
            -webkit-transform: translateX(-100px);
            transform: translateX(-100px);
            opacity: 0;
        }
        50% {
            opacity: 1;
        }
        100% {
            -webkit-transform: translateX(100px);
            transform: translateX(100px);
            opacity: 0;
        }
    }
  </style>

  <!-- Стили анимации загрузочной лошадки -->
  <style>
          /*-webkit-transform: rotate3d(0deg, 0deg, 120deg);*/
              /*-ms-transform: rotate3d(0deg, 0deg, 120deg);*/
                  /*transform: rotate3d(0deg, 0deg, 120deg);    */
    @-webkit-keyframes loadhorse {
        0% {
          -webkit-transform: rotateX(140deg);
          transform: rotateZ(140deg);
        }
        50% {
          -webkit-transform: rotateX(110deg);
          transform: rotateZ(110deg);
        }
        100% {
          -webkit-transform: rotateX(140deg);
          transform: rotateZ(140deg);
        }
    }
    @keyframes loadhorse {
        0% {
          -webkit-transform: rotateX(140deg);
          transform: rotateZ(140deg);
        }
        50% {
          -webkit-transform: rotateX(110deg);
          transform: rotateZ(110deg);
        }
        100% {
          -webkit-transform: rotateX(140deg);
          transform: rotateZ(140deg);
        }
    }

  </style>


</head>

<?php /*----------------------------------------->
<!-- Б. Содержимое BODY html-разметки шаблона  -->
<!-------------------------------------------*/ ?>
<body>

  <?php /*------------------------>
  <!-- Экран загрузки документа -->
  <!--------------------------*/ ?>
<!--  <div class="start-loading-screen" style="z-index: 99999999;">-->
<!--    <div class="loader">-->
<!--      <div class="loader-inner ball-scale-ripple-multiple" style="position: absolute; top: 50%; left: 50%; transform: translateY(-100px) translateX(-100px); width: 200px; height: 200px;">-->
<!--        <div style="width: 200px; height: 200px; border-color: #f39c26; left: 0; top: 0;"></div>-->
<!--        <div style="width: 200px; height: 200px; left: 0; top: 0;"></div>-->
<!--        <div style="width: 200px; height: 200px; border-color: #f39c26; left: 0; top: 0;"></div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
  <div class="start-loading-screen" style="z-index: 99999999;">
    <div class='loading2'>
      <div class='bullet'></div>
      <div class='bullet'></div>
      <div class='bullet'></div>
      <div class='bullet'></div>
    </div>
<!--    <img src="{!! asset('public/D10007/assets/Logo_load.gif') !!}">-->
  </div>

  <?php /*--------------->
  <!-- Содержимое BODY -->
  <!-----------------*/ ?>
  <div id="content" class="content">
    @yield('content')
  </div>

</body>
</html>


<?php /*-------------------------------->
<!-- В. Подключение ресурсов шаблона  -->
<!----------------------------------*/ ?>

  <?php /*----------------------------------------->
  <!-- В1. Принять данные для шаблона с сервера  -->
  <!-------------------------------------------*/ ?>
  <script>

    // 1. Подготовить объект для JS-кода шаблона
    window["layout_PARAMpackfullnamePARAM"] = {};

    // 2. Принять данные для шаблона

      window["layout_PARAMpackfullnamePARAM"].csrf_token  = "{{ csrf_token() }}";

  </script>

  <?php /*---------------------------------------------->
  <!-- В2. Подключение JS-скрипта наследника шаблона  -->
  <!------------------------------------------------*/ ?>

    <?php /* JS наследника шаблона */ ?>
    @yield('js')








