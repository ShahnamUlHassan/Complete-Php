        <?php
        $users=[
            [1,"Shahnam","shahnam@gmail.com"],
            [2,"Hassan","hassan@gmail.com"],
            [3,"Moon","moon@gmail.com"],
        ];
        echo "<table border=1>";
        for($i=0;$i<count($users);$i++){
            echo "<tr>";
            for($j=0;$j<count($users[$i]);$j++){
                echo "<td>";
                echo $users[$i][$j];
                echo "</td>";
            }
            echo "<tr>";
        }
        echo "<table>";
        ?>