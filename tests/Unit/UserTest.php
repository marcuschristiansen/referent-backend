<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use App\Notifications\SignupActivate;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * check if a user was created in database
     *
     * @return void
     */
    public function testUserCreate()
    {
        $user = factory(User::class)->create();

        $this->assertDatabaseHas('users', [
            'email'             => $user->email,
            'active'            => 0,
            'activation_token'  => $user->activation_token,
            'deleted_at'        => NULL
        ]);
    }

    /**
     * check if email was sent after user was created in database
     *
     * @return void
     */
    public function testEmailSentAfterUserCreated()
    {
        Notification::fake();

        // Assert that no notifications were sent...
        Notification::assertNothingSent();

        $user = factory(User::class)->create();

        // Assert a notification was sent to the given users...
        Notification::assertSentTo(
            [$user], SignupActivate::class
        );
    }

    /**
     * check if users are soft deleted only
     *
     * @return void
     */
    public function testUserIsSoftDeleted()
    {
        $user = factory(User::class)->create();

        $user->delete();

        $userInfoArray = $user->toArray();
        unset($userInfoArray["md5_email"]);

        $this->assertSoftDeleted('users', $userInfoArray);
    }
}
