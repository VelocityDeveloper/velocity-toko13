Velocity Child Theme Paket Toko Online Toko 13
=================
[toko13.velocitydeveloper.com](https://toko13.velocitydeveloper.com/)

Child Theme for the Velocity System WordPress theme.

### Required
Theme Velocity versi 2.7.0 keatas, [Download](https://github.com/VelocityDeveloper/velocity/releases)

### Required Plugins
**VD Store**, [Download](https://github.com/Velocity-Developer/vd-store/releases) — produk `store_product`,
kategori `store_product_cat`, merek `brand`. Sejak 1.1.0 tema tidak lagi memakai plugin Velocity Toko
maupun Kirki.

Integrasi VD Store ada di `inc/vd-store.php`, `css/vd-store.css`, dan template override di folder
`vd-store/` (arsip, kategori, merek, detail produk). Pencarian situs diarahkan ke arsip produk.

| Velocity Toko (≤1.0.x) | VD Store (1.1.0) |
|---|---|
| `[harga]` | `[wp_store_price]` |
| `[beli]` | `[wp_store_add_to_cart]` |
| `[cart]` | `[wp_store_cart]` |
| `[profile]` | ikon ke halaman Profil Saya VD Store (`velocity_toko13_profil()`) |
| `[kontak]` | kontak dari pengaturan VD Store (`velocity_toko13_kontak()`) |
| `[thumbnail]` | `[wp_store_thumbnail]` (label & diskon dari VD Store) |
| `[slider-produk]` | `[wp_store_gallery]` |
| `[detail-produk]` | `[wp_store_product_info]` |
| `[love]` | `[wp_store_add_to_wishlist]` |
| `[beli-lain]` | `velocity_toko13_beli_lain()` |
| `[share]` | `[velocity-sharepost]` (Velocity Addons) |
| filter kategori | `[wp_store_filters]` |

### Widget
Shortcode untuk widget Teks (susunan demo, dibaca installer lewat `velocity_tema_widget_sidebar()` dan
`velocity_tema_widget_footer()`):

- Sidebar (kanan): `[toko13_cari_produk]`, `[toko13_bank]`, `[toko13_ekspedisi]`, `[toko13_produk_terbaru jumlah="5"]`, `[toko13_best_seller jumlah="5"]`, `[toko13_sosmed facebook="…" twitter="…" instagram="…" youtube="…"]`, `[toko13_kalender]`
- Footer (gelap): `[toko13_facebook url="…"]`, `[toko13_info_terbaru]`, `[toko13_testimoni jumlah="5"]` (ulasan produk VD Store), `[toko13_kontak]`
- Lainnya: `[toko13_kategori]`

### Customizer
Appearance > Customize > **Velocity Toko 13**: Warna (utama & sekunder), Slider Home (5 slot gambar),
Font (judul & teks, Google Fonts; bawaan judul font sistem, teks Poppins).
Logo: Site Identity. Warna teks/judul/link: Theme Colors tema induk. Latar website: pengaturan Background
tema induk. Halaman beranda memakai template **Home Template** (slider + 12 produk berpaginasi), halaman
pricelist template **Velocity Toko Pricelist**, halaman katalog template **Velocity Toko 13 Katalog**.
Halaman Katalog & Profil Saya VD Store selalu tanpa sidebar.

### Usage
Simply download the zip and upload the zip (velocity-toko13.zip) under your WordPress dashboard at Appearance > Themes. Or extract and upload via FTP at wp-content/themes/.
