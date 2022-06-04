<?php
// Include config file
echo "good";
require_once "config.php";

// Define variables and initialize with empty values
$lastnameAR = $firstnameAR = $naissanceAR = $adresseAR= "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
$lastnameAR = trim($_POST["lastnameAR"]);

$firstnameAR = trim($_POST["firstnameAR"]);

$naissanceAR = trim($_POST["naissanceAR"]);

$adresseAR = trim($_POST["adresseAR"]);


$idCandidat = '';
$sex = 'm';
$idExam ='';
$result = 'en attent';
$theorique = 'theorique';
$pratique = 'pratique';
$firstName = trim($_POST["firstName"]);
$lastName = trim($_POST["lastName"]);
$email = trim($_POST["email"]);
$dateOfBirth = trim($_POST["dateOfBirth"]);
$adress = trim($_POST["adress"]);
$cin = trim($_POST["cin"]);
$phoneNumber = trim($_POST["phoneNumber"]);
$dateEntree = trim($_POST["dateEntree"]);
$categoriePermis = trim($_POST["categoriePermis"]);
$nSiteministere = trim($_POST["nSiteministere"]);
$nContrat = trim($_POST["nContrat"]);
$dateContrat = trim($_POST["dateContrat"]);
$nDeclaration = trim($_POST["nDeclaration"]);
$dateDeclaration = trim($_POST["dateDeclaration"]);
$dateExamen1 = trim($_POST["dateExamen1"]);
$dateExamen2 = trim($_POST["dateExamen2"]);
$langue = trim($_POST["langue"]);
$apteInapte = trim($_POST["apteInapte"]);
$lieuOfBirth = trim($_POST["lieuOfBirth"]);
// Check input errors before inserting in database



$sql2 = "INSERT INTO `exam`(`idExam`, `date`, `result`, `type`) VALUES (?,?,?,?)";
$stmt2 = $mysqli->prepare($sql2);
// Bind variables to the prepared statement as parameters
$stmt2->bind_param("ssss", $param_idExam, $param_dateExamen1, $param_result, $param_theorique);
$param_idExam = $idExam;
$param_dateExamen1 =$dateExamen1 ;
$param_dateExamen2 =$dateExamen2 ;
$param_result = $result;
$param_theorique =$theorique;
$param_pratique =$pratique ;
$stmt2->execute();
$stmt2->bind_param("ssss", $param_idExam, $param_dateExamen2, $param_result, $param_pratique);
$param_idExam = $idExam;
$param_dateExamen1 =$dateExamen1 ;
$param_dateExamen2 =$dateExamen2 ;
$param_result = $result;
$param_theorique =$theorique;
$param_pratique =$pratique ;
$stmt2->execute();

// Prepare an insert statement
$sql1 = "INSERT INTO `candidat`(`idCandidat`, `cin`, `firstName`, `lastName`, `dateOfBirth`, `email`, `phoneNumber`, `sex`, `adress`, `idExam`, `lastnameAR`, `firstnameAR`, `naissanceAR`, `adresseAR`, `dateEntree`, `categoriePermis`, `nSiteministere`, `nContrat`, `dateContrat`, `nDeclaration`, `dateDeclaration`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt1 = $mysqli->prepare($sql1);
// Bind variables to the prepared statement as parameters
$stmt1->bind_param('issssssssisssssssssss', $param_idCandidat, $param_cin,  $param_firstName, $param_lastName, $param_dateOfBirth, $param_email, $param_phoneNumber, $param_sex, $param_adress, $param_idExam, $param_lastnameAR, $param_firstnameAR, $param_naissanceAR, $param_adresseAR, $param_dateEntree, $param_categoriePermis, $param_nSiteministere, $param_nContrat, $param_dateContrat, $param_nDeclaration, $param_dateDeclaration);
$param_lastnameAR = $lastnameAR;
$param_firstnameAR = $firstnameAR;
$param_naissanceAR = $naissanceAR;
$param_adresseAR = $adresseAR;
$param_idCandidat = $idCandidat;
$param_firstName =$firstName ;
$param_lastName=$lastName ;
$param_email =$email ;
$param_dateOfBirth =$dateOfBirth ;
$param_adress =$adress ;
$param_cin =$cin ;
$param_phoneNumber =$phoneNumber ;
$param_sex = $sex;
$param_dateEntree =$dateEntree ;
$param_categoriePermis =$categoriePermis ;
$param_nSiteministere =$nSiteministere ;
$param_nContrat =$nContrat ;
$param_dateContrat =$dateContrat ;
$param_nDeclaration =$nDeclaration ;
$param_dateDeclaration =$dateDeclaration ;
$param_langue =$langue ;
$param_apteInapte =$apteInapte ;
$param_lieuOfBirth =$lieuOfBirth ;
$param_idExam = $idExam = 12;
$stmt1->execute();

header("location: candidat.html");
exit();
// Set parameters



// Close statement
$stmt1->close();
$stmt2->close();

// Close connection
$mysqli->close();
}
?>