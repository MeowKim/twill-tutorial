<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;
use App\Models\Presenters\ProjectPresenter;

/**
 * App\Models\Project
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $published
 * @property string|null $title
 * @property string|null $description
 * @property string|null $headline
 * @property string|null $url
 * @property-read mixed $domain
 * @property-read mixed $slug
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Media[] $medias
 * @property-read int|null $medias_count
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Slugs\ProjectSlug[] $slugs
 * @property-read int|null $slugs_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cartalyst\Tags\IlluminateTag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project forFallbackLocaleSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project forInactiveSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project forSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereHeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model whereTag($tags, $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model withTag($tags, $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model withoutTag($tags, $type = 'slug')
 * @mixin \Eloquent
 * @property string|null $sector
 * @property int $commercial
 * @property string|null $launch_date
 * @property string|null $layout
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Credit[] $credit
 * @property-read int|null $credit_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereCommercial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereLaunchDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereLayout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereSector($value)
 */
class Project extends Model
{
    use HasSlug, HasMedias;

    public $presenter = ProjectPresenter::class;

    protected $fillable = [
        'published',
        'title',
        'description',
        'headline',
        'url',
        'sector',
        'commercial',
        'launch_date',
        'layout',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'screengrab_desktop' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 12 / 9,
                ],
            ],
        ],
        'screengrab_tablet' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 765 / 1024,
                ],
            ],
        ],
        'screengrab_phone' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 375 / 667,
                ],
            ],
        ],
    ];

    // Relationships
    public function credit()
    {
        return $this->hasMany(Credit::class)->orderBy('position');
    }

    // Mutators & Accessors
    public function getDomainAttribute($value)
    {
        return parse_url($this->url)['host'];
    }
}
