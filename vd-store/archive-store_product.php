<?php
/**
 * Arsip produk VD Store (/produk/) bertampilan Toko 13.
 *
 * @package justg
 */

defined('ABSPATH') || exit;

if (is_search()) {
    velocity_toko13_arsip_produk(sprintf('Hasil Pencarian: "%s"', get_search_query(false)), 'Produk tidak ditemukan.');
} else {
    velocity_toko13_arsip_produk(post_type_archive_title('', false) ?: 'Produk');
}
