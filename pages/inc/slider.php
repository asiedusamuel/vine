<?php
function getSlides(){
    return array(
            "width"=>array("value"=>"1280","unit"=>"px"),
            "height"=>array("value"=>"500","unit"=>"px"),
            "autoStart"=>'true',
            "hoverPrevNext"=>'true',
            "navPrevNext"=>'true',
            "navButtons"=>'true',
            "pauseOnHover"=>'false',
            "responsive"=>'true',
            "showBarTimer"=>'false',
            "showCircleTimer"=>'true',
            "touchNav"=>'false',
            "layers"=>array(
                [   
                    "title"=>"Slider 1",
                    "background"=>"./assets/images/slider/slider1.jpg",
                    "backgroundColor"=>"rgba(173, 88, 88, 1)",
                    "data"=>"duration:6000;transition2d:2,8,30;kenburnsscale:1.2;",
                    "sublayers"=>array(
                        array(
                            "type"=>"layer",
                            "style"=>"font-weight:300;font-family:Poppins;font-size:26px;line-height:76px;color:#FFFFFF;top:30%;left:75%;width:500px;white-space:normal;",
                            "data"=>"offsetyin:30;durationin:600;delayin:50;offsetyout:-30;durationout:400;parallaxlevel:0;",
                            "content"=>"TOTAL SURRENDER"
                        ),
                        array(
                            "type"=>"layer",
                            "style"=>"font-weight:600;font-family:Poppins;font-size:56px;line-height:76px;color:#FFFFFF;top:40%;left:75%;width:500px;white-space:normal;",
                            "data"=>"offsetyin:30;durationin:600;delayin:50;offsetyout:-30;durationout:400;parallaxlevel:0;",
                            "content"=>"TO GOD"
                        ),
                        array(
                            "type"=>"layer",
                            "style"=>"font-weight:300;font-family:Poppins;font-size:12px;line-height:28px;color:#FFFFFF;top:53%;left:75%;width:500px;white-space:normal;",
                            "data"=>"offsetyin:30;durationin:600;delayin:50;offsetyout:-30;durationout:400;parallaxlevel:0;",
                            "content"=>"The first step in overcoming any kind of situation that holds me in bondage in my thoughts,mind, body and spirit is to surrender it to God"
                        ),
                        array(
                            "type"=>"layer",
                            "style"=>"border:thin solid #ffffff; padding: 10px 20px;font-weight:300;font-family:Poppins;font-size:26px;line-height:22px; width: 150px; border-radius: 5px;color:#FFFFFF;top:330px;left:710px;white-space:normal;",
                            "data"=>"offsetyin:30;durationin:600;delayin:50;offsetyout:-30;durationout:400;parallaxlevel:0;",
                            "content"=>"READ MORE"
                        )
                    )
                ],
                [
                    "title"=>"Slider 2",
                    "data"=>"duration:6000;transition2d:4;kenburnsscale:1.2;",
                    "background"=>"./assets/images/slider/slider2.jpg",
                    "backgroundColor"=>"rgba(0, 0, 0, 0)",
                    "sublayers"=>array(
                        array(
                            "type"=>"layer",
                            "style"=>"font-weight:300;font-family:Poppins;font-size:26px;line-height:76px;color:#FFFFFF;top:30%;left:75%;width:500px;white-space:normal;",
                            "data"=>"offsetyin:30;durationin:600;delayin:50;offsetyout:-30;durationout:400;parallaxlevel:0;",
                            "content"=>"TRANSFORMING LIVES"
                        ),
                        array(
                            "type"=>"layer",
                            "style"=>"font-weight:600;font-family:Poppins;font-size:56px;line-height:76px;color:#FFFFFF;top:40%;left:75%;width:500px;white-space:normal;",
                            "data"=>"offsetyin:30;durationin:600;delayin:50;offsetyout:-30;durationout:400;parallaxlevel:0;",
                            "content"=>"RESTORING HOPE"
                        ),
                        array(
                            "type"=>"layer",
                            "style"=>"font-weight:300;font-family:Poppins;font-size:12px;line-height:28px;color:#FFFFFF;top:53%;left:75%;width:500px;white-space:normal;",
                            "data"=>"offsetyin:30;durationin:600;delayin:50;offsetyout:-30;durationout:400;parallaxlevel:0;",
                            "content"=>"Transforming lives and societies through education, research and innovation. Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam."
                        ),
                        array(
                            "type"=>"layer",
                            "style"=>"border:thin solid #ffffff; padding: 10px 20px;font-weight:300;font-family:Poppins;font-size:26px;line-height:22px; width: 150px; border-radius: 5px;color:#FFFFFF;top:330px;left:710px;white-space:normal;",
                            "data"=>"offsetyin:30;durationin:600;delayin:50;offsetyout:-30;durationout:400;parallaxlevel:0;",
                            "content"=>"READ MORE"
                        )
                    )
                ]
            ),
        );
}
class Slider{

    function slide($params = array()){
        $sliderProp = getSlides();
        $i = 0;
        $layers = '';
        $id = 'layerslider-'.mt_rand();
        foreach($sliderProp["layers"] as $layer){
            $i++;
            $layers .= '<!--LayerSlider layer-->
                            <div class="ls-slide" data-ls="'.$layer["data"].'">        
                                <!--LayerSlider background-->
                                <img class="ls-bg" style="width:100% !important;" src="'.$layer["background"].'" alt="layer'.$i.'-background">        
                                <!--LayerSlider sublayers-->
                                '.$this->renderSubLayers(isset($layer["sublayers"])?$layer["sublayers"]:array()).'
                            </div>';
        }
        $view = '<script type="text/javascript"> 
                    $("document").ready(function(){     
                        $("#'.$id.'").layerSlider({
                            autoStart               : '.$sliderProp["autoStart"].',
                            responsive              : '.$sliderProp["responsive"].',
                            responsiveUnder         : 0,
                            imgPreload              : true,
                            navButtons              : '.$sliderProp["navButtons"].',
                            navPrevNext             : '.$sliderProp["navPrevNext"].',
                            hoverPrevNext			: '.$sliderProp["hoverPrevNext"].',
                            showCircleTimer		    : '.$sliderProp["showCircleTimer"].',
                            showBarTimer		    : '.$sliderProp["showBarTimer"].',
                            skinsPath               : "./assets/styles/layerSlider/skins/",
                            skin                    : "roundedflat"
                        });
                    });
                </script>
            <style>
            .ls-inner{
                z-index: 0 !important;
            }
            </style>
            <div id="'.$id.'" style="width: '.$sliderProp["width"]["value"].$sliderProp["width"]["unit"].'; height: '.$sliderProp["height"]["value"].$sliderProp["height"]["unit"].';">
                '.$layers.'
            </div>
        ';
        return $view;
    }

    function renderSubLayers($sublayers){
        $obj = '';
        if(count($sublayers) !=0){
            foreach($sublayers as $layer){
                switch($layer["type"]){

                    default:
                        $obj .='<div style="'.$layer["style"].'" class="ls-l" data-ls="'.$layer["data"].'">'.$layer["content"].'</div>';
                }
            }
        }
        return $obj;
    }
}