<?php

class CLWebsiteControler{
    /**
     * @param $appID
     * @return bool
     */
    public static function registerAPI()
    {
        $serverURL = "http://tvschedule.senviet.org/wp-admin/admin-ajax.php?action=website_register?appid=35";
        $curl = curlClass::getInstance();
        $result = $curl->fetchURL($serverURL);
        $response = json_decode($result);
        if(!isset($response->error))
        {
            return $response;
        }
        else
        {
            return new WP_Error("registerAPI", $response->error);
        }
    }
} 