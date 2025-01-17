<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/template.css" />
    <link rel="stylesheet" type="text/css" href="./assets/navbar.css" />
</head>

<body>
    <nav class="navbar">
        <span class="navbar-toggle" id="js-navbar-toggle">
    <i class="fa fa-bars" style="padding-top:7px;"></i>
    </span>
        <a href="#home" class="logo">
            <img src="./assets/logo.png" style="width: 280px;height:50px; margin-left:0; float:left" ;></a>
        <ul class="main-nav" id="js-menu">
            <li>
                <a href="#aboutus" class="nav-links" style="padding :5px;"> About Us</a>
            </li>

            <li>
                <a href="#contactUs" class="nav-links" style="padding :5px;">Contact Us</a>
            </li>
            <li>
                <a href="#singup" class="nav-links buttons ">Sign Up</a>
            </li>
            <li>
                <a href="formone.php" class="nav-links buttons ">Sign Up</a>
            </li>
        </ul>
    </nav>



    <script>
        let mainNav = document.getElementById('js-menu');
        let navBarToggle = document.getElementById('js-navbar-toggle');
        navBarToggle.addEventListener('click', function() {
            mainNav.classList.toggle('active');
        });
    </script>


    <!--Footer here-->
    <section>
        <h3></h3>
    </section>
    <div class="footer">
        <div id="button"></div>
        <div id="container">
            <div id="cont">
                <div class="footer_center">
                    <h3>Footer</h3>
                </div>
            </div>
        </div>
    </div>
</body>

</html>