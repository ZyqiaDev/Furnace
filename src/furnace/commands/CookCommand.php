<?php

namespace furnace\commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\item\Item;
use pocketmine\Player;

class CookCommand extends Command
{
	function __construct()
	{
		parent::__construct("cook", "Cook food #FurnacePlugin", null);
		$this->setPermission("cook.command");
	}

	public function execute(CommandSender $s, string $commandLabel, array $args): bool
	{
		if($s instanceof Player) {
			$item = $s->getInventory()->getItemInHand();
			if ($item->getId() == Item::RAW_BEEF) {
				$s->getInventory()->setItemInHand(Item::get(ITEM::COOKED_BEEF, 0, $item->getCount()));
				$s->sendMessage("§8Furnace §r§7»§r §gYou have cooked §bRaw Beef§8(§7x§b" . $item->getCount() . "§8)");
			} elseif ($item->getId() == Item::RAW_CHICKEN) {
				$s->getInventory()->setItemInHand(Item::get(ITEM::COOKED_CHICKEN, 0, $item->getCount()));
				$s->sendMessage("§8Furnace §r§7»§r §gYou have cooked §bRaw Chicken§8(§7x§b" . $item->getCount() . "§8)");
			} elseif ($item->getId() == Item::RAW_FISH) {
				$s->getInventory()->setItemInHand(Item::get(ITEM::COOKED_FISH, 0, $item->getCount()));
				$s->sendMessage("§8Furnace §r§7»§r §gYou have cooked §bRaw Fish§8(§7x§b" . $item->getCount() . "§8)");
			} elseif ($item->getId() == Item::RAW_MUTTON) {
				$s->getInventory()->setItemInHand(Item::get(ITEM::COOKED_MUTTON, 0, $item->getCount()));
				$s->sendMessage("§8Furnace §r§7»§r §gYou have cooked §bRaw Mutton§8(§7x§b" . $item->getCount() . "§8)");
			} elseif ($item->getId() == Item::RAW_PORKCHOP) {
				$s->getInventory()->setItemInHand(Item::get(ITEM::COOKED_PORKCHOP, 0, $item->getCount()));
				$s->sendMessage("§8Furnace §r§7»§r §gYou have cooked §bRaw Porkchop§8(§7x§b" . $item->getCount() . "§8)");
			} elseif ($item->getId() == Item::RAW_RABBIT) {
				$s->getInventory()->setItemInHand(Item::get(ITEM::COOKED_RABBIT, 0, $item->getCount()));
				$s->sendMessage("§8Furnace §r§7»§r §gYou have cooked §bRaw Rabbit§8(§7x§b" . $item->getCount() . "§8)");
			} elseif ($item->getId() == Item::RAW_SALMON) {
				$s->getInventory()->setItemInHand(Item::get(ITEM::COOKED_SALMON, 0, $item->getCount()));
				$s->sendMessage("§8Furnace §r§7»§r §gYou have cooked §bRaw Salmon§8(§7x§b" . $item->getCount() . "§8)");
			}else{
				$s->sendMessage("§8Furnace §r§7»§r §gYou can't cook §b" . $item->getName() . "§8, §gmake sure it's raw food");
			}
		}else{
			$s->sendMessage("§8Furnace §r§7»§r §gYou don't have permission to use this command");
		}
		return true;
	}
}