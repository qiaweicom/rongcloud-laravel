<?php

class ReturnTransformer{


    public static function result($result)
    {
        return [
            'code' => 0,
            'result' => $result
        ];
    }

    public static function exception(Exception $e)
    {
        return [
            'code' => 1,
            'message' => $e->getMessage(),
        ];
    }
    
}
?>