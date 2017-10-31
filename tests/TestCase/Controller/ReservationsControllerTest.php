<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ReservationsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ReservationsController Test Case
 */
class ReservationsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.reservations',
        'app.users',
        'app.vehicles'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $results = $this->testAction('reservations/index/');
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
               'date' => '28/10/2017',
                'shift' => 'carro'
            )  
        );
        $results = $this->testAction('reservations/add',array('data' => $data,'method' => 'post'));
        debug($results); 
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
       $results1 = $this->testAction('reservations/edit/1');
        debug($results1);
  
        $data = array(
            'Post' => array(
                'id' => 1,
                'date' => '30/10/2017',
                'shift' => 'onibus'
            )
        );  
        $results2 = $this->testAction('reservations/edit',array('data' => $data,'method' => 'post'));
        debug($results2);
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $results = $this->testAction('reservations/delete/1');
        debug($results);   
    }
}
