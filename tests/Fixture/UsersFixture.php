<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_group_id' => 1,
                'fullname' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'avatar' => 'Lorem ipsum dolor sit amet',
                'avatar_dir' => 'Lorem ipsum dolor sit amet',
                'token' => 'Lorem ipsum dolor sit amet',
                'token_created_at' => '2025-06-30 08:08:00',
                'status' => 'L',
                'is_email_verified' => 1,
                'last_login' => '2025-06-30 08:08:00',
                'ip_address' => 'Lorem ipsum dolor sit amet',
                'slug' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-06-30 08:08:00',
                'modified' => '2025-06-30 08:08:00',
                'created_by' => 1,
                'modified_by' => 1,
            ],
        ];
        parent::init();
    }
}
