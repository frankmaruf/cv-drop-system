<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Thana
 *
 * @property int $id
 * @property string $name
 * @property int $district_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Thana newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Thana newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Thana query()
 * @method static \Illuminate\Database\Eloquent\Builder|Thana whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thana whereDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thana whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thana whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thana whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Thana extends Model
{
    use HasFactory;
}
