<?php
    include "includes/head_fragment.php";
    $title = "Credits";
    $content = "credits_page";
    echo head_fragment($title, $content);
?>

<!--MUST DO THIS PAGE!!!-->

<body>
    <?php
        include "includes/navbar_fragment.php";
    ?>

    <h2><u>Credits</u></h2>
    <div class = "box">
    <h3>Developer:</h3>
    <p>NAME: SAMEER HAQ</p>
    <p>STUDENT ID: W23002216</p>
    </div>

    <br><br>

    <div class = "box">
    <h3>Links of sources:</h3>
    <p>Logo: Created myself</p>
    <a href="https://unsplash.com/photos/white-book-WI30grRfBnE"> Habit tracker image in index page - Unsplash</a>
    <a href="https://unsplash.com/photos/silver-iphone-5s-on-black-leather-case-DelG8zMD624"> Phone with journal in index page - Unsplash</a>
    <p>A.I. used: ChatGPT</p>
    </div>

    <br><br>

    <?php
        include "includes/footer_fragment.php";
    ?>
</body>
</html>