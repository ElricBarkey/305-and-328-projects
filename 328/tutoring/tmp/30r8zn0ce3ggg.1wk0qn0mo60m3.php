<!doctype html>
<html lang="en">
<head>
    <?php echo $this->render('includes/head.html',NULL,get_defined_vars(),0); ?>
    <title>View Student</title>
</head>
<body>

<!-- Nav bar -->
<?php echo $this->render('includes/nav.html',NULL,get_defined_vars(),0); ?>

<!-- Page content -->
<div class="container">

    <h1 class="my-5">View Student</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">

            <!-- Student profile form -->
            <form method="post" action="" class="bg-light p-5 mb-3">

                <h3>Profile</h3>
                <hr>

                <!-- First name -->
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" aria-describedby="first name" placeholder="" value="<?= ($fname) ?>" readonly>
                </div>

                <!-- Last name -->
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" aria-describedby="last name" placeholder="" value="<?= ($lname) ?>" readonly>
                </div>

                <!-- SID -->
                <div class="form-group">
                    <label for="sid">Student Identification (SID) Number</label>
                    <input type="text" class="form-control" id="sid" aria-describedby="student id number" placeholder="" value="<?= ($sid) ?>" readonly>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="" value="<?= ($email) ?>" readonly>
                </div>

            </form>

        </div>

        <div class="col-md-6">

            <!-- Add attendance form -->
            <form method="post" action="" class="bg-light p-5 mb-3">

                <h3>Add Attendance</h3>
                <hr>

                <!-- Date -->
                <div class="row">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="text" class="form-control" id="date" name="date" aria-describedby="date" placeholder="mm/dd/yyyy" onfocus="(this.type='date')" value="<?= ($date) ?>">
                            <?php if (isset($errors['date'])): ?>
                                <div class="small my-1 py-1 alert alert-dark" role="alert"><?= ($errors['date']) ?></div>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <!-- Time in/out -->
                <div class="row">
                    <div class="col-md-6">

                        <!-- Time in -->
                        <div class="form-group">
                            <label for="timein">Time In</label>
                            <input type="time" class="form-control" id="timein" name="timein" aria-describedby="time in"
                            <?php if ($timein): ?>
                                value="<?= ($timein) ?>"
                                <?php else: ?>value="00:00"
                            <?php endif; ?>>

                            <?php if (isset($errors['timein'])): ?>
                                <div class="small my-1 py-1 alert alert-dark" role="alert"><?= ($errors['timein']) ?></div>
                            <?php endif; ?>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <!-- Time out -->
                        <div class="form-group">
                            <label for="timeout">Time Out</label>
                            <input type="time" class="form-control" id="timeout" name="timeout" aria-describedby="time out"
                            <?php if ($timeout): ?>
                                value="<?= ($timeout) ?>"
                                <?php else: ?>value="00:00"
                            <?php endif; ?>>

                            <?php if (isset($errors['timeout'])): ?>
                                <div class="small my-1 py-1 alert alert-dark" role="alert"><?= ($errors['timeout']) ?></div>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <!-- Course/Instructor -->
                <div class="row">
                    <div class="col-md-6">

                        <!-- Courses -->
                        <div class="form-group">
                            <label for="course">Course</label>
                            <select class="custom-select" id="course" name="course">

                                <?php if (isset( $selectedCourse )): ?>
                                    
                                        <option></option>
                                        <?php foreach (($courses?:[]) as $course): ?>
                                            <option value="<?= ($course) ?>" <?php if ($selectedCourse == $course): ?>selected<?php endif; ?>><?= (strtoupper($course)) ?></option>
                                        <?php endforeach; ?>
                                    
                                    <?php else: ?>
                                        <option selected></option>
                                        <?php foreach (($courses?:[]) as $course): ?>
                                            <option value="<?= ($course) ?>"><?= (strtoupper($course)) ?></option>
                                        <?php endforeach; ?>
                                    
                                <?php endif; ?>

                            </select>

                            <!-- Error msg -->
                            <?php if (isset($errors['course'])): ?>
                                <div class="small my-1 py-1 alert alert-dark" role="alert"><?= ($errors['course']) ?></div>
                            <?php endif; ?>

                        </div>

                    </div>
                    <div class="col-md-6">

                        <!-- Instructors -->
                        <div class="form-group">
                            <label for="instructor">Instructor</label>
                            <select class="custom-select" id="instructor" name="instructor">

                                <?php if (isset( $selectedInstructor )): ?>
                                    
                                        <option></option>
                                        <?php foreach (($instructors?:[]) as $instructor): ?>
                                            <option value="<?= ($instructor) ?>" <?php if ($selectedInstructor == $instructor): ?>selected<?php endif; ?>><?= (ucfirst($instructor)) ?></option>
                                        <?php endforeach; ?>
                                    
                                    <?php else: ?>
                                        <option selected></option>
                                        <?php foreach (($instructors?:[]) as $instructor): ?>
                                            <option value="<?= ($instructor) ?>" <?php if ($selectedInstructor == $instructor): ?>selected<?php endif; ?>><?= (ucfirst($instructor)) ?></option>
                                        <?php endforeach; ?>
                                    
                                <?php endif; ?>

                            </select>

                            <!-- Error msg -->
                            <?php if (isset($errors['instructor'])): ?>
                                <div class="small my-1 py-1 alert alert-dark" role="alert"><?= ($errors['instructor']) ?></div>
                            <?php endif; ?>

                        </div>

                    </div>
                </div>

                <!-- Notes -->
                <div class="row">

                    <div class="col-md-12">

                        <div class="form-group">
                            <label for="notes">Notes</label>
                            <textarea class="form-control" id="notes" name="notes" rows="3"><?= ($notes) ?></textarea>
                        </div>

                    </div>

                </div>

                <!-- Success message -->
                <?php if (isset($errors['none'])): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= ($errors['none'])."
" ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <!-- Save button -->
                <button type="submit" class="btn btn-primary btn-block">Save</button>
                <br>

            </form>

        </div>

    </div>

</div>

</body>
</html>