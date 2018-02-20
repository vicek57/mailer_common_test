<?php
/**
 * FileTransformer File Doc Comment
 *
 * PHP version 7.2
 *
 * @category MailTransformer
 * @package  Project\Mailer\Common\Transformer
 * @author   Skora Vincent <vincent.skora9@etu.univ-lorraine.fr>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.hashbangcode.com/
 */
namespace Project\Mailer\Common\Transformer;
/**
 * MailTransformer Class Doc Comment
 *
 * @category MailTransformer
 * @package  Project\Mailer\Common\Transformer
 * @author   Skora Vincent <vincent.skora9@etu.univ-lorraine.fr>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.hashbangcode.com/
 */
use Project\Mailer\Common\Entity\Mail;

class MailTransformer
{
    protected static $INSTANCE = null;

    /**
     * Get MailTransformer instance
     *
     * @return null|MailTransformer return MailTransformer instance
     * else return new instance
     */
    public static function getInstance()
    {
        if (is_null(self::$INSTANCE)) {
            self::$INSTANCE = new MailTransformer();
        }
        return self::$INSTANCE;
    }

    /**
     * MailTransformer constructor.
     */
    protected function __construct()
    {

    }

    /**
     * Transform function
     *
     * @param Mail $mail mail to transform to array
     *
     * @return array
     */
    public function transform(Mail $mail): array
    {
        return array(
            "sender" => $mail->getSender(),
            "receivers" => $mail->getReceivers(),
            "object" => $mail->getObject(),
            "message" => $mail->getMessage(),
            "attachments" => $mail->getAttachments(),
        );
    }

}