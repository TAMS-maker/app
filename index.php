<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- v.5.1 Bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    
<?php


include ('connect.php');

if (isset($_POST['Register']))
{
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $Username = $_POST['Username'];
    $City = $_POST['City'];
    $Province = $_POST['Province'];
    $Zip = $_POST['Zip'];
   


    $sql = "INSERT INTO ui VALUES ('', '$Fname','$Lname','$Username','$City','$Province','$Zip')";

    mysqli_query($connect,$sql);

    session_start();

    $_SESSION['Fname'] = $Fname;
    $_SESSION['Lname'] = $Lname;
    $_SESSION['Username'] = $Username;
    $_SESSION['City'] = $City;
    $_SESSION['Province'] = $Province;
    $_SESSION['Zip'] = $Zip;
    


    header ('location: home.php');
    exit ();

}
?>

<body>

<form action="index.php" method="POST" class="row g-3 needs-validation" novalidate>
    <div class="col-md-4 position-relative">
             <label for="validationTooltip01"  class="form-label">First name</label>
             <input type="text" name="Fname" class="form-control" id="validationTooltip01"  required>
            <div class="valid-tooltip">Looks good!</div>
        
        </div>
 
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02"  class="form-label">Last name</label>
             <input type="text" name="Lname" class="form-control" id="validationTooltip02" required>
            <div class="valid-tooltip">Looks good!</div>
        
        </div>
  
        <div class="col-md-4 position-relative">
            <label for="validationTooltipUsername" class="form-label">Username</label>
            <div class="input-group has-validation">
            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
            <input type="text" class="form-control" name="Username" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
            <div class="invalid-tooltip">Please choose a unique and valid username.</div>
    
        </div>
    </div>


<div class="col-md-6 position-relative">
            <label for="validationTooltip03" class="form-label">City</label>
            <input type="text" name="City"  class="form-control" id="validationTooltip03" required>
            <div class="invalid-tooltip">Please provide a valid city.</div>
    
        </div>
  <div class="col-md-3 position-relative">
            <label for="validationTooltip04"  class="form-label">Province</label>
            <select class="form-select" name="Province" id="validationTooltip04" required>
            <option selected disabled value="">Choose...</option>
            <option>Camarines Norte</option>
            <option>Camarines Sur</option>
            </select>
            <div class="invalid-tooltip">Please select a valid state.</div>
  
        </div>
  
    <div class="col-md-3 position-relative">
            <label for="validationTooltip05"  class="form-label">Zip</label>
            <input type="text" name="Zip" class="form-control" id="validationTooltip05" required>
            <div class="invalid-tooltip">Please provide a valid zip.</div>
            
        </div>
  
<div class="col-12">
    <button class="btn btn-primary"  type="submit" name="Register">Submit form</button>
  </div>
</form>




















</body>


<!-- v.5.1 Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



</html>