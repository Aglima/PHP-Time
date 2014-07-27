<?php
		class AglimaTime {
		private $seconds, $oldtime, $newtime;
		
		public function __construct($oldtime = null, $newtime = null) {
			if(!$newtime) {
				$newtime = time();
			}
			$this->oldtime = $oldtime;
			$this->newtime = $newtime;
			$this->seconds = $this->newtime - $this->oldtime;
		}
		
		public function setOldTime($timestamp) {
			$this->oldtime = $timestamp;
			return true;
		}
		
		public function getOldTime($timestamp) {
			return $this->oldtime;
		}
		
		public function setNewTime($timestamp) {
			$this->newtime = $timestamp;
			return true;
		}
		
		public function getNewTime($timestamp) {
			return $this->newtime;
		}
		
		public function getYears() {
			return floor($this->getDays() / 365);
		}
		
		public function getWeeks() {
			return floor($this->getDays() / 7);
		}
		
		public function getDays() {
			return floor($this->getHours() / 24 + 1);
		}
		
		public function getHours() {
			return  floor($this->getMinutes() / 60);
		}
		
		public function getMinutes() {
			return  floor($this->seconds / 60);
		}
		
		public function getSeconds() {
			return $this->seconds;
		}
	}
?>
