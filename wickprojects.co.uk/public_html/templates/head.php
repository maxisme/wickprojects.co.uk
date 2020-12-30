<html>
<head>
    <!-- Custom META -->
    <meta name="keywords" content="Project management, design and build, project management london, Hackney, London, Jack Mitchell, design, interior design, Wick projects, design, interior design, Architecture,hackney designers, refurbishments, refurbishment, property development, refurb, refresh, commercial refurbishment, shopfitting, new space, design and build, build, new build">
    <meta name="description" content="Wick projects Ltd is a local design and build company founded by Jack Mitchell">
    <title>Wick Projects | <?php echo $_GET['title'] ?></title>

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/fonts/fonts.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.min.css" />
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <a href="/" class="brand-logo right"><img src="/images/Wick%20Projects%20Logo.png" style="
    height: 50px;
    width: 110px;
    top-margin: 5px;
"></img></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="/work">Work</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="/work">Work</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    <div align="center" class="info">
        <?php echo "<span class='min-title'>".$_GET['title']."</span>"; ?>







