<!--Top Sticky Header-->
<header>
    <nav>
        <div class="toggle">
            <img src="hamburger.png">
        </div>
        <a id="logo" href="index.php">CSCB20</a>
        <div class="menu">
            <ul id="navBar">
                <li <?php if (basename($_SERVER['PHP_SELF']) == 'announcements.php') {echo('class="currentpage" ');} ?>>
                    <a href="announcements.php">Announcements</a>
                </li>

                <li <?php if (basename($_SERVER['PHP_SELF']) == 'course.php') {echo('class="currentpage" ');} ?>>
                    <a href="course.php">Course Materials</a>
                </li>

                <li <?php if (basename($_SERVER['PHP_SELF']) == 'schedule.php') {echo('class="currentpage" ');} ?>>
                    <a href="schedule.php">Schedule</a>
                </li>

                <li <?php if (basename($_SERVER['PHP_SELF']) == 'grades.php') {echo('class="currentpage" ');} ?>>
                    <a href="grades.php">Grades</a>
                </li>

                <?php
                    // require('session.php');
                    if ($_SESSION['user_type'] != 'ta') {
                        echo "<li ";
                        if (basename($_SERVER['PHP_SELF']) == 'feedback.php') {echo('class="currentpage" ');}
                        echo "><a href=\"feedback.php\">Feedback</a></li>";
                    }

                ?>

                <li <?php if (basename($_SERVER['PHP_SELF']) == 'links.php') {echo('class="currentpage" ');} ?>>
                    <a href="links.php">Links</a>
                </li>
                <li <?php if (basename($_SERVER['PHP_SELF']) == 'logout.php') {echo('class="currentpage" ');} ?>>
                    <a href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</header>