<?php
namespace GDO\LoginAs;

use GDO\Core\GDO_Module;

/**
 * Login as any user.
 * Provided via an Admin method.
 * @author gizmore
 * @version 6.10
 * @since 3.05
 */
class Module_LoginAs extends GDO_Module
{
	##############
	### Module ###
	##############
	public function getDependencies() { return ['Login']; }

	public function onLoadLanguage() { return $this->loadLanguage('lang/loginas'); }
	
	public function href_administrate_module() { return href('LoginAs', 'LoginAs'); }

}
