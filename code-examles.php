<?php add_theme_support( 'title-tag' ); ?>

<?php /**---------Настройки для POEdit----------------------------------------*/ ?>

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

<?php /**---------Дата-ссылка для постов--------------------------------------*/ ?>
________________1_____________________

<?php if ( is_singular() ) {
	$_date_link = esc_url( get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) );
} else {
	$_date_link = esc_url( get_the_permalink() );
} ?>
<a href="<?php echo $_date_link; ?>" title="<?php the_title_attribute(); ?>"><?php echo get_the_date(); ?></a>
_________________2____________________

<?php if ( is_singular() ) { ?>
	<a href="<?php echo esc_url( get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) ); ?>" title="<?php the_title_attribute(); ?>"><?php echo get_the_date(); ?></a>
<?php } else { ?>
	<a href="<?php echo esc_url( get_the_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php echo get_the_date(); ?></a>
<?php } ?>
__________________3___________________

<?php if ( is_singular() ) {
	echo '<a href="' . esc_url( get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) ) . '" title="' . the_title_attribute( 'echo=0' ) . '">' . get_the_date() . '</a>';
} else {
	echo '<a href="' . esc_url( get_the_permalink() ) . '" title="' . the_title_attribute( 'echo=0' ) . '">' . get_the_date() . '</a>';
} ?>
___________________4__________________

<?php if ( is_singular() ) {
	printf( '<a href="%1$s" title="%2$s">%3$s</a>', esc_url( get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) ), the_title_attribute( 'echo=0' ), get_the_date() );
} else {
	printf( '<a href="%1$s" title="%2$s">%3$s</a>', esc_url( get_the_permalink() ), the_title_attribute( 'echo=0' ), get_the_date() );
} ?>
____________________5_________________

<a href="<?php echo esc_url( ( is_singular() ) ? get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) : get_the_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php echo get_the_date(); ?></a>
_____________________6________________

<?php printf( '<a href="%1$s" title="%2$s">%3$s</a>', esc_url( ( is_singular() ) ? get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) : get_the_permalink() ), the_title_attribute( 'echo=0' ), get_the_date() ); ?>


<?php echo esc_url( get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) ); ?>

<?php /**---------Тайтл-ссылка для постов--------------------------------------*/ ?>

<?php if ( is_singular() ) {
	the_title();
} else {
	the_title( '<a href="' . get_the_permalink() . '">', '</a>' );
} ?>

<?php /**---------Проверка формата даты--------------------------------------*/ ?>

<?php
function proverka_formata_dati( $date ) {
	$pattern = '/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/'; // Основной 2013-10-22
	if ( preg_match( $pattern, $date, $date_part ) ) {
		return checkdate( $date_part[2], $date_part[3], $date_part[1] );
	} else {
		return false;
	}
}

$data1 = '22-10-2013';
if ( proverka_formata_dati( $data1 ) ) {
	echo 'Верный формат даты.';
} else {
	echo 'Неверный формат даты. Введите дату в формате ГГГГ-ММ-ДД';
} ?>