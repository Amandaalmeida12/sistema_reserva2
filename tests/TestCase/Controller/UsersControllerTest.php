<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UsersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\UsersController Test Case
 */
class UsersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users',
        'app.reservations'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $results = $this->testAction('users/index/');
        debug($results);
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $data = array(
            'Post' => array(
               'name' => 'Amanda',
                'login' => 'amandaisabel',
                'password'=>'123'
            )  
        );
        $results = $this->testAction('users/add',array('data' => $data,'method' => 'post'));
        debug($results); 
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
       $results1 = $this->testAction('users/edit/1');
        debug($results1);
  
        $data = array(
            'Post' => array(
                'id' => 1,
                'name' => 'Isabel',
                'login' => 'isabelcastro',
                'password'=>'234'
            )
        );  
        $results2 = $this->testAction('users/edit',array('data' => $data,'method' => 'post'));
        debug($results2);
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $results = $this->testAction('users/delete/1');
        debug($results);   
    }
}
