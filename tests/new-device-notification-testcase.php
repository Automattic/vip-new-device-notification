<?php

/**
 * Base unit test class for New Device Notification
 */
class NewDeviceNotification_TestCase extends WP_UnitTestCase {
	public function setUp() {
		parent::setUp();

		global $new_device_notification;
		$this->_toc = $new_device_notification;
	}
}
