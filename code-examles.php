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

<?php /*---------Проверка формата даты--------------------------------------*/ ?>

<?php
function ProverkaFormataDati( $date ) {
	$pattern = "/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/"; // Основной 2013-10-22
	if ( preg_match( $pattern, $date, $date_part ) ) {
		return checkdate( $date_part[2], $date_part[3], $date_part[1] );
	} else {
		return false;
	}
}

$data1 = "22-10-2013";
if ( ProverkaFormataDati( $data1 ) ) {
	echo "Верный формат даты.";
} else {
	echo "Неверный формат даты. Введите дату в формате ГГГГ-ММ-ДД";
}