<?php
/**
 * Created By: Oli Griffiths
 * Date: 11/12/2012
 * Time: 12:44
 */
defined('KOOWA') or die('Protected resource');

class ComValidationConstraintCount extends ComValidationConstraintDefault
{
	protected function _initialize(KConfig $config)
	{
		$config->append(array(
			'message_exact' => 'This collection should contain exactly {{ min }} elements, {{ value }} given',
			'message_min' => 'This collection should contain {{ min }} elements or more, {{ value }} given',
			'message_max' => 'This collection should contain {{ max }} elements or less, {{ value }} given',
		));
		parent::_initialize($config);
	}


	/**
	 * Returns the options that are required for this constraint to be valid
	 * @return array
	 */
	public function getRequiredOptions()
	{
		return array('message','min','max');
	}
}