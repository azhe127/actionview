<?php

namespace App\Project\Eloquent;

use Jenssegers\Mongodb\Eloquent\Model;

class Sprint extends Model
{
    //
    protected $table = 'sprint';

    protected $fillable = array(
        'project_key',
        'no',
        'status',
        'start_time',
        'complete_time',
        'issues',
        'completed_issues',
        'incompleted_issues'
    );
}
