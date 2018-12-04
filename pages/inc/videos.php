<?php
function getVideos(){
    return array(
        "Sermons"=>array(
            [
                "title"=>"Living Waters With Rev. Dr. John Doe",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "author"=>"Rev. Dr. John Doe",
                "image"=>"./assets/images/videos/vid-1.jpg",
                "date"=>"2018-11-30 15:30:00",
                "duration"=>"23:45",
                "youtubeID"=>"uymJGElMd1Y"
            ],
            [
                "title"=>"Restoration With Rev. Dr. John Doe",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "author"=>"Rev. Dr. John Doe",
                "image"=>"./assets/images/videos/vid-2.jpg",
                "date"=>"2018-11-30 15:30:00",
                "duration"=>"03:45",
                "youtubeID"=>"CJx-MiPFQF0"
            ]
        ),
        "Daily Devotional Guides"=>array([
                "title"=>"Hydroxybutyrate in Genetically",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "author"=>"Rev. Dr. John Doe",
                "image"=>"./assets/images/videos/vid-3.jpg",
                "date"=>"2018-11-30 15:30:00",
                "duration"=>"23:45",
                "youtubeID"=>"uymJGElMd1Y"
            ]),
        "Inspiration"=>array([
                "title"=>"Our Daily Bread",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "author"=>"Rev. Dr. John Doe",
                "image"=>"./assets/images/videos/vid-4.jpg",
                "date"=>"2018-11-30 15:30:00",
                "duration"=>"23:45",
                "youtubeID"=>"uymJGElMd1Y"
            ]),
    );
}

class videos{

    function list($cat){
        $list = '';
        $videos = getVideos();
        global $controller;
        $cat = (!$cat?$controller->encode(array_key_first ($videos )):$cat);
        $cat = $controller->decode($cat);
        if(isset($videos[$cat])){
            $videos = $videos[$cat];
            foreach($videos as $key=> $video){
                $list .= '<div class="card">
                            <div class="blurring dimmable image">
                                <a href="./videos/'.$controller->encode($cat).'/'.$key.'/" class="ui dimmer">
                                    <div class="content">
                                        <div class="center">
                                        <div class="ui inverted button icon circular large"><i class="icon play"></i></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="img-text"><i class="icon clock"></i> '.$video["duration"].'</div>
                                <img src="'.$video["image"].'">
                            </div>
                            <div class="content">
                                <a href="./videos/'.$controller->encode($cat).'/'.$key.'/" style="font-size:14px;" class="header text-truncate">
                                    '.$video["title"].'
                                </a>
                                <div class="description black">
                                    <i class="icon folder open"></i> '.$cat.'
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
        $videos = getVideos();
        foreach($videos as $cat => $vids){
            $list .= '<a href="./videos/'.$controller->encode($cat).'/" class="list-group-item list-group-item-action">'.$cat.'</a>';
        }
        return $list;
    }
}