<?php
// edit for Blowser
register_sidebar();

register_nav_menu('mainmenu', 'メインメニュー');

/* add by http://kachibito.net/wordpress/custom/how-to-add-your-widget.html */
class MyWidgetItem extends WP_Widget {
		function MyWidgetItem() {
    	parent::WP_Widget(false, $name = 'MySocialLink');
    }
    function widget($args, $instance) {
        extract( $args );
				$title = apply_filters( 'widget_body', $instance['title'] );
				$twitter = apply_filters( 'widget_body', $instance['twitter'] );
				$github = apply_filters( 'widget_body', $instance['github'] );
    	?>
			<li <?php echo 'id="foo"'; ?> >
				<?php if ( $title ) ?>
				<?php echo $before_title . $title . $after_title; ?>
				<div class="btn-group">
					<a href="<?php echo $twitter ?>"><img class="navIcons" src="<?php echo get_template_directory_uri(); ?>/img/icons/png/twitter.png"></span></a>
					<a href="<?php echo $github ?>"><img class="navIcons" src="<?php echo get_template_directory_uri(); ?>/img/icons/png/github.png"></span></a>
				</div>
        <?php
    }
    function update($new_instance, $old_instance) {
				$instance = $old_instance;
				$instance['title'] = strip_tags($new_instance['title']);
				//$instance['body'] = trim($new_instance['body']);
				$instance['twitter'] = strip_tags($new_instance['twitter']);
				$instance['github'] = trim($new_instance['github']);
        return $instance;
    }
    function form($instance) {
				$title = esc_attr($instance['title']);
				$twitter = esc_attr($instance['twitter']);
				$github = esc_attr($instance['github']);
        ?>
        <p>
          <label for="<?php echo $this->get_field_id('title'); ?>">
          <?php _e('Social Title'); ?>
					<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
          </label>
        </p>
        <p>
           <label for="<?php echo $this->get_field_id('twitter'); ?>">
           <?php _e('twitter'); ?>
           </label>
					 <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo $twitter; ?>" />
        </p>
				<p>
           <label for="<?php echo $this->get_field_id('github'); ?>">
           <?php _e('github'); ?>
           </label>
					 <input class="widefat" id="<?php echo $this->get_field_id('github'); ?>" name="<?php echo $this->get_field_name('github'); ?>" type="text" value="<?php echo $github; ?>" />
        </p>
        <?php
    }
}
add_action('widgets_init', create_function('', 'return register_widget("MyWidgetItem");'));

// 日付、カテゴリ、タグを出力する
function getArticleMetaData(){
	?><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>　<?php the_time('Y/m/d'); ?>　
	<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>　<?php the_category(', '); ?>　
	<span class="glyphicon glyphicon-tags" aria-hidden="true"></span>　<?php the_tags('',', '); ?>　
	<?php
}

?>
