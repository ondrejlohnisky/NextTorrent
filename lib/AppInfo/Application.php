<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Ondřej Lohniský <ondrejlohnisky@gmail.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\NextTorrent\AppInfo;

use OCP\AppFramework\App;

class Application extends App {
	public const APP_ID = 'nexttorrent';

	public function __construct() {
		parent::__construct(self::APP_ID);
	}
}
