<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

       /*
        // Formule pour se connecter php avec la base de donnés
        if(isset($_POST['con'])){
        $host = 'localhost';
        $user = 'root';
        $pasword = '';
        $db = 'std';
        $conn = mysqli_connect($host, $user, $pasword, $db);

         
        //* Test connection
            if($conn) {

                echo "Connecter";
            }
            else{
                die("Excusez moi non connecter");
            }
            }  
       
    

       
        // Ajouter des infomations a la table 
                $insert =  "INSERT INTO etudiants
            values
            (1, 'Youssef','casablanca')";// ajouter une ligne
            //cette ligne signifie que tu demande au SELECT de 
            //premierement  connecte toi a la base de donnée
            // deuxiement ajouter la ligne 

            $q_Select = mysqli_query($conn, $insert );
        
    
                 
            // affichage rapport des insertion des information
            if($q_Select){
                echo " Ajout nouveau etudiant ";
            }else{
                echo mysqli_error($conn);
            }
     
        // Actualisation des informations dans la base de donnée
       $update = " UPDATE etudiants SET nom = 'Malki' WHERE id = 1";
       $q_Update = mysqli_query($conn, $update);

           if($q_Update){
                echo " modification avec succes !! ";
            }else{
                echo mysqli_error($conn);
            }
      
         // Suppresion des informations dans la base de donnée
        $q_Delete = "DELETE from etudiants where id = 1";
        $q_Delete = mysqli_query( $conn, $q_Delete);

        if($q_Delete){
            echo " supression avec succes !! ";

        }else{
            echo mysqli_error($conn);
        }
        */
    
      
    ?>
    <?php

    if(isset($_POST['con'])){
    $host = 'localhost';
    $user = 'root';
    $pasword = '';
    $db = 'std';
    $conn = mysqli_connect($host, $user, $pasword, $db);

    //Afichage des informationes de la base de donnée

    $q_Select = mysqli_query($conn, "SELECT * FROM etudiants");//appel


    }   
    ?>
    
    <form action="" method="POST">
        <center>
            <table border="1">
                <tr>
                    <th>Id </th>
                    <th>Nom </th>
                    <th>Adresse </th>
                </tr>
                
               <?php
               while($row = mysqli_fetch_array($q_Select)) {
                    echo '<tr>';
                    echo '<td>'.$row['id'].'</td>';
                    echo '<td>'.$row['nom'].'</td>';
                    echo '<td>'.$row['adresse'].'</td>';
                    echo '</tr>';

               }
               ?>
            </table><br/>
            <input type="submit" value ='connect' name ='con'>
        </center>
    </form>
</body>
</html>