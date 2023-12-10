<?php

namespace SubStalker;

use VK\CallbackApi\VKCallbackApiHandler;

class CallbacksHandler extends VKCallbackApiHandler {
  public function groupLeave(int $group_id, ?string $secret, array $object) {
    // здесь можно обработать выход пользователя из сообщества
  }

  public function groupJoin(int $group_id, ?string $secret, array $object) {
    // здесь можно обработать вступление пользователя в сообщество
  }
}
