<?php
/**
 * Validation Component
 *
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/oligriffiths/Nooku-Validation-Component for the canonical source repository
 */
namespace Oligriffiths\Component\Validation;

use Nooku\Library;

/**
 * Class ValidatorMax
 *
 * Max validator. Ensures value is less than max
 *
 * @package Oligriffiths\Component\Validation
 */
class ValidatorMax extends ValidatorAbstract
{
    /**
     * Initializes the options for the object
     *
     * Called from {@link __construct()} as a first step of object instantiation.
     *
     * @param   Library\ObjectConfig $object An optional ObjectConfig object with configuration options
     * @return  void
     */
	protected function _initialize(Library\ObjectConfig $config)
	{
		$config->append(array(
			'max' => null,
			'message' => '{{target}} should be {{max}} or less, "{{value}}" given'
		));
		parent::_initialize($config);
	}

    /**
     * Returns the options that are required for this validator to be valid
     * @return array
     */
    public function getRequiredOptions()
    {
        return array('message','max');
    }
}