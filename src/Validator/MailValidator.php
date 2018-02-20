<?php
/**
 * MailValidator File Doc Comment
 *
 * PHP version 7.2
 *
 * @category MailValidator
 * @package  Project\Mailer\Common\Validator
 * @author   Skora Vincent <vincent.skora9@etu.univ-lorraine.fr>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.hashbangcode.com/
 */
namespace Project\Mailer\Common\Validator;
/**
 * MailValidator Class Doc Comment
 *
 * @category MailValidator
 * @package  Project\Mailer\Common\Validator
 * @author   Skora Vincent <vincent.skora9@etu.univ-lorraine.fr>
 * @author   García Ricardo <richgarcia459@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.hashbangcode.com/
 */

use Project\Mailer\Common\Entity\Mail;

class MailValidator
{

    protected static $instance = null;

    protected $errors;

    /**
     * Get MailValidator instance
     *
     * @return null|MailValidator return MailValidator instance
     * else return new instance
     */
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new MailValidator();
        }
        return self::$instance;
    }

    /**
     * MailValidator constructor
     */
    protected function __construct()
    {

    }

    /**
     * Validate a mail
     *
     * @param Mail $mail test each field from the object mail
     *
     * @return true if the mail is valid
     * else return false
     */
    public function validate(Mail $mail)
    {
        $this->errors = array();

        if (!is_null($file->getUuid())) {
            if (empty(trim($file->getUuid()))) {
                $this->errors['uuid'] = 'uuid error';
            }
        }

        if (!is_null($file->getName())) {
            if (empty(trim($file->getName()))) {
                $this->errors['name'] = 'name error';
            }
        }

        if (!is_null($file->getContentType())) {
            if (empty(trim($file->getContentType()))) {
                $this->errors['contentType'] = 'contentType error';
            }
        }

        if (is_null($file->getSize())) {
            $this->errors['size'] = 'size error';
        }

        if (is_null($file->getBlob())) {
            $this->errors['blob'] = 'blob error';
        }

        if (!empty($this->errors)) {
            return false;
        }

        return true;
    }

    /**
     * Get errors from validation
     *
     * @return null|array return validation errors
     */
    public function getValidationErrors(): ?array
    {
        /*return implode("\\n", $this->error);*/
        return $this->errors;
    }

}
