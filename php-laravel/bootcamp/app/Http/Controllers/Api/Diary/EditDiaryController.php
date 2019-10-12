<?php

namespace App\Http\Controllers\Api\Diary;

use App\Models\Diary;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class EditDiaryController extends Controller
{
    /**
     * Undocumented function
     *
     * @param string $id
     * @return void
     */
    public function __invoke(
        string $id
    ){
        $diary = Diary::where('id', $id)->first();

        if (is_null($diary)) {
            throw new NotFoundHttpException('Diary not found. id:' . $id);
        } else {
            return response($diary);
        }
    }
}
