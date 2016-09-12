<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserFriendsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserFriendsTable Test Case
 */
class UserFriendsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserFriendsTable
     */
    public $UserFriends;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_friends'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserFriends') ? [] : ['className' => 'App\Model\Table\UserFriendsTable'];
        $this->UserFriends = TableRegistry::get('UserFriends', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserFriends);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
