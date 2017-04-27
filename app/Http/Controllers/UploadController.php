<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class UploadController extends Controller
{
	public function getUpload() {
		return view('upload');
	}

	public function postUpload(Request $request) {
		//dd($request->photos);
		foreach ($request->photos as $photo) {
			$name = str_random(20);
            $extension = $photo->getClientOriginalExtension();

            $fileName = $name . '.' . $extension;
            $photo->move(base_path(). '/public/uploads/', $fileName);
        }

        return 'done';
	}
}