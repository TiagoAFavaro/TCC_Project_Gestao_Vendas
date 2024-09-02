<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;

class LogoController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $path = public_path('uploads/logos');
            $fileName = uniqid() . '_' . $logo->getClientOriginalName();
            $logo->move($path, $fileName);
            $logoPath = 'uploads/logos/' . $fileName;

            $logoModel = Logo::create(['path' => $logoPath]);

            return response()->json(['path' => $logoModel->path]);
        }

        return response()->json(['error' => 'No logo file uploaded.'], 400);
    }
}

