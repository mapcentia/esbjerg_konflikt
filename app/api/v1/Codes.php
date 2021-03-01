<?php
namespace app\api\v1;

use \app\inc\Input;
use \app\inc\Response;

class Codes extends \app\inc\Controller
{

    private $host;
    private $codes;

    function __construct()
    {
        $this->host = "http://staticmap.mapcentia.com";
    }

    public function get_ref()
    {

        $varName = Input::get("vn");
        $json = Input::get("json");
        $this->codes = new \app\models\Codes();

        return array("data" => $this->codes->getRefs($varName, null, $json));
    }

    public function get_field()
    {

        $varName = Input::get("vn");
        $json = Input::get("json");
        $this->codes = new \app\models\Codes();

        return array("data" => $this->codes->getFields($varName, $json));
    }

}
