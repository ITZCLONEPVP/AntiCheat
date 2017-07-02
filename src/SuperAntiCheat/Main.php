<?php

namespace SuperAntiCheat;

use pocketmine\plugin\PluginBase;

class SuperAntiCheat extends PluginBase{
  
  public function onEnable(){
    $this->getLogger()->info("Anticheat try to protect your server from hackers!");
    $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
  }
}


