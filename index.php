


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Door Step DELIVERY</title>
</head>
<body>
<br>
    <h1 class="text-center">DOOR STEP DELIVERY</h1>
    <br>
    <select class="form-select" aria-label="Default select example">
        <option selected>From where you need items</option>
        <option value="1">SEETHARAMAPURAM</option>
        <option value="2">UDAYAGIRI</option>
    </select>
    <br>
    <form method="get" action="groceries.php">
    <button type="Submit" name="submit" class="btn btn-primary" type="button">GROCERIES</button>
    </form>
    <br>
    <br>
    <form>
    <button type="Submit" name="submit" class="btn btn-primary" type="button">Medicine</button> 
    <button type="Submit" name="submit" class="btn btn-primary" type="button">LPG_GAS</button>
    <button type="Submit" name="submit" class="btn btn-primary" type="button">Foot_Wear</button>
    </form>
    
    <br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'?>
</body>
</html>