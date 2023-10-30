<script src="https://cdn.tailwindcss.com"></script>


<?php
include('config/app.php');
include('controller/EmployeeController.php');

?>

<div class=" h-screen flex items-center justify-center">

    <div class=" w-[300px] flex flex-col  justify-center items-center">

        <h1>Update employee</h1>

        <?php
        if (isset($_GET['id'])) {
            $id = (int)$_GET['id'];
            $student_id  = new EmployeeController;
            $result = $student_id->toEdit($id);

        ?>

            <form action="" method="POST">
                <div class="flex flex-col items-start gap-2">
                    <p><?php include('includes/message.php'); ?></p>
                    <div class="flex flex-col">
                        <label for="">Employee no.</label>
                        <input type="text" name="employeeno" placeholder="employee no." />
                    </div>

                    <div>
                        <label for="">First name.</label>
                        <input type="text" name="firstname" placeholder="firstname" />
                    </div>

                    <div>
                        <label for="">Last name</label>
                        <input type="text" name="lastname" placeholder="lastname" />
                    </div>

                    <div>
                        <label for="">Middle name</label>
                        <input type="text" name="middlename" placeholder="middlename" />
                    </div>

                    <div>
                        <label for="">Position</label>
                        <input type="text" name="position" placeholder="position" />
                    </div>

                    <div>
                        <label for="">Department</label>
                        <input type="text" name="department" placeholder="department" />
                    </div>

                </div>
                <div>
                    <button name="save-update">Submit</button>
                </div>
            </form>
        <?php
        }
        ?>

    </div>
</div>