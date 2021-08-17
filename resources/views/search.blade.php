<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="/assets/bootstrap.min.css"></link>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
    <style>
        .center {
          margin: 0;
          position: absolute;
          top: 50%;
          left: 50%;
          -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
        }
        * {
            -webkit-border-radius: 0 !important;
                -moz-border-radius: 0 !important;
                    border-radius: 0 !important;
        }
     </style>
    <div>
        <div class="center">
            <p class="text-center">Software Glossary</p> 
            <div class="row">
                <!-- <div class="col-12 col-md-12 col-lg-12"> -->
                    <form class="card card-sm">
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <i class="fas fa-search h4 text-body"></i>
                            </div>
                            <!--end of col-->
                            <div class="col">
                                <input class="form-control form-control-lg input-lg  form-control-borderless" type="search" size="50" placeholder="Search term">
                            </div>
                            <!--end of col-->
                            <div class="col-auto">
                                <button class="btn btn-lg btn-outline-secondary" type="submit">Search</button>
                            </div>
                            <!--end of col-->
                        </div>
                    </form>
                <!-- </div> -->
                <!--end of col-->
            </div>
        </div>
    </div>
</body>

</html>