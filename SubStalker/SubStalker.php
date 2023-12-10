<?php

namespace SubStalker;

use Generator\Skeleton\skeleton\base\src\VK\CallbackApi\VKCallbackApiLongPollExecutor;
use SubStalker\VK\VKClient;
use VK\Client\VKApiClient;

class SubStalker {
  private CallbacksHandler $handler;
  private VKCallbackApiLongPollExecutor $executor;

  public function __construct(int $group_id, string $access_token) {
    $client = new VKApiClient('5.131');
    $this->handler = new CallbacksHandler();
    $this->executor = new VKCallbackApiLongPollExecutor(
      $client,
      $access_token,
      $group_id,
      $this->handler
    );
  }

  public function listen() {
    $ts = time();
    while (true) {
      try {
        $ts = $this->executor->listen($ts);
      } catch (\Exception) {
      }
    }
  }
}
