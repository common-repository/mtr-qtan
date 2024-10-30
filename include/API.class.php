<?php
require_once "APIResponse.php";
/**
 *
 */
class QTANAPI
{
    /**
     * @var null
     */
    public static $instance = null;

    /**
     * @return null
     */
    public static function instance()
    {
        if (self::$instance == null) {
            self::$instance = new QTANAPI();
        }
        return self::$instance;
    }

    /**
     *
     */
    function register()
    {
        add_action('wp_ajax_website_verify', array(__CLASS__, 'website_verify'));
    }

    /**
     *
     */
    function website_verify()
    {
        $apikey = $_REQUEST['apikey'];
        $website = $_REQUEST['website'];
        $result = array();
        $result["isVerify"] = WebsiteControler::verify($apikey, $website);
         json_encode($result);
        die();
    }

    function website_register()
    {

    }

    function gift_send()
    {

    }

    function gift_get()
    {

    }
}