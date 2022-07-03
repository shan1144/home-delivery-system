

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'index _style.php' ?>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
    <title>Food deliver System</title>
</head>

<body>
    <!-- Header -->
    <header id="header">
        <div class="nav-bar">
            <div class="brand">
                <img src="img/logo.png" alt="">
            </div>
            <div class="nav-list">
                <ul>
                    <li><a href="index.php" data-after="Home">Home</a></li>
                    <li><a href="#services-container" data-after="Service">Services</a></li>
                    <li><a href="#projects" data-after="Profile">Profile</a></li>
                    <li><a href="login.html" data-after="Logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </header>
    <!-- End Header -->


    <!-- home Section  -->
    <section id="home">

        <h1 class="heading">Welcome to Food For You</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            voluptatibus numquam id dolorem maxime, dolores similique
            quae ducimus non nisi!</p>

    </section>
    <!-- End home Section  -->
    <h2>Update Your Profile</h2>
    <table>
        <tr>
            <td> <label for="username">Name</label></td>
            <td>
                <input type="text" placeholder="Name" name="username">
            </td>
        </tr>
        <tr>
            <td><label for="username">Email</label></td>
            <td><input type="text" placeholder="Email " name="email"></td>
        </tr>
<tr>
    <td><label for="password">Password</label> </td>
    <td> <input type="password" placeholder="Password" name="password"></td>
</tr>
<tr>
    <td><button type="button" class="btn btn-primary"><a href="index.html">Update</a></button>
    </td>
</tr>

    </table>


    <!-- Footer -->

    <footer id="footer">
        <div class="footer-div">
            <h2>Social Medial Account</h2>
            <div class="social-icon">
                <a href="#"><img src="img/facebook.png" /></a>
                <a href="#"><img src="img/instagram.png" /></a>
                <a href="#"><img src="img/twitter.png" /></a>
            </div>
        </div>
    </footer>