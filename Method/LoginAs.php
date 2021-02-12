<?php
namespace GDO\LoginAs\Method;

use GDO\Core\MethodAdmin;
use GDO\Form\GDT_AntiCSRF;
use GDO\Form\GDT_Form;
use GDO\Form\GDT_Submit;
use GDO\Form\MethodForm;
use GDO\Login\Method\Form;
use GDO\User\GDT_User;

/**
 * Login as any user.
 * Requires admin permission.
 * 
 * @author gizmore
 * @version 6.10
 * @since 3.00
 */
final class LoginAs extends MethodForm
{
	use MethodAdmin;

	##################
	### MethodForm ###
	##################
	public function createForm(GDT_Form $form)
	{
		$form->addField(GDT_User::make('user_name')->notNull());
		$form->addField(GDT_AntiCSRF::make());
		$form->actions()->addField(GDT_Submit::make()->label('btn_login_as'));
	}
	
	public function formValidated(GDT_Form $form)
	{
		$user = $form->getField('user_name')->getUser();
		return $this->loginForm()->loginSuccess($user);
	}
	
	/**
	 * Get the login form to login the selected user.
	 * @return Form
	 */
	private function loginForm()
	{
	    return Form::make();
	}
	
}
