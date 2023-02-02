<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['post_title' => 'Blogpost 1','post_slug'=>'blogpost_1', 'post_meta_keyword' => 'coffee, sunset, seminyak', 'post_meta_description' => 'Meta description for each blogpost will be differenf from each other', 'post_image' => 'https://balicoffeeclub.com/wp-content/uploads/2022/10/Untitled-design-1-852x675.jpg', 'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam scelerisque urna dignissim ligula molestie molestie. Aliquam vitae lectus a elit eleifend commodo. Curabitur condimentum turpis non odio consectetur, ut ornare dolor lobortis. Integer maximus blandit congue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin fermentum, nisl quis rutrum volutpat, ante nunc faucibus nisl, ut faucibus lacus turpis sit amet nibh. Duis maximus, mi eget pellentesque luctus, lectus nisi faucibus velit, non dapibus neque magna vel dui. Maecenas ut lectus sit amet leo molestie imperdiet eu at ex. In sed finibus velit, in eleifend nunc. Vestibulum aliquet eros a gravida vestibulum. Maecenas fringilla pretium cursus. Mauris iaculis pharetra pulvinar. Ut accumsan vehicula purus sed varius. Aenean vulputate erat eu turpis scelerisque, ut tempor mi iaculis. Etiam ac erat sit amet dui sagittis molestie. Pellentesque luctus gravida rutrum.'],
            ['post_title' => 'Blogpost 2','post_slug'=>'blogpost_2', 'post_meta_keyword' => 'coffee, sunset, seminyak', 'post_meta_description' => 'Meta description for each blogpost will be differenf from each other', 'post_image' => 'https://balicoffeeclub.com/wp-content/uploads/2022/11/RICE-BOWL-1.jpg', 'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam scelerisque urna dignissim ligula molestie molestie. Aliquam vitae lectus a elit eleifend commodo. Curabitur condimentum turpis non odio consectetur, ut ornare dolor lobortis. Integer maximus blandit congue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin fermentum, nisl quis rutrum volutpat, ante nunc faucibus nisl, ut faucibus lacus turpis sit amet nibh. Duis maximus, mi eget pellentesque luctus, lectus nisi faucibus velit, non dapibus neque magna vel dui. Maecenas ut lectus sit amet leo molestie imperdiet eu at ex. In sed finibus velit, in eleifend nunc. Vestibulum aliquet eros a gravida vestibulum. Maecenas fringilla pretium cursus. Mauris iaculis pharetra pulvinar. Ut accumsan vehicula purus sed varius. Aenean vulputate erat eu turpis scelerisque, ut tempor mi iaculis. Etiam ac erat sit amet dui sagittis molestie. Pellentesque luctus gravida rutrum.'],
        ];
        DB::table('post')->insert($post);
    }
}
