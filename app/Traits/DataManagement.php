<?php

namespace App\Traits;

use Validator;
use App\Models\task;
use Illuminate\Support\Collection;

ini_set('max_execution_time', 0);

trait DataManagement
{
    use ApiResponser;

    private function convertCollection($data)
    {
        $collection = Collection::make($data);

        return $collection;
    }

    protected function getQuery()
    {
        return $this->convertCollection(task::get());
    }

    protected function getTask($id)
    {
        return $this->convertCollection(task::where('id', $id->id)->orwhere('status', $id->id)->get());
    }

    protected function task($json)
    {
        try {
            $validador = Validator::make($json->all(), [
                'title' => 'required|max:100|string',
                'description' => 'required|max:100|string',
                'status' => 'required',
                'due_date' => 'required|date',
            ]);
            if ($validador->fails()) {
                return response()->json([
                    'status' => 'validator',
                    'errors' => $validador->errors(),
                ]);
            }

            $data =  new task();
            $data->title = $json->title;
            $data->description = $json->description;
            $data->status = $json->status;
            $data->due_date = $json->due_date;
            $data->save();


            return response()->json(['status' => 'save']);
        } catch (\Exception $e) {
            return response()->json([
                'error' => [
                    'message' => $e->getMessage(),
                    'file' => $e->getFile(),
                    'line' => $e->getLine(),
                    'code' => $e->getCode(),
                ],
            ]);
        }
    }

    protected function updateTask($json)
    {
        try {
            $validador = Validator::make($json->all(), [
                'id' => 'required',
                'title' => 'required|max:100|string',
                'description' => 'required|max:100|string',
                'status' => 'required',
                'due_date' => 'required|date',
            ]);
            if ($validador->fails()) {
                return response()->json([
                    'status' => 'validator',
                    'errors' => $validador->errors(),
                ]);
            }

            $data =  new task();
            $data = task::where('id', $json->id)->first();
            $data->title = $json->title;
            $data->description = $json->description;
            $data->status = $json->status;
            $data->due_date = $json->due_date;
            $data->save();


            return response()->json(['status' => 'update']);
        } catch (\Exception $e) {
            return response()->json([
                'error' => [
                    'message' => $e->getMessage(),
                    'file' => $e->getFile(),
                    'line' => $e->getLine(),
                    'code' => $e->getCode(),
                ],
            ]);
        }
    }

    private function transform(Collection $collection)
    {
        if ($collection->isEmpty()) {
            return $collection;
        }
        $transformer = $collection->first()->transformer;
        $collection = $this->transformData($collection, $transformer);

        return $collection;
    }
}
