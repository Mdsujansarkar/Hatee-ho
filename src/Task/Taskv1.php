<?php 
declare(strict_types=1);

namespace App;

class Taskv1
{
    public $arrayList = [];
    public function task_one()
    {
        for($i = 1; $i <= 20; $i++)
        {
            if ($i % 3 == 0) 
            {
                $this->arrayList[$i] = 'pa'. ' ';
            }
            if ($i % 5 == 0) 
            {
                $this->arrayList[$i] = 'pow'. ' ';
            }
            if ($i % 3 == 0 && $i % 5 == 0) {
                $this->arrayList[$i] = 'papow'. ' ';
            }
            if (!($i % 3  == 0) && !($i % 5 == 0) && !($i % 3 == 0 && $i % 5 == 0)) {
                $this->arrayList[$i] = $i. ' ';
            }
        }

        foreach($this->arrayList as $value) {
            echo $value;
        }
    }
}
$ob = new Taskv1();
$ob ->task_one();