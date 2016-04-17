<?php

namespace GamemodeOP;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Server;

class Main extends PluginBase implements Listener{
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("GamemodeOP enabled");
    }
    
    public function onJoinEvent(PlayerJoinEvent $event){
        $player = $event->getPlayer();
        if($player->isOp()){
            $player->setGamemode(1);
        } else {
            $player->setGamemode(0);
            $player->sendTip("You are in Gamemode 0.");
        }
}
