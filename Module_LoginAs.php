<?php
namespace GDO\LoginAs;

use GDO\Core\GDO_Module;
use GDO\UI\GDT_Bar;
use GDO\UI\GDT_Link;
use GDO\User\GDO_User;

class Module_LoginAs extends GDO_Module
{
	##############
	### Module ###
	##############
	public function onLoadLanguage() { return $this->loadLanguage('lang/loginas'); }
	
	public function href_administrate_module() { return href('LoginAs', 'LoginAs'); }
}
