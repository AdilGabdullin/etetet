<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use function Sodium\add;

class Untitled extends Controller
{
    public function test()
    {

    }

    public function allFiles()
    {
        $dir = public_path() . '/files';
        $ids = collect(scandir($dir))
            ->diff(['.', '..', 'shares']);

        $users = User::select('id', 'name')
            ->whereIn('id', $ids)
            ->get();

        $userFiles = [];
        foreach ($users as $user) {
            $id = $user->id;
            $name = $user->name;
            $files = $this->recurScanDir('files/' . $id);
            $userFiles[] = [
                'name' => $name,
                'files' => $files,
            ];
        }

//        dd($userFiles);
        return view('all-files', ['users' => $userFiles]);
    }

    protected function recurScanDir($dir)
    {
        $folders = collect();
        $files = collect(scandir(public_path() . '/' . $dir))
            ->diff(['.', '..'])
            ->map(function ($file) use ($dir) {
                return "$dir/$file";
            })
            ->filter(function ($file) use ($dir, $folders) {
                if (is_dir($file)) {
                    $folders[] = $file;
                } else {
                    return true;
                }
            });

        $folders->each(function ($folder) use ($files) {
            $newFiles = $this->recurScanDir($folder);
            foreach ($newFiles as $nf) {
                $files->push($nf);
            }
        });

        return $files->toArray();
    }


}
