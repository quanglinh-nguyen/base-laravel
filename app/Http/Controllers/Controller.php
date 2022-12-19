<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Show a positive, successful notification to the user on next view load.
     */
    protected function showSuccessNotification(string $message): void
    {
        session()->flash('success', $message);
    }

    /**
     * Show a warning notification to the user on next view load.
     */
    protected function showWarningNotification(string $message): void
    {
        session()->flash('warning', $message);
    }

    /**
     * Show an error notification to the user on next view load.
     */
    protected function showErrorNotification(string $message): void
    {
        session()->flash('error', $message);
    }
}
