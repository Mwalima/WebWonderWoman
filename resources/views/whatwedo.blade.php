<!doctype html>
<html>
<head>
    @include('partials.header')
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<div class="index_title">
    <h1><img src="/images/w_medium.png">ho to Contact</h1>
</div>
<div class="navbar-nav navbar-inverse navbar-fixed-top">
    @include('partials.nav_menu')
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card bg-dark text-white" style="width: 18rem;">
                <img class="card-img-top" src="images/findtheloo2.png" alt="Card image cap">
                <div class="card-block">
                    <h5 class="card-title">Find the loo app</h5>
                    <p class="card-text">Een app die ervoor zorgt dat je nooit meer zonder zit.</p>
                </div>
                <a href="https://play.google.com/store/apps/details?id=com.apps.created.findtheloo" class="card-link">find the loo app</a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card bg-dark text-white" style="width: 18rem;">
                <img class="card-img-top" src="images/face2_80X80.png" alt="Card image cap">
                <div class="card-block">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <a href="/connectapp" class="card-link">Card link</a>
            </div>
        </div>
    </div>
</div>
</body>
<div id="footerwrap">
    @include('partials.footer')
</div>
</html>

