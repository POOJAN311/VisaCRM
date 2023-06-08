<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Signup Form </title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
            crossorigin="anonymous">

        <link rel="stylesheet"
            href="<?php echo base_url() ?>/assets/css/style.css">
    </head>

    <body>

        <?php if (isset($validation)): ?>
        <div class="container">

            <div class="row">
                <div class="col-md-8 offset-md-2 mt-3">
                    <div class="alert alert-danger">
                        <?= $validation->listErrors() ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif ?>

        <?php if (isset($flash_message)): ?>
        <div class="container">

            <div class="row">
                <div class="col-md-8 offset-md-2 mt-3">
                    <div class="alert alert-success">
                       Congratulations! Registered Successfully. 
                    </div>
                </div>
            </div>
        </div>
        <?php endif ?>

        <div class='container'>
            <div class='row'>
                <div class='col-md-8 order-md-2 mt-2  m-auto'>
                    <h2 class='alert alert-primary mb-5 text-center'> Signup
                        Form
                    </h2>

                    <form action="/signup" method="post">
                        <div class="mb-3">
                            <label for="fname" class="form-label"> Name</label>
                            <input type="text" class="form-control" name='name'
                                id="fname" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email
                                address</label>
                            <input type="email" class="form-control"
                                id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email"
                               >
                            <div id="emailHelp" class="form-text">We'll never
                                share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control"
                                id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="cpassword" class="form-label">Confirm
                                Password</label>
                            <input type="password" class="form-control"
                                id="cpassword" name="cpassword">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="<?php echo base_url() ?>"> Login Here </a>
                    </form>
                </div>

            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    </body>

</html>