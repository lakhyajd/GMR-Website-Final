<?php
$root = 'http://localhost';

$title = perch_layout_var('title', true);
$entry_title = perch_layout_var('entry_title', true);

$entry = (strlen($entry_title) > 0) ? true : false;
$entry_description = perch_layout_var('entry_description', true);
$page = perch_layout_var('page', true);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if ($entry) {  echo $entry_title . ' | '; } if ($page != "home" ) { perch_pages_title(); ?> | <?php } ?>Galway Music Residency</title>
    <meta name="description" content="<?php if (strlen($description) > 0) { echo $description; } else { echo ''; } ?>" />
    <link href="/newElements/css/bootstrap.min.css" rel="stylesheet">
    <link href="/newElements/css/styles.css?<?php echo rand(); ?>" rel="stylesheet">
    <link href="/newElements/css/flexslider.css" rel="stylesheet">
    <link href="/newElements/css/glightbox.css" rel="stylesheet">
</head>

<body style="top:0">
    <div class="picture">
        <div class="mainheader" id="MainHeaderBar">
            <div id="nav-toggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerBurger" aria-expanded="false" onclick="changeBurgerMenu(this)">
                <div class="stripe1"></div>
                <div class="stripe2"></div>
                <div class="stripe3"></div>
            </div>
            <a href="../../../newElements/index.php" target="_self">
                <img src="pictures\header\the_galway_music_residency.jpg" alt="logo" class="mainHeaderLogo">
            </a>
            <div class="mainHeaderContainer">
                <nav id="headerBurger" class="collapse navbar-collapse">
                    <ul class="mainHeaderNav">
                        <li class="<?php if ($page == "home") echo 'currentPageHeader'; ?>"><a href="../../../newElements/index.php" target="_self">HOME</a></li>
                        <li class="<?php if ($page == "about") echo 'currentPageHeader'; ?>"><a href="../../../newElements/about.php" target="_self">ABOUT</a></li>
                        <li class="<?php if ($page == "contempo") echo 'currentPageHeader'; ?>"><a href="../../../newElements/conTempo.php" target="_self">ENSAMBLE IN RESIDENCE</a></li>
                        <li class="<?php if ($page == "events" ) echo 'currentPageHeader'; ?>"><a  href="../../../newElements/events.php?new=1" target="_self">EVENTS</a></li>
                        <li class="<?php if ($page == "education") echo 'currentPageHeader'; ?>"><a href="../../../newElements/education.php" target="_self">EDUCATION</a></li>
                        <li class="<?php if ($page == "support") echo 'currentPageHeader'; ?>"><a href="../../../newElements/support.php" target="_self">SUPPORT</a></li>
                        <li class="<?php if ($page == "gallery") echo 'currentPageHeader'; ?>"><a href="../../../newElements/gallery.php" target="_self">GALLERY</a></li>
                        <li class="<?php if ($page == "news") echo 'currentPageHeader'; ?>"><a href="../../../newElements/news.php" target="_self">NEWS</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
