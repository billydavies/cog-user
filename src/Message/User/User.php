<?php

namespace Message\User;

/**
 * A simple implementation of a basic user model.
 *
 * Note that the `password` field is not implemented on this model. This is for
 * security reasons. Any operations relating to user passwords should be
 * separate.
 *
 * @author Joe Holdcroft <joe@message.co.uk>
 */
class User implements UserInterface
{
	public $id;
	public $email;
	public $emailConfirmed;
	public $authorship;

	public $title;
	public $forename;
	public $surname;

	public $lastLoginAt;
	public $passwordRequestAt;

	/**
	 * {@inheritDoc}
	 */
	public function getName()
	{
		return $this->forename . ($this->surname ? ' ' . $this->surname : '');
	}

	/**
	 * {@inheritDoc}
	 */
	public function getInitials()
	{
		return (substr($this->forename, 0, 1) ?: '') . (substr($this->surname[0], 0, 1) ?: '');
	}
}