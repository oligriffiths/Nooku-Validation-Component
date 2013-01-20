<?php

/**
 * Base class for constraint validators
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @api
 */
class ComValidationValidatorUrl extends ComValidationValidatorDefault
{
	/**
	 * Validate the value is a url
	 *
	 * @see ComValidationValidatorInterface::validate
	 */
	protected function _validate($value, ComValidationConstraintDefault $constraint)
	{
		if($value instanceof KHttpUrl) $value = (string) $value;
		return parent::_validate($value, $constraint);
	}
}