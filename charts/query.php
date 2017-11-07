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
	
// declare Cycle arrays			
	$fireCycle=array();
	$timeCycle=array();
	$justiceCycle=array();
	$primalCycle=array();
	$shadowCycle=array();
	$allCycle=array();
	$noneCycle=array();
	$monofireCycle=array();
	$monotimeCycle=array();
	$monojusticeCycle=array();
	$monoprimalCycle=array();
	$monoshadowCycle=array();
	$argenportCycle=array();
	$combreiCycle=array();
	$elysianCycle=array();
	$felnCycle=array();
	$hooruCycle=array();
	$praxisCycle=array();
	$rakanoCycle=array();
	$skycragCycle=array();
	$stonescarCycle=array();
	$xenanCycle=array();
	$monofiredeckCycle=array();
	$monotimedeckCycle=array();
	$monojusticedeckCycle=array();
	$monoprimaldeckCycle=array();
	$monoshadowdeckCycle=array();
	$argenportdeckCycle=array();
	$combreideckCycle=array();
	$elysiandeckCycle=array();
	$felndeckCycle=array();
	$hoorudeckCycle=array();
	$praxisdeckCycle=array();
	$rakanodeckCycle=array();
	$skycragdeckCycle=array();
	$stonescardeckCycle=array();
	$xenandeckCycle=array();
	
// declare Draw arrays			
	$fireDraw=array();
	$timeDraw=array();
	$justiceDraw=array();
	$primalDraw=array();
	$shadowDraw=array();
	$allDraw=array();
	$noneDraw=array();
	$monofireDraw=array();
	$monotimeDraw=array();
	$monojusticeDraw=array();
	$monoprimalDraw=array();
	$monoshadowDraw=array();
	$argenportDraw=array();
	$combreiDraw=array();
	$elysianDraw=array();
	$felnDraw=array();
	$hooruDraw=array();
	$praxisDraw=array();
	$rakanoDraw=array();
	$skycragDraw=array();
	$stonescarDraw=array();
	$xenanDraw=array();
	$monofiredeckDraw=array();
	$monotimedeckDraw=array();
	$monojusticedeckDraw=array();
	$monoprimaldeckDraw=array();
	$monoshadowdeckDraw=array();
	$argenportdeckDraw=array();
	$combreideckDraw=array();
	$elysiandeckDraw=array();
	$felndeckDraw=array();
	$hoorudeckDraw=array();
	$praxisdeckDraw=array();
	$rakanodeckDraw=array();
	$skycragdeckDraw=array();
	$stonescardeckDraw=array();
	$xenandeckDraw=array();
	
// declare Manipulate arrays			
	$fireManipulate=array();
	$timeManipulate=array();
	$justiceManipulate=array();
	$primalManipulate=array();
	$shadowManipulate=array();
	$allManipulate=array();
	$noneManipulate=array();
	$monofireManipulate=array();
	$monotimeManipulate=array();
	$monojusticeManipulate=array();
	$monoprimalManipulate=array();
	$monoshadowManipulate=array();
	$argenportManipulate=array();
	$combreiManipulate=array();
	$elysianManipulate=array();
	$felnManipulate=array();
	$hooruManipulate=array();
	$praxisManipulate=array();
	$rakanoManipulate=array();
	$skycragManipulate=array();
	$stonescarManipulate=array();
	$xenanManipulate=array();
	$monofiredeckManipulate=array();
	$monotimedeckManipulate=array();
	$monojusticedeckManipulate=array();
	$monoprimaldeckManipulate=array();
	$monoshadowdeckManipulate=array();
	$argenportdeckManipulate=array();
	$combreideckManipulate=array();
	$elysiandeckManipulate=array();
	$felndeckManipulate=array();
	$hoorudeckManipulate=array();
	$praxisdeckManipulate=array();
	$rakanodeckManipulate=array();
	$skycragdeckManipulate=array();
	$stonescardeckManipulate=array();
	$xenandeckManipulate=array();
	
// declare Discard arrays			
	$fireDiscard=array();
	$timeDiscard=array();
	$justiceDiscard=array();
	$primalDiscard=array();
	$shadowDiscard=array();
	$allDiscard=array();
	$noneDiscard=array();
	$monofireDiscard=array();
	$monotimeDiscard=array();
	$monojusticeDiscard=array();
	$monoprimalDiscard=array();
	$monoshadowDiscard=array();
	$argenportDiscard=array();
	$combreiDiscard=array();
	$elysianDiscard=array();
	$felnDiscard=array();
	$hooruDiscard=array();
	$praxisDiscard=array();
	$rakanoDiscard=array();
	$skycragDiscard=array();
	$stonescarDiscard=array();
	$xenanDiscard=array();
	$monofiredeckDiscard=array();
	$monotimedeckDiscard=array();
	$monojusticedeckDiscard=array();
	$monoprimaldeckDiscard=array();
	$monoshadowdeckDiscard=array();
	$argenportdeckDiscard=array();
	$combreideckDiscard=array();
	$elysiandeckDiscard=array();
	$felndeckDiscard=array();
	$hoorudeckDiscard=array();
	$praxisdeckDiscard=array();
	$rakanodeckDiscard=array();
	$skycragdeckDiscard=array();
	$stonescardeckDiscard=array();
	$xenandeckDiscard=array();
	
// declare Mill arrays			
	$fireMill=array();
	$timeMill=array();
	$justiceMill=array();
	$primalMill=array();
	$shadowMill=array();
	$allMill=array();
	$noneMill=array();
	$monofireMill=array();
	$monotimeMill=array();
	$monojusticeMill=array();
	$monoprimalMill=array();
	$monoshadowMill=array();
	$argenportMill=array();
	$combreiMill=array();
	$elysianMill=array();
	$felnMill=array();
	$hooruMill=array();
	$praxisMill=array();
	$rakanoMill=array();
	$skycragMill=array();
	$stonescarMill=array();
	$xenanMill=array();
	$monofiredeckMill=array();
	$monotimedeckMill=array();
	$monojusticedeckMill=array();
	$monoprimaldeckMill=array();
	$monoshadowdeckMill=array();
	$argenportdeckMill=array();
	$combreideckMill=array();
	$elysiandeckMill=array();
	$felndeckMill=array();
	$hoorudeckMill=array();
	$praxisdeckMill=array();
	$rakanodeckMill=array();
	$skycragdeckMill=array();
	$stonescardeckMill=array();
	$xenandeckMill=array();
	


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
			array_push($fireCycle, array("value" => $fireRow["14"]));
			array_push($fireManipulate, array("value" => $fireRow["15"]));
			array_push($fireDraw, array("value" => $fireRow["16"]));
			array_push($fireDiscard, array("value" => $fireRow["17"]));
			array_push($fireMill, array("value" => $fireRow["18"]));
			array_push($fireDebuff, array("value" => $fireRow["19"]));
			array_push($fireBuff, array("value" => $fireRow["20"]));
			array_push($fireInfluence, array("value" => $fireRow["21"]));
			array_push($fireOffense, array("value" => $fireRow["22"]));
			array_push($fireDefense, array("value" => $fireRow["23"]));
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
			array_push($timeCycle, array("value" => $timeRow["14"]));
			array_push($timeManipulate, array("value" => $timeRow["15"]));
			array_push($timeDraw, array("value" => $timeRow["16"]));
			array_push($timeDiscard, array("value" => $timeRow["17"]));
			array_push($timeMill, array("value" => $timeRow["18"]));
			array_push($timeDebuff, array("value" => $timeRow["19"]));
			array_push($timeBuff, array("value" => $timeRow["20"]));
			array_push($timeInfluence, array("value" => $timeRow["21"]));
			array_push($timeOffense, array("value" => $timeRow["22"]));
			array_push($timeDefense, array("value" => $timeRow["23"]));
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
			array_push($justiceCycle, array("value" => $justiceRow["14"]));
			array_push($justiceManipulate, array("value" => $justiceRow["15"]));
			array_push($justiceDraw, array("value" => $justiceRow["16"]));
			array_push($justiceDiscard, array("value" => $justiceRow["17"]));
			array_push($justiceMill, array("value" => $justiceRow["18"]));
			array_push($justiceDebuff, array("value" => $justiceRow["19"]));
			array_push($justiceBuff, array("value" => $justiceRow["20"]));
			array_push($justiceInfluence, array("value" => $justiceRow["21"]));
			array_push($justiceOffense, array("value" => $justiceRow["22"]));
			array_push($justiceDefense, array("value" => $justiceRow["23"]));
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
			array_push($primalCycle, array("value" => $primalRow["14"]));
			array_push($primalManipulate, array("value" => $primalRow["15"]));
			array_push($primalDraw, array("value" => $primalRow["16"]));
			array_push($primalDiscard, array("value" => $primalRow["17"]));
			array_push($primalMill, array("value" => $primalRow["18"]));
			array_push($primalDebuff, array("value" => $primalRow["19"]));
			array_push($primalBuff, array("value" => $primalRow["20"]));
			array_push($primalInfluence, array("value" => $primalRow["21"]));
			array_push($primalOffense, array("value" => $primalRow["22"]));
			array_push($primalDefense, array("value" => $primalRow["23"]));
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
			array_push($shadowCycle, array("value" => $shadowRow["14"]));
			array_push($shadowManipulate, array("value" => $shadowRow["15"]));
			array_push($shadowDraw, array("value" => $shadowRow["16"]));
			array_push($shadowDiscard, array("value" => $shadowRow["17"]));
			array_push($shadowMill, array("value" => $shadowRow["18"]));
			array_push($shadowDebuff, array("value" => $shadowRow["19"]));
			array_push($shadowBuff, array("value" => $shadowRow["20"]));
			array_push($shadowInfluence, array("value" => $shadowRow["21"]));
			array_push($shadowOffense, array("value" => $shadowRow["22"]));
			array_push($shadowDefense, array("value" => $shadowRow["23"]));
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
			array_push($allCycle, array("value" => $allRow["14"]));
			array_push($allManipulate, array("value" => $allRow["15"]));
			array_push($allDraw, array("value" => $allRow["16"]));
			array_push($allDiscard, array("value" => $allRow["17"]));
			array_push($allMill, array("value" => $allRow["18"]));
			array_push($allDebuff, array("value" => $allRow["19"]));
			array_push($allBuff, array("value" => $allRow["20"]));
			array_push($allInfluence, array("value" => $allRow["21"]));
			array_push($allOffense, array("value" => $allRow["22"]));
			array_push($allDefense, array("value" => $allRow["23"]));
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
			array_push($noneCycle, array("value" => $noneRow["14"]));
			array_push($noneManipulate, array("value" => $noneRow["15"]));
			array_push($noneDraw, array("value" => $noneRow["16"]));
			array_push($noneDiscard, array("value" => $noneRow["17"]));
			array_push($noneMill, array("value" => $noneRow["18"]));
			array_push($noneDebuff, array("value" => $noneRow["19"]));
			array_push($noneBuff, array("value" => $noneRow["20"]));
			array_push($noneInfluence, array("value" => $noneRow["21"]));
			array_push($noneOffense, array("value" => $noneRow["22"]));
			array_push($noneDefense, array("value" => $noneRow["23"]));
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
			array_push($monofireCycle, array("value" => $monofireRow["14"]));
			array_push($monofireManipulate, array("value" => $monofireRow["15"]));
			array_push($monofireDraw, array("value" => $monofireRow["16"]));
			array_push($monofireDiscard, array("value" => $monofireRow["17"]));
			array_push($monofireMill, array("value" => $monofireRow["18"]));
			array_push($monofireDebuff, array("value" => $monofireRow["19"]));
			array_push($monofireBuff, array("value" => $monofireRow["20"]));
			array_push($monofireInfluence, array("value" => $monofireRow["21"]));
			array_push($monofireOffense, array("value" => $monofireRow["22"]));
			array_push($monofireDefense, array("value" => $monofireRow["23"]));
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
			array_push($monotimeCycle, array("value" => $monotimeRow["14"]));
			array_push($monotimeManipulate, array("value" => $monotimeRow["15"]));
			array_push($monotimeDraw, array("value" => $monotimeRow["16"]));
			array_push($monotimeDiscard, array("value" => $monotimeRow["17"]));
			array_push($monotimeMill, array("value" => $monotimeRow["18"]));
			array_push($monotimeDebuff, array("value" => $monotimeRow["19"]));
			array_push($monotimeBuff, array("value" => $monotimeRow["20"]));
			array_push($monotimeInfluence, array("value" => $monotimeRow["21"]));
			array_push($monotimeOffense, array("value" => $monotimeRow["22"]));
			array_push($monotimeDefense, array("value" => $monotimeRow["23"]));
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
			array_push($monojusticeCycle, array("value" => $monojusticeRow["14"]));
			array_push($monojusticeManipulate, array("value" => $monojusticeRow["15"]));
			array_push($monojusticeDraw, array("value" => $monojusticeRow["16"]));
			array_push($monojusticeDiscard, array("value" => $monojusticeRow["17"]));
			array_push($monojusticeMill, array("value" => $monojusticeRow["18"]));
			array_push($monojusticeDebuff, array("value" => $monojusticeRow["19"]));
			array_push($monojusticeBuff, array("value" => $monojusticeRow["20"]));
			array_push($monojusticeInfluence, array("value" => $monojusticeRow["21"]));
			array_push($monojusticeOffense, array("value" => $monojusticeRow["22"]));
			array_push($monojusticeDefense, array("value" => $monojusticeRow["23"]));
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
			array_push($monoprimalCycle, array("value" => $monoprimalRow["14"]));
			array_push($monoprimalManipulate, array("value" => $monoprimalRow["15"]));
			array_push($monoprimalDraw, array("value" => $monoprimalRow["16"]));
			array_push($monoprimalDiscard, array("value" => $monoprimalRow["17"]));
			array_push($monoprimalMill, array("value" => $monoprimalRow["18"]));
			array_push($monoprimalDebuff, array("value" => $monoprimalRow["19"]));
			array_push($monoprimalBuff, array("value" => $monoprimalRow["20"]));
			array_push($monoprimalInfluence, array("value" => $monoprimalRow["21"]));
			array_push($monoprimalOffense, array("value" => $monoprimalRow["22"]));
			array_push($monoprimalDefense, array("value" => $monoprimalRow["23"]));
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
			array_push($monoshadowCycle, array("value" => $monoshadowRow["14"]));
			array_push($monoshadowManipulate, array("value" => $monoshadowRow["15"]));
			array_push($monoshadowDraw, array("value" => $monoshadowRow["16"]));
			array_push($monoshadowDiscard, array("value" => $monoshadowRow["17"]));
			array_push($monoshadowMill, array("value" => $monoshadowRow["18"]));
			array_push($monoshadowDebuff, array("value" => $monoshadowRow["19"]));
			array_push($monoshadowBuff, array("value" => $monoshadowRow["20"]));
			array_push($monoshadowInfluence, array("value" => $monoshadowRow["21"]));
			array_push($monoshadowOffense, array("value" => $monoshadowRow["22"]));
			array_push($monoshadowDefense, array("value" => $monoshadowRow["23"]));
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
			array_push($argenportCycle, array("value" => $argenportRow["14"]));
			array_push($argenportManipulate, array("value" => $argenportRow["15"]));
			array_push($argenportDraw, array("value" => $argenportRow["16"]));
			array_push($argenportDiscard, array("value" => $argenportRow["17"]));
			array_push($argenportMill, array("value" => $argenportRow["18"]));
			array_push($argenportDebuff, array("value" => $argenportRow["19"]));
			array_push($argenportBuff, array("value" => $argenportRow["20"]));
			array_push($argenportInfluence, array("value" => $argenportRow["21"]));
			array_push($argenportOffense, array("value" => $argenportRow["22"]));
			array_push($argenportDefense, array("value" => $argenportRow["23"]));
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
			array_push($combreiCycle, array("value" => $combreiRow["14"]));
			array_push($combreiManipulate, array("value" => $combreiRow["15"]));
			array_push($combreiDraw, array("value" => $combreiRow["16"]));
			array_push($combreiDiscard, array("value" => $combreiRow["17"]));
			array_push($combreiMill, array("value" => $combreiRow["18"]));
			array_push($combreiDebuff, array("value" => $combreiRow["19"]));
			array_push($combreiBuff, array("value" => $combreiRow["20"]));
			array_push($combreiInfluence, array("value" => $combreiRow["21"]));
			array_push($combreiOffense, array("value" => $combreiRow["22"]));
			array_push($combreiDefense, array("value" => $combreiRow["23"]));
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
			array_push($elysianCycle, array("value" => $elysianRow["14"]));
			array_push($elysianManipulate, array("value" => $elysianRow["15"]));
			array_push($elysianDraw, array("value" => $elysianRow["16"]));
			array_push($elysianDiscard, array("value" => $elysianRow["17"]));
			array_push($elysianMill, array("value" => $elysianRow["18"]));
			array_push($elysianDebuff, array("value" => $elysianRow["19"]));
			array_push($elysianBuff, array("value" => $elysianRow["20"]));
			array_push($elysianInfluence, array("value" => $elysianRow["21"]));
			array_push($elysianOffense, array("value" => $elysianRow["22"]));
			array_push($elysianDefense, array("value" => $elysianRow["23"]));
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
			array_push($felnCycle, array("value" => $felnRow["14"]));
			array_push($felnManipulate, array("value" => $felnRow["15"]));
			array_push($felnDraw, array("value" => $felnRow["16"]));
			array_push($felnDiscard, array("value" => $felnRow["17"]));
			array_push($felnMill, array("value" => $felnRow["18"]));
			array_push($felnDebuff, array("value" => $felnRow["19"]));
			array_push($felnBuff, array("value" => $felnRow["20"]));
			array_push($felnInfluence, array("value" => $felnRow["21"]));
			array_push($felnOffense, array("value" => $felnRow["22"]));
			array_push($felnDefense, array("value" => $felnRow["23"]));
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
			array_push($hooruCycle, array("value" => $hooruRow["14"]));
			array_push($hooruManipulate, array("value" => $hooruRow["15"]));
			array_push($hooruDraw, array("value" => $hooruRow["16"]));
			array_push($hooruDiscard, array("value" => $hooruRow["17"]));
			array_push($hooruMill, array("value" => $hooruRow["18"]));
			array_push($hooruDebuff, array("value" => $hooruRow["19"]));
			array_push($hooruBuff, array("value" => $hooruRow["20"]));
			array_push($hooruInfluence, array("value" => $hooruRow["21"]));
			array_push($hooruOffense, array("value" => $hooruRow["22"]));
			array_push($hooruDefense, array("value" => $hooruRow["23"]));
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
			array_push($praxisCycle, array("value" => $praxisRow["14"]));
			array_push($praxisManipulate, array("value" => $praxisRow["15"]));
			array_push($praxisDraw, array("value" => $praxisRow["16"]));
			array_push($praxisDiscard, array("value" => $praxisRow["17"]));
			array_push($praxisMill, array("value" => $praxisRow["18"]));
			array_push($praxisDebuff, array("value" => $praxisRow["19"]));
			array_push($praxisBuff, array("value" => $praxisRow["20"]));
			array_push($praxisInfluence, array("value" => $praxisRow["21"]));
			array_push($praxisOffense, array("value" => $praxisRow["22"]));
			array_push($praxisDefense, array("value" => $praxisRow["23"]));
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
			array_push($rakanoCycle, array("value" => $rakanoRow["14"]));
			array_push($rakanoManipulate, array("value" => $rakanoRow["15"]));
			array_push($rakanoDraw, array("value" => $rakanoRow["16"]));
			array_push($rakanoDiscard, array("value" => $rakanoRow["17"]));
			array_push($rakanoMill, array("value" => $rakanoRow["18"]));
			array_push($rakanoDebuff, array("value" => $rakanoRow["19"]));
			array_push($rakanoBuff, array("value" => $rakanoRow["20"]));
			array_push($rakanoInfluence, array("value" => $rakanoRow["21"]));
			array_push($rakanoOffense, array("value" => $rakanoRow["22"]));
			array_push($rakanoDefense, array("value" => $rakanoRow["23"]));
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
			array_push($skycragCycle, array("value" => $skycragRow["14"]));
			array_push($skycragManipulate, array("value" => $skycragRow["15"]));
			array_push($skycragDraw, array("value" => $skycragRow["16"]));
			array_push($skycragDiscard, array("value" => $skycragRow["17"]));
			array_push($skycragMill, array("value" => $skycragRow["18"]));
			array_push($skycragDebuff, array("value" => $skycragRow["19"]));
			array_push($skycragBuff, array("value" => $skycragRow["20"]));
			array_push($skycragInfluence, array("value" => $skycragRow["21"]));
			array_push($skycragOffense, array("value" => $skycragRow["22"]));
			array_push($skycragDefense, array("value" => $skycragRow["23"]));
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
			array_push($stonescarCycle, array("value" => $stonescarRow["14"]));
			array_push($stonescarManipulate, array("value" => $stonescarRow["15"]));
			array_push($stonescarDraw, array("value" => $stonescarRow["16"]));
			array_push($stonescarDiscard, array("value" => $stonescarRow["17"]));
			array_push($stonescarMill, array("value" => $stonescarRow["18"]));
			array_push($stonescarDebuff, array("value" => $stonescarRow["19"]));
			array_push($stonescarBuff, array("value" => $stonescarRow["20"]));
			array_push($stonescarInfluence, array("value" => $stonescarRow["21"]));
			array_push($stonescarOffense, array("value" => $stonescarRow["22"]));
			array_push($stonescarDefense, array("value" => $stonescarRow["23"]));
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
			array_push($xenanCycle, array("value" => $xenanRow["14"]));
			array_push($xenanManipulate, array("value" => $xenanRow["15"]));
			array_push($xenanDraw, array("value" => $xenanRow["16"]));
			array_push($xenanDiscard, array("value" => $xenanRow["17"]));
			array_push($xenanMill, array("value" => $xenanRow["18"]));
			array_push($xenanDebuff, array("value" => $xenanRow["19"]));
			array_push($xenanBuff, array("value" => $xenanRow["20"]));
			array_push($xenanInfluence, array("value" => $xenanRow["21"]));
			array_push($xenanOffense, array("value" => $xenanRow["22"]));
			array_push($xenanDefense, array("value" => $xenanRow["23"]));
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
			array_push($monofiredeckCycle, array("value" => $monofiredeckRow["14"]));
			array_push($monofiredeckManipulate, array("value" => $monofiredeckRow["15"]));
			array_push($monofiredeckDraw, array("value" => $monofiredeckRow["16"]));
			array_push($monofiredeckDiscard, array("value" => $monofiredeckRow["17"]));
			array_push($monofiredeckMill, array("value" => $monofiredeckRow["18"]));
			array_push($monofiredeckDebuff, array("value" => $monofiredeckRow["19"]));
			array_push($monofiredeckBuff, array("value" => $monofiredeckRow["20"]));
			array_push($monofiredeckInfluence, array("value" => $monofiredeckRow["21"]));
			array_push($monofiredeckOffense, array("value" => $monofiredeckRow["22"]));
			array_push($monofiredeckDefense, array("value" => $monofiredeckRow["23"]));
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
			array_push($monotimedeckCycle, array("value" => $monotimedeckRow["14"]));
			array_push($monotimedeckManipulate, array("value" => $monotimedeckRow["15"]));
			array_push($monotimedeckDraw, array("value" => $monotimedeckRow["16"]));
			array_push($monotimedeckDiscard, array("value" => $monotimedeckRow["17"]));
			array_push($monotimedeckMill, array("value" => $monotimedeckRow["18"]));
			array_push($monotimedeckDebuff, array("value" => $monotimedeckRow["19"]));
			array_push($monotimedeckBuff, array("value" => $monotimedeckRow["20"]));
			array_push($monotimedeckInfluence, array("value" => $monotimedeckRow["21"]));
			array_push($monotimedeckOffense, array("value" => $monotimedeckRow["22"]));
			array_push($monotimedeckDefense, array("value" => $monotimedeckRow["23"]));
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
			array_push($monojusticedeckCycle, array("value" => $monojusticedeckRow["14"]));
			array_push($monojusticedeckManipulate, array("value" => $monojusticedeckRow["15"]));
			array_push($monojusticedeckDraw, array("value" => $monojusticedeckRow["16"]));
			array_push($monojusticedeckDiscard, array("value" => $monojusticedeckRow["17"]));
			array_push($monojusticedeckMill, array("value" => $monojusticedeckRow["18"]));
			array_push($monojusticedeckDebuff, array("value" => $monojusticedeckRow["19"]));
			array_push($monojusticedeckBuff, array("value" => $monojusticedeckRow["20"]));
			array_push($monojusticedeckInfluence, array("value" => $monojusticedeckRow["21"]));
			array_push($monojusticedeckOffense, array("value" => $monojusticedeckRow["22"]));
			array_push($monojusticedeckDefense, array("value" => $monojusticedeckRow["23"]));
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
			array_push($monoprimaldeckCycle, array("value" => $monoprimaldeckRow["14"]));
			array_push($monoprimaldeckManipulate, array("value" => $monoprimaldeckRow["15"]));
			array_push($monoprimaldeckDraw, array("value" => $monoprimaldeckRow["16"]));
			array_push($monoprimaldeckDiscard, array("value" => $monoprimaldeckRow["17"]));
			array_push($monoprimaldeckMill, array("value" => $monoprimaldeckRow["18"]));
			array_push($monoprimaldeckDebuff, array("value" => $monoprimaldeckRow["19"]));
			array_push($monoprimaldeckBuff, array("value" => $monoprimaldeckRow["20"]));
			array_push($monoprimaldeckInfluence, array("value" => $monoprimaldeckRow["21"]));
			array_push($monoprimaldeckOffense, array("value" => $monoprimaldeckRow["22"]));
			array_push($monoprimaldeckDefense, array("value" => $monoprimaldeckRow["23"]));
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
			array_push($monoshadowdeckCycle, array("value" => $monoshadowdeckRow["14"]));
			array_push($monoshadowdeckManipulate, array("value" => $monoshadowdeckRow["15"]));
			array_push($monoshadowdeckDraw, array("value" => $monoshadowdeckRow["16"]));
			array_push($monoshadowdeckDiscard, array("value" => $monoshadowdeckRow["17"]));
			array_push($monoshadowdeckMill, array("value" => $monoshadowdeckRow["18"]));
			array_push($monoshadowdeckDebuff, array("value" => $monoshadowdeckRow["19"]));
			array_push($monoshadowdeckBuff, array("value" => $monoshadowdeckRow["20"]));
			array_push($monoshadowdeckInfluence, array("value" => $monoshadowdeckRow["21"]));
			array_push($monoshadowdeckOffense, array("value" => $monoshadowdeckRow["22"]));
			array_push($monoshadowdeckDefense, array("value" => $monoshadowdeckRow["23"]));
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
			array_push($argenportdeckCycle, array("value" => $argenportdeckRow["14"]));
			array_push($argenportdeckManipulate, array("value" => $argenportdeckRow["15"]));
			array_push($argenportdeckDraw, array("value" => $argenportdeckRow["16"]));
			array_push($argenportdeckDiscard, array("value" => $argenportdeckRow["17"]));
			array_push($argenportdeckMill, array("value" => $argenportdeckRow["18"]));
			array_push($argenportdeckDebuff, array("value" => $argenportdeckRow["19"]));
			array_push($argenportdeckBuff, array("value" => $argenportdeckRow["20"]));
			array_push($argenportdeckInfluence, array("value" => $argenportdeckRow["21"]));
			array_push($argenportdeckOffense, array("value" => $argenportdeckRow["22"]));
			array_push($argenportdeckDefense, array("value" => $argenportdeckRow["23"]));
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
			array_push($combreideckCycle, array("value" => $combreideckRow["14"]));
			array_push($combreideckManipulate, array("value" => $combreideckRow["15"]));
			array_push($combreideckDraw, array("value" => $combreideckRow["16"]));
			array_push($combreideckDiscard, array("value" => $combreideckRow["17"]));
			array_push($combreideckMill, array("value" => $combreideckRow["18"]));
			array_push($combreideckDebuff, array("value" => $combreideckRow["19"]));
			array_push($combreideckBuff, array("value" => $combreideckRow["20"]));
			array_push($combreideckInfluence, array("value" => $combreideckRow["21"]));
			array_push($combreideckOffense, array("value" => $combreideckRow["22"]));
			array_push($combreideckDefense, array("value" => $combreideckRow["23"]));
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
			array_push($elysiandeckCycle, array("value" => $elysiandeckRow["14"]));
			array_push($elysiandeckManipulate, array("value" => $elysiandeckRow["15"]));
			array_push($elysiandeckDraw, array("value" => $elysiandeckRow["16"]));
			array_push($elysiandeckDiscard, array("value" => $elysiandeckRow["17"]));
			array_push($elysiandeckMill, array("value" => $elysiandeckRow["18"]));
			array_push($elysiandeckDebuff, array("value" => $elysiandeckRow["19"]));
			array_push($elysiandeckBuff, array("value" => $elysiandeckRow["20"]));
			array_push($elysiandeckInfluence, array("value" => $elysiandeckRow["21"]));
			array_push($elysiandeckOffense, array("value" => $elysiandeckRow["22"]));
			array_push($elysiandeckDefense, array("value" => $elysiandeckRow["23"]));
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
			array_push($felndeckCycle, array("value" => $felndeckRow["14"]));
			array_push($felndeckManipulate, array("value" => $felndeckRow["15"]));
			array_push($felndeckDraw, array("value" => $felndeckRow["16"]));
			array_push($felndeckDiscard, array("value" => $felndeckRow["17"]));
			array_push($felndeckMill, array("value" => $felndeckRow["18"]));
			array_push($felndeckDebuff, array("value" => $felndeckRow["19"]));
			array_push($felndeckBuff, array("value" => $felndeckRow["20"]));
			array_push($felndeckInfluence, array("value" => $felndeckRow["21"]));
			array_push($felndeckOffense, array("value" => $felndeckRow["22"]));
			array_push($felndeckDefense, array("value" => $felndeckRow["23"]));
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
			array_push($hoorudeckCycle, array("value" => $hoorudeckRow["14"]));
			array_push($hoorudeckManipulate, array("value" => $hoorudeckRow["15"]));
			array_push($hoorudeckDraw, array("value" => $hoorudeckRow["16"]));
			array_push($hoorudeckDiscard, array("value" => $hoorudeckRow["17"]));
			array_push($hoorudeckMill, array("value" => $hoorudeckRow["18"]));
			array_push($hoorudeckDebuff, array("value" => $hoorudeckRow["19"]));
			array_push($hoorudeckBuff, array("value" => $hoorudeckRow["20"]));
			array_push($hoorudeckInfluence, array("value" => $hoorudeckRow["21"]));
			array_push($hoorudeckOffense, array("value" => $hoorudeckRow["22"]));
			array_push($hoorudeckDefense, array("value" => $hoorudeckRow["23"]));
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
			array_push($praxisdeckCycle, array("value" => $praxisdeckRow["14"]));
			array_push($praxisdeckManipulate, array("value" => $praxisdeckRow["15"]));
			array_push($praxisdeckDraw, array("value" => $praxisdeckRow["16"]));
			array_push($praxisdeckDiscard, array("value" => $praxisdeckRow["17"]));
			array_push($praxisdeckMill, array("value" => $praxisdeckRow["18"]));
			array_push($praxisdeckDebuff, array("value" => $praxisdeckRow["19"]));
			array_push($praxisdeckBuff, array("value" => $praxisdeckRow["20"]));
			array_push($praxisdeckInfluence, array("value" => $praxisdeckRow["21"]));
			array_push($praxisdeckOffense, array("value" => $praxisdeckRow["22"]));
			array_push($praxisdeckDefense, array("value" => $praxisdeckRow["23"]));
	}
	
	while($rakanodeckRow = mysqli_fetch_array($rakanodeckResult)){
			array_push($rakanodeckTotalCards, array("value" => $rakanodeckRow["3"]));
			array_push($rakanodeckUnits, array("value" => $rakanodeckRow["4"]));
			array_push($rakanodeckSpells, array("value" => $rakanodeckRow["5"]));
			array_push($rakanodeckAttachments, array("value" => $rakanodeckRow["6"]));
			array_push($rakanodeckWeapons, array("value" => $rakanodeckRow["7"]));
			array_push($rakanodeckRelicWeapons, array("value" => $rakanodeckRow["8"]));
			array_push($rakanodeckRelics, array("value" => $rakanodeckRow["9"]));
			array_push($rakanodeckCursedRelics, array("value" => $rakanodeckRow["10"]));
			array_push($rakanodeckCurses, array("value" => $rakanodeckRow["11"]));
			array_push($rakanodeckRemoval, array("value" => $rakanodeckRow["12"]));
			array_push($rakanodeckReactive, array("value" => $rakanodeckRow["13"]));
			array_push($rakanodeckCycle, array("value" => $rakanodeckRow["14"]));
			array_push($rakanodeckManipulate, array("value" => $rakanodeckRow["15"]));
			array_push($rakanodeckDraw, array("value" => $rakanodeckRow["16"]));
			array_push($rakanodeckDiscard, array("value" => $rakanodeckRow["17"]));
			array_push($rakanodeckMill, array("value" => $rakanodeckRow["18"]));
			array_push($rakanodeckDebuff, array("value" => $rakanodeckRow["19"]));
			array_push($rakanodeckBuff, array("value" => $rakanodeckRow["20"]));
			array_push($rakanodeckInfluence, array("value" => $rakanodeckRow["21"]));
			array_push($rakanodeckOffense, array("value" => $rakanodeckRow["22"]));
			array_push($rakanodeckDefense, array("value" => $rakanodeckRow["23"]));
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
			array_push($skycragdeckCycle, array("value" => $skycragdeckRow["14"]));
			array_push($skycragdeckManipulate, array("value" => $skycragdeckRow["15"]));
			array_push($skycragdeckDraw, array("value" => $skycragdeckRow["16"]));
			array_push($skycragdeckDiscard, array("value" => $skycragdeckRow["17"]));
			array_push($skycragdeckMill, array("value" => $skycragdeckRow["18"]));
			array_push($skycragdeckDebuff, array("value" => $skycragdeckRow["19"]));
			array_push($skycragdeckBuff, array("value" => $skycragdeckRow["20"]));
			array_push($skycragdeckInfluence, array("value" => $skycragdeckRow["21"]));
			array_push($skycragdeckOffense, array("value" => $skycragdeckRow["22"]));
			array_push($skycragdeckDefense, array("value" => $skycragdeckRow["23"]));
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
			array_push($stonescardeckCycle, array("value" => $stonescardeckRow["14"]));
			array_push($stonescardeckManipulate, array("value" => $stonescardeckRow["15"]));
			array_push($stonescardeckDraw, array("value" => $stonescardeckRow["16"]));
			array_push($stonescardeckDiscard, array("value" => $stonescardeckRow["17"]));
			array_push($stonescardeckMill, array("value" => $stonescardeckRow["18"]));
			array_push($stonescardeckDebuff, array("value" => $stonescardeckRow["19"]));
			array_push($stonescardeckBuff, array("value" => $stonescardeckRow["20"]));
			array_push($stonescardeckInfluence, array("value" => $stonescardeckRow["21"]));
			array_push($stonescardeckOffense, array("value" => $stonescardeckRow["22"]));
			array_push($stonescardeckDefense, array("value" => $stonescardeckRow["23"]));
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
			array_push($xenandeckCycle, array("value" => $xenandeckRow["14"]));
			array_push($xenandeckManipulate, array("value" => $xenandeckRow["15"]));
			array_push($xenandeckDraw, array("value" => $xenandeckRow["16"]));
			array_push($xenandeckDiscard, array("value" => $xenandeckRow["17"]));
			array_push($xenandeckMill, array("value" => $xenandeckRow["18"]));
			array_push($xenandeckDebuff, array("value" => $xenandeckRow["19"]));
			array_push($xenandeckBuff, array("value" => $xenandeckRow["20"]));
			array_push($xenandeckInfluence, array("value" => $xenandeckRow["21"]));
			array_push($xenandeckOffense, array("value" => $xenandeckRow["22"]));
			array_push($xenandeckDefense, array("value" => $xenandeckRow["23"]));
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
			
			$deckCycleData = array(
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
			
			$deckManipulateData = array(
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
			
			$deckDrawData = array(
				"chart" => array(
					"caption" => "Card Draw Availability",
					"subcaption" => "per Power Cost by Deck Type",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Card Draw",
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
			
			$deckDiscardData = array(
				"chart" => array(
					"caption" => "Discard Availability",
					"subcaption" => "per Power Cost by Deck Type",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Discard",
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
			
			$deckMillData = array(
				"chart" => array(
					"caption" => "Forced Discard Availability",
					"subcaption" => "per Power Cost by Deck Type",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Forced Discard",
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
			
			$deckDebuffData = array(
				"chart" => array(
					"caption" => "Stat-Debuff Availability",
					"subcaption" => "per Power Cost by Deck Type",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Debuff",
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
			
			$deckBuffData = array(
				"chart" => array(
					"caption" => "Stat-Buff Availability",
					"subcaption" => "per Power Cost by Deck Type",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Buff",
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
					"yAxisName" => "# Influence (Avg) to Play",
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
			
			$factionCycleData = array(
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
			
			$factionManipulateData = array(
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
			
			$factionDrawData = array(
				"chart" => array(
					"caption" => "Card Draw Availability",
					"subcaption" => "per Power Cost by Faction",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Card Draw",
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
			
			$factionDiscardData = array(
				"chart" => array(
					"caption" => "Discard Availability",
					"subcaption" => "per Power Cost by Faction",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Discard",
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
			
			$factionMillData = array(
				"chart" => array(
					"caption" => "Forced Discard Availability",
					"subcaption" => "per Power Cost by Faction",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Forced Discard",
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
			
			$factionDebuffData = array(
				"chart" => array(
					"caption" => "Stat-Debuff Availability",
					"subcaption" => "per Power Cost by Faction",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Debuff",
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
			
			$factionBuffData = array(
				"chart" => array(
					"caption" => "Stat-Buff Availability",
					"subcaption" => "per Power Cost by Faction",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Buff",
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
					"yAxisName" => "# Influence (Avg) to Play",
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
			
			$influenceCycleData = array(
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
			
			$influenceManipulateData = array(
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
			
			$influenceDrawData = array(
				"chart" => array(
					"caption" => "Card Draw Availability",
					"subcaption" => "per Power Cost by Influence",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Card Draw",
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
			
			$influenceDiscardData = array(
				"chart" => array(
					"caption" => "Discard Availability",
					"subcaption" => "per Power Cost by Influence",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Discard",
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
			
			$influenceMillData = array(
				"chart" => array(
					"caption" => "Forced Discard Availability",
					"subcaption" => "per Power Cost by Influence",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Cards Providing Forced Discard",
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
			
			$influenceDebuffData = array(
				"chart" => array(
					"caption" => "Stat-Debuff Availability",
					"subcaption" => "per Power Cost by Influence",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Debuff",
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
			
			$influenceBuffData = array(
				"chart" => array(
					"caption" => "Stat-Buff Availability",
					"subcaption" => "per Power Cost by Influence",
					"xAxisName" => "Power Cost",
					"yAxisName" => "# Buff",
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
					"yAxisName" => "# Influence (Avg) to Play",
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckTotalCards),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckUnits),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckOffense),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckDefense),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckSpells),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckAttachments),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckWeapons),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckRelicWeapons),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckRelics),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckCursedRelics),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckCurses),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckRemoval),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckReactive),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckReactive),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckReactive),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckReactive)
			);
			
			$deckCycleData["categories"]= array(array("category"=>$powerArray));
			$deckCycleData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckCycle), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckCycle),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckCycle),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckCycle),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckCycle),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckCycle), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckCycle),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckCycle),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckCycle),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckCycle),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckCycle), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckCycle),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckCycle),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckCycle),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckCycle)
			);
			
			$deckManipulateData["categories"]= array(array("category"=>$powerArray));
			$deckManipulateData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckManipulate), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckManipulate),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckManipulate),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckManipulate),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckManipulate),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckManipulate), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckManipulate),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckManipulate),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckManipulate),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckManipulate),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckManipulate), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckManipulate),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckManipulate),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckManipulate),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckManipulate)
			);
			
			$deckDrawData["categories"]= array(array("category"=>$powerArray));
			$deckDrawData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckDraw), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckDraw),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckDraw),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckDraw),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckDraw),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckDraw), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckDraw),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckDraw),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckDraw),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckDraw),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckDraw), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckDraw),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckDraw),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckDraw),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckDraw)
			);
			
			$deckDiscardData["categories"]= array(array("category"=>$powerArray));
			$deckDiscardData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckDiscard), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckDiscard),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckDiscard),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckDiscard),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckDiscard),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckDiscard), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckDiscard),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckDiscard),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckDiscard),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckDiscard),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckDiscard), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckDiscard),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckDiscard),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckDiscard),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckDiscard)
			);
			
			$deckMillData["categories"]= array(array("category"=>$powerArray));
			$deckMillData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckMill), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckMill),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckMill),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckMill),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckMill),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckMill), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckMill),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckMill),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckMill),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckMill),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckMill), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckMill),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckMill),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckMill),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckMill)
			);
			
			$deckDebuffData["categories"]= array(array("category"=>$powerArray));
			$deckDebuffData["dataset"] = array(
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckDebuff),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckDebuff),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckDebuff),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckDebuff)
			);
			
			$deckBuffData["categories"]= array(array("category"=>$powerArray));
			$deckBuffData["dataset"] = array(
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckBuff),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckInfluence),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanoTotalCards),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanoUnits),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckOffense),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckDefense),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanoSpells),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanoAttachments),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanoWeapons),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanoRelicWeapons),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanoRelics),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanoCursedRelics),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanoCurses),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanoRemoval),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanoReactive),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragReactive),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescarReactive),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenanReactive)
			);
			
			$factionCycleData["categories"]= array(array("category"=>$powerArray));
			$factionCycleData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckCycle), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckCycle),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckCycle),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckCycle),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckCycle),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckCycle), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckCycle),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckCycle),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckCycle),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckCycle),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckCycle), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckCycle),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckCycle),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckCycle),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckCycle)
			);
						
			$factionManipulateData["categories"]= array(array("category"=>$powerArray));
			$factionManipulateData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckManipulate), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckManipulate),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckManipulate),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckManipulate),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckManipulate),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckManipulate), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckManipulate),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckManipulate),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckManipulate),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckManipulate),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckManipulate), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckManipulate),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckManipulate),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckManipulate),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckManipulate)
			);
			
			$factionDrawData["categories"]= array(array("category"=>$powerArray));
			$factionDrawData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckDraw), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckDraw),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckDraw),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckDraw),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckDraw),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckDraw), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckDraw),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckDraw),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckDraw),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckDraw),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckDraw), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckDraw),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckDraw),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckDraw),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckDraw)
			);

			$factionDiscardData["categories"]= array(array("category"=>$powerArray));
			$factionDiscardData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckDiscard), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckDiscard),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckDiscard),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckDiscard),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckDiscard),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckDiscard), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckDiscard),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckDiscard),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckDiscard),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckDiscard),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckDiscard), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckDiscard),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckDiscard),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckDiscard),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckDiscard)
			);
			
			$factionMillData["categories"]= array(array("category"=>$powerArray));
			$factionMillData["dataset"] = array(
				array("seriesName"=> "Mono Fire",  "renderAs"=>"line", "data"=>$monofiredeckMill), 
				array("seriesName"=> "Mono Time",  "renderAs"=>"line", "data"=>$monotimedeckMill),
				array("seriesName"=> "Mono Justice",  "renderAs"=>"line", "data"=>$monojusticedeckMill),
				array("seriesName"=> "Mono Primal",  "renderAs"=>"line", "data"=>$monoprimaldeckMill),
				array("seriesName"=> "Mono Shadow",  "renderAs"=>"line", "data"=>$monoshadowdeckMill),
				array("seriesName"=> "Argenport",  "renderAs"=>"line", "data"=>$argenportdeckMill), 
				array("seriesName"=> "Combrei",  "renderAs"=>"line", "data"=>$combreideckMill),
				array("seriesName"=> "Elysian",  "renderAs"=>"line", "data"=>$elysiandeckMill),
				array("seriesName"=> "Feln",  "renderAs"=>"line", "data"=>$felndeckMill),
				array("seriesName"=> "Hooru",  "renderAs"=>"line", "data"=>$hoorudeckMill),
				array("seriesName"=> "Praxis",  "renderAs"=>"line", "data"=>$praxisdeckMill), 
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckMill),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckMill),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckMill),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckMill)
			);
			
			$factionDebuffData["categories"]= array(array("category"=>$powerArray));
			$factionDebuffData["dataset"] = array(
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckDebuff),
				array("seriesName"=> "Skycrag",  "renderAs"=>"line", "data"=>$skycragdeckDebuff),
				array("seriesName"=> "Stonescar",  "renderAs"=>"line", "data"=>$stonescardeckDebuff),
				array("seriesName"=> "Xenan",  "renderAs"=>"line", "data"=>$xenandeckDebuff)
			);
			
			$factionBuffData["categories"]= array(array("category"=>$powerArray));
			$factionBuffData["dataset"] = array(
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckBuff),
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
				array("seriesName"=> "Rakano",  "renderAs"=>"line", "data"=>$rakanodeckInfluence),
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
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneTotalCards),
				array("seriesName"=> "All",  "renderAs"=>"line", "data"=>$allTotalCards)
			);
			
			$influenceUnitsData["categories"]= array(array("category"=>$powerArray));
			$influenceUnitsData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireUnits), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeUnits),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceUnits),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalUnits),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowUnits),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneUnits),
				array("seriesName"=> "All",  "renderAs"=>"line", "data"=>$allUnits)
			);
			
			$influenceOffenseData["categories"]= array(array("category"=>$powerArray));
			$influenceOffenseData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireOffense), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeOffense),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceOffense),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalOffense),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowOffense),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneOffense),
				array("seriesName"=> "All",  "renderAs"=>"line", "data"=>$allOffense)
			);
			
			$influenceDefenseData["categories"]= array(array("category"=>$powerArray));
			$influenceDefenseData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireDefense), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeDefense),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceDefense),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalDefense),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowDefense),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneDefense),
				array("seriesName"=> "All",  "renderAs"=>"line", "data"=>$allDefense)
			);
			
			$influenceSpellsData["categories"]= array(array("category"=>$powerArray));
			$influenceSpellsData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireSpells), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeSpells),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceSpells),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalSpells),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowSpells),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneSpells),
				array("seriesName"=> "All",  "renderAs"=>"line", "data"=>$allSpells)
			);
			
			$influenceAttachmentsData["categories"]= array(array("category"=>$powerArray));
			$influenceAttachmentsData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireAttachments), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeAttachments),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceAttachments),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalAttachments),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowAttachments),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneAttachments),
				array("seriesName"=> "All",  "renderAs"=>"line", "data"=>$allAttachments)
			);
			
			$influenceWeaponsData["categories"]= array(array("category"=>$powerArray));
			$influenceWeaponsData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireWeapons), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeWeapons),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceWeapons),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalWeapons),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowWeapons),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneWeapons),
				array("seriesName"=> "All",  "renderAs"=>"line", "data"=>$allWeapons)
			);
			
			$influenceRelicWeaponsData["categories"]= array(array("category"=>$powerArray));
			$influenceRelicWeaponsData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireRelicWeapons), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeRelicWeapons),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceRelicWeapons),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalRelicWeapons),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowRelicWeapons),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneRelicWeapons,
				array("seriesName"=> "All",  "renderAs"=>"line", "data"=>$allRelicWeapons))
			);
			
			$influenceRelicsData["categories"]= array(array("category"=>$powerArray));
			$influenceRelicsData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireRelics), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeRelics),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceRelics),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalRelics),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowRelics),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneRelics,
				array("seriesName"=> "All",  "renderAs"=>"line", "data"=>$allRelics))
			);
			
			$influenceCursedRelicsData["categories"]= array(array("category"=>$powerArray));
			$influenceCursedRelicsData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireCursedRelics), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeCursedRelics),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceCursedRelics),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalCursedRelics),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowCursedRelics),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneCursedRelics),
				array("seriesName"=> "All",  "renderAs"=>"line", "data"=>$allCursedRelics)
			);
			
			$influenceCursesData["categories"]= array(array("category"=>$powerArray));
			$influenceCursesData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireCurses), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeCurses),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceCurses),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalCurses),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowCurses),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneCurses),
				array("seriesName"=> "All",  "renderAs"=>"line", "data"=>$allCurses)
			);
			
			$influenceRemovalData["categories"]= array(array("category"=>$powerArray));
			$influenceRemovalData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireRemoval), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeRemoval),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceRemoval),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalRemoval),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowRemoval),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneRemoval),
				array("seriesName"=> "All",  "renderAs"=>"line", "data"=>$allRemoval)
			);
			
			$influenceReactiveData["categories"]= array(array("category"=>$powerArray));
			$influenceReactiveData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireReactive), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeReactive),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceReactive),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalReactive),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowReactive),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneReactive),
				array("seriesName"=> "All",  "renderAs"=>"line", "data"=>$allReactive)
			);
			
			$influenceCycleData["categories"]= array(array("category"=>$powerArray));
			$influenceCycleData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireCycle), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeCycle),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceCycle),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalCycle),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowCycle),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneCycle),
				array("seriesName"=> "All",  "renderAs"=>"line", "data"=>$allCycle)
			);
			
			$influenceManipulateData["categories"]= array(array("category"=>$powerArray));
			$influenceManipulateData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireManipulate), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeManipulate),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceManipulate),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalManipulate),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowManipulate),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneManipulate),
				array("seriesName"=> "All",  "renderAs"=>"line", "data"=>$allManipulate)
			);
			
			$influenceDrawData["categories"]= array(array("category"=>$powerArray));
			$influenceDrawData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireDraw), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeDraw),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceDraw),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalDraw),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowDraw),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneDraw),
				array("seriesName"=> "All",  "renderAs"=>"line", "data"=>$allDraw)
			);
			
			$influenceDiscardData["categories"]= array(array("category"=>$powerArray));
			$influenceDiscardData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireDiscard), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeDiscard),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceDiscard),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalDiscard),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowDiscard),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneDiscard),
				array("seriesName"=> "All",  "renderAs"=>"line", "data"=>$allDiscard)
			);
			
			$influenceMillData["categories"]= array(array("category"=>$powerArray));
			$influenceMillData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireMill), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeMill),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceMill),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalMill),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowMill),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneMill),
				array("seriesName"=> "All",  "renderAs"=>"line", "data"=>$allMill)
			);
			
			$influenceDebuffData["categories"]= array(array("category"=>$powerArray));
			$influenceDebuffData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireDebuff), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeDebuff),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceDebuff),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalDebuff),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowDebuff),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneDebuff),
				array("seriesName"=> "All",  "renderAs"=>"line", "data"=>$allDebuff)
			);
			
			$influenceBuffData["categories"]= array(array("category"=>$powerArray));
			$influenceBuffData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireBuff), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeBuff),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceBuff),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalBuff),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowBuff),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneBuff),
				array("seriesName"=> "All",  "renderAs"=>"line", "data"=>$allBuff)
			);
			
			$influenceInfluenceData["categories"]= array(array("category"=>$powerArray));
			$influenceInfluenceData["dataset"] = array(
				array("seriesName"=> "Fire",  "renderAs"=>"line", "data"=>$fireInfluence), 
				array("seriesName"=> "Time",  "renderAs"=>"line", "data"=>$timeInfluence),
				array("seriesName"=> "Justice",  "renderAs"=>"line", "data"=>$justiceInfluence),
				array("seriesName"=> "Primal",  "renderAs"=>"line", "data"=>$primalInfluence),
				array("seriesName"=> "Shadow",  "renderAs"=>"line", "data"=>$shadowInfluence),
				array("seriesName"=> "None",  "renderAs"=>"line", "data"=>$noneInfluence),
				array("seriesName"=> "All",  "renderAs"=>"line", "data"=>$allInfluence)
			);

			
// encode arrays as json

	// deck
		$deckTotalCardsJson = json_encode($deckTotalCardsData);
		$deckRemovalJson = json_encode($deckRemovalData);
		$deckReactiveJson = json_encode($deckReactiveData);
		$deckUnitsJson = json_encode($deckUnitsData);
		$deckOffenseJson = json_encode($deckOffenseData);
		$deckDefenseJson = json_encode($deckDefenseData);
		$deckSpellsJson = json_encode($deckSpellsData);
		$deckAttachmentsJson = json_encode($deckAttachmentsData);
		$deckWeaponsJson = json_encode($deckWeaponsData);
		$deckRelicWeaponsJson = json_encode($deckRelicWeaponsData);
		$deckRelicsJson = json_encode($deckRelicsData);
		$deckCursedRelicsJson = json_encode($deckCursedRelicsData);
		$deckCursesJson = json_encode($deckCursesData);
		$deckCycleJson = json_encode($deckCycleData);
		$deckManipulateJson = json_encode($deckManipulateData);
		$deckDrawJson = json_encode($deckDrawData);
		$deckDiscardJson = json_encode($deckDiscardData);
		$deckMillJson = json_encode($deckMillData);
		$deckBuffJson = json_encode($deckBuffData);
		$deckDebuffJson = json_encode($deckDebuffData);
		$deckInfluenceJson = json_encode($deckInfluenceData);
		
	// faction
		$factionTotalCardsJson = json_encode($factionTotalCardsData);
		$factionRemovalJson = json_encode($factionRemovalData);
		$factionReactiveJson = json_encode($factionReactiveData);
		$factionUnitsJson = json_encode($factionUnitsData);
		$factionOffenseJson = json_encode($factionOffenseData);
		$factionDefenseJson = json_encode($factionDefenseData);
		$factionSpellsJson = json_encode($factionSpellsData);
		$factionAttachmentsJson = json_encode($factionAttachmentsData);
		$factionWeaponsJson = json_encode($factionWeaponsData);
		$factionRelicWeaponsJson = json_encode($factionRelicWeaponsData);
		$factionRelicsJson = json_encode($factionRelicsData);
		$factionCursedRelicsJson = json_encode($factionCursedRelicsData);
		$factionCursesJson = json_encode($factionCursesData);
		$factionCycleJson = json_encode($factionCycleData);
		$factionManipulateJson = json_encode($factionManipulateData);
		$factionDrawJson = json_encode($factionDrawData);
		$factionDiscardJson = json_encode($factionDiscardData);
		$factionMillJson = json_encode($factionMillData);
		$factionBuffJson = json_encode($factionBuffData);
		$factionDebuffJson = json_encode($factionDebuffData);
		$factionInfluenceJson = json_encode($factionInfluenceData);
		
	// influence
		$influenceTotalCardsJson = json_encode($influenceTotalCardsData);
		$influenceRemovalJson = json_encode($influenceRemovalData);
		$influenceReactiveJson = json_encode($influenceReactiveData);
		$influenceUnitsJson = json_encode($influenceUnitsData);
		$influenceOffenseJson = json_encode($influenceOffenseData);
		$influenceDefenseJson = json_encode($influenceDefenseData);
		$influenceSpellsJson = json_encode($influenceSpellsData);
		$influenceAttachmentsJson = json_encode($influenceAttachmentsData);
		$influenceWeaponsJson = json_encode($influenceWeaponsData);
		$influenceRelicWeaponsJson = json_encode($influenceRelicWeaponsData);
		$influenceRelicsJson = json_encode($influenceRelicsData);
		$influenceCursedRelicsJson = json_encode($influenceCursedRelicsData);
		$influenceCursesJson = json_encode($influenceCursesData);
		$influenceCycleJson = json_encode($influenceCycleData);
		$influenceManipulateJson = json_encode($influenceManipulateData);
		$influenceDrawJson = json_encode($influenceDrawData);
		$influenceDiscardJson = json_encode($influenceDiscardData);
		$influenceMillJson = json_encode($influenceMillData);
		$influenceBuffJson = json_encode($influenceBuffData);
		$influenceDebuffJson = json_encode($influenceDebuffData);
		$influenceInfluenceJson = json_encode($influenceInfluenceData);

// prepare chart div info

	//deck
		$deckTotalCardsChart = new FusionCharts("mscombi2d", "deckCards-js" , "600", "350", "deckTotalCards", "json", $deckTotalCardsJson);
		$deckUnitsChart = new FusionCharts("mscombi2d", "deckUnits-js" , "600", "350", "deckUnits", "json", $deckUnitsJson);
		$deckOffenseChart = new FusionCharts("mscombi2d", "deckOffense-js" , "600", "350", "deckOffense", "json", $deckOffenseJson);
		$deckDefenseChart = new FusionCharts("mscombi2d", "deckDefense-js" , "600", "350", "deckDefense", "json", $deckDefenseJson);
		$deckSpellsChart = new FusionCharts("mscombi2d", "deckSpells-js" , "600", "350", "deckSpells", "json", $deckSpellsJson);
		$deckAttachmentsChart = new FusionCharts("mscombi2d", "deckAttachments-js" , "600", "350", "deckAttachments", "json", $deckAttachmentsJson);
		$deckWeaponsChart = new FusionCharts("mscombi2d", "deckWeapons-js" , "600", "350", "deckWeapons", "json", $deckWeaponsJson);
		$deckRelicWeaponsChart = new FusionCharts("mscombi2d", "deckRelicWeapons-js" , "600", "350", "deckRelicWeapons", "json", $deckRelicWeaponsJson);
		$deckRelicsChart = new FusionCharts("mscombi2d", "deckRelics-js" , "600", "350", "deckRelics", "json", $deckRelicsJson);
		$deckCursedRelicsChart = new FusionCharts("mscombi2d", "deckCursedRelics-js" , "600", "350", "deckCursedRelics", "json", $deckCursedRelicsJson);
		$deckCursesChart = new FusionCharts("mscombi2d", "deckCurses-js" , "600", "350", "deckCurses", "json", $deckCursesJson);
		$deckCurses2Chart = new FusionCharts("mscombi2d", "deckCurses2-js" , "600", "350", "deckCurses2", "json", $deckCursesJson);
		$deckRemovalChart = new FusionCharts("mscombi2d", "deckRemoval-js" , "600", "350", "deckRemoval", "json", $deckRemovalJson);
		$deckReactiveChart = new FusionCharts("mscombi2d", "deckReactive-js" , "600", "350", "deckReactive", "json", $deckReactiveJson);
		$deckCycleChart = new FusionCharts("mscombi2d", "deckCycle-js" , "600", "350", "deckCycle", "json", $deckCycleJson);
		$deckManipulateChart = new FusionCharts("mscombi2d", "deckManipulate-js" , "600", "350", "deckManipulate", "json", $deckManipulateJson);
		$deckDrawChart = new FusionCharts("mscombi2d", "deckDraw-js" , "600", "350", "deckDraw", "json", $deckDrawJson);
		$deckDiscardChart = new FusionCharts("mscombi2d", "deckDiscard-js" , "600", "350", "deckDiscard", "json", $deckDiscardJson);
		$deckMillChart = new FusionCharts("mscombi2d", "deckMill-js" , "600", "350", "deckMill", "json", $deckMillJson);
		$deckMill2Chart = new FusionCharts("mscombi2d", "deckMill2-js" , "600", "350", "deckMill2", "json", $deckMillJson);
		$deckBuffChart = new FusionCharts("mscombi2d", "deckBuff-js" , "600", "350", "deckBuff", "json", $deckBuffJson);
		$deckDebuffChart = new FusionCharts("mscombi2d", "deckDebuff-js" , "600", "350", "deckDebuff", "json", $deckDebuffJson);
		$deckDebuff2Chart = new FusionCharts("mscombi2d", "deckDebuff2-js" , "600", "350", "deckDebuff2", "json", $deckDebuffJson);
		$deckInfluenceChart = new FusionCharts("mscombi2d", "deckInfluence-js" , "600", "350", "deckInfluence", "json", $deckInfluenceJson);
		
	//faction
		$factionTotalCardsChart = new FusionCharts("mscombi2d", "factionCards-js" , "600", "350", "factionTotalCards", "json", $factionTotalCardsJson);
		$factionUnitsChart = new FusionCharts("mscombi2d", "factionUnits-js" , "600", "350", "factionUnits", "json", $factionUnitsJson);
		$factionOffenseChart = new FusionCharts("mscombi2d", "factionOffense-js" , "600", "350", "factionOffense", "json", $factionOffenseJson);
		$factionDefenseChart = new FusionCharts("mscombi2d", "factionDefense-js" , "600", "350", "factionDefense", "json", $factionDefenseJson);
		$factionSpellsChart = new FusionCharts("mscombi2d", "factionSpells-js" , "600", "350", "factionSpells", "json", $factionSpellsJson);
		$factionAttachmentsChart = new FusionCharts("mscombi2d", "factionAttachments-js" , "600", "350", "factionAttachments", "json", $factionAttachmentsJson);
		$factionWeaponsChart = new FusionCharts("mscombi2d", "factionWeapons-js" , "600", "350", "factionWeapons", "json", $factionWeaponsJson);
		$factionRelicWeaponsChart = new FusionCharts("mscombi2d", "factionRelicWeapons-js" , "600", "350", "factionRelicWeapons", "json", $factionRelicWeaponsJson);
		$factionRelicsChart = new FusionCharts("mscombi2d", "factionRelics-js" , "600", "350", "factionRelics", "json", $factionRelicsJson);
		$factionCursedRelicsChart = new FusionCharts("mscombi2d", "factionCursedRelics-js" , "600", "350", "factionCursedRelics", "json", $factionCursedRelicsJson);
		$factionCursesChart = new FusionCharts("mscombi2d", "factionCurses-js" , "600", "350", "factionCurses", "json", $factionCursesJson);
		$factionCurses2Chart = new FusionCharts("mscombi2d", "factionCurses2-js" , "600", "350", "factionCurses2", "json", $factionCursesJson);
		$factionRemovalChart = new FusionCharts("mscombi2d", "factionRemoval-js" , "600", "350", "factionRemoval", "json", $factionRemovalJson);
		$factionReactiveChart = new FusionCharts("mscombi2d", "factionReactive-js" , "600", "350", "factionReactive", "json", $factionReactiveJson);
		$factionCycleChart = new FusionCharts("mscombi2d", "factionCycle-js" , "600", "350", "factionCycle", "json", $factionCycleJson);
		$factionManipulateChart = new FusionCharts("mscombi2d", "factionManipulate-js" , "600", "350", "factionManipulate", "json", $factionManipulateJson);
		$factionDrawChart = new FusionCharts("mscombi2d", "factionDraw-js" , "600", "350", "factionDraw", "json", $factionDrawJson);
		$factionDiscardChart = new FusionCharts("mscombi2d", "factionDiscard-js" , "600", "350", "factionDiscard", "json", $factionDiscardJson);
		$factionMillChart = new FusionCharts("mscombi2d", "factionMill-js" , "600", "350", "factionMill", "json", $factionMillJson);
		$factionMill2Chart = new FusionCharts("mscombi2d", "factionMill2-js" , "600", "350", "factionMill2", "json", $factionMillJson);
		$factionBuffChart = new FusionCharts("mscombi2d", "factionBuff-js" , "600", "350", "factionBuff", "json", $factionBuffJson);
		$factionDebuffChart = new FusionCharts("mscombi2d", "factionDebuff-js" , "600", "350", "factionDebuff", "json", $factionDebuffJson);
		$factionDebuff2Chart = new FusionCharts("mscombi2d", "factionDebuff2-js" , "600", "350", "factionDebuff2", "json", $factionDebuffJson);
		$factionInfluenceChart = new FusionCharts("mscombi2d", "factionInfluence-js" , "600", "350", "factionInfluence", "json", $factionInfluenceJson);

	//influence
		$influenceTotalCardsChart = new FusionCharts("mscombi2d", "influenceCards-js" , "600", "350", "influenceTotalCards", "json", $influenceTotalCardsJson);
		$influenceUnitsChart = new FusionCharts("mscombi2d", "influenceUnits-js" , "600", "350", "influenceUnits", "json", $influenceUnitsJson);
		$influenceOffenseChart = new FusionCharts("mscombi2d", "influenceOffense-js" , "600", "350", "influenceOffense", "json", $influenceOffenseJson);
		$influenceDefenseChart = new FusionCharts("mscombi2d", "influenceDefense-js" , "600", "350", "influenceDefense", "json", $influenceDefenseJson);
		$influenceSpellsChart = new FusionCharts("mscombi2d", "influenceSpells-js" , "600", "350", "influenceSpells", "json", $influenceSpellsJson);
		$influenceAttachmentsChart = new FusionCharts("mscombi2d", "influenceAttachments-js" , "600", "350", "influenceAttachments", "json", $influenceAttachmentsJson);
		$influenceWeaponsChart = new FusionCharts("mscombi2d", "influenceWeapons-js" , "600", "350", "influenceWeapons", "json", $influenceWeaponsJson);
		$influenceRelicWeaponsChart = new FusionCharts("mscombi2d", "influenceRelicWeapons-js" , "600", "350", "influenceRelicWeapons", "json", $influenceRelicWeaponsJson);
		$influenceRelicsChart = new FusionCharts("mscombi2d", "influenceRelics-js" , "600", "350", "influenceRelics", "json", $influenceRelicsJson);
		$influenceCursedRelicsChart = new FusionCharts("mscombi2d", "influenceCursedRelics-js" , "600", "350", "influenceCursedRelics", "json", $influenceCursedRelicsJson);
		$influenceCursesChart = new FusionCharts("mscombi2d", "influenceCurses-js" , "600", "350", "influenceCurses", "json", $influenceCursesJson);
		$influenceCurses2Chart = new FusionCharts("mscombi2d", "influenceCurses2-js" , "600", "350", "influenceCurses2", "json", $influenceCursesJson);
		$influenceRemovalChart = new FusionCharts("mscombi2d", "influenceRemoval-js" , "600", "350", "influenceRemoval", "json", $influenceRemovalJson);
		$influenceReactiveChart = new FusionCharts("mscombi2d", "influenceReactive-js" , "600", "350", "influenceReactive", "json", $influenceReactiveJson);
		$influenceCycleChart = new FusionCharts("mscombi2d", "influenceCycle-js" , "600", "350", "influenceCycle", "json", $influenceCycleJson);
		$influenceManipulateChart = new FusionCharts("mscombi2d", "influenceManipulate-js" , "600", "350", "influenceManipulate", "json", $influenceManipulateJson);
		$influenceDrawChart = new FusionCharts("mscombi2d", "influenceDraw-js" , "600", "350", "influenceDraw", "json", $influenceDrawJson);
		$influenceDiscardChart = new FusionCharts("mscombi2d", "influenceDiscard-js" , "600", "350", "influenceDiscard", "json", $influenceDiscardJson);
		$influenceMillChart = new FusionCharts("mscombi2d", "influenceMill-js" , "600", "350", "influenceMill", "json", $influenceMillJson);
		$influenceMill2Chart = new FusionCharts("mscombi2d", "influenceMill2-js" , "600", "350", "influenceMill2", "json", $influenceMillJson);
		$influenceBuffChart = new FusionCharts("mscombi2d", "influenceBuff-js" , "600", "350", "influenceBuff", "json", $influenceBuffJson);
		$influenceDebuffChart = new FusionCharts("mscombi2d", "influenceDebuff-js" , "600", "350", "influenceDebuff", "json", $influenceDebuffJson);
		$influenceDebuff2Chart = new FusionCharts("mscombi2d", "influenceDebuff2-js" , "600", "350", "influenceDebuff2", "json", $influenceDebuffJson);
		$influenceInfluenceChart = new FusionCharts("mscombi2d", "influenceInfluence-js" , "600", "350", "influenceInfluence", "json", $influenceInfluenceJson);
		
// render charts

		// deck
		$deckTotalCardsChart->render();
		$deckRemovalChart->render();
		$deckReactiveChart->render();
		$deckUnitsChart->render();
		$deckOffenseChart->render();
		$deckDefenseChart->render();
		$deckSpellsChart->render();
		$deckAttachmentsChart->render();
		$deckWeaponsChart->render();
		$deckRelicWeaponsChart->render();
		$deckRelicsChart->render();
		$deckCursedRelicsChart->render();
		$deckCursesChart->render();
		$deckCurses2Chart->render();
		$deckCycleChart->render();
		$deckDrawChart->render();
		$deckManipulateChart->render();
		$deckDiscardChart->render();
		$deckMillChart->render();
		$deckMill2Chart->render();
		$deckDebuffChart->render();
		$deckDebuff2Chart->render();
		$deckBuffChart->render();
		$deckInfluenceChart->render();
		
		// faction
		$factionTotalCardsChart->render();
		$factionRemovalChart->render();
		$factionReactiveChart->render();
		$factionUnitsChart->render();
		$factionOffenseChart->render();
		$factionDefenseChart->render();
		$factionSpellsChart->render();
		$factionAttachmentsChart->render();
		$factionWeaponsChart->render();
		$factionRelicWeaponsChart->render();
		$factionRelicsChart->render();
		$factionCursedRelicsChart->render();
		$factionCursesChart->render();
		$factionCurses2Chart->render();
		$factionCycleChart->render();
		$factionDrawChart->render();
		$factionManipulateChart->render();
		$factionDiscardChart->render();
		$factionMillChart->render();
		$factionMill2Chart->render();
		$factionDebuffChart->render();
		$factionDebuff2Chart->render();
		$factionBuffChart->render();
		$factionInfluenceChart->render();
		
		// influence
		$influenceTotalCardsChart->render();
		$influenceRemovalChart->render();
		$influenceReactiveChart->render();
		$influenceUnitsChart->render();
		$influenceOffenseChart->render();
		$influenceDefenseChart->render();
		$influenceSpellsChart->render();
		$influenceAttachmentsChart->render();
		$influenceWeaponsChart->render();
		$influenceRelicWeaponsChart->render();
		$influenceRelicsChart->render();
		$influenceCursedRelicsChart->render();
		$influenceCursesChart->render();
		$influenceCurses2Chart->render();
		$influenceCycleChart->render();
		$influenceDrawChart->render();
		$influenceManipulateChart->render();
		$influenceDiscardChart->render();
		$influenceMillChart->render();
		$influenceMill2Chart->render();
		$influenceDebuffChart->render();
		$influenceDebuff2Chart->render();
		$influenceBuffChart->render();
		$influenceInfluenceChart->render();
		
// set data tables

	$_SESSION['labels1'] = array("Power Cost","Mono Fire"," Mono Time"," Mono Justice","Mono Primal","Mono Shadow","Argenport","Combrei","Elysian","Feln","Hooru","Praxis","Rakano","Skycrag","Stonescar","Xenan");
	$_SESSION['labels2'] = array("Power Cost","Fire","Time","Justice","Primal","Shadow","None","All");

	// deck
	
	$_SESSION['deckTotalCardsData'] =  array($powerArray,$monofiredeckTotalCards,$monotimedeckTotalCards,$monojusticedeckTotalCards,$monoprimaldeckTotalCards,$monoshadowdeckTotalCards,$argenportdeckTotalCards,$combreideckTotalCards,$elysiandeckTotalCards,$felndeckTotalCards,$hoorudeckTotalCards,$praxisdeckTotalCards,$rakanodeckTotalCards,$skycragdeckTotalCards,$stonescardeckTotalCards,$xenandeckTotalCards);

	$_SESSION['deckRemovalData'] =  array($powerArray,$monofiredeckRemoval,$monotimedeckRemoval,$monojusticedeckRemoval,$monoprimaldeckRemoval,$monoshadowdeckRemoval,$argenportdeckRemoval,$combreideckRemoval,$elysiandeckRemoval,$felndeckRemoval,$hoorudeckRemoval,$praxisdeckRemoval,$rakanodeckRemoval,$skycragdeckRemoval,$stonescardeckRemoval,$xenandeckRemoval);
	
	$_SESSION['deckReactiveData'] =  array($powerArray,$monofiredeckReactive,$monotimedeckReactive,$monojusticedeckReactive,$monoprimaldeckReactive,$monoshadowdeckReactive,$argenportdeckReactive,$combreideckReactive,$elysiandeckReactive,$felndeckReactive,$hoorudeckReactive,$praxisdeckReactive,$rakanodeckReactive,$skycragdeckReactive,$stonescardeckReactive,$xenandeckReactive);
	
	$_SESSION['deckSpellsData'] = array($powerArray,$monofiredeckSpells,$monotimedeckSpells,$monojusticedeckSpells,$monoprimaldeckSpells,$monoshadowdeckSpells,$argenportdeckSpells,$combreideckSpells,$elysiandeckSpells,$felndeckSpells,$hoorudeckSpells,$praxisdeckSpells,$rakanodeckSpells,$skycragdeckSpells,$stonescardeckSpells,$xenandeckSpells);
	
	$_SESSION['deckUnitsData'] = array($powerArray,$monofiredeckUnits,$monotimedeckUnits,$monojusticedeckUnits,$monoprimaldeckUnits,$monoshadowdeckUnits,$argenportdeckUnits,$combreideckUnits,$elysiandeckUnits,$felndeckUnits,$hoorudeckUnits,$praxisdeckUnits,$rakanodeckUnits,$skycragdeckUnits,$stonescardeckUnits,$xenandeckUnits);
	
	$_SESSION['deckOffenseData'] = array($powerArray,$monofiredeckOffense,$monotimedeckOffense,$monojusticedeckOffense,$monoprimaldeckOffense,$monoshadowdeckOffense,$argenportdeckOffense,$combreideckOffense,$elysiandeckOffense,$felndeckOffense,$hoorudeckOffense,$praxisdeckOffense,$rakanodeckOffense,$skycragdeckOffense,$stonescardeckOffense,$xenandeckOffense);
	
	$_SESSION['deckDefenseData'] = array($powerArray,$monofiredeckDefense,$monotimedeckDefense,$monojusticedeckDefense,$monoprimaldeckDefense,$monoshadowdeckDefense,$argenportdeckDefense,$combreideckDefense,$elysiandeckDefense,$felndeckDefense,$hoorudeckDefense,$praxisdeckDefense,$rakanodeckDefense,$skycragdeckDefense,$stonescardeckDefense,$xenandeckDefense);

	$_SESSION['deckAttachmentsData'] = array($powerArray,$monofiredeckAttachments,$monotimedeckAttachments,$monojusticedeckAttachments,$monoprimaldeckAttachments,$monoshadowdeckAttachments,$argenportdeckAttachments,$combreideckAttachments,$elysiandeckAttachments,$felndeckAttachments,$hoorudeckAttachments,$praxisdeckAttachments,$rakanodeckAttachments,$skycragdeckAttachments,$stonescardeckAttachments,$xenandeckAttachments);
	
	$_SESSION['deckWeaponsData'] = array($powerArray,$monofiredeckWeapons,$monotimedeckWeapons,$monojusticedeckWeapons,$monoprimaldeckWeapons,$monoshadowdeckWeapons,$argenportdeckWeapons,$combreideckWeapons,$elysiandeckWeapons,$felndeckWeapons,$hoorudeckWeapons,$praxisdeckWeapons,$rakanodeckWeapons,$skycragdeckWeapons,$stonescardeckWeapons,$xenandeckWeapons);
	
	$_SESSION['deckRelicWeaponsData'] = array($powerArray,$monofiredeckRelicWeapons,$monotimedeckRelicWeapons,$monojusticedeckRelicWeapons,$monoprimaldeckRelicWeapons,$monoshadowdeckRelicWeapons,$argenportdeckRelicWeapons,$combreideckRelicWeapons,$elysiandeckRelicWeapons,$felndeckRelicWeapons,$hoorudeckRelicWeapons,$praxisdeckRelicWeapons,$rakanodeckRelicWeapons,$skycragdeckRelicWeapons,$stonescardeckRelicWeapons,$xenandeckRelicWeapons);
	
	$_SESSION['deckRelicsData'] = array($powerArray,$monofiredeckRelics,$monotimedeckRelics,$monojusticedeckRelics,$monoprimaldeckRelics,$monoshadowdeckRelics,$argenportdeckRelics,$combreideckRelics,$elysiandeckRelics,$felndeckRelics,$hoorudeckRelics,$praxisdeckRelics,$rakanodeckRelics,$skycragdeckRelics,$stonescardeckRelics,$xenandeckRelics);
	
	$_SESSION['deckCursedRelicsData'] = array($powerArray,$monofiredeckCursedRelics,$monotimedeckCursedRelics,$monojusticedeckCursedRelics,$monoprimaldeckCursedRelics,$monoshadowdeckCursedRelics,$argenportdeckCursedRelics,$combreideckCursedRelics,$elysiandeckCursedRelics,$felndeckCursedRelics,$hoorudeckCursedRelics,$praxisdeckCursedRelics,$rakanodeckCursedRelics,$skycragdeckCursedRelics,$stonescardeckCursedRelics,$xenandeckCursedRelics);
	
	$_SESSION['deckCursesData'] = array($powerArray,$monofiredeckCurses,$monotimedeckCurses,$monojusticedeckCurses,$monoprimaldeckCurses,$monoshadowdeckCurses,$argenportdeckCurses,$combreideckCurses,$elysiandeckCurses,$felndeckCurses,$hoorudeckCurses,$praxisdeckCurses,$rakanodeckCurses,$skycragdeckCurses,$stonescardeckCurses,$xenandeckCurses);
	
	$_SESSION['deckCurses2Data'] = $_SESSION['deckCursesData'];
	
	$_SESSION['deckDebuffData'] = array($powerArray,$monofiredeckDebuff,$monotimedeckDebuff,$monojusticedeckDebuff,$monoprimaldeckDebuff,$monoshadowdeckDebuff,$argenportdeckDebuff,$combreideckDebuff,$elysiandeckDebuff,$felndeckDebuff,$hoorudeckDebuff,$praxisdeckDebuff,$rakanodeckDebuff,$skycragdeckDebuff,$stonescardeckDebuff,$xenandeckDebuff);
	
	$_SESSION['deckDebuff2Data'] = $_SESSION['deckDebuffData'];
	
	$_SESSION['deckBuffData'] = array($powerArray,$monofiredeckBuff,$monotimedeckBuff,$monojusticedeckBuff,$monoprimaldeckBuff,$monoshadowdeckBuff,$argenportdeckBuff,$combreideckBuff,$elysiandeckBuff,$felndeckBuff,$hoorudeckBuff,$praxisdeckBuff,$rakanodeckBuff,$skycragdeckBuff,$stonescardeckBuff,$xenandeckBuff);
	
	$_SESSION['deckInfluenceData'] = array($powerArray,$monofiredeckInfluence,$monotimedeckInfluence,$monojusticedeckInfluence,$monoprimaldeckInfluence,$monoshadowdeckInfluence,$argenportdeckInfluence,$combreideckInfluence,$elysiandeckInfluence,$felndeckInfluence,$hoorudeckInfluence,$praxisdeckInfluence,$rakanodeckInfluence,$skycragdeckInfluence,$stonescardeckInfluence,$xenandeckInfluence);
	
	$_SESSION['deckCycleData'] = array($powerArray,$monofiredeckCycle,$monotimedeckCycle,$monojusticedeckCycle,$monoprimaldeckCycle,$monoshadowdeckCycle,$argenportdeckCycle,$combreideckCycle,$elysiandeckCycle,$felndeckCycle,$hoorudeckCycle,$praxisdeckCycle,$rakanodeckCycle,$skycragdeckCycle,$stonescardeckCycle,$xenandeckCycle);
	
	$_SESSION['deckDrawData'] = array($powerArray,$monofiredeckDraw,$monotimedeckDraw,$monojusticedeckDraw,$monoprimaldeckDraw,$monoshadowdeckDraw,$argenportdeckDraw,$combreideckDraw,$elysiandeckDraw,$felndeckDraw,$hoorudeckDraw,$praxisdeckDraw,$rakanodeckDraw,$skycragdeckDraw,$stonescardeckDraw,$xenandeckDraw);
	
	$_SESSION['deckManipulateData'] = array($powerArray,$monofiredeckManipulate,$monotimedeckManipulate,$monojusticedeckManipulate,$monoprimaldeckManipulate,$monoshadowdeckManipulate,$argenportdeckManipulate,$combreideckManipulate,$elysiandeckManipulate,$felndeckManipulate,$hoorudeckManipulate,$praxisdeckManipulate,$rakanodeckManipulate,$skycragdeckManipulate,$stonescardeckManipulate,$xenandeckManipulate);
	
	$_SESSION['deckDiscardData'] = array($powerArray,$monofiredeckDiscard,$monotimedeckDiscard,$monojusticedeckDiscard,$monoprimaldeckDiscard,$monoshadowdeckDiscard,$argenportdeckDiscard,$combreideckDiscard,$elysiandeckDiscard,$felndeckDiscard,$hoorudeckDiscard,$praxisdeckDiscard,$rakanodeckDiscard,$skycragdeckDiscard,$stonescardeckDiscard,$xenandeckDiscard);
	
	$_SESSION['deckMillData'] = array($powerArray,$monofiredeckMill,$monotimedeckMill,$monojusticedeckMill,$monoprimaldeckMill,$monoshadowdeckMill,$argenportdeckMill,$combreideckMill,$elysiandeckMill,$felndeckMill,$hoorudeckMill,$praxisdeckMill,$rakanodeckMill,$skycragdeckMill,$stonescardeckMill,$xenandeckMill);
	
	$_SESSION['deckMill2Data'] = $_SESSION['deckMillData'];
	
	// faction
	
	$_SESSION['factionTotalCardsData'] =  array($powerArray,$monofireTotalCards,$monotimeTotalCards,$monojusticeTotalCards,$monoprimalTotalCards,$monoshadowTotalCards,$argenportTotalCards,$combreiTotalCards,$elysianTotalCards,$felnTotalCards,$hooruTotalCards,$praxisTotalCards,$rakanoTotalCards,$skycragTotalCards,$stonescarTotalCards,$xenanTotalCards);

	$_SESSION['factionRemovalData'] =  array($powerArray,$monofireRemoval,$monotimeRemoval,$monojusticeRemoval,$monoprimalRemoval,$monoshadowRemoval,$argenportRemoval,$combreiRemoval,$elysianRemoval,$felnRemoval,$hooruRemoval,$praxisRemoval,$rakanoRemoval,$skycragRemoval,$stonescarRemoval,$xenanRemoval);
	
	$_SESSION['factionReactiveData'] =  array($powerArray,$monofireReactive,$monotimeReactive,$monojusticeReactive,$monoprimalReactive,$monoshadowReactive,$argenportReactive,$combreiReactive,$elysianReactive,$felnReactive,$hooruReactive,$praxisReactive,$rakanoReactive,$skycragReactive,$stonescarReactive,$xenanReactive);
	
	$_SESSION['factionCardCyclingData'] = array($powerArray,$monofireCardCycling,$monotimeCardCycling,$monojusticeCardCycling,$monoprimalCardCycling,$monoshadowCardCycling,$argenportCardCycling,$combreiCardCycling,$elysianCardCycling,$felnCardCycling,$hooruCardCycling,$praxisCardCycling,$rakanoCardCycling,$skycragCardCycling,$stonescarCardCycling,$xenanCardCycling);
	
	$_SESSION['factionManipulationData'] = array($powerArray,$monofireManipulation,$monotimeManipulation,$monojusticeManipulation,$monoprimalManipulation,$monoshadowManipulation,$argenportManipulation,$combreiManipulation,$elysianManipulation,$felnManipulation,$hooruManipulation,$praxisManipulation,$rakanoManipulation,$skycragManipulation,$stonescarManipulation,$xenanManipulation);
	
	$_SESSION['factionUnitsData'] = array($powerArray,$monofireUnits,$monotimeUnits,$monojusticeUnits,$monoprimalUnits,$monoshadowUnits,$argenportUnits,$combreiUnits,$elysianUnits,$felnUnits,$hooruUnits,$praxisUnits,$rakanoUnits,$skycragUnits,$stonescarUnits,$xenanUnits);
	
	$_SESSION['factionOffenseData'] = array($powerArray,$monofireOffense,$monotimeOffense,$monojusticeOffense,$monoprimalOffense,$monoshadowOffense,$argenportOffense,$combreiOffense,$elysianOffense,$felnOffense,$hooruOffense,$praxisOffense,$rakanoOffense,$skycragOffense,$stonescarOffense,$xenanOffense);
	
	$_SESSION['factionDefenseData'] = array($powerArray,$monofireDefense,$monotimeDefense,$monojusticeDefense,$monoprimalDefense,$monoshadowDefense,$argenportDefense,$combreiDefense,$elysianDefense,$felnDefense,$hooruDefense,$praxisDefense,$rakanoDefense,$skycragDefense,$stonescarDefense,$xenanDefense);
	
	$_SESSION['factionSpellsData'] = array($powerArray,$monofireSpells,$monotimeSpells,$monojusticeSpells,$monoprimalSpells,$monoshadowSpells,$argenportSpells,$combreiSpells,$elysianSpells,$felnSpells,$hooruSpells,$praxisSpells,$rakanoSpells,$skycragSpells,$stonescarSpells,$xenanSpells);
	
	$_SESSION['factionAttachmentsData'] = array($powerArray,$monofireAttachments,$monotimeAttachments,$monojusticeAttachments,$monoprimalAttachments,$monoshadowAttachments,$argenportAttachments,$combreiAttachments,$elysianAttachments,$felnAttachments,$hooruAttachments,$praxisAttachments,$rakanoAttachments,$skycragAttachments,$stonescarAttachments,$xenanAttachments);
	
	$_SESSION['factionWeaponsData'] = array($powerArray,$monofireWeapons,$monotimeWeapons,$monojusticeWeapons,$monoprimalWeapons,$monoshadowWeapons,$argenportWeapons,$combreiWeapons,$elysianWeapons,$felnWeapons,$hooruWeapons,$praxisWeapons,$rakanoWeapons,$skycragWeapons,$stonescarWeapons,$xenanWeapons);
	
	$_SESSION['factionRelicWeaponsData'] = array($powerArray,$monofireRelicWeapons,$monotimeRelicWeapons,$monojusticeRelicWeapons,$monoprimalRelicWeapons,$monoshadowRelicWeapons,$argenportRelicWeapons,$combreiRelicWeapons,$elysianRelicWeapons,$felnRelicWeapons,$hooruRelicWeapons,$praxisRelicWeapons,$rakanoRelicWeapons,$skycragRelicWeapons,$stonescarRelicWeapons,$xenanRelicWeapons);
	
	$_SESSION['factionRelicsData'] = array($powerArray,$monofireRelics,$monotimeRelics,$monojusticeRelics,$monoprimalRelics,$monoshadowRelics,$argenportRelics,$combreiRelics,$elysianRelics,$felnRelics,$hooruRelics,$praxisRelics,$rakanoRelics,$skycragRelics,$stonescarRelics,$xenanRelics);
	
	$_SESSION['factionCursedRelicsData'] = array($powerArray,$monofireCursedRelics,$monotimeCursedRelics,$monojusticeCursedRelics,$monoprimalCursedRelics,$monoshadowCursedRelics,$argenportCursedRelics,$combreiCursedRelics,$elysianCursedRelics,$felnCursedRelics,$hooruCursedRelics,$praxisCursedRelics,$rakanoCursedRelics,$skycragCursedRelics,$stonescarCursedRelics,$xenanCursedRelics);
	
	$_SESSION['factionCursesData'] = array($powerArray,$monofireCurses,$monotimeCurses,$monojusticeCurses,$monoprimalCurses,$monoshadowCurses,$argenportCurses,$combreiCurses,$elysianCurses,$felnCurses,$hooruCurses,$praxisCurses,$rakanoCurses,$skycragCurses,$stonescarCurses,$xenanCurses);
	
	$_SESSION['factionCurses2Data'] = $_SESSION['factionCursesData'];
	
	$_SESSION['factionDebuffData'] = array($powerArray,$monofireDebuff,$monotimeDebuff,$monojusticeDebuff,$monoprimalDebuff,$monoshadowDebuff,$argenportDebuff,$combreiDebuff,$elysianDebuff,$felnDebuff,$hooruDebuff,$praxisDebuff,$rakanoDebuff,$skycragDebuff,$stonescarDebuff,$xenanDebuff);
	
	$_SESSION['factionDebuff2Data'] = $_SESSION['factionDebuffData'];
	
	$_SESSION['factionBuffData'] = array($powerArray,$monofireBuff,$monotimeBuff,$monojusticeBuff,$monoprimalBuff,$monoshadowBuff,$argenportBuff,$combreiBuff,$elysianBuff,$felnBuff,$hooruBuff,$praxisBuff,$rakanoBuff,$skycragBuff,$stonescarBuff,$xenanBuff);
	
	$_SESSION['factionInfluenceData'] = array($powerArray,$monofireInfluence,$monotimeInfluence,$monojusticeInfluence,$monoprimalInfluence,$monoshadowInfluence,$argenportInfluence,$combreiInfluence,$elysianInfluence,$felnInfluence,$hooruInfluence,$praxisInfluence,$rakanoInfluence,$skycragInfluence,$stonescarInfluence,$xenanInfluence);
	
	$_SESSION['factionCycleData'] = array($powerArray,$monofireCycle,$monotimeCycle,$monojusticeCycle,$monoprimalCycle,$monoshadowCycle,$argenportCycle,$combreiCycle,$elysianCycle,$felnCycle,$hooruCycle,$praxisCycle,$rakanoCycle,$skycragCycle,$stonescarCycle,$xenanCycle);
	
	$_SESSION['factionDrawData'] = array($powerArray,$monofireDraw,$monotimeDraw,$monojusticeDraw,$monoprimalDraw,$monoshadowDraw,$argenportDraw,$combreiDraw,$elysianDraw,$felnDraw,$hooruDraw,$praxisDraw,$rakanoDraw,$skycragDraw,$stonescarDraw,$xenanDraw);
	
	$_SESSION['factionManipulateData'] = array($powerArray,$monofireManipulate,$monotimeManipulate,$monojusticeManipulate,$monoprimalManipulate,$monoshadowManipulate,$argenportManipulate,$combreiManipulate,$elysianManipulate,$felnManipulate,$hooruManipulate,$praxisManipulate,$rakanoManipulate,$skycragManipulate,$stonescarManipulate,$xenanManipulate);
	
	$_SESSION['factionDiscardData'] = array($powerArray,$monofireDiscard,$monotimeDiscard,$monojusticeDiscard,$monoprimalDiscard,$monoshadowDiscard,$argenportDiscard,$combreiDiscard,$elysianDiscard,$felnDiscard,$hooruDiscard,$praxisDiscard,$rakanoDiscard,$skycragDiscard,$stonescarDiscard,$xenanDiscard);
	
	$_SESSION['factionMillData'] = array($powerArray,$monofireMill,$monotimeMill,$monojusticeMill,$monoprimalMill,$monoshadowMill,$argenportMill,$combreiMill,$elysianMill,$felnMill,$hooruMill,$praxisMill,$rakanoMill,$skycragMill,$stonescarMill,$xenanMill);
	
	$_SESSION['factionMill2Data'] = $_SESSION['factionMillData'];
	
	// influence

	$_SESSION['TotalCardsData'] =  array($powerArray,$fireTotalCards,$timeTotalCards,$justiceTotalCards,$primalTotalCards,$shadowTotalCards,$noneTotalCards,$allTotalCards);

	$_SESSION['RemovalData'] =  array($powerArray,$fireRemoval,$timeRemoval,$justiceRemoval,$primalRemoval,$shadowRemoval,$noneRemoval,$allRemoval);
	
	$_SESSION['ReactiveData'] =  array($powerArray,$fireReactive,$timeReactive,$justiceReactive,$primalReactive,$shadowReactive,$noneReactive,$allReactive);
	
	$_SESSION['UnitsData'] = array($powerArray,$fireUnits,$timeUnits,$justiceUnits,$primalUnits,$shadowUnits,$noneUnits,$allUnits);
	
	$_SESSION['OffenseData'] = array($powerArray,$fireOffense,$timeOffense,$justiceOffense,$primalOffense,$shadowOffense,$noneOffense,$allOffense);
	
	$_SESSION['DefenseData'] = array($powerArray,$fireDefense,$timeDefense,$justiceDefense,$primalDefense,$shadowDefense,$noneDefense,$allDefense);
	
	$_SESSION['SpellsData'] = array($powerArray,$fireSpells,$timeSpells,$justiceSpells,$primalSpells,$shadowSpells,$noneSpells,$allSpells);
	
	$_SESSION['AttachmentsData'] = array($powerArray,$fireAttachments,$timeAttachments,$justiceAttachments,$primalAttachments,$shadowAttachments,$noneAttachments,$allAttachments);
	
	$_SESSION['WeaponsData'] = array($powerArray,$fireWeapons,$timeWeapons,$justiceWeapons,$primalWeapons,$shadowWeapons,$noneWeapons,$allWeapons);
	
	$_SESSION['RelicWeaponsData'] = array($powerArray,$fireRelicWeapons,$timeRelicWeapons,$justiceRelicWeapons,$primalRelicWeapons,$shadowRelicWeapons,$noneRelicWeapons,$allRelicWeapons);
	
	$_SESSION['RelicsData'] = array($powerArray,$fireRelics,$timeRelics,$justiceRelics,$primalRelics,$shadowRelics,$noneRelics,$allRelics);
	
	$_SESSION['CursedRelicsData'] = array($powerArray,$fireCursedRelics,$timeCursedRelics,$justiceCursedRelics,$primalCursedRelics,$shadowCursedRelics,$noneCursedRelics,$allCursedRelics);
	
	$_SESSION['CursesData'] = array($powerArray,$fireCurses,$timeCurses,$justiceCurses,$primalCurses,$shadowCurses,$noneCurses,$allCurses);
	
	$_SESSION['Curses2Data'] = $_SESSION['CursesData'];
	
	$_SESSION['DebuffData'] = array($powerArray,$fireDebuff,$timeDebuff,$justiceDebuff,$primalDebuff,$shadowDebuff,$noneDebuff,$allDebuff);
	
	$_SESSION['Debuff2Data'] = $_SESSION['DebuffData'];
	
	$_SESSION['BuffData'] = array($powerArray,$fireBuff,$timeBuff,$justiceBuff,$primalBuff,$shadowBuff,$noneBuff,$allBuff);
	
	$_SESSION['InfluenceData'] = array($powerArray,$fireInfluence,$timeInfluence,$justiceInfluence,$primalInfluence,$shadowInfluence,$noneInfluence);	
	
	$_SESSION['CycleData'] = array($powerArray,$fireCycle,$timeCycle,$justiceCycle,$primalCycle,$shadowCycle,$noneCycle,$allCycle);	
	
	$_SESSION['DrawData'] = array($powerArray,$fireDraw,$timeDraw,$justiceDraw,$primalDraw,$shadowDraw,$noneDraw,$allDraw);	
	
	$_SESSION['ManipulateData'] = array($powerArray,$fireManipulate,$timeManipulate,$justiceManipulate,$primalManipulate,$shadowManipulate,$noneManipulate,$allManipulate);	
	
	$_SESSION['DiscardData'] = array($powerArray,$fireDiscard,$timeDiscard,$justiceDiscard,$primalDiscard,$shadowDiscard,$noneDiscard,$allDiscard);	
	
	$_SESSION['MillData'] = array($powerArray,$fireMill,$timeMill,$justiceMill,$primalMill,$shadowMill,$noneMill,$allMill);	
	
	$_SESSION['Mill2Data'] = $_SESSION['MillData'];
	
?>
