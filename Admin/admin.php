<?php
define('TITLE', 'Admin');
define('PAGE', 'admin');
include('includes/header.php');
include('../dbconnection.php');
?>
<div class="mx-5 mt-5 text-center">
    <p class="bg-dark text-white p-2">List of Admins</p>
    <?php
    $sql = "SELECT * FROM adminlogin_tb";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo '
                    <table class="table">
                    <thead>
                    <tr>
                    <th scope="col">Admin ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    </tr>
                    </thead>
                    <tbody>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["a_login_id"] . '</td>';
            echo '<td>' . $row["a_name"] . '</td>';
            echo '<td>' . $row["a_email"] . '</td>';
            echo '</tr>';
        }
        echo   '</tbody>
                    </table>
                         ';
    } else {
        echo '0 Result';
    }

    ?>
</div>

</head>
<?php include('includes/footer.php') ?>