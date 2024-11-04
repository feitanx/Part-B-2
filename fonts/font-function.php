function enqueue_roboto_font() {
    // Get the theme directory URI
    $theme_dir = get_template_directory_uri();

    // Output custom CSS to load Roboto font files from the local directory
    $custom_css = "
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url('$theme_dir/fonts/Roboto-Regular.woff2') format('woff2'),
                 url('$theme_dir/fonts/Roboto-Regular.woff') format('woff');
        }
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url('$theme_dir/fonts/Roboto-Bold.woff2') format('woff2'),
                 url('$theme_dir/fonts/Roboto-Bold.woff') format('woff');
        }
		   @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url('$theme_dir/fonts/Roboto-Bold.woff2') format('woff2'),
                 url('$theme_dir/fonts/Roboto-Bold.woff') format('woff');
        }
		
    ";
    
    // Add the custom CSS inline
    wp_add_inline_style('main-theme-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'enqueue_roboto_font');

