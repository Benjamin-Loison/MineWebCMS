<?php 
$this->Connect = new ConnectComponent;
$theme_config = file_get_contents(ROOT.'/app/View/Themed/Mineweb/config/config.json');
$theme_config = json_decode($theme_config, true);
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Eywek">

    <title><?= $title_for_layout; ?> - <?= $Configuration->get('name') ?></title>

    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('modern-business.css') ?>
    <?= $this->Html->css('animate.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('mineweb') ?>
	<?= $this->Html->css('../font-awesome-4.1.0/css/font-awesome.min.css') ?>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Rambla' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<?= $this->Html->script('jquery-1.11.0.js') ?>
    <?= $this->Html->script('easy_paginate.js') ?>

    <link rel="icon" type="image/png" href="<?= $theme_config['favicon_url'] ?>" />
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body><!-- grey.png -->
    <?= $this->element($theme_config['navbar']) ?>

            <?php 
            $flash = $this->Session->flash();
            if(!empty($flash)) { ?><br><br><br>
              <div class="container">
                <?= html_entity_decode($flash) ?>
              </div>
            <?php } ?>
            <?= $this->fetch('content'); ?>
        <!-- Footer -->
    </div>
        <footer>
            <div class="container">
                <p><?= $Lang->get('COPYRIGHT') ?></p>
            </div>
        </footer>
    
    <?= $this->element('modals') ?>

    <?= $this->Html->script('jquery-1.11.0.js') ?>
    <?= $this->Html->script('bootstrap.js') ?>
    <?= $this->Html->script('app.js') ?>

    <?= $this->element('ajax') ?>

</body>

</html>