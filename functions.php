<?php
// ...existing code...

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('kapidasatin-style', get_stylesheet_uri());
    wp_enqueue_script('kapidasatin-main', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
});

// Menü desteği ekleme
register_nav_menus(array(
    'header-menu' => __('Header Menu', 'kapida-satin'),
    'quick-menu' => __('Quick Menu', 'kapida-satin'),
    'footer-menu' => __('Footer Menu', 'kapida-satin'),
));

function enqueue_custom_scripts() {
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

function register_customer_review_post_type() {
    register_post_type('customer_review', [
        'labels' => [
            'name' => 'Müşteri Değerlendirmeleri',
            'singular_name' => 'Müşteri Değerlendirmesi'
        ],
        'public' => false,
        'show_ui' => true,
        'supports' => ['title', 'custom-fields'],
        'capability_type' => 'post',
    ]);
}
add_action('init', 'register_customer_review_post_type');

function handle_customer_review_submission() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['rating'], $_POST['comment'])) {
        $post_id = wp_insert_post([
            'post_type' => 'customer_review',
            'post_status' => 'pending',
            'post_title' => sanitize_text_field($_POST['name'] . ' ' . $_POST['surname']),
        ]);

        if ($post_id) {
            update_post_meta($post_id, 'name', sanitize_text_field($_POST['name']));
            update_post_meta($post_id, 'surname', sanitize_text_field($_POST['surname']));
            update_post_meta($post_id, 'email', sanitize_email($_POST['email']));
            update_post_meta($post_id, 'rating', intval($_POST['rating']));
            update_post_meta($post_id, 'comment', sanitize_textarea_field($_POST['comment']));
        }
    }
}
add_action('template_redirect', 'handle_customer_review_submission');

// Üyelik sistemini aktif hale getirme
function enable_membership() {
    if (!get_option('users_can_register')) {
        update_option('users_can_register', 1);
    }
}
add_action('init', 'enable_membership');

// Kayıt ve giriş sayfaları için kısa kodlar
function custom_registration_form() {
    ob_start();
    ?>
    <form method="post" action="<?php echo wp_registration_url(); ?>">
        <label for="user_login">Kullanıcı Adı:</label>
        <input type="text" id="user_login" name="user_login" required>

        <label for="user_email">E-posta:</label>
        <input type="email" id="user_email" name="user_email" required>

        <button type="submit" class="btn">Kayıt Ol</button>
    </form>
    <?php
    return ob_get_clean();
}
add_shortcode('custom_registration_form', 'custom_registration_form');

function custom_login_form() {
    ob_start();
    ?>
    <form method="post" action="<?php echo wp_login_url(); ?>">
        <label for="log">Kullanıcı Adı:</label>
        <input type="text" id="log" name="log" required>

        <label for="pwd">Şifre:</label>
        <input type="password" id="pwd" name="pwd" required>

        <button type="submit" class="btn">Giriş Yap</button>
    </form>
    <?php
    return ob_get_clean();
}
add_shortcode('custom_login_form', 'custom_login_form');


// Register custom post type for products
function register_product_post_type() {
    $labels = array(
        'name' => 'Ürünler',
        'singular_name' => 'Ürün',
        'add_new' => 'Yeni Ürün Ekle',
        'add_new_item' => 'Yeni Ürün Ekle',
        'edit_item' => 'Ürünü Düzenle',
        'new_item' => 'Yeni Ürün',
        'view_item' => 'Ürünü Görüntüle',
        'search_items' => 'Ürün Ara',
        'not_found' => 'Ürün Bulunamadı',
        'not_found_in_trash' => 'Çöp Kutusunda Ürün Bulunamadı',
        'all_items' => 'Tüm Ürünler',
        'archives' => 'Ürün Arşivleri',
        'insert_into_item' => 'Ürüne Ekle',
        'uploaded_to_this_item' => 'Bu Ürüne Yüklenenler',
        'featured_image' => 'Öne Çıkan Görsel',
        'set_featured_image' => 'Öne Çıkan Görseli Ayarla',
        'remove_featured_image' => 'Öne Çıkan Görseli Kaldır',
        'use_featured_image' => 'Öne Çıkan Görseli Kullan',
        'menu_name' => 'Ürünler',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-cart',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
    );

    register_post_type('product', $args);
}
add_action('init', 'register_product_post_type');

function add_product_meta_boxes() {
    add_meta_box('product_details', 'Ürün Detayları', 'render_product_meta_box', 'product', 'normal', 'high');
}
add_action('add_meta_boxes', 'add_product_meta_boxes');

function render_product_meta_box($post) {
    $price = get_post_meta($post->ID, 'price', true);
    $tags = get_post_meta($post->ID, 'tags', true);
    $letgo_link = get_post_meta($post->ID, 'letgo_link', true);
    $sahibinden_link = get_post_meta($post->ID, 'sahibinden_link', true);
    $colors = get_post_meta($post->ID, 'colors', true);
    ?>
    <label for="price">Fiyat:</label>
    <input type="text" id="price" name="price" value="<?php echo esc_attr($price); ?>">

    <label for="tags">Etiketler:</label>
    <input type="text" id="tags" name="tags" value="<?php echo esc_attr($tags); ?>">

    <label for="letgo_link">Letgo İlan Linki:</label>
    <input type="url" id="letgo_link" name="letgo_link" value="<?php echo esc_attr($letgo_link); ?>">

    <label for="sahibinden_link">Sahibinden İlan Linki:</label>
    <input type="url" id="sahibinden_link" name="sahibinden_link" value="<?php echo esc_attr($sahibinden_link); ?>">

    <label for="colors">Renk Seçenekleri:</label>
    <input type="text" id="colors" name="colors" value="<?php echo esc_attr($colors); ?>">
    <?php
}

function save_product_meta($post_id) {
    if (isset($_POST['price'])) {
        update_post_meta($post_id, 'price', sanitize_text_field($_POST['price']));
    }
    if (isset($_POST['tags'])) {
        update_post_meta($post_id, 'tags', sanitize_text_field($_POST['tags']));
    }
    if (isset($_POST['letgo_link'])) {
        update_post_meta($post_id, 'letgo_link', esc_url($_POST['letgo_link']));
    }
    if (isset($_POST['sahibinden_link'])) {
        update_post_meta($post_id, 'sahibinden_link', esc_url($_POST['sahibinden_link']));
    }
    if (isset($_POST['colors'])) {
        update_post_meta($post_id, 'colors', sanitize_text_field($_POST['colors']));
    }
}
add_action('save_post', 'save_product_meta');

// Add custom menu items for the newly created pages
function add_custom_menu_items() {
    register_nav_menus([
        'custom-menu' => __('Custom Menu')
    ]);
}
add_action('init', 'add_custom_menu_items');



// Attachment sayfalarını görünüme değil dosyaya yönlendir
add_action('template_redirect', function() {
  if (is_attachment()) {
    global $post;
    if ($post && wp_get_attachment_url($post->ID)) {
      wp_redirect(wp_get_attachment_url($post->ID), 301);
      exit;
    } else {
      wp_redirect(home_url('/'), 301);
      exit;
    }
  }
});

// Emojiyi kapat (gereksiz http istekleri)
add_action('init', function(){
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_print_styles', 'print_emoji_styles');
});

// jQuery’yi footer’a taşı (temana göre test et)
add_action('wp_enqueue_scripts', function() {
  if (wp_script_is('jquery', 'registered')) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', includes_url('/js/jquery/jquery.min.js'), [], null, true);
    wp_enqueue_script('jquery');
  }
}, 100);

// Preload kritik font/görsel (örnek)
add_action('wp_head', function () {
  echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>'."\n";
  echo '<link rel="preload" as="image" href="'.esc_url( get_template_directory_uri().'/assets/img/hero.jpg').'" fetchpriority="high">'."\n";
}, 2);

// Ek resim boyutları (liste/grid için anlamlı oranlar)
add_image_size('card-lg', 1200, 675, true);  // 16:9
add_image_size('card-md', 800, 450, true);
add_image_size('square-md', 800, 800, true);

// WebP desteğini açık tut (WP zaten WebP destekler)
add_filter('wp_image_editors', function($editors){
  return $editors; // çekirdeğin varsayılanlarını bırak
});

// Alt metin fallback: alt yoksa başlık kullan
add_filter('wp_get_attachment_image_attributes', function($attr, $attachment){
  if (empty($attr['alt'])) {
    $attr['alt'] = trim(wp_strip_all_tags(get_the_title($attachment->ID)));
  }
  return $attr;
}, 10, 2);

// Medya dosya adlarını SEO uyumlu hale getir (yükleme anında)
add_filter('sanitize_file_name', function($filename){
  $info = pathinfo($filename);
  $ext  = !empty($info['extension']) ? '.' . $info['extension'] : '';
  $name = sanitize_title($info['filename']); // türkçe karakterleri çevirir
  return $name . $ext;
}, 10);

// ORGANIZATION / LOCAL BUSINESS (global)
add_action('wp_head', function () {
  $org = [
    "@context" => "https://schema.org",
    "@type"    => "Organization", // veya "LocalBusiness" / "ElectronicsStore" uygun olanı seç
    "name"     => "Kapıda Satın",
    "url"      => home_url('/'),
    "logo"     => get_template_directory_uri()."/assets/img/logo-512.png",
    "sameAs"   => [
      "https://www.facebook.com/...", 
      "https://www.instagram.com/...",
      "https://x.com/..."
    ],
    "contactPoint" => [[
      "@type" => "ContactPoint",
      "telephone" => "+90-xxx-xxx-xx-xx",
      "contactType" => "customer service",
      "areaServed"  => "TR",
      "availableLanguage" => ["Turkish"]
    ]]
  ];
  echo '<script type="application/ld+json">'.wp_json_encode($org, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES).'</script>'."\n";
}, 20);

// WEBSITE + SEARCHACTION (site içi arama varsa)
add_action('wp_head', function () {
  $site = [
    "@context" => "https://schema.org",
    "@type"    => "WebSite",
    "url"      => home_url('/'),
    "name"     => get_bloginfo('name'),
    "potentialAction" => [
      "@type" => "SearchAction",
      "target" => home_url('/')."?s={search_term_string}",
      "query-input" => "required name=search_term_string"
    ]
  ];
  echo '<script type="application/ld+json">'.wp_json_encode($site, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES).'</script>'."\n";
}, 21);

// ARTICLE (tekil yazı)
add_action('wp_head', function () {
  if (!is_single()) return;
  global $post;
  $img = (has_post_thumbnail($post) ? wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full') : null);
  $data = [
    "@context" => "https://schema.org",
    "@type"    => "Article",
    "headline" => get_the_title(),
    "datePublished" => get_the_date('c'),
    "dateModified"  => get_the_modified_date('c'),
    "author" => [
      "@type" => "Person",
      "name"  => get_the_author_meta('display_name', $post->post_author)
    ],
    "mainEntityOfPage" => get_permalink(),
  ];
  if ($img) {
    $data["image"] = [$img[0]];
  }
  echo '<script type="application/ld+json">'.wp_json_encode($data, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES).'</script>'."\n";
}, 22);

// 1) Title tag WP çekirdeğinden gelsin
add_theme_support('title-tag');

// 2) Canonical (WP 5.5+ wp_get_canonical_url var)
add_action('wp_head', function () {
  if (is_singular()) {
    $canonical = wp_get_canonical_url();
  } else {
    $canonical = home_url(add_query_arg(null, null));
  }
  if ($canonical) {
    echo '<link rel="canonical" href="'.esc_url($canonical).'" />'."\n";
  }
}, 5);

// 3) Meta description (öncelik: excerpt / ACF seo_desc / özet)
function ks_meta_description() {
  if (is_singular() && has_excerpt()) {
    $d = get_the_excerpt();
  } elseif (is_singular() && function_exists('get_field') && get_field('seo_desc')) {
    $d = get_field('seo_desc');
  } elseif (is_home() || is_front_page()) {
    $d = get_bloginfo('description');
  } else {
    $d = wp_strip_all_tags(get_bloginfo('description'));
  }
  $d = wp_trim_words($d, 40, '');
  return esc_attr($d);
}
add_action('wp_head', function () {
  echo '<meta name="description" content="'.ks_meta_description().'" />'."\n";
}, 6);

// 4) Open Graph + Twitter Card
add_action('wp_head', function () {
  global $post;
  $title = wp_get_document_title();
  $desc  = ks_meta_description();
  $url   = (is_singular() ? get_permalink() : home_url('/'));
  // Görsel
  if (is_singular() && has_post_thumbnail()) {
    $img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
    $img_url = $img ? $img[0] : '';
  } else {
    // Temel bir varsayılan site görseli ekle
    $img_url = get_template_directory_uri().'/assets/img/og-default.jpg';
  }
  echo '<meta property="og:type" content="'.(is_singular() ? 'article' : 'website').'" />'."\n";
  echo '<meta property="og:title" content="'.esc_attr($title).'" />'."\n";
  echo '<meta property="og:description" content="'.esc_attr($desc).'" />'."\n";
  echo '<meta property="og:url" content="'.esc_url($url).'" />'."\n";
  echo '<meta property="og:image" content="'.esc_url($img_url).'" />'."\n";
  echo '<meta name="twitter:card" content="summary_large_image" />'."\n";
  echo '<meta name="twitter:title" content="'.esc_attr($title).'" />'."\n";
  echo '<meta name="twitter:description" content="'.esc_attr($desc).'" />'."\n";
  echo '<meta name="twitter:image" content="'.esc_url($img_url).'" />'."\n";
}, 7);


// Optimize edilmiş menü ekleme işlemi
function add_pages_to_menu() {
    $menu_name = 'custom-menu';
    $menu_exists = wp_get_nav_menu_object($menu_name);

    if (!$menu_exists) {
        $menu_id = wp_create_nav_menu($menu_name);

        $pages = [
            ['title' => __('Üye Girişi'), 'slug' => 'login'],
            ['title' => __('Kayıt Ol'), 'slug' => 'register'],
            ['title' => __('Hesabım'), 'slug' => 'my-account'],
            ['title' => __('Sepetim'), 'slug' => 'cart'],
            ['title' => __('Ödeme'), 'slug' => 'checkout']
        ];

        foreach ($pages as $page) {
            $page_id = get_page_by_path($page['slug']);
            if ($page_id) {
                wp_update_nav_menu_item($menu_id, 0, [
                    'menu-item-title' => $page['title'],
                    'menu-item-object' => 'page',
                    'menu-item-object-id' => $page_id->ID,
                    'menu-item-type' => 'post_type',
                    'menu-item-status' => 'publish'
                ]);
            }
        }
    }
}
add_action('after_setup_theme', 'add_pages_to_menu');

function enqueue_jquery_ui() {
    wp_enqueue_script('jquery-ui-accordion');
    wp_enqueue_style('jquery-ui-css', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css');
}
add_action('wp_enqueue_scripts', 'enqueue_jquery_ui');
?>