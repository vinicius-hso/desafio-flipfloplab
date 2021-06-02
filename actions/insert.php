<?php

$email = $_POST['email'];

$user = "root"; 
$password = ""; 
$host = "localhost"; 
$dbase = "db_desafio"; 
$table = "email"; 

$connection = new MySQLi($host, $user, $password, $dbase);
if (!$connection) {
    die ('Não foi possível conectar!' . mysqli_error());
}

$sql = "SELECT * FROM email WHERE user_email = '$email'";

$resultado = mysqli_query($connection, $sql) or die("Erro ao retornar dados");

if(mysqli_num_rows($resultado) > 0) {//se retornar algum resultado
        echo '⚠️ Email já cadastrado! Tente outro endereço de email. ⚠️';
    } else {
        // echo 'Não existe ainda!';
        $sql = "INSERT INTO email(user_email) VALUES ('$email')";
        if (mysqli_query($connection, $sql)){
            echo "✅ Email cadastrado com sucesso! ✅\n";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($connection);
            die ("❌ Erro ao tentar efetuar o cadastro! ❌ ");
        } 
        mysqli_close($connection);
}
    












// if( $query->num_rows > '0') {//se retornar algum resultado
//     echo 'Já existe!';
//   } else {
//     echo 'Não existe ainda!';
//     $sql = "INSERT INTO email(user_email) VALUES ('$email')";
//     if (mysqli_query($connection, $sql)){
//         echo "Email cadastrado com sucesso!";
//     } else {
//         echo "Deu erro: " . $sql . "<br>" . mysqli_error($connection);
//         die ("Erro ao tentar efetuar o cadastro!");
//     } 
//     mysqli_close($connection);
// }











// *** CREATE on DataBase

// $sql = "INSERT INTO email(user_email) VALUES ('$email')";
// if (mysqli_query($connection, $sql)){
//     echo "Email cadastrado com sucesso!";
// } else {
//     echo "Deu erro: " . $sql . "<br>" . mysqli_error($connection);
//     die ("Erro ao tentar efetuar o cadastro!");
// } 
// mysqli_close($connection);

// ********************************











// if ((!empty($email))) {
//     mysqli_query($connection, "INSERT INTO email (user_email) VALUES ('$email')");
// }

//code to display the MySQL Table
// $result = mysql_query( "SELECT user_email FROM $table ORDER BY ID" ) 
// or die("SELECT Error: ".mysql_error()); 

// print "<table border=1>\n"; 
// while ($row = mysql_fetch_array($result)){ 
// $name_field= $row['name'];
// $city_field= $row['city'];
// $country_field= $row['country'];
// print "<tr>\n"; 
// print "\t<td>\n"; 
// echo "$name_field";
// print "</td>\n";
// print "\t<td>\n"; 
// echo "$city_field";
// print "</td>\n";
// print "\t<td>\n"; 
// echo "$country_field";
// print "</td>\n";
// print "</tr>\n"; 
// } 
// print "</table>\n"; 

?> 