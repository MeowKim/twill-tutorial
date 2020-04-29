<?php

namespace App\Models\Slugs;

use A17\Twill\Models\Model;

/**
 * App\Models\Slugs\ContributorSlug
 *
 * @property int $id
 * @property int $contributor_id
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slugs\ContributorSlug newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slugs\ContributorSlug newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slugs\ContributorSlug query()
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slugs\ContributorSlug whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slugs\ContributorSlug whereContributorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slugs\ContributorSlug whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slugs\ContributorSlug whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slugs\ContributorSlug whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slugs\ContributorSlug whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slugs\ContributorSlug whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model whereTag($tags, $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slugs\ContributorSlug whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model withTag($tags, $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|\A17\Twill\Models\Model withoutTag($tags, $type = 'slug')
 * @mixin \Eloquent
 */
class ContributorSlug extends Model
{
    protected $table = "contributor_slugs";
}
