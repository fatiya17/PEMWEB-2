<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->



    <title>Hello, world!</title>
    <link href="./css/style.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');

        body {
            font-family: 'Poppins', sans-serif !important;

        }

        .row {
            justify-content: center;
        }

        .col-md-6 {
            height: 500px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            position: relative;
            padding: 22px;
            border-radius: 20px;
        }

        .first_col {
            /* background-color: ; */
            width: 500px;
         
        }

        .sec_col {
            width: 500px;
        }

        h3 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;
            font-weight: 500;
            font-size: 2rem;
            padding: 20px;
            color: #423844 !important;
        }

        .mb-3 label .form-label {
            text-align: left !important;
        }

        .img-fluid {
            border-radius: 20px;
            height: 300px !important;
        }

        .form-control {
            height: 35px;
            background: #fff;
            font-size: 14px;
            border-radius: 20px;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 2px solid #725e5e !important;
        }

        .form-control[type=text]:focus {
            border: 2px solid #555 !important;
        }

        button {
            align-content: center;
        }

        .btn-primary {
            font-size: 17px;
            background-color: #52529b !important;
            width: 100%;
            height: 50px;
            border: none;
            border-radius: 20px;
        }

        .btn-primary:hover {
            background-color: rgb(39, 70, 110) !important;
            border: none;
        }

        @media only screen and (max-width: 600px) {
            .first_col {
                position: initial;
                left: 0 !important;
            }

            .sec_col {
                order: 1 !important;
            }

            .row-last {
                left: 0 !important;
                width: 100% !important;
                height: 500px !important;
                top: 0 !important;
            }

        }
    </style>

</head>

<body>
    <div class="bg-background" id="contact"></div>
    <div class="container py-5">
        <div class="row py-5 g-3">
            <div class="col-md-6 first_col">
                <h3>Location</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.75521099095!2d110.22507967415048!3d-7.492257273889958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8f49a68130d5%3A0x680d2e96d599151!2sPuskesmas%20Magelang%20Selatan!5e0!3m2!1sid!2sid!4v1714746259884!5m2!1sid!2sid" width="450" height="" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="img-fluid"></iframe>
            </div>
            <div class="col-md-6 sec_col ">
                <h2 class="text-center mt-3">Contact Us</h2>
                <form class="p-4 mt-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Enter your Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email ID</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Enter your massage</label>
                        <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <br>
                    <div class="mb-3 text-center">
                        <button class="btn btn-primary">Send Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>