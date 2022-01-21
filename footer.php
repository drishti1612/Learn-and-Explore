<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Footer-->
    <footer class="bg-light text-center text-lg-start">
            <!-- Grid-->
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">About us</h5>
                        <p style="margin-left:110px;">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                            aliquam voluptatem veniam, est atque cumque eum delectus sint!
                        </p>
                    </div>
                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0" >
                        <h5 class="text-uppercase">Contact us</h5>
                        <div class="div4">
                            <ul class="sci">


                                <p><img src="data:image/png;base64,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" alt="mail id" width="30px" />
                                    <font-size="8" color="white"><a href="mailto:drishtisnghal1999@gmail.com"
                                            target="_blank"><u>abc@gmail.com</u></a></font-size>
                                </p>

                                <p><a class="btn btn-link btn-floating btn-lg text-dar m-1" role="button"
                                        href="https://www.facebook.com/" target="_blank" width="30px"><img src="https://www.pngkit.com/png/detail/196-1967191_facebook-logo-png-image-facebook-logo-vector-png.png"
                                            alt="facebook" width="30px"></a>
                                    <a class="btn btn-link btn-floating btn-lg text-dar m-1" role="button"
                                        href="https://twitter.com/" target="_blank"><img src="data:image/png;base64,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"
                                            alt="twitter" width="30px"></a>
                                    <a class="btn btn-link btn-floating btn-lg text-dar m-1" role="button"
                                        href="https://in.pinterest.com/" target="_blank"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTF3v3sJQbDIrAxvpK9l4-xMG8B8nHdG2bKpw&usqp=CAU"
                                            alt="pinterest" width="30px"></a>
                                    <a class="btn btn-link btn-floating btn-lg text-dar m-1" role="button"
                                        href="https://www.linkedin.com/home" target="_blank"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFGjFgc9jKccv-j-BCNrMwDqClp1Aqm3PFiw&usqp=CAU"
                                            alt="linkedin" width="30px"></a>
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
</footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script src="new_js.js">
        < /div>

        <
        /body>

        <
        /html>