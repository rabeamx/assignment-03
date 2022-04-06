<?php

include_once "./marriage_age_checker.php";
include_once "./currency.php";
include_once "./area.php";
include_once "./headline.php";
include_once "./function.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment-03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .file-content img {
            width: 100px;
            cursor: pointer;
        }

        .file-content input[type="file"] {
            display: none;
        }
    </style>
</head>
<body>

<?php

// Marriage Age Checker => 01

if(isset($_POST['check'])) {

    $name = $_POST['name'] ?? '';
    $birth_year = $_POST['b_year'] ?? '';
    $gender = $_POST['gender'] ?? '';

    if(empty($name) || empty($birth_year) || empty($gender)) {
        $smg= setAlert('All fields are required!', 'warning');
    }else {
        $smg= getMarriageAge($name, $birth_year, $gender);
    }
}

// Currency Converter Basic => 02

if(isset($_POST['submit'])) {

    $amount = $_POST['amount'] ?? '';
    $type = $_POST['currencytype'] ?? '';

    if(empty($amount) || empty($type)){
        $currencysmg = setAlert('All fields are required!', 'warning');
    } else{
        $currencysmg = getValue($amount, $type);
    }

}

// Currency Converter Advanced => 03

if(isset($_POST['checkAdv'])) {

    $amount = $_POST['amount'] ?? '';
    $type = $_POST['type'] ?? '';
    $convert = $_POST['convert'] ?? '';

    if(empty($amount) || empty($type) || empty($convert)) {
        $AdvCurrencySMS = setAlert('All fields are required!', 'warning');
    }else {
        $AdvCurrencySMS = currencyAdv($amount, $type, $convert);
    }
}

// Area Formulas => 04

if(isset($_POST['checking'])) {

    // in some cases $width will be working like $length

    $type = $_POST['type'] ?? '';
    $length = $_POST['length'] ?? '';
    $width = $_POST['width'] ?? '';

    if(empty($type) || empty($length) || empty($width)) {
        $areasmg = setAlert('All fields are required!', 'warning');
    }else {
        $areasmg = getArea($type, $length, $width);
    }
}

// Headline Function => 05

if(isset($_POST['sub'])) {

    $title = $_POST['title'] ?? '';
    $type = $_POST['type'] ?? '';
    $color = $_POST['color'] ?? '';
    $size = $_POST['size'] ?? '';
    $weight = $_POST['weight'] ?? '';
    $transform = $_POST['transform'] ?? '';
    $ff = $_POST['ff'] ?? '';

    if(empty($title) || empty($type) || empty($color) || empty($size) || empty($weight) || empty($transform) || empty($ff)){
        $headingsmg = setAlert('All fields are required!', 'warning');
    }else {
        $headingsmg = setHeading($title, $type, $color, $size, $weight, $transform, $ff);
    }
}

// Upload Photo => 06

if(isset($_POST['upload'])) {

    $file = $_FILES['photo'];

    $file_name = $file['name'];
    $file_tmp_name = $file['tmp_name'];

    move_uploaded_file($file_tmp_name, 'assets/image/' . $file_name);
}

?>

<!-- Marriage Age Checker -->

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-body">
                    <form action="" method="POST">
                        <h3>Marriage Age Checker</h3>
                        <?php echo $smg ?? '' ;?>
                        <hr>
                        <div class="my-3">
                            <label for="">Name</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                        <div class="my-3">
                            <label for="">Age</label>
                            <input name="b_year" type="number" class="form-control">
                        </div>
                        <div class="my-3">
                            <label for="">Gender</label>
                            <input type="radio" id="male" name="gender" > <label for="male">Male</label>
                            <input type="radio" id="female" name="gender"> <label for="female">Female</label>
                        </div>
                        <div class="my-3">
                            <input name="check" type="submit" class="btn btn-primary" value="Check now">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Currency Converter Basic -->

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-body">
                    <form action="" method="POST">
                        <h3>Currency Converter</h3>
                        <?php echo $currencysmg ?? '';?>
                        <hr>
                        <div class="my-3">
                            <label for="">Amount</label>
                            <input type="number" name="amount" class="form-control">
                        </div>
                        <div class="my-3">
                            <label for="">Type</label>
                            <select name="currencytype" id="" class="form-control">
                                <option value=""> Select </option>
                                <option value="dollar">Dollar</option>
                                <option value="pound">Pound</option>
                                <option value="cad">Canadian Dollar</option>
                                <option value="euro">Euro</option>
                                <option value="won">Won</option>
                            </select>
                        </div>
                        <div class="my-3">
                            <input type="submit" name="submit" class="btn btn-primary" value="Check now">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Currency Converter Advanced -->

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-body">
                    <h3>Currency Converter Adv</h3>
                    <?php echo $AdvCurrencySMS ?? '' ; ?>
                    <hr>
                    <form action="" method="POST">
                        <div class="my-3">
                            <label for="">Amount</label>
                            <input type="number" name="amount" id="" class="form-control">
                        </div>
                        <div class="my-3">
                            <label for="">Type</label>
                            <select name="type" id="" class="form-control">
                                <option value=""> Select </option>
                                <option value="dollar">Dollar</option>
                                <option value="pound">Pound</option>
                                <option value="cad">Canadian Dollar</option>
                                <option value="euro">Euro</option>
                                <option value="won">Won</option>
                                <option value="tk">BDT</option>
                            </select>
                        </div>
                        <div class="my-3">
                            <label for="">Convert</label>
                            <select name="convert" id="" class="form-control">
                                <option value=""> Select </option>
                                <option value="dollar">Dollar</option>
                                <option value="pound">Pound</option>
                                <option value="cad">Canadian Dollar</option>
                                <option value="euro">Euro</option>
                                <option value="won">Won</option>
                                <option value="tk">BDT</option>
                            </select>
                        </div>
                        <div class="my-3">
                            <input name="checkAdv" type="submit" value="Check now" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Area Formulas -->

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-body">
                    <h3>Get Area Formula</h3>
                    <?php echo $areasmg ?? '' ; ?>
                    <hr>
                    <form action="" method="POST">
                        <div class="my-3">
                            <label for="">Type</label>
                            <select name="type" id="" class="form-control">
                                <option value="">Select</option>
                                <option value="rectangular">Rectangular</option>
                                <option value="square">Square</option>
                                <option value="triangle">Triangle</option>
                                <option value="circle">Circle</option>
                            </select>
                        </div>
                        <div class="my-3">
                            <label for="">Length</label>
                            <input type="number" name="length" id="" class="form-control">
                        </div>
                        <div class="my-3">
                            <label for="">Width</label>
                            <input type="number" name="width" id="" class="form-control">
                        </div>
                        <div class="my-3">
                            <input name="checking" type="submit" class="btn btn-primary" value="Check now">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Headline Function -->

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-body">
                    <h3>Heading Function</h3>
                    <?php echo $headingsmg ?? '' ; ?>
                    <hr>
                    <form action="" method="POST">
                        <div class="my-3">
                            <label for="">Title</label>
                            <input type="text" name="title" id="" class="form-control">
                        </div>
                        <div class="my-3">
                            <label for="">Type</label>
                            <select name="type" id="" class="form-control">
                                <option value="">Select</option>
                                <option value="h1">H1</option>
                                <option value="h2">H2</option>
                                <option value="h3">H3</option>
                                <option value="h4">H4</option>
                                <option value="h5">H5</option>
                                <option value="h6">H6</option>
                            </select>
                        </div>
                        <div class="my-3">
                            <label for="">Color</label>
                            <select name="color" id="" class="form-control">
                                <option value="">Select</option>
                                <option value="#E6FB04">#E6FB04</option>
                                <option value="#FF3300">#FF3300</option>
                                <option value="#00FF00">#00FF00</option>
                                <option value="#00FFFF">#00FFFF</option>
                                <option value="#FF0099">#FF0099</option>
                                <option value="#6E0DD0">#6E0DD0</option>
                            </select>
                        </div>
                        <div class="my-3">
                            <label for="">Size</label>
                            <input type="number" name="size" id="" class="form-control">
                        </div>
                        <div class="my-3">
                            <label for="">Weight</label>
                            <select name="weight" id="" class="form-control">
                                <option value="">Select</option>
                                <option value="light">Light</option>
                                <option value="normal">Regular</option>
                                <option value="medium">Medium</option>
                                <option value="bold">Bold</option>
                                <option value="bolder">Bolder</option>
                            </select>
                        </div>
                        <div class="my-3">
                            <label for="">Transform</label>
                            <select name="transform" id="" class="form-control">
                                <option value="">Select</option>
                                <option value="uppercase">Uppercase</option>
                                <option value="lowercase">Lowercase</option>
                            </select>
                        </div>
                        <div class="my-3">
                            <label for="">Font Family</label>
                            <select name="ff" id="" class="form-control">
                                <option value="">Select</option>
                                <option value="montserrat">montserrat</option>
                                <option value="arial">arial</option>
                                <option value="roboto">roboto</option>
                                <option value="poppins">poppins</option>
                            </select>
                        </div>
                        <div class="my-3">
                            <input type="submit" name="sub" id="" class="btn btn-primary" value="Check now">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Image Upload System -->

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="my-3 file-content">
                            <input name="photo" type="file" name="" id="file-upload">
                            <label for="file-upload"><img src="https://iconarchive.com/download/i78147/igh0zt/ios7-style-metro-ui/MetroUI-Apps-Windows8-Photos.ico" alt=""></label>
                        </div>
                        <div class="my-3">
                            <input name="upload" type="submit" value="Upload Photo" class="btn btn-sm btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>