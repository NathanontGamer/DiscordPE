<?php

declare(strict_types=1);

namespace NG14872\discord;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase{

	public function onEnable() : void{
		$this->getLogger()->info("§aDiscord Enable!");
	}

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		switch($command->getName()){
			case "discord":
				$sender->sendMessage("§a§lMy discord link is §ehttps://discord.gg/fdBMHEQ");
				return true;
			default:
				return false;
		}
	}

	public function onDisable() : void{
		$this->getLogger()->info("§cDiscord Disable!");
	}
}
