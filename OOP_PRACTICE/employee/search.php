<script src="https://cdn.tailwindcss.com"></script>


<?php
include('../checker/dataChecker.php');
include('../includes/navbar.php');

?>

<div class="mx-auto max-w-7xl pt-8 mt-2 flex flex-col items-center justify-center">
    <h1 class="text-[35px] text-blue-400 mb-4">Employees</h1>


    <div class="w-3/4 flex items-center justify-between">
        <div class="flex flex-1 items-center justify-start">
            <form action="../checker/dataChecker.php" method="POST" class="m-0">
                <button type="submit" name="search-btn">search</button>
                <input type="text" placeholder="search by ID of employee" name="empno" class="border border-gray-400 px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
            </form>
        </div>

        <div class="flex items-center bg-blue-500 px-2 py-1 mr-3 text-white font-semibold rounded-md">
            <a href="view.php">LIST ALL</a>
        </div>

        <div class="flex items-center bg-blue-500 px-2 py-1 text-white font-semibold rounded-md">
            <a href="register.php">ADD +</a>
        </div>
    </div>

    <h2><?php include('../includes/message.php'); ?></h2>


    <div class=" pt-4 w-3/4 max-h-[400px] overflow-hidden flex flex-col  justify-center items-center">

        <h1>Employees</h1>

        <table class="text-[13px] w-full border-collapse border-slate-400">
            <thead>
                <tr>
                    <td class="border border-slate-400">Employee no.</td>
                    <td class="border border-slate-400">First name</td>
                    <td class="border border-slate-400">Last name</td>
                    <td class="border border-slate-400">Middle name</td>
                    <td class="border border-slate-400">Position</td>
                    <td class="border border-slate-400">Department</td>
                    <td class="border border-slate-400 text-center" colspan="2">Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $id = $_SESSION['search'];
                $student_controller = new EmployeeController;
                $result = $student_controller->searchUser($id);
                if ($result) {
                    foreach ($result as $row) {

                ?>
                        <tr>
                            <td class="border border-slate-400"><?= $row['empNo'] ?></td>
                            <td class="border border-slate-400"><?= $row['empFName'] ?></td>
                            <td class="border border-slate-400"><?= $row['empLName'] ?></td>
                            <td class="border border-slate-400"><?= $row['empMName'] ?></td>
                            <td class="border border-slate-400"><?= $row['empPosition'] ?></td>
                            <td class="border border-slate-400"><?= $row['empDept'] ?></td>
                            <td class="border border-slate-400">
                                <div class="bg-green-400 py-1">
                                    <a href="update.php?id=<?= $row['empNo'] ?>" class="flex items-center justify-center">Update</a>
                                </div>

                            </td>
                            <td class="border border-slate-400 ">
                                <form action="../checker/deleteDataChecker.php" method="POST" class="flex items-center justify-center m-0 bg-red-400 py-1">
                                    <button class="" type="submit" name="delete-btn" value="<?= $row['empNo'] ?>">Delete</button>
                                </form>
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