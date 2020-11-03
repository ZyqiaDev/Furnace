<?php

namespace furnace;

use furnace\commands\CookCommand;
use furnace\commands\FurnaceAboutCommand;
use furnace\commands\SmeltCommand;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
	function onEnable()
	{
		$this->getLogger()->info("§8Furnace§bPlugin §r§7»§r §2Enabled");
		$this->registerCommands();
	}

	function registerCommands()
	{
		$this->getServer()->getCommandMap()->register("smelt", new SmeltCommand());
		$this->getServer()->getCommandMap()->register("cook", new CookCommand());
		$this->getServer()->getCommandMap()->register("furnaceabout", new FurnaceAboutCommand());
	}

	function onDisable()
	{
		$this->getLogger()->info("§8Furnace§bPlugin §r§7»§r §cDisabled");
	}
}