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

    public function get_index()
    {


        $this->codes = new \app\models\Codes();

        return ["data" => $this->codes->write()];
    }

}