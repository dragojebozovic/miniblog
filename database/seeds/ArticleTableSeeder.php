<?php

use Illuminate\Database\Seeder;
use Miniblog\Article;

class ArticleTableSeeder extends Seeder {

    public function run()
    {
        DB::table('articles')->delete();

        Article::create(array('title' => 'title1',
        					'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac fermentum felis, eu semper sem. Cras nec lorem quis ipsum commodo suscipit. Vestibulum in nisi sit amet nisl pellentesque ultrices quis id lacus. Etiam mauris est, iaculis et velit a, tristique hendrerit ante. Pellentesque pulvinar nibh sed augue euismod sagittis. Aenean ut magna tellus. Duis malesuada tortor fringilla arcu vehicula pulvinar. Curabitur varius quam dolor, at ullamcorper dolor mattis vitae. Integer sed ipsum semper, iaculis metus pretium, varius urna. Fusce placerat finibus ipsum, ut mollis metus placerat eget.</p>',
        					'excerpt'=>'Lorem impsumasfd excertp',
                            'user_id'=>'1'));


        Article::create(array('title' => 'title2',
        					'body'=>'<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>',
        					'excerpt'=>'Lorem impsumasfd excertp',
                            'user_id'=>'1'));
    }

}
