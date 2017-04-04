<?php
namespace app\api\v1;

use \app\inc\Input;
use \app\inc\Response;

class Search extends \app\inc\Controller
{

    private $search;

    function __construct()
    {
    }

    public function get_index()
    {
        $this->search = new \app\models\Search();

        return ["data" => $this->search->go(Input::getPath()->part(4))];
    }

}