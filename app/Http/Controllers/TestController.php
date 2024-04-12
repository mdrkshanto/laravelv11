<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use App\Repositories\Interfaces\TestRepositoryInterface;
use App\Traits\FileManagers;
// use Illuminate\Http\Request;

class TestController extends Controller
{
    use FileManagers;

    private $testRepository;

    public function __construct(TestRepositoryInterface $testRepository)
    {
        $this->testRepository = $testRepository;
    }

    public function index()
    {
        return $this->testRepository->index();
    }

    public function imageStore(TestRequest $request)
    {
        $directory = 'web/images/test';
        $file = $request->file('image');
        // $fileOriginalName = $file->getClientOriginalName();
        // return $fileOriginalName;
        return $this->imageUrl($file, $directory, 500, 500);
    }
}
