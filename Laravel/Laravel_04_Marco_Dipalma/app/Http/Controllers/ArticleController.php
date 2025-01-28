<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public $arrayArticles= [
        ['id'=>'1', 'name'=>'Giovanni', 'surname'=>'Bianchi', 'subject'=>'Politica', 'article'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum odio quis fugit dolores quia ipsam, magnam repellendus vitae aliquam adipisci nemo saepe accusantium accusamus, corporis facilis repellat voluptatem ab est!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum odio quis fugit dolores quia ipsam, magnam repellendus vitae aliquam adipisci nemo saepe accusantium accusamus, corporis facilis repellat voluptatem ab est!'],

        ['id'=>'2', 'name'=>'Federico', 'surname'=>'Rossi', 'subject'=>'Tecnologia', 'article'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum odio quis fugit dolores quia ipsam, magnam repellendus vitae aliquam adipisci nemo saepe accusantium accusamus, corporis facilis repellat voluptatem ab est!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum odio quis fugit dolores quia ipsam, magnam repellendus vitae aliquam adipisci nemo saepe accusantium accusamus, corporis facilis repellat voluptatem ab est!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum odio quis fugit dolores quia ipsam, magnam repellendus vitae aliquam adipisci nemo saepe accusantium accusamus, corporis facilis repellat voluptatem ab est!'],

        ['id'=>'3', 'name'=>'Valentina', 'surname'=>'Verdi', 'subject'=>'Meteo', 'article'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum odio quis fugit dolores quia ipsam, magnam repellendus vitae aliquam adipisci nemo saepe accusantium accusamus, corporis facilis repellat voluptatem ab est!'],

    ];

    public function article(){
        return view('articles', ['articles'=>$this->arrayArticles]);
    }

    public function articleDetail($subject){

        foreach($this->arrayArticles as $article){
            
            if($subject==$article['subject']){
                return view('detail.articleDetail',['article'=>$article]);
            }

        }


    }

}
