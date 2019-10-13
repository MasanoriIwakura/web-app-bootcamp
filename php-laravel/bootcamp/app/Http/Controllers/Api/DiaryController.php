<?php

namespace App\Http\Controllers\Api;

use App\Models\Diary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Diary\RegisterDiaryRequest;

class DiaryController extends Controller
{
    /**
     * @var Diary
     */
    protected $diary;

    /**
     * DiaryController
     *
     * @param Diary $diary
     */
    public function __construct(
        Diary $diary
    ) {
        $this->diary = $diary;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json($this->diary->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  RegisterDiaryRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(RegisterDiaryRequest $request)
    {
        return response()->json(
            $this->diary->create($request->all())
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $diary = $this->diary->find($id);

        if (is_null($diary)) {
            throw new NotFoundHttpException("Diary not found. id:${id}");
        }

        return response()->json($diary);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  RegisterDiaryRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(RegisterDiaryRequest $request, $id)
    {
        $diary = $this->diary->find($id);

        if (is_null($diary)) {
            throw new NotFoundHttpException("Diary not found. id:${id}");
        }

        $diary->title = $request->input('title');
        $diary->body = $request->input('body');

        return response()->json($diary->save());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $diary = $this->diary->find($id);

        if (is_null($diary)) {
            throw new NotFoundHttpException("Diary not found. id:${id}");
        }

        return response()->json($diary->delete());
    }
}
