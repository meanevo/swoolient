<?php

namespace Tests;

use MeanEVO\Swoolient\Workers\AbstractWorker;

class TestNode1 extends AbstractWorker {

	public function __construct($process) {
		parent::__construct($process);
		$payload = mt_rand(0.01 * 1000 ** 2, 0.05 * 1000 ** 2);
		printf("%s start processing in constructor for %dms\n", __CLASS__, $payload / 1000);
		usleep($payload);
		throw new \Exception('Example error in constructor', mt_rand(1, 255));
	}

}
