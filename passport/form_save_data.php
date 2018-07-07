<?php
session_start(); 

extract($_SESSION['post']);

$newfile = fopen("form-data.txt", "w");

$txt = "Personal Information Summary: $name\n\n";
fwrite($newfile, $txt);

$txt = "Name Of The Applicant: $name\n";
fwrite($newfile, $txt);

$txt = "Applying Country: $applyingCountry\n";
fwrite($newfile, $txt);

$txt = "Gender: $gender\n";
fwrite($newfile, $txt);

$txt = "Nationality: $applicantNationality\n";
fwrite($newfile, $txt);

$txt = "Name Of The Applicant: $name\n";
fwrite($newfile, $txt);

$txt = "Date Of Birth: $dob\n";
fwrite($newfile, $txt);

$txt = "Place Of Birth: $districtBirth, $countryOfBirth $dob\n";
fwrite($newfile, $txt);

$txt = "Father's Name: $fatherName\n";
fwrite($newfile, $txt);

$txt = "Mother's Name: $motherName\n";
fwrite($newfile, $txt);

$txt = "Spouse's Name: $spouseName\n";
fwrite($newfile, $txt);

$txt = "Birth ID No: $birthID\n";
fwrite($newfile, $txt);

$txt = "National ID No: $nationalID\n";
fwrite($newfile, $txt);

$txt = "\n\nPassport Information Summary\n\n";
fwrite($newfile, $txt);

$txt = "Applying In: $applyingCountry\n";
fwrite($newfile, $txt);

$txt = "Passport Type: $passportType\n";
fwrite($newfile, $txt);

$txt = "Application Type: New\n";
fwrite($newfile, $txt);

$txt = "\n\nContact Information Summary\n\n";
fwrite($newfile, $txt);

$txt = "Mobile No: $applicantMobile\n";
fwrite($newfile, $txt);

$txt = "Present Address: $prsentVillage, $prsentRoad, $prsentPoliceStation, $prsentPostOffice, $presentDisctrict\n";
fwrite($newfile, $txt);

$txt = "Permanent Address: $permanentVillage, $permanentRoad, $permanentPoliceStation, $permanentPostOffice, $permanentDisctrict\n";
fwrite($newfile, $txt);

$txt = "Email: $email\n";
fwrite($newfile, $txt);

$txt = "\n\nPayment Information Summary\n\n";
fwrite($newfile, $txt);

$txt = "Payment Amount: ($currencyType)$paymentAmount\n";
fwrite($newfile, $txt);

$txt = "Payment Date: $dateOfPayment\n";
fwrite($newfile, $txt);

$txt = "Receipt No: $receiptNo\n";
fwrite($newfile, $txt);

$txt = "Bank Name: $bankName\n";
fwrite($newfile, $txt);

$txt = "Bank Branch: $bankBranch\n";
fwrite($newfile, $txt);


fclose($newfile);

header("Location: form_4.php");
?>