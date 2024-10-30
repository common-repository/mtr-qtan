<?php
require_once 'include/CustomDashboard.php';
require_once 'include/API.class.php';

require_once 'include/Qtan.adminpage.php';
require_once 'include/widget/QtanPlayer.widget.php';
require_once 'include/controler/Website.Controler.php';
require_once 'include/lib/Curl.class.php';
require_once 'include/controler/Website.Controler.php';
class Qtan_Core {
    static $options;
	static function init() {

        QTANAPI::instance()->register();
        scbWidget::init( 'QtanPlayerwidget' );

        add_action('admin_notices', array( __CLASS__,'wpSub_admin_notices'));
        add_action('admin_init', array( __CLASS__,'fix_session_bs') );
        add_action('wp_head', array( __CLASS__,'add_header_metatag')) ;
        if (is_active_widget(false, false, 'qtan-player'))
        {

            wp_enqueue_script("qtan-player-classie", "http://tvschedule.senviet.org/wp-content/plugins/wp-qtanserver/public/scripts/classie.js", array(), false);
            wp_enqueue_script("qtan-player-script", "http://tvschedule.senviet.org/wp-content/plugins/wp-qtanserver/public/scripts/qtan.js", array("qtan-player-classie"), false);
            wp_enqueue_style("qtan-player-style", "http://tvschedule.senviet.org/wp-content/plugins/wp-qtanserver/public/style/qtan.css");

        }
        if(is_admin())
		{
            QTANCustomDashboard::instance()->register();
            new QtanAdminPage( __FILE__ );
		}
	}
    public static function add_header_metatag()
    {
        $defaults = array(
            'apikey' => ''
        );
        $options = new scbOptions('qtan_settings', __FILE__, $defaults);
        ?>
        <meta name="qtan_apikey" content="<?php echo $options->get("apikey",""); ?>">
        <?php
    }
    public static function fix_session_bs() {

        if(!session_id()) {
            session_start();
        }
    }

    function wpSub_admin_notices()
    {
        if ( isset($_SESSION['gcm_admin_notices']) && ( $_SESSION['gcm_admin_notices'] != "" ))
        {
            $adminMessage = $_SESSION['gcm_admin_notices'];
            unset($_SESSION['gcm_admin_notices']);
            echo '<div id="message" class="updated below-h2"><p>'.$adminMessage.'</p></div>';
        }
    }


}