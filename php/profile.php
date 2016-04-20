<?php
namespace Edu\Cnm\jmedley4\twitchchannelpage;

use MongoDB\Driver\Exception\UnexpectedValueException;


/**
 * Small Cross Section of a Twitch Profile
 *
 * This
 *
 * @author Jared Padilla <jmedley4@cnm.edu>
 * @version 5Billion
 */
class Profile {
	/**
	 * id for this Profile; this is the primary key
	 */
	private $profileId;

	/**
	 * id for the User who owns this Profile; this is a foreign key
	 */
	private $userId;

	/**
	 * email for this user
	 */
	private $email;

	/**
	 * birthday for this user
	 */
	private $birthday;

	/**
	 * accessor method for profile id
	 *
	 * @return
	 */

	public function getProfileId() {
		return ($this-> profileId);

	}

	/**
	 * mutator method for profile id
	 *
	 * @param int $newProfileId new value of profile id
	 * @throws \UnexpectedValueException if $newProfileId is not an integer
	 */
	public function setProfileId ($newProfileId) {
		//verify the profile id is valid
		$newProfileId = filter_var($newProfileId, FILTER_VALIDATE_INT);
		IF($newProfileId === false) {
			throw (new UnexpectedValueException("profile id is not a valid integer"));
		}

		//convert and store the profile id
		$this->profileId = intval($newProfileId);
	}

	/**
	 * accessor method for user id
	 *
	 * @return int value of user id
	 */
	public function getUserId() {
		return($this->userId);
	}

	/**
	 * mutator method for user id
	 *
	 * @param int $newUserId new value of profile id
	 * @throws UnexpectedValueException if $newUserId is not an integer
	 */
	public function setUserId($newUserId) {
		//verify user id is valid
		$newUserId = filter_var($newUserId, FILTER_VALIDATE_INT);
		if($newUserId === false) {
			throw(new UnexpectedValueException("user id is not a valid integer"));
		}
	}

	/**
	 * accessor method for email
	 *
	 * @return string value of email
	 */
	public function getEmail() {
		return($this->email);
	}

	/**
	 * mutator method for email
	 *
	 * @param string $newEmail new value of email
	 * @throws UnexpectedValueException if $newEmail is not valid
	 */
	public function setEmail($newEmail) {
		//verify the email is valid
		$newEmail = filter_var($newEmail, FILTER_SANITIZE_STRING);
		if($newEmail === false) {
			throw(new UnexpectedValueException("email is not a valid string"));
		}
		//store the email
		$this->email = $newEmail;
	}

	/**
	 * accessor method for birthday
	 *
	 * @return string value of birthday
	 */
	public function getBirthday() {
		return($this->birthday);
	}

	/**
	 * mutator method for birthday
	 *
	 * @param string $newBirthday new value of birthday
	 * @throws UnexpectedValueException if $newBirthday is not valid
	 */
	public function setBirthday($newBirthday) {
		//verify the birthday is valid
		$newBirthday = filter_var(FILTER_SANITIZE_STRING);
		if($newBirthday === false) {
			throw(new UnexpectedValueException("email is not a valid string"));
		}
		//store the birthday
		$this->birthday = $newBirthday;
	}
}