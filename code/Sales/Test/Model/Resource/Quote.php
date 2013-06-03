<?php
 /*
 * @category    Magento
 * @package     Mage_Sales
 * @subpackage  
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Sales_Test_Model_Resource_Quote extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Sales_Model_Resource_Quote
     */
    protected $_model;

    // constants required for integration tests
    const CLASS_GROUP_TYPE = parent::CLASS_GROUP_TYPE_MODEL;
    const CLASS_ID = 'sales/resource_quote';

    protected function setUp()
    {
        $this->_model = new Mage_Sales_Model_Resource_Quote();
    }

    public function testLoadByCustomerId()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }	

    public function testLoadActive()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }  

    public function testLoadByIdWithoutStore()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }  

    public function testGetReservedORderId()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }  

    public function testIsOrderIncrementIdUsed()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }  

    public function testMarkQuotesRecllectOnCatalogRules()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }  

    public function testSubtractProductFromQuotes()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }  

    public function testMarkQuotesRecollect()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }  
}