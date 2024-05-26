<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom admin css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php @include 'header.php'; ?>

    <section class="heading">
        <h3>about us</h3>
        <p> <a href="home.php">home</a> / about </p>
    </section>

    <section class="about">

        <div class="flex">

            <div class="image">
                <img src="images/whychooseus.jpg" alt="">
            </div>

            <div class="content">
                <h3>why choose us?</h3>
                <p>At ETQT, we offer a unique blend of style, quality, and affordability. Our commitment to providing the latest trends with exceptional craftsmanship ensures that you always look your best, without breaking the bank. Discover the perfect combination of fashion and functionality with us.</p>
                <a href="shop.php" class="btn">shop now</a>
            </div>

        </div>

        <div class="flex">

            <div class="content">
                <h3>what we provide?</h3>
                <p>Our collection features a wide range of clothing and accessories for every occasion. From casual wear to formal attire, we have something for everyone. Each piece is thoughtfully designed and meticulously crafted to meet the highest standards of style and comfort.</p>
                <a href="contact.php" class="btn">contact us</a>
            </div>

            <div class="image">
                <img src="images/whatweprovide.jpg" alt="">
            </div>

        </div>

        <div class="flex">

            <div class="image">
                <img src="images/whoarewe.jpg" alt="">
            </div>

            <div class="content">
                <h3>who we are?</h3>
                <p>We are a passionate team of fashion enthusiasts dedicated to bringing you the best in clothing and accessories. Our mission is to empower you with the confidence to express your unique style. Join us on our journey to redefine fashion and make it accessible for everyone.</p>
                <a href="#reviews" class="btn">clients reviews</a>
            </div>

        </div>

    </section>

    <section class="reviews" id="reviews">

        <h1 class="title">client's reviews</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/pic-1.png" alt="">
                <p>I absolutely love the quality and style of the clothes I purchased from [Your Brand]. The customer service was exceptional, and the prices are unbeatable!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>john deo</h3>
            </div>

            <div class="box">
                <img src="images/awa.jpg" alt="">
                <p>Fantastic shopping experience! The website is easy to navigate, and the delivery was prompt. Highly recommend ETQT for anyone looking for stylish and affordable clothing.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>vincent pogi</h3>
            </div>

            <div class="box">
                <img src="images/pic-2.png" alt="">
                <p>Great variety of clothes that suit all my needs, from work to casual outings. The quality is top-notch and the prices are very reasonable. I'm a loyal customer now!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>hannah faith</h3>
            </div>

            <div class="box">
                <img src="images/hombed.jpg" alt="">
                <p>The customer service team went above and beyond to ensure I was satisfied with my purchase. The clothes are stylish and comfortable. Will definitely be shopping here again!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>harris james</h3>
            </div>

            <div class="box">
                <img src="images/pic-6.png" alt="">
                <p>Amazing products at great prices. I found exactly what I was looking for, and the quality exceeded my expectations. The customer service was responsive and helpful, making the shopping experience even better. Highly recommend ETQT!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>princess kate</h3>
            </div>

            <div class="box">
                <img src="images/koryano.jpg" alt="">
                <p>ETQT offers a fantastic selection of trendy and affordable clothing. The quality is impressive, and the customer service is second to none. The website is easy to navigate .Will definitely shop here again!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>korean boy</h3>
            </div>

        </div>

    </section>











    <?php @include 'footer.php'; ?>

    <script src="js/script.js"></script>

</body>

</html>