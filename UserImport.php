<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Student_data;


class UserImport implements ToCollection , ToModel
{
    private $current = 0;
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        
    }
    public function model(array $row)
    {
        $this->current++;
        if($this->current >1)
        {
            $count = student_data::where('student_id','=',$row[1])->count();
            if(empty($count))
            {
                $user = new student_data;
                $user->S_no = $row[0];
                $user->student_id = $row[1];
                $user->Name = $row[2];
                $user->Father_name= $row[3];
                $user->CGPA= $row[4];
                $user->marks_of_10=$row[5];
                $user->marks_of_12=$row[6];
                $user->Contact=$row[7];
                $user->DOB=$row[8];
                $user->Course = $row[9];
                $user->Branch= $row[10];
                $user->Batch= $row[11];
                $user->Address = $row[12];
                $user->email = $row[13]; 
                $user->save();
                
            }
            
        }
    }
}
