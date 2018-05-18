<!doctype html>
<html>
<head>
    @include('partials.header')
</head>
<body>
<div class="index_title">
    <h1><img src="/images/w_medium.png">hat we do</h1>

<div class="setting_up">
    <h2>Setting up laravel on a synology server</h2>
    <p>first activate webstation on synology</p>
    <a href="https://www.synology.com/nl-nl/knowledgebase/DSM/tutorial/Application/How_to_host_a_website_on_Synology_NAS">How to setup webstation --></a>
    <p>after that you have to register a domein name. And redirect it to the ip of the network of you re synology</p>
    <a href="https://medium.com/unhandled-code/installing-composer-on-synology-6-1-4-eebd1a1c4891">install</a>
    <p>then install laravel via commandline</p>
    <a href="https://laravel.com/docs/5.6/installation">install laravel on Synology</a>
    <p>create a index.php file and redirect it to the right file</p>
</div>
</div>
<div class="navbar-nav navbar-inverse navbar-fixed-top">
    @include('partials.nav_menu')
</div>
<div class="container">
</div>

</body>
<div id="footerwrap">
    @include('partials.footer')
</div>
</html>