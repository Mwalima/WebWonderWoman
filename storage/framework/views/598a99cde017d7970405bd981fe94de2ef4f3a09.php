<!doctype html>
<html>
<head>
    <?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
<div class="index_title">
    <h1><img src="/images/w_small.png">eb</h1>
    <div class="index_underline">------------</div>
    <div class="textweb_underline"></div>
    <h1><img src="/images/w_medium.png">onder</h1>
    <div class="index_underline">------------</div>
    <div class="textwonder_underline"></div>
    <h1><img src="/images/w_large.png">oman</h1>
    <div class="index_underline" data-field-woman>------------</div>
    <div class="textwoman_underline"></div>
</div>


<!-- NAVIGATION MENU -->

<div class="navbar-nav navbar-inverse navbar-fixed-top">
    <?php echo $__env->make('partials.nav_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<div class="container">
</div>
<div id="footerwrap">
    <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
</body>


<script type="text/javascript">

        const indextekst = document.getElementsByClassName("index_underline");
        const web_text = document.getElementsByClassName("textweb_underline");
        const wonder_text = document.getElementsByClassName("textwonder_underline");
        const woman_text = document.getElementsByClassName("textwoman_underline");

        indextekst[0].addEventListener("click",function(){
            var webtext = "Ik maak applicaties en toepassingen voor vanalles en iedereen";
            web_text[0].innerHTML = webtext;
        });

        indextekst[1].addEventListener("click",function(){
            var webtext = "Zo als: infra voor de azure cloud toepassing, een .net website en een mailchimp api";
            wonder_text[0].innerHTML = webtext;
        });

        indextekst[2].addEventListener("click",function(){
            var webtext = "Leuk vindt ik het om dingen te maken en aan de 'praat' te krijgen";
            woman_text[0].innerHTML= webtext;
        });
</script>
</html>