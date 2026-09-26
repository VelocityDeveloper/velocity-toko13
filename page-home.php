<?php

/**
 * Template Name: Home Template
 *
 * Beranda Toko 13: slider, judul situs, 12 produk VD Store terbaru berpaginasi.
 *
 * @package justg
 */

get_header();
$sliders = velocity_toko13_slider();
?>
<div class="wrapper py-md-3 p-md-0 p-2 bg-gray" id="page-wrapper">
    <div id="content">
        <div class="row mx-auto">
            <?php do_action('justg_before_content'); ?>
            <main class="site-main" id="main" role="main">

                <?php if ($sliders) : ?>
                    <div id="carouselExampleInterval" class="carousel slide border" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php foreach ($sliders as $i => $slider) : ?>
                                <div class="carousel-item<?php echo $i ? '' : ' active'; ?>" data-bs-interval="3000">
                                    <img class="w-100" src="<?php echo esc_url($slider); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php if (count($sliders) > 1) : ?>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <h3 class="title-single-part"><?php echo esc_html(trim(get_option('blogname') . '-' . get_option('blogdescription'), ' -')); ?></h3>
                <div class="produk-home">
                    <?php
                    $paged = (get_query_var('page')) ? get_query_var('page') : 1;
                    $produk_query = new WP_Query(array(
                        'posts_per_page' => 12,
                        'post_type' => 'store_product',
                        'paged' => $paged,
                    ));

                    if ($produk_query->have_posts()) :
                        velocity_toko13_grid_produk($produk_query);
                        echo '<div class="pagination pagi-home">';
                        echo paginate_links([
                            'total' => $produk_query->max_num_pages,
                            'current' => $paged,
                            'prev_text' => __('&laquo; Prev'),
                            'next_text' => __('Next &raquo;'),
                        ]);
                        echo '</div>';
                    endif;
                    ?>
                </div>
            </main><!-- #main -->
            <?php do_action('justg_after_content'); ?>
        </div>
    </div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
