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
        $this->codes = new \app\models\Codes();

        return ["data" => $this->codes->getRefs($varName)];
    }

    public function get_field()
    {

        $varName = Input::get("vn");
        $this->codes = new \app\models\Codes();

        return ["data" => $this->codes->getFields($varName, Input::getPath()->part(4))];
    }

}