<?php
class QtanAdminPage extends scbBoxesPage
{
    private $settings_fields;

    function setup()
    {
        $this->args = array(
            'page_title' => 'QTAN',
            'menu_title ' => 'QTAN Setting',
            'toplevel' => 'menu'
        );
        $this->boxes = array(
            // id, title, column
            array('settings', 'Settings Box', 'normal'),
            array('playersettings', 'Player Settings', 'normal'),
            array('right1', 'Lập trình Sen Việt', 'side'),
            array('right2', 'Mùa Tóc Rối', 'side'),
        );

        $defaults = array(
            'apikey' => ''
        );
        $this->options = new scbOptions('qtan_settings', __FILE__, $defaults);

        $this->settings_fields = array(
            array(
                'title' => 'API Key',
                'name' => 'apikey',
                'type' => 'text',
                'extra'=>array("readonly" => "readonly"),
                'desc' => "<br>". __( 'Leave it blank, just click "Get API key"', $this->textdomain )
            ),
        );
    }

    function page_head()
    {
        wp_enqueue_style('fee-admin', $this->plugin_url . 'admin/admin.css', array(), FEE_VERSION);
    }

    function settings_handler()
    {
        if (!isset($_POST['get_api_key']))
            return;

        $to_update = scbForms::validate_post_data($this->settings_fields);
        $this->requestAPI($to_update);

    }

    function requestAPI($to_update = array())
    {
        $result = CLWebsiteControler::registerAPI();
        if(is_wp_error($result))
        {
            $to_update["apikey"] = "";
            echo scb_admin_notice("Register fail", $class = 'error' );
        }
        else
        {
            $to_update["apikey"] = $result->apikey;
            echo scb_admin_notice("Register success", $class = 'updated' );
        }
        $this->options->update($to_update);
    }

    function settings_box()
    {
        $this->requestAPI();
        $out = $this->table( $this->settings_fields );
        echo $this->form_wrap($out, 'Get API Key', 'get_api_key');
    }

    function playersettings_box()
    {
        $out = $this->table( $this->settings_fields );
        echo $this->form_wrap($out, 'Get API Key', 'get_api_key');
    }

    function right1_box()
    {
        echo '<div class="rss-widget">';
        wp_widget_rss_output("http://laptrinh.senviet.org/feed", array('items' => 3, 'show_author' => 0, 'show_date' => 0, 'show_summary' => 1));
        echo '</div>';
    }

    function right2_box()
    {
        echo '<div class="rss-widget">';
        wp_widget_rss_output("http://muatocroi.com/feed", array('items' => 3, 'show_author' => 0, 'show_date' => 1, 'show_summary' => 1));
        echo '</div>';
    }
}