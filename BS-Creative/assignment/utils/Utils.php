<?

/**
 * Utils.php class
 *
 * Created on 21/04/2016 at 5:13 PM
 *
 * @author Jack
 */

namespace assignment\utils;

class Utils {

        const MESSAGE_SUCCESS = 0;
        const MESSAGE_ERROR = 1;

        /**
         * Go to a page
         *
         * @param $url
         * @param string $message
         * @param int $type
         */
        public static function go($url, $message = "", $type = self::MESSAGE_ERROR) {
                if($message === "") {
                        header("Location: " . $url);
                } else {
                        switch($type) {
                                case self::MESSAGE_SUCCESS:

                                        break;
                                case self::MESSAGE_ERROR:

                                        break;
                        }
                }
        }

        /**
         * Print seconds as a string
         *
         * @param $seconds
         * @return string
         */
        public static function secondsToString($seconds) {
                $m = floor($seconds / 60);
                $s = floor($seconds % 60);
                return (($m < 10 ? "0" : "") . $m . ":" . ($s < 10 ? "0" : "") . $s);
        }

}