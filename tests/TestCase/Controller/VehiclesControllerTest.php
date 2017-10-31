<?php
namespace App\Test\TestCase\Controller;

use App\Controller\VehiclesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\VehiclesController Test Case
 */
class VehiclesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vehicles',
        'app.reservations'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $results = $this->testAction('vehicles/index/');
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
                'name' => 'Castrro',
                'kind' => 'professor'
            )  
        );
        $results = $this->testAction('vehicles/add',array('data' => $data,'method' => 'post'));
        debug($results); 
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
       $results1 = $this->testAction('vehicles/edit/1');
        debug($results1);
  
        $data = array(
            'Post' => array(
                'id' => 1,
                'name' => 'castro',
                'kind' => 'aluno'
                
            )
        );  
        $results2 = $this->testAction('vehicles/edit',array('data' => $data,'method' => 'post'));
        debug($results2);
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $results = $this->testAction('vehicles/delete/1');
        debug($results);   
    }
}
