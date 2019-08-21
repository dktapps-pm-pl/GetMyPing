<?php

namespace dktapps\GetMyPing;

use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase{

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		if($command->getName() === "ping"){
			if($sender instanceof Player){
				$sender->sendMessage("Ping time: " . $sender->getNetworkSession()->getPing() . "ms");
			}
			return true;
		}
		return false;
	}
}
