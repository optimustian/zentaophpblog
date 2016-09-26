<?php
/**
 * Helper类从baseHelper类继承而来，您可以在这个文件中对其进行扩展。
 * This helper class extends from the baseHelper class, and you can
 * extend it by change this helper.class.php file.
 *
 * @package framework
 *
 * The author disclaims copyright to this source code. In place of
 * a legal notice, here is a blessing:
 * 
 *  May you do good and not evil.
 *  May you find forgiveness for yourself and forgive others.
 *  May you share freely, never taking more than you give.
 */
include FRAME_ROOT . '/base/helper.class.php';
class helper extends baseHelper
{
	public static function cutstr_html($string, $sublen)    
    {
        $string = strip_tags($string);
        $string = preg_replace ('/\n/is', '', $string);
        $string = preg_replace ('/ |　/is', '', $string);
        $string = preg_replace ('/&nbsp;/is', '', $string);
        preg_match_all("/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/", $string, $t_string);   
        if(count($t_string[0]) - 0 > $sublen) $string = join('', array_slice($t_string[0], 0, $sublen))."…";   
        else $string = join('', array_slice($t_string[0], 0, $sublen));
        return $string;
    }

    function getImgs($content,$order='ALL'){
        $pattern="/<img.*?src=[\'|\"](.*?(?:[\.gif|\.jpg]))[\'|\"].*?[\/]?>/";
        preg_match_all($pattern,$content,$match);
        if(isset($match[1])&&!empty($match[1])){
            if($order==='ALL'){
                return $match[1];
            }
            if(is_numeric($order)&&isset($match[1][$order])){
                return $match[1][$order];
            }
        }
        return '';
    }
}
