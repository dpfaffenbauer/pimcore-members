<?php

namespace MembersBundle\Security;

use MembersBundle\Adapter\User\UserInterface;

class EmailUserProvider extends UserProvider
{
    protected function findUser($username): ?UserInterface
    {
        return $this->userManager->findUserByUsernameOrEmail($username);
    }
}
