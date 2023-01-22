<?php
//    $user = "root";
//    $password = "";
//    $host = "localhost";
//    $db="test";
//    $dbh = 'mysql:host='.$host.';dbname='.$db;
//    $pdo = new PDO($dbh, $user, $password);
//?>
<?php
class PdoConnect {

    private const HOST = 'localhost';
    private const DB = 'test';
    private const USER = 'root';
    private const PASS = '';

    protected $DSN;
    protected $OPD;
    public $PDO;

    public function __construct() {

        $this->DSN = "mysql:host=" . self::HOST . ";dbname=" . self::DB;

        $this->PDO = new PDO($this->DSN, self::USER, self::PASS);
    }
}
