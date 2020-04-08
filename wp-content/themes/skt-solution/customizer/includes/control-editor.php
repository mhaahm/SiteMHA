<?php
if ( ! class_exists( 'WP_Customize_Control' ) )
    return NULL;

/**
 * Class to create a custom tags control
 */
class complete_Editor_Control extends WP_Customize_Control
{
	public $type = 'editor';
      /**
       * Render the content on the theme customizer page
       */
	public function render_content() { ?>

		<label>
			<?php if ( !empty( $this->label ) ) : ?>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<?php endif; ?>
			<input type="hidden" <?php $this->link(); ?> value="<?php echo esc_textarea( $this->value() ); ?>" id="<?php echo $this->id; ?>" class="editorfield">
			
            <a onclick="javascript:WPEditorWidget.showEditor('<?php echo $this->id; ?>');" class="button edit-content-button"><?php _e( 'Edit content', 'complete' ); ?></a>
		</label>
		<?php
	}
}

/* New Class For Content Editor */
class Text_Editor_Custom_Control extends WP_Customize_Control
{
      /**
       * Render the content on the theme customizer page
       */
      public function render_content()
       {
            ?>
            <label>
            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
            <?php
                    $settings = array(
                      'textarea_name' => $this->id
                      );
					wp_editor( $this->value(), 'wpeditorwidget', $settings );
                  ?>
            </label>
            <?php
       }
}

	class WP_Customize_Textarea_Control extends WP_Customize_Control {
    public $type = 'textarea';
 
    public function render_content() {
        ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
            </label>
        <?php
    }
}

	class WP_Customize_Text_Control extends WP_Customize_Control {
    public $type = 'text';
 
    public function render_content() {
        ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <input type="text" <?php $this->link(); ?> <?php echo esc_html( $this->value() ); ?>>
            </label>
        <?php
    }
}