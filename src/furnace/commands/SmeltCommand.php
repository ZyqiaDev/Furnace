<?php

namespace furnace\commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\item\Item;
use pocketmine\Player;

class SmeltCommand extends Command
{
	 function __construct()
	{
		parent::__construct("smelt", "Smelt a ore #FurnacePlugin", null);
		$this->setPermission("smelt.command");
	}

	public function execute(CommandSender $s, string $commandLabel, array $args): bool
	{
		if($s instanceof Player) {
			$item = $s->getInventory()->getItemInHand();
			if ($item->getId() == Item::COAL_ORE) {
				$s->getInventory()->setItemInHand(Item::get(ITEM::COAL, 0, $item->getCount()));
				$s->sendMessage("§8Furnace §r§7»§r §gYou have smelted §bCoal Ore§8(§7x§b" . $item->getCount() . "§8)");
			} elseif ($item->getId() == Item::GOLD_ORE) {
				$s->getInventory()->setItemInHand(Item::get(ITEM::GOLD_INGOT, 0, $item->getCount()));
				$s->sendMessage("§8Furnace §r§7»§r §gYou have smelted §bGold Ore§8(§7x§b" . $item->getCount() . "§8)");
			} elseif ($item->getId() == Item::DIAMOND_ORE) {
				$s->getInventory()->setItemInHand(Item::get(ITEM::DIAMOND, 0, $item->getCount()));
				$s->sendMessage("§8Furnace §r§7»§r §gYou have smelted §bDiamond Ore§8(§7x§b" . $item->getCount() . "§8)");
			} elseif ($item->getId() == Item::EMERALD_ORE) {
				$s->getInventory()->setItemInHand(Item::get(ITEM::EMERALD, 0, $item->getCount()));
				$s->sendMessage("§8Furnace §r§7»§r §gYou have smelted §bEmerald Ore§8(§7x§b" . $item->getCount() . "§8)");
			} elseif ($item->getId() == Item::IRON_ORE) {
				$s->getInventory()->setItemInHand(Item::get(ITEM::IRON_INGOT, 0, $item->getCount()));
				$s->sendMessage("§8Furnace §r§7»§r §gYou have smelted §bIron Ingot§8(§7x§b" . $item->getCount() . "§8)");
			} elseif ($item->getId() == Item::LAPIS_ORE) {
				$s->getInventory()->setItemInHand(Item::get(ITEM::LAPIS_ORE, 0, $item->getCount()));
				$s->sendMessage("§8Furnace §r§7»§r §gYou have smelted §bLapis Ore§8(§7x§b" . $item->getCount() . "§8)");
			} elseif ($item->getId() == Item::QUARTZ_ORE) {
				$s->getInventory()->setItemInHand(Item::get(ITEM::QUARTZ, 0, $item->getCount()));
				$s->sendMessage("§8Furnace §r§7»§r §gYou have smelted §bQuartz Ore§8(§7x§b" . $item->getCount() . "§8)");
			} elseif ($item->getId() == Item::REDSTONE_ORE) {
				$s->getInventory()->setItemInHand(Item::get(ITEM::REDSTONE, 0, $item->getCount()));
				$s->sendMessage("§8Furnace §r§7»§r §gYou have smelted §bRedstone Ore§8(§7x§b" . $item->getCount() . "§8)");
			}else{
				$s->sendMessage("§8Furnace §r§7»§r §gYou can't smelt §b" . $item->getName() . "§8, §gmake sure it's an ore");
			}
		}else{
			$s->sendMessage("§8Furnace §r§7»§r §gYou don't have permission to use this command");
		}
		return true;
	}
}