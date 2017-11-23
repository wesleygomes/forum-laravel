<?php

use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $threads = \App\Models\Thread::all();
        $threads->each(function ($thread) {
            factory(\App\Models\Reply::class, rand(5, 10))->create(['thread_id' => $thread->id]);
        });
    }
}
