<?php
    use \mysqli;
    class mysql extends \mysqli{
        protected $data = [
            'host' => '127.0.0.1',
            'user' => 'root',
            'password' => '',
            'dbname' => 'uadeo',
            'port' => 3306
        ];
    }
?>