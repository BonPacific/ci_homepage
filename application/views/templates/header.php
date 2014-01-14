<html>
<head>
    <title><?php echo $title; ?> - Page Bonifaci</title>
    <link rel="stylesheet" href="<?php echo(CSS.'bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo(CSS.'global.css'); ?>">
    <link rel="stylesheet" href="<?php echo(CSS.'responsive.css'); ?>">
    <link rel="stylesheet" href="<?php echo(CSS.'theme.css'); ?>">
    <link rel="stylesheet" href="<?php echo(CSS.'blog.css'); ?>">
    <link rel="stylesheet" href="<?php echo(CSS.'messages.css'); ?>">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:400,300,100"></link>
</head>
<body>
<header>
    <div class="messages-container">
        <input type=checkbox />
        <div class="messages">
            <?php if (isset($_SESSION)) {foreach($_SESSION['page_system']['messages'] as $message) { ?>
                <div class="message <?php echo $message['source']; ?>">
                    <div class="message-content">
                        <?php echo $message['content']; ?>
                    </div>
                </div>
            <?php }} else { ?>
                <div class="message">
                    No Errors
                </div>
            <?php } ?>
        </div>
    </div>
    <h1>Hello, my name is <b>Page Bonifaci</b></h1>
    <h2>I am a Web Developer from the beautiful Pacific Northwest</h2>
    <div class="img-gradient"></div>
    <img src="<?php echo(IMG.'header-branches-wide.jpg'); ?>"></img>
    <nav>
        <ul class="top-nav">
            <li class="<?php echo ($current == 'blog') ? 'current' : '';?>">
                <a href="<?php echo(URL.'index.php/blog/all');?>">Blog</a>
            </li>
            <li class="<?php echo ($current == 'projects') ? 'current' : '';?>">
                <a href="<?php echo(URL.'index.php/projects/all');?>">Projects</a>
            </li>
            <li class="<?php echo ($current == 'resume') ? 'current' : '';?>">
                <a href="<?php echo(URL.'index.php/resume');?>">Resume</a>
            </li>
        </ul>
    </nav>
</header>
<section class="content">