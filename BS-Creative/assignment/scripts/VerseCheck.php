<?php

/**
 * VerseCheck.php class
 *
 * Created on 10/05/2016 at 8:35 PM
 *
 * @author Jack
 */

namespace assignment\scripts;

use assignment\utils\Utils;

/**
 * Class to check a verse
 */
class VerseCheck {

	/** @var string */
	protected $against;

	/** @var string */
	protected $attempt;

	/** @var int */
	protected $time;

	/**
	 * VerseCheck constructor
	 *
	 * @param string $against
	 * @param string $attempt
	 * @param string $time
	 */
	public function __construct($against, $attempt, $time) {
		$this->against = $against;
		$this->attempt = $attempt;
	}

	/**
	 * Get the number of total correct words
	 *
	 * @return int
	 */
	public function getTotalCorrectWords() {
		$against = explode($this->against, " ");
		$attempt = explode($this->attempt, " ");
		$correct = 0;

		for($i = 0; $i < count($against); $i++) {
			if(stripos($attempt[$i], $attempt[$i]) !== false) {
				$correct++;
			} elseif(stripos($against[$i], $attempt[$i + 1]) !== false) {
				$i++;
				$correct++;
			}
			continue;
		}
		return $correct;
	}

	/**
	 * @return int
	 */
	public function getTotalAgainstWords() {
		return str_word_count($this->against);
	}

	/**
	 * Gets the time in a nice string format
	 *
	 * @return string
	 */
	public function getTimeString() {
		return Utils::secondsToString($this->time);
	}

}