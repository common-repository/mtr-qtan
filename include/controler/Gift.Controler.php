<?php
/**
 * Project : wp-gcm
 * User: thuytien
 * Date: 8/7/2014
 * Time: 9:51 AM
 */
class CLGiftControler{

    public static function isSongExist($url)
    {
        $urlInfo = parse_url($url);
        $object = null;
        switch ($urlInfo['host']) {
            case 'mp3.zing.vn':
                require_once plugin_dir_path( __FILE__ ) . '/../lib/Zingmp3.class.php';
                $object = new ZingMp3();
                break;
            case 'nhacso.net':
                require_once plugin_dir_path( __FILE__ ) . '/../lib/Nhacso.class.php';
                $object = new Nhacso();
                break;
            case 'soundcloud.com':
                require_once plugin_dir_path( __FILE__ ) . '/../lib/Soundcloud.class.php';
                $object = new SoundcloudAPI();
                break;
            case 'www.nhaccuatui.com':
                require_once plugin_dir_path( __FILE__ ) . '/../lib/NhacCuaTui.class.php';
                $object = new NhacCuaTui();
                break;
            case (preg_match('/.*zippyshare.com.*/', $urlInfo['host']) ? true : false) :
                require_once plugin_dir_path( __FILE__ ) . '/../lib/ZippyShare.php';
                $object = new ZippyShare();
                break;
        }
        if($object)
        {
            $trackList = $object->GetTrack($url);
            $trackCount = count($trackList);
            if( $trackCount > 0 )
            {
                return true;
            }
        }
        return false;
    }
}