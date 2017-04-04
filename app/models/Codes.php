<?php

namespace app\models;

use app\inc\Util;

class Codes extends \app\inc\Model
{

    public function write()
    {

        $query = "SELECT * FROM public.bi";
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
            $response['data'][] =  ["fieldkey" => $row["fieldkey"], "textvalue" => $row["textvalue"], "textvalue2" => $row["textvalue2"]];
        }
        $response['success'] = true;

        print("var ref_codes = ");
        print(json_encode($response["data"]));

        die();

        return $response;
    }

}
