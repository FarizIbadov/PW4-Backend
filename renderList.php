<?php
    function renderList(){
        include "./db.setup.php";

        $query = "SELECT * FROM Customers;";
        $result = mysqli_query($link,$query); 
        $nbRows = mysqli_num_rows($result);

        if($nbRows == 0){
            return;
        }

        $table_begining = "
            <table class='table'>
                <thead>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Zip code</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>Register Date</th>
                </thead>
                <tbody>
        ";

       
        $table_end  = "
            </tbody>
            </table>
        ";

        echo $table_begining;
        while ($var=mysqli_fetch_assoc($result)){
            renderItem($var);
        }

        echo $table_end;
    }

    function renderItem($var){
        extract($var);
        $valid_title = "";

        if ($title == 1){
            $valid_title = "Mr";
        }else {
            $valid_title = "Mrs";
        }

        $newTS = strtotime($register_date);
        $curDate = date('Y-m-d', $newTS);

        $row = "
            <tr>
                <th>$id</th>
                <td>$valid_title</td>
                <td>$fullname</td>
                <td>$email</td>
                <td>$phone</td>
                <td>$zipcode</td>
                <td>$city</td>
                <td>$address</td>
                <td>$curDate</td>
            </tr>
        ";

        echo $row;
    }
?>