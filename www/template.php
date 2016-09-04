<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $html_head_title;?></title>
        <link rel="stylesheet" href="<?php echo $basePath; ?>/styles/reset.css">
        <link rel="stylesheet" href="<?php echo $basePath; ?>/styles/main.css">
<?php echo $html_localCSS; ?>

<?php include_once "_system/googleanalytics.html"; ?>
    </head>
    <body>


<?php 
if ($html_showHeader === true) : ?>

        <header class="header-global">
            <div class="container hover-color1">
                <a href="<?php echo $basePath; ?>">Sergey Golitsynskiy</a>
                <nav class="global hover-color1 float-r">
                    <ul>
                        <li><a href="<?php echo $basePath; ?>/teaching">Teaching</a></li> 
                        <li><a href="<?php echo $basePath; ?>/research">Research</a></li>
                        <li><a href="<?php echo $basePath; ?>/personal">Personal</a></li>
                    </ul>
                </nav>
            </div>
        </header>

<?php 
    
endif; 

if ($html_showBreadcrumbs === true) : ?>

        <nav class="container breadcrumbs hover-color1">
            <?php echo $html_breadcrumbs; ?>
        </nav>

<?php 
else :
    echo "\t" . "<div style='height:23px;'></div>"; 
endif;
?>

        <header class="container header-site hover-color1">
            <h1><a href="<?php echo $basePath . $html_section_title_l_href; ?>"><?php echo $html_section_title_l; ?></a></h1>
<?php
if ($html_section_title_r !== "") {
    echo '<h2 class="right">' . $html_section_title_r . '</h2>';
}
?>
        </header>

        <div class="container">
            <article class="content">
      
<?php 
if (!empty($html_page_title)) {
    echo '<h3>' . $html_page_title . '</h3>' . "\n";
}
require $physicalPath; 
?>

            </article>
        </div>

        <footer class="container hover-color1">
        <a href="<?php echo $homePath; ?>">Sergey Golitsynskiy</a>
            <address><a href="mailto:sergey@uni.edu">sergey@uni.edu</a></address>
            <div class="lastModified"><?php echo "Website last modified: " . $html_lastmodified; ?></div>
        </footer>

    </body>
</html>
