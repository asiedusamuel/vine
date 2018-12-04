<?php
function getStoreItem(){
    return array(
        "Books"=>array(
            [
                "title"=>"Living Waters With Rev. Dr. John Doe",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "price"=>"$12",
                "image"=>"./assets/images/pub/book-2.jpg"
            ],
            [
                "title"=>"Living Waters With Rev. Dr. John Doe",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "price"=>"$12",
                "image"=>"./assets/images/pub/book-1.png"
            ]
        ),
        "Videos"=>array([
                "title"=>"Hydroxybutyrate in Genetically",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "price"=>"$23",
                "image"=>"./assets/images/videos/vid-3.jpg"
            ]),
        "Audio"=>array([
                "title"=>"Our Daily Bread",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "price"=>"$10",
                "image"=>"./assets/images/videos/vid-4.jpg"
            ]),
    );
}

class videos{

    function list($cat){
        $list = '';
        $items = getStoreItem();
        global $controller;
        $cat = (!$cat?$controller->encode(array_key_first ($items )):$cat);
        $cat = $controller->decode($cat);
        if(isset($items[$cat])){
            $items = $items[$cat];
            foreach($items as $key=> $item){
                $list .= '<div class="card">
                            <div class="image">
                                <div class="img-text"><i class="icon clock"></i> '.$item["price"].'</div>
                                <img src="'.$item["image"].'">
                            </div>
                            <div class="content">
                                <a href="javascript:;" style="font-size:14px;" class="header text-truncate">
                                    '.$item["title"].'
                                </a>
                                <div class="description black">
                                   <a href="javascript:;" class="ui button primary"><i class="icon cart"></i> Buy Now</a>
                                </div>
                            </div>
                        </div>';
            }
            return $list;
        }
        return null;
    }

    function categories(){
        $list = '';
        global $controller;
        $videos = getStoreItem();
        foreach($videos as $cat => $vids){
            $list .= '<a href="./store/'.$controller->encode($cat).'/" class="list-group-item list-group-item-action">'.$cat.'</a>';
        }
        return $list;
    }
}