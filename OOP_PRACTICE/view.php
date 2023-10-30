<script src="https://cdn.tailwindcss.com"></script>


<?php
include('config/app.php');
include_once('controller/EmployeeController.php');
?>

<div class=" h-screen flex items-center justify-center">

    <div class=" w-3/4 flex flex-col  justify-center items-center">

        <h1>Employees</h1>

        <table class="w-full">
            <thead>
                <tr>
                    <td>Employee no.</td>
                    <td>First name</td>
                    <td>Last name</td>
                    <td>Middle name</td>
                    <td>Position</td>
                    <td>Department</td>
                    <td colspan="2">Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $student_controller = new EmployeeController;
                $result = $student_controller->view();
                if ($result) {
                    foreach ($result as $row) {

                ?>
                        <tr>
                            <td><?= $row['empNo']?></td>
                            <td><?= $row['empFName']?></td>
                            <td><?= $row['empLName']?></td>
                            <td><?= $row['empMName']?></td>
                            <td><?= $row['empPosition']?></td>
                            <td><?= $row['empDept']?></td>
                            <td>
                                <a href="update.php?id=<?=$row['empNo'] ?>">Update</a>
                                <a href="">Delete</a>
                            </td>
                        </tr>
                <?php

                    }
                }

                ?>
            </tbody>
        </table>
    </div>
</div>