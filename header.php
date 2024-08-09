<?php include 'config.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <style>
        /* CSS rules for screens up to 768px wide */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            padding: 0;
        }

        /* HEADER */
        .header {
            background-color: #1e3a8a;
            position: fixed;
            width: 100%;
            z-index: 1010;
        }

        #header-title {
            padding: 0.2rem;
            font-family: 'Pacifico', cursive;
        }

        #header-title a {
            text-decoration: none;
            color: #F1E6D4;
        }
    </style>
</head>
<body>

<header class="header">
    <h2 id="header-title"><a href="<?php echo BASE_URL; ?>index.html">Narrative</a></h2>

</header>

</body>
</html>