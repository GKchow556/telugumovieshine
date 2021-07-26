<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content=" " />
    <meta name="keywords" content=" " />
    <?php include ('include/head.html'); ?>
</head>

<body class="sticky-header" onload="display_c();">
    <div class="body-innerwrapper">
        <header>
            <?php include ('include/header.html') ?>
        </header>
        <section class="main-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <?php include('include/prabhanews-content.html') ?>
                    </div>
                    <div class="col-sm-3">
                        <?php include('include/asside.html') ?>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <?php include('include/footer.html') ?>
        </footer>
        <?php include('include/mobile-menu.html') ?>
    </div>
    <?php include('include/scripts.html') ?>
</body>

</html>