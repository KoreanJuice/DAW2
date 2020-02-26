<?php 
class config
{
    private $dbParams = [];

    public function __construct()
    {
        $this->dbParams = [
            'driver' => 'pdo_sqlsrv',
            'server' => 'PC20\MSSQLSERVER14', //'(local)',
            'port' => '1433',
            'database' => 'Biblioteca',
            'user' => null,
            'pass' => null,
            'charset' => 'utf-8'
        ];
    }

    public function getDbParams(): array
    {
        return $this->dbParams;
    }
}