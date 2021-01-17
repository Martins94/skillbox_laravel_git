<?php

namespace App\Console\Commands;

use App\Notifications\PostsCreatedWeekly;
use Carbon\Carbon;
use Illuminate\Console\Command;

class NotifyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:notify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Команда уведомляющая всех о новых статьях';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = \App\Models\User::all();
        $posts = \App\Models\Post::whereDate('created_at', '>', Carbon::today()->subDays(7))->get();

        foreach ($users as $user) {
            $user->notify(new PostsCreatedWeekly($posts));
        }

        return 0;
    }
}
