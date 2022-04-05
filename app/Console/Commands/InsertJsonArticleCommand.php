<?php

namespace App\Console\Commands;

use App\Models\JsonArticle;
use Illuminate\Console\Command;

class InsertJsonArticleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jsonArticle:insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert JSON article';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $title = '标题';
        $data = ['title' => $title, 'content' => '内容'];

        $jsonArticle = new JsonArticle(
            [
                'title' => $title,
                'data' => $data,
            ]
        );

        $jsonArticle->save();

        return 0;
    }
}
