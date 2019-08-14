<?php

class SaveTheMage_ChangeOrderNumber_Block_ShowTabsAdminBlock extends Mage_Adminhtml_Block_Widget_Tabs
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('tabs_ChangeOrderNumber');
        
        $this->setTitle(Mage::helper('ChangeOrderNumberHelper1')->__('To Change Order and Invoice Numbers'));
    }

    protected function _beforeToHtml()
    {
        $this->addTab('tab1_ChangeOrderNumber', array(
            'label'     => Mage::helper('ChangeOrderNumberHelper1')->__('Change Order and Invoice Numbers'),
            'title'     => Mage::helper('ChangeOrderNumberHelper1')->__('Change Order and Invoice Numbers'),
            'content'   => $this->getLayout()->createBlock("ChangeOrderNumberBlock1/BlockForFormChangeOrderNumber")->toHtml(),
            'active'    => true
        ));          
        
		
		$about="<fieldset class='box' style='clear: both;'><table>
		<tr><td>
		<a title='SaveTheMage Magento Extensions' href='http://www.savethemage.com/'>
		<img alt='SaveTheMage Magento Extensions' src='http://www.savethemage.com/skin/frontend/default/magik_aura/images/savethemage-logo-icon.png'>
		</a>
		</td></tr>
		<tr><td><a href='mailto:support@savethemage.com'>Email Us</a></td></tr>
		</table></fieldset>";
		$this->addTab('tab2_about', array(
            'label'     => Mage::helper('ChangeOrderNumberHelper1')->__('About'),
            'title'     => Mage::helper('ChangeOrderNumberHelper1')->__('About'),
            'content'   => $about, 
            'active'    => false
        ));    
		
        return parent::_beforeToHtml();
    }  
}