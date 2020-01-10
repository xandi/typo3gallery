<?php
namespace AlexanderObert\Typo3gallery\Domain\Model;


class Gallery extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
	/**
	 * Some title.
	 *
	 * @var string
	 */
	protected $title = '';
	
        /**
	 */
	public function __construct() {
		
	}

	/**
	 * Sets the title
	 * 
	 * @param string $title
	 * return void
	 */
	public function setTitle($title) {
            $this->title = $title;
	}
	
	/**
	 * Gets the title
	 * 
	 * @return string The title of the album
	 */
	public function getTitle() {
            return $this->title;
	}
}
