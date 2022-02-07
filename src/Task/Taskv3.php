<?php 
declare(strict_types=1);

namespace App;
use App\Taskv1;

class Taskv3
{

    public function task_three()
    {

        $arrayStore = [];
        $arrayAnother =[];
        $array = [1,2,3,4,5,6,7,8,9,10];
        $arraySecound = [1,4,9];
        $result = array_intersect($array, $arraySecound);
        if ($result) {
        foreach ($result as $value) {
        $arrayStore[] = 'joff';
        $arrayAnother[] =$value;
        }
        }
        foreach($array as $data){
        if($data > 5){
        $arrayStore[] = 'tchoff';
        $arrayAnother[] =$data;
            }
        }
        echo implode('-',$arrayStore);
    
    }
}

$ob = new Taskv3();
$ob ->task_three();
