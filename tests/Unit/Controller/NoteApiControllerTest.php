<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Ondřej Lohniský <ondrejlohnisky@gmail.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\NextTorrent\Tests\Unit\Controller;

use OCA\NextTorrent\Controller\NoteApiController;

class NoteApiControllerTest extends NoteControllerTest {
	public function setUp(): void {
		parent::setUp();
		$this->controller = new NoteApiController($this->request, $this->service, $this->userId);
	}
}
