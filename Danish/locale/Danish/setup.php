<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Danish/setup.php
| Authors: Jan Mølgaard (janmol) & Helmuth Mikkelsen (helmuth)
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
$locale['setup_0000'] = "PHP-Fusion Version 9 installation";
$locale['setup_0001'] = "PHP-Fusion Version 9 installation";
$locale['setup_0002'] = 'Velkommen til installationsprogrammet for PHP-Fusion 9.00';
$locale['setup_0003'] = "Guiden her vil føre dig gennem de nødvendige trin til installationen af CMS løsningen PHP-Fusion på din server. Har du brug for yderligere hjælp, så kig i vores online <a target='_blank' class='strong' href='https://php-fusion.co.uk/infusions/wiki/documentation.php?page=208'>installationshjælp</a>.";
$locale['setup_0005'] = " Jeg har læst og accepteret de relevante PHP-Fusion <a target='_blank' href='https://php-fusion.co.uk/license/'>betingelser</a>.";
$locale['setup_0006'] = "PHP-Fusion 9 skal bruge PHP i mindst version 5.5.9. Se <a href=\"https://www.php-fusion.co.uk/requirements\">systemkravene</a> for at få mere information.";
$locale['setup_0007'] = "Systemer hvor OPcache er installeret skal have <a target='_blank' href=\"http://php.net/manual/en/opcache.configuration.php#ini.opcache.save-comments\">opcache.save_comments</a> slået til.";
$locale['setup_0020'] = "PHP-Fusion Opgradering";
$locale['setup_0021'] = "PHP-Fusion version 9 Opgraderingsfunktion";
$locale['setup_0022'] = "Velkommen til PHP-Fusions opgraderingsfunktion";
$locale['setup_0023'] = "Denne opgraderingsfunktion vil guide dig gennem de nødvendige trin for at du kan opgradere PHP-Fusion på din server. Følg de enkelte trin nøje og kontroller alle nødvendige informationer.";
$locale['setup_5000'] = "For at kunne bruge PHP-Fusion, skal du acceptere betingelserne</a>.";
$locale['setup_0010'] = '9.0';
$locale['setup_0011'] = "da";
$locale['setup_0012'] = "iso-8859-1";

$locale['setup_0050'] = "Webserver";
$locale['setup_0051'] = "PHP-Version";
$locale['setup_0052'] = "PHP Extension";
$locale['setup_0053'] = "OPCache support";
$locale['setup_0054'] = "PDO Database support";
$locale['setup_0055'] = "PHP Memory grænse";
$locale['setup_0056'] = "Kontrol af filtilladelser";

// Index
$locale['setup_0101'] = "Introduktion";
$locale['setup_0102'] = "Diagnose på foldere og filer";
$locale['setup_0103'] = "Databaseopsætning";
$locale['setup_0104'] = "Konfiguration / Opsætning af database";
$locale['setup_0104a'] = "Installerer PHP-Fusion";
$locale['setup_0105'] = "Opsætning af selve systemet";
$locale['setup_0106'] = "De vigtigste administrator informationer";
$locale['setup_0107'] = "Afsluttende opsætning";
$locale['setup_0109'] = "Ældste version af Apache nødvendig for at kunne afvikle PHP-Fusion uden at mod_rewrite er slået til, er 2.2.16.";
$locale['setup_0110'] = "På grund af opsætningen for Servertokens i httpd.confg, er det umuligt at fastslå versionen for Apache uden mod_rewrite. Version 2.2.16 er minimum.";
$locale['setup_0111'] = "Laveste versionsnummer for Apache som er nødvendigt for at afvikle PHP-Fusion uden at mod_rewrite er slået til, er 2.2.16.";
$locale['setup_0112'] = "Funktionen phpinfo() er slået fra af sikkerhedsårsager. Hvis du vil se serverens phpinfo() information, skal du ændre i opsætningen for PHP eller kontakte din udbyders administrator.";
$locale['setup_0113'] = "Den version af PHP, som er installeret på din server er for gammel. PHP-Fusion skal bruge mindst version of 5.5.21. PHP versioner over 5.6.5 eller 5.5.21 er udstyret med indbyggede blokeringer mod SQL injection for at beskytte databaserne. Det anbefales at man opgraderer.";
$locale['setup_0114'] = "PHP-Fusion kræver at du slår PHP extension til i følgende liste";
$locale['setup_0115'] = "Slået til";
$locale['setup_0115a'] = "Ikke slået til";
$locale['setup_0116'] = "PHP OPcode caching kan forbedre effektiviteten på din side betragteligt. Det anbefales <strong>kraftigt</strong> at få <a target='_blank' href='http://php.net/manual/opcache.installation.php'>OPcache</a> installeret på din server.";
$locale['setup_0118'] = "Det ser ikke ud til, at din server understøtter PDO (PHP Data Objects). Spørg hos din udbyder, om de understøtter PDO extension.";
$locale['setup_0119a'] = "Overvej at øge grænsen for memory allokeret til PHP til %memory_minimum_limit for at forebygge fejl under installation.";
$locale['setup_0119b'] = "Øg mængden af allokeret memory ved at rette værdien memory_limit i filen ".get_cfg_var('cfg_file_path')." og genstart så din webserver (eller kontakt din systemadministrator eller din udbyder for at få hjælp til det).";
$locale['setup_0119c'] = "Kontakt din systemadministrator eller din udbyder for at få hjælp til at øge grænsen for memory allokeret til PHP.";
$locale['setup_stepx'] = "Trin %1\$d: %2\$s";
// Buttons
$locale['setup_0120'] = "Gør konfigurationen færdig";
$locale['setup_0121'] = "Næste";
$locale['setup_0122'] = "Forsøg igen";
$locale['setup_0123'] = "Afslut";
$locale['setup_0124'] = "Spring til genskabelse";
$locale['setup_0125'] = "Afinstalltion er i gang. Vær så venlig at vente...";

$locale['setup_0130'] = "Xdebug opsætning";
$locale['setup_0131'] = "xdebug.max_nesting_level er sat til";
$locale['setup_0132'] = "Sæt {%code%} i din PHP-konfiguration da nogle sider på din Drupal-side ikke vil virke da denne værdi er sat for lavt.";
$locale['setup_0134'] = "Alle krævede filer har de korrekte adgangsrettigheder.";
$locale['setup_0135'] = "For at installationen kan gå videre, skal følgende filer og foldere være skrivbare. Sæt rettighederne til 755 eller 777 for at gå videre";
$locale['setup_0136'] = "Ikke skrivbar (Fejl)";
$locale['setup_0137'] = "Skrivbar (OK)";
$locale['setup_0138'] = "Forbindelsen til databasen er etableret";
$locale['setup_0139'] = "Forbindelsen til datakolonner er etableret";
$locale['setup_0140'] = "Databasen er tilgængelig og klar til installation";
$locale['setup_0141'] = "Tilladelser og adgang til databasen er kontrolleret";
$locale['setup_0142'] = "config.php filen er oprettet";
$locale['setup_0143'] = "Det angivne tabel-fornavn er allerede i brug og åbent. Installationsprogrammet vil gå videre og foretage nødvendige ændringer";
$locale['setup_0144'] = "Diagnosen af databasen er gennemført";

// Step 1
$locale['setup_1000'] = "Du skal vælge sprogversion (sprog):";
$locale['setup_1001'] = "Hent flere lokale sprogversioner fra <a target='_blank' href='https://www.php-fusion.co.uk/downloads.php#langpacks'><strong>PHP-Fusions officielle støtteside</strong></a>";
$locale['setup_1002'] = 'Velkommen til PHP-Fusion version 9.00 Genskabelse.';
$locale['setup_1003'] = 'Vi kan se, at der allerede er en version af systemet installeret.<br/><br/>Vælg en blandt nedenstående alternativer for at fortsætte.';
$locale['setup_1004'] = 'Geninstaller';
$locale['setup_1005'] = 'Du kan afinstallere og rense databasen og så påbegynde en frisk installation.';
$locale['setup_1006'] = 'LAV FØRST EN SIKKERHEDSKOPI AF CONFIG.PHP. DEN VIL BLIVE SLETTET UNDER AFINSTALLERING.';
$locale['setup_1007'] = 'Afinstaller og start forfra';
$locale['setup_1008'] = 'Installationsfunktion til kernefunktionerne';
$locale['setup_1009'] = 'Lav systemopsætningen om.';
$locale['setup_1010'] = 'Gå videre til systeminstallationen';
$locale['setup_1011'] = 'Rediger indstillingerne for den primære brugerkonto';
$locale['setup_1012'] = 'Rediger værdierne for systemets superadministrator uden at genskabe kontoens kodeord eller uden at overføre ejerskabet til en anden bruger.';
$locale['setup_1013'] = 'Rediger data for superadministrator';
$locale['setup_1014'] = 'Genopbyg .htaccess';
$locale['setup_1015'] = 'Slet den aktuelle fil og erstat den med standardudgaven af filen .htaccess';
$locale['setup_1016'] = 'Opbyg filen';

$locale['setup_1017'] = 'Fortryd og forlad denne installationsproces';
$locale['setup_1018'] = 'Du kan forlade installationen ved at klikke på knappen herunder. Gør du det, bliver filen config_temp.php navngivet config.php.';
$locale['setup_1019'] = 'Færdiggør installationen';
$locale['setup_1020'] = ".htaccess filen er blevet skabt eller opdateret";

// Step 2
$locale['setup_1090'] = "Filer";
$locale['setup_1091'] = "Status";
$locale['setup_1092'] = "Database konfiguration og driver";
$locale['setup_1100'] = 'I orden';
$locale['setup_1101'] = 'Ikke i orden';
$locale['setup_1102'] = 'Hvis installationen skal kunne fortsætte, så skal nedenstående filer / foldere sættes som <span class="label label-success">skrivbare</span> og skulle testen fejle alligevel, så brug kommandoen chmod til at ændre rettighederne til 755 eller 777';
$locale['setup_1103'] = 'Skriverettighederne står korrekt, klik på Næste for at fortsætte.';
$locale['setup_1104'] = 'Skriverettighederne står ikke korrekt. Du skal bruge kommandoen CHMOD på de filer/foldere, der er markeret med fejl.';
$locale['setup_1105'] = 'Genopfrisk';
$locale['setup_1106'] = 'Diagnose på filstrukturen';

// Step 3 - Access criteria
$locale['setup_1200'] = 'Opsætning af databaseværdier og stier på serveren';
$locale['setup_1201'] = 'Indskriv adgangsoplysningerne til din MySQL-database.';
$locale['setup_1202'] = "Databasens servernavn";
$locale['setup_1203'] = "Databasens brugernavn";
$locale['setup_1204'] = "Databasens kodeord";
$locale['setup_1205'] = "Databasens navn";
$locale['setup_1206'] = "Fornavn til tabeller";
$locale['setup_1207'] = "Fornavn til cookie";
$locale['setup_1208'] = "Skal PDO slås til?";
// Step 4 - Database Setup
$locale['setup_1209'] = "Det ser ikke ud til, at PDO er tilgængelig";
$locale['setup_1210'] = "Nej";
$locale['setup_1211'] = "Ja";
$locale['setup_1212'] = "Brug det sprog, som skal anvendes";
$locale['setup_1213'] = "Sideejerens navn ";
$locale['setup_1214'] = "Sidens navn ";
$locale['setup_1215'] = "En side oprettet med PHP-Fusion";
$locale['setup_1216'] = "PHP-Fusion er et open source content management system (CMS) kodet i PHP.";

$locale['setup_1217'] = "Din brugerkonto er opdateret. Brug venligst de nye informationer fremover.";

$locale['setup_1220'] = "Navnet på den database, du vil anvende som basis for PHP-Fusion";
$locale['setup_1221'] = "Dit MySQL-brugernavn";
$locale['setup_1222'] = "...og dit MySQL-kodeord";
$locale['setup_1223'] = "Sørg for at kodeordet er unikt for at sikre databasen";
$locale['setup_1224'] = "Cookiens fornavn";

// Step 4 - Database Setup
$locale['setup_1300'] = "Der er etableret en forbindelse til databasen.";
$locale['setup_1301'] = "Configfilen er skabt.";
$locale['setup_1302'] = "Tabellerne i databasen er oprettet.";
$locale['setup_1303'] = "Fejl";
$locale['setup_1304'] = "Kunne ikke forbinde til databaseserveren.";
$locale['setup_1305'] = "Kontroller at brugernavn og kodeord til din MySQL-database er korrekte.";
$locale['setup_1306'] = "Var ikke i stand til at skabe configfilen.";
$locale['setup_1307'] = "Kontroller at din config.php har de korrekte rettigheder.";
$locale['setup_1308'] = "Kunne ikke oprette tabellerne i databasen.";
$locale['setup_1309'] = "Du skal angive navnet på din database.";
$locale['setup_1310'] = "Kunne ikke komme i kontakt med din MySQL-database.";
$locale['setup_1311'] = "Den angivne MySQL-database eksisterer ikke.";
$locale['setup_1312'] = "Fejl i tabellernes fornavn.";
$locale['setup_1313'] = "Det angivne tabelfornavn bruges allerede.";
$locale['setup_1314'] = "Kunne ikke danne eller slette tabeller i din MySQL-database.";
$locale['setup_1315'] = "Du skal sikre dig, at den angivne bruger til databasen har læse, skrive og slette tilladelse i den angivne database.";
$locale['setup_1316'] = "Tomme felter.";
$locale['setup_1317'] = "Kontroller at du har udfyldt alle felter i relation til tilkobling til databasen.";
// Step 5
$locale['setup_1400'] = "Opsæt værdier i forhold til selve systemet.";
$locale['setup_1401'] = "VIGTIGT: Lav en sikkerhedskopi, før du går videre. Når en installation fjernes, så bliver alle informationer slettet uigenkaldeligt.";
$locale['setup_1402'] = "Hovedsystemet er klart til brug.";
$locale['setup_1403'] = "Din side er nu sat helt op.<br/><br/>Hvis du endnu ikke har oprettet din superadministrator, så gå videre til næste trin. Ellers kan du nu slette installationsprogrammet.";
$locale['setup_1404'] = 'Installér';
$locale['setup_1405'] = 'Afinstaller';
$locale['setup_1406'] = '%s systemet er installeret korrekt.';
$locale['setup_1407'] = '%s installationen lykkedes ikke.';
$locale['setup_1408'] = '%s systemet er blevet fjernet.';
$locale['setup_1409'] = '%s systemet kan ikke fjernes eller fik fejl.';
$locale['setup_1510'] = "Mailadresse for siden";
$locale['setup_1511'] = "Vælg region for webside";
$locale['setup_1512'] = "Sprogversioner på siden";
$locale['setup_1513'] = "Sideejerens navn";
// Step 6 - Super Admin login
$locale['setup_1500'] = "Primær superadministrator";
$locale['setup_1501'] = "Opsæt værdier for din primære superadministratorkonto.";
$locale['setup_1502'] = "Rediger værdier for den primære superadministrator";
$locale['setup_1503'] = "Vi kan se, at der allerede eksisterer en superadministrator. Hvis du har brug for at ændre data for denne bruger, så indtast nye oplysninger for at opdatere systemet med disse informationer. ";
$locale['setup_1504'] = "Brugernavn";
$locale['setup_1505'] = "Kodeord";
$locale['setup_1506'] = "Gentag kodeordet ";
$locale['setup_1507'] = "Administratorkodeord ";
$locale['setup_1508'] = "Gentag administratorkodeord ";
$locale['setup_1509'] = "Mailadresse ";
// Step 6 - User details validation
$locale['setup_5010'] = "Brugernavnet indeholder forbudte karakterer.";
$locale['setup_5011'] = "Brugernavnet skal angives.";
$locale['setup_5012'] = "De to kodeord er ikke identiske.";
$locale['setup_5013'] = "Kodeordet overholder ikke reglerne. Der må kun bruges alfanumeriske karakterer. Og kodeordet skal være på mindst 8 tegn.";
$locale['setup_5014'] = "Der skal opgives kodeord i begge felter";
$locale['setup_5015'] = "De to administratorkodeord er ikke identiske.";
$locale['setup_5016'] = "Kodeord og administratorkodeord må ikke være ens.";
$locale['setup_5017'] = "Administratorkodeordet har forkert format. Der må kun anvendes alfanumeriske karakterer. Og administratorkodeordet skal være på mindst 8 tegn.";
$locale['setup_5018'] = "Der skal angives et indhold i felterne til administratorkodeordet.";
$locale['setup_5019'] = "Det ser ud, som om din mailadresse er fejlbehæftet.";
$locale['setup_5020'] = "Der skal opgives en mailadresse.";
$locale['setup_5021'] = "Din brugeropsætning er ikke korrekt";
// Step 6 - Admin Panels
$locale['setup_3000'] = "Administratorer";
$locale['setup_3001'] = "Artikelkategorier";
$locale['setup_3002'] = "Artikler";
$locale['setup_3003'] = "Bannere";
$locale['setup_3004'] = "BB-koder";
$locale['setup_3005'] = "Blacklist";
$locale['setup_3006'] = "Kommentarer";
$locale['setup_3007'] = "Brugeroprettede sider";
$locale['setup_3008'] = "Database sikkerhedskopi";
$locale['setup_3009'] = "Downloadkategorier";
$locale['setup_3010'] = "Downloads";
$locale['setup_3011'] = "FAQs";
$locale['setup_3012'] = "Debatter";
$locale['setup_3013'] = "Billeder";
$locale['setup_3014'] = "Infusioner";
$locale['setup_3015'] = "Infusionselementer";
$locale['setup_3016'] = "Brugere";
$locale['setup_3017'] = "Nyhedskategorier";
$locale['setup_3018'] = "Nyheder";
$locale['setup_3019'] = "Elementer";
$locale['setup_3020'] = "Fotoalbums";
$locale['setup_3021'] = "PHP information";
$locale['setup_3022'] = "Brugerafstemninger";
$locale['setup_3023'] = "Interne links";
$locale['setup_3024'] = "Smileys";
$locale['setup_3025'] = "Forslag";
$locale['setup_3026'] = "Opgradering";
$locale['setup_3027'] = "Brugergrupper";
$locale['setup_3028'] = "Linkkategorier";
$locale['setup_3029'] = "Links";
$locale['setup_3030'] = "Hovedopsætning";
$locale['setup_3031'] = "Tidspunkter og datoer";
$locale['setup_3032'] = "Debat";
$locale['setup_3033'] = "Brugeroprettelse";
$locale['setup_3034'] = "Fotoalbums";
$locale['setup_3035'] = "Diverse";
$locale['setup_3036'] = "Private beskeder";
$locale['setup_3037'] = "Brugerfelter";
$locale['setup_3038'] = "Debat: Brugerkategorier";
$locale['setup_3039'] = "Kategorier for brugerfelter";
$locale['setup_3040'] = "Nyheder";
$locale['setup_3041'] = "Brugeradministration";
$locale['setup_3042'] = "Downloads";
$locale['setup_3043'] = "Antal elementer pr. side";
$locale['setup_3044'] = "Sikkerhed";
$locale['setup_3045'] = "Nyhedsopsætning";
$locale['setup_3046'] = "Opsætning downloads";
$locale['setup_3047'] = "Nulstil administratorkodeord";
$locale['setup_3048'] = "Fejllog";
$locale['setup_3049'] = "Brugerlog";
$locale['setup_3050'] = "robots.txt";
$locale['setup_3051'] = "Sprogopsætning";
$locale['setup_3052'] = "Permalinks";
$locale['setup_3054'] = "Blogkategorier";
$locale['setup_3055'] = "Blog";
$locale['setup_3056'] = "Tema";
$locale['setup_3057'] = "Opgraderingsværktøj";
$locale['setup_3058'] = "Temaopsætning";
//Multilanguage table rights
$locale['setup_3200'] = "Artikler";
$locale['setup_3201'] = "Brugeroprettede sider";
$locale['setup_3202'] = "Downloads";
$locale['setup_3203'] = "FAQs";
$locale['setup_3204'] = "Debatter";
$locale['setup_3205'] = "Nyheder";
$locale['setup_3206'] = "Fotoalbum";
$locale['setup_3207'] = "Brugerafstemninger";
$locale['setup_3208'] = "Skabeloner til mails";
$locale['setup_3209'] = "Links";
$locale['setup_3210'] = "Interne links";
$locale['setup_3211'] = "Elementer";
$locale['setup_3212'] = "Debat: Brugerkategorier";
$locale['setup_3213'] = "Blog";
// Step 6 - Navigation Links
$locale['setup_3300'] = "Hjem";
$locale['setup_3301'] = "Artikler";
$locale['setup_3302'] = "Downloads";
$locale['setup_3303'] = "FAQ";
$locale['setup_3304'] = "Debatforum";
$locale['setup_3305'] = "Kontakt siden";
$locale['setup_3306'] = "Nyhedskategorier";
$locale['setup_3307'] = "Links";
$locale['setup_3308'] = "Fotoalbum";
$locale['setup_3309'] = "Søg";
$locale['setup_3310'] = "Foreslå link";
$locale['setup_3311'] = "Foreslå nyhed";
$locale['setup_3312'] = "Foreslå artikel";
$locale['setup_3313'] = "Foreslå billede";
$locale['setup_3314'] = "Foreslå download";
$locale['setup_3315'] = "Brugerforslag";
$locale['setup_3317'] = "Foreslå blog";
$locale['setup_3318'] = "Blogarkiv";
$locale['setup_3319'] = "Seneste diskussioner";
$locale['setup_3320'] = "Aktive diskussioner";
$locale['setup_3321'] = "Diskussioner med tracking";
$locale['setup_3322'] = "Ubesvarede indlæg";
$locale['setup_3323'] = "Ubesvarede spørgsmål";
$locale['setup_3324'] = "Start nyt emne";
$locale['setup_3325'] = "Nyeste artikler";
// Stage 6 - Panels
$locale['setup_3400'] = "Navigation";
$locale['setup_3401'] = "Brugere online";
$locale['setup_3402'] = "Debatemner";
$locale['setup_3403'] = "Seneste artikler";
$locale['setup_3404'] = "Velkomstbesked";
$locale['setup_3405'] = "Liste over debatemner";
$locale['setup_3406'] = "Brugerinformation";
$locale['setup_3407'] = "Brugerafstemning";
$locale['setup_3408'] = "RSS";
$locale['setup_3608'] = "Veteran";
$locale['setup_3316'] = "Replikboks";
$locale['setup_3326'] = "Seneste downloads"; 
$locale['setup_3327'] = "Foreslå FAQ";
// Stage 6 - News Categories
$locale['setup_3500'] = "Fejl";
$locale['setup_3501'] = "Downloads";
$locale['setup_3502'] = "Spil";
$locale['setup_3503'] = "Grafik";
$locale['setup_3504'] = "Hardware";
$locale['setup_3505'] = "Journal";
$locale['setup_3506'] = "Brugere";
$locale['setup_3507'] = "Systemmodifikationer";
$locale['setup_3508'] = "Film";
$locale['setup_3509'] = "Netværk";
$locale['setup_3510'] = "Nyheder";
$locale['setup_3511'] = "PHP-Fusion";
$locale['setup_3512'] = "Sikkerhed";
$locale['setup_3513'] = "Software";
$locale['setup_3514'] = "Temaer";
$locale['setup_3515'] = "Windows";
// Stage 6 - Sample Forum Ranks
$locale['setup_3600'] = "Superadministrator";
$locale['setup_3601'] = "Administrator";
$locale['setup_3602'] = "Ordstyrer";
$locale['setup_3603'] = "Nyt medlem";
$locale['setup_3604'] = "Juniormedlem";
$locale['setup_3605'] = "Medlem";
$locale['setup_3606'] = "Erfaren bruger";
$locale['setup_3607'] = "Veteran";
$locale['setup_3608'] = "Fusioneer";
// Stage 6 - Sample Smileys
$locale['setup_3620'] = "Smil";
$locale['setup_3621'] = "Blink";
$locale['setup_3622'] = "Trist";
$locale['setup_3623'] = "Panderynken";
$locale['setup_3624'] = "Chok";
$locale['setup_3625'] = "Pfft";
$locale['setup_3626'] = "Fedt";
$locale['setup_3627'] = "Bredt grin";
$locale['setup_3628'] = "Vred";
$locale['setup_3629'] = "Synes om";
// Stage 6 - User Field Categories
$locale['setup_3640'] = "Profil";
$locale['setup_3641'] = "Kontaktinformation";
$locale['setup_3642'] = "Diverse informationer";
$locale['setup_3643'] = "Valgmuligheder";
$locale['setup_3644'] = "Statistik";
$locale['setup_3645'] = "Privatliv";

// Stage 6 - User Fields
require_once(dirname(__FILE__)."/user_fields/user_aim.php");
require_once(dirname(__FILE__)."/user_fields/user_birthdate.php");
require_once(dirname(__FILE__)."/user_fields/user_icq.php");
require_once(dirname(__FILE__)."/user_fields/user_location.php");
require_once(dirname(__FILE__)."/user_fields/user_sig.php");
require_once(dirname(__FILE__)."/user_fields/user_skype.php");
require_once(dirname(__FILE__)."/user_fields/user_theme.php");
require_once(dirname(__FILE__)."/user_fields/user_web.php");
require_once(dirname(__FILE__)."/user_fields/user_yahoo.php");
// Make checks on new files that comes with 9
require_once(dirname(__FILE__)."/user_fields/user_timezone.php");
require_once(dirname(__FILE__)."/user_fields/user_blacklist.php");

// Welcome message
$locale['setup_3650'] = "Velkommen til din side";
// Final message
$locale['setup_1600'] = "Installationen er færdig";
$locale['setup_1601'] = "PHP-Fusion version 9.00 er nu klar til at blive taget i brug. Klik på afslut for at få gemt din config_temp.php fil som config.php<br/>";
$locale['setup_1602'] = "<strong>Bemærk: Når du første gang går ind på din nye side, så skal du slette hele folderen includes/classes/PHPFusion/install og ændre rettigheder på din config.php til 0644 af sikkerhedsmæssige årsager.</strong>";
$locale['setup_1603'] = "Tak fordi du valgte PHP-Fusion.";
// Default time settings
// http://php.net/manual/en/function.strftime.php
$locale['setup_3700'] = "%d.%m.%y";
$locale['setup_3701'] = "%B %d %Y %H:%M:%S";
$locale['setup_3702'] = "%d-%m-%Y %H:%M";
$locale['setup_3703'] = "%B %d %Y";
$locale['setup_3704'] = "%B %d %Y %H:%M:%S";
// Email Template Setup
// Please do NOT translate the words between brackets [] !
$locale['setup_3800'] = "Mailskabeloner";
$locale['setup_3801'] = "Underretning ved ny privat besked";
$locale['setup_3802'] = "Du har modtaget en ny privat besked fra [USER]. Den kan ses på [SITENAME]";
$locale['setup_3803'] = "Hej [RECEIVER],\r\n\r\nDer er blevet skrevet et indlæg i debatten \'[SUBJECT]\' som du følger på [SITENAME]. Du kan bruge følgende link til at se indlægget:\r\n\r\n[THREAD_URL]\r\n\r\nHvis du ikke længere ønsker den slags underretninger, kan du klikke på linket \'Hold op med at følge\' i toppen af debatten.\r\n\r\nVenligst,\r\n[SENDER].";
$locale['setup_3804'] = "Underretning ved nye debatindlæg";
$locale['setup_3805'] = "Der er kommet et nyt indlæg - [SUBJECT]";
$locale['setup_3806'] = "Hej [RECEIVER],\r\n\r\nDer er blevet skrevet et indlæg i debatten \'[SUBJECT]\' som du følger på [SITENAME]. Du kan bruge følgende link til at se indlægget:\r\n\r\n[THREAD_URL]\r\n\r\nHvis du ikke længere ønsker den slags underretninger, kan du klikke på linket \'Hold op med at følge\' i toppen af debatten.\r\n\r\nVenligst,\r\n[SENDER].";
$locale['setup_3807'] = "Kontaktformular";
$locale['setup_3808'] = "[SUBJECT]";
$locale['setup_3809'] = "[MESSAGE]";
// Language Admin
$locale['setup_3900'] = "Flersprogsudgave";
// Official Supported System List
$locale['articles']['title'] = "Artikler";
$locale['articles']['description'] = "Et dokumentationssystem.";
$locale['blog']['title'] = "Blog";
$locale['blog']['description'] = "Et blogsystem.";
$locale['downloads']['title'] = "Downloads";
$locale['downloads']['description'] = "Et downloadsystem.";
$locale['faqs']['title'] = "FAQ";
$locale['faqs']['description'] = "Ofte stillede spørgsmål.";
$locale['forums']['title'] = "Debatforum";
$locale['forums']['description'] = "Et debatsystem.";
$locale['news']['title'] = "Nyheder";
$locale['news']['description'] = "En nyhedsløsning.";
$locale['photos']['title'] = "Billeder";
$locale['photos']['description'] = "Et system til oprettelse af fotoalbums.";
$locale['polls']['title'] = "Brugerafstemninger";
$locale['polls']['description'] = "Et system til oprettelse af brugerafstemninger.";
$locale['weblinks']['title'] = "Links";
$locale['weblinks']['description'] = "Et system til håndtering af links.";
$locale['install'] = "Installer systemet";

/*
 * Home setup
 */
//$locale['homeSetup_0100'] = 'Hjem';
//$locale['homeSetup_0101'] = 'Velkommen til din PHP-Fusion 9 hjemmeside';
//$locale['homeSetup_0102'] = '[b]Tillykke med din første installation[/b]';
//$locale['homeSetup_0103'] = 'Den letteste måde at få oprettet en [i]professionel[/i] hjemmeside.[b] Nu begynder vi[/b]';
//$locale['homeSetup_0104'] = "Karussel";
//$locale['homeSetup_0105'] = "Funktionsboks";
//$locale['homeSetup_0106'] = "Element";
//$locale['homeSetup_0107'] = "Blok";
//$locale['homeSetup_0110'] = "Seneste";
//$locale['homeSetup_0111'] = "Se det nyeste, der er sket";
//$locale['homeSetup_0112'] = "Tema";
//$locale['homeSetup_0113'] = "Vores tema sikrer flot design og kraftfulde funktioner til din hjemmeside. Perfekt tilrettelagt for at sikre en fleksibel hjemmeside.";
//$locale['homeSetup_0114'] = "Årsagen til at du vil elske PHP-Fusion 9";
//$locale['homeSetup_0115'] = "Med over en million linjer kode leverer vi et CMS, der ikke ligner noget andet, og stadigvæk er PHP-Fusion 9 en letvægtsløsning, hurtigere, smartere og smukkere end før.";
//$locale['homeSetup_0116'] = "Verdensomspændende netværk af udviklere";
//$locale['homeSetup_0117'] = "[h4]PHP-Fusion Developers Network[/h4]";
//$locale['homeSetup_0118'] = "[p]Få hjælp til udvikling af kode, find udviklere eller ideer til finansiering. Og det hele deles i Open Source.
//Start din deltagelse i fællesskabet i dag.[/p]";
//$locale['homeSetup_0119'] = "Forbavsende let at bruge for alle og enhver";
//$locale['homeSetup_0120'] = "Gå bare i gang med at eksperimentere. Intet kan gå galt med dette fantastiske CMS.";
