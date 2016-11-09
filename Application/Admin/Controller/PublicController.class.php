<?php
namespace Admin\Controller;
class PublicController
{
    public function verify()
    {
        $Verify = new \Think\Verify();
        $Verify->fontSize = 30;
        $Verify->length = 3;
        $Verify->useNoise = false;
        $Verify->entry();
    }
}







