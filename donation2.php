<?php
/*
* A payment plugin called "example". This is the main file of the plugin.
*/

// You need to extend from the hikashopPaymentPlugin class which already define lots of functions in order to simplify your work
class plgHikashopDonation2 extends hikashopPaymentPlugin
{
	function plgHikashopDonation2(&$subject, $config){
		parent::__construct($subject, $config);
	}

	// Call a trigger, in this example: onBeforeOrderCreate
function onBeforeCartSave(&$element,&$do) {
	if(!@include_once(rtrim(JPATH_ADMINISTRATOR,DS).DS.'components'.DS.'com_hikashop'.DS.'helpers'.DS.'helper.php')){ return false; }

		$cartClass = hikashop_get('class.cart');

		$cartClass->update(47,1);

		return true;
}


}