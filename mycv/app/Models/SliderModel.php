<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
    protected $table = 'slider';
    public $timestamps = false;
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function listItems($params, $options = null){
        $result = '';
        if($options['task'] == 'admin-list-items'){
            $result = self::select('id','name','description','link','thumb','created','created_by','modified','modified_by','status')
                        //->where('id' , '>', 3)
                        ->get();
            
        }

        return $result;
    }

}
