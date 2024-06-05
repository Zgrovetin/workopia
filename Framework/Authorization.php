<?php
declare(strict_types=1);

namespace Framework;

//use Framework\Session;

class Authorization
{
    /**
     * Check if current logged-in user owns a resource
     *
     *@param int $recourceId
     *@return bool
     */
    public static function isOwner($resourceId) {
        $sessionUser = Session::get('user');

        if($sessionUser !== null && isset($sessionUser['id'])) {
            $sessionUserId = (int) $sessionUser['id'];
            return $sessionUserId === $resourceId;
        }

        return false;
    }
}