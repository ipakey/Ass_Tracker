<?php include('view/header.php'); ?>

<section id="list" class="list">
    <header class="list__row list__header">
        <h1>Assignments</h1>
        <form action="." method="get" id="list__header_select" class="list__header_select">
            <input type="hidden" name="action" value="list_assignments">
            <select name="course_id" required>
                <option value="0">View All</option>
                <?php foreach($courses_id == $course) : ?>
                    <?php if ($course_id == $course['cs_Id']) { ?>
                    <option value="<?= $course['cs_Id'] ?>" selected>
                        <?php } else { ?>
                    <option value="<?= $course['cs_Id'] ?>"
                        <?php } ?>
                        <?= $course['cs_Name']?> >
                    </option>
                    <?php endforeach; ?>
            </select>
            <button class="add_button bold">Go</button>
        </form>
    </header>
</section>



<?php include('view/footer.php'); ?>