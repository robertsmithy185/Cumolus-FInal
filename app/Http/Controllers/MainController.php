<?php

// app/Http/Controllers/MainController.php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use App\Models\prompt;
use App\Models\User;
use App\Models\code;

class MainController extends Controller
{
    public function index() {
        $username = auth()->user()->username;

        $images = Image::all();
        $prompts = Prompt::all();
        $codes = code::all();
        $users = User::where('username', '!=', 'admin')->get();
        return view('main', compact('images', 'prompts', 'codes' ,'users' , 'username'));
    }

    public function upload(){
        return view('upload');
    }
    
    public function image_main(){
        $images = Image::all();
        return view('image', ['images' => $images]);
    }

    public function prompt_main(){
        $prompts = Prompt::all();
        return view('prompt', ['prompts' => $prompts]);
    }

    public function Code_main(){
        $codes = code::all();
        return view('Code', ['codes' => $codes]);
    }

    public function Creator_main(){
        $users = User::where('username', '!=', 'admin')->get();
        return view('Creator', ['users' => $users]);
    }

    public function upload_image(){
        return view('imageUpload');
    }

    public function upload_prompt(){
        return view('promptUpload');
    }

    public function upload_Code(){
        return view('CodeUpload');
    }

    public function view_Conten(){
        return view('viewContent');
    }

    public function not_found(){
        return view('not_found');
    }

    public function populer(){
        return view('populer');
    }

    public function newest(){
        return view('populer');
    }

    public function showProfile($username){
        $images = Image::where('username', $username)->get();
        $prompts = Prompt::where('username', $username)->get();
        $codes = code::where('username', $username)->get();
        $user = User::where('username', $username)->first();

        if (!$user) {
            return view('not_found');
        }

        if ($images->isEmpty()) {
            $images = [];
        }
        if ($prompts->isEmpty()) {
            $prompts = [];
        }
        if ($codes->isEmpty()) {
            $codes = [];
        }
        return view('profil', ['images' => $images, 'prompts' => $prompts , 'codes' => $codes , 'user' => $user , 'username' => $username]);
    }


    public function view_profil_save($username){
        $user = User::where('username', $username)->first();
        if (!$user) {
            return view('not_found');
        }

        return view('saveProfil', ['user' => $user ,'username' => $username]);
    }

    public function view_profil_edit(){
        return view('edit-profil');
    }

    public function viewContent($name, $image_id){
        $image = Image::where('name', $name)
                    ->where('image_id', $image_id)
                    ->first();
        if (!$image) {
            return redirect('/')->with('error', 'Image not found');
        }
        return view('mykonten', ['image' => $image]);
    }

    public function viewPromptContent($name, $prompt_id)
    {
        // Load prompt with comments and associated user information
        $prompt = Prompt::where('name', $name)
                    ->where('prompt_id', $prompt_id)
                    ->with('comments.user')
                    ->first();
        
        if (!$prompt) {
            return redirect('/')->with('error', 'Prompt not found');
        }

        return view('prompt_content', ['prompt' => $prompt]);
    }

    public function viewCodetContent($name, $code_id){
        $code = code::where('name',$name)
                    ->where('code_id', $code_id)
                    ->with('comments.user')
                    ->first();
        if (!$code) {
            return redirect('/')->with('error', 'Prompt not found');
        }
        return view('code_conten', ['code' => $code]);
    }


    public function deleteImage($image_id , $username){
        try {
            $image = Image::findOrFail($image_id);
            Storage::delete('ImagePost/' . $image->image);
            $image->delete();
    
            return redirect('/profil/' . $username)->with('success', 'Image deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete image');
        }
    }
    public function deleteprompt($prompt_id , $username){

        try {
            $prompt = Prompt::findOrFail($prompt_id);
            $prompt->delete();

            return redirect('/profil/' . $username)->with('success', 'Prompt deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete prompt');
        }
    }
    public function deletecode($code_id , $username){
        try {
            $code = code::findOrFail($code_id);
            Storage::delete('ImagePost/' . $code->code);
            $code->delete();
    
            return redirect('/profil/' . $username)->with('success', 'Code deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete image');
        }
    }

    public function downloadImage($image_id){
        $image = Image::findOrFail($image_id);
        return response()->download(storage_path('app/public/' . $image->image));
    }
    public function downloadcode($code_id){
        $code = code::findOrFail($code_id);
        return response()->download(storage_path('app/public/' . $code->code));
    }

    public function editImage($image_id){
        $image = Image::findOrFail($image_id);
        return view('imageUpdate', ['image' => $image]);
    }

    public function editprompt($prompt_id){
        $prompt = Prompt::findOrFail($prompt_id);
        return view('promptUpdate', ['prompt' => $prompt]);
    }

    public function editcode($code_id){
        $code = code::findOrFail($code_id);
        return view('codeupdate', ['code' => $code]);
    }
};

