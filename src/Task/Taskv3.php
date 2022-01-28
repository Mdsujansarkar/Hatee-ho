<?php 
declare(strict_types=1);

namespace App;
use App\Taskv1;

class Taskv3
{
    // public $arrayList = [];
    // public $arraySecound = [1,4,9];
    public function task_three()
    {

        // $array = [];

        //  $arraySecound = [1,4,9];

        // for($i = 1; $i<=10; $i++ )
        // {
        //      $array[$i] = $i . PHP_EOL;


        // }
        // print_r($array);
        // print_r($arraySecound);
        // print_r($result = array_intersect($array, $arraySecound));
        // if($result){
        //     print_r($result);
        //     }

        // $array1 = array(2,5,3);
        // $array2 = array(5,2,3);
        // if($array1 === array_intersect($array1, $array2) && $array2 === array_intersect($array2, $array1)) {
        //     echo 'Equal';
        // } else {
        //     echo 'Not equal';
        // }

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
        // $another = array_intersect($array,$arrayAnother);

        // print_r($another);

        // $result=array_diff_key($arrayAnother,$arraySecound);

        // print_r($result);
    }
}

$ob = new Taskv3();
$ob ->task_three();
