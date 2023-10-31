<script src="https://cdn.tailwindcss.com"></script>


<?php
include('config/app.php');
include('controller/EmployeeController.php');
include('includes/navbar.php');


?>

<div class=" h-screen flex items-center justify-center">

    <div class=" w-[300px] flex flex-col  justify-center items-center">

        <h1>Update employee</h1>

        <?php
        if (isset($_GET['id'])) {
            $id = (int)$_GET['id'];
            $student_id  = new EmployeeController;
            $result = $student_id->toEdit($id);
            if ($result) {

        ?>
                <form action="checker/updateDataChecker.php" method="POST">
                    <div class="flex flex-col items-start gap-2">
                        <p><?php include('includes/message.php'); ?></p>
                        <div class="flex flex-col">
                            <label for="">Employee no.</label>
                            <input type="text" name="empno" placeholder="employee no." value="<?= $result['empNo'] ?>" readonly />
                        </div>

                        <div>
                            <label for="">First name.</label>
                            <input type="text" name="firstname" placeholder="firstname" value="<?= $result['empFName'] ?>"/>
                        </div>

                        <div>
                            <label for="">Last name</label>
                            <input type="text" name="lastname" placeholder="lastname" value="<?= $result['empLName'] ?>"/>
                        </div>

                        <div>
                            <label for="">Middle name</label>
                            <input type="text" name="middlename" placeholder="middlename" value="<?= $result['empLName'] ?>"/>
                        </div>

                        <div>
                            <label for="">Position</label>
                            <input type="text" name="position" placeholder="position" value="<?= $result['empPosition'] ?>"/>
                        </div>

                        <div>
                            <label for="">Department</label>
                            <input type="text" name="department" placeholder="department" value="<?= $result['empDept'] ?>"/>
                        </div>

                    </div>
                    <div>
                        <button name="save-update">Submit</button>
                    </div>
                </form>
        <?php
            }else{
                echo "No record found";
            }
        }
        ?>

    </div>
</div>