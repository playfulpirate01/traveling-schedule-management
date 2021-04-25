<?php

namespace Database;

use PDO;
use PDOException;

class InitializeNewConnection
{
    protected static $ConnectionHolder;

    private $LoginCredentials;
    private $DatabaseSettings;

    public function __construct($GivenPassword, $GivenUsername, $ServerAddress, $SelectedDatabase)
    {
        if (!isset($this->LoginCredentials['Username'])) {
            $this->LoginCredentials['Username'] = $GivenUsername;
        }

        if (!isset($this->LoginCredentials['Password'])) {
            $this->LoginCredentials['Password'] = $GivenPassword;
        }

        if (!isset($this->DatabaseSettings['ServerAddress'])) {
            $this->DatabaseSettings['ServerAddress'] = $ServerAddress;
        }

        if (!isset($this->DatabaseSettings['SelectedDatabase'])) {
            $this->DatabaseSettings['SelectedDatabase'] = $SelectedDatabase;
        }
    }

    public function ConnectToDatabase()
    {
        if (is_null(self::$ConnectionHolder)) {
            self::$ConnectionHolder = new PDO(
                printf(
                    'mysql:host=%s;dbname=%s;port=3306',
                    $this->DatabaseSettings['ServerAddress'],
                    $this->DatabaseSettings['SelectedDatabase']
                ),
                $this->LoginCredentials['Username'],
                $this->LoginCredentials['Password']
            );
            return self::$ConnectionHolder->beginTransaction();
        }
    }

    # TODO -> Create new functionality: Attach existing configuration to a new process.

    public function AttachExitingProcess(PDO $Connection, $MyProcess)
    {
    }

    # TODO -> Create new functionality: Detach existing configuration from active process.

    public function DetachExitingProcess()
    {
    }

    public function TerminateConnection()
    {
        if (!is_null(self::$ConnectionHolder)) {
            return self::$ConnectionHolder = null;
        }
    }

    protected static function __CheckConnectivityIssues()
    {
    }

    protected static function __CheckIfSettingsAreValid()
    {
    }
}

$test = new InitializeNewConnection('pass', 'test', '127.0.0.1', 'test');
$test->ConnectToDatabase();
