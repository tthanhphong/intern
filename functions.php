<?php 
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}
function register_my_menu(){
    register_nav_menu('header-menu', __('Main Menu'));

    if(function_exists('register_sidebar')){
        register_sidebar(array(
            'name' => 'Cột bên',
            'id' => 'sidebar',
        ));
    }
}
add_action('init', 'register_my_menu');

function custom_contact_form($atts) {
    ob_start();

    $atts = shortcode_atts(array(
        'recipient' => 'ttp15112001@gmail.com'
    ), $atts);

    if (isset($_POST['submit'])) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);

        // Xử lý dữ liệu biểu mẫu ở đây, ví dụ: gửi email hoặc lưu vào cơ sở dữ liệu

        // Ví dụ: Gửi email thông qua hàm wp_mail()
        $to = $atts['recipient'];
        $subject = 'New Contact Form Submission';
        $body = "Name: $name\nEmail: $email\nMessage: $message";
        wp_mail($to, $subject, $body);

        // Hiển thị thông báo thành công
        echo '<p class="success-message">Your message has been sent successfully.</p>';
    }

    // Hiển thị form liên hệ
    ?>
    <form action="<?php the_permalink(); ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <input type="submit" name="submit" value="Submit">
    </form>
    <?php

    return ob_get_clean();
    
}

add_shortcode('contact_form', 'custom_contact_form');

//slick slider 1
function custom_course_query() {
    $getposts = new WP_Query(array(
        'post_type' => 'learn', 
        'posts_per_page' => 10,
        'tax_query' => array(
            array(
                'taxonomy' => 'learn-categories',
                'field' => 'slug',
                'terms' => 'basic', 
            )
        )
    ));

    return $getposts;
}
?>

<?php
function hook_javascript(){
?>
<script>
     alert('Hihi...');
</script>
<?php 
add_action('wp_head', 'hook_javascript');




}
?>
