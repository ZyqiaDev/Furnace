<?php

namespace furnace\commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class FurnaceAboutCommand extends Command
{
	function __construct()
	{
		parent::__construct("furnaceabout", "Tells you about the furnace plugin #FurnacePlugin", null, ["furnaceabt", "furnabt", "credits"]);
	}

	public function execute(CommandSender $s, string $commandLabel, array $args): bool
	{
		$s->sendMessage("§8====== §bCredits §8=======\n§gName: §2Furnace\n§gDeveloper: §2ZyqiaTheDev\n§gGithub: §2https://github.com/ZyqiaDev\n§gVersion: §21.0.0\n§8======= §bCredits §8=======");
		return true;
	}
}