<?php
/**
                                                $$\   $$$$$$\   $$$$$$\  $$$$$$$$\ 
                                              $$$$ | $$ ___$$\ $$ ___$$\ \____$$  |
* $$$$$$\$$$$\   $$$$$$\  $$$$$$$\  $$\   $$\ \_$$ | \_/   $$ |\_/   $$ |    $$  / 
* $$  _$$  _$$\  \____$$\ $$  __$$\ $$ |  $$ |  $$ |   $$$$$ /   $$$$$ /    $$  /  
* $$ / $$ / $$ | $$$$$$$ |$$ |  $$ |$$ |  $$ |  $$ |   \___$$\   \___$$\   $$  /   
* $$ | $$ | $$ |$$  __$$ |$$ |  $$ |$$ |  $$ |  $$ | $$\   $$ |$$\   $$ | $$  /    
* $$ | $$ | $$ |\$$$$$$$ |$$ |  $$ |\$$$$$$$ |$$$$$$\\$$$$$$  |\$$$$$$  |$$  /     
* \__| \__| \__| \_______|\__|  \__| \____$$ |\______|\______/  \______/ \__/      
                                    $$\   $$ |                                     
                                    \$$$$$$  |                                     
                                     \______/  
*/                                    

namespace many1337;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
	public function onEnable()
	{
		$this->getLogger()->info("VanillaTask finished by: many1337。");
	}
}
