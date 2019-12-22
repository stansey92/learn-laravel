<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    //created a function that marks an assignment complete
    public function complete()
    {
        $this->completed = true;
        $this->save();
    }
}
