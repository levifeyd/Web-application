<?php
    class PdoConnect {
        private const HOST = 'localhost';
        private const DB = 'test';
        private const USER = 'root';
        private const PASS = '';
        protected $DSN;
        public $PDO;
        public function __construct() {
            $this->DSN = "mysql:host=" . self::HOST . ";dbname=" . self::DB;
            $this->PDO = new PDO($this->DSN, self::USER, self::PASS);
        }
    }
