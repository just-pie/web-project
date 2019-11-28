<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Access\Authorizable as Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPassword;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Pouzivatelia extends Model
    implements Authenticatable, Authorizable, CanResetPassword
{
    use \Illuminate\Auth\Authenticatable, \Illuminate\Foundation\Auth\Access\Authorizable, \Illuminate\Auth\Passwords\CanResetPassword;

    protected $lable = 'pouzivatelia';
    protected $table = 'pouzivatelia';

    protected $primaryKey = 'idpouzivatelia';

    protected $fillable = ['meno', 'priezvisko', 'email', 'datum_narodenia', 'login', 'heslo', 'roly_idroly'];

    protected $hidden = ['heslo'];
    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */

    public function setPasswordAttribute($password)
    {
        return $this->attributes['heslo'] = \Hash::make($password);
    }

    public function getAuthIdentifierName()
    {
        // TODO: Implement getAuthIdentifierName() method.
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        // TODO: Implement getAuthIdentifier() method.
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        // TODO: Implement getAuthPassword() method.
    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {
        // TODO: Implement getRememberToken() method.
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param string $value
     * @return void
     */
    public function setRememberToken($value)
    {
        // TODO: Implement setRememberToken() method.
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        // TODO: Implement getRememberTokenName() method.
    }

    /**
     * Determine if the entity has a given ability.
     *
     * @param string $ability
     * @param array|mixed $arguments
     * @return bool
     */
    public function can($ability, $arguments = [])
    {
        // TODO: Implement can() method.
    }

    /**
     * Get the e-mail address where password reset links are sent.
     *
     * @return string
     */
    public function getEmailForPasswordReset()
    {
        // TODO: Implement getEmailForPasswordReset() method.
    }

    /**
     * Send the password reset notification.
     *
     * @param string $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        // TODO: Implement sendPasswordResetNotification() method.
    }
}
