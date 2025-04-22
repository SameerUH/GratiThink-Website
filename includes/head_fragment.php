<?php
function head_fragment($title, $content) {
    return <<<EOT
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href="../styles/$content.css">
        <title>GratiThink | $title</title>
    </head>

    EOT;
}
?>