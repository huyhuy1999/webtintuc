<?php
define('WP_CACHE', true); // Added by WP Rocket
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'webtintuc' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD','' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

define('WP_HOME','http://localhost:83/webtintuc');

define('WP-SITEURL','http://localhost:83/webtintuc');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C$nI(bt6kk;(AInT2)_>~n8iIXomo/.ih$x^sX-,st_G%<(=G:Fk]&[]mE_M[hB`' );
define( 'SECURE_AUTH_KEY',  'Ddau~<}NZ.*FK1X^?X>~$-rA~pMdr= .!CZjiuS`gyPC7uau;U2Oj$f3=vT5g;R2' );
define( 'LOGGED_IN_KEY',    'ClzNrx55//K+!Ok@u27/02n;7K27X0Qzk[!5^-l]R*X<eu&%WeO#5[?2sX0@MCu%' );
define( 'NONCE_KEY',        'v~&srhF|Y#06geulJK@7b`J6x:e-/_$[t3:t@9eKhH+j=`MHARyGkrsTq6_`XBJV' );
define( 'AUTH_SALT',        ' `0sod>A^.ml:vM-Zz:8$=z+ g<.u(GW)>Um=P^ROKiO_lM&7V^^p4VoG?% nqsi' );
define( 'SECURE_AUTH_SALT', 'm<C(}=K(8vV] mSqHnx1AHlY#q;dOY5tAtQegg%fG!4+u54Bx[|fFo1~(3uz pz^' );
define( 'LOGGED_IN_SALT',   'tGF2=Sq=,1QA9)rYrA6G298nQz.-6#1wF/;6g4y3,z_I?T8tEqnEA`C7,JFPq/ak' );
define( 'NONCE_SALT',       '&qGR)O, ?&sGDWGvA9Cy?W*$M$4TQ15<w?iRa4.B?R}7ZzHrT$RsBLA;,%~@m<ct' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
