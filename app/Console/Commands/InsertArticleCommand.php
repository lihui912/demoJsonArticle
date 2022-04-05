<?php

namespace App\Console\Commands;

use App\Models\Article;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class InsertArticleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'article:insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert article';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $title = '标题';
        $content = '内容';

        $article = new Article([
            'title' => $title,
            'body' => $content,
            'slug' => Str::of($title)->slug('-', 'zh'),
        ]);

        $article->save();

        return 0;
    }
}
