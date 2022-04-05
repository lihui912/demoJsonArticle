<?php

namespace App\Console\Commands;

use App\Models\JsonUnescapedArticle;
use Illuminate\Console\Command;

class InsertJsonUnescapedArticleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jsonArticle:insertUnescaped';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert unescaped JSON article';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $title = '标题';
        $data = ['title' => $title, 'content' => '内容'];

        $jsonUnescaped = new JsonUnescapedArticle([
            'title' => $title,
            'data' => $data,
        ]);

        $jsonUnescaped->save();

        return 0;
    }
}
