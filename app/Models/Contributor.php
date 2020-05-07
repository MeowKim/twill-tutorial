<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Model;
use App\Models\Presenters\ContributorPresenter;

/**
 * App\Models\Contributor
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $published
 * @property string|null $name
 * @property string|null $email
 * @property string|null $twitter
 * @property string|null $portfolio_link
 * @property string|null $linkedin
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Block[] $blocks
 * @property-read int|null $blocks_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\File[] $files
 * @property-read int|null $files_count
 * @property-read mixed $slug
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Media[] $medias
 * @property-read int|null $medias_count
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Slugs\ContributorSlug[] $slugs
 * @property-read int|null $slugs_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cartalyst\Tags\IlluminateTag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contributor forFallbackLocaleSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contributor forInactiveSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contributor forSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contributor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contributor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contributor query()
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contributor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contributor whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contributor whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contributor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contributor whereLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contributor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contributor wherePortfolioLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contributor wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model whereTag($tags, $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contributor whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contributor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model withTag($tags, $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model withoutTag($tags, $type = 'slug')
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Credit[] $credits
 * @property-read int|null $credits_count
 * @property-read mixed $title_in_dashboard
 */
class Contributor extends Model
{
    use HasBlocks, HasSlug, HasMedias, HasFiles;

    public $presenterAdmin = ContributorPresenter::class;
    public $presenter = ContributorPresenter::class;

    protected $fillable = [
        'published',
        'name',
        'email',
        'twitter',
        'portfolio_link',
        'linkedin',
    ];

    public $slugAttributes = [
        'name',
    ];

    public $filesParams = [
        'resume',
    ];

    public $mediasParams = [
        'avatar' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 1,
                ],
            ],
        ],
    ];

    // Relationships
    public function credits()
    {
        return $this->belongsToMany(Credit::class);
    }

    // Mutators & Accessors
    public function getTitleInDashboardAttribute()
    {
        return $this->name;
    }
}
