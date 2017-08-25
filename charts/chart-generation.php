<?php
	include("../cfg/cards_database.php");
	
	$dbhandle = new mysqli($servername, $username, $password, $database);	
		if ($dbhandle->connect_error) {
			exit("There was an error with your connection: ".$dbhandle->connect_error);
		}

	$fireQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'fire';";
	$timeQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'time';";
	$justiceQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'justice';";
	$primalQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'primal';";
	$shadowQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'shadow';";
	$allQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'all';";
	$noneQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'none';";
	$monofireQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'monofire';";
	$monotimeQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'monotime';";
	$monojusticeQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'monojustice';";
	$monoprimalQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'monoprimal';";
	$monoshadowQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'monoshadow';";
	$argenportQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'argenport';";
	$combreiQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'combrei';";
	$elysianQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'elysian';";
	$felnQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'feln';";
	$hooruQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'hooru';";
	$praxisQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'praxis';";
	$rakanoQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'rakano';";
	$skycragQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'skycrag';";
	$stonescarQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'stonescar';";
	$xenanQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'xenan';";
	$monofiredeckQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'monofiredeck';";
	$monotimedeckQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'monotimedeck';";
	$monojusticedeckQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'monojusticedeck';";
	$monoprimaldeckQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'monoprimaldeck';";
	$monoshadowdeckQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'monoshadowdeck';";
	$argenportdeckQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'argenportdeck';";
	$combreideckQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'combreideck';";
	$elysiandeckQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'elysiandeck';";
	$felndeckQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'felndeck';";
	$hoorudeckQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'hoorudeck';";
	$praxisdeckQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'praxisdeck';";
	$rakanodeckQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'rakanodeck';";
	$skycragdeckQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'skycragdeck';";
	$stonescardeckQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'stonescardeck';";
	$xenandeckQuery = "SELECT * FROM `eternal_graphs` WHERE `series` = 'xenandeck';";

	$fireResult = $dbhandle->query($fireQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$timeResult = $dbhandle->query($timeQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$justiceResult = $dbhandle->query($justiceQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$primalResult = $dbhandle->query($primalQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$shadowResult = $dbhandle->query($shadowQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$allResult = $dbhandle->query($allQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$noneResult = $dbhandle->query($noneQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$monofireResult = $dbhandle->query($monofireQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$monotimeResult = $dbhandle->query($monotimeQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$monojusticeResult = $dbhandle->query($monojusticeQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$monoprimalResult = $dbhandle->query($monoprimalQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$monoshadowResult = $dbhandle->query($monoshadowQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$argenportResult = $dbhandle->query($argenportQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$combreiResult = $dbhandle->query($combreiQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$elysianResult = $dbhandle->query($elysianQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$felnResult = $dbhandle->query($felnQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$hooruResult = $dbhandle->query($hooruQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$praxisResult = $dbhandle->query($praxisQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$rakanoResult = $dbhandle->query($rakanoQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$skycragResult = $dbhandle->query($skycragQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$stonescarResult = $dbhandle->query($stonescarQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$xenanResult = $dbhandle->query($xenanQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$monofiredeckResult = $dbhandle->query($monofiredeckQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$monotimedeckResult = $dbhandle->query($monotimedeckQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$monojusticedeckResult = $dbhandle->query($monojusticedeckQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$monoprimaldeckResult = $dbhandle->query($monoprimaldeckQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$monoshadowdeckResult = $dbhandle->query($monoshadowdeckQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$argenportdeckResult = $dbhandle->query($argenportdeckQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$combreideckResult = $dbhandle->query($combreideckQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$elysiandeckResult = $dbhandle->query($elysiandeckQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$felndeckResult = $dbhandle->query($felndeckQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$hoorudeckResult = $dbhandle->query($hoorudeckQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$praxisdeckResult = $dbhandle->query($praxisdeckQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$rakanodeckResult = $dbhandle->query($rakanodeckQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$skycragdeckResult = $dbhandle->query($skycragdeckQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$stonescardeckResult = $dbhandle->query($stonescardeckQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	$xenandeckResult = $dbhandle->query($xenandeckQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
	

	$powerArray=array();
	
// declare Total Cards arrays			
	$fireTotalCards=array();
	$timeTotalCards=array();
	$justiceTotalCards=array();
	$primalTotalCards=array();
	$shadowTotalCards=array();
	$allTotalCards=array();
	$noneTotalCards=array();
	$monofireTotalCards=array();
	$monotimeTotalCards=array();
	$monojusticeTotalCards=array();
	$monoprimalTotalCards=array();
	$monoshadowTotalCards=array();
	$argenportTotalCards=array();
	$combreiTotalCards=array();
	$elysianTotalCards=array();
	$felnTotalCards=array();
	$hooruTotalCards=array();
	$praxisTotalCards=array();
	$rakanoTotalCards=array();
	$skycragTotalCards=array();
	$stonescarTotalCards=array();
	$xenanTotalCards=array();
	$monofiredeckTotalCards=array();
	$monotimedeckTotalCards=array();
	$monojusticedeckTotalCards=array();
	$monoprimaldeckTotalCards=array();
	$monoshadowdeckTotalCards=array();
	$argenportdeckTotalCards=array();
	$combreideckTotalCards=array();
	$elysiandeckTotalCards=array();
	$felndeckTotalCards=array();
	$hoorudeckTotalCards=array();
	$praxisdeckTotalCards=array();
	$rakanodeckTotalCards=array();
	$skycragdeckTotalCards=array();
	$stonescardeckTotalCards=array();
	$xenandeckTotalCards=array();

// declare Units arrays			
	$fireUnits=array();
	$timeUnits=array();
	$justiceUnits=array();
	$primalUnits=array();
	$shadowUnits=array();
	$allUnits=array();
	$noneUnits=array();
	$monofireUnits=array();
	$monotimeUnits=array();
	$monojusticeUnits=array();
	$monoprimalUnits=array();
	$monoshadowUnits=array();
	$argenportUnits=array();
	$combreiUnits=array();
	$elysianUnits=array();
	$felnUnits=array();
	$hooruUnits=array();
	$praxisUnits=array();
	$rakanoUnits=array();
	$skycragUnits=array();
	$stonescarUnits=array();
	$xenanUnits=array();
	$monofiredeckUnits=array();
	$monotimedeckUnits=array();
	$monojusticedeckUnits=array();
	$monoprimaldeckUnits=array();
	$monoshadowdeckUnits=array();
	$argenportdeckUnits=array();
	$combreideckUnits=array();
	$elysiandeckUnits=array();
	$felndeckUnits=array();
	$hoorudeckUnits=array();
	$praxisdeckUnits=array();
	$rakanodeckUnits=array();
	$skycragdeckUnits=array();
	$stonescardeckUnits=array();
	$xenandeckUnits=array();
	
// declare Spells arrays			
	$fireSpells=array();
	$timeSpells=array();
	$justiceSpells=array();
	$primalSpells=array();
	$shadowSpells=array();
	$allSpells=array();
	$noneSpells=array();
	$monofireSpells=array();
	$monotimeSpells=array();
	$monojusticeSpells=array();
	$monoprimalSpells=array();
	$monoshadowSpells=array();
	$argenportSpells=array();
	$combreiSpells=array();
	$elysianSpells=array();
	$felnSpells=array();
	$hooruSpells=array();
	$praxisSpells=array();
	$rakanoSpells=array();
	$skycragSpells=array();
	$stonescarSpells=array();
	$xenanSpells=array();
	$monofiredeckSpells=array();
	$monotimedeckSpells=array();
	$monojusticedeckSpells=array();
	$monoprimaldeckSpells=array();
	$monoshadowdeckSpells=array();
	$argenportdeckSpells=array();
	$combreideckSpells=array();
	$elysiandeckSpells=array();
	$felndeckSpells=array();
	$hoorudeckSpells=array();
	$praxisdeckSpells=array();
	$rakanodeckSpells=array();
	$skycragdeckSpells=array();
	$stonescardeckSpells=array();
	$xenandeckSpells=array();
	
// declare Attachments arrays			
	$fireAttachments=array();
	$timeAttachments=array();
	$justiceAttachments=array();
	$primalAttachments=array();
	$shadowAttachments=array();
	$allAttachments=array();
	$noneAttachments=array();
	$monofireAttachments=array();
	$monotimeAttachments=array();
	$monojusticeAttachments=array();
	$monoprimalAttachments=array();
	$monoshadowAttachments=array();
	$argenportAttachments=array();
	$combreiAttachments=array();
	$elysianAttachments=array();
	$felnAttachments=array();
	$hooruAttachments=array();
	$praxisAttachments=array();
	$rakanoAttachments=array();
	$skycragAttachments=array();
	$stonescarAttachments=array();
	$xenanAttachments=array();
	$monofiredeckAttachments=array();
	$monotimedeckAttachments=array();
	$monojusticedeckAttachments=array();
	$monoprimaldeckAttachments=array();
	$monoshadowdeckAttachments=array();
	$argenportdeckAttachments=array();
	$combreideckAttachments=array();
	$elysiandeckAttachments=array();
	$felndeckAttachments=array();
	$hoorudeckAttachments=array();
	$praxisdeckAttachments=array();
	$rakanodeckAttachments=array();
	$skycragdeckAttachments=array();
	$stonescardeckAttachments=array();
	$xenandeckAttachments=array();
	
// declare Weapons arrays			
	$fireWeapons=array();
	$timeWeapons=array();
	$justiceWeapons=array();
	$primalWeapons=array();
	$shadowWeapons=array();
	$allWeapons=array();
	$noneWeapons=array();
	$monofireWeapons=array();
	$monotimeWeapons=array();
	$monojusticeWeapons=array();
	$monoprimalWeapons=array();
	$monoshadowWeapons=array();
	$argenportWeapons=array();
	$combreiWeapons=array();
	$elysianWeapons=array();
	$felnWeapons=array();
	$hooruWeapons=array();
	$praxisWeapons=array();
	$rakanoWeapons=array();
	$skycragWeapons=array();
	$stonescarWeapons=array();
	$xenanWeapons=array();
	$monofiredeckWeapons=array();
	$monotimedeckWeapons=array();
	$monojusticedeckWeapons=array();
	$monoprimaldeckWeapons=array();
	$monoshadowdeckWeapons=array();
	$argenportdeckWeapons=array();
	$combreideckWeapons=array();
	$elysiandeckWeapons=array();
	$felndeckWeapons=array();
	$hoorudeckWeapons=array();
	$praxisdeckWeapons=array();
	$rakanodeckWeapons=array();
	$skycragdeckWeapons=array();
	$stonescardeckWeapons=array();
	$xenandeckWeapons=array();
	
// declare Relic Weapons arrays			
	$fireRelicWeapons=array();
	$timeRelicWeapons=array();
	$justiceRelicWeapons=array();
	$primalRelicWeapons=array();
	$shadowRelicWeapons=array();
	$allRelicWeapons=array();
	$noneRelicWeapons=array();
	$monofireRelicWeapons=array();
	$monotimeRelicWeapons=array();
	$monojusticeRelicWeapons=array();
	$monoprimalRelicWeapons=array();
	$monoshadowRelicWeapons=array();
	$argenportRelicWeapons=array();
	$combreiRelicWeapons=array();
	$elysianRelicWeapons=array();
	$felnRelicWeapons=array();
	$hooruRelicWeapons=array();
	$praxisRelicWeapons=array();
	$rakanoRelicWeapons=array();
	$skycragRelicWeapons=array();
	$stonescarRelicWeapons=array();
	$xenanRelicWeapons=array();
	$monofiredeckRelicWeapons=array();
	$monotimedeckRelicWeapons=array();
	$monojusticedeckRelicWeapons=array();
	$monoprimaldeckRelicWeapons=array();
	$monoshadowdeckRelicWeapons=array();
	$argenportdeckRelicWeapons=array();
	$combreideckRelicWeapons=array();
	$elysiandeckRelicWeapons=array();
	$felndeckRelicWeapons=array();
	$hoorudeckRelicWeapons=array();
	$praxisdeckRelicWeapons=array();
	$rakanodeckRelicWeapons=array();
	$skycragdeckRelicWeapons=array();
	$stonescardeckRelicWeapons=array();
	$xenandeckRelicWeapons=array();
	
// declare Relics arrays			
	$fireRelics=array();
	$timeRelics=array();
	$justiceRelics=array();
	$primalRelics=array();
	$shadowRelics=array();
	$allRelics=array();
	$noneRelics=array();
	$monofireRelics=array();
	$monotimeRelics=array();
	$monojusticeRelics=array();
	$monoprimalRelics=array();
	$monoshadowRelics=array();
	$argenportRelics=array();
	$combreiRelics=array();
	$elysianRelics=array();
	$felnRelics=array();
	$hooruRelics=array();
	$praxisRelics=array();
	$rakanoRelics=array();
	$skycragRelics=array();
	$stonescarRelics=array();
	$xenanRelics=array();
	$monofiredeckRelics=array();
	$monotimedeckRelics=array();
	$monojusticedeckRelics=array();
	$monoprimaldeckRelics=array();
	$monoshadowdeckRelics=array();
	$argenportdeckRelics=array();
	$combreideckRelics=array();
	$elysiandeckRelics=array();
	$felndeckRelics=array();
	$hoorudeckRelics=array();
	$praxisdeckRelics=array();
	$rakanodeckRelics=array();
	$skycragdeckRelics=array();
	$stonescardeckRelics=array();
	$xenandeckRelics=array();
	
// declare arrays			
	$fireCursedRelics=array();
	$timeCursedRelics=array();
	$justiceCursedRelics=array();
	$primalCursedRelics=array();
	$shadowCursedRelics=array();
	$allCursedRelics=array();
	$noneCursedRelics=array();
	$monofireCursedRelics=array();
	$monotimeCursedRelics=array();
	$monojusticeCursedRelics=array();
	$monoprimalCursedRelics=array();
	$monoshadowCursedRelics=array();
	$argenportCursedRelics=array();
	$combreiCursedRelics=array();
	$elysianCursedRelics=array();
	$felnCursedRelics=array();
	$hooruCursedRelics=array();
	$praxisCursedRelics=array();
	$rakanoCursedRelics=array();
	$skycragCursedRelics=array();
	$stonescarCursedRelics=array();
	$xenanCursedRelics=array();
	$monofiredeckCursedRelics=array();
	$monotimedeckCursedRelics=array();
	$monojusticedeckCursedRelics=array();
	$monoprimaldeckCursedRelics=array();
	$monoshadowdeckCursedRelics=array();
	$argenportdeckCursedRelics=array();
	$combreideckCursedRelics=array();
	$elysiandeckCursedRelics=array();
	$felndeckCursedRelics=array();
	$hoorudeckCursedRelics=array();
	$praxisdeckCursedRelics=array();
	$rakanodeckCursedRelics=array();
	$skycragdeckCursedRelics=array();
	$stonescardeckCursedRelics=array();
	$xenandeckCursedRelics=array();
	
// declare Curses arrays			
	$fireCurses=array();
	$timeCurses=array();
	$justiceCurses=array();
	$primalCurses=array();
	$shadowCurses=array();
	$allCurses=array();
	$noneCurses=array();
	$monofireCurses=array();
	$monotimeCurses=array();
	$monojusticeCurses=array();
	$monoprimalCurses=array();
	$monoshadowCurses=array();
	$argenportCurses=array();
	$combreiCurses=array();
	$elysianCurses=array();
	$felnCurses=array();
	$hooruCurses=array();
	$praxisCurses=array();
	$rakanoCurses=array();
	$skycragCurses=array();
	$stonescarCurses=array();
	$xenanCurses=array();
	$monofiredeckCurses=array();
	$monotimedeckCurses=array();
	$monojusticedeckCurses=array();
	$monoprimaldeckCurses=array();
	$monoshadowdeckCurses=array();
	$argenportdeckCurses=array();
	$combreideckCurses=array();
	$elysiandeckCurses=array();
	$felndeckCurses=array();
	$hoorudeckCurses=array();
	$praxisdeckCurses=array();
	$rakanodeckCurses=array();
	$skycragdeckCurses=array();
	$stonescardeckCurses=array();
	$xenandeckCurses=array();
	
// declare Removal arrays			
	$fireRemoval=array();
	$timeRemoval=array();
	$justiceRemoval=array();
	$primalRemoval=array();
	$shadowRemoval=array();
	$allRemoval=array();
	$noneRemoval=array();
	$monofireRemoval=array();
	$monotimeRemoval=array();
	$monojusticeRemoval=array();
	$monoprimalRemoval=array();
	$monoshadowRemoval=array();
	$argenportRemoval=array();
	$combreiRemoval=array();
	$elysianRemoval=array();
	$felnRemoval=array();
	$hooruRemoval=array();
	$praxisRemoval=array();
	$rakanoRemoval=array();
	$skycragRemoval=array();
	$stonescarRemoval=array();
	$xenanRemoval=array();
	$monofiredeckRemoval=array();
	$monotimedeckRemoval=array();
	$monojusticedeckRemoval=array();
	$monoprimaldeckRemoval=array();
	$monoshadowdeckRemoval=array();
	$argenportdeckRemoval=array();
	$combreideckRemoval=array();
	$elysiandeckRemoval=array();
	$felndeckRemoval=array();
	$hoorudeckRemoval=array();
	$praxisdeckRemoval=array();
	$rakanodeckRemoval=array();
	$skycragdeckRemoval=array();
	$stonescardeckRemoval=array();
	$xenandeckRemoval=array();
	
// declare Reactive arrays			
	$fireReactive=array();
	$timeReactive=array();
	$justiceReactive=array();
	$primalReactive=array();
	$shadowReactive=array();
	$allReactive=array();
	$noneReactive=array();
	$monofireReactive=array();
	$monotimeReactive=array();
	$monojusticeReactive=array();
	$monoprimalReactive=array();
	$monoshadowReactive=array();
	$argenportReactive=array();
	$combreiReactive=array();
	$elysianReactive=array();
	$felnReactive=array();
	$hooruReactive=array();
	$praxisReactive=array();
	$rakanoReactive=array();
	$skycragReactive=array();
	$stonescarReactive=array();
	$xenanReactive=array();
	$monofiredeckReactive=array();
	$monotimedeckReactive=array();
	$monojusticedeckReactive=array();
	$monoprimaldeckReactive=array();
	$monoshadowdeckReactive=array();
	$argenportdeckReactive=array();
	$combreideckReactive=array();
	$elysiandeckReactive=array();
	$felndeckReactive=array();
	$hoorudeckReactive=array();
	$praxisdeckReactive=array();
	$rakanodeckReactive=array();
	$skycragdeckReactive=array();
	$stonescardeckReactive=array();
	$xenandeckReactive=array();
	
// declare Card Cycling arrays			
	$fireCardCycling=array();
	$timeCardCycling=array();
	$justiceCardCycling=array();
	$primalCardCycling=array();
	$shadowCardCycling=array();
	$allCardCycling=array();
	$noneCardCycling=array();
	$monofireCardCycling=array();
	$monotimeCardCycling=array();
	$monojusticeCardCycling=array();
	$monoprimalCardCycling=array();
	$monoshadowCardCycling=array();
	$argenportCardCycling=array();
	$combreiCardCycling=array();
	$elysianCardCycling=array();
	$felnCardCycling=array();
	$hooruCardCycling=array();
	$praxisCardCycling=array();
	$rakanoCardCycling=array();
	$skycragCardCycling=array();
	$stonescarCardCycling=array();
	$xenanCardCycling=array();
	$monofiredeckCardCycling=array();
	$monotimedeckCardCycling=array();
	$monojusticedeckCardCycling=array();
	$monoprimaldeckCardCycling=array();
	$monoshadowdeckCardCycling=array();
	$argenportdeckCardCycling=array();
	$combreideckCardCycling=array();
	$elysiandeckCardCycling=array();
	$felndeckCardCycling=array();
	$hoorudeckCardCycling=array();
	$praxisdeckCardCycling=array();
	$rakanodeckCardCycling=array();
	$skycragdeckCardCycling=array();
	$stonescardeckCardCycling=array();
	$xenandeckCardCycling=array();
	
// declare Deck Manipulation arrays			
	$fireManipulation=array();
	$timeManipulation=array();
	$justiceManipulation=array();
	$primalManipulation=array();
	$shadowManipulation=array();
	$allManipulation=array();
	$noneManipulation=array();
	$monofireManipulation=array();
	$monotimeManipulation=array();
	$monojusticeManipulation=array();
	$monoprimalManipulation=array();
	$monoshadowManipulation=array();
	$argenportManipulation=array();
	$combreiManipulation=array();
	$elysianManipulation=array();
	$felnManipulation=array();
	$hooruManipulation=array();
	$praxisManipulation=array();
	$rakanoManipulation=array();
	$skycragManipulation=array();
	$stonescarManipulation=array();
	$xenanManipulation=array();
	$monofiredeckManipulation=array();
	$monotimedeckManipulation=array();
	$monojusticedeckManipulation=array();
	$monoprimaldeckManipulation=array();
	$monoshadowdeckManipulation=array();
	$argenportdeckManipulation=array();
	$combreideckManipulation=array();
	$elysiandeckManipulation=array();
	$felndeckManipulation=array();
	$hoorudeckManipulation=array();
	$praxisdeckManipulation=array();
	$rakanodeckManipulation=array();
	$skycragdeckManipulation=array();
	$stonescardeckManipulation=array();
	$xenandeckManipulation=array();
	
// declare Debuff arrays			
	$fireDebuff=array();
	$timeDebuff=array();
	$justiceDebuff=array();
	$primalDebuff=array();
	$shadowDebuff=array();
	$allDebuff=array();
	$noneDebuff=array();
	$monofireDebuff=array();
	$monotimeDebuff=array();
	$monojusticeDebuff=array();
	$monoprimalDebuff=array();
	$monoshadowDebuff=array();
	$argenportDebuff=array();
	$combreiDebuff=array();
	$elysianDebuff=array();
	$felnDebuff=array();
	$hooruDebuff=array();
	$praxisDebuff=array();
	$rakanoDebuff=array();
	$skycragDebuff=array();
	$stonescarDebuff=array();
	$xenanDebuff=array();
	$monofiredeckDebuff=array();
	$monotimedeckDebuff=array();
	$monojusticedeckDebuff=array();
	$monoprimaldeckDebuff=array();
	$monoshadowdeckDebuff=array();
	$argenportdeckDebuff=array();
	$combreideckDebuff=array();
	$elysiandeckDebuff=array();
	$felndeckDebuff=array();
	$hoorudeckDebuff=array();
	$praxisdeckDebuff=array();
	$rakanodeckDebuff=array();
	$skycragdeckDebuff=array();
	$stonescardeckDebuff=array();
	$xenandeckDebuff=array();
	
// declare Buff arrays			
	$fireBuff=array();
	$timeBuff=array();
	$justiceBuff=array();
	$primalBuff=array();
	$shadowBuff=array();
	$allBuff=array();
	$noneBuff=array();
	$monofireBuff=array();
	$monotimeBuff=array();
	$monojusticeBuff=array();
	$monoprimalBuff=array();
	$monoshadowBuff=array();
	$argenportBuff=array();
	$combreiBuff=array();
	$elysianBuff=array();
	$felnBuff=array();
	$hooruBuff=array();
	$praxisBuff=array();
	$rakanoBuff=array();
	$skycragBuff=array();
	$stonescarBuff=array();
	$xenanBuff=array();
	$monofiredeckBuff=array();
	$monotimedeckBuff=array();
	$monojusticedeckBuff=array();
	$monoprimaldeckBuff=array();
	$monoshadowdeckBuff=array();
	$argenportdeckBuff=array();
	$combreideckBuff=array();
	$elysiandeckBuff=array();
	$felndeckBuff=array();
	$hoorudeckBuff=array();
	$praxisdeckBuff=array();
	$rakanodeckBuff=array();
	$skycragdeckBuff=array();
	$stonescardeckBuff=array();
	$xenandeckBuff=array();
	
// declare Influence arrays			
	$fireInfluence=array();
	$timeInfluence=array();
	$justiceInfluence=array();
	$primalInfluence=array();
	$shadowInfluence=array();
	$allInfluence=array();
	$noneInfluence=array();
	$monofireInfluence=array();
	$monotimeInfluence=array();
	$monojusticeInfluence=array();
	$monoprimalInfluence=array();
	$monoshadowInfluence=array();
	$argenportInfluence=array();
	$combreiInfluence=array();
	$elysianInfluence=array();
	$felnInfluence=array();
	$hooruInfluence=array();
	$praxisInfluence=array();
	$rakanoInfluence=array();
	$skycragInfluence=array();
	$stonescarInfluence=array();
	$xenanInfluence=array();
	$monofiredeckInfluence=array();
	$monotimedeckInfluence=array();
	$monojusticedeckInfluence=array();
	$monoprimaldeckInfluence=array();
	$monoshadowdeckInfluence=array();
	$argenportdeckInfluence=array();
	$combreideckInfluence=array();
	$elysiandeckInfluence=array();
	$felndeckInfluence=array();
	$hoorudeckInfluence=array();
	$praxisdeckInfluence=array();
	$rakanodeckInfluence=array();
	$skycragdeckInfluence=array();
	$stonescardeckInfluence=array();
	$xenandeckInfluence=array();
	
// declare Offense arrays			
	$fireOffense=array();
	$timeOffense=array();
	$justiceOffense=array();
	$primalOffense=array();
	$shadowOffense=array();
	$allOffense=array();
	$noneOffense=array();
	$monofireOffense=array();
	$monotimeOffense=array();
	$monojusticeOffense=array();
	$monoprimalOffense=array();
	$monoshadowOffense=array();
	$argenportOffense=array();
	$combreiOffense=array();
	$elysianOffense=array();
	$felnOffense=array();
	$hooruOffense=array();
	$praxisOffense=array();
	$rakanoOffense=array();
	$skycragOffense=array();
	$stonescarOffense=array();
	$xenanOffense=array();
	$monofiredeckOffense=array();
	$monotimedeckOffense=array();
	$monojusticedeckOffense=array();
	$monoprimaldeckOffense=array();
	$monoshadowdeckOffense=array();
	$argenportdeckOffense=array();
	$combreideckOffense=array();
	$elysiandeckOffense=array();
	$felndeckOffense=array();
	$hoorudeckOffense=array();
	$praxisdeckOffense=array();
	$rakanodeckOffense=array();
	$skycragdeckOffense=array();
	$stonescardeckOffense=array();
	$xenandeckOffense=array();
	
// declare Defense arrays			
	$fireDefense=array();
	$timeDefense=array();
	$justiceDefense=array();
	$primalDefense=array();
	$shadowDefense=array();
	$allDefense=array();
	$noneDefense=array();
	$monofireDefense=array();
	$monotimeDefense=array();
	$monojusticeDefense=array();
	$monoprimalDefense=array();
	$monoshadowDefense=array();
	$argenportDefense=array();
	$combreiDefense=array();
	$elysianDefense=array();
	$felnDefense=array();
	$hooruDefense=array();
	$praxisDefense=array();
	$rakanoDefense=array();
	$skycragDefense=array();
	$stonescarDefense=array();
	$xenanDefense=array();
	$monofiredeckDefense=array();
	$monotimedeckDefense=array();
	$monojusticedeckDefense=array();
	$monoprimaldeckDefense=array();
	$monoshadowdeckDefense=array();
	$argenportdeckDefense=array();
	$combreideckDefense=array();
	$elysiandeckDefense=array();
	$felndeckDefense=array();
	$hoorudeckDefense=array();
	$praxisdeckDefense=array();
	$rakanodeckDefense=array();
	$skycragdeckDefense=array();
	$stonescardeckDefense=array();
	$xenandeckDefense=array();

// push query results into arrays
	while($fireRow = mysqli_fetch_array($fireResult)){
			array_push($powerArray, array("label" => $fireRow["1"]));
			array_push($fireTotalCards, array("value" => $fireRow["3"]));
			array_push($fireUnits, array("value" => $fireRow["4"]));
			array_push($fireSpells, array("value" => $fireRow["5"]));
			array_push($fireAttachments, array("value" => $fireRow["6"]));
			array_push($fireWeapons, array("value" => $fireRow["7"]));
			array_push($fireRelicWeapons, array("value" => $fireRow["8"]));
			array_push($fireRelics, array("value" => $fireRow["9"]));
			array_push($fireCursedRelics, array("value" => $fireRow["10"]));
			array_push($fireCurses, array("value" => $fireRow["11"]));
			array_push($fireRemoval, array("value" => $fireRow["12"]));
			array_push($fireReactive, array("value" => $fireRow["13"]));
			array_push($fireCardCycling, array("value" => $fireRow["14"]));
			array_push($fireManipulation, array("value" => $fireRow["15"]));
			array_push($fireDebuff, array("value" => $fireRow["16"]));
			array_push($fireBuff, array("value" => $fireRow["17"]));
			array_push($fireInfluence, array("value" => $fireRow["18"]));
			array_push($fireOffense, array("value" => $fireRow["19"]));
			array_push($fireDefense, array("value" => $fireRow["20"]));
	}
	
	while($timeRow = mysqli_fetch_array($timeResult)){
			array_push($timeTotalCards, array("value" => $timeRow["3"]));
			array_push($timeUnits, array("value" => $timeRow["4"]));
			array_push($timeSpells, array("value" => $timeRow["5"]));
			array_push($timeAttachments, array("value" => $timeRow["6"]));
			array_push($timeWeapons, array("value" => $timeRow["7"]));
			array_push($timeRelicWeapons, array("value" => $timeRow["8"]));
			array_push($timeRelics, array("value" => $timeRow["9"]));
			array_push($timeCursedRelics, array("value" => $timeRow["10"]));
			array_push($timeCurses, array("value" => $timeRow["11"]));
			array_push($timeRemoval, array("value" => $timeRow["12"]));
			array_push($timeReactive, array("value" => $timeRow["13"]));
			array_push($timeCardCycling, array("value" => $timeRow["14"]));
			array_push($timeManipulation, array("value" => $timeRow["15"]));
			array_push($timeDebuff, array("value" => $timeRow["16"]));
			array_push($timeBuff, array("value" => $timeRow["17"]));
			array_push($timeInfluence, array("value" => $timeRow["18"]));
			array_push($timeOffense, array("value" => $timeRow["19"]));
			array_push($timeDefense, array("value" => $timeRow["20"]));
	}

	while($justiceRow = mysqli_fetch_array($justiceResult)){
			array_push($justiceTotalCards, array("value" => $justiceRow["3"]));
			array_push($justiceUnits, array("value" => $justiceRow["4"]));
			array_push($justiceSpells, array("value" => $justiceRow["5"]));
			array_push($justiceAttachments, array("value" => $justiceRow["6"]));
			array_push($justiceWeapons, array("value" => $justiceRow["7"]));
			array_push($justiceRelicWeapons, array("value" => $justiceRow["8"]));
			array_push($justiceRelics, array("value" => $justiceRow["9"]));
			array_push($justiceCursedRelics, array("value" => $justiceRow["10"]));
			array_push($justiceCurses, array("value" => $justiceRow["11"]));
			array_push($justiceRemoval, array("value" => $justiceRow["12"]));
			array_push($justiceReactive, array("value" => $justiceRow["13"]));
			array_push($justiceCardCycling, array("value" => $justiceRow["14"]));
			array_push($justiceManipulation, array("value" => $justiceRow["15"]));
			array_push($justiceDebuff, array("value" => $justiceRow["16"]));
			array_push($justiceBuff, array("value" => $justiceRow["17"]));
			array_push($justiceInfluence, array("value" => $justiceRow["18"]));
			array_push($justiceOffense, array("value" => $justiceRow["19"]));
			array_push($justiceDefense, array("value" => $justiceRow["20"]));
	}
	
	while($primalRow = mysqli_fetch_array($primalResult)){
			array_push($primalTotalCards, array("value" => $primalRow["3"]));
			array_push($primalUnits, array("value" => $primalRow["4"]));
			array_push($primalSpells, array("value" => $primalRow["5"]));
			array_push($primalAttachments, array("value" => $primalRow["6"]));
			array_push($primalWeapons, array("value" => $primalRow["7"]));
			array_push($primalRelicWeapons, array("value" => $primalRow["8"]));
			array_push($primalRelics, array("value" => $primalRow["9"]));
			array_push($primalCursedRelics, array("value" => $primalRow["10"]));
			array_push($primalCurses, array("value" => $primalRow["11"]));
			array_push($primalRemoval, array("value" => $primalRow["12"]));
			array_push($primalReactive, array("value" => $primalRow["13"]));
			array_push($primalCardCycling, array("value" => $primalRow["14"]));
			array_push($primalManipulation, array("value" => $primalRow["15"]));
			array_push($primalDebuff, array("value" => $primalRow["16"]));
			array_push($primalBuff, array("value" => $primalRow["17"]));
			array_push($primalInfluence, array("value" => $primalRow["18"]));
			array_push($primalOffense, array("value" => $primalRow["19"]));
			array_push($primalDefense, array("value" => $primalRow["20"]));
	}
	
	while($shadowRow = mysqli_fetch_array($shadowResult)){
			array_push($shadowTotalCards, array("value" => $shadowRow["3"]));
			array_push($shadowUnits, array("value" => $shadowRow["4"]));
			array_push($shadowSpells, array("value" => $shadowRow["5"]));
			array_push($shadowAttachments, array("value" => $shadowRow["6"]));
			array_push($shadowWeapons, array("value" => $shadowRow["7"]));
			array_push($shadowRelicWeapons, array("value" => $shadowRow["8"]));
			array_push($shadowRelics, array("value" => $shadowRow["9"]));
			array_push($shadowCursedRelics, array("value" => $shadowRow["10"]));
			array_push($shadowCurses, array("value" => $shadowRow["11"]));
			array_push($shadowRemoval, array("value" => $shadowRow["12"]));
			array_push($shadowReactive, array("value" => $shadowRow["13"]));
			array_push($shadowCardCycling, array("value" => $shadowRow["14"]));
			array_push($shadowManipulation, array("value" => $shadowRow["15"]));
			array_push($shadowDebuff, array("value" => $shadowRow["16"]));
			array_push($shadowBuff, array("value" => $shadowRow["17"]));
			array_push($shadowInfluence, array("value" => $shadowRow["18"]));
			array_push($shadowOffense, array("value" => $shadowRow["19"]));
			array_push($shadowDefense, array("value" => $shadowRow["20"]));
	}
	
	
	while($allRow = mysqli_fetch_array($allResult)){
			array_push($allTotalCards, array("value" => $allRow["3"]));
			array_push($allUnits, array("value" => $allRow["4"]));
			array_push($allSpells, array("value" => $allRow["5"]));
			array_push($allAttachments, array("value" => $allRow["6"]));
			array_push($allWeapons, array("value" => $allRow["7"]));
			array_push($allRelicWeapons, array("value" => $allRow["8"]));
			array_push($allRelics, array("value" => $allRow["9"]));
			array_push($allCursedRelics, array("value" => $allRow["10"]));
			array_push($allCurses, array("value" => $allRow["11"]));
			array_push($allRemoval, array("value" => $allRow["12"]));
			array_push($allReactive, array("value" => $allRow["13"]));
			array_push($allCardCycling, array("value" => $allRow["14"]));
			array_push($allManipulation, array("value" => $allRow["15"]));
			array_push($allDebuff, array("value" => $allRow["16"]));
			array_push($allBuff, array("value" => $allRow["17"]));
			array_push($allInfluence, array("value" => $allRow["18"]));
			array_push($allOffense, array("value" => $allRow["19"]));
			array_push($allDefense, array("value" => $allRow["20"]));
	}
	
	while($noneRow = mysqli_fetch_array($noneResult)){
			array_push($noneTotalCards, array("value" => $noneRow["3"]));
			array_push($noneUnits, array("value" => $noneRow["4"]));
			array_push($noneSpells, array("value" => $noneRow["5"]));
			array_push($noneAttachments, array("value" => $noneRow["6"]));
			array_push($noneWeapons, array("value" => $noneRow["7"]));
			array_push($noneRelicWeapons, array("value" => $noneRow["8"]));
			array_push($noneRelics, array("value" => $noneRow["9"]));
			array_push($noneCursedRelics, array("value" => $noneRow["10"]));
			array_push($noneCurses, array("value" => $noneRow["11"]));
			array_push($noneRemoval, array("value" => $noneRow["12"]));
			array_push($noneReactive, array("value" => $noneRow["13"]));
			array_push($noneCardCycling, array("value" => $noneRow["14"]));
			array_push($noneManipulation, array("value" => $noneRow["15"]));
			array_push($noneDebuff, array("value" => $noneRow["16"]));
			array_push($noneBuff, array("value" => $noneRow["17"]));
			array_push($noneInfluence, array("value" => $noneRow["18"]));
			array_push($noneOffense, array("value" => $noneRow["19"]));
			array_push($noneDefense, array("value" => $noneRow["20"]));
	}
	
while($monofireRow = mysqli_fetch_array($monofireResult)){
			array_push($monofireTotalCards, array("value" => $monofireRow["3"]));
			array_push($monofireUnits, array("value" => $monofireRow["4"]));
			array_push($monofireSpells, array("value" => $monofireRow["5"]));
			array_push($monofireAttachments, array("value" => $monofireRow["6"]));
			array_push($monofireWeapons, array("value" => $monofireRow["7"]));
			array_push($monofireRelicWeapons, array("value" => $monofireRow["8"]));
			array_push($monofireRelics, array("value" => $monofireRow["9"]));
			array_push($monofireCursedRelics, array("value" => $monofireRow["10"]));
			array_push($monofireCurses, array("value" => $monofireRow["11"]));
			array_push($monofireRemoval, array("value" => $monofireRow["12"]));
			array_push($monofireReactive, array("value" => $monofireRow["13"]));
			array_push($monofireCardCycling, array("value" => $monofireRow["14"]));
			array_push($monofireManipulation, array("value" => $monofireRow["15"]));
			array_push($monofireDebuff, array("value" => $monofireRow["16"]));
			array_push($monofireBuff, array("value" => $monofireRow["17"]));
			array_push($monofireInfluence, array("value" => $monofireRow["18"]));
			array_push($monofireOffense, array("value" => $monofireRow["19"]));
			array_push($monofireDefense, array("value" => $monofireRow["20"]));
	}
	
	while($monotimeRow = mysqli_fetch_array($monotimeResult)){
			array_push($monotimeTotalCards, array("value" => $monotimeRow["3"]));
			array_push($monotimeUnits, array("value" => $monotimeRow["4"]));
			array_push($monotimeSpells, array("value" => $monotimeRow["5"]));
			array_push($monotimeAttachments, array("value" => $monotimeRow["6"]));
			array_push($monotimeWeapons, array("value" => $monotimeRow["7"]));
			array_push($monotimeRelicWeapons, array("value" => $monotimeRow["8"]));
			array_push($monotimeRelics, array("value" => $monotimeRow["9"]));
			array_push($monotimeCursedRelics, array("value" => $monotimeRow["10"]));
			array_push($monotimeCurses, array("value" => $monotimeRow["11"]));
			array_push($monotimeRemoval, array("value" => $monotimeRow["12"]));
			array_push($monotimeReactive, array("value" => $monotimeRow["13"]));
			array_push($monotimeCardCycling, array("value" => $monotimeRow["14"]));
			array_push($monotimeManipulation, array("value" => $monotimeRow["15"]));
			array_push($monotimeDebuff, array("value" => $monotimeRow["16"]));
			array_push($monotimeBuff, array("value" => $monotimeRow["17"]));
			array_push($monotimeInfluence, array("value" => $monotimeRow["18"]));
			array_push($monotimeOffense, array("value" => $monotimeRow["19"]));
			array_push($monotimeDefense, array("value" => $monotimeRow["20"]));
	}
	
	while($monojusticeRow = mysqli_fetch_array($monojusticeResult)){
			array_push($monojusticeTotalCards, array("value" => $monojusticeRow["3"]));
			array_push($monojusticeUnits, array("value" => $monojusticeRow["4"]));
			array_push($monojusticeSpells, array("value" => $monojusticeRow["5"]));
			array_push($monojusticeAttachments, array("value" => $monojusticeRow["6"]));
			array_push($monojusticeWeapons, array("value" => $monojusticeRow["7"]));
			array_push($monojusticeRelicWeapons, array("value" => $monojusticeRow["8"]));
			array_push($monojusticeRelics, array("value" => $monojusticeRow["9"]));
			array_push($monojusticeCursedRelics, array("value" => $monojusticeRow["10"]));
			array_push($monojusticeCurses, array("value" => $monojusticeRow["11"]));
			array_push($monojusticeRemoval, array("value" => $monojusticeRow["12"]));
			array_push($monojusticeReactive, array("value" => $monojusticeRow["13"]));
			array_push($monojusticeCardCycling, array("value" => $monojusticeRow["14"]));
			array_push($monojusticeManipulation, array("value" => $monojusticeRow["15"]));
			array_push($monojusticeDebuff, array("value" => $monojusticeRow["16"]));
			array_push($monojusticeBuff, array("value" => $monojusticeRow["17"]));
			array_push($monojusticeInfluence, array("value" => $monojusticeRow["18"]));
			array_push($monojusticeOffense, array("value" => $monojusticeRow["19"]));
			array_push($monojusticeDefense, array("value" => $monojusticeRow["20"]));
	}
	
	while($monoprimalRow = mysqli_fetch_array($monoprimalResult)){
			array_push($monoprimalTotalCards, array("value" => $monoprimalRow["3"]));
			array_push($monoprimalUnits, array("value" => $monoprimalRow["4"]));
			array_push($monoprimalSpells, array("value" => $monoprimalRow["5"]));
			array_push($monoprimalAttachments, array("value" => $monoprimalRow["6"]));
			array_push($monoprimalWeapons, array("value" => $monoprimalRow["7"]));
			array_push($monoprimalRelicWeapons, array("value" => $monoprimalRow["8"]));
			array_push($monoprimalRelics, array("value" => $monoprimalRow["9"]));
			array_push($monoprimalCursedRelics, array("value" => $monoprimalRow["10"]));
			array_push($monoprimalCurses, array("value" => $monoprimalRow["11"]));
			array_push($monoprimalRemoval, array("value" => $monoprimalRow["12"]));
			array_push($monoprimalReactive, array("value" => $monoprimalRow["13"]));
			array_push($monoprimalCardCycling, array("value" => $monoprimalRow["14"]));
			array_push($monoprimalManipulation, array("value" => $monoprimalRow["15"]));
			array_push($monoprimalDebuff, array("value" => $monoprimalRow["16"]));
			array_push($monoprimalBuff, array("value" => $monoprimalRow["17"]));
			array_push($monoprimalInfluence, array("value" => $monoprimalRow["18"]));
			array_push($monoprimalOffense, array("value" => $monoprimalRow["19"]));
			array_push($monoprimalDefense, array("value" => $monoprimalRow["20"]));
	}
	
	while($monoshadowRow = mysqli_fetch_array($monoshadowResult)){
			array_push($monoshadowTotalCards, array("value" => $monoshadowRow["3"]));
			array_push($monoshadowUnits, array("value" => $monoshadowRow["4"]));
			array_push($monoshadowSpells, array("value" => $monoshadowRow["5"]));
			array_push($monoshadowAttachments, array("value" => $monoshadowRow["6"]));
			array_push($monoshadowWeapons, array("value" => $monoshadowRow["7"]));
			array_push($monoshadowRelicWeapons, array("value" => $monoshadowRow["8"]));
			array_push($monoshadowRelics, array("value" => $monoshadowRow["9"]));
			array_push($monoshadowCursedRelics, array("value" => $monoshadowRow["10"]));
			array_push($monoshadowCurses, array("value" => $monoshadowRow["11"]));
			array_push($monoshadowRemoval, array("value" => $monoshadowRow["12"]));
			array_push($monoshadowReactive, array("value" => $monoshadowRow["13"]));
			array_push($monoshadowCardCycling, array("value" => $monoshadowRow["14"]));
			array_push($monoshadowManipulation, array("value" => $monoshadowRow["15"]));
			array_push($monoshadowDebuff, array("value" => $monoshadowRow["16"]));
			array_push($monoshadowBuff, array("value" => $monoshadowRow["17"]));
			array_push($monoshadowInfluence, array("value" => $monoshadowRow["18"]));
			array_push($monoshadowOffense, array("value" => $monoshadowRow["19"]));
			array_push($monoshadowDefense, array("value" => $monoshadowRow["20"]));
	}

	while($argenportRow = mysqli_fetch_array($argenportResult)){
			array_push($argenportTotalCards, array("value" => $argenportRow["3"]));
			array_push($argenportUnits, array("value" => $argenportRow["4"]));
			array_push($argenportSpells, array("value" => $argenportRow["5"]));
			array_push($argenportAttachments, array("value" => $argenportRow["6"]));
			array_push($argenportWeapons, array("value" => $argenportRow["7"]));
			array_push($argenportRelicWeapons, array("value" => $argenportRow["8"]));
			array_push($argenportRelics, array("value" => $argenportRow["9"]));
			array_push($argenportCursedRelics, array("value" => $argenportRow["10"]));
			array_push($argenportCurses, array("value" => $argenportRow["11"]));
			array_push($argenportRemoval, array("value" => $argenportRow["12"]));
			array_push($argenportReactive, array("value" => $argenportRow["13"]));
			array_push($argenportCardCycling, array("value" => $argenportRow["14"]));
			array_push($argenportManipulation, array("value" => $argenportRow["15"]));
			array_push($argenportDebuff, array("value" => $argenportRow["16"]));
			array_push($argenportBuff, array("value" => $argenportRow["17"]));
			array_push($argenportInfluence, array("value" => $argenportRow["18"]));
			array_push($argenportOffense, array("value" => $argenportRow["19"]));
			array_push($argenportDefense, array("value" => $argenportRow["20"]));
	}
	
	while($combreiRow = mysqli_fetch_array($combreiResult)){
			array_push($combreiTotalCards, array("value" => $combreiRow["3"]));
			array_push($combreiUnits, array("value" => $combreiRow["4"]));
			array_push($combreiSpells, array("value" => $combreiRow["5"]));
			array_push($combreiAttachments, array("value" => $combreiRow["6"]));
			array_push($combreiWeapons, array("value" => $combreiRow["7"]));
			array_push($combreiRelicWeapons, array("value" => $combreiRow["8"]));
			array_push($combreiRelics, array("value" => $combreiRow["9"]));
			array_push($combreiCursedRelics, array("value" => $combreiRow["10"]));
			array_push($combreiCurses, array("value" => $combreiRow["11"]));
			array_push($combreiRemoval, array("value" => $combreiRow["12"]));
			array_push($combreiReactive, array("value" => $combreiRow["13"]));
			array_push($combreiCardCycling, array("value" => $combreiRow["14"]));
			array_push($combreiManipulation, array("value" => $combreiRow["15"]));
			array_push($combreiDebuff, array("value" => $combreiRow["16"]));
			array_push($combreiBuff, array("value" => $combreiRow["17"]));
			array_push($combreiInfluence, array("value" => $combreiRow["18"]));
			array_push($combreiOffense, array("value" => $combreiRow["19"]));
			array_push($combreiDefense, array("value" => $combreiRow["20"]));
	}
	
	while($elysianRow = mysqli_fetch_array($elysianResult)){
			array_push($elysianTotalCards, array("value" => $elysianRow["3"]));
			array_push($elysianUnits, array("value" => $elysianRow["4"]));
			array_push($elysianSpells, array("value" => $elysianRow["5"]));
			array_push($elysianAttachments, array("value" => $elysianRow["6"]));
			array_push($elysianWeapons, array("value" => $elysianRow["7"]));
			array_push($elysianRelicWeapons, array("value" => $elysianRow["8"]));
			array_push($elysianRelics, array("value" => $elysianRow["9"]));
			array_push($elysianCursedRelics, array("value" => $elysianRow["10"]));
			array_push($elysianCurses, array("value" => $elysianRow["11"]));
			array_push($elysianRemoval, array("value" => $elysianRow["12"]));
			array_push($elysianReactive, array("value" => $elysianRow["13"]));
			array_push($elysianCardCycling, array("value" => $elysianRow["14"]));
			array_push($elysianManipulation, array("value" => $elysianRow["15"]));
			array_push($elysianDebuff, array("value" => $elysianRow["16"]));
			array_push($elysianBuff, array("value" => $elysianRow["17"]));
			array_push($elysianInfluence, array("value" => $elysianRow["18"]));
			array_push($elysianOffense, array("value" => $elysianRow["19"]));
			array_push($elysianDefense, array("value" => $elysianRow["20"]));
	}
	
	while($felnRow = mysqli_fetch_array($felnResult)){
			array_push($felnTotalCards, array("value" => $felnRow["3"]));
			array_push($felnUnits, array("value" => $felnRow["4"]));
			array_push($felnSpells, array("value" => $felnRow["5"]));
			array_push($felnAttachments, array("value" => $felnRow["6"]));
			array_push($felnWeapons, array("value" => $felnRow["7"]));
			array_push($felnRelicWeapons, array("value" => $felnRow["8"]));
			array_push($felnRelics, array("value" => $felnRow["9"]));
			array_push($felnCursedRelics, array("value" => $felnRow["10"]));
			array_push($felnCurses, array("value" => $felnRow["11"]));
			array_push($felnRemoval, array("value" => $felnRow["12"]));
			array_push($felnReactive, array("value" => $felnRow["13"]));
			array_push($felnCardCycling, array("value" => $felnRow["14"]));
			array_push($felnManipulation, array("value" => $felnRow["15"]));
			array_push($felnDebuff, array("value" => $felnRow["16"]));
			array_push($felnBuff, array("value" => $felnRow["17"]));
			array_push($felnInfluence, array("value" => $felnRow["18"]));
			array_push($felnOffense, array("value" => $felnRow["19"]));
			array_push($felnDefense, array("value" => $felnRow["20"]));
	}
	
	while($hooruRow = mysqli_fetch_array($hooruResult)){
			array_push($hooruTotalCards, array("value" => $hooruRow["3"]));
			array_push($hooruUnits, array("value" => $hooruRow["4"]));
			array_push($hooruSpells, array("value" => $hooruRow["5"]));
			array_push($hooruAttachments, array("value" => $hooruRow["6"]));
			array_push($hooruWeapons, array("value" => $hooruRow["7"]));
			array_push($hooruRelicWeapons, array("value" => $hooruRow["8"]));
			array_push($hooruRelics, array("value" => $hooruRow["9"]));
			array_push($hooruCursedRelics, array("value" => $hooruRow["10"]));
			array_push($hooruCurses, array("value" => $hooruRow["11"]));
			array_push($hooruRemoval, array("value" => $hooruRow["12"]));
			array_push($hooruReactive, array("value" => $hooruRow["13"]));
			array_push($hooruCardCycling, array("value" => $hooruRow["14"]));
			array_push($hooruManipulation, array("value" => $hooruRow["15"]));
			array_push($hooruDebuff, array("value" => $hooruRow["16"]));
			array_push($hooruBuff, array("value" => $hooruRow["17"]));
			array_push($hooruInfluence, array("value" => $hooruRow["18"]));
			array_push($hooruOffense, array("value" => $hooruRow["19"]));
			array_push($hooruDefense, array("value" => $hooruRow["20"]));
	}
	
	while($praxisRow = mysqli_fetch_array($praxisResult)){
			array_push($praxisTotalCards, array("value" => $praxisRow["3"]));
			array_push($praxisUnits, array("value" => $praxisRow["4"]));
			array_push($praxisSpells, array("value" => $praxisRow["5"]));
			array_push($praxisAttachments, array("value" => $praxisRow["6"]));
			array_push($praxisWeapons, array("value" => $praxisRow["7"]));
			array_push($praxisRelicWeapons, array("value" => $praxisRow["8"]));
			array_push($praxisRelics, array("value" => $praxisRow["9"]));
			array_push($praxisCursedRelics, array("value" => $praxisRow["10"]));
			array_push($praxisCurses, array("value" => $praxisRow["11"]));
			array_push($praxisRemoval, array("value" => $praxisRow["12"]));
			array_push($praxisReactive, array("value" => $praxisRow["13"]));
			array_push($praxisCardCycling, array("value" => $praxisRow["14"]));
			array_push($praxisManipulation, array("value" => $praxisRow["15"]));
			array_push($praxisDebuff, array("value" => $praxisRow["16"]));
			array_push($praxisBuff, array("value" => $praxisRow["17"]));
			array_push($praxisInfluence, array("value" => $praxisRow["18"]));
			array_push($monoprimalOffense, array("value" => $monoprimalRow["19"]));
			array_push($monoprimalDefense, array("value" => $monoprimalRow["20"]));
	}
	
	while($rakanoRow = mysqli_fetch_array($rakanoResult)){
			array_push($rakanoTotalCards, array("value" => $rakanoRow["3"]));
			array_push($rakanoUnits, array("value" => $rakanoRow["4"]));
			array_push($rakanoSpells, array("value" => $rakanoRow["5"]));
			array_push($rakanoAttachments, array("value" => $rakanoRow["6"]));
			array_push($rakanoWeapons, array("value" => $rakanoRow["7"]));
			array_push($rakanoRelicWeapons, array("value" => $rakanoRow["8"]));
			array_push($rakanoRelics, array("value" => $rakanoRow["9"]));
			array_push($rakanoCursedRelics, array("value" => $rakanoRow["10"]));
			array_push($rakanoCurses, array("value" => $rakanoRow["11"]));
			array_push($rakanoRemoval, array("value" => $rakanoRow["12"]));
			array_push($rakanoReactive, array("value" => $rakanoRow["13"]));
			array_push($rakanoCardCycling, array("value" => $rakanoRow["14"]));
			array_push($rakanoManipulation, array("value" => $rakanoRow["15"]));
			array_push($rakanoDebuff, array("value" => $rakanoRow["16"]));
			array_push($rakanoBuff, array("value" => $rakanoRow["17"]));
			array_push($rakanoInfluence, array("value" => $rakanoRow["18"]));
			array_push($rakanoOffense, array("value" => $rakanoRow["19"]));
			array_push($rakanoDefense, array("value" => $rakanoRow["20"]));
	}
	
	while($skycragRow = mysqli_fetch_array($skycragResult)){
			array_push($skycragTotalCards, array("value" => $skycragRow["3"]));
			array_push($skycragUnits, array("value" => $skycragRow["4"]));
			array_push($skycragSpells, array("value" => $skycragRow["5"]));
			array_push($skycragAttachments, array("value" => $skycragRow["6"]));
			array_push($skycragWeapons, array("value" => $skycragRow["7"]));
			array_push($skycragRelicWeapons, array("value" => $skycragRow["8"]));
			array_push($skycragRelics, array("value" => $skycragRow["9"]));
			array_push($skycragCursedRelics, array("value" => $skycragRow["10"]));
			array_push($skycragCurses, array("value" => $skycragRow["11"]));
			array_push($skycragRemoval, array("value" => $skycragRow["12"]));
			array_push($skycragReactive, array("value" => $skycragRow["13"]));
			array_push($skycragCardCycling, array("value" => $skycragRow["14"]));
			array_push($skycragManipulation, array("value" => $skycragRow["15"]));
			array_push($skycragDebuff, array("value" => $skycragRow["16"]));
			array_push($skycragBuff, array("value" => $skycragRow["17"]));
			array_push($skycragInfluence, array("value" => $skycragRow["18"]));
			array_push($skycragOffense, array("value" => $skycragRow["19"]));
			array_push($skycragDefense, array("value" => $skycragRow["20"]));
	}
	
	while($stonescarRow = mysqli_fetch_array($stonescarResult)){
			array_push($stonescarTotalCards, array("value" => $stonescarRow["3"]));
			array_push($stonescarUnits, array("value" => $stonescarRow["4"]));
			array_push($stonescarSpells, array("value" => $stonescarRow["5"]));
			array_push($stonescarAttachments, array("value" => $stonescarRow["6"]));
			array_push($stonescarWeapons, array("value" => $stonescarRow["7"]));
			array_push($stonescarRelicWeapons, array("value" => $stonescarRow["8"]));
			array_push($stonescarRelics, array("value" => $stonescarRow["9"]));
			array_push($stonescarCursedRelics, array("value" => $stonescarRow["10"]));
			array_push($stonescarCurses, array("value" => $stonescarRow["11"]));
			array_push($stonescarRemoval, array("value" => $stonescarRow["12"]));
			array_push($stonescarReactive, array("value" => $stonescarRow["13"]));
			array_push($stonescarCardCycling, array("value" => $stonescarRow["14"]));
			array_push($stonescarManipulation, array("value" => $stonescarRow["15"]));
			array_push($stonescarDebuff, array("value" => $stonescarRow["16"]));
			array_push($stonescarBuff, array("value" => $stonescarRow["17"]));
			array_push($stonescarInfluence, array("value" => $stonescarRow["18"]));
			array_push($stonescarOffense, array("value" => $stonescarRow["19"]));
			array_push($stonescarDefense, array("value" => $stonescarRow["20"]));
	}
	
	while($xenanRow = mysqli_fetch_array($xenanResult)){
			array_push($xenanTotalCards, array("value" => $xenanRow["3"]));
			array_push($xenanUnits, array("value" => $xenanRow["4"]));
			array_push($xenanSpells, array("value" => $xenanRow["5"]));
			array_push($xenanAttachments, array("value" => $xenanRow["6"]));
			array_push($xenanWeapons, array("value" => $xenanRow["7"]));
			array_push($xenanRelicWeapons, array("value" => $xenanRow["8"]));
			array_push($xenanRelics, array("value" => $xenanRow["9"]));
			array_push($xenanCursedRelics, array("value" => $xenanRow["10"]));
			array_push($xenanCurses, array("value" => $xenanRow["11"]));
			array_push($xenanRemoval, array("value" => $xenanRow["12"]));
			array_push($xenanReactive, array("value" => $xenanRow["13"]));
			array_push($xenanCardCycling, array("value" => $xenanRow["14"]));
			array_push($xenanManipulation, array("value" => $xenanRow["15"]));
			array_push($xenanDebuff, array("value" => $xenanRow["16"]));
			array_push($xenanBuff, array("value" => $xenanRow["17"]));
			array_push($xenanInfluence, array("value" => $xenanRow["18"]));
			array_push($xenanOffense, array("value" => $xenanRow["19"]));
			array_push($xenanDefense, array("value" => $xenanRow["20"]));
	}
	
	while($monofiredeckRow = mysqli_fetch_array($monofiredeckResult)){
			array_push($monofiredeckTotalCards, array("value" => $monofiredeckRow["3"]));
			array_push($monofiredeckUnits, array("value" => $monofiredeckRow["4"]));
			array_push($monofiredeckSpells, array("value" => $monofiredeckRow["5"]));
			array_push($monofiredeckAttachments, array("value" => $monofiredeckRow["6"]));
			array_push($monofiredeckWeapons, array("value" => $monofiredeckRow["7"]));
			array_push($monofiredeckRelicWeapons, array("value" => $monofiredeckRow["8"]));
			array_push($monofiredeckRelics, array("value" => $monofiredeckRow["9"]));
			array_push($monofiredeckCursedRelics, array("value" => $monofiredeckRow["10"]));
			array_push($monofiredeckCurses, array("value" => $monofiredeckRow["11"]));
			array_push($monofiredeckRemoval, array("value" => $monofiredeckRow["12"]));
			array_push($monofiredeckReactive, array("value" => $monofiredeckRow["13"]));
			array_push($monofiredeckCardCycling, array("value" => $monofiredeckRow["14"]));
			array_push($monofiredeckManipulation, array("value" => $monofiredeckRow["15"]));
			array_push($monofiredeckDebuff, array("value" => $monofiredeckRow["16"]));
			array_push($monofiredeckBuff, array("value" => $monofiredeckRow["17"]));
			array_push($monofiredeckInfluence, array("value" => $monofiredeckRow["18"]));
			array_push($monofiredeckOffense, array("value" => $monofiredeckRow["19"]));
			array_push($monofiredeckDefense, array("value" => $monofiredeckRow["20"]));
	}
	
	while($monotimedeckRow = mysqli_fetch_array($monotimedeckResult)){
			array_push($monotimedeckTotalCards, array("value" => $monotimedeckRow["3"]));
			array_push($monotimedeckUnits, array("value" => $monotimedeckRow["4"]));
			array_push($monotimedeckSpells, array("value" => $monotimedeckRow["5"]));
			array_push($monotimedeckAttachments, array("value" => $monotimedeckRow["6"]));
			array_push($monotimedeckWeapons, array("value" => $monotimedeckRow["7"]));
			array_push($monotimedeckRelicWeapons, array("value" => $monotimedeckRow["8"]));
			array_push($monotimedeckRelics, array("value" => $monotimedeckRow["9"]));
			array_push($monotimedeckCursedRelics, array("value" => $monotimedeckRow["10"]));
			array_push($monotimedeckCurses, array("value" => $monotimedeckRow["11"]));
			array_push($monotimedeckRemoval, array("value" => $monotimedeckRow["12"]));
			array_push($monotimedeckReactive, array("value" => $monotimedeckRow["13"]));
			array_push($monotimedeckCardCycling, array("value" => $monotimedeckRow["14"]));
			array_push($monotimedeckManipulation, array("value" => $monotimedeckRow["15"]));
			array_push($monotimedeckDebuff, array("value" => $monotimedeckRow["16"]));
			array_push($monotimedeckBuff, array("value" => $monotimedeckRow["17"]));
			array_push($monotimedeckInfluence, array("value" => $monotimedeckRow["18"]));
			array_push($monotimedeckOffense, array("value" => $monotimedeckRow["19"]));
			array_push($monotimedeckDefense, array("value" => $monotimedeckRow["20"]));
	}
	
	while($monojusticedeckRow = mysqli_fetch_array($monojusticedeckResult)){
			array_push($monojusticedeckTotalCards, array("value" => $monojusticedeckRow["3"]));
			array_push($monojusticedeckUnits, array("value" => $monojusticedeckRow["4"]));
			array_push($monojusticedeckSpells, array("value" => $monojusticedeckRow["5"]));
			array_push($monojusticedeckAttachments, array("value" => $monojusticedeckRow["6"]));
			array_push($monojusticedeckWeapons, array("value" => $monojusticedeckRow["7"]));
			array_push($monojusticedeckRelicWeapons, array("value" => $monojusticedeckRow["8"]));
			array_push($monojusticedeckRelics, array("value" => $monojusticedeckRow["9"]));
			array_push($monojusticedeckCursedRelics, array("value" => $monojusticedeckRow["10"]));
			array_push($monojusticedeckCurses, array("value" => $monojusticedeckRow["11"]));
			array_push($monojusticedeckRemoval, array("value" => $monojusticedeckRow["12"]));
			array_push($monojusticedeckReactive, array("value" => $monojusticedeckRow["13"]));
			array_push($monojusticedeckCardCycling, array("value" => $monojusticedeckRow["14"]));
			array_push($monojusticedeckManipulation, array("value" => $monojusticedeckRow["15"]));
			array_push($monojusticedeckDebuff, array("value" => $monojusticedeckRow["16"]));
			array_push($monojusticedeckBuff, array("value" => $monojusticedeckRow["17"]));
			array_push($monojusticedeckInfluence, array("value" => $monojusticedeckRow["18"]));
			array_push($monojusticedeckOffense, array("value" => $monojusticedeckRow["19"]));
			array_push($monojusticedeckDefense, array("value" => $monojusticedeckRow["20"]));
	}
	
	while($monoprimaldeckRow = mysqli_fetch_array($monoprimaldeckResult)){
			array_push($monoprimaldeckTotalCards, array("value" => $monoprimaldeckRow["3"]));
			array_push($monoprimaldeckUnits, array("value" => $monoprimaldeckRow["4"]));
			array_push($monoprimaldeckSpells, array("value" => $monoprimaldeckRow["5"]));
			array_push($monoprimaldeckAttachments, array("value" => $monoprimaldeckRow["6"]));
			array_push($monoprimaldeckWeapons, array("value" => $monoprimaldeckRow["7"]));
			array_push($monoprimaldeckRelicWeapons, array("value" => $monoprimaldeckRow["8"]));
			array_push($monoprimaldeckRelics, array("value" => $monoprimaldeckRow["9"]));
			array_push($monoprimaldeckCursedRelics, array("value" => $monoprimaldeckRow["10"]));
			array_push($monoprimaldeckCurses, array("value" => $monoprimaldeckRow["11"]));
			array_push($monoprimaldeckRemoval, array("value" => $monoprimaldeckRow["12"]));
			array_push($monoprimaldeckReactive, array("value" => $monoprimaldeckRow["13"]));
			array_push($monoprimaldeckCardCycling, array("value" => $monoprimaldeckRow["14"]));
			array_push($monoprimaldeckManipulation, array("value" => $monoprimaldeckRow["15"]));
			array_push($monoprimaldeckDebuff, array("value" => $monoprimaldeckRow["16"]));
			array_push($monoprimaldeckBuff, array("value" => $monoprimaldeckRow["17"]));
			array_push($monoprimaldeckInfluence, array("value" => $monoprimaldeckRow["18"]));
			array_push($monoprimaldeckOffense, array("value" => $monoprimaldeckRow["19"]));
			array_push($monoprimaldeckDefense, array("value" => $monoprimaldeckRow["20"]));
	}
	
	while($monoshadowdeckRow = mysqli_fetch_array($monoshadowdeckResult)){
			array_push($monoshadowdeckTotalCards, array("value" => $monoshadowdeckRow["3"]));
			array_push($monoshadowdeckUnits, array("value" => $monoshadowdeckRow["4"]));
			array_push($monoshadowdeckSpells, array("value" => $monoshadowdeckRow["5"]));
			array_push($monoshadowdeckAttachments, array("value" => $monoshadowdeckRow["6"]));
			array_push($monoshadowdeckWeapons, array("value" => $monoshadowdeckRow["7"]));
			array_push($monoshadowdeckRelicWeapons, array("value" => $monoshadowdeckRow["8"]));
			array_push($monoshadowdeckRelics, array("value" => $monoshadowdeckRow["9"]));
			array_push($monoshadowdeckCursedRelics, array("value" => $monoshadowdeckRow["10"]));
			array_push($monoshadowdeckCurses, array("value" => $monoshadowdeckRow["11"]));
			array_push($monoshadowdeckRemoval, array("value" => $monoshadowdeckRow["12"]));
			array_push($monoshadowdeckReactive, array("value" => $monoshadowdeckRow["13"]));
			array_push($monoshadowdeckCardCycling, array("value" => $monoshadowdeckRow["14"]));
			array_push($monoshadowdeckManipulation, array("value" => $monoshadowdeckRow["15"]));
			array_push($monoshadowdeckDebuff, array("value" => $monoshadowdeckRow["16"]));
			array_push($monoshadowdeckBuff, array("value" => $monoshadowdeckRow["17"]));
			array_push($monoshadowdeckInfluence, array("value" => $monoshadowdeckRow["18"]));
			array_push($monoshadowdeckOffense, array("value" => $monoshadowdeckRow["19"]));
			array_push($monoshadowdeckDefense, array("value" => $monoshadowdeckRow["20"]));
	}

	while($argenportdeckRow = mysqli_fetch_array($argenportdeckResult)){
			array_push($argenportdeckTotalCards, array("value" => $argenportdeckRow["3"]));
			array_push($argenportdeckUnits, array("value" => $argenportdeckRow["4"]));
			array_push($argenportdeckSpells, array("value" => $argenportdeckRow["5"]));
			array_push($argenportdeckAttachments, array("value" => $argenportdeckRow["6"]));
			array_push($argenportdeckWeapons, array("value" => $argenportdeckRow["7"]));
			array_push($argenportdeckRelicWeapons, array("value" => $argenportdeckRow["8"]));
			array_push($argenportdeckRelics, array("value" => $argenportdeckRow["9"]));
			array_push($argenportdeckCursedRelics, array("value" => $argenportdeckRow["10"]));
			array_push($argenportdeckCurses, array("value" => $argenportdeckRow["11"]));
			array_push($argenportdeckRemoval, array("value" => $argenportdeckRow["12"]));
			array_push($argenportdeckReactive, array("value" => $argenportdeckRow["13"]));
			array_push($argenportdeckCardCycling, array("value" => $argenportdeckRow["14"]));
			array_push($argenportdeckManipulation, array("value" => $argenportdeckRow["15"]));
			array_push($argenportdeckDebuff, array("value" => $argenportdeckRow["16"]));
			array_push($argenportdeckBuff, array("value" => $argenportdeckRow["17"]));
			array_push($argenportdeckInfluence, array("value" => $argenportdeckRow["18"]));
			array_push($argenportdeckOffense, array("value" => $argenportdeckRow["19"]));
			array_push($argenportdeckDefense, array("value" => $argenportdeckRow["20"]));
	}
	
	while($combreideckRow = mysqli_fetch_array($combreideckResult)){
			array_push($combreideckTotalCards, array("value" => $combreideckRow["3"]));
			array_push($combreideckUnits, array("value" => $combreideckRow["4"]));
			array_push($combreideckSpells, array("value" => $combreideckRow["5"]));
			array_push($combreideckAttachments, array("value" => $combreideckRow["6"]));
			array_push($combreideckWeapons, array("value" => $combreideckRow["7"]));
			array_push($combreideckRelicWeapons, array("value" => $combreideckRow["8"]));
			array_push($combreideckRelics, array("value" => $combreideckRow["9"]));
			array_push($combreideckCursedRelics, array("value" => $combreideckRow["10"]));
			array_push($combreideckCurses, array("value" => $combreideckRow["11"]));
			array_push($combreideckRemoval, array("value" => $combreideckRow["12"]));
			array_push($combreideckReactive, array("value" => $combreideckRow["13"]));
			array_push($combreideckCardCycling, array("value" => $combreideckRow["14"]));
			array_push($combreideckManipulation, array("value" => $combreideckRow["15"]));
			array_push($combreideckDebuff, array("value" => $combreideckRow["16"]));
			array_push($combreideckBuff, array("value" => $combreideckRow["17"]));
			array_push($combreideckInfluence, array("value" => $combreideckRow["18"]));
			array_push($combreideckOffense, array("value" => $combreiRow["19"]));
			array_push($combreideckDefense, array("value" => $combreiRow["20"]));
	}
	
	while($elysiandeckRow = mysqli_fetch_array($elysiandeckResult)){
			array_push($elysiandeckTotalCards, array("value" => $elysiandeckRow["3"]));
			array_push($elysiandeckUnits, array("value" => $elysiandeckRow["4"]));
			array_push($elysiandeckSpells, array("value" => $elysiandeckRow["5"]));
			array_push($elysiandeckAttachments, array("value" => $elysiandeckRow["6"]));
			array_push($elysiandeckWeapons, array("value" => $elysiandeckRow["7"]));
			array_push($elysiandeckRelicWeapons, array("value" => $elysiandeckRow["8"]));
			array_push($elysiandeckRelics, array("value" => $elysiandeckRow["9"]));
			array_push($elysiandeckCursedRelics, array("value" => $elysiandeckRow["10"]));
			array_push($elysiandeckCurses, array("value" => $elysiandeckRow["11"]));
			array_push($elysiandeckRemoval, array("value" => $elysiandeckRow["12"]));
			array_push($elysiandeckReactive, array("value" => $elysiandeckRow["13"]));
			array_push($elysiandeckCardCycling, array("value" => $elysiandeckRow["14"]));
			array_push($elysiandeckManipulation, array("value" => $elysiandeckRow["15"]));
			array_push($elysiandeckDebuff, array("value" => $elysiandeckRow["16"]));
			array_push($elysiandeckBuff, array("value" => $elysiandeckRow["17"]));
			array_push($elysiandeckInfluence, array("value" => $elysiandeckRow["18"]));
			array_push($elysiandeckOffense, array("value" => $elysiandeckRow["19"]));
			array_push($elysiandeckDefense, array("value" => $elysiandeckRow["20"]));
	}
	
	while($felndeckRow = mysqli_fetch_array($felndeckResult)){
			array_push($felndeckTotalCards, array("value" => $felndeckRow["3"]));
			array_push($felndeckUnits, array("value" => $felndeckRow["4"]));
			array_push($felndeckSpells, array("value" => $felndeckRow["5"]));
			array_push($felndeckAttachments, array("value" => $felndeckRow["6"]));
			array_push($felndeckWeapons, array("value" => $felndeckRow["7"]));
			array_push($felndeckRelicWeapons, array("value" => $felndeckRow["8"]));
			array_push($felndeckRelics, array("value" => $felndeckRow["9"]));
			array_push($felndeckCursedRelics, array("value" => $felndeckRow["10"]));
			array_push($felndeckCurses, array("value" => $felndeckRow["11"]));
			array_push($felndeckRemoval, array("value" => $felndeckRow["12"]));
			array_push($felndeckReactive, array("value" => $felndeckRow["13"]));
			array_push($felndeckCardCycling, array("value" => $felndeckRow["14"]));
			array_push($felndeckManipulation, array("value" => $felndeckRow["15"]));
			array_push($felndeckDebuff, array("value" => $felndeckRow["16"]));
			array_push($felndeckBuff, array("value" => $felndeckRow["17"]));
			array_push($felndeckInfluence, array("value" => $felndeckRow["18"]));
			array_push($felndeckOffense, array("value" => $felndeckRow["19"]));
			array_push($felndeckDefense, array("value" => $felndeckRow["20"]));
	}
	
	while($hoorudeckRow = mysqli_fetch_array($hoorudeckResult)){
			array_push($hoorudeckTotalCards, array("value" => $hoorudeckRow["3"]));
			array_push($hoorudeckUnits, array("value" => $hoorudeckRow["4"]));
			array_push($hoorudeckSpells, array("value" => $hoorudeckRow["5"]));
			array_push($hoorudeckAttachments, array("value" => $hoorudeckRow["6"]));
			array_push($hoorudeckWeapons, array("value" => $hoorudeckRow["7"]));
			array_push($hoorudeckRelicWeapons, array("value" => $hoorudeckRow["8"]));
			array_push($hoorudeckRelics, array("value" => $hoorudeckRow["9"]));
			array_push($hoorudeckCursedRelics, array("value" => $hoorudeckRow["10"]));
			array_push($hoorudeckCurses, array("value" => $hoorudeckRow["11"]));
			array_push($hoorudeckRemoval, array("value" => $hoorudeckRow["12"]));
			array_push($hoorudeckReactive, array("value" => $hoorudeckRow["13"]));
			array_push($hoorudeckCardCycling, array("value" => $hoorudeckRow["14"]));
			array_push($hoorudeckManipulation, array("value" => $hoorudeckRow["15"]));
			array_push($hoorudeckDebuff, array("value" => $hoorudeckRow["16"]));
			array_push($hoorudeckBuff, array("value" => $hoorudeckRow["17"]));
			array_push($hoorudeckInfluence, array("value" => $hoorudeckRow["18"]));
			array_push($hoorudeckOffense, array("value" => $hoorudeckRow["19"]));
			array_push($hoorudeckDefense, array("value" => $hoorudeckRow["20"]));
	}
	
	while($praxisdeckRow = mysqli_fetch_array($praxisdeckResult)){
			array_push($praxisdeckTotalCards, array("value" => $praxisdeckRow["3"]));
			array_push($praxisdeckUnits, array("value" => $praxisdeckRow["4"]));
			array_push($praxisdeckSpells, array("value" => $praxisdeckRow["5"]));
			array_push($praxisdeckAttachments, array("value" => $praxisdeckRow["6"]));
			array_push($praxisdeckWeapons, array("value" => $praxisdeckRow["7"]));
			array_push($praxisdeckRelicWeapons, array("value" => $praxisdeckRow["8"]));
			array_push($praxisdeckRelics, array("value" => $praxisdeckRow["9"]));
			array_push($praxisdeckCursedRelics, array("value" => $praxisdeckRow["10"]));
			array_push($praxisdeckCurses, array("value" => $praxisdeckRow["11"]));
			array_push($praxisdeckRemoval, array("value" => $praxisdeckRow["12"]));
			array_push($praxisdeckReactive, array("value" => $praxisdeckRow["13"]));
			array_push($praxisdeckCardCycling, array("value" => $praxisdeckRow["14"]));
			array_push($praxisdeckManipulation, array("value" => $praxisdeckRow["15"]));
			array_push($praxisdeckDebuff, array("value" => $praxisdeckRow["16"]));
			array_push($praxisdeckBuff, array("value" => $praxisdeckRow["17"]));
			array_push($praxisdeckInfluence, array("value" => $praxisdeckRow["18"]));
			array_push($monoprimalOffense, array("value" => $monoprimalRow["19"]));
			array_push($monoprimalDefense, array("value" => $monoprimalRow["20"]));
	}
	
	while($monoshadowdeckRow = mysqli_fetch_array($monoshadowdeckResult)){
			array_push($monoshadowdeckTotalCards, array("value" => $monoshadowdeckRow["3"]));
			array_push($monoshadowdeckUnits, array("value" => $monoshadowdeckRow["4"]));
			array_push($monoshadowdeckSpells, array("value" => $monoshadowdeckRow["5"]));
			array_push($monoshadowdeckAttachments, array("value" => $monoshadowdeckRow["6"]));
			array_push($monoshadowdeckWeapons, array("value" => $monoshadowdeckRow["7"]));
			array_push($monoshadowdeckRelicWeapons, array("value" => $monoshadowdeckRow["8"]));
			array_push($monoshadowdeckRelics, array("value" => $monoshadowdeckRow["9"]));
			array_push($monoshadowdeckCursedRelics, array("value" => $monoshadowdeckRow["10"]));
			array_push($monoshadowdeckCurses, array("value" => $monoshadowdeckRow["11"]));
			array_push($monoshadowdeckRemoval, array("value" => $monoshadowdeckRow["12"]));
			array_push($monoshadowdeckReactive, array("value" => $monoshadowdeckRow["13"]));
			array_push($monoshadowdeckCardCycling, array("value" => $monoshadowdeckRow["14"]));
			array_push($monoshadowdeckManipulation, array("value" => $monoshadowdeckRow["15"]));
			array_push($monoshadowdeckDebuff, array("value" => $monoshadowdeckRow["16"]));
			array_push($monoshadowdeckBuff, array("value" => $monoshadowdeckRow["17"]));
			array_push($monoshadowdeckInfluence, array("value" => $monoshadowdeckRow["18"]));
			array_push($monoshadowOffense, array("value" => $monoshadowRow["19"]));
			array_push($monoshadowDefense, array("value" => $monoshadowRow["20"]));
	}
	
	while($skycragdeckRow = mysqli_fetch_array($skycragdeckResult)){
			array_push($skycragdeckTotalCards, array("value" => $skycragdeckRow["3"]));
			array_push($skycragdeckUnits, array("value" => $skycragdeckRow["4"]));
			array_push($skycragdeckSpells, array("value" => $skycragdeckRow["5"]));
			array_push($skycragdeckAttachments, array("value" => $skycragdeckRow["6"]));
			array_push($skycragdeckWeapons, array("value" => $skycragdeckRow["7"]));
			array_push($skycragdeckRelicWeapons, array("value" => $skycragdeckRow["8"]));
			array_push($skycragdeckRelics, array("value" => $skycragdeckRow["9"]));
			array_push($skycragdeckCursedRelics, array("value" => $skycragdeckRow["10"]));
			array_push($skycragdeckCurses, array("value" => $skycragdeckRow["11"]));
			array_push($skycragdeckRemoval, array("value" => $skycragdeckRow["12"]));
			array_push($skycragdeckReactive, array("value" => $skycragdeckRow["13"]));
			array_push($skycragdeckCardCycling, array("value" => $skycragdeckRow["14"]));
			array_push($skycragdeckManipulation, array("value" => $skycragdeckRow["15"]));
			array_push($skycragdeckDebuff, array("value" => $skycragdeckRow["16"]));
			array_push($skycragdeckBuff, array("value" => $skycragdeckRow["17"]));
			array_push($skycragdeckInfluence, array("value" => $skycragdeckRow["18"]));
			array_push($skycragdeckOffense, array("value" => $skycragdeckRow["19"]));
			array_push($skycragdeckDefense, array("value" => $skycragdeckRow["20"]));
	}
	
	while($stonescardeckRow = mysqli_fetch_array($stonescardeckResult)){
			array_push($stonescardeckTotalCards, array("value" => $stonescardeckRow["3"]));
			array_push($stonescardeckUnits, array("value" => $stonescardeckRow["4"]));
			array_push($stonescardeckSpells, array("value" => $stonescardeckRow["5"]));
			array_push($stonescardeckAttachments, array("value" => $stonescardeckRow["6"]));
			array_push($stonescardeckWeapons, array("value" => $stonescardeckRow["7"]));
			array_push($stonescardeckRelicWeapons, array("value" => $stonescardeckRow["8"]));
			array_push($stonescardeckRelics, array("value" => $stonescardeckRow["9"]));
			array_push($stonescardeckCursedRelics, array("value" => $stonescardeckRow["10"]));
			array_push($stonescardeckCurses, array("value" => $stonescardeckRow["11"]));
			array_push($stonescardeckRemoval, array("value" => $stonescardeckRow["12"]));
			array_push($stonescardeckReactive, array("value" => $stonescardeckRow["13"]));
			array_push($stonescardeckCardCycling, array("value" => $stonescardeckRow["14"]));
			array_push($stonescardeckManipulation, array("value" => $stonescardeckRow["15"]));
			array_push($stonescardeckDebuff, array("value" => $stonescardeckRow["16"]));
			array_push($stonescardeckBuff, array("value" => $stonescardeckRow["17"]));
			array_push($stonescardeckInfluence, array("value" => $stonescardeckRow["18"]));
			array_push($stonescardeckOffense, array("value" => $stonescardeckRow["19"]));
			array_push($stonescardeckDefense, array("value" => $stonescardeckRow["20"]));
	}
	
	while($xenandeckRow = mysqli_fetch_array($xenandeckResult)){
			array_push($xenandeckTotalCards, array("value" => $xenandeckRow["3"]));
			array_push($xenandeckUnits, array("value" => $xenandeckRow["4"]));
			array_push($xenandeckSpells, array("value" => $xenandeckRow["5"]));
			array_push($xenandeckAttachments, array("value" => $xenandeckRow["6"]));
			array_push($xenandeckWeapons, array("value" => $xenandeckRow["7"]));
			array_push($xenandeckRelicWeapons, array("value" => $xenandeckRow["8"]));
			array_push($xenandeckRelics, array("value" => $xenandeckRow["9"]));
			array_push($xenandeckCursedRelics, array("value" => $xenandeckRow["10"]));
			array_push($xenandeckCurses, array("value" => $xenandeckRow["11"]));
			array_push($xenandeckRemoval, array("value" => $xenandeckRow["12"]));
			array_push($xenandeckReactive, array("value" => $xenandeckRow["13"]));
			array_push($xenandeckCardCycling, array("value" => $xenandeckRow["14"]));
			array_push($xenandeckManipulation, array("value" => $xenandeckRow["15"]));
			array_push($xenandeckDebuff, array("value" => $xenandeckRow["16"]));
			array_push($xenandeckBuff, array("value" => $xenandeckRow["17"]));
			array_push($xenandeckInfluence, array("value" => $xenandeckRow["18"]));
			array_push($xenandeckOffense, array("value" => $xenandeckRow["19"]));
			array_push($xenandeckDefense, array("value" => $xenandeckRow["20"]));
	}
	
	$dbhandle->close();
	
// chart formatting
	
	$deckpalette = "#FF0000,#FFD700,#008000,#0000FF,#4B0082,#556B2F,#00FF00,#4385FF,#8A2BE2,#008080,#FA8072,#FF4500,#00FFFF, #800000, #483D8B";
	$factionpalette = "#FF0000,#FFD700,#008000,#0000FF,#4B0082,#556B2F,#00FF00,#4385FF,#8A2BE2,#008080,#FA8072,#FF4500,#00FFFF, #800000, #483D8B";
	$influencepalette = "#ff0000,#008000,#FFD700,#0000FF,#4B0082,#708090";

	
		// deck
		
			$deckTotalCardsData = array(
				"chart" => array(
					"caption" => "Card Availability",
					"subcaption" => "per Power Cost by Deck Type",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards",
					"showValues" => "0",
					"paletteColors" => $deckpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",	
              	)
           	);
			
			$deckUnitsData = array(
				"chart" => array(
					"caption" => "Unit Availability",
					"subcaption" => "per Power Cost by Deck Type",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Units",
					"showValues" => "0",
					"paletteColors" => $deckpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",	
              	)
           	);
			
			$deckOffenseData = array(
				"chart" => array(
					"caption" => "Offense: Average Unit Strength",
					"subcaption" => "per Power Cost by Deck Type",
					"xAxisName" => "Power Cost",
					"yAxisName" => "Unit Strength (Avg)",
					"showValues" => "0",
					"paletteColors" => $deckpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$deckDefenseData = array(
				"chart" => array(
					"caption" => "Defense: Average Unit Health",
					"subcaption" => "per Power Cost by Deck Type",
					"xAxisName" => "Power Cost",
					"yAxisName" => "Unit Health (Avg)",
					"showValues" => "0",
					"paletteColors" => $deckpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$deckSpellsData = array(
				"chart" => array(
					"caption" => "Spell Availability",
					"subcaption" => "per Power Cost by Deck Type",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Spells",
					"showValues" => "0",
					"paletteColors" => $deckpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",	
              	)
           	);
			
			$deckAttachmentsData = array(
				"chart" => array(
					"caption" => "Attachment Availability",
					"subcaption" => "per Power Cost by Deck Type",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Attachments",
					"showValues" => "0",
					"paletteColors" => $deckpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",	
              	)
           	);
			
			$deckWeaponsData = array(
				"chart" => array(
					"caption" => "Weapon Availability",
					"subcaption" => "per Power Cost by Deck Type",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Weapons (non-relic)",
					"showValues" => "0",
					"paletteColors" => $deckpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",	
              	)
           	);
			
			$deckRelicWeaponsData = array(
				"chart" => array(
					"caption" => "Relic Weapon Availability",
					"subcaption" => "per Power Cost by Deck Type",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Relic Weapons",
					"showValues" => "0",
					"paletteColors" => $deckpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$deckRelicsData = array(
				"chart" => array(
					"caption" => "Relic Availability",
					"subcaption" => "per Power Cost by Deck Type",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Relics (non-weapon, non-cursed)",
					"showValues" => "0",
					"paletteColors" => $deckpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$deckCursedRelicsData = array(
				"chart" => array(
					"caption" => "Cursed Relic Availability",
					"subcaption" => "per Power Cost by Deck Type",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cursed Relics",
					"showValues" => "0",
					"paletteColors" => $deckpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",	
              	)
           	);
			
			$deckCursesData = array(
				"chart" => array(
					"caption" => "Curse Availability",
					"subcaption" => "per Power Cost by Deck Type",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Curses (non-relic)",
					"showValues" => "0",
					"paletteColors" => $deckpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$deckRemovalData = array(
				"chart" => array(
					"caption" => "Removal Availability",
					"subcaption" => "per Power Cost by Deck Type",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Removal Cards",
					"showValues" => "0",
					"paletteColors" => $deckpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$deckReactiveData = array(
				"chart" => array(
					"caption" => "Reactive Card Availability",
					"subcaption" => "per Power Cost by Deck Type",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Permitting Reactive Play",
					"showValues" => "0",
					"paletteColors" => $deckpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$deckManipulationData = array(
				"chart" => array(
					"caption" => "Deck Manipulation Availability",
					"subcaption" => "per Power Cost by Deck Type",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Manipulation",
					"showValues" => "0",
					"paletteColors" => $deckpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$deckCardCyclingData = array(
				"chart" => array(
					"caption" => "Card Cycling Availability",
					"subcaption" => "per Power Cost by Deck Type",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Cycling",
					"showValues" => "0",
					"paletteColors" => $deckpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$deckDebuffsData = array(
				"chart" => array(
					"caption" => "Stat-Debuff Availability",
					"subcaption" => "per Power Cost by Deck Type",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Cycling",
					"showValues" => "0",
					"paletteColors" => $deckpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$deckBuffsData = array(
				"chart" => array(
					"caption" => "Stat-Buff Availability",
					"subcaption" => "per Power Cost by Deck Type",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Cycling",
					"showValues" => "0",
					"paletteColors" => $deckpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$deckInfluenceData = array(
				"chart" => array(
					"caption" => "Card Influence Cost (Avg)",
					"subcaption" => "per Power Cost by Deck Type",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Cycling",
					"showValues" => "0",
					"paletteColors" => $deckpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
		
		// faction
		
			$factionTotalCardsData = array(
				"chart" => array(
					"caption" => "Card Availability",
					"subcaption" => "per Power Cost by Faction",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards",
					"showValues" => "0",
					"paletteColors" => $factionpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$factionUnitsData = array(
				"chart" => array(
					"caption" => "Unit Availability",
					"subcaption" => "per Power Cost by Faction",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Units",
					"showValues" => "0",
					"paletteColors" => $factionpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",	
              	)
           	);
			
			$factionOffenseData = array(
				"chart" => array(
					"caption" => "Offense: Average Unit Strength",
					"subcaption" => "per Power Cost by Faction",
					"xAxisName" => "Power Cost",
					"yAxisName" => "Unit Strength (Avg)",
					"showValues" => "0",
					"paletteColors" => $factionpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$factionDefenseData = array(
				"chart" => array(
					"caption" => "Defense: Average Unit Health",
					"subcaption" => "per Power Cost by Faction",
					"xAxisName" => "Power Cost",
					"yAxisName" => "Unit Health (Avg)",
					"showValues" => "0",
					"paletteColors" => $factionpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$factionSpellsData = array(
				"chart" => array(
					"caption" => "Spell Availability",
					"subcaption" => "per Power Cost by Faction",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Spells",
					"showValues" => "0",
					"paletteColors" => $factionpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$factionAttachmentsData = array(
				"chart" => array(
					"caption" => "Attachment Availability",
					"subcaption" => "per Power Cost by Faction",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Attachments",
					"showValues" => "0",
					"paletteColors" => $factionpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",	
              	)
           	);
			
			$factionWeaponsData = array(
				"chart" => array(
					"caption" => "Weapon Availability",
					"subcaption" => "per Power Cost by Faction",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Weapons (non-relic)",
					"showValues" => "0",
					"paletteColors" => $factionpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",	
              	)
           	);
			
			$factionRelicWeaponsData = array(
				"chart" => array(
					"caption" => "Relic Weapon Availability",
					"subcaption" => "per Power Cost by Faction",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Relic Weapons",
					"showValues" => "0",
					"paletteColors" => $factionpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$factionRelicsData = array(
				"chart" => array(
					"caption" => "Relic Availability",
					"subcaption" => "per Power Cost by Faction",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Relics (non-weapon, non-cursed)",
					"showValues" => "0",
					"paletteColors" => $factionpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$factionCursedRelicsData = array(
				"chart" => array(
					"caption" => "Cursed Relic Availability",
					"subcaption" => "per Power Cost by Faction",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cursed Relics",
					"showValues" => "0",
					"paletteColors" => $factionpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",	
              	)
           	);
			
			$factionCursesData = array(
				"chart" => array(
					"caption" => "Curse Availability",
					"subcaption" => "per Power Cost by Faction",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Curses (non-relic)",
					"showValues" => "0",
					"paletteColors" => $factionpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$factionRemovalData = array(
				"chart" => array(
					"caption" => "Removal Availability",
					"subcaption" => "per Power Cost by Faction",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Removal Cards",
					"showValues" => "0",
					"paletteColors" => $factionpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$factionReactiveData = array(
				"chart" => array(
					"caption" => "Reactive Card Availability",
					"subcaption" => "per Power Cost by Faction",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Permitting Reactive Play",
					"showValues" => "0",
					"paletteColors" => $factionpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$factionManipulationData = array(
				"chart" => array(
					"caption" => "Deck Manipulation Availability",
					"subcaption" => "per Power Cost by Faction",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Manipulation",
					"showValues" => "0",
					"paletteColors" => $factionpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$factionCardCyclingData = array(
				"chart" => array(
					"caption" => "Card Cycling Availability",
					"subcaption" => "per Power Cost by Faction",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Cycling",
					"showValues" => "0",
					"paletteColors" => $factionpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$factionDebuffsData = array(
				"chart" => array(
					"caption" => "Stat-Debuff Availability",
					"subcaption" => "per Power Cost by Faction",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Cycling",
					"showValues" => "0",
					"paletteColors" => $factionpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$factionBuffsData = array(
				"chart" => array(
					"caption" => "Stat-Buff Availability",
					"subcaption" => "per Power Cost by Faction",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Cycling",
					"showValues" => "0",
					"paletteColors" => $factionpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$factionInfluenceData = array(
				"chart" => array(
					"caption" => "Card Influence Cost (Avg)",
					"subcaption" => "per Power Cost by Faction",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Cycling",
					"showValues" => "0",
					"paletteColors" => $factionpalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
		
		// influence
		
			$influenceTotalCardsData = array(
				"chart" => array(
					"caption" => "Card Availability",
					"subcaption" => "per Power Cost by Influence",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards",
					"showValues" => "0",
					"paletteColors" => $influencepalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",	
              	)
           	);
			
			$influenceUnitsData = array(
				"chart" => array(
					"caption" => "Unit Availability",
					"subcaption" => "per Power Cost by Influence",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Units",
					"showValues" => "0",
					"paletteColors" => $influencepalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",	
              	)
           	);
			
			$influenceOffenseData = array(
				"chart" => array(
					"caption" => "Offense: Average Unit Strength",
					"subcaption" => "per Power Cost by Influence",
					"xAxisName" => "Power Cost",
					"yAxisName" => "Unit Strength (Avg)",
					"showValues" => "0",
					"paletteColors" => $influencepalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$influenceDefenseData = array(
				"chart" => array(
					"caption" => "Defense: Average Unit Health",
					"subcaption" => "per Power Cost by Influence",
					"xAxisName" => "Power Cost",
					"yAxisName" => "Unit Health (Avg)",
					"showValues" => "0",
					"paletteColors" => $influencepalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$influenceSpellsData = array(
				"chart" => array(
					"caption" => "Spell Availability",
					"subcaption" => "per Power Cost by Influence",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Spells",
					"showValues" => "0",
					"paletteColors" => $influencepalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",	
              	)
           	);
			
			$influenceAttachmentsData = array(
				"chart" => array(
					"caption" => "Attachment Availability",
					"subcaption" => "per Power Cost by Influence",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Attachments",
					"showValues" => "0",
					"paletteColors" => $influencepalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",	
              	)
           	);
			
			$influenceWeaponsData = array(
				"chart" => array(
					"caption" => "Weapon Availability",
					"subcaption" => "per Power Cost by Influence",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Weapons (non-relic)",
					"showValues" => "0",
					"paletteColors" => $influencepalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$influenceRelicWeaponsData = array(
				"chart" => array(
					"caption" => "Relic Weapon Availability",
					"subcaption" => "per Power Cost by Influence",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Relic Weapons",
					"showValues" => "0",
					"paletteColors" => $influencepalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$influenceRelicsData = array(
				"chart" => array(
					"caption" => "Relic Availability",
					"subcaption" => "per Power Cost by Influence",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Relics (non-weapon, non-cursed)",
					"showValues" => "0",
					"paletteColors" => $influencepalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$influenceCursedRelicsData = array(
				"chart" => array(
					"caption" => "Cursed Relic Availability",
					"subcaption" => "per Power Cost by Influence",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cursed Relics",
					"showValues" => "0",
					"paletteColors" => $influencepalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",	
              	)
           	);
			
			$influenceCursesData = array(
				"chart" => array(
					"caption" => "Curse Availability",
					"subcaption" => "per Power Cost by Influence",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Curses (non-relic)",
					"showValues" => "0",
					"paletteColors" => $influencepalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$influenceRemovalData = array(
				"chart" => array(
					"caption" => "Removal Availability",
					"subcaption" => "per Power Cost by Influence",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Removal Cards",
					"showValues" => "0",
					"paletteColors" => $influencepalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$influenceReactiveData = array(
				"chart" => array(
					"caption" => "Reactive Card Availability",
					"subcaption" => "per Power Cost by Influence",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Permitting Reactive Play",
					"showValues" => "0",
					"paletteColors" => $influencepalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$influenceManipulationData = array(
				"chart" => array(
					"caption" => "Deck Manipulation Availability",
					"subcaption" => "per Power Cost by Influence",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Manipulation",
					"showValues" => "0",
					"paletteColors" => $influencepalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$influenceCardCyclingData = array(
				"chart" => array(
					"caption" => "Card Cycling Availability",
					"subcaption" => "per Power Cost by Influence",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Cycling",
					"showValues" => "0",
					"paletteColors" => $influencepalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$influenceDebuffsData = array(
				"chart" => array(
					"caption" => "Stat-Debuff Availability",
					"subcaption" => "per Power Cost by Influence",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Cycling",
					"showValues" => "0",
					"paletteColors" => $influencepalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$influenceBuffsData = array(
				"chart" => array(
					"caption" => "Stat-Buff Availability",
					"subcaption" => "per Power Cost by Influence",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Cycling",
					"showValues" => "0",
					"paletteColors" => $influencepalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);
			
			$influenceInfluenceData = array(
				"chart" => array(
					"caption" => "Card Influence Cost (Avg)",
					"subcaption" => "per Power Cost by Influence",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Cycling",
					"showValues" => "0",
					"paletteColors" => $influencepalette,
					"baseFontColor" => "#131313",
					"labelDisplay" => "auto",
					"bgColor" => "#ffffff",
					"canvasBgColor" => "#ffffff",
					"showcanvasborder" => "1",
					"plotCanvasThickness" => "1",
					"drawFullAreaBorder" => "0",
					"showPlotBorder" => "0",
					"showBorder" => "0",
					"numDivLines" => "4",
					"divLineColor" => "#262626",
					"divLineThickness" => "1",
					"showAlternateHGridColor" => "0",
					"numVDivLines" => "12",
					"vDivLineColor" => "#262626",
					"vDivLineThickness" => "1",
					"vDivLineDashed" => "1",
					"showAlternateVGridColor" => "0",
					"drawCrossLine" => "1",
					"crossLineColor" => "#262626",
					"plotColorinTooltip" => "1",
					"showToolTip" => "1",
					"toolTipBgColor" => "#262626",
					"toolTipColor" => "#ffffff",
              	)
           	);

// format chart series data
	
		// deck

			$deckTotalCardsData["categories"]= array(array("category"=>$powerArray));
			$deckTotalCardsData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckTotalCards), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckTotalCards),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckTotalCards),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckTotalCards),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckTotalCards),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckTotalCards), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckTotalCards),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckTotalCards),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckTotalCards),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckTotalCards),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckTotalCards), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowdeckTotalCards),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckTotalCards),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckTotalCards),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckTotalCards)
			);
			
			$deckUnitsData["categories"]= array(array("category"=>$powerArray));
			$deckUnitsData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckUnits), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckUnits),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckUnits),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckUnits),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckUnits),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckUnits), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckUnits),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckUnits),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckUnits),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckUnits),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckUnits), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowdeckUnits),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckUnits),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckUnits),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckUnits)
			);
			
			$deckOffenseData["categories"]= array(array("category"=>$powerArray));
			$deckOffenseData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckOffense), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckOffense),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckOffense),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckOffense),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckOffense),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckOffense), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckOffense),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckOffense),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckOffense),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckOffense),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckOffense), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowdeckOffense),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckOffense),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckOffense),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckOffense)
			);
			
			$deckDefenseData["categories"]= array(array("category"=>$powerArray));
			$deckDefenseData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckDefense), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckDefense),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckDefense),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckDefense),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckDefense),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckDefense), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckDefense),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckDefense),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckDefense),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckDefense),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckDefense), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowdeckDefense),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckDefense),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckDefense),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckDefense)
			);
			
			$deckSpellsData["categories"]= array(array("category"=>$powerArray));
			$deckSpellsData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckSpells), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckSpells),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckSpells),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckSpells),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckSpells),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckSpells), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckSpells),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckSpells),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckSpells),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckSpells),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckSpells), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowdeckSpells),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckSpells),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckSpells),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckSpells)
			);
			
			$deckAttachmentsData["categories"]= array(array("category"=>$powerArray));
			$deckAttachmentsData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckAttachments), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckAttachments),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckAttachments),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckAttachments),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckAttachments),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckAttachments), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckAttachments),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckAttachments),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckAttachments),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckAttachments),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckAttachments), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowdeckAttachments),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckAttachments),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckAttachments),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckAttachments)
			);
			
			$deckWeaponsData["categories"]= array(array("category"=>$powerArray));
			$deckWeaponsData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckWeapons), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckWeapons),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckWeapons),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckWeapons),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckWeapons),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckWeapons), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckWeapons),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckWeapons),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckWeapons),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckWeapons),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckWeapons), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowdeckWeapons),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckWeapons),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckWeapons),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckWeapons)
			);
			
			$deckRelicWeaponsData["categories"]= array(array("category"=>$powerArray));
			$deckRelicWeaponsData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckRelicWeapons), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckRelicWeapons),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckRelicWeapons),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckRelicWeapons),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckRelicWeapons),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckRelicWeapons), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckRelicWeapons),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckRelicWeapons),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckRelicWeapons),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckRelicWeapons),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckRelicWeapons), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowdeckRelicWeapons),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckRelicWeapons),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckRelicWeapons),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckRelicWeapons)
			);
			
			$deckRelicsData["categories"]= array(array("category"=>$powerArray));
			$deckRelicsData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckRelics), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckRelics),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckRelics),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckRelics),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckRelics),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckRelics), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckRelics),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckRelics),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckRelics),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckRelics),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckRelics), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowdeckRelics),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckRelics),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckRelics),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckRelics)
			);
			
			$deckCursedRelicsData["categories"]= array(array("category"=>$powerArray));
			$deckCursedRelicsData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckCursedRelics), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckCursedRelics),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckCursedRelics),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckCursedRelics),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckCursedRelics),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckCursedRelics), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckCursedRelics),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckCursedRelics),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckCursedRelics),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckCursedRelics),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckCursedRelics), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowdeckCursedRelics),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckCursedRelics),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckCursedRelics),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckCursedRelics)
			);
			
			$deckCursesData["categories"]= array(array("category"=>$powerArray));
			$deckCursesData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckCurses), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckCurses),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckCurses),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckCurses),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckCurses),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckCurses), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckCurses),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckCurses),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckCurses),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckCurses),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckCurses), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowdeckCurses),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckCurses),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckCurses),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckCurses)
			);
			
			$deckRemovalData["categories"]= array(array("category"=>$powerArray));
			$deckRemovalData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckRemoval), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckRemoval),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckRemoval),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckRemoval),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckRemoval),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckRemoval), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckRemoval),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckRemoval),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckRemoval),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckRemoval),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckRemoval), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowdeckRemoval),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckRemoval),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckRemoval),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckRemoval)
			);
			
			$deckReactiveData["categories"]= array(array("category"=>$powerArray));
			$deckReactiveData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckReactive), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckReactive),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckReactive),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckReactive),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckReactive),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckReactive), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckReactive),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckReactive),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckReactive),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckReactive),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckReactive), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowdeckReactive),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckReactive),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckReactive),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckReactive)
			);
			
			$deckManipulationData["categories"]= array(array("category"=>$powerArray));
			$deckManipulationData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckManipulation), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckManipulation),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckManipulation),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckManipulation),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckManipulation),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckManipulation), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckManipulation),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckManipulation),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckManipulation),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckManipulation),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckManipulation), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowdeckManipulation),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckManipulation),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckManipulation),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckManipulation)
			);
			
			$deckCardCyclingData["categories"]= array(array("category"=>$powerArray));
			$deckCardCyclingData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckCardCycling), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckCardCycling),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckCardCycling),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckCardCycling),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckCardCycling),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckCardCycling), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckCardCycling),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckCardCycling),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckCardCycling),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckCardCycling),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckCardCycling), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowdeckCardCycling),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckCardCycling),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckCardCycling),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckCardCycling)
			);
			
			$deckDebuffsData["categories"]= array(array("category"=>$powerArray));
			$deckDebuffsData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckDebuff), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckDebuff),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckDebuff),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckDebuff),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckDebuff),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckDebuff), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckDebuff),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckDebuff),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckDebuff),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckDebuff),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckDebuff), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowdeckDebuff),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckDebuff),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckDebuff),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckDebuff)
			);
			
			$deckBuffsData["categories"]= array(array("category"=>$powerArray));
			$deckBuffsData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckBuff), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckBuff),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckBuff),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckBuff),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckBuff),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckBuff), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckBuff),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckBuff),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckBuff),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckBuff),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckBuff), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowdeckBuff),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckBuff),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckBuff),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckBuff)
			);
			
			$deckInfluenceData["categories"]= array(array("category"=>$powerArray));
			$deckInfluenceData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckInfluence), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckInfluence),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckInfluence),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckInfluence),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckInfluence),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckInfluence), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckInfluence),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckInfluence),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckInfluence),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckInfluence),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckInfluence), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowdeckInfluence),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckInfluence),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckInfluence),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckInfluence)
			);
		
		// faction
	
			$factionTotalCardsData["categories"]= array(array("category"=>$powerArray));
			$factionTotalCardsData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofireTotalCards), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimeTotalCards),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticeTotalCards),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimalTotalCards),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowTotalCards),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportTotalCards), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreiTotalCards),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysianTotalCards),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felnTotalCards),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hooruTotalCards),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisTotalCards), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowTotalCards),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragTotalCards),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescarTotalCards),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenanTotalCards)
			);
			
			$factionUnitsData["categories"]= array(array("category"=>$powerArray));
			$factionUnitsData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofireUnits), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimeUnits),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticeUnits),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimalUnits),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowUnits),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportUnits), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreiUnits),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysianUnits),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felnUnits),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hooruUnits),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisUnits), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowUnits),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragUnits),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescarUnits),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenanUnits)
			);
			
			$factionOffenseData["categories"]= array(array("category"=>$powerArray));
			$factionOffenseData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckOffense), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckOffense),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckOffense),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckOffense),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckOffense),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckOffense), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckOffense),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckOffense),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckOffense),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckOffense),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckOffense), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowdeckOffense),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckOffense),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckOffense),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckOffense)
			);
			
			$influenceDefenseData["categories"]= array(array("category"=>$powerArray));
			$influenceDefenseData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckDefense), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckDefense),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckDefense),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckDefense),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckDefense),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckDefense), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckDefense),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckDefense),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckDefense),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckDefense),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckDefense), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowdeckDefense),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckDefense),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckDefense),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckDefense)
			);
			
			$factionSpellsData["categories"]= array(array("category"=>$powerArray));
			$factionSpellsData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofireSpells), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimeSpells),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticeSpells),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimalSpells),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowSpells),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportSpells), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreiSpells),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysianSpells),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felnSpells),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hooruSpells),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisSpells), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowSpells),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragSpells),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescarSpells),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenanSpells)
			);
			
			$factionAttachmentsData["categories"]= array(array("category"=>$powerArray));
			$factionAttachmentsData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofireAttachments), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimeAttachments),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticeAttachments),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimalAttachments),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowAttachments),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportAttachments), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreiAttachments),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysianAttachments),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felnAttachments),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hooruAttachments),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisAttachments), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowAttachments),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragAttachments),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescarAttachments),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenanAttachments)
			);
			
			$factionWeaponsData["categories"]= array(array("category"=>$powerArray));
			$factionWeaponsData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofireWeapons), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimeWeapons),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticeWeapons),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimalWeapons),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowWeapons),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportWeapons), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreiWeapons),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysianWeapons),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felnWeapons),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hooruWeapons),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisWeapons), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowWeapons),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragWeapons),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescarWeapons),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenanWeapons)
			);
			
			$factionRelicWeaponsData["categories"]= array(array("category"=>$powerArray));
			$factionRelicWeaponsData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofireRelicWeapons), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimeRelicWeapons),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticeRelicWeapons),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimalRelicWeapons),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowRelicWeapons),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportRelicWeapons), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreiRelicWeapons),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysianRelicWeapons),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felnRelicWeapons),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hooruRelicWeapons),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisRelicWeapons), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowRelicWeapons),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragRelicWeapons),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescarRelicWeapons),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenanRelicWeapons)
			);
			
			$factionRelicsData["categories"]= array(array("category"=>$powerArray));
			$factionRelicsData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofireRelics), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimeRelics),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticeRelics),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimalRelics),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowRelics),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportRelics), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreiRelics),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysianRelics),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felnRelics),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hooruRelics),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisRelics), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowRelics),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragRelics),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescarRelics),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenanRelics)
			);
			
			$factionCursedRelicsData["categories"]= array(array("category"=>$powerArray));
			$factionCursedRelicsData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofireCursedRelics), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimeCursedRelics),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticeCursedRelics),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimalCursedRelics),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowCursedRelics),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportCursedRelics), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreiCursedRelics),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysianCursedRelics),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felnCursedRelics),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hooruCursedRelics),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisCursedRelics), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowCursedRelics),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragCursedRelics),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescarCursedRelics),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenanCursedRelics)
			);
			
			$factionCursesData["categories"]= array(array("category"=>$powerArray));
			$factionCursesData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofireCurses), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimeCurses),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticeCurses),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimalCurses),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowCurses),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportCurses), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreiCurses),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysianCurses),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felnCurses),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hooruCurses),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisCurses), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowCurses),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragCurses),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescarCurses),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenanCurses)
			);
			
			$factionRemovalData["categories"]= array(array("category"=>$powerArray));
			$factionRemovalData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofireRemoval), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimeRemoval),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticeRemoval),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimalRemoval),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowRemoval),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportRemoval), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreiRemoval),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysianRemoval),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felnRemoval),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hooruRemoval),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisRemoval), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowRemoval),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragRemoval),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescarRemoval),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenanRemoval)
			);
			
			$factionReactiveData["categories"]= array(array("category"=>$powerArray));
			$factionReactiveData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofireReactive), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimeReactive),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticeReactive),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimalReactive),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowReactive),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportReactive), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreiReactive),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysianReactive),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felnReactive),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hooruReactive),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisReactive), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowReactive),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragReactive),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescarReactive),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenanReactive)
			);
			
			$factionManipulationData["categories"]= array(array("category"=>$powerArray));
			$factionManipulationData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofireManipulation), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimeManipulation),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticeManipulation),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimalManipulation),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowManipulation),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportManipulation), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreiManipulation),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysianManipulation),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felnManipulation),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hooruManipulation),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisManipulation), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowManipulation),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragManipulation),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescarManipulation),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenanManipulation)
			);
			
			$factionCardCyclingData["categories"]= array(array("category"=>$powerArray));
			$factionCardCyclingData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofireCardCycling), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimeCardCycling),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticeCardCycling),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimalCardCycling),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowCardCycling),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportCardCycling), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreiCardCycling),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysianCardCycling),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felnCardCycling),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hooruCardCycling),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisCardCycling), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowCardCycling),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragCardCycling),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescarCardCycling),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenanCardCycling)
			);
			
			$factionDebuffsData["categories"]= array(array("category"=>$powerArray));
			$factionDebuffsData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckDebuff), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckDebuff),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckDebuff),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckDebuff),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckDebuff),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckDebuff), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckDebuff),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckDebuff),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckDebuff),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckDebuff),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckDebuff), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowdeckDebuff),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckDebuff),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckDebuff),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckDebuff)
			);
			
			$factionBuffsData["categories"]= array(array("category"=>$powerArray));
			$factionBuffsData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckBuff), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckBuff),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckBuff),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckBuff),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckBuff),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckBuff), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckBuff),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckBuff),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckBuff),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckBuff),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckBuff), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowdeckBuff),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckBuff),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckBuff),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckBuff)
			);
			
			$factionInfluenceData["categories"]= array(array("category"=>$powerArray));
			$factionInfluenceData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckInfluence), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckInfluence),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckInfluence),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckInfluence),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckInfluence),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckInfluence), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckInfluence),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckInfluence),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckInfluence),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckInfluence),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckInfluence), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$monoshadowdeckInfluence),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckInfluence),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckInfluence),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckInfluence)
			);
		
		// influence
		
			$influenceTotalCardsData["categories"]= array(array("category"=>$powerArray));
			$influenceTotalCardsData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireTotalCards), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeTotalCards),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceTotalCards),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalTotalCards),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowTotalCards),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneTotalCards)
			);
			
			$influenceUnitsData["categories"]= array(array("category"=>$powerArray));
			$influenceUnitsData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireUnits), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeUnits),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceUnits),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalUnits),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowUnits),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneUnits)
			);
			
			$influenceOffenseData["categories"]= array(array("category"=>$powerArray));
			$influenceOffenseData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireOffense), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeOffense),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceOffense),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalOffense),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowOffense),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneOffense)
			);
			
			$influenceDefenseData["categories"]= array(array("category"=>$powerArray));
			$influenceDefenseData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireDefense), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeDefense),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceDefense),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalDefense),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowDefense),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneDefense)
			);
			
			$influenceSpellsData["categories"]= array(array("category"=>$powerArray));
			$influenceSpellsData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireSpells), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeSpells),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceSpells),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalSpells),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowSpells),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneSpells)
			);
			
			$influenceAttachmentsData["categories"]= array(array("category"=>$powerArray));
			$influenceAttachmentsData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireAttachments), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeAttachments),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceAttachments),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalAttachments),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowAttachments),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneAttachments)
			);
			
			$influenceWeaponsData["categories"]= array(array("category"=>$powerArray));
			$influenceWeaponsData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireWeapons), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeWeapons),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceWeapons),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalWeapons),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowWeapons),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneWeapons)
			);
			
			$influenceRelicWeaponsData["categories"]= array(array("category"=>$powerArray));
			$influenceRelicWeaponsData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireRelicWeapons), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeRelicWeapons),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceRelicWeapons),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalRelicWeapons),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowRelicWeapons),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneRelicWeapons)
			);
			
			$influenceRelicsData["categories"]= array(array("category"=>$powerArray));
			$influenceRelicsData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireRelics), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeRelics),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceRelics),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalRelics),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowRelics),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneRelics)
			);
			
			$influenceCursedRelicsData["categories"]= array(array("category"=>$powerArray));
			$influenceCursedRelicsData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireCursedRelics), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeCursedRelics),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceCursedRelics),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalCursedRelics),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowCursedRelics),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneCursedRelics)
			);
			
			$influenceCursesData["categories"]= array(array("category"=>$powerArray));
			$influenceCursesData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireCurses), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeCurses),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceCurses),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalCurses),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowCurses),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneCurses)
			);
			
			$influenceRemovalData["categories"]= array(array("category"=>$powerArray));
			$influenceRemovalData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireRemoval), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeRemoval),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceRemoval),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalRemoval),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowRemoval),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneRemoval)
			);
			
			$influenceReactiveData["categories"]= array(array("category"=>$powerArray));
			$influenceReactiveData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireReactive), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeReactive),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceReactive),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalReactive),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowReactive),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneReactive)
			);
			
			$influenceManipulationData["categories"]= array(array("category"=>$powerArray));
			$influenceManipulationData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireManipulation), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeManipulation),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceManipulation),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalManipulation),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowManipulation),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneManipulation)
			);
			
			$influenceCardCyclingData["categories"]= array(array("category"=>$powerArray));
			$influenceCardCyclingData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireCardCycling), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeCardCycling),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceCardCycling),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalCardCycling),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowCardCycling),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneCardCycling)
			);
			
			$influenceDebuffsData["categories"]= array(array("category"=>$powerArray));
			$influenceDebuffsData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireDebuff), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeDebuff),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceDebuff),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalDebuff),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowDebuff),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneDebuff)
			);
			
			$influenceBuffsData["categories"]= array(array("category"=>$powerArray));
			$influenceBuffsData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireBuff), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeBuff),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceBuff),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalBuff),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowBuff),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneBuff)
			);
			
			$influenceInfluenceData["categories"]= array(array("category"=>$powerArray));
			$influenceInfluenceData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireInfluence), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeInfluence),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceInfluence),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalInfluence),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowInfluence),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneInfluence)
			);

// encode arrays as json

	// deck
		$deckTotalCardsJson = json_encode($deckTotalCardsData);
		$deckRemovalJson = json_encode($deckRemovalData);
		$deckReactiveJson = json_encode($deckReactiveData);
		$deckCardCyclingJson = json_encode($deckCardCyclingData);
		$deckManipulationJson = json_encode($deckManipulationData);
		$deckUnitsJson = json_encode($deckUnitsData);
		$deckSpellsJson = json_encode($deckSpellsData);
		$deckAttachmentsJson = json_encode($deckAttachmentsData);
		$deckWeaponsJson = json_encode($deckWeaponsData);
		$deckRelicWeaponsJson = json_encode($deckRelicWeaponsData);
		$deckRelicsJson = json_encode($deckRelicsData);
		$deckCursedRelicsJson = json_encode($deckCursedRelicsData);
		$deckCursesJson = json_encode($deckCursesData);
		$deckBuffsJson = json_encode($deckBuffsData);
		$deckDebuffsJson = json_encode($deckDebuffsData);
		$deckInfluenceJson = json_encode($deckInfluenceData);
		$deckOffenseJson = json_encode($deckOffenseData);
		$deckDefenseJson = json_encode($deckDefenseData);
		
	// faction
		$factionTotalCardsJson = json_encode($factionTotalCardsData);
		$factionRemovalJson = json_encode($factionRemovalData);
		$factionReactiveJson = json_encode($factionReactiveData);
		$factionCardCyclingJson = json_encode($factionCardCyclingData);
		$factionManipulationJson = json_encode($factionManipulationData);
		$factionUnitsJson = json_encode($factionUnitsData);
		$factionSpellsJson = json_encode($factionSpellsData);
		$factionAttachmentsJson = json_encode($factionAttachmentsData);
		$factionWeaponsJson = json_encode($factionWeaponsData);
		$factionRelicWeaponsJson = json_encode($factionRelicWeaponsData);
		$factionRelicsJson = json_encode($factionRelicsData);
		$factionCursedRelicsJson = json_encode($factionCursedRelicsData);
		$factionCursesJson = json_encode($factionCursesData);
		$factionBuffsJson = json_encode($factionBuffsData);
		$factionDebuffsJson = json_encode($factionDebuffsData);
		$factionInfluenceJson = json_encode($factionInfluenceData);
		$factionOffenseJson = json_encode($factionOffenseData);
		$factionDefenseJson = json_encode($factionDefenseData);
		
	// influence
		$influenceTotalCardsJson = json_encode($influenceTotalCardsData);
		$influenceRemovalJson = json_encode($influenceRemovalData);
		$influenceReactiveJson = json_encode($influenceReactiveData);
		$influenceCardCyclingJson = json_encode($influenceCardCyclingData);
		$influenceManipulationJson = json_encode($influenceManipulationData);
		$influenceUnitsJson = json_encode($influenceUnitsData);
		$influenceSpellsJson = json_encode($influenceSpellsData);
		$influenceAttachmentsJson = json_encode($influenceAttachmentsData);
		$influenceWeaponsJson = json_encode($influenceWeaponsData);
		$influenceRelicWeaponsJson = json_encode($influenceRelicWeaponsData);
		$influenceRelicsJson = json_encode($influenceRelicsData);
		$influenceCursedRelicsJson = json_encode($influenceCursedRelicsData);
		$influenceCursesJson = json_encode($influenceCursesData);
		$influenceBuffsJson = json_encode($influenceBuffsData);
		$influenceDebuffsJson = json_encode($influenceDebuffsData);
		$influenceInfluenceJson = json_encode($influenceInfluenceData);
		$influenceOffenseJson = json_encode($influenceOffenseData);
		$influenceDefenseJson = json_encode($influenceDefenseData);

// prepare chart div info

	//deck
		$deckTotalCardsChart = new FusionCharts("mscombi2d", "deckCards-js" , "600", "350", "deckTotalCards", "json", $deckTotalCardsJson);
		$deckRemovalChart = new FusionCharts("mscombi2d", "deckRemoval-js" , "600", "350", "deckRemoval", "json", $deckRemovalJson);
		$deckReactiveChart = new FusionCharts("mscombi2d", "deckReactive-js" , "600", "350", "deckReactive", "json", $deckReactiveJson);
		$deckCardCyclingChart = new FusionCharts("mscombi2d", "deckCardCycling-js" , "600", "350", "deckCardCycling", "json", $deckCardCyclingJson);
		$deckManipulationChart = new FusionCharts("mscombi2d", "deckManipulation-js" , "600", "350", "deckManipulation", "json", $deckManipulationJson);
		$deckUnitsChart = new FusionCharts("mscombi2d", "deckUnits-js" , "600", "350", "deckUnits", "json", $deckUnitsJson);
		$deckSpellsChart = new FusionCharts("mscombi2d", "deckSpells-js" , "600", "350", "deckSpells", "json", $deckSpellsJson);
		$deckAttachmentsChart = new FusionCharts("mscombi2d", "deckAttachments-js" , "600", "350", "deckAttachments", "json", $deckAttachmentsJson);
		$deckWeaponsChart = new FusionCharts("mscombi2d", "deckWeapons-js" , "600", "350", "deckWeapons", "json", $deckWeaponsJson);
		$deckRelicWeaponsChart = new FusionCharts("mscombi2d", "deckRelicWeapons-js" , "600", "350", "deckRelicWeapons", "json", $deckRelicWeaponsJson);
		$deckRelicsChart = new FusionCharts("mscombi2d", "deckRelics-js" , "600", "350", "deckRelics", "json", $deckRelicsJson);
		$deckCursedRelicsChart = new FusionCharts("mscombi2d", "deckCursedRelics-js" , "600", "350", "deckCursedRelics", "json", $deckCursedRelicsJson);
		$deckCursesChart = new FusionCharts("mscombi2d", "deckCurses-js" , "600", "350", "deckCurses", "json", $deckCursesJson);
		$deckBuffsChart = new FusionCharts("mscombi2d", "deckBuffs-js" , "600", "350", "deckBuffs", "json", $deckBuffsJson);
		$deckDebuffsChart = new FusionCharts("mscombi2d", "deckDebuffs-js" , "600", "350", "deckDebuffs", "json", $deckDebuffsJson);
		$deckInfluenceChart = new FusionCharts("mscombi2d", "deckInfluence-js" , "600", "350", "deckInfluence", "json", $deckInfluenceJson);
		$deckOffenseChart = new FusionCharts("mscombi2d", "deckOffense-js" , "600", "350", "deckOffense", "json", $deckOffenseJson);
		$deckDefenseChart = new FusionCharts("mscombi2d", "deckDefense-js" , "600", "350", "deckDefense", "json", $deckDefenseJson);
		
	// faction
		$factionTotalCardsChart = new FusionCharts("mscombi2d", "factionCards-js" , "600", "350", "factionTotalCards", "json", $factionTotalCardsJson);
		$factionRemovalChart = new FusionCharts("mscombi2d", "factionRemoval-js" , "600", "350", "factionRemoval", "json", $factionRemovalJson);
		$factionReactiveChart = new FusionCharts("mscombi2d", "factionReactive-js" , "600", "350", "factionReactive", "json", $factionReactiveJson);
		$factionCardCyclingChart = new FusionCharts("mscombi2d", "factionCardCycling-js" , "600", "350", "factionCardCycling", "json", $factionCardCyclingJson);
		$factionManipulationChart = new FusionCharts("mscombi2d", "factionManipulation-js" , "600", "350", "factionManipulation", "json", $factionManipulationJson);
		$factionUnitsChart = new FusionCharts("mscombi2d", "factionUnits-js" , "600", "350", "factionUnits", "json", $factionUnitsJson);
		$factionSpellsChart = new FusionCharts("mscombi2d", "factionSpells-js" , "600", "350", "factionSpells", "json", $factionSpellsJson);
		$factionAttachmentsChart = new FusionCharts("mscombi2d", "factionAttachments-js" , "600", "350", "factionAttachments", "json", $factionAttachmentsJson);
		$factionWeaponsChart = new FusionCharts("mscombi2d", "factionWeapons-js" , "600", "350", "factionWeapons", "json", $factionWeaponsJson);
		$factionRelicWeaponsChart = new FusionCharts("mscombi2d", "factionRelicWeapons-js" , "600", "350", "factionRelicWeapons", "json", $factionRelicWeaponsJson);
		$factionRelicsChart = new FusionCharts("mscombi2d", "factionRelics-js" , "600", "350", "factionRelics", "json", $factionRelicsJson);
		$factionCursedRelicsChart = new FusionCharts("mscombi2d", "factionCursedRelics-js" , "600", "350", "factionCursedRelics", "json", $factionCursedRelicsJson);
		$factionCursesChart = new FusionCharts("mscombi2d", "factionCurses-js" , "600", "350", "factionCurses", "json", $factionCursesJson);
		$factionBuffsChart = new FusionCharts("mscombi2d", "factionBuffs-js" , "600", "350", "factionBuffs", "json", $factionBuffsJson);
		$factionDebuffsChart = new FusionCharts("mscombi2d", "factionDebuffs-js" , "600", "350", "factionDebuffs", "json", $factionDebuffsJson);
		$factionInfluenceChart = new FusionCharts("mscombi2d", "factionInfluence-js" , "600", "350", "factionInfluence", "json", $factionInfluenceJson);
		$factionOffenseChart = new FusionCharts("mscombi2d", "factionOffense-js" , "600", "350", "factionOffense", "json", $factionOffenseJson);
		$factionDefenseChart = new FusionCharts("mscombi2d", "factionDefense-js" , "600", "350", "factionDefense", "json", $factionDefenseJson);
		
	// influence
		$influenceTotalCardsChart = new FusionCharts("mscombi2d", "influenceCards-js" , "600", "350", "influenceTotalCards", "json", $influenceTotalCardsJson);
		$influenceRemovalChart = new FusionCharts("mscombi2d", "influenceRemoval-js" , "600", "350", "influenceRemoval", "json", $influenceRemovalJson);
		$influenceReactiveChart = new FusionCharts("mscombi2d", "influenceReactive-js" , "600", "350", "influenceReactive", "json", $influenceReactiveJson);
		$influenceCardCyclingChart = new FusionCharts("mscombi2d", "influenceCardCycling-js" , "600", "350", "influenceCardCycling", "json", $influenceCardCyclingJson);
		$influenceManipulationChart = new FusionCharts("mscombi2d", "influenceManipulation-js" , "600", "350", "influenceManipulation", "json", $influenceManipulationJson);
		$influenceUnitsChart = new FusionCharts("mscombi2d", "influenceUnits-js" , "600", "350", "influenceUnits", "json", $influenceUnitsJson);
		$influenceSpellsChart = new FusionCharts("mscombi2d", "influenceSpells-js" , "600", "350", "influenceSpells", "json", $influenceSpellsJson);
		$influenceAttachmentsChart = new FusionCharts("mscombi2d", "influenceAttachments-js" , "600", "350", "influenceAttachments", "json", $influenceAttachmentsJson);
		$influenceWeaponsChart = new FusionCharts("mscombi2d", "influenceWeapons-js" , "600", "350", "influenceWeapons", "json", $influenceWeaponsJson);
		$influenceRelicWeaponsChart = new FusionCharts("mscombi2d", "influenceRelicWeapons-js" , "600", "350", "influenceRelicWeapons", "json", $influenceRelicWeaponsJson);
		$influenceRelicsChart = new FusionCharts("mscombi2d", "influenceRelics-js" , "600", "350", "influenceRelics", "json", $influenceRelicsJson);
		$influenceCursedRelicsChart = new FusionCharts("mscombi2d", "influenceCursedRelics-js" , "600", "350", "influenceCursedRelics", "json", $influenceCursedRelicsJson);
		$influenceCursesChart = new FusionCharts("mscombi2d", "influenceCurses-js" , "600", "350", "influenceCurses", "json", $influenceCursesJson);
		$influenceBuffsChart = new FusionCharts("mscombi2d", "influenceBuffs-js" , "600", "350", "influenceBuffs", "json", $influenceBuffsJson);
		$influenceDebuffsChart = new FusionCharts("mscombi2d", "influenceDebuffs-js" , "600", "350", "influenceDebuffs", "json", $influenceDebuffsJson);
		$influenceInfluenceChart = new FusionCharts("mscombi2d", "influenceInfluence-js" , "600", "350", "influenceInfluence", "json", $influenceInfluenceJson);
		$influenceOffenseChart = new FusionCharts("mscombi2d", "influenceOffense-js" , "600", "350", "influenceOffense", "json", $influenceOffenseJson);
		$influenceDefenseChart = new FusionCharts("mscombi2d", "influenceDefense-js" , "600", "350", "influenceDefense", "json", $influenceDefenseJson);
		
// render charts

		//deck
		$deckTotalCardsChart->render();
		$deckRemovalChart->render();
		$deckReactiveChart->render();
		$deckCardCyclingChart->render();
		$deckManipulationChart->render();
		$deckUnitsChart->render();
		$deckSpellsChart->render();
		$deckAttachmentsChart->render();
		$deckWeaponsChart->render();
		$deckRelicWeaponsChart->render();
		$deckRelicsChart->render();
		$deckCursedRelicsChart->render();
		$deckCursesChart->render();
		$deckDebuffsChart->render();
		$deckBuffsChart->render();
		$deckInfluenceChart->render();
		$deckOffenseChart->render();
		$deckDefenseChart->render();
		
		// faction
		$factionTotalCardsChart->render();
		$factionRemovalChart->render();
		$factionReactiveChart->render();
		$factionCardCyclingChart->render();
		$factionManipulationChart->render();
		$factionUnitsChart->render();
		$factionSpellsChart->render();
		$factionAttachmentsChart->render();
		$factionWeaponsChart->render();
		$factionRelicWeaponsChart->render();
		$factionRelicsChart->render();
		$factionCursedRelicsChart->render();
		$factionCursesChart->render();
		$factionDebuffsChart->render();
		$factionBuffsChart->render();
		$factionInfluenceChart->render();
		$factionOffenseChart->render();
		$factionDefenseChart->render();
		
		// influence
		$influenceTotalCardsChart->render();
		$influenceRemovalChart->render();
		$influenceReactiveChart->render();
		$influenceCardCyclingChart->render();
		$influenceManipulationChart->render();
		$influenceUnitsChart->render();
		$influenceSpellsChart->render();
		$influenceAttachmentsChart->render();
		$influenceWeaponsChart->render();
		$influenceRelicWeaponsChart->render();
		$influenceRelicsChart->render();
		$influenceCursedRelicsChart->render();
		$influenceCursesChart->render();
		$influenceDebuffsChart->render();
		$influenceBuffsChart->render();
		$influenceInfluenceChart->render();
		$influenceOffenseChart->render();
		$influenceDefenseChart->render();
	
?>
