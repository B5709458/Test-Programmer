<?php ?>
<html>
    <head>
        <title>Calculator</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-----------------jQuery-3.2.1------------------------>
        <script type="text/javascript" src="libs/jquery-3.2.1/jquery-3.2.1.min.js"></script>


        <!-------------------Bootstrap 4----------------------->
        <script type="text/javascript" src="libs/bootstrap-4/bootstrap.min.js"></script>
        <link rel="stylesheet" href="libs/bootstrap-4/bootstrap.min.css" />

        <!------------------SweetAlert 2----------------------->
        <script type="text/javascript" src="libs/sweetalert2/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="libs/sweetalert2/sweetalert2.min.css" />

        <!-------------------Other----------------------------->
        <link rel="stylesheet" href="css/cal_style.css" />
        <script type="text/javascript" src="controller/controller.calculator.js"></script>

    </head>
    <body>
        <div class="container container-t-b-mg">
            <form method="post" onsubmit="calculateNow(this);return false;">
                <div class="form-group">
                    <center><h2>Calculator</h2></center>
                </div>
                <div class="form-group">
                    <label>Enter your formula.</label>
                    <input type="text" class="form-control input_formula validate" placeholder="Enter your formula." />
                </div>
                <button type="submit" class="btn btn-primary">Calculate Now !</button>
                <br /><br />
                <div class="form-group">
                    <div class="output-display">
                        <h4>Output : </h4>
                        <div id="display_output"></div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
