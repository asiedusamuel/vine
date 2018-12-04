<?php

function getEvents(){
    return array(
        [
            "title"=>"Holy shift: Strategic think", 
            "date"=>"2018-11-30 15:30:00",
            "location"=>"State Route, Madison US",
            "image"=>"./assets/images/articles/church-1.jpg",
            "content"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."
        ],
        [
            "title"=>"Event 2", 
            "date"=>"2018-12-1 02:30:00",
            "location"=>"State Route, Madison US",
            "image"=>"./assets/images/articles/events/event-1.jpg",
            "content"=>""
        ],
        [
            "title"=>"Event 3", 
            "date"=>"2018-12-5 02:30:00",
            "location"=>"State Route, Madison US",
            "image"=>"./assets/images/articles/events/event-1.jpg",
            "content"=>""
        ]
    );
}

class events{

    function list(){
        global $controller;
        $events = getEvents();
        $list = '';
        foreach($events as $key => $event){
            $list .= '<div class="row event-item">
                        <div class="col-md-3 col-sm-3 event-date">
                            <div class="day">'.$controller->formatDate($event["date"], "d").'</div>
                            <div class="month">'.$controller->formatDate($event["date"], "M, Y").'</div>
                        </div>
                        <div class="col-md-9 col-sm-9 event-description">
                            <h4><a href="./event/'.$controller->generateLink($event["title"]).'/'.$key.'/">'.$event["title"].'</a></h4>
                            <div class="description"><i class="icon clock"></i> Monday, 10:30 AM</div>
                            <div class="description"><i class="icon map marker"></i> State Route, Madison US</div>
                        </div>
                    </div>';
        }
        return $list;
    }
}