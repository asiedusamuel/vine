<?php
function getBlogs(){
    return array(
        [
            "author"=>"Admin",
            "date"=>"2018-11-30 15:30:00",
            "title"=>"Standard Blog Post",
            "image"=>"./assets/images/articles/church-1.jpg",
            "content"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
        ],
        [
            "author"=>"Admin",
            "date"=>"2018-11-30 15:30:00",
            "title"=>"Standard Blog Post 2",
            "image"=>"./assets/images/articles/evelyn-yarney.jpg",
            "content"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
        ]
    );
}

class blogs{

    function list(){
        global $controller;
        $blogs = getBlogs();
        $list = '';
        foreach($blogs as $key => $blog){
            $list .= '<div class="column">
                        <div class="ui fluid card">
                            <div class="image">
                                <img src="'.$blog["image"].'">
                            </div>
                            <div class="content">
                                <a class="header">'.$blog["title"].'</a>
                                <div class="meta">
                                    <i class="icon calendar"></i>
                                    <em class="date">'.$controller->formatDate($blog["date"],'l, jS M, Y').' By '.$blog["author"].'</em>
                                </div>
                                <div class="description">
                                    '.$controller->truncate($blog["content"], 120).'
                                </div>
                            </div>
                            <div class="extra content">
                                <a href="./blog/'.$controller->generateLink($blog["title"]).'/'.$key.'/" class="ui button">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>';
        }
        return $list;
    }
}