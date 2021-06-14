<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winnitap | Brewed in Winnipeg</title>
    <link rel="stylesheet" type="text/css" href="styles/desktop_styles.css">
    <script src="/scripts/script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@400;700&display=swap" rel="stylesheet"> 
    <?php if($slug === 'home') : ?>
    <style>
        html, body {
            height: 100%;
            width: 100%;
            font-family: "Montserrat", open-sans;
        }

        /* Parallax 1 */
        .para_img {
            position: relative;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        /* Parallax Image 1 */
        #img1 {
            background-image: url("../images/beer1.jpg");
            min-height: 100%;
            opacity: 1;
        }

        /* texts */
        .para_text {
            position: absolute;
            top: 30%;
            width: 100%;

            
            font-size: 550%;
            letter-spacing: 1em;

            text-transform: uppercase;
            text-shadow: 0 0 10px #000;
            text-align: center;
        }

        .para_text h1 {
            font-family: "Bebas Neue", open-sans;
        }

        section.para_content {
            background-color: #ffa500;
            min-height: 100%;
        }

        section.para_content p {
            margin: 0;
            color: #000;
            letter-spacing: 0.2em;
        }

        /* Parallax 2 */
        #page2 {
            min-height: 100%;
            font-size: 60px;
            line-height: 1.5em;
            height: auto;
            width: 100%;
        }

        #page2 h2 {
            color: #000;
            text-align: center;
            text-transform: uppercase;
            margin: 0;
            padding-top: 1em;
            font-family: "Bebas Neue", open-sans;
            font-weight: 700;
            letter-spacing: 0.3em;
        }

        #page2 #container {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            padding-top: 2em;
            padding-bottom: 3em;
            height: auto;
            width: 100%;
        }

        #page2 #container #span {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }

        #page2 #container img {
            display: inline;
        }

        #page2 #container div p {
            font-size: 25px;
            text-align: center;
        }

        .manitoba_img {
            height: auto;
            max-width: 100%;

            opacity: 0.5;
            transition: all 0.3s ease-in-out;
        }

        .manitoba_img:hover {
            opacity: 1;
        }

        /* Parralax 3 */
        #page3 {
            background-image: url("../images/beer2.jpg");
            min-height: 100%;

            position: relative;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        #page3 p {
            padding-top: 1em;
            margin-left: 200px;
            font-size: 100px;
            text-align: left;
            color: #fff;
            text-transform: uppercase;
            text-shadow: 0 0 10px #000;
            line-height: 1.4em;
        }

        .call_to_action {
            margin-left: 200px;
            font-size: 40px;
            margin-bottom: 1.5em;
            font-family: "Bebas Neue", open-sans;
            letter-spacing: 0.2em;
        }

        #explore {
            display: inline-block;
            background-color: rgba(255, 165, 0, 0.6);
            padding: 30px;
            margin-top: 1.5em;
            text-align: left;
            border-radius: 15px;
            transition: all 0.3s ease-in-out;
        }

        #explore:hover {
            background-color: rgba(255, 165, 0, 1);
        }

        #explore a {
            color: #000;
            text-decoration: none;
        }
    </style>

    <?php elseif($slug === 'brewery') : ?>
    <style>
        body{
            font-family: "Montserrat", open-sans;
        }

        #wrapper {
            background-color: #ffa500;
            width: 100%;
            height: auto;
            color: #000;
        }

        h1 {
            display: block;
            margin: 0;
            padding-top: 2em;
            padding-bottom: 1.5em;
            font-family: "Bebas Neue", open-sans;
            letter-spacing: 0.3em;
            text-align: center;
            font-size: 80px;
            color: #000;
        }

        #map {
            width: 100%;
            height: 600px;
            text-align: center;
            margin-bottom: 60px;
        }

        table {
            border: 1px solid #000;
            border-collapse: collapse;
            margin-left: auto;
            margin-right: auto;
        }

        table td {
            border:1px solid #000;
            padding: 10px;
        }

    </style>
    <?php elseif($slug === 'beer') : ?>
        <style>
        body{
            font-family: "Montserrat", open-sans;
        }

        #wrapper {
            background-color: #ffa500;
            background-color: #ffa500;
            width: 100%;
            height: auto;
            color: #000;
        }

        #wrapper h1 {
            display: block;
            margin: 0;
            padding-top: 2em;
            padding-bottom: 1.5em;

            font-family: "Bebas Neue", open-sans;
            font-size: 90px;
            letter-spacing: 0.3em;
            text-align: center;
            color: #000;
        }

        #beer_container {
            margin-left: auto;
            margin-right: auto;
            
            width: 1200px;
            height: auto;

            font-size: 30px;
            line-height: 1.5em;
            background-color: rgba(255, 215, 0, 0.1);
        }

        .row {
            font-family: "Montserrat", open-sans;
            display: grid;
            grid-template-columns: 300px 600px 300px;
            padding: 50px;
            border-bottom: 3px solid #fff;

            transition: all 0.3s ease-in-out;
        }

        .beer_info:first-child {
            text-transform: uppercase;
        }

        .row:hover {
            background-color: rgba(255, 215, 0, 0.5);
        }

        .row div:first-child {
            padding-bottom: 0.5em;
        }

        .beer_name {
            font-family: "Bebas Neue", open-sans;
            font-size: 40px;
            letter-spacing: 0.2em;
            text-transform: uppercase;
        }

        .brewery_name {
            font-size: 20px;
        }

        div img {
            width: auto;
            height: 200px;
        }

        .alcohol {
            font-size: 15px;
        }

        .fa-star {
            color: rgba(0, 0, 0, 0.1);
        }

        .checked {
            color: #000;
        }

        .review_title {
            font-size: 20px;
            font-weight: 700;
        }

        .review {
            font-size: 15px;
            line-height: 1.2em;
        }

    </style>
    <?php elseif($slug === 'enquiry') : ?>
        <style>
        html, body {
            font-family: "Montserrat", open-sans;
        }

        #wrapper {
            background-color: #ffa500;
            width: 100%;
            height: auto;
            color: #000;
            display: flex;
            flex-direction: column;
            justify-content:space-evenly;
        }

        h1 {
            display: block;
            margin: 0;
            padding-top: 2em;
            padding-bottom: 1em;

            font-family: "Bebas Neue", open-sans;
            letter-spacing: 0.3em;
            text-align: center;
            line-height: 1.2em;
            font-size: 80px;
            color: #000;
        }

        h2 {
            font-size: 30px;
            text-align: center;
        }

        form {
            font-size: 30px;
            padding: 30px;
            margin-right: auto;
            margin-left: auto;
        }
        
        input {
            margin: 20px 20px 20px 20px;
        }

        textarea {
            margin-top: 20px;
        }

    </style>
    <?php endif; ?>
</head>
<body>

    <!--header start-->
    <header>
        <div class="logo">
            <a href="index.php">LOGO</a>
        </div>

        <?php require __DIR__ . '/nav.inc.php';?>

    </header>
    <!--header end-->