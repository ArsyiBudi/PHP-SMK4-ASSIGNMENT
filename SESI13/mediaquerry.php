<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M. Arsyi Budi XI RPL 1</title>
    <style>
        body {
            background: ghost;
            font-family: 'Segoe UI', serif;
        }
        header {
            text-align:center;
        }
        header h1 {
            padding: 0;
            margin: 0;
        }
        nav {
            margin-top: 10px;
            display: inline-block;
        }
        nav ul {
            list-style: none;
            display: inline-block;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            display: inline-block;
            margin-right: 10x;
            font-size: 24px;
        }
        nav a{
            transition: 3s;
            color: #666;
            text-decoration: none;
        }
        nav a:hover {
            transition: .3s;
            font-weight: bold;
        }
        @media (max-width: 320px) {
            nav {
                width: 100%;
            }
            nav ul, nav ul li {
                display: block;
            }
            nav ul li {
                margin-bottom: 10px;
                border-bottom: 1px solid #ddd;
                width: 100%;
            }
            nav a{
                font-size: 12px ;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1 class="title">Brand Name</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">about us</a></li>
                <li><a href="#">product</a></li>
                <li><a href="#">service</a></li>
                <li><a href="#">testimonial</a></li>
                <li><a href="#">favorite</a></li>
                <li><a href="#">promo</a></li>
                <li><a href="#">deals</a></li>
                <li><a href="#">contact us</a></li>
                <li><a href="#">location</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>