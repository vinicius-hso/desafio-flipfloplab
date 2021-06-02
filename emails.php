<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>


    <style>
    body {
        background: #313D5A;
        /* background: #003049; */
        color: white;
    }

    h2 {
        color: #08090A;
    }
</style>
</head>

<body>

    <?php
        $mysqli = new mysqli('localhost', 'root', '', 'db_desafio') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM email") or die($mysqli->error);
    ?>

    <div class="container">

        <div class="jumbotron">
            <h1 class="display-4">Olá, Admin!</h1>
            <p class="lead">Confira abaixo todos os emails cadastrados.</p>
            <hr class="my-4">
            <p>Utilize o botão para atualizar a exibição dos dados.</p>
            <a class="btn btn-success btn-lg" href="#" role="button" onClick="window.location.reload();">Atualizar</a>
            
        </div>

        <br>

        <div class="card">
            
            <div class="card-body">
                <h2>Emails cadastrados</h2>
                <hr>
                <div class="row justify-content-center">                   
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>

                <?php
                    while ($row = $result->fetch_assoc()):?>
                            <tr>
                                <td scope="row"> <?php echo $row['ID']; ?> </td>
                                <td> <?php echo $row['user_email']; ?> </td>
                            </tr>
                    <?php endwhile; ?>
                    </table>  
                </div>

                <?php
                    function pre_r($array){
                        echo '<pre>';
                        print_r($array);
                        echo '</pre>';
                    }
                ?> 
            </div>
        </div>
    </div>

       
</body>
</html>