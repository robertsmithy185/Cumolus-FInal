<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Prompt;
use App\Models\Code;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('search');

        $images = collect();
        $prompts = collect();
        $codes = collect();
        $users = collect();

        if ($query) {
            $images = Image::where('name', 'LIKE', "%{$query}%")->get();
            $prompts = Prompt::where('name', 'LIKE', "%{$query}%")->get();
            $codes = Code::where('name', 'LIKE', "%{$query}%")->get();
            $users = User::where('username', 'LIKE', "%{$query}%")
                        ->orWhere('name', 'LIKE', "%{$query}%") // Assuming you have a 'name' field for full name search
                        ->get();
        }

        $username = Auth::check() ? Auth::user()->username : null;
        
        if ($images->isNotEmpty() && $prompts->isEmpty() && $codes->isEmpty() && $users->isEmpty()) {
            return view('image', compact('images', 'username'));
        }

        if ($prompts->isNotEmpty() && $images->isEmpty() && $codes->isEmpty() && $users->isEmpty()) {
            return view('prompt', compact('prompts', 'username'));
        }

        if ($codes->isNotEmpty() && $images->isEmpty() && $prompts->isEmpty() && $users->isEmpty()) {
            return view('code', compact('codes', 'username'));
        }

        if ($users->isNotEmpty() && $images->isEmpty() && $prompts->isEmpty() && $codes->isEmpty()) {
            return view('creator', compact('users', 'username')); // Assume you have a view for users
        }

        return view('main', compact('images', 'prompts', 'codes', 'users', 'username'));
    }
}
