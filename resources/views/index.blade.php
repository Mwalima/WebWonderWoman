<!doctype html>
<html>
<head>
    @include('partials.header')
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
    @include('partials.nav_menu')
</div>
<div class="container">
</div>
<div id="footerwrap">
    @include('partials.footer')
</div>
</body>

@debug{{$teksten[1]}}
<script type="text/javascript">

        const indextekst = document.getElementsByClassName("index_underline");
        const web_text = document.getElementsByClassName("textweb_underline");
        const wonder_text = document.getElementsByClassName("textwonder_underline");
        const woman_text = document.getElementsByClassName("textwoman_underline");

        indextekst[0].addEventListener("click",function(){
            var webtext = "<?php echo $teksten[0]['message']; ?>";
            web_text[0].innerHTML = webtext;
        });

        indextekst[1].addEventListener("click",function(){
            var webtext = "<?php echo $teksten[0]['message']; ?>";
            wonder_text[0].innerHTML = webtext;
        });

        indextekst[2].addEventListener("click",function(){
            var webtext = "<?php echo $teksten[0]['message']; ?>";
            woman_text[0].innerHTML= webtext;
        });
</script>
</html>