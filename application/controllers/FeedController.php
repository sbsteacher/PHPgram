<?php
namespace application\controllers;

class FeedController extends Controller {
    public function index() {
        $this->addAttribute(_JS, ["feed/index"]);
        $this->addAttribute(_MAIN, $this->getView("feed/index.php"));
        return "template/t1.php";
    }

    public function rest() {
        print "method : " . getMethod() . "<br>";
        switch(getMethod()) {
            case _POST:
                print getIuser();
                if(is_array($_FILES)) {
                    foreach($_FILES['imgs']['name'] as $key => $value) {
                        print "key : {$key}, value: {$value} <br>";
                    }
                }                
                print "ctnt : " . $_POST["ctnt"] . "<br>";
                print "location : " . $_POST["location"] . "<br>";
        }
    }
}