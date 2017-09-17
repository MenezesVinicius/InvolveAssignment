<?php
include("includes/includes.php");
$blogPosts = GetBlogPosts();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gama Tech Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <!--<a class="navbar-brand" href="index.html">Start Bootstrap</a>-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-primary" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg2.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1 class="text-primary">dOOb</h1>
                    <h1 class="text-dark">Tech Blog</h1>
                    <span class="subheading text-primary">A Blog by Gama of Thrones Team</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 mx-auto">
            <?php
            foreach ($blogPosts as $post) {
                echo "<div class='post-preview'>";
                echo "<a href='post.html'>";
                echo "<h2 class='post-title'>" . $post->title . "</h2>";
                echo "</a>";
                echo "<p>" . $post->post . "</p>";
                echo "<span class='footer'> Posted By: " . $post->author . "</span>";
                echo "<p class='post-meta'> Posted On: " . $post->datePosted . "</p>";
                echo "</div>";
                echo "<hr>";
            }
            ?>

<!--            <div class="post-preview">-->
<!--                <a href="post.html">-->
<!--                    <h2 class="post-title">-->
<!--                        Man must explore, and this is exploration at its greatest-->
<!--                    </h2>-->
<!---->
<!--                    <h3 class="post-subtitle">-->
<!--                        Problems look mighty small from 150 miles up-->
<!--                    </h3>-->
<!--                </a>-->
<!---->
<!--                <p class="post-meta">Posted by-->
<!--                    <a href="#">Start Bootstrap</a>-->
<!--                    on September 24, 2017</p>-->
<!--            </div>-->
<!--            <hr>-->
<!---->

        </div>

        <div class="col-lg-4 col-md-4 mx-auto">
            <p>Quer ganhar um Ebook com as dicas mais topper do mercado? Preencha o formulário e ganhe um link para
                realizar o download agora mesmo!</p>
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name" id="name" required
                               data-validation-required-message="Please enter your name.">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Email Address</label>
                        <input type="email" class="form-control" placeholder="Email Address" id="email" required
                               data-validation-required-message="Please enter your email address.">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                <br>

                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary" id="sendMessageButton">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>

<hr>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; Your Website 2017</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/clean-blog.min.js"></script>

</body>

</html>
