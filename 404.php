<?php
    include "includes/head_fragment.php";
    $title = "ERROR";
    $content = "index_page";
    echo head_fragment($title, $content);
?>
<body>
    
    <?php
        include "includes/navbar_fragment.php";
    ?>
    <h1>404 - Page Not Found</h1>
    <p style="font-size: 30px;"><strong>The page you're looking for doesn't exist.</strong></p>
    <a href="index.php" style="font-size: 40px;">Return to Home</a>

    <br><br>
    <?php
        include "includes/footer_fragment.php";
    ?>

</body>
</html>