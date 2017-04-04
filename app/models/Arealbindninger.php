<?php

namespace app\models;

use app\inc\Util;

class Arealbindninger extends \app\inc\Model
{

    public function get()
    {
        $query = "SELECT * FROM arealbindninger.tforms120870101008319_join";
        $res = $this->prepare($query);
        try {
            $res->execute();
        } catch (\PDOException $e) {
            $response['success'] = false;
            $response['message'] = $e->getMessage();
            $response['code'] = 400;
            return $response;
        }
        while ($row = $this->fetchRow($res)){
            $response['data'][] =  $row;
        }
        $response['success'] = true;


        return $response;
    }

}
