<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--
    <script src="./src/semantic/dist/semantic.min.js"></script>
    <link rel="stylesheet" href="./src/semantic/dist/semantic.min.css">
-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="./src/ajax/jquery.min.js"></script>

   <!-- <link rel="import" href="/src/nevbar.html"> -->
    
    <title>ร้านขายลิป</title>

    <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            
            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            
            tr:nth-child(even) {
                background-color: #dddddd;
            }
            </style>
</head>

<body>
<div class="ui container">
    <!-- Header -->
    <div name='Header'>
        <?php include './src/header.php'; ?>
    </div>

    <!-- Nav bar -->
    <div name='Navbar'>
        <?php include './src/navbar.php'; ?>
    </div>
    

    <!-- body -->
    <div name='body'>
        <?php include './src/body.php' ?>
    </div>
    
    <!-- footer -->
    <div name='footer'>
        <?php include './src/footer.php' ?>
    </div>
</div> 
</body>
</html>