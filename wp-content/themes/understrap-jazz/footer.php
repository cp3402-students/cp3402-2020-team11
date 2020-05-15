<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');

get_bloginfo($show = 'name', $filter = 'raw');
$bloginfo = get_bloginfo($show, $filter);

function last_updated_date()
{
    $u_time = get_the_time('U');
    $u_modified_time = get_the_modified_time('U');
    if ($u_modified_time >= $u_time + 86400) {
        $updated_date = get_the_modified_time('F jS, Y');
        $info = ' - Last updated on ' . $updated_date . '';
    }

    return $info;
}

add_filter('the_content', 'last_updated_date');
?>


<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<div class="wrapper" id="wrapper-footer">

    <div class="<?php echo esc_attr($container); ?>">

        <div class="row">

            <div class="col-md-12">

                <footer class="site-footer" id="colophon">

                    <div class="site-info">

                        <p>&copy <?php echo($bloginfo);
                            echo last_updated_date() ?></p> <!-- TODO include link to privacy policy-->

                    </div><!-- .site-info -->

                </footer><!-- #colophon -->

            </div><!--col end -->

        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

