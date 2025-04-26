<?php
    include "includes/head_fragment.php";
    $title = "Reviews";
    $content = "reviews_page";
    echo head_fragment($title, $content);
?>

<body>
    <?php
        include "includes/navbar_fragment.php";
    ?>

    <br><br>

    <h1>Top Reviews:</h1>
    <div id = "timed"></div>

    <nav>
        <ul>
            <li id = "All">All</li>
            <li id = "1 star">1 Star</li>
            <li id = "2 star">2 Star</li>
            <li id = "3 star">3 Star</li>
            <li id = "4 star">4 Star</li>
            <li id = "5 star">5 Star</li>
        </ul>
    </nav>

    <div id = 'app'></div>

    <script src="js/app.js"></script>
    <script src="js/timed.js"></script>

    <?php
        include "includes/footer_fragment.php";
    ?>
</body>
</html>