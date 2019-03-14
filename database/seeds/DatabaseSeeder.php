<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\Post;
use App\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'super admin']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        $this->createUsers();
        $this->createPostsComments();
    }

    protected function createUsers()
    {
        factory(User::class)->create([
            'email'   => 'super_admin@gmail.com',
            'role_id' => 1,
        ]);
        factory(User::class)->create([
            'email'   => 'admin@gmail.com',
            'role_id' => 2,
        ]);
        factory(User::class, 4)->create(['role_id' => 2]);

        factory(User::class)->create([
            'email'   => 'user@gmail.com',
            'role_id' => 3,
        ]);
        factory(User::class, 43)->create(['role_id' => 3]);
    }

    protected function createPostsComments()
    {
        $user_ids = User::all()->pluck('id');
        factory(Post::class, 25)
            ->make()
            ->each(function (Post $post, $key) use ($user_ids) {
                $post->user_id = $user_ids->random();
                $post->thumbnail = "test-images/$key.jpg";
                $post->save();
                factory(Comment::class, rand(0, 10))->create([
                    'post_id' => $post->id,
                    'user_id' => $user_ids->random(),
                ]);
            });
    }
}
