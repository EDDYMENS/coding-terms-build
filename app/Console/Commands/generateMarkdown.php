<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use App\Http\Controllers\MainController;
use League\HTMLToMarkdown\HtmlConverter;

class generateMarkdown extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'markdown:generate {outputPath}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Convert special flavoured markdown to plain markdown';

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
        $outputPath = $this->argument('outputPath');
        $fileList = array_slice(scandir('resources/views/markdown'), 2);
        // dd($fileList);
        foreach($fileList as $file) {
            if($file == 'all-terms.md') continue;
            $fileName = str_replace('.md', '', $file);
            $markdown = view('markdown.'.$fileName)->render();
            file_put_contents($outputPath.'/'.$fileName.'.md', $markdown);
        }
        dump("Done!");
        return 1;
    }
}
