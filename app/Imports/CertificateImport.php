<?php

namespace App\Imports;

use App\Models\Certificate;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CertificateImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Certificate([
            
            'afm'=>$row['afm'],
            'surname'=>$row['surname'],
            'name'=>$row['name'],
            'course'=>$row['course'],
            'email'=>$row['email'],
            'platform'=>$row['platform'],
            'tomeas'=>$row['tomeas'],
            'course_id'=>$row['course_id'],
            'cert_date'=>$row['cert_date'],
            'unigue_cert_id'=>$row['unigue_cert_id'],
        ]);
    }
}
