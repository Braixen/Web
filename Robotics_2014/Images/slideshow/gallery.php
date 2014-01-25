<?php //: $RCSfile: image_rotate.class.php,v $ {
    //: $Revision: 1.0 $
    //: $Date: 2007/10/08 14:11:25 $
    //: $Author: Feighen $
    //:-
    
    /**    image rotator class
        @author Feighen Oosterbroek
        @author feighen@gmail.com
        
        Example usage:
        
        
        
    */
	$time = "10";
	$img_rot = new imageRotator();
	$img_rot->setImgDir("/home8/pittsfo2/www/Images/gallery/");
	$img_rot->setTimeOut();
        $img_rot->scriptOutput();
        $html = $img_rot->returnHtml();
    class imageRotator {
        //: Variables
        protected static $img_dir;
        protected static $dir_contents = array();
        protected static $time_out;
        protected static $html;
        
        //: Public Functions {
            # class constructor
            public function __construct() {
                return true;
            }
            public function imageRotator() {
                return true;
            }
            # class functions
            public function setImgDir($dir) {
                self::$img_dir = $dir;
            }
            
            public function setTimeOut($time) {
                self::$time_out = $time;
            }
            
            public function scriptOutput($pattern = null, $config = null) {
                $images = self::getDirContents(self::$img_dir, $pattern);
                
                self::$html = (string)"<script type='text/javascript'>\n";
                self::$dir_contents = is_array(self::$dir_contents) ? self::$dir_contents : array();
                self::$html .= "var images = new Array();\n";
                foreach (self::$dir_contents as $key=>$val) {
                    self::$html .= "images[".$key."] = '".$val."';\n";
                }
                self::$html .= "function alterImage() {
                    var rand = getRandomInt(0, images.length-1);
                    var img_src = images[rand];
                    
                    if (document.getElementById('rot_img')) {
                        document.getElementById('rot_img').src = img_src;
                    }
                }
                
                /* from the mozilla javascript reference at http://developer.mozilla.org */
                function getRandomInt(min, max) {
                    return Math.floor(Math.random() * (max - min + 1)) + min;
                }
                
                function displayImage(img) {
                    window.open(img.src);
                }
                
                var timeId = window.setInterval(alterImage, ".(self::$time_out*1000).");
                \n";
                self::$html .= "</script>\n";
                $rand = rand(0, count(self::$dir_contents)-1);
                self::$html .= "<img src='".self::$dir_contents[$rand]."' id='rot_img' title='Click to view full size' style='width: ".($config["width"] ? $config["width"] : "200px")."; height: ".($config["height"] ? $config["height"] : "150px")."; cursor: pointer; float: right;' onclick='displayImage(this);'>\n";
            }
            
            public function returnHtml() {
                return self::$html;
            }
            
            public function printHtml() {
                print(self::$html."\n");
            }
        // }
        //: Private Functions {
            private function getDirContents($dir, $pattern = null) {
                if (!is_dir($dir)) {print("Could not open the specified directory.\n"); return false;}
                $dh = dir($dir);
                
                while (($entry = $dh->read()) !== false) {
                    if ($entry == "." || $entry == "..") {continue;}
                    
                    if (is_dir($dir.$entry)) {
                        self::getDirContents($dir.$entry."/", $pattern);
                    } else {
                        if ($pattern) {
                            preg_match_all($pattern, $entry, $matches);
                            if ($matches[0]) {
                                self::$dir_contents[] = $dir.$entry;
                            }
                        } else {
                            self::$dir_contents[] = $dir.$entry; 
                        }
                    }
                }
            }
        // }
    }
//}
?> 