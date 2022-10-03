<?php

class Telegram {

    const CHAT_ID = -883251800;
    const TOKEN = '5472970127:AAHGjwu_z7pYedTyqIlaOEC0IHL6bc1-gR8';

    public static function sendMessage($message)
    {
        $url = "https://api.telegram.org/bot" . self::TOKEN . "/sendMessage?chat_id=" . self::CHAT_ID;
        $url = $url . "&text=" . urlencode($message);
        $ch = curl_init();
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
        );
        curl_setopt_array($ch, $optArray);
        $result = curl_exec($ch);
        curl_close($ch);
    }

}
    curl_close($ch);
    
