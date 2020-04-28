<?php

namespace App\Models\Slugs;

use A17\Twill\Models\Model;

/**
 * App\Models\Slugs\ProjectSlug
 *
 * @property int $id
 * @property int $project_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $slug
 * @property string $locale
 * @property int $active
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cartalyst\Tags\IlluminateTag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slugs\ProjectSlug newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slugs\ProjectSlug newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slugs\ProjectSlug query()
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slugs\ProjectSlug whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slugs\ProjectSlug whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slugs\ProjectSlug whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slugs\ProjectSlug whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slugs\ProjectSlug whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slugs\ProjectSlug whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slugs\ProjectSlug whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model whereTag($tags, $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slugs\ProjectSlug whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model withTag($tags, $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model withoutTag($tags, $type = 'slug')
 * @mixin \Eloquent
 */
class ProjectSlug extends Model
{
    protected $table = "project_slugs";
}
