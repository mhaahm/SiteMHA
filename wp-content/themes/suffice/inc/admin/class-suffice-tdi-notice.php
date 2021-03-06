<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Suffice_TDI_Notice {

	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'admin_notices' ) );
		add_action( 'switch_theme', array( $this, 'remove_tdi_notice' ) );
	}

	public function admin_notices() {
		$plugin = 'themegrill-demo-importer/themegrill-demo-importer.php';

		if ( suffice_plugin_version_compare( $plugin, '1.6.3' ) ) {

			add_action( 'admin_notices', array( $this, 'tdi_notice' ), 0 );
		}

		add_action( 'admin_init', array( $this, 'ignore_tdi_notice' ), 0 );
	}

	public function tdi_notice() {
		$user_id        = get_current_user_id();
		$ignored_notice = get_user_meta( $user_id, 'ignore_suffice_tdi_notice', true );

		if ( $ignored_notice ) {
			return;
		}
		?>
		<div class="error updated tdi-notice" style="position:relative;">

			<?php
			$action_url = self_admin_url( 'plugins.php' );

			$msg = sprintf(
				/* Translators: 1: Notice text 2: Plugin Name 3. CTA  */
				'<p style="max-width: 700px;">' . esc_html__( '%1$s: Please update "%2$s" plugin to latest version to make sure your site is all secure. We released a security patch in the latest version of this plugin. %3$s', 'suffice' ) . '</p>',
				'<strong>' . esc_html__( 'Action Required', 'suffice' ) . '</strong>',
				'<strong>' . esc_html__( 'ThemeGrill Demo Importer', 'suffice' ) . '</strong>',
				sprintf(
					/* Translators: 1: CTA link 2: CTA text */
					'<a href="%1$s" class="">%2$s</a>',
					esc_url( $action_url ),
					esc_html__( 'Update Now', 'suffice' )
				)
			);

			$msg .= sprintf(
				/* Translators: 1: Plugin name */
				'<p style="display: inline-block;">' . esc_html__( 'Also, if the purpose of importing the demo via "%1$s" plugin is fulfilled, you can simply delete this plugin now.', 'suffice' ) . '</p>',
				'<strong>' . esc_html__( 'ThemeGrill Demo Importer', 'suffice' ) . '</strong>'
			);

			echo $msg;

			$close_tdi_notice = wp_nonce_url(
				add_query_arg( 'suffice_ignore_tdi_notice_nag', '0', admin_url() ),
				'suffice_tdi_notice_close_' . get_current_user_id(),
				'suffice_tdi_notice_nonce_nag'
			);
			?>
			<a class="notice-dismiss" style="text-decoration:none;" href="<?php echo esc_url( $close_tdi_notice );?>"></a>
		</div>
		<?php
	}

	public function ignore_tdi_notice() {
		$user_id = get_current_user_id();

		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}


		if ( isset( $_GET['suffice_ignore_tdi_notice_nag'] ) && '0' == $_GET['suffice_ignore_tdi_notice_nag'] ) {
			if ( isset( $_GET['suffice_tdi_notice_nonce_nag'] ) && wp_verify_nonce( $_GET['suffice_tdi_notice_nonce_nag'], 'suffice_tdi_notice_close_' . $user_id ) ) {
				add_user_meta( $user_id, 'ignore_suffice_tdi_notice', 'true', true );
			}
		}
	}

	public function remove_tdi_notice() {
		$get_all_users = get_users();

		foreach ( $get_all_users as $user ) {
			$ignored_notice = get_user_meta( $user->ID, 'ignore_suffice_tdi_notice', true );

			// Delete permanent notice remove data.
			if ( $ignored_notice ) {
				delete_user_meta( $user->ID, 'ignore_suffice_tdi_notice' );
			}
		}
	}

}

new Suffice_TDI_Notice();
