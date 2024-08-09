<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
    /* styles.css */
    html, body {
        height: 100%;
        margin: 0;
    }

    body {
        display: flex;
        flex-direction: column;
    }

    .content {
        flex: 1;
    }

    footer {
        width: 100%;
        min-height: 100px; /* Adjust as needed */
        background-color: #2d3748;
        color: #e2e8f0;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1300;
    }

    .footer-container {
        display: flex;
        justify-content: space-evenly;
        width: 100%; /* Ensure it takes full width of the footer */
    }

    #rights-reserved {
        margin: 0; /* Remove default margin */
        text-align: center; /* Center text if needed */
    }

</style>

</head>
<body>
<div class="content">
    <!-- Main content goes here -->
</div>
<footer>
    <div class="footer-container">
        <h5 id="rights-reserved">© 2024 Harry Pape</h5>
            <h5 id="rights-reserved">All Rights Reserved</h5>
    </div>
</footer>

</body>
</html>
