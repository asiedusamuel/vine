<?php
function getPubs(){
    return array(
        "2018"=>array(
            [
                "title"=>"Living Waters",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "author"=>"Rev. Dr. John Doe",
                "image"=>"./assets/images/pub/book-1.png"
            ],
            [
                "title"=>"Restoration",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "author"=>"Rev. Dr. John Doe",
                "image"=>"./assets/images/pub/book-2.jpg"
            ]
        ),
        "2017"=>array([
                "title"=>"Hydroxybutyrate in Genetically",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "author"=>"Rev. Dr. John Doe",
                "image"=>"./assets/images/pub/book-1.png"
            ]),
        "2016"=>array([
                "title"=>"Our Daily Bread",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "author"=>"Rev. Dr. John Doe",
                "image"=>"./assets/images/pub/book-3.jpg"
            ]),
    );
}

class publications{
    function list(){
        $list = '';
        $pubs = getPubs();
        foreach($pubs as $year => $pub){
            $list .= '<section class="block">
                        <div class="each-year">
                            <div class="year-title">'.$year.'</div>
                            '.$this->listPubs($pub).'
                        </div>
                      </section>';
        }
        return $list;
    }

    private function listPubs($pubs){
        $list = '';
        foreach($pubs as $pub){
            $list .= '<div class="each-event">
                        <div class="event-description">
                            <img class="ui image rounded floated left" src="'.$pub["image"].'" />
                            <h2 class="d-inline-block text-truncate" style="max-width: 250px;"><a href="#">'.$pub["title"].'</a></h4>
                            <p>'.$pub["description"].'</p>
                        </div>
                    </div>';
        }
        return $list;
    }
}