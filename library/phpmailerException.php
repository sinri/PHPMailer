<?php
/**
 * Created by PhpStorm.
 * User: Sinri
 * Date: 2017/7/18
 * Time: 15:34
 */

namespace sinri\smallphpmailer\library;

/**
 * PHPMailer exception handler
 * @package PHPMailer
 */
class phpmailerException extends \Exception
{
    /**
     * Prettify error message output
     * @return string
     */
    public function errorMessage()
    {
        $errorMsg = '<strong>' . $this->getMessage() . "</strong><br />\n";
        return $errorMsg;
    }
}