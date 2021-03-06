<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Magento
 * @package     Mage_Checkout
 * @subpackage  integration_tests
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/*
 * @magentoDataFixture Mage/Sales/_files/quote.php
 */
class Mage_Checkout_OnepageControllerTest extends Magento_Test_TestCase_ControllerAbstract
{
    protected function setUp()
    {
        parent::setUp();
        $quote = new Mage_Sales_Model_Quote();
        $quote->load('test01', 'reserved_order_id');
        Mage::getSingleton('checkout/session')->setQuoteId($quote->getId());
    }

    /*
     * Covers onepage payment.phtml templates
     * 
     * @magentoDataFixture Mage/Sales/_files/quote.php
     */
    public function testIndexAction()
    {

        $this->markTestSkipped('Skipped because of Magento 1.x incompatibility.');
        
        /*
        $this->dispatch('checkout/onepage/index');
        $html = $this->getResponse()->getBody();
        $this->assertContains('<li id="opc-payment"', $html);
        $this->assertContains('<dl class="sp-methods" id="checkout-payment-method-load">', $html);
        $this->assertContains('<form id="co-billing-form" action="">', $html);
        */
    }

    /*
     * Covers app/code/core/Mage/Checkout/Block/Onepage/Payment/Info.php
     * 
     * @magentoDataFixture Mage/Sales/_files/quote.php
     */
    public function testProgressAction()
    {

        $this->markTestSkipped('Skipped because of Magento 1.x incompatibility.');
        
        /*
        $steps = array(
            'payment' => array('is_show' => true, 'complete' => true),
            'billing' => array('is_show' => true),
            'shipping' => array('is_show' => true),
            'shipping_method' => array('is_show' => true),
        );
        Mage::getSingleton('checkout/session')->setSteps($steps);

        $this->dispatch('checkout/onepage/progress');
        $html = $this->getResponse()->getBody();
        $this->assertContains('Checkout', $html);
        $methodTitle = Mage::getSingleton('checkout/session')->getQuote()->getPayment()->getMethodInstance()
            ->getTitle();
        $this->assertContains('<p>' . $methodTitle . '</p>', $html);
        */
    }
    
    /*
     * @magentoDataFixture Mage/Sales/_files/quote.php
     */
    public function testShippingMethodAction()
    {

        $this->markTestSkipped('Skipped because of Magento 1.x incompatibility.');
        
        /*
        $this->dispatch('checkout/onepage/shippingmethod');
        $this->assertContains('no quotes are available', $this->getResponse()->getBody());
        */
    }
    
    /*
     * @magentoDataFixture Mage/Sales/_files/quote.php
     */
    public function testReviewAction()
    {

        $this->markTestSkipped('Skipped because of Magento 1.x incompatibility.');
        
        /*
        $this->dispatch('checkout/onepage/review');
        $this->assertContains('checkout-review', $this->getResponse()->getBody());
        */
    }

    /*
     * @dataProvider paymentMethodData
     * @magentoDataFixture Mage/Sales/_files/quote.php
     * @param array $paymentPostData
     * @param string $expectedMethodCode
     */
    public function testSaveOrderActionPaymentMethod($paymentPostData, $expectedMethodCode)
    {

        $this->markTestSkipped('Skipped because of Magento 1.x incompatibility.');
        
        /*
        $this->getRequest()->setPost('payment', $paymentPostData);
        $this->dispatch('checkout/onepage/saveorder');
        $this->assertEquals(
            $expectedMethodCode,
            Mage::getSingleton('checkout/session')->getQuote()->getPayment()->getMethod()
        );
        */
    }

    public static function paymentMethodData()
    {
        return array(
            array(array('_' => '123'), 'free'),
            array(array('method' => 'checkmo'), 'checkmo'),
        );
    }
}