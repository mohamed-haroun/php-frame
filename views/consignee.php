<?php

use bootstrap\Application;

$conn = Application::dbConnect();
$query = "SELECT * FROM company where id <> 1";

$stmt = $conn->executeQuery($query);

$result = $stmt->fetchAllAssociative();
?>
<table id="example" class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Tele/Fax</th>
                <th>Registration No</th>
                <th>VAT</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($result as $company){
                echo "<tr>";
                echo "<td>" . $company['company_name'] . "</td>";
                echo "<td>" . $company['address'] . "</td>";
                echo "<td>" . $company['tele_fax'] . "</td>";
                echo "<td>" . $company['registration_number'] . "</td>";
                echo "<td>" . $company['vat_number'] . "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>