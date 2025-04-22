<!--
Short to-do list:
- Need to add PHP fragments possibly make a template.
- Need to learn JavaScript to add reviews.
!-->

<?php
    include "../includes/head_fragment.php";
    $title = "Home";
    $content = "index_page";
    echo head_fragment($title, $content);
?>

<body>

    <?php
    include "../includes/navbar_fragment.php";
    ?>

    <header><u>GratiThink</u></header>

    <h2>STRESS LESS | START TRACKING</h2>

    <main>
        <img src="../images/phone with journal.jpg" alt = "phone with journal">

        <div class="maintext">

        <p> A gratitude journal used to help students with multiple committments by keeping track of they have during done in the day. Users can look at previous entries and check their performance over a period of time or an amount of entries. <br><br> A simple, quick way to motivate students when revising or doing school work by looking at and reflecting upon past efforts.
        </p>
        </div>

        <img src="../images/habit tracker.jpg" alt="habit tracker">

    </main>

    <br><br><br>

    <?php
        include "../includes/footer_fragment.php";
    ?>
</body>

</html>