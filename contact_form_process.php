<?php

// define variables and set to empty values
$fname_error = $lname_error = $email_error = $company_error = $job_error = $phone_error = $url_error = "";
$fname = $lname = $email = $company = $job = $phone = $message = $url = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"])) {
        $fname_error = "First Name is required";
    } else {
        $fname = test_input($_POST["fname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
            $fname_error = "Only letters and white space allowed";
        }
    }
if (empty($_POST["lname"])) {
        $lname_error = "Last Name is required";
    } else {
        $lname = test_input($_POST["lname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
            $lname_error = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $email_error = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format";
        }
    }

if (empty($_POST["company"])) {
        $company_error = "Company Name is required";
    } else {
        $company = test_input($_POST["company"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$company)) {
            $company_error = "Only letters and white space allowed";
        }
    }

if (empty($_POST["job"])) {
        $job_error = "Job is required";
    } else {
        $job= test_input($_POST["job"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$job)) {
            $job_error = "Only letters and white space allowed";
        }
    }


    if (empty($_POST["phone"])) {
        $phone_error = "Phone is required";
    } else {
        $phone = test_input($_POST["phone"]);
        // check if e-mail address is well-formed
        if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)) {
            $phone_error = "Invalid phone number";
        }
    }

    if (empty($_POST["url"])) {
        $url_error = "";
    } else {
        $url = test_input($_POST["url"]);
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
            $url_error = "Invalid URL";
        }
    }

    if (empty($_POST["message"])) {
        $message = "";
    } else {
        $message = test_input($_POST["message"]);
 if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$message)) {
            $message_error = "Require Day/Time";
        }
    }

    if ($fname_error == '' and $lname_error == '' and $email_error == '' and $company_error == '' and $job_error == '' and $phone_error == '' and $url_error == '' ){
        $message_body = '';
        unset($_POST['submit']);
        foreach ($_POST as $key => $value){
            $message_body .=  "$key: $value\n";
        }

        $to = 'papu.bhattacharya@synectiks.com';
        $subject = 'Contact Form Submit';
        $message = "
        First Name: $fname. <br>
        Last Name: $lname. <br>
        Email: $email. <br> 
        Company: $company. <br>
        Job Role: $job. <br>
        Phone: $phone. <br>
        Message:
        $message";
        $headers = "Content-type: text/html";
        if (mail($to, $subject, $message, $headers)){                  
              $success = "Message sent, thank you for contacting us!";
            $fname = $lname = $email = $company = $job = $phone = $message = $url = '';
        }
    }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
