<?php add_theme_support( 'title-tag' ); ?>

<?php /*---------Настройки для POEdit----------------------------------------*/ ?>

bestwebsoft.com
wp_theme@bestwebsoft.com
__
_e
_n:1,2
_x:1,2c
_nx:1,2,4c
esc_attr__
esc_attr_e
esc_attr_x:1,2c
esc_html__
esc_html_e
esc_html_x:1,2c
_c
_nc:1,2
__ngettext:1,2
__ngettext_noop:1,2
_n_noop:1,2
_nx_noop:1,2,3c

<?php /*---------Дата-ссылка для постов--------------------------------------*/ ?>

<?php if ( is_singular() ) {
	$_date_link = get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) );
} else {
	$_date_link = get_the_permalink();
} ?>
<a href="<?php echo esc_url( $_date_link ); ?>" title="<?php the_title_attribute(); ?>"><?php echo get_the_date(); ?></a>
_____________________________________

<?php if ( is_singular() ) { ?>
	<a href="<?php echo esc_url( get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) ); ?>" title="<?php the_title_attribute(); ?>"><?php echo get_the_date(); ?></a>
<?php } else { ?>
	<a href="<?php echo esc_url( get_the_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php echo get_the_date(); ?></a>
<?php } ?>
_____________________________________

<?php if ( is_singular() ) {
	echo '<a href="' . esc_url( get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) ) . '" title="' . the_title_attribute( 'echo=0' ) . '">' . get_the_date() . '</a>';
} else {
	echo '<a href="' . esc_url( get_the_permalink() ) . '" title="' . the_title_attribute( 'echo=0' ) . '">' . get_the_date() . '</a>';
} ?>
_____________________________________

<a href="<?php echo esc_url( ( is_singular() ) ? get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) : get_the_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php echo get_the_date(); ?></a>


<?php echo esc_url( get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) ); ?>

<?php /*---------Тайтл-ссылка для постов--------------------------------------*/ ?>

<?php if ( is_singular() ) {
	the_title();
} else {
	the_title( '<a href="' . get_the_permalink() . '">', '</a>' );
} ?>


Donate link: http://bestwebsoft.com/donate/

== Changelog ==

= V1.8 - 18.08.2016 =
* Update : All functionality for WordPress 4.6 was updated.

== Upgrade Notice ==

= V1.8 =
* The compatibility with new WordPress version updated.

WP Theme Archy v1.8 - All functionality for WordPress 4.6 was updated."
WP Theme Best v1.4 - All functionality for WordPress 4.6 was updated."
svn ci -m "WP Theme Bicubic v1.8 - All functionality for WordPress 4.6 was updated."
svn ci -m "WP Theme Blogotron v2.0 - Fixed wp_title."
svn ci -m "WP Theme Cafe v1.7 - All functionality for WordPress 4.6 was updated."