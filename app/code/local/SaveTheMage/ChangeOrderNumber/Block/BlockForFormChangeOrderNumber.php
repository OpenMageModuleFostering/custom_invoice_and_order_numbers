<?php

class SaveTheMage_ChangeOrderNumber_Block_BlockForFormChangeOrderNumber extends Mage_Core_Block_Template
{
	
    public function __construct()
    {   	
        parent::__construct();
        $this->setTemplate('SaveTheMage/tab_container_FormChangeOrderNumber.phtml');   
    }	 
    
}