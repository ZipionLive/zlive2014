<!doctype html>
<html>
    <?php include(TEMPLATEPATH . '/head.php'); ?>
    <body>
        <div id="max" class="container">
            <?php get_header(); ?>
            <div id="site_body" class="grid_12">
                <section id="content" class="alpha grid_9">
                    <?php include(TEMPLATEPATH . '/loop.php'); ?>
                </section>
                <?php get_sidebar(); ?>
            </div>
            <?php get_footer(); ?>
        </div>
    </body>
</html>