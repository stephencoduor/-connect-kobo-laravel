<?php


namespace Stats4sd\KoboLink\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Stats4sd\KoboLink\Models\Traits\HasUploadFields;

class Question extends Model
{
    use CrudTrait;
    use HasUploadFields;

    protected $table = 'questions';
    protected $guarded = ['id'];
    protected $casts = [
        'media' => 'array',
        'csv_lookups' => 'array',
    ];

    public function teamXlsform(): BelongsTo
    {
        return $this->belongsTo(TeamXlsform::class);
    }
}
