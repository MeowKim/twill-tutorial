<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

/**
 * App\Models\Credit
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $published
 * @property string|null $title
 * @property int|null $position
 * @property int|null $project_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Contributor[] $contributors
 * @property-read int|null $contributors_count
 * @property-read \App\Models\Project|null $project
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cartalyst\Tags\IlluminateTag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Credit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Credit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Credit ordered()
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Credit query()
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Credit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Credit whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Credit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Credit wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Credit whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Credit wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model whereTag($tags, $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Credit whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Credit whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model withTag($tags, $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model withoutTag($tags, $type = 'slug')
 * @mixin \Eloquent
 */
class Credit extends Model implements Sortable
{
    use HasPosition;

    protected $fillable = [
        'published',
        'title',
        'project_id',
        'position',
    ];

    // Relationships
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function contributors()
    {
        return $this->belongsToMany(Contributor::class)->orderBy('position');
    }
}
