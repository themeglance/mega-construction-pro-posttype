<?php 
/*
 Plugin Name: Mega Construction Pro Posttype
 lugin URI: http://www.themesglance.com/
 Description: Creating new post type for Mega Construction Pro  Theme.
 Author: Themes Glance
 Version: 1.1
 Author URI: http://www.themesglance.com/
*/

define( 'MEGA_CONSTRUCTION_PRO_POSTTYPE_VERSION', '1.0' );

add_action( 'init', 'projectcategory');
add_action( 'init', 'propertycategory');
add_action( 'init', 'mega_construction_pro_posttype_create_post_type' );

function mega_construction_pro_posttype_create_post_type() {
	register_post_type( 'services',
    array(
        'labels' => array(
            'name' => __( 'Services','mega-construction-pro-posttype' ),
            'singular_name' => __( 'Services','mega-construction-pro-posttype' )
        ),
        'capability_type' =>  'post',
        'menu_icon'  => 'dashicons-tag',
        'public' => true,
        'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'page-attributes',
        'comments'
        )
    )
	);
  register_post_type( 'project',
    array(
        'labels' => array(
            'name' => __( 'Project','mega-construction-pro-posttype' ),
            'singular_name' => __( 'Project','mega-construction-pro-posttype' )
        ),
        'capability_type' =>  'post',
        'menu_icon'  => 'dashicons-welcome-learn-more',
        'public' => true,
        'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'page-attributes',
        'comments'
        )
    )
  );
  register_post_type( 'testimonials',
	array(
		'labels' => array(
			'name' => __( 'Testimonials','mega-construction-pro-posttype' ),
			'singular_name' => __( 'Testimonials','mega-construction-pro-posttype' )
			),
		'capability_type' => 'post',
		'menu_icon'  => 'dashicons-businessman',
		'public' => true,
		'supports' => array(
			'title',
			'editor',
			'thumbnail'
			)
		)
	);
  register_post_type( 'staff',
  array(
    'labels' => array(
      'name' => __( 'Our Staff','mega-construction-pro-posttype' ),
      'singular_name' => __( 'Our Staff','mega-construction-pro-posttype' )
      ),
    'capability_type' => 'post',
    'menu_icon'  => 'dashicons-businessman',
    'public' => true,
    'supports' => array(
      'title',
      'editor',
      'thumbnail'
      )
    )
  );
  register_post_type( 'properties',
    array(
    'labels' => array(
      'name' => __( 'Properties','mega-construction-pro-posttype' ),
      'singular_name' => __( 'Properties','mega-construction-pro-posttype' )
    ),
    'capability_type' =>  'post',
    'menu_icon'  => 'dashicons-admin-home',
    'public' => true,
    'supports' => array(
    'title',
    'editor',
    'excerpt',
    'trackbacks',
    'custom-fields',
    'revisions',
    'thumbnail',
    'author',
    'comments'
    )
    )
  );
  register_post_type( 'faq',
	array(
		'labels' => array(
			'name' => __( 'Faq','mega-construction-pro-posttype' ),
			'singular_name' => __( 'Faq','mega-construction-pro-posttype' )
			),
		'capability_type' => 'post',
		'menu_icon'  => 'dashicons-media-spreadsheet',
		'public' => true,
		'supports' => array(
			'title',
			'editor',
			'thumbnail'
			)
		)
	);
}
function projectcategory() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => __( 'Categories', 'luxury-travel-pro-posttype' ),
    'singular_name'     => __( 'Categories', 'luxury-travel-pro-posttype' ),
    'search_items'      => __( 'Search cats', 'luxury-travel-pro-posttype' ),
    'all_items'         => __( 'All Categories', 'luxury-travel-pro-posttype' ),
    'parent_item'       => __( 'Parent Categories', 'luxury-travel-pro-posttype' ),
    'parent_item_colon' => __( 'Parent Categories:', 'luxury-travel-pro-posttype' ),
    'edit_item'         => __( 'Edit Categories', 'luxury-travel-pro-posttype' ),
    'update_item'       => __( 'Update Categories', 'luxury-travel-pro-posttype' ),
    'add_new_item'      => __( 'Add New Categories', 'luxury-travel-pro-posttype' ),
    'new_item_name'     => __( 'New Categories Name', 'luxury-travel-pro-posttype' ),
    'menu_name'         => __( 'Categories', 'luxury-travel-pro-posttype' ),
  );
  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'projectcategory' ),
  );
  register_taxonomy( 'projectcategory', array( 'project' ), $args );
}
function propertycategory() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => __( 'Categories', 'mega-construction-pro-posttype' ),
    'singular_name'     => __( 'Categories', 'mega-construction-pro-posttype' ),
    'search_items'      => __( 'Search Ccats', 'mega-construction-pro-posttype' ),
    'all_items'         => __( 'All Property Categories', 'mega-construction-pro-posttype' ),
    'parent_item'       => __( 'Parent Properties Categories', 'mega-construction-pro-posttype' ),
    'parent_item_colon' => __( 'Parent Properties Categories:', 'mega-construction-pro-posttype' ),
    'edit_item'         => __( 'Edit Properties Categories', 'mega-construction-pro-posttype' ),
    'update_item'       => __( 'Update Properties Categories', 'mega-construction-pro-posttype' ),
    'add_new_item'      => __( 'Add New Properties Category', 'mega-construction-pro-posttype' ),
    'new_item_name'     => __( 'New Properties Category Name', 'mega-construction-pro-posttype' ),
    'menu_name'         => __( 'Categories', 'mega-construction-pro-posttype' ),
  );
  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'propertycategory' ),
  );
  register_taxonomy( 'propertycategory', array( 'properties' ), $args );
}

// Serives section
function mega_construction_pro_posttype_images_metabox_enqueue($hook) {
	if ( 'post.php' === $hook || 'post-new.php' === $hook ) {
		wp_enqueue_script('mega-construction-pro-posttype-images-metabox', plugin_dir_url( __FILE__ ) . '/js/img-metabox.js', array('jquery', 'jquery-ui-sortable'));

		global $post;
		if ( $post ) {
			wp_enqueue_media( array(
					'post' => $post->ID,
				)
			);
		}

	}
}
add_action('admin_enqueue_scripts', 'mega_construction_pro_posttype_images_metabox_enqueue');
// Services Meta
function mega_construction_pro_posttype_bn_custom_meta_services() {

    add_meta_box( 'bn_meta', __( 'Services Meta', 'mega-construction-pro-posttype' ), 'mega_construction_pro_posttype_bn_meta_callback_services', 'services', 'normal', 'high' );
}
/* Hook things in for admin*/
if (is_admin()){
	add_action('admin_menu', 'mega_construction_pro_posttype_bn_custom_meta_services');
}

function mega_construction_pro_posttype_bn_meta_callback_services( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'bn_nonce' );
    $bn_stored_meta = get_post_meta( $post->ID );
    ?>
	<div id="property_stuff">
		<table id="list-table">			
			<tbody id="the-list" data-wp-lists="list:meta">
				<tr id="meta-1">
					<p>
						<label for="meta-image"><?php echo esc_html('Icon Image'); ?></label><br>
						<input type="text" name="meta-image" id="meta-image" class="meta-image regular-text" value="<?php echo $bn_stored_meta['meta-image'][0]; ?>">
						<input type="button" class="button image-upload" value="Browse">
					</p>
					<div class="image-preview"><img src="<?php echo $bn_stored_meta['meta-image'][0]; ?>" style="max-width: 250px;"></div>
				</tr>
			</tbody>
		</table>
	</div>
	<?php
}

function mega_construction_pro_posttype_bn_meta_save_services( $post_id ) {

	if (!isset($_POST['bn_nonce']) || !wp_verify_nonce($_POST['bn_nonce'], basename(__FILE__))) {
		return;
	}

	if (!current_user_can('edit_post', $post_id)) {
		return;
	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}
	// Save Image
	if( isset( $_POST[ 'meta-image' ] ) ) {
	    update_post_meta( $post_id, 'meta-image', esc_url_raw($_POST[ 'meta-image' ]) );
	}
}
add_action( 'save_post', 'mega_construction_pro_posttype_bn_meta_save_services' );

/* project shorthcode */
function mega_construction_pro_posttype_project_func( $atts ) {
    $project = ''; 
    $custom_url ='';
    $project = '<div class="row">';
    $query = new WP_Query( array( 'post_type' => 'project' ) );
    if ( $query->have_posts() ) :
    $k=1;
    $new = new WP_Query('post_type=project'); 
    while ($new->have_posts()) : $new->the_post();
    	$post_id = get_the_ID();
    	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'large' );
      if(has_post_thumbnail()) { $thumb_url = $thumb['0']; }
		  $url = $thumb['0'];
      $excerpt = mega_construction_pro_string_limit_words(get_the_excerpt(),20);
      $project .= '
                <div class="projects_box col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="image-box">
                      <img class="client-img" src="'.esc_url($thumb_url).'" alt="project-thumbnail" />
                      <div class="projects-box w-100 float-left">
                        <h4 class="project_name"><a href="'.get_the_permalink().'">'.get_the_title().'</a></h4>
                      </div>
                    </div>
                  <div class="content_box w-100 float-left">
                    <div class="short_text pt-3">'.$excerpt.'</div>
                  </div>
                </div>';
      if($k%2 == 0){
          $project.= '<div class="clearfix"></div>'; 
      } 
      $k++;         
  endwhile; 
  wp_reset_postdata();
  $project.= '</div>';
  else :
    $project = '<h2 class="center">'.esc_html_e('Not Found','mega-construction-pro-posttype').'</h2>';
  endif;
  return $project;
}
add_shortcode( 'project', 'mega_construction_pro_posttype_project_func' );

/* Testimonial section */
/* Adds a meta box to the Testimonial editing screen */
function mega_construction_pro_posttype_bn_testimonial_meta_box() {
	add_meta_box( 'mega-construction-pro-posttype-testimonial-meta', __( 'Enter Designation', 'mega-construction-pro-posttype' ), 'mega_construction_pro_posttype_bn_testimonial_meta_callback', 'testimonials', 'normal', 'high' );
}
// Hook things in for admin
if (is_admin()){
    add_action('admin_menu', 'mega_construction_pro_posttype_bn_testimonial_meta_box');
}

/* Adds a meta box for custom post */
function mega_construction_pro_posttype_bn_testimonial_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'mega_construction_pro_posttype_posttype_testimonial_meta_nonce' );
  $bn_stored_meta = get_post_meta( $post->ID );
	$desigstory = get_post_meta( $post->ID, 'mega_construction_pro_posttype_posttype_testimonial_desigstory', true );
	?>
	<div id="testimonials_custom_stuff">
		<table id="list">
			<tbody id="the-list" data-wp-lists="list:meta">
				<tr id="meta-1">
					<td class="left">
						<?php esc_html_e( 'Designation', 'mega-construction-pro-posttype' )?>
					</td>
					<td class="left" >
						<input type="text" name="mega_construction_pro_posttype_posttype_testimonial_desigstory" id="mega_construction_pro_posttype_posttype_testimonial_desigstory" value="<?php echo esc_attr( $desigstory ); ?>" />
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<?php
}

/* Saves the custom meta input */
function mega_construction_pro_posttype_bn_metadesig_save( $post_id ) {
	if (!isset($_POST['mega_construction_pro_posttype_posttype_testimonial_meta_nonce']) || !wp_verify_nonce($_POST['mega_construction_pro_posttype_posttype_testimonial_meta_nonce'], basename(__FILE__))) {
		return;
	}

	if (!current_user_can('edit_post', $post_id)) {
		return;
	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}

	// Save desig.
	if( isset( $_POST[ 'mega_construction_pro_posttype_posttype_testimonial_desigstory' ] ) ) {
		update_post_meta( $post_id, 'mega_construction_pro_posttype_posttype_testimonial_desigstory', sanitize_text_field($_POST[ 'mega_construction_pro_posttype_posttype_testimonial_desigstory']) );
	}
  if( isset( $_POST[ 'meta-testimonial-url' ] ) ) {
    update_post_meta( $post_id, 'meta-testimonial-url', esc_url($_POST[ 'meta-testimonial-url']) );
  }

}

add_action( 'save_post', 'mega_construction_pro_posttype_bn_metadesig_save' );

/* Testimonials shortcode */
function mega_construction_pro_posttype_testimonial_func( $atts ) {
	$testimonial = '';
	$testimonial = '<div class="row">';
	$query = new WP_Query( array( 'post_type' => 'testimonials') );

    if ( $query->have_posts() ) :

	$k=1;
	$new = new WP_Query('post_type=testimonials');

	while ($new->have_posts()) : $new->the_post();
    $custom_url = '';
  	$post_id = get_the_ID();
  	$excerpt = wp_trim_words(get_the_excerpt(),25);
  	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'large' );
    if(has_post_thumbnail()) { $thumb_url = $thumb['0']; }
  	$desigstory= get_post_meta($post_id,'mega_construction_pro_posttype_posttype_testimonial_desigstory',true);
    $testimonial .= '<div class="our_testimonials_outer testimonial-shortcode col-lg-4 col-md-6 col-sm-12">
                      <div class="testimonials_inner">
                        <div class="testimonials-icon text-center">
                          <img src="'.$thumb_url.'" alt=""/>
                        </div>
                        <div class="testimonials-box text-center">
                          <h3>'.get_the_title().'</h3>
                          <h5>'.$desigstory.'</h5>
                          <p>'.get_the_content().'</p>
                        </div>
                      </div>
                    </div>';
		if($k%3 == 0){
			$testimonial.= '<div class="clearfix"></div>';
		}
      $k++;
  endwhile;
  else :
  	$testimonial = '<h2 class="center">'.esc_html__('Post Not Found','mega-construction-pro-posttype').'</h2>';
  endif;
  $testimonial .= '</div>';
  return $testimonial;
}

add_shortcode( 'testimonials', 'mega_construction_pro_posttype_testimonial_func' );

/* staff section */
/* Adds a meta box to the staff editing screen */
function mega_construction_pro_posttype_bn_staff_meta_box() {
  add_meta_box( 'mega-construction-pro-posttype-staff-meta', __( 'Enter Designation', 'mega-construction-pro-posttype' ), 'mega_construction_pro_posttype_bn_staff_meta_callback', 'staff', 'normal', 'high' );
}
// Hook things in for admin
if (is_admin()){
    add_action('admin_menu', 'mega_construction_pro_posttype_bn_staff_meta_box');
}
/* Adds a meta box for custom post */
function mega_construction_pro_posttype_bn_staff_meta_callback( $post ) {
  wp_nonce_field( basename( __FILE__ ), 'mega_construction_pro_posttype_staff_meta_nonce' );
  $bn_stored_meta = get_post_meta( $post->ID );
  $staffdesigstory = get_post_meta( $post->ID, 'meta-staff-desigstory', true );
  ?>
  <div id="staffs_custom_stuff">
    <table id="list">
      <tbody id="the-list" data-wp-lists="list:meta">
        <tr id="meta-1">
          <td class="left">
            <?php esc_html_e( 'Designation', 'mega-construction-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="meta-staff-desigstory" id="meta-staff-desigstory" value="<?php echo esc_attr( $staffdesigstory ); ?>" />
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <?php
}
/* Saves the custom meta input */
function mega_construction_pro_posttype_bn_metastaff_save( $post_id ) {
  if (!isset($_POST['mega_construction_pro_posttype_staff_meta_nonce']) || !wp_verify_nonce($_POST['mega_construction_pro_posttype_staff_meta_nonce'], basename(__FILE__))) {
    return;
  }
  if (!current_user_can('edit_post', $post_id)) {
    return;
  }
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }
  // Save desig.
  if( isset( $_POST[ 'meta-staff-desigstory' ] ) ) {
    update_post_meta( $post_id, 'meta-staff-desigstory', sanitize_text_field($_POST[ 'meta-staff-desigstory']) );
  }
}
add_action( 'save_post', 'mega_construction_pro_posttype_bn_metastaff_save' );
/*Staff Shortcode*/
function mega_construction_pro_posttype_staff_func( $atts ) {
  $staff = '';
  $staff = '<div class="row">';
  $query = new WP_Query( array( 'post_type' => 'staff') );

    if ( $query->have_posts() ) :

  $k=1;
  $new = new WP_Query('post_type=staff');

  while ($new->have_posts()) : $new->the_post();
        $custom_url = '';
        $post_id = get_the_ID();
        $excerpt = wp_trim_words(get_the_excerpt(),25);
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'large' );
        if(has_post_thumbnail()) { $thumb_url = $thumb['0']; }
        $desigstory= get_post_meta($post_id,'mega_construction_pro_posttype_posttype_staff_desigstory',true);
        if(get_post_meta($post_id,'meta-staff-url',true !='')){$custom_url =get_post_meta($post_id,'meta-staff-url',true); } else{ $custom_url = get_permalink(); }
        $staff .= '
          <div class="our_testimonials_outer testimonial-shortcode col-lg-4 col-md-6 col-sm-12">
            <div class="testimonials_inner">
              <div class="testimonials-icon text-center">
                <img src="'.$thumb_url.'" alt=""/>
              </div>
              <div class="testimonials-box text-center">
                <h3>'.get_the_title().'</h3>
                <h5>'.$desigstory.'</h5>
                <p>'.get_the_content().'</p>
              </div>
            </div>
          </div>';
    if($k%3 == 0){
      $staff.= '<div class="clearfix"></div>';
    }
      $k++;
  endwhile;
  else :
    $staff = '<h2 class="center">'.esc_html__('Post Not Found','mega-construction-pro-posttype').'</h2>';
  endif;
  $staff .= '</div>';
  return $staff;
}

add_shortcode( 'staff', 'mega_construction_pro_posttype_staff_func' );

/* Services shortcode */
function mega_construction_pro_posttype_services_func( $atts ) {
  $services = '';
  $services = '<div class="row innerbox">';
  $query = new WP_Query( array( 'post_type' => 'services') );

    if ( $query->have_posts() ) :

  $k=1;
  $new = new WP_Query('post_type=services');

  while ($new->have_posts()) : $new->the_post();
        $custom_url ='';
        $post_id = get_the_ID();
        $excerpt = wp_trim_words(get_the_excerpt(),25);
        $services_image= get_post_meta(get_the_ID(), 'meta-image', true);
        if(get_post_meta($post_id,'meta-testimonial-url',true !='')){$custom_url =get_post_meta($post_id,'meta-testimonial-url',true); } else{ $custom_url = get_permalink(); }
        $services .= '
            <div class="our_services_outersc col-md-3 col-sm-3">
              <div class="services_innersc">
                <a href="'.esc_url($custom_url).'">
                <div class="services-boxsc text-center">                  
                  <div class="services-iconsc">
                    <img class="" src="'.esc_url($services_image).'">
                    <h4 class="mt-0">'.esc_html(get_the_title()) .'</h4>
                    <p>'.$excerpt.'</p>
                  </div>
                </div>
               </a>
              </div>
            </div>
            ';
    if($k%2 == 0){
      $services.= '<div class="clearfix"></div>';
    }
      $k++;
  endwhile;
  else :
    $services = '<h2 class="center">'.esc_html__('Post Not Found','mega-construction-pro-posttype').'</h2>';
  endif;
  $services .= '</div>';
  return $services;
}

add_shortcode( 'list-services', 'mega_construction_pro_posttype_services_func' );

/* Faq shortcode */
function mega_construction_pro_posttype_faq_func( $atts ) {
  $faq = '';
  $faq = '<div id="faq"><ol id="accordion" class="row">';
  $new = new WP_Query( array( 'post_type' => 'faq') );

    if ( $new->have_posts() ) :

  $k=1;

  while ($new->have_posts()) : $new->the_post();
        $post_id = get_the_ID();
        $excerpt = wp_trim_words(get_the_excerpt(),25);
        $desigstory= get_post_meta($post_id,'mega_construction_pro_posttype_posttype_testimonial_desigstory',true);
        $faq .= '
        <li class="panel-group w-100 mb-3">
          <div class="panel">
            <div class="panel-heading">
            <h4 class="panel-title">
              <a href="#panelBody'.esc_attr($k).'" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">'.get_the_title().'</a>
              </h4>
            </div>
            <div id="panelBody'.esc_attr($k).'" class="panel-collapse collapse in">
            <div class="panel-body">
                <p>'.get_the_content().'</p>
              </div>
            </div>
          </div>
        </li>';
    if($k%2 == 0){
      $faq.= '<div class="clearfix"></div>';
    }
      $k++;
  endwhile;
  else :
    $faq = '<h2 class="center">'.esc_html__('Post Not Found','mega-construction-pro-posttype').'</h2>';
  endif;
  $faq .= '</ol></div>';
  return $faq;
}
add_shortcode( 'list-faq', 'mega_construction_pro_posttype_faq_func' );

/* Adds a meta box to the Trainer editing screen */
function mega_construction_pro_bn_custom_meta_properties() {

    add_meta_box( 'bn_meta', __( 'Property Meta', 'mega-construction-pro-posttype' ), 'mega_construction_pro_bn_meta_callback_properties', 'properties', 'normal', 'high' );
}
/* Hook things in for admin*/
if (is_admin())
  add_action('admin_menu', 'mega_construction_pro_bn_custom_meta_properties');

/* Adds a meta box for custom post */
function mega_construction_pro_bn_meta_callback_properties( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'bn_nonce' );
    $bn_stored_meta = get_post_meta( $post->ID );

    $propertyid = get_post_meta( $post->ID, 'meta-propertyid', true );
    $address = get_post_meta( $post->ID, 'meta-address', true );
    $location = get_post_meta( $post->ID, 'meta-location', true );
    $proptype = get_post_meta( $post->ID, 'meta-proptype', true );
    $size = get_post_meta( $post->ID, 'meta-size', true );
    $bathrooms = get_post_meta( $post->ID, 'meta-bathrooms', true );
    $bedrooms = get_post_meta( $post->ID, 'meta-bedrooms', true );
    $garage = get_post_meta( $post->ID, 'meta-garage', true );
    $yearbuilt = get_post_meta( $post->ID, 'meta-yearbuilt', true );
    $childrooms = get_post_meta( $post->ID, 'meta-childrooms', true );
    $furnished = get_post_meta( $post->ID, 'meta-furnished', true );
    $floors = get_post_meta( $post->ID, 'meta-floors', true );
    $swimming = get_post_meta( $post->ID, 'meta-swimming', true );
    $longitude = get_post_meta( $post->ID, 'meta-longitude', true );
    $latitude = get_post_meta( $post->ID, 'meta-latitude', true );
    ?>
  <div id="property_stuff">
    <table id="list-table" style="background: #fff;padding: 1%;border: 0;">     
      <tbody id="the-list" data-wp-lists="list:meta">
        <tr id="meta-1">
          <td class="left" id="meta-pricelabel">
            <?php _e( 'Price', 'mega-construction-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="number" name="meta-price" id="meta-price" value="<?php echo $bn_stored_meta['meta-price'][0]; ?>" />
          </td>
        </tr>
        <tr id="meta-2">
          <td class="left" id="meta-compricelable">
            <?php _e( 'Compare Price', 'mega-construction-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="number" name="meta-comprice" id="meta-comprice" value="<?php echo $bn_stored_meta['meta-comprice'][0]; ?>" />
          </td>
        </tr>
        <tr id="meta-3">
          <td class="left">
            <?php _e( 'Property ID', 'mega-construction-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="meta-propertyid" id="meta-propertyid" value="<?php echo esc_attr( $propertyid ); ?>" />
          </td>
        </tr>
        <tr id="meta-4">
          <td class="left" id="meta-addresslabel">
            <?php _e( 'Property Address', 'mega-construction-pro-posttype' )?>
          </td>
          <td class="left" >
            <textarea class="widefat" id="meta-address" name="meta-address" type="text"  value="<?php echo esc_attr( $address ); ?>" ><?php echo esc_attr( $address ); ?></textarea>
          </td>
        </tr>
        <tr id="meta-4">
          <td class="left" id="meta-location">
            <?php _e( 'Location', 'mega-construction-pro-posttype' )?>
          </td>
          <td class="left" >
            <input class="widefat" id="meta-location" name="meta-location" type="text"  value="<?php echo esc_attr( $location ); ?>" >
          </td>
        </tr>
        <tr id="meta-5">
          <td class="left">
            <?php _e( 'Property Type', 'mega-construction-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="meta-proptype" id="meta-proptype" value="<?php echo esc_attr( $proptype ); ?>" />
          </td>
        </tr>
        <tr id="meta-6">
          <?php  $meta_element_class = get_post_meta($post->ID, 'meta-status', true); //true ensures you get just one value instead of an array
            ?>  
          <td class="left">
            <?php _e( 'Property Status', 'mega-construction-pro-posttype' )?>
          </td>
          <td class="left" >
            <select name="meta-status" id="meta-status" class="selectbox">
                  <option value="" <?php selected( $meta_element_class, '' ); ?>><?php esc_html_e('','mega-construction-pro-posttype' ); ?></option>
                  <option value="Sale" <?php selected( $meta_element_class, 'Sale' ); ?>><?php esc_html_e('Sale','mega-construction-pro-posttype' ); ?></option>
                  <option value="Rent" <?php selected( $meta_element_class, 'Rent' ); ?>><?php esc_html_e('Rent','mega-construction-pro-posttype' ); ?></option>
              </select>
          </td>
        </tr>
        <tr id="meta-7">
          <td class="left">
            <?php _e( 'Property Size', 'mega-construction-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="meta-size" id="meta-size" value="<?php echo esc_attr( $size ); ?>" />
          </td>
        </tr>
        <tr id="meta-8">
          <td class="left">
            <?php _e( 'Bathrooms', 'mega-construction-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="meta-bathrooms" id="meta-bathrooms" value="<?php echo esc_attr( $bathrooms ); ?>" />
          </td>
        </tr>
        <tr id="meta-9">
          <td class="left">
            <?php _e( 'Bedrooms', 'mega-construction-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="meta-bedrooms" id="meta-bedrooms" value="<?php echo esc_attr( $bedrooms ); ?>" />
          </td>
        </tr>
        <tr id="meta-10">
          <td class="left">
            <?php _e( 'Garage', 'mega-construction-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="meta-garage" id="meta-garage" value="<?php echo esc_attr( $garage ); ?>" />
          </td>
        </tr>
        <tr id="meta-11">
          <td class="left">
            <?php _e( 'Year Built', 'mega-construction-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="meta-yearbuilt" id="meta-yearbuilt" value="<?php echo esc_attr( $yearbuilt ); ?>" />
          </td>
        </tr>
        <tr id="meta-12">
          <td class="left">
            <?php _e( 'Child Rooms', 'mega-construction-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="meta-childrooms" id="meta-childrooms" value="<?php echo esc_attr( $childrooms ); ?>" />
          </td>
        </tr>
        <tr id="meta-13">
          <td class="left">
            <?php _e( 'Furnished', 'mega-construction-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="meta-furnished" id="meta-furnished" value="<?php echo esc_attr( $furnished ); ?>" />
          </td>
        </tr>
        <tr id="meta-14">
          <td class="left">
            <?php _e( 'No of Floors', 'mega-construction-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="meta-floors" id="meta-floors" value="<?php echo esc_attr( $floors ); ?>" />
          </td>
        </tr>
        <tr id="meta-12">
          <td class="left">
            <?php _e( 'Swimming Pool', 'mega-construction-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="meta-swimming" id="meta-swimming" value="<?php echo esc_attr( $swimming ); ?>" />
          </td>
        </tr>
        <tr id="meta-6">
          <td class="left">
            <?php _e( 'Longitude', 'lmega-construction-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="meta-longitude" id="meta-longitude" value="<?php echo esc_attr( $longitude ); ?>" />
          </td>
        </tr>
        <tr id="meta-13">
          <td class="left">
            <?php _e( 'Latitude', 'lmega-construction-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="meta-latitude" id="meta-latitude" value="<?php echo esc_attr( $latitude ); ?>" />
          </td>
        </tr>
      </tbody>
    </table>
  </div>
    <?php
}

/* Saves the custom meta input */
function mega_construction_pro_bn_meta_save_properties( $post_id ) {

  // Save price
  if( isset( $_POST[ 'meta-price' ] ) ) {
      update_post_meta( $post_id, 'meta-price', $_POST[ 'meta-price' ] );
  }
  if( isset( $_POST[ 'meta-comprice' ] ) ) {
      update_post_meta( $post_id, 'meta-comprice', $_POST[ 'meta-comprice' ] );
  }

  // Save main meta_propertyid
  if( isset( $_POST[ 'meta-propertyid' ] ) ) {
      update_post_meta( $post_id, 'meta-propertyid', $_POST[ 'meta-propertyid' ] );
  }
  // Save address
  if( isset( $_POST[ 'meta-address' ] ) ) {
      update_post_meta( $post_id, 'meta-address', $_POST[ 'meta-address' ] );
  }
  // Save location
  if( isset( $_POST[ 'meta-location' ] ) ) {
      update_post_meta( $post_id, 'meta-location', $_POST[ 'meta-location' ] );
  }
  // Save property type
  if( isset( $_POST[ 'meta-proptype' ] ) ) {
      update_post_meta( $post_id, 'meta-proptype', $_POST[ 'meta-proptype' ] );
  }
  // // Save property status
  // if( isset( $_POST[ 'meta-status' ] ) ) {
  //     update_post_meta( $post_id, 'meta-status', $_POST[ 'meta-status' ] );
  // }

  if(isset($_POST["meta-status"])){
         //UPDATE: 
        $meta_element_class = $_POST['meta-status'];
        //END OF UPDATE

        update_post_meta($post_id, 'meta-status', $meta_element_class);
        //print_r($_POST);
    }

  // Save property status
  if( isset( $_POST[ 'meta-size' ] ) ) {
      update_post_meta( $post_id, 'meta-size', $_POST[ 'meta-size' ] );
  }

  // Save package meta_bathrooms
  if( isset( $_POST[ 'meta-bathrooms' ] ) ) {
      update_post_meta( $post_id, 'meta-bathrooms', $_POST[ 'meta-bathrooms' ] );
  }

  // Save garage
  if( isset( $_POST[ 'meta-garage' ] ) ) {
      update_post_meta( $post_id, 'meta-garage', $_POST[ 'meta-garage' ] );
  }

  // Save bedrooms
  if( isset( $_POST[ 'meta-bedrooms' ] ) ) {
      update_post_meta( $post_id, 'meta-bedrooms', $_POST[ 'meta-bedrooms' ] );
  }

  // Save Year built
  if( isset( $_POST[ 'meta-yearbuilt' ] ) ) {
      update_post_meta( $post_id, 'meta-yearbuilt', $_POST[ 'meta-yearbuilt' ] );
  }
  // Save Year built
  if( isset( $_POST[ 'meta-childrooms' ] ) ) {
      update_post_meta( $post_id, 'meta-childrooms', $_POST[ 'meta-childrooms' ] );
  }
  // Save Year built
  if( isset( $_POST[ 'meta-furnished' ] ) ) {
      update_post_meta( $post_id, 'meta-furnished', $_POST[ 'meta-furnished' ] );
  }
  // Save Year built
  if( isset( $_POST[ 'meta-floors' ] ) ) {
      update_post_meta( $post_id, 'meta-floors', $_POST[ 'meta-floors' ] );
  }
  // Save Year built
  if( isset( $_POST[ 'meta-swimming' ] ) ) {
      update_post_meta( $post_id, 'meta-swimming', $_POST[ 'meta-swimming' ] );
  }
  // Save property type
  if( isset( $_POST[ 'meta-longitude' ] ) ) {
      update_post_meta( $post_id, 'meta-longitude', $_POST[ 'meta-longitude' ] );
  }
  // Save property type
  if( isset( $_POST[ 'meta-latitude' ] ) ) {
      update_post_meta( $post_id, 'meta-latitude', $_POST[ 'meta-latitude' ] );
  }
  }
add_action( 'save_post', 'mega_construction_pro_bn_meta_save_properties' );

// Call properties by shortcode:
function mega_construction_pro_properties_cat_shortcode( $atts, $cat_name ) {

  $properties = '<div class="main_row">';
  $post_data = '';
  $rent = '';
  $cat_name = isset( $atts['cat_name'] ) ? esc_html( $atts['cat_name'] ) : '';
    $args = array(
    'post_type' => 'properties',
    'propertycategory'=> $cat_name
    );

    $query = new WP_Query( $args );
    $properties .= "<div class='row'>";

    if ( $query->have_posts() ){
        while ( $query->have_posts() ) : $query->the_post();
          $post_id = get_the_ID();
      $prop_status = get_post_meta($post_id,'meta-status',true);
      $price = get_post_meta($post_id,'meta-price',true);
      if(get_post_meta($post_id,'meta-status',true) == 'Rent'){ $rent = 'prop_rent';}
      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post_data), 'medium' );
      $url = $thumb['0'];
      $price_meta =''; $fprice=''; $comprice_meta =''; $fcompprice =''; $compf = ''; $pcurrency_symb = ''; $ccurrency_symb = '';
      if(get_post_meta($post_id,'meta-price',true != '')){
        $price_meta = get_post_meta($post_id);
        $fprice = number_format($price_meta['meta-price'][0], 2, '.', '');
      }
      if(get_post_meta($post_id,'meta-comprice',true != '')){
        $comprice_meta = get_post_meta($post_id);
        $fcompprice = number_format($comprice_meta['meta-comprice'][0], 2, '.', '');
      }
      if($fprice < $fcompprice){ $compf = $fcompprice; }
      if($fprice != ''){
        $pcurrency_symb = get_theme_mod('mega_construction_pro_property_currency',__('$','construction-realestate-pro'));
      }
      if($fcompprice != ''){
        $ccurrency_symb = get_theme_mod('mega_construction_pro_property_currency',__('$','construction-realestate-pro'));
      }
      $properties .= '
              <div class="col-lg-3 col-md-4 col-sm-6">   
          <div class="properties"> 
            <div class="images-box">
              <img class="client-img" src="'.esc_url($url).'" alt="agents-thumbnail" />
              <p class="prop_status '.esc_html($rent).'">'.esc_html($prop_status).'</p>
              <div class="hover-box">
                <a href="'.get_permalink().' ?>">DETAILS</a>
              </div>
            </div> 
            <div class="inner-content">
              <a href="'.get_permalink().'"><h6 class="prop-title">'.get_the_title().'</h6></a>
              <p class="price">     
                <span>'.esc_html($pcurrency_symb . $fprice).'</span>
                <span class="comp_price"><strike>'.esc_html($ccurrency_symb . $compf).'</strike></span>
              </p>
            </div> 
          </div>       
                </div>';
        endwhile;
    
        wp_reset_postdata();
    }else{ 
      $properties .='<h2 class="center">'.__('Post Not Found','mega-construction-pro-posttype').'</h2>';
    }
  $properties .= '<div class="clearfix"></div></div></div>';
  return $properties;
}
add_shortcode( 'list-properties', 'mega_construction_pro_properties_cat_shortcode' );