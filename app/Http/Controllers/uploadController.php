<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\prompt;
use App\Models\Code;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class uploadController extends Controller
{
    public function uploadImage(Request $request ){

        $validateData =$request->validate([
            'image_id' => 'rerequired',
            'username' => 'required',
            'image' => 'required|file|image|mimes:jpeg,png,jpg|max:10240',
            'name' => 'required|max:200',
            'Deskripsi' => 'required|max:10000',
        ]);

        $imagePath = $request->file('image')->store('ImagePost');
        $validateData['image'] = $imagePath;

        Image::create($validateData);
        return redirect()->route('main.show_profile', ['username' => $validateData['username']]);
    }
    public function updateImage(Request $request, $image_id){
        $request->validate([
            'name' => 'required|max:200',
            'Deskripsi' => 'required|max:10000',
            'image' => 'required|file|image|mimes:jpeg,png,jpg|max:10240'
        ]);

        $image = Image::findOrFail($image_id);
        $image->name = $request->input('name');
        $image->Deskripsi = $request->input('Deskripsi');

        if ($request->hasFile('image')) {
            Storage::delete('ImagePost/' . $image->image);
            $imagePath = $request->file('image')->store('ImagePost');
            $image->image = $imagePath;
        }
        $image->save();
        return redirect()->route('main.show_profile', ['username' => $image->username])->with('success', 'Image updated successfully');
    }

    public function uploadprompt(Request $request){
        
    $validateData = $request->validate([
        'prompt_id' => 'rerequired',
        'username' => 'required',
        'prompt' => 'required|max:1000',
        'name' => 'required|max:200',
        'Deskripsi' => 'required|max:10000'
    ]);

    Prompt::create($validateData);
    return redirect()->route('main.show_profile', ['username' => $validateData['username']]);
    }

    public function updatePrompt(Request $request, $prompt_id){
        $request->validate([
            'prompt' => 'required|max:1000',
            'name' => 'required|max:200',
            'Deskripsi' => 'required|max:10000',
        ]);

        $prompt = Prompt::findOrFail($prompt_id);
        $prompt->prompt = $request->input('prompt');
        $prompt->name = $request->input('name');
        $prompt->Deskripsi = $request->input('Deskripsi');

        $prompt->save();

        return redirect()->route('main.show_profile', ['username' => $prompt->username])->with('success', 'Prompt updated successfully');
    }
    
    public function uploadcode(Request $request){
        $validatedData = $request->validate([
            'username' => 'required',
            'code' => 'required|mimes:zip|max:20480',
            'name' => 'required|max:200',
            'Deskripsi' => 'required|max:10000'
        ]);

        $codePath = $request->file('code')->store('CodePost');
        $validatedData['code'] = $codePath;

        code::create($validatedData);
        return redirect()->route('main.show_profile', ['username' => $validatedData['username']]);
    }

    public function updatecode(Request $request, $code_id){
        $request->validate([
            'username' => 'required',
            'code' => 'required|mimes:zip|max:20480',
            'name' => 'required|max:200',
            'Deskripsi' => 'required|max:10000'
        ]);

        $code = code::findOrFail($code_id);
        $code->name = $request->input('name');
        $code->Deskripsi = $request->input('Deskripsi');

        if ($request->hasFile('code')) {
            Storage::delete('CodePost/' . $code->image);
            $codePath = $request->file('code')->store('CodePost');
            $code->code = $codePath;
        }
        $code->save();
        return redirect()->route('main.show_profile', ['username' => $code->username])->with('success', 'Code updated successfully');
    }
    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'name' => 'required|max:255',
            'deskripsi' => 'required|max:10000',
            'foto' => 'required|mimes:jpg,jpeg,png'
        ]);

        if ($request->hasFile('foto')) {
            if ($user->foto) {
                Storage::delete($user->foto);
            }
            $path = $request->file('foto')->store('fotoPost');
            $user->foto = $path;
        }

        $user->name = $request->input('name');
        $user->Deskripsi = $request->input('deskripsi');

        $user->save();

        return redirect()->route('main.show_profile', ['username' => $user->username])
                        ->with('success', 'Profile updated successfully');
    }

}