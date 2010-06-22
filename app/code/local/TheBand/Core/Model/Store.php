<?php

class TheBand_Core_Model_Store extends Mage_Core_Model_Store
{

    public function getBaseUrl($type=self::URL_TYPE_LINK, $secure=null)
    {
        $store_code = $this->getCode();
        $url = parent::getBaseUrl($type, $secure);

        if ($dev_host = @$_SERVER['SERVER_NAME']) {

            $host = parse_url($url, PHP_URL_HOST);

            $url = str_replace('://'.$host.'/', '://'.$dev_host.'/', $url);
        }

        return $url;
    }
}

?>

