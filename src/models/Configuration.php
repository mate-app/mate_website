<?php
class Configuration {
    public $mail_config = "config/mail_config.ini";

    public function getMailConfig() {
            return parse_ini_file(realpath($this->mail_config), TRUE);
    }
}
?>