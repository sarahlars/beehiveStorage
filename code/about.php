<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta lang="en" />
    <!--<meta name="viewport" content="width:device-width, initial-scale=1.0" /> -->
    <title>Beehive Storage</title>

    <!-- jQuery Modal -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!-- Stylesheets-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="myCSSSheet.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="styleSheet.css">
</head>

<body>

    <header>
        
        <div class="container-fluid page-header row col-8 fixed-top" style="padding-bottom: 10%;">

            <!-- <div class="container-fluid  col-lg" id="motto">
                <h1 class="h2 text-right ">
                    Beehive Storage
                    <div class="text-right">
                        <small class="muted row-3">Low Discounted Rates and Convienent Locations</small>
                    </div>
                </h1>
            </div> -->

        </div>
        <br />
        <br />
        <br />
        <br />

        <?php include "navbar.php"; ?>
        <!-- <nav class="navbar navbar-expand-lg navbar-light  " role="navigation">
            <a href="beehivestorage-utah.com/test" class="navbar-brand mr-auto pl-1 position-fixed"><img
                    src="../logo.png">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto flex-column vertical-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="locationsMain.php">Locations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="coupons.php">Coupons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="photos.php">Photo Gallery</a>
                    </li>
                </ul>

            </div>

        </nav> -->







        <!--End navigation-->
        <div class="container-fluid container rounded p-3 my-3 bg-warning text-white text-center col-sm-8"
            style="padding-top: 300px">

            <h1>About Beehive Storage</h1>

        </div>
    </header>

    <!-- image element-->

    <div class="container  container-fluid col-sm-8 center">
        <img class="container rounded container-fluid center" src="../assets/USE THESE /Storage City NSL/NSL13.jpg">
    </div>
    <!-- Container for About us-->
    <div class="container-fluid container rounded p-3 my-3 bg-primary text-white col-sm-8">
        <h2>Beehive Storage:</h2>
        <p>
            We think Utah is a great place to live and do business. We have been striving to provide quality storage
            solutions since 1987.
            Our storage facilities have friendly, professional resident managers - they live on site! We think this
            important.
            Thay take great pride in keeping thier facility clean well maintained - after all, it is their home!
            Find out more about the specific storage location you are interested in by clicking on the View Our Location
            button.
            We can help your storage needs for home, recreational, commercial, and mini-warehouse storage.
            We look forward to meeting you and serving your needs. Call today for availability and pricing!
        </p>
    </div>

    <div class="text-center"><button type="button" class="btn" id="locationBttn"><a href="locationsMain.html"
                class="btn bg-warning text-white btn-lg mt-3">View our
                Locations</a></button></div>











    <!--Footer-->
    <footer class="footer py-4 bg-primary fixed sticky" id="footer">
        <div class="  container-fluid">
            <span class="m-0 text-center text-white">Copyright &copy; Beehive Storage Utah 2020</span>
        </div>

    </footer>





</body>

<!-- <style>
    @media (min-width:992px) {
        .vertical-nav {
            position: fixed;
            top: 150px;

            left: 0;
            width: 150px;
            height: 100%;
            background-color: white;
            overflow-y: auto;
            padding-top: 30px;

        }
    }

    /*#page-container {
        position: relative;
        min-height: 100vh;
    }*/

    #content-wrap {
        padding-bottom: 2.5rem;
        /* Footer height */
    }

    #footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        height: 2.5rem;
        text-align: center;
        /* Footer height */
    }

    .navbar-brand {
        top: 2%;
        position: fixed;
        height: 150px;
    }

    .navbar-toggler {
        top: 10%;
        position: sticky;
        left: 800px;


    }

    /*#motto {
        position: sticky;
        height: 150px;



    }*/

    #locationBttn {
        padding-bottom: 10%;
    }

    .body {
        padding: 10%;
    }
</style> -->

</html>