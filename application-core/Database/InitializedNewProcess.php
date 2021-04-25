 <?php

    namespace Database;

    interface Process
    {
        public function DefineNewlyCreatedProcess($ProcessName, $ExecutableFiles, $TriggersForProcess);
        public function LaunchMyPredefinedProcess($SelectedProcess, $WhenToApply, $WhenToTerminate);

        public static function CheckIfProcessIsValid($GivenProcessToCheck);
        public static function MonitorCurrentProcess($GivenProcessToMonitor);
    }

    class InitializedNewProcess implements Process
    {
        public static $MyProcess;
        public static $ProcessIsActive;

        private $ProcessLogsFiles;

        public function __construct()
        {
            if (!isset(self::$ProcessIsActive)) {
                $this->ProcessLogsFiles = null;
                self::$MyProcess = null;

                self::$ProcessIsActive = false;
            }
        }

        public function DefineNewlyCreatedProcess($ProcessName, $ExecutableFiles, $TriggersForProcess)
        {
            if (is_null(self::$MyProcess)) {
                if (!isset(self::$MyProcess['GivenName'])) {
                    self::$MyProcess['GivenName'] = $ProcessName;
                }
                if (!isset(self::$MyProcess['FilesToExecute'])) {
                    if (file_exists(printf("%s/%s", strlen($_SERVER['DOCUMENT_ROOT'] . "/" . __DIR__), $ExecutableFiles))) {
                        for ($FileIterator = 1; $FileIterator <= count($ExecutableFiles); $FileIterator++) {
                            self::$MyProcess['FilesToExecute'][$FileIterator] = $ExecutableFiles[$FileIterator]['FileName'];
                        }
                    }
                }
            }
        }

        public function LaunchMyPredefinedProcess($SelectedProcess, $WhenToApply, $WhenToTerminate)
        {
        }

        public static function CheckIfProcessIsValid($GivenProcessToCheck)
        {
        }
        public static function MonitorCurrentProcess($GivenProcessToMonitor)
        {
        }
    }

    class TerminateNewProcess implements InitializedNewProcess
    {
    }
