<?php
include 'navigation.php';
include 'functions.php';
class Controller
{
    private $defaultFormat = 'Y-m-d G:i:s';
    private $timeZone = 'UTC';
    private $scripts = [];
    private $css = [];
    private $parameters = [];
    private $bcPath = ''; // Breadcrumbs path parameter
    public function getMenu($nav = array())
    {
        global $navigation;
        return $this->getSubMenu($navigation);
    }

    public function GetDate($format = null)
    {
        $localTimezone = new \DateTimeZone($this->timeZone);
        $format = $format == null ? $this->defaultFormat : $format;
        $myDateTime = new \DateTime(date($format), $localTimezone);
        return ($myDateTime->format($format));
    }

    public function setBreadcrumbs($path)
    {
        $this->bcPath = $path;
    }

    public function breadcrumbs()
    {
        $path = explode('/', $this->bcPath);
        global $config;
        $bc = '<ol class="breadcrumb justify-content-center" style="background: transparent"><span style="margin-right: 10px">You are here</span>';
        if (count($path) != 0) {
            foreach ($path as $ph) {
                $bc .= '<li><a href="' . $config["url"] . $this->generateLink($ph) . '/">' . $ph . '</a></li>';
            }
        }
        $bc .= '</ol>';
        return $bc;
    }

    function generateLink($url){
        return trim(strtolower(preg_replace("![^a-z0-9]+!i", "-", $url)), '-');
    }

    public function formatDate($date, $format = null){
        $format = $format == null ? $this->defaultFormat : $format;
        return date($format, strtotime($date));
    }

    private function getSubMenu($nav)
    {
        $menu = '';
        foreach ($nav as $key => $value) {
            $link = '<a href="./' . $this->generateLink((is_numeric($key) ? $value : $key)) . '/">' . preg_replace_callback("/{{(.*?)}}/s",function(){return '';},(is_numeric($key) ? $value : $key)) . '</a>';
            //$parent = strtolower(preg_replace("/\s+/", "-", (is_numeric($key) ? $value : $key))) . '/';
            if (is_array($value)) {
                $menu .= '<li>' . $link . '';
                if ($value) {
                    $menu .= '<ul>' . $this->getSubMenu($value) . '</ul>';
                }
                $menu .= '</li>';
            } else {
                $menu .= '<li>' . $link . '</li>';
            }
        }
        return $menu;
    }

    public function loadScripts()
    {
        $scripts = '';
        foreach ($this->scripts as $script) {
            $scripts .= '<script src="' . $script . '"></script>';
        }
        return $scripts;
    }

    public function loadStylesheets()
    {
        $css1 = '';
        foreach ($this->css as $css) {
            $css1 .= '<link href="' . $css . '" rel="stylesheet" type="text/css">';
        }
        return $css1;
    }

    public function get($key){
        if (isset($this->parameters[$key])) {
            return $this->parameters[$key];
        }
        return 'undefined';
    }

    public function set($key, $value){
        $this->parameters[$key] = $value;
    }

    public function truncate($string, $length, $stopanywhere=false) {
        //truncates a string to a certain char length, stopping on a word if not specified otherwise.
        if (strlen($string) > $length) {
            //limit hit!
            $string = substr($string,0,($length -3));
            if ($stopanywhere) {
                //stop anywhere
                $string .= '...';
            } else{
                //stop on a word.
                $string = substr($string,0,strrpos($string,' ')).'...';
            }
        }
        return $string;
    }

    // Security, Encoding, Decoding
    private $skey = "d0a7e7997b6d5fcd55f4b5c32611b87cd923e88837b63bf2941ef819dc8ca282"; // change this
    private function safe_b64encode($string) {
        $data = base64_encode($string);
        $data = str_replace(array('+','/','='),array('-','_',''),$data);
        return $data;
    }
    private function safe_b64decode($string) {
        $data = str_replace(array('-','_'),array('+','/'),$string);
        $mod4 = strlen($data) % 4;
        if ($mod4) {
            $data .= substr('====', $mod4);
        }
        return base64_decode($data);
    }
    public function encode($string){ 
        if(!$string){return false;}
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'This is my secret key';
        $secret_iv = 'This is my secret iv';
        // hash
        $key = hash('sha256', $secret_key);
        
        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
        return $output;
    }
    public function decode($string){
        if(!$string){return false;}
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'This is my secret key';
        $secret_iv = 'This is my secret iv';
        // hash
        $key = hash('sha256', $secret_key);
        
        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        return $output;
    }
    // Security, Encoding, Decoding

}
