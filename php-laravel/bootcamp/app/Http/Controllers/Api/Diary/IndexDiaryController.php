<?php

namespace App\Http\Controllers\Api\Diary;

use App\Http\Controllers\Controller;
use App\Models\Diary;
use Illuminate\Http\Request;

class IndexDiaryController extends Controller
{
    protected $diary;

    /**
     * IndexDiaryController
     *
     * @param Diary $diary
     */
    public function __construct(
        Diary $diary
    ){
        $this->diary = $diary;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(
        Request $request
    ){
        return response($this->diary->all());
    }
}
