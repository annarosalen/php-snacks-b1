<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php

        require_once 'data.php';



    ?>
</head>
<body>
    
        <?php
            
            foreach ($hotels as $item){
                echo '<ul>';

                    echo '<li>';
                    echo 'NOME:';
                    echo $item['name'];
                    echo '</li>';

                    echo '<li>';
                    echo 'DESCRIZIONE:';
                    echo $item['description'];
                    echo '</li>';

                    echo '<li>';
                    echo 'PARCHEGGIO:';
                    echo $item['parking'];
                    echo '</li>';

                    echo '<li>';
                    echo 'VOTO:';
                    echo $item['vote'];
                    echo '</li>';

                    echo '<li>';
                    echo 'DISTANZA:';
                    echo $item['distance_to_center'];
                    echo '</li>';
           
                echo '</ul>';    
            }
            
        ?>
    

</body>
</html>