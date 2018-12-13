<?php

/*
 *               _ _
 *         /\   | | |
 *        /  \  | | |_ __ _ _   _
 *       / /\ \ | | __/ _` | | | |
 *      / ____ \| | || (_| | |_| |
 *     /_/    \_|_|\__\__,_|\__, |
 *                           __/ |
 *                          |___/
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author TuranicTeam
 * @link https://github.com/TuranicTeam/Altay
 *
 */

declare(strict_types=1);

namespace pocketmine\block;

use pocketmine\item\Item;

class RedstoneWire extends Flowable{
	/** @var int */
	protected $id = Block::REDSTONE_WIRE;
	/** @var int */
	protected $itemId = Item::REDSTONE;

	/** @var int */
	protected $power = 0;

	public function __construct(){

	}

	public function readStateFromMeta(int $meta) : void{
		$this->power = $meta;
	}

	protected function writeStateToMeta() : int{
		return $this->power;
	}

	public function getStateBitmask() : int{
		return 0b1111;
	}

	public function getName() : string{
		return "Redstone";
	}

	public function readStateFromWorld() : void{
		parent::readStateFromWorld();
		//TODO: check connections to nearby redstone components
	}
}