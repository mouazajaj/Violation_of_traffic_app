<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Car
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Violation[] $Violations
 * @property-read int|null $violations_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Car newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Car newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Car query()
 */
	class Car extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Violation
 *
 * @property int $id
 * @property mixed $type
 * @property string $price
 * @property string $location
 * @property string $car_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Car|null $Car
 * @property-read \App\Models\User|null $User
 * @method static \Illuminate\Database\Eloquent\Builder|Violation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Violation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Violation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Violation whereCarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Violation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Violation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Violation whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Violation wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Violation whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Violation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Violation whereUserId($value)
 */
	class Violation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Violation_Type
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Violation_Type newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Violation_Type newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Violation_Type query()
 */
	class Violation_Type extends \Eloquent {}
}

