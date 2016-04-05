<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="<?= i18n::html_lang() ?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="<?= i18n::html_lang() ?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="<?= i18n::html_lang() ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?= i18n::html_lang() ?>"> <!--<![endif]-->
    <head>
        <?=
        View::factory('header_metas', array('title' => $title,
            'meta_keywords' => $meta_keywords,
            'meta_description' => $meta_description,
            'meta_copyright' => $meta_copyright,))
        ?>
        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 7]><link rel="stylesheet" href="//blueimp.github.com/cdn/css/bootstrap-ie6.min.css"><![endif]-->
        <!--[if lt IE 9]>
          <script type="text/javascript" src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <![endif]-->
        <?= Theme::styles($styles) ?>
        <?= Theme::scripts($scripts) ?>
        <?= core::config('general.html_head') ?>
        <!--<? View::factory('analytics')?>-->
        <script type="text/javascript">
            var baseURL = '<?= URL::base() ?>';
            var userLang = '<?= Cookie::get('user_language');?>';
        </script>
    </head>

    <body data-spy="scroll" data-target=".subnav" data-offset="50">

        <?= View::factory('alert_terms') ?>

        <?= $header ?>
        <div class="alert alert-warning off-line" style="display:none;"><strong><?= __('Warning') ?>!</strong> <?= __('We detected you are currently off-line, please connect to gain full experience.') ?></div>
        <div class="uk-width-1-1">
            <div id="uk-container">
                <?= $content ?>
            </div>
        </div>

        <?= $footer ?>

        <?= Theme::scripts($scripts, 'footer') ?>
        <?= core::config('general.html_footer') ?>
        <? Alert::notify() ?>

        <?= (Kohana::$environment === Kohana::DEVELOPMENT) ? View::factory('profiler') : '' ?>
    </body>
</html>
