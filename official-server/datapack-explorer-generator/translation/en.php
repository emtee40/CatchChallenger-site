<?php
/*
$wgExtraNamespaces[$wgExtraNamespacesIndex++] = "Items";
$wgExtraNamespaces[$wgExtraNamespacesIndex++] = "Maps";
$wgExtraNamespaces[$wgExtraNamespacesIndex++] = "Bots";
$wgExtraNamespaces[$wgExtraNamespacesIndex++] = "Monsters";
$wgExtraNamespaces[$wgExtraNamespacesIndex++] = "Industries";
$wgExtraNamespaces[$wgExtraNamespacesIndex++] = "Zones";
$wgExtraNamespaces[$wgExtraNamespacesIndex++] = "Quests";
$wgExtraNamespaces[$wgExtraNamespacesIndex++] = "Buffs";
$wgExtraNamespaces[$wgExtraNamespacesIndex++] = "Skills";
$wgExtraNamespaces[$wgExtraNamespacesIndex++] = "Monsters type";
* [[Bots list]]
* [[Buffs list]]
* [[Crafting list]]
* [[Industries list]]
* [[Items list]]
* [[Maps list]]
* [[Monsters list]]
* [[Monsters types]]
* [[Plants list]]
* [[Quests list]]
* [[Skills list]]
* [[Starters]]
*/

$temp_lang='en';

if(!isset($datapackexplorergeneratorinclude))
    die('abort into translation '.$temp_lang."\n");
 
$translation_list[$temp_lang]['Bots list']='Bots list';
$translation_list[$temp_lang]['Map']='Map';
$translation_list[$temp_lang]['Quest start']='Quest start';
$translation_list[$temp_lang]['Text']='Text';
$translation_list[$temp_lang]['Shop']='Shop';
$translation_list[$temp_lang]['Fight']='Fight';
$translation_list[$temp_lang]['Heal']='Heal';
$translation_list[$temp_lang]['Learn']='Learn';
$translation_list[$temp_lang]['Warehouse']='Warehouse';
$translation_list[$temp_lang]['Market']='Market';
$translation_list[$temp_lang]['Clan']='Clan';
$translation_list[$temp_lang]['Sell']='Sell';
$translation_list[$temp_lang]['Zone capture']='Zone capture';
$translation_list[$temp_lang]['Industry']='Industry';
$translation_list[$temp_lang]['Unknown type']='Unknown type';
$translation_list[$temp_lang]['Industry [id]']='Industry [id]';
$translation_list[$temp_lang]['Buffs list']='Buffs list';
$translation_list[$temp_lang]['Crafting list']='Crafting list';
$translation_list[$temp_lang]['Industries list']='Industries list';
$translation_list[$temp_lang]['Items list']='Items list';
$translation_list[$temp_lang]['Maps list']='Maps list';
$translation_list[$temp_lang]['Monsters list']='Monsters list';
$translation_list[$temp_lang]['Plants list']='Plants list';
$translation_list[$temp_lang]['Quests list']='Quests list';
$translation_list[$temp_lang]['Skills list']='Skills list';
$translation_list[$temp_lang]['Monsters types']='Monsters types';
$translation_list[$temp_lang]['Starters']='Starters';
$translation_list[$temp_lang]['Level [level]']='Level [level]';
$translation_list[$temp_lang]['Capture bonus: ']='Capture bonus: ';
$translation_list[$temp_lang]['This buff is only valid for this fight']='This buff is only valid for this fight';
$translation_list[$temp_lang]['This buff is always valid']='This buff is always valid';
$translation_list[$temp_lang]['This buff is valid during [turns] turns']='This buff is valid during [turns] turns';
$translation_list[$temp_lang]['The hp change of [hp]']='The hp change of [hp]';
$translation_list[$temp_lang]['The defense change of [defense]']='The defense change of [defense]';
$translation_list[$temp_lang]['The attack change of [attack]']='The attack change of [attack]';
$translation_list[$temp_lang]['The hp change of <b>[hp]</b> during <b>[turns] steps</b>']='The hp change of <b>[hp]</b> during <b>[turns] steps</b>';
$translation_list[$temp_lang]['The defense change of <b>[defense]</b> during <b>[turns] steps</b>']='The defense change of <b>[defense]</b> during <b>[turns] steps</b>';
$translation_list[$temp_lang]['The attack change of <b>[attack]</b> during <b>[turns] steps</b>']='The attack change of <b>[attack]</b> during <b>[turns] steps</b>';
$translation_list[$temp_lang]['Monster']='Monster';
$translation_list[$temp_lang]['Type']='Type';
$translation_list[$temp_lang]['Buff']='Buff';
$translation_list[$temp_lang]['In walk']='In walk';
$translation_list[$temp_lang]['In fight']='In fight';
$translation_list[$temp_lang]['Item']='Item';
$translation_list[$temp_lang]['Material']='Material';
$translation_list[$temp_lang]['Product']='Product';
$translation_list[$temp_lang]['Price']='Price';
$translation_list[$temp_lang]['Unknown item']='Unknown item';
$translation_list[$temp_lang]['Item to learn missing: ']='Item to learn missing: ';
$translation_list[$temp_lang]['Time to complet a cycle']='Time to complet a cycle';
$translation_list[$temp_lang]['s']='s';
$translation_list[$temp_lang]['mins']='mins';
$translation_list[$temp_lang]['hours']='hours';
$translation_list[$temp_lang]['days']='days';
$translation_list[$temp_lang]['Cycle to be full']='Cycle to be full';
$translation_list[$temp_lang]['Resources']='Resources';
$translation_list[$temp_lang]['Requirements']='Requirements';
$translation_list[$temp_lang]['Quest:']='Quest:';
$translation_list[$temp_lang]['Bot']='Bot';
$translation_list[$temp_lang]['Map']='Map';
$translation_list[$temp_lang]['Unknown map']='Unknown map';
$translation_list[$temp_lang]['Products']='Products';
$translation_list[$temp_lang]['Industry']='Industry';
$translation_list[$temp_lang]['Location']='Location';
$translation_list[$temp_lang]['Description']='Description';
$translation_list[$temp_lang]['Trap']='Trap';
$translation_list[$temp_lang]['Bonus rate:']='Bonus rate:';
$translation_list[$temp_lang]['Repel']='Repel';
$translation_list[$temp_lang]['Plant']='Plant';
$translation_list[$temp_lang]['Seed']='Seed';
$translation_list[$temp_lang]['Sprouted']='Sprouted';
$translation_list[$temp_lang]['Taller']='Taller';
$translation_list[$temp_lang]['Flowering']='Flowering';
$translation_list[$temp_lang]['Fruits']='Fruits';
$translation_list[$temp_lang]['Rewards']='Rewards';
$translation_list[$temp_lang]['Less reputation in:']='Less reputation in:';
$translation_list[$temp_lang]['More reputation in:']='More reputation in:';
$translation_list[$temp_lang]['Able to create clan']='Able to create clan';
$translation_list[$temp_lang]['Allow']='Allow';
$translation_list[$temp_lang]['Effect']='Effect';
$translation_list[$temp_lang]['Regenerate all the hp']='Regenerate all the hp';
$translation_list[$temp_lang]['Remove all the buff and debuff']='Remove all the buff and debuff';
$translation_list[$temp_lang]['Remove the buff:']='Remove the buff:';
$translation_list[$temp_lang]['Unknown buff']='Unknown buff';
$translation_list[$temp_lang]['Do the item']='Do the item';
$translation_list[$temp_lang]['Product by crafting']='Product by crafting';
$translation_list[$temp_lang]['Used into crafting']='Used into crafting';
$translation_list[$temp_lang]['Evolve from']='Evolve from';
$translation_list[$temp_lang]['Evolve with']='Evolve with';
$translation_list[$temp_lang]['Evolve to']='Evolve to';
$translation_list[$temp_lang]['Quantity']='Quantity';
$translation_list[$temp_lang]['Luck']='Luck';
$translation_list[$temp_lang]['Quests']='Quests';
$translation_list[$temp_lang]['Quantity rewarded']='Quantity rewarded';
$translation_list[$temp_lang]['Resource of the industry']='Resource of the industry';
$translation_list[$temp_lang]['Product of the industry']='Product of the industry';
$translation_list[$temp_lang]['Skill']='Skill';
$translation_list[$temp_lang]['Type']='Type';
$translation_list[$temp_lang]['On the map']='On the map';
$translation_list[$temp_lang]['Can\'t be sold']='Can\'t be sold';
$translation_list[$temp_lang]['Map description']='Map description';
$translation_list[$temp_lang]['Zone']='Zone';
$translation_list[$temp_lang]['Linked locations']='Linked locations';
$translation_list[$temp_lang]['Border top']='Border top';
$translation_list[$temp_lang]['Border bottom']='Border bottom';
$translation_list[$temp_lang]['Border left']='Border left';
$translation_list[$temp_lang]['Border right']='Border right';
$translation_list[$temp_lang]['Door']='Door';
$translation_list[$temp_lang]['Teleporter']='Teleporter';
$translation_list[$temp_lang]['Drop on ']='Drop on ';
$translation_list[$temp_lang]['Hidden on the map']='Hidden on the map';
$translation_list[$temp_lang]['Levels']='Levels';
$translation_list[$temp_lang]['Rate']='Rate';
$translation_list[$temp_lang]['Content']='Content';
$translation_list[$temp_lang]['Text only']='Text only';
$translation_list[$temp_lang]['Leader']='Leader';
$translation_list[$temp_lang]['Size']='Size';
$translation_list[$temp_lang]['MB']='MB';
$translation_list[$temp_lang]['Unknown zone']='Unknown zone';
$translation_list[$temp_lang]['Gender ratio']='Gender ratio';
$translation_list[$temp_lang]['Unknown gender']='Unknown gender';
$translation_list[$temp_lang]['female']='female';
$translation_list[$temp_lang]['male']='male';
$translation_list[$temp_lang]['Kind']='Kind';
$translation_list[$temp_lang]['Habitat']='Habitat';
$translation_list[$temp_lang]['Catch rate']='Catch rate';
$translation_list[$temp_lang]['Steps for hatching']='Steps for hatching';
$translation_list[$temp_lang]['Body']='Body';
$translation_list[$temp_lang]['Stat']='Stat';
$translation_list[$temp_lang]['Height']='Height';
$translation_list[$temp_lang]['Hp']='Hp';
$translation_list[$temp_lang]['width']='width';
$translation_list[$temp_lang]['Attack']='Attack';
$translation_list[$temp_lang]['Defense']='Defense';
$translation_list[$temp_lang]['Special attack']='Special attack';
$translation_list[$temp_lang]['Special defense']='Special defense';
$translation_list[$temp_lang]['Speed']='Speed';
$translation_list[$temp_lang]['Weak to']='Weak to';
$translation_list[$temp_lang]['Resistant to']='Resistant to';
$translation_list[$temp_lang]['Immune to']='Immune to';
$translation_list[$temp_lang]['Endurance']='Endurance';
$translation_list[$temp_lang]['At level']='At level';
$translation_list[$temp_lang]['With unknown item']='With unknown item';
$translation_list[$temp_lang]['After trade']='After trade';
$translation_list[$temp_lang]['Time to grow']='Time to grow';
$translation_list[$temp_lang]['Fruits produced']='Fruits produced';
$translation_list[$temp_lang]['minutes']='minutes';
$translation_list[$temp_lang]['repeatable']='repeatable';
$translation_list[$temp_lang]['one time']='one time';
$translation_list[$temp_lang]['Step']='Step';
$translation_list[$temp_lang]['Effective against']='Effective against';
$translation_list[$temp_lang]['Not effective against']='Not effective against';
$translation_list[$temp_lang]['Useless against']='Useless against';
$translation_list[$temp_lang]['Level']='Level';
$translation_list[$temp_lang]['Skill point (SP) to learn']='Skill point (SP) to learn';
$translation_list[$temp_lang]['You can\'t learn this skill']='You can\'t learn this skill';
$translation_list[$temp_lang]['Add buff:']='Add buff:';
$translation_list[$temp_lang]['Success']='Success';
$translation_list[$temp_lang]['Luck:']='Luck:';
$translation_list[$temp_lang]['Skill level']='Skill level';
$translation_list[$temp_lang]['Number of level']='Number of level';
$translation_list[$temp_lang]['Skin']='Skin';
$translation_list[$temp_lang]['Cash']='Cash';
$translation_list[$temp_lang]['Items']='Items';
$translation_list[$temp_lang]['Population']='Population';
$translation_list[$temp_lang]['No bots in this zone!']='No bots in this zone!';
$translation_list[$temp_lang]['1 bot']='1 bot';
$translation_list[$temp_lang]['bots']='bots';
$translation_list[$temp_lang]['shop(s)']='shop(s)';
$translation_list[$temp_lang]['bot(s) of fight']='bot(s) of fight';
$translation_list[$temp_lang]['bot(s) of heal']='bot(s) of heal';
$translation_list[$temp_lang]['bot(s) of learn']='bot(s) of learn';
$translation_list[$temp_lang]['warehouse(s)']='warehouse(s)';
$translation_list[$temp_lang]['market(s)']='market(s)';
$translation_list[$temp_lang]['bot(s) to create clan']='bot(s) to create clan';
$translation_list[$temp_lang]['bot(s) to sell your objects']='bot(s) to sell your objects';
$translation_list[$temp_lang]['bot(s) to capture the zone']='bot(s) to capture the zone';
$translation_list[$temp_lang]['industries']='industries';
$translation_list[$temp_lang]['quests to start']='quests to start';
$translation_list[$temp_lang]['Quantity needed']='Quantity needed';
$translation_list[$temp_lang]['Life quantity:']='Life quantity:';
$translation_list[$temp_lang]['Reputations']='Reputations';
$translation_list[$temp_lang]['Drop luck of [luck]%']='Drop luck of [luck]%';
$translation_list[$temp_lang]['Industry #[industryid]']='Industry #[industryid]';
$translation_list[$temp_lang]['After <b>[mins]</b> minutes you will have <b>[fruits]</b> fruits']='After <b>[mins]</b> minutes you will have <b>[fruits]</b> fruits';
$translation_list[$temp_lang]['with luck of [luck]%']='with luck of [luck]%';
$translation_list[$temp_lang]['Cave']='Cave';
$translation_list[$temp_lang]['Water']='Water';
$translation_list[$temp_lang]['Grass']='Grass';
$translation_list[$temp_lang]['at night']='at night';
$translation_list[$temp_lang][' condition [condition] at [value]']=' condition [condition] at [value]';
$translation_list[$temp_lang]['in']='in';
$translation_list[$temp_lang]['Yes']='Yes';
$translation_list[$temp_lang]['No']='No';
$translation_list[$temp_lang]['Repeatable']='Repeatable';
$translation_list[$temp_lang]['Starting bot']='Starting bot';
$translation_list[$temp_lang]['Variations']='Variations';
$translation_list[$temp_lang]['Game to catch it']='Game to catch it';
$translation_list[$temp_lang]['Rarity']='Rarity';
$translation_list[$temp_lang]['Not found on any map']='Not found on any map';
$translation_list[$temp_lang]['Version exclusive!']='Version exclusive!';
$translation_list[$temp_lang]['Very common']='Very common';
$translation_list[$temp_lang]['Common']='Common';
$translation_list[$temp_lang]['Less common']='Less common';
$translation_list[$temp_lang]['Rare']='Rare';
$translation_list[$temp_lang]['Very rare']='Very rare';
$translation_list[$temp_lang]['Monster able to learn']='Monster able to learn';

//generated path
$translation_list[$temp_lang]['maps/']='maps/';
$translation_list[$temp_lang]['industries/']='industries/';
$translation_list[$temp_lang]['quests/']='quests/';
$translation_list[$temp_lang]['monsters/']='monsters/';
$translation_list[$temp_lang]['items/']='items/';
$translation_list[$temp_lang]['zones/']='zones/';
$translation_list[$temp_lang]['bots/']='bots/';
//pages
$translation_list[$temp_lang]['bots.html']='bots.html';
$translation_list[$temp_lang]['buffs.html']='buffs.html';
$translation_list[$temp_lang]['crafting.html']='crafting.html';
$translation_list[$temp_lang]['industries.html']='industries.html';
$translation_list[$temp_lang]['items.html']='items.html';
$translation_list[$temp_lang]['maps.html']='maps.html';
$translation_list[$temp_lang]['monsters.html']='monsters.html';
$translation_list[$temp_lang]['plants.html']='plants.html';
$translation_list[$temp_lang]['quests.html']='quests.html';
$translation_list[$temp_lang]['skills.html']='skills.html';
$translation_list[$temp_lang]['start.html']='start.html';
$translation_list[$temp_lang]['types.html']='types.html';
$translation_list[$temp_lang]['tree.html']='tree.html';
//mediawiki categories
$translation_list[$temp_lang]['Bots:']='Bots:';
$translation_list[$temp_lang]['Items:']='Items:';
$translation_list[$temp_lang]['Maps:']='Maps:';
$translation_list[$temp_lang]['Monsters:']='Monsters:';
$translation_list[$temp_lang]['Industries:']='Industries:';
$translation_list[$temp_lang]['Zones:']='Zones:';
$translation_list[$temp_lang]['Quests:']='Quests:';
$translation_list[$temp_lang]['Buffs:']='Buffs:';
$translation_list[$temp_lang]['Skills:']='Skills:';
$translation_list[$temp_lang]['Monsters type:']='Monsters type:';
