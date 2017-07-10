#!/usr/bin/env python
#check out more data tools @ twitch.tv/kaelos_the_reckoning

#list of cards that add cards not originally in the deck to the player's hand
card_creation_cards = ['rebel illuminator','voice of the speaker','elysian pathfinder','marshal ironthorn','yeti snowslinger','elysian trailblazer','jotun hurler','pilfer','subvert','twinning ritual','feln bloodcaster','spell swipe','obsidian golem','statuary maiden','smuggler\'s stash','nictotraxian']

#list of cards that pull non-power cards from the deck's stack
stack_draw_cards = ['ornate katana','oni quartermaster','praxis outlaw','friendly wisp','temple scribe','dispel','ancient lore','vault of the praxis','reliquary raider','mystic ascendant','inspire','hooru envoy','bronze cuirass','blind storyteller','levitate','yeti spy','herald\'s song','second sight','whispering wind','tundra explorer','wisdom of the elders','staff of stories','celestial omen','jarrall iceheart','channel the tempest','dark wisp','devour','scheme','rise to the challenge','crystalline chalice','explorer emeritus','fortunate stranger','quarry','feln bloodcaster']

#list of cards that draw from the void (but do not come into play)
void_draw_cards = ['steelfang chakram','worldpyre phoenix','excavate','dark return','vodakhan\'s staff']

#list of cards that pull power from the deck's stack
power_draw_cards = ['kaleb\'s favor','talir\'s favored','rolant\'s favor','eilyn\'s favor','vara\'s favor','seek power','find the way','amber acolyte','secret pages','privilege of rank','spire chaplain','minotaur ambassador','vodakhan, temple speaker','a new tomorrow']


import re

#number of cards in deck for each category
deck_thinning = 0
card_cycling = 0
card_creation = 0
stack_draw = 0
void_draw = 0
power_draw = 0

#names of cards found from each category
thinning_found = []
cycling_found = []
power_draw_found = []
stack_draw_found = []
void_draw_found = []
card_creation_found = []


while True:
	print ("Deck path must point to a .txt file exported directly from the Eternal client, or formatted identically.")
	try:
		deck = input('Enter file path:  ')
	except ValueError:
		print("Could not locate file, is this a valid path?")
		continue
	else:
		print("File found.")
		break

with open(deck, 'r') as searchfile:
	for line in searchfile:
		card_name_array = [];
		data_fields = line.split();
		data_len = len(data_fields);
		i = 1;
		for i in range (1,(data_len - 2)):
			card_name_array.append(data_fields[i]);
		card_name = (" ").join(card_name_array);
		
		if card_name.lower() in card_creation_cards:
			card_creation_found.append(card_name);
			cycling_found.append(card_name);
			card_creation = card_creation + int(data_fields[0]);
			
		if card_name.lower() in stack_draw_cards:
			stack_draw_found.append(card_name);
			thinning_found.append(card_name);
			cycling_found.append(card_name);
			stack_draw = stack_draw + int(data_fields[0]);
		
		if card_name.lower() in void_draw_cards:
			void_draw_found.append(card_name);
			cycling_found.append(card_name);
			void_draw = void_draw + int(data_fields[0]);
			
		if card_name.lower() in power_draw_cards:
			power_draw_found.append(card_name);
			thinning_found.append(card_name);
			cycling_found.append(card_name);
			power_draw = power_draw + int(data_fields[0]);
        
			
	deck_thinning = stack_draw + power_draw
	card_cycling = card_creation + stack_draw + power_draw + void_draw

print (" ")
print (" ")
print ("# Power draw:  ", power_draw)
print ("# Stack draw:  ", stack_draw)
print ("# Void draw:  ", void_draw)
print ("# Card creation:  ", card_creation)
print ("# Thinning:  ", deck_thinning)
print ("# Card-cycling:  ", card_cycling)
print (" ")
print ("CARDS MEETING CRITERIA")
print (" ")
print ("Power draw cards:  ", (", ").join(power_draw_found))
print ("Stack draw cards:  ", (", ").join(stack_draw_found))
print ("Void draw cards:  ", (", ").join(void_draw_found))
print ("Card creation cards:  ", (", ").join(card_creation_found))
print ("Thinning cards:  ", (", ").join(thinning_found))
print ("Card-cycling cards:  ", (", ").join(cycling_found))
print (" ")
print (" ")
print ("==========")
print ("REFERENCE")
print ("==========")
print("THINNING = Cards that remove additional cards from the player's deck.  A decrease in total remaining cards increases the relative proportion of desired cards, and thus odds of drawing a desirable card.")
print (" ")
print("CARD-CYCLING = Cards that provide access to units / spells / etc. that the player would otherwise not have access to this turn.  Includes cards drawn from deck, void, or enemy as well as created cards.")
print (" ")
print("POWER DRAW = Cards that remove extant power cards from the player's deck.  This does **not** include power cards, nor does it include units that create power (e.g. Voice of the Speaker, Marshal Ironthorn).")
print (" ")
print("STACK DRAW = Cards that can retrieve non-power cards from your deck's normal stack.  Includes all draw types including top, random, type-based, and player-selected.")
print (" ")
print("VOID DRAW = Cards that can DRAW others out of the void and place them back in the player's hand or deck.  This does **not** include cards that PLAY cards from the void.")
print (" ")
print("CARD CREATION = Cards that DRAW cards not originally in the player's deck, including cards generated by Echo / Fate or stolen from the enemy player.  This does **not** include cards that generate and PLAY others (e.g. Whispers in the Void, Marisen).")	
