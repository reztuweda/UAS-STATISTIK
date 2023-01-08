<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Score extends Model
{
    use HasFactory;
    use Sortable;
    protected $table ='scores';
    protected $guarded = ['id'];
    protected $fillable = ['NIM','Name','Score','Kelas'];

    public $sortable = [
        'NIM','Name','Score','Kelas'
    ];
}
