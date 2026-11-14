<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <!-- JavaScript  -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- head -->
    <nav class="navbar md:navbar-expand bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer"
                data-bs-target="#navbarDrawer" aria-controls="navbarDrawer" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" aria-hidden="true"></span>
            </button>
            <dialog class="drawer drawer-end" tabindex="-1" id="navbarDrawer" aria-labelledby="navbarDrawerLabel">
                <div class="drawer-header">
                    <h5 class="drawer-title" id="navbarDrawerLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
                </div>
                <div class="drawer-body mb-2 md:mb-0">
                    <ul class="nav navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/about')}}">About</a>
                        </li>
                    </ul>
                </div>
            </dialog>
        </div>
    </nav>
    <!-- end head -->
    <!-- body -->
    <div class="container">
        <center>
            <h1 class="theme-primary">Welcome Page</h1>
        </center>
        <div class="row">


            <div class="col-4">
                <section class="card">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <ul class="list-group">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                            <li class="list-group-item">A fourth item</li>
                            <li class="list-group-item">And a fifth one</li>
                        </ul>
                    </div>
                </section>
            </div>

            <div class="col-8">
                <section class="card">
                    <img src="https://motionbgs.com/i/c/960x540/media/5710/sasuke-comic.jpg" class="card-img-top" alt="sasuke">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card’s content.</p>
                        <a href="#" class="btn-solid theme-primary">Go somewhere</a>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- end body -->
    <!-- footer -->
    <footer class= "m-2 p-2 bg-primary">
        <center>
            <p>This is footer</p>
        </center>
    </footer>
    <!-- end footer -->

</body>

</html>
