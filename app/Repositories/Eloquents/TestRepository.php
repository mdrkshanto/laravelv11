<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Interfaces\TestRepositoryInterface;

;

class TestRepository implements TestRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function index()
    {
        // $directory = 'TestDirectory';
        // makeDirectory($directory);
        // return back();
        return view('test');
    }
}
