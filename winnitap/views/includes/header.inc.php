<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winnitap | Brewed in Winnipeg</title>
    <link rel="stylesheet" type="text/css" href="/styles/desktop_styles.css">
    <?php if($slug === 'admin_dashboard' || $slug === 'search_admin') : ?>
    <script src="/scripts/admin.js"></script>
    <?php else : ?>
    <script src="/scripts/script.js"></script>
    <?php endif; ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Monoton&family=Montserrat:wght@400;700&display=swap"
        rel="stylesheet">
    <?php if($slug === 'home') : ?>
    <style>
    html,
    body {
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

        font-size: 5vw;
        letter-spacing: 1em;

        text-transform: uppercase;
        text-shadow: 0 0 10px #000;
        text-align: center;
    }

    .para_text h1 {
        font-family: "Bebas Neue", open-sans;
        color: #fff;
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
        font-size: 3vw;
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

    /* Media Query */
    @media all and (max-width: 960px) {

        #page2 #container div p {
            font-size: 0.8em;
        }
    }
    </style>

    <?php elseif($slug === 'brewery') : ?>
    <style>
    body {
        font-family: "Montserrat", open-sans;
        font-size: 15px;
    }

    #wrapper {
        background-color: #ffa500;
        width: 100%;
        height: auto;
        color: #000;
        padding-bottom: 5em;
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

    h2 {
        font-family: "Bebas Neue", open-sans;
        font-size: 20px;
        text-align: center;
    }

    #map {
        width: 100%;
        height: 600px;
        text-align: center;
        margin-bottom: 60px;
    }

    .container {
        width: auto;
    }

    .row {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
    }

    .item {
        width: 240px;
        height: 240px;
        border-radius: 8px;
        margin: 10px;

        background: rgba(255, 255, 255, 0.2);
        backgroud-clip: padding-box;
        backdrop-filter: blur(10px);
        text-align: center;

        transition: 0.2s ease-in-out;
    }

    .item:hover {
        transform: translate(0, -20px);
    }

    .address {
        font-size: 12px;
    }

    .phone {
        font-size: 12px;
    }

    .opening_container {
        display: inline-block;
        text-align: left;
    }

    ul.opening_time {
        font-size: 10px;
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    ul.opening_time li {
        padding-bottom: 4px;
    }

    /* Media Query */
    @media all and (max-width: 960px) {
        h2 {
            font-size: 15px;
        }
    }
    </style>
    <?php elseif($slug === 'beer') : ?>
    <style>
    body {
        font-family: "Montserrat", open-sans;
    }

    #wrapper {
        background-color: #ffa500;
        background-color: #ffa500;
        color: #000;

        width: 100%;
        height: auto;
        overflow: hidden;
        padding-bottom: 5em;
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

    .top_container {
        display: table;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 50px;
        padding: 10px;

        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .category {
        display: table-cell;
        vertical-align: middle;
    }

    .category ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .category li {
        display: inline;
        padding-right: 20px;
    }

    .search {
        display: inline-block;
        vertical-align: middle;
    }

    .row {
        font-family: "Montserrat", open-sans;
        border-bottom: 3px solid #fff;

        display: grid;
        grid-template-columns: 1fr 2fr 1fr;
        padding: 50px;

        transition: all 0.3s ease-in-out;
    }

    a {
        color: #000;
        text-decoration: none;
    }

    .rating {
        display: flex;
        flex-direction: row;
        justify-content: right;
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
        height: 150px;
    }

    .alcohol {
        font-size: 15px;
    }

    .fa-star {
        color: rgba(0, 0, 0, 0.1);
        padding-right: 5px;
        padding-left: 5px;
    }

    .checked {
        color: #000;
    }

    .tag_item {
        font-size: 15px;
        padding: 5px;
        border-radius: 10px;

        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    /* Media Query */
    @media all and (max-width: 960px) {

        .row {
            display: grid;
            grid-template-columns: 1fr 2fr 2fr;
        }

        .row .review_title {
            display: none;
        }

        .row .review {
            display: none;
        }

        .rating {
            display: flex;
            flex-direction: row;
            justify-content: left;
        }

        .top_container {
            display: block;
        }

        .category {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
        }

        .category ul li a {
            font-size: 12px;
        }

        .search {
            display: inline;
            text-align: center
        }

        .search form button {
            padding: 5px;
            margin-top: 10px;
        }
    }
    </style>

    <?php elseif($slug === 'show') : ?>
    <style>
    #wrapper {
        width: 960px;
        margin-left: auto;
        margin-right: auto;
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

    .beer_container {
        display: flex;
        flex-direction: column;
    }

    .row {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        padding: 30px;
        margin-bottom: 50px;

        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    h2 {
        text-align: center;
    }

    .col-left {
        width: 480px;
    }

    .col-right {
        width: 480px;
    }

    .col-right .item {
        margin-bottom: 20px;
    }

    .review {
        text-align: center;
    }

    .col-top {
        display: inline-block;
        min-width: 960px;
        margin-bottom: 50px;
        padding: 30px;

        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border-radius: 30px;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    form {
        display: inline-block;
        text-align: left;
    }

    form input,
    textarea,
    select {
        margin-bottom: 20px;
    }

    .col-bottom {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.05);

        padding: 30px;
        margin-bottom: 50px;
    }

    .login {
        text-align: center;
        margin-bottom: 50px;
    }

    a {
        text-decoration: none;
        color: #000;
    }

    .review_content {
        text-align: center;
    }

    .review_title,
    .description,
    .rating {
        margin-bottom: 10px;
    }

    .error_message {
        color: #f00;
        font-size: 15px;
    }

    .fa-star {
        color: rgba(0, 0, 0, 0.1);
        /* padding-right: 5px;
        padding-left: 5px; */
    }

    .checked {
        color: #000;
    }
    </style>

    <?php elseif($slug === 'enquiry') : ?>
    <style>
    html,
    body {
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
        padding-bottom: 1em;

        font-family: "Bebas Neue", open-sans;
        letter-spacing: 0.3em;
        text-align: center;
        line-height: 1.2em;
        font-size: 80px;
        color: #000;
    }

    h2 {
        text-align: center;
        font-size: 30px;
    }

    .container {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
    }

    .glass {
        max-width: 960px;
        margin-right: auto;
        margin-left: auto;

        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }


    legend {
        font-size: 30px;
    }

    form {
        padding: 50px;
        font-size: 30px;
        max-width: 960px;
    }

    textarea {
        margin-top: 20px;
    }

    p.item {
        margin-bottom: 50px;
    }

    .error_message {
        color: #f00;
        font-size: 15px;
    }
    </style>

    <?php elseif($slug === 'registration') : ?>
    <style>
    body {
        font-family: "Montserrat", open-sans;
        background-color: #ffa500;
        color: #000;
    }

    #title {
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

    #form {
        width: 100%;
        max-width: 960px;
        height: auto;
        margin-left: auto;
        margin-right: auto;
    }

    fieldset {
        border: 4px solid #000;
    }

    legend {
        font-size: 25px;
    }

    label {
        font-size: 20px;
    }

    .container {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;

        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border-radius: 30px;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .error_message {
        color: #f00;
        font-size: 15px;
    }
    </style>

    <?php elseif($slug === 'thankyou') : ?>
    <style>
    body {
        font-family: "Montserrat", open-sans;
        background-color: #ffa500;
        min-height: 100%;
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
        text-align: center;
        font-size: 40px;
    }

    #wrapper {
        max-width: 960px;
        height: auto;
        color: #000;
        margin-right: auto;
        margin-left: auto;
    }

    .user_information {
        border: 2px solid #fff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 20px;
        margin-bottom: 50px;

        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border-radius: 30px;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .container {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
    }

    .container_left {
        display: flex;
        flex-direction: row;
        justify-content: left;
    }

    ul li {
        list-style-type: none;
        font-size: 25px;
        padding: 10px;
        margin-bottom: 20px;
    }
    </style>

    <?php elseif($slug==='login') : ?>
    <style>
    .container {
        margin-top: 100px;
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

    #wrapper {
        max-width: 960px;
        height: auto;
        color: #000;
        margin-right: auto;
        margin-left: auto;
    }

    .container {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        margin: 0;
    }

    form {
        display: flex;
        flex-direction: column;
        justify-content: center;

        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border-radius: 30px;
        border: 1px solid rgba(255, 255, 255, 0.05);
        padding: 20px;
    }

    .row {
        padding: 20px;
    }

    #username {
        margin-top: 10px;
    }

    #submit {
        text-align: center;
    }
    </style>

    <?php elseif($slug==='profile') : ?>
    <style>
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
        text-align: center;
    }

    h3 {
        text-align: center;
    }

    #wrapper {
        max-width: 960px;
        height: auto;
        color: #000;

        margin-right: auto;
        margin-left: auto;

        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;

        /* border: 4px solid #000; */
        padding-bottom: 40px;
        margin: 0;

        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border-radius: 30px;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .profile {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
    }

    ul li {
        list-style-type: none;
        padding: 10px;
    }

    .row {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 30px;
        padding: 20px;
        width: 900px;

        background: rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(10px);
        border-radius: 30px;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    #review_description {
        max-width: 400px;
        word-wrap: break-word;
    }

    .col-left {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
    }

    .col-right {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
    }

    .beer_img img {
        height: auto;
        width: 50px;
    }

    .beer_info {
        text-align: center;
    }

    .info_item {
        margin-bottom: 10px;
    }

    .star_container {
        display: flex;
        flex-direction: column;
    }

    .action {
        text-align: right;
    }

    .action .button {
        padding-bottom: 10px;
    }

    .action a {
        color: #fff;
        text-decoration: none;
        font-weight: 700;
        font-size: 12px;

        padding: 10px;
        background-color: #000;
        border-radius: 10px;

        transition: 0.2s ease-in-out;
    }

    .action a:hover {
        background-color: rgba(0, 0, 0, 0.7);
    }

    .rating {
        display: flex;
        flex-direction: row;
        justify-content: right;
        /* margin-bottom: 25px; */
    }

    .fa-star {
        color: rgba(0, 0, 0, 0.1);
        padding-right: 5px;
        padding-left: 5px;
    }

    .checked {
        color: #000;
    }
    </style>

    <?php elseif($slug==='edit_review') : ?>
    <style>
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

    .wrapper {
        max-width: 960px;
        min-height: 100%;
        color: #000;

        margin-right: auto;
        margin-left: auto;

        display: flex;
        flex-direction: column;
        justify-content: center;

    }

    .container {
        display: inline-block;
        margin-left: auto;
        margin-right: auto;

        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .container form {
        padding: 30px;
    }

    input,
    textarea,
    select {
        margin-bottom: 20px;
    }
    </style>

    <?php elseif($slug==='admin_dashboard') : ?>
    <style>
    body {
        font-family: "Montserrat", open-sans;
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
        text-align: center;
    }

    #wrapper {
        max-width: 960px;
        height: auto;
        color: #000;

        margin-right: auto;
        margin-left: auto;
        padding-bottom: 5em;
    }

    .glass {
        background: rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(10px);
        border-radius: 30px;
        border: 1px solid rgba(255, 255, 255, 0.05);
        padding: 20px;
    }

    .aggregate {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        margin-bottom: 10px;
        text-align: center;
    }

    .aggregate_data {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    #container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        max-width: 920px;
    }

    #new_beer {
        display: flex;
        justify-content: center;
    }

    #new_beer form input,
    select,
    textarea,
    button#submit {
        margin-bottom: 20px;
    }

    .row {
        font-family: "Montserrat", open-sans;
        border-bottom: 3px solid #fff;

        font-size: 20px;
        line-height: 1.5em;

        display: grid;
        grid-template-columns: 1fr 2fr 1fr;
        padding: 50px;

        transition: all 0.3s ease-in-out;
    }

    .rating {
        display: flex;
        flex-direction: row;
        justify-content: right;
    }

    .row:hover {
        background-color: rgba(255, 215, 0, 0.5);
    }

    .row div:first-child {
        padding-bottom: 0.5em;
    }

    .brewery_name,
    .alcohol,
    .tags {
        padding-bottom: 10px;
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
        padding-right: 5px;
        padding-left: 5px;
    }

    .checked {
        color: #000;
    }

    .col-far-right {
        display: flex;
        flex-direction: column;
    }

    .change {
        text-align: right;
    }

    .change .change-btn {
        margin-top: 0;
        margin-bottom: 20px;
    }

    .change .change-btn a {
        font-size: 12px;
        padding: 10px;
        background-color: #000;
        color: #fff;
        border-radius: 10px;
    }

    .review_title {
        font-size: 20px;
        font-weight: 700;
        padding-bottom: 10px;
        line-height: 1em;
    }

    .review_username {
        font-size: 15px;
        padding-top: 20px;

    }

    /* #reviews {
        font-size: 30px;
        text-align: center;
    } */

    .tab_buttons {
        display: flex;
        margin-bottom: 10px;
    }

    .tab {
        color: #000;
        padding: 14px 20px;
        width: 33.33%;
        transition: 0.3s ease-in-out;
        margin-right: 10px;

        background-color: rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .tab:hover {
        background-color: rgba(255, 255, 255, 0.5);
    }

    .collapsible {
        color: #000;
        padding: 14px 20px;
        width: 910px;
        transition: 0.3s ease-in-out;
        margin-bottom: 10px;

        background-color: rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    form #search {
        padding: 5px;
    }

    /* .active, */
    .collapsible:hover {
        background-color: rgba(255, 255, 255, 0.5);
    }

    .content {
        /* display: none; */
        overflow: hidden;
        max-height: 0;
        transition: max-height 0.5s ease-in-out;
    }

    a {
        text-decoration: none;
        color: #000;
        line-height: 1em;
    }

    .tag_item {
        font-size: 15px;
        padding: 5px;
        border-radius: 10px;

        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .error_message {
        color: #f00;
        font-size: 15px;
    }

    div#user {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }

    #log li {
        list-style-type: none;
        padding-bottom: 20px;
    }

    #log h2 {
        text-align: center;
    }
    </style>

    <?php elseif($slug === 'edit_beer') : ?>
    <style>
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

    .wrapper {
        max-width: 960px;
        height: auto;
        color: #000;

        display: flex;
        flex-direction: column;
        margin-right: auto;
        margin-left: auto;
    }

    .container {
        display: inline-block;
        margin-right: auto;
        margin-left: auto;
    }

    .container form {
        padding: 80px;

        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    select,
    input,
    textarea {
        margin-bottom: 30px;
    }
    </style>

    <?php elseif($slug === 'search') : ?>
    <style>
    body {
        font-family: "Montserrat", open-sans;
    }

    #wrapper {
        background-color: #ffa500;
        background-color: #ffa500;
        color: #000;

        width: 100%;
        height: auto;
        overflow: hidden;
        padding-bottom: 5em;
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

    .top_container {
        display: table;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 50px;
        padding: 10px;

        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .category {
        display: table-cell;
        vertical-align: middle;
    }

    .category ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .category li {
        display: inline;
        padding-right: 20px;
    }

    .search {
        display: inline-block;
        vertical-align: middle;
    }

    .row {
        font-family: "Montserrat", open-sans;
        border-bottom: 3px solid #fff;

        display: grid;
        grid-template-columns: 1fr 2fr 1fr;
        padding: 50px;

        transition: all 0.3s ease-in-out;
    }

    a {
        color: #000;
        text-decoration: none;
    }

    .rating {
        display: flex;
        flex-direction: row;
        justify-content: right;
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
        height: 150px;
    }

    .alcohol {
        font-size: 15px;
    }

    .fa-star {
        color: rgba(0, 0, 0, 0.1);
        padding-right: 5px;
        padding-left: 5px;
    }

    .checked {
        color: #000;
    }

    .tag_item {
        font-size: 15px;
        padding: 5px;
        border-radius: 10px;

        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    /* Media Query */
    @media all and (max-width: 960px) {

        .row {
            display: grid;
            grid-template-columns: 1fr 2fr 2fr;
        }

        .row .review_title {
            display: none;
        }

        .row .review {
            display: none;
        }

        .rating {
            display: flex;
            flex-direction: row;
            justify-content: left;
        }
    }
    </style>

    <?php elseif($slug === 'search_admin') : ?>
    <style>
    body {
        font-family: "Montserrat", open-sans;
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

    #wrapper {
        max-width: 960px;
        height: auto;
        color: #000;

        margin-right: auto;
        margin-left: auto;
        padding-bottom: 5em;
    }

    .aggregate {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;

        border: 1px solid #000;
    }

    .aggregate_data {
        display: flex;
        flex-direction: column;
        justify-content: center;

        border: 1px solid #000;
    }

    #container {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .row {
        font-family: "Montserrat", open-sans;
        border-bottom: 3px solid #fff;

        font-size: 20px;
        line-height: 1.5em;

        display: grid;
        grid-template-columns: 1fr 2fr 1fr;
        padding: 50px;

        transition: all 0.3s ease-in-out;
    }

    .rating {
        display: flex;
        flex-direction: row;
        justify-content: right;
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
        padding-right: 5px;
        padding-left: 5px;
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

    .tab_buttons {
        display: flex;
    }

    .tab {
        background-color: #0f0f0f;
        color: #fff;
        padding: 14px 20px;
        border-radius: 0;
        width: 33.33%;
    }

    .collapsible {
        padding: 14px 20px;
        width: 960px;
        border-radius: 0;
    }

    /* .active, */
    .collapsible:hover {
        background-color: rgba(255, 215, 0, 0.5);
    }

    .content {
        /* display: none; */
        overflow: hidden;
        max-height: 0;
        transition: max-height 0.5s ease-in-out;
    }

    .error_message {
        color: #f00;
        font-size: 15px;
    }
    </style>

    <?php endif; ?>
</head>

<body>

    <!--header start-->
    <header>

        <?php require __DIR__ . '/nav.inc.php';?>

    </header>
    <!--header end-->