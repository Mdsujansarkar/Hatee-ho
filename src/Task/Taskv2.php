<?php 
declare(strict_types=1);

namespace App;

use App\Taskv1;

class Taskv2
{
    public $arrayList = [];
    public function task_two()
    {
        for($i = 1; $i <= 15; $i++)
        {

            if($i % 2 == 0)
            {
                $this->arrayList[$i] = 'hatee';
            }
            if($i % 7 == 0)
            {
                $this->arrayList[$i] = 'ho';
            }
            if($i % 2 == 0 && $i % 7 == 0)
            {
                $this->arrayList[$i] = 'hateeho';
            }
            if(!($i % 2 == 0) && !($i % 7 == 0) && !($i % 2 == 0 && $i % 7 == 0))
            {
                $this->arrayList[$i] = $i;
            }
        }
        
            echo implode('-',$this->arrayList);

        
    }
}

$ob = new Taskv2();
$ob ->task_two();
