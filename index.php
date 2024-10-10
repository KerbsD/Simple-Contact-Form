<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Contact Form</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="container">
        <div class="card">
            <form action="index.php" method="post">
                <div class="name">
                    <div class="form-group">
                        <label for="firstname">First Name:</label><br>
                        <input type="text" name="firstname"><br>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name:</label><br>
                        <input type="text" name="lastname"><br>
                    </div>
                </div>
                <div class="personal">
                    <div class="form-group">
                        <label for="age">Age:</label><br>
                        <input class="age" type="text" name="age" pattern="[0-9]+" maxlength="2">
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact:</label><br>
                        <input for="contact" type="text" name="contact" pattern="[0-9]+" maxlength="11">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label><br>
                    <textarea name="address" id="add-area"></textarea><br>
                    <input type="submit" class="submit" value="Submit">
                    <button></button>
                </div>
            </form>
        </div>
    </div>

    <?php
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $age = $_POST["age"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];


    $contactDetails = array(
        "firstName" => "Firstname",
        "lastName" => "Lastname",
        "age" => "Age",
        "contact" => "Contact",
        "address" => "Address"
    );


    if (
        $firstName == "" || $lastName == "" || $age == "" ||
        $contact == "" || $address == ""
    ) {
        echo '
                <div class="warning">
                <p>Please, Input necessary details.</p>
               </div>
        ';
    } else {
        $contactDetails["firstName"] = $firstName;
        $contactDetails["lastName"] = $lastName;
        $contactDetails["age"] = $age;
        $contactDetails["contact"] = $contact;
        $contactDetails["address"] = $address;

        echo "   <div class='cont-contact'>
                    <label>Firstname: </label>
                    <input type='text' disabled value='{$contactDetails["firstName"]}'>
                    <label>Lastname: : </label>
                    <input type='text' disabled value='{$contactDetails["lastName"]}'>
                    <label>Age: </label>
                    <input type='text' disabled value='{$contactDetails["age"]} years old'>
                    <label>Contact: </label>
                    <input type='text' disabled value='{$contactDetails["contact"]}'>
                    <label>Address: </label>
                    <input type='text' disabled value='{$contactDetails["address"]}'>
                 </div>";
    }
    ?>
</body>

</html>