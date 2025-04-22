<?php
    include "includes/head_fragment.php";
    $title = "About";
    $content = "about_page";
    echo head_fragment($title, $content);
?>

<body>
    <?php
        include "includes/navbar_fragment.php";
    ?>

    <main>
        <h3><i><u>Inspiration:</u></i></h3>

        <p>Growing up I had issues with balancing education and other committments and as time went by and exams came closer, I lost motivation and concentration with my studies. After doing research and reading into techniques and books I have found methods to help with motivation by doing little by little per day and celebrating/reflecting on past revision to help motivate future sessions.<br><br>I decided to make this app implementing those methods and techniques to help myself and others with their future studies.</p>
        <br>

        <h3><i><u>Features:</u></i></h3>
        <ul class="centeredlist">
            <li>Writing and saving entries.</li>
            <li>Performance tracker with counters and graphs.</li>
            <li>Customizable and accessibility features.</li>
            <li>5 questions to answer for a structured approach.</li>
        </ul>
        <br>
        <h3><i><u>Meet the Team:</u></i></h3>

        <div class="team">
            <div class="role">
                <h4>Founder:</h4>
                <p><b>Sameer Haq</b></p>
                <p>Starting and managing the project, Sameer has profound teamwork, leadership and creativity skills to think and add future ideas whilst making sure the customers have a great experience with the app by listening to feedback.</p>
            </div>

            <div class="role">
                <h4>Programmer:</h4>
                <p><b>Sameer Haq</b></p>
                <p>With years of experience in programming ranging from Python, HTML, CSS, PHP, JavaScript, shown with this very website and with prior projects, Sameer is able to turn a idea into reality through his programming expertise.</p>
            </div>

            <div class="role">
                <h4>Designer:</h4>
                <p><b>Sameer Haq</b></b></p>
                <p>From designing social media posts for societies to apps for programming projects, Sameer can use his creativity skills and an education in Creative I-Media and Art to quickly think of designs to be used in apps. P.S. he designed the app, website and logo all by himself!</p>
            </div>
        </div>

    </main>
    <br><br>
    
    <?php
        include "includes/footer_fragment.php";
    ?>
</body>
</html>