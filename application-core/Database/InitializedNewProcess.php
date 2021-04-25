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
    public function DefineNewlyCreatedProcess($ProcessName, $ExecutableFiles, $TriggersForProcess)
    {
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
