<?php
/* $Id$ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('B', 'KB', 'MB', 'GB');

$day_of_week = array('Sekmadienis', 'Pirmadienis', 'Antradienis', 'Trečiadienis', 'Ketvirtadienis', 'Penktadienis', 'Šeštadienis');
$month = array('Sausio', 'Vasario', 'Kovo', 'Balandžio', 'Gegužio', 'Birželio', 'Liepos', 'Rugpjūčio', 'Rugsėjo', 'Spalio', 'Lapkričio', 'Gruodžio');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = ' %Y m. %B %d d.  %H:%M';
$timespanfmt = '%s d., %s val., %s min. ir %s s.';

$strAPrimaryKey = 'Stulpeliui %s sukurtas PIRMINIS raktas';
$strAbortedClients = 'Atmesti prisijungimai';
$strAbsolutePathToDocSqlDir = 'Prašome nurodyti absoliutų kelią iki docSQL katalogo serveryje';
$strAccessDenied = 'Priėjimas uždraustas';
$strAction = 'Valdymo veiksmai';
$strAddDeleteColumn = 'Įterpti/Trinti stulpelius';
$strAddDeleteRow = 'Įterpti/Trinti požymio eilutę(es)';
$strAddNewField = 'Įterpti naują laukelį(ius)';
$strAddPriv = 'Įterpti privilegiją(as)';
$strAddPrivMessage = 'Jūs įterpėte privilegijas.';
$strAddPrivilegesOnDb = 'Sukurti privilegijas šiai duomenų bazei';
$strAddPrivilegesOnTbl = 'Sukurti privilegijas šiai lentelei';
$strAddSearchConditions = 'Įterpkite paieškos sąlygas į "where" sakinį:';
$strAddToIndex = 'Įterpti indeksui papildomus &nbsp;%s&nbsp;stulpelį(ius)';
$strAddUser = 'Sukurti naują vartotoją';
$strAddUserMessage = 'Jūs sukūrėte naują vartotoją.';
$strAddedColumnComment = 'Pridėtas stulpelio komentaras';
$strAddedColumnRelation = 'Pridėtas stulpelio sąryšis';
$strAdministration = 'Administracija';
$strAffectedRows = 'Pakeista eilučių:';
$strAfter = 'Po %s';
$strAfterInsertBack = 'Sugrįžti į buvusį puslapį';
$strAfterInsertNewInsert = 'Įterpti sekančią naują eilutę';
$strAll = 'Viską';
$strAllTableSameWidth = 'rodyti visas lenteles vienodo pločio?';
$strAlterOrderBy = 'Pakeisti lentelės rūšiavimą pagal:';
$strAnIndex = 'Indeksas sukurtas %s stulpeliui';
$strAnalyzeTable = 'Analizuoti lentelę';
$strAnd = 'IR';
$strAny = 'Bet kurį(ią)';
$strAnyColumn = 'Bet kurį stulpelį';
$strAnyDatabase = 'Bet kurią duomenų bazę';
$strAnyHost = 'Bet kurį prisijungimo adresą';
$strAnyTable = 'Bet kurią lentelę';
$strAnyUser = 'Bet kurį vartotoją';
$strAscending = 'Didėjimo tvarka';
$strAtBeginningOfTable = 'Lentelės pradžioje';
$strAtEndOfTable = 'Lentelės pabaigoje';
$strAttr = 'Atributai';

$strBack = 'Atgal';
$strBeginCut = 'KIRPIMO PRADŽIA';
$strBeginRaw = 'RAW PRADŽIA';
$strBinary = 'Dvejetainis';
$strBinaryDoNotEdit = 'Dvejetainis - nekeisti';
$strBookmarkDeleted = 'Nuoroda ištrinta.';
$strBookmarkLabel = 'Nuorodos Antraštė';
$strBookmarkQuery = 'Sukurti nuoroda SQL-užklausai';
$strBookmarkThis = 'Sukurti nuorodą';
$strBookmarkView = 'Peržiūra';
$strBrowse = 'Peržiūrėti';
$strBzError = 'phpMyAdmin negalėjo suspausti lentelės struktūros atvaizdį (dump), nes šioje php versijoje neveikia Bz2 modulis. Rekomenduojame phpMyAdmin konfigūracinėje byloje <code>$cfg[\'BZipDump\']</code> direktyvą prilyginti <code>FALSE</code>. Atnaujinkite savo php versiją, jeigu norite naudotis Bz2 moduliu. Detalesnė informacija: %s.';
$strBzip = '"bzip"';

$strCannotLogin = 'Neprisijungia prie MySQL serverio';
$strCantLoad = 'negalima įkrauti %s plėtinio,<br />pasitikrinkite php konfigūraciją';
$strCantLoadMySQL = 'negali užkrauti MySQL proceso,<br />patikrinkite PHP nustatymus.';
$strCantLoadRecodeIconv = 'Nepavyko užkrauti <em>iconv</em> arba <em>recode</em> plėtinių, reikalingų koduotės kovertavimui. Suteikite PHP teises naudotis šiais išplėtimais arba išjunkite phpMyAdmin koduotės konvertavimą. ';
$strCantRenameIdxToPrimary = 'Indeksą pervadinti PIRMINIU nepavyko!';
$strCantUseRecodeIconv = 'Kraunant plėtinių pranešimus, nepavyko pasinaudoti <em>iconv</em> arba <em>libiconv</em> arba <em>recode_string</em> funkcijomis. Pasitkrinkite PHP konfigūraciją. ';
$strCardinality = 'Elementų skaičius';
$strCarriage = 'Grįžimo į eilutės pradžią simbolis(CR): \\r';
$strChange = 'Redaguoti';
$strChangeDisplay = 'Pasirinkite lauką, kurį norite peržiūrėti';
$strChangePassword = 'Pakeisti slaptažodį';
$strCharsetOfFile = 'Simbolių koduotė byloje:';
$strCheckAll = 'Pažymėti viską';
$strCheckDbPriv = 'Pažymėti duomenų bazės privilegijas';
$strCheckPrivs = 'Patikrinti privilegijas';
$strCheckPrivsLong = 'Patikrinti duombazės &quot;%s&quot; privilegijas.';
$strCheckTable = 'Patikrinti lentelę';
$strChoosePage = 'Pasirinkite puslapį redagavimui';
$strColComFeat = 'Stulpelių komentarų išvedimas';
$strColumn = 'Stulpelis';
$strColumnNames = 'Stulpelių vardai';
$strColumnPrivileges = 'Specifinės stulpelių privilegijos';
$strCommand = 'Komanda';
$strComments = 'Komentarai';
$strCompleteInserts = 'Visiškas įterpimas';
$strCompression = 'Kompresija';
$strConfigFileError = 'phpMyAdmin negalėjo perskaityti konfigūracinės bylos!<br />Tai galėjo nutikti jeigu <u>php</u> rado byloje vykdymo klaidą arba visai nerando bylos.<br />Prašome kreiptis į konfigūracinę bylą tiesiogiai (naudojantis nuoroda žemiau) ir perskaityti gautus <u>php</u> klaidų pranešimą(us). Daugeliu atveju vienoje/keletoje eilučių truksta kabučių ir/arba kabliataškio.<br />Jeigu išvedamas tuščias naršyklės langas - viskas tvarkoje (klaidų nepastebėta).';
$strConfigureTableCoord = 'Nustatykite lentelės %s koordinates';
$strConfirm = 'Ar TIKRAI norite atlikti šį veiksmą?';
$strConnections = 'Prisijungimai';
$strCookiesRequired = 'Sausainėliai(Cookies) turi būti priimami.';
$strCopyTable = 'Kopijuoti lentelė į (duomenų bazė<b>.</b>lentelė):';
$strCopyTableOK = 'Letelė %s nukopijuota į %s.';
$strCouldNotKill = 'phpMyAdmin negalėjo išjungti %s proceso. Gali būti jog jis jau užbaigė darbą.';
$strCreate = 'Sukurti';
$strCreateIndex = 'Sukurti indeksą &nbsp;%s&nbsp;stulpeliui(iams)';
$strCreateIndexTopic = 'Sukurti naują indeksą';
$strCreateNewDatabase = 'Sukurti naują duomenų bazę';
$strCreateNewTable = 'Sukurti naują lentelę duomenų bazėje %s';
$strCreatePage = 'Sukurti naują puslapį';
$strCreatePdfFeat = 'PDF bylos generavimas';
$strCriteria = 'Kriterijai';

$strDBGContext = 'Kontekstas';
$strDBGContextID = 'Konteksto ID';
$strDBGHits = 'Užklausos';
$strDBGLine = 'Eilutė';
$strDBGMaxTimeMs = 'Max laikas, ms';
$strDBGMinTimeMs = 'Min laikas, ms';
$strDBGModule = 'Modulis';
$strDBGTimePerHitMs = 'Laikas/Užklausa, ms';
$strDBGTotalTimeMs = 'Pilnas laikas, ms';
$strData = 'Duomenys';
$strDataDict = 'Duomenų žodynas';
$strDataOnly = 'Tik duomenys';
$strDatabase = 'Duombazė ';
$strDatabaseHasBeenDropped = 'Duomenų bazė %s ištrinta.';
$strDatabaseWildcard = 'Duomenų bazė (galima naudoti pakaitos simbolius):';
$strDatabases = 'duombazės';
$strDatabasesDropped = 'Sėkmingai pašalintos %s duombazės.';
$strDatabasesStats = 'Duomenų bazių statistika';
$strDatabasesStatsDisable = 'Leisti statistiką';
$strDatabasesStatsEnable = 'Neleisti statistikos';
$strDatabasesStatsHeavyTraffic = 'Pastaba: Apkrovimas tarp webserverio ir MySQL gali padidėti aukščiau normos, jeigu leisite duombazės statistiką.';
$strDbPrivileges = 'Specifinės duomenų bazių privilegijos';
$strDefault = 'Nutylint';
$strDefaultValueHelp = 'Nenaudokite išskyrimo simbolių ar kabučiu, nurodydami reikšmę pagal nutylėjimą. Naudokitės šiuo formatu: a';
$strDelete = 'Trinti';
$strDeleteAndFlush = 'pašalinti vartotojus ir perkrauti privilegijas.';
$strDeleteAndFlushDescr = 'Tai yra švariausias būdas, bet privilegijų perkrovimas gali šiek tiek užtrukti.';
$strDeleteFailed = 'Trynimo klaida!';
$strDeleteUserMessage = 'Jūs ištynėte vartotoją %s.';
$strDeleted = 'Eilutė ištrinta';
$strDeletedRows = 'Eilutės ištrintos:';
$strDeleting = 'Šaliname: %s';
$strDescending = 'Mažėjimo tvarka';
$strDisabled = 'Išjungta';
$strDisplay = 'Atvaizduoti';
$strDisplayFeat = 'Išvedimo sąvybės';
$strDisplayOrder = 'Atvaizdavimo tvarka:';
$strDisplayPDF = 'Rodyti PDF vaizdą';
$strDoAQuery = 'Vykdyti "užklausą pagal pavyzdį" (pakaitos simbolis: "%")';
$strDoYouReally = 'Ar TIKRAI norite ';
$strDocu = '?';
$strDrop = 'Šalinti';
$strDropDB = 'Panaikinti duomenų bazę %s';
$strDropSelectedDatabases = 'Pašalinti pažymėtas duombazes';
$strDropTable = 'Panaikinti lentelę';
$strDropUsersDb = 'Pašalinti duomenų bazes, turinčias tokius pačius vardus kaip ir vartotojai.';
$strDumpXRows = 'Išvesti %s eilučių pradedant nuo %s eilutės.';
$strDumpingData = 'Sukurta duomenų kopija lentelei';
$strDynamic = 'dinaminis';

$strEdit = 'Redaguoti';
$strEditPDFPages = 'Redaguoti PDF puslapius';
$strEditPrivileges = 'Redaguoti privilegijas';
$strEffective = 'Efektyvus';
$strEmpty = 'Išvalyti';
$strEmptyResultSet = 'MySQL gražino tuščią rezultatų rinkinį (nėra eilučių).';
$strEnabled = 'Įjungta';
$strEnd = 'Pabaiga';
$strEndCut = 'KIRPIMO PABAIGA';
$strEndRaw = 'RAW PABAIGA';
$strEnglishPrivileges = ' Pastaba: MySQL privilegijų pavadinimai pateikiami anglų kalba';
$strError = 'Klaida';
$strExplain = 'Paaiškinti';
$strExport = 'Eksportuoti';
$strExportToXML = 'Išvesti XML formatu';
$strExtendedInserts = 'Išplėstinis įterpimas';
$strExtra = 'Papildomai';

$strFailedAttempts = 'Nepavykę bandymai';
$strField = 'Laukas';
$strFieldHasBeenDropped = 'Laukas %s išmestas';
$strFields = 'Lauką';
$strFieldsEmpty = ' Tuščia laukų skaičiaus reikšmė! ';
$strFieldsEnclosedBy = 'Laukų reikšmės apskliaustos  simboliais';
$strFieldsEscapedBy = 'Laukų reikšmės baigiasi simboliu';
$strFieldsTerminatedBy = 'Laukų pabaigos žymė';
$strFileCouldNotBeRead = 'Negalima perskaityti bylos';
$strFixed = 'fiksuotas';
$strFlushPrivilegesNote = 'Pastaba: phpMyAdmin gauna vartotojų teises tiesiai iš MySQL privilegijų lentelės. Šiose lentelėse nurodytos teisės gali skirtis nuo konfigūracinėse bylose nurodytų teisių. Todėl %sperkraukite teises%s, jeigu norite tęsti. ';
$strFlushTable = 'Išvalyti lentelę ("FLUSH")';
$strFormEmpty = 'Trūksta reikšmės formoje !';
$strFormat = 'Formatas';
$strFullText = 'Tekstus rodyti pilnai';
$strFunction = 'Funkcija';

$strGenBy = 'Generavo:';
$strGenTime = 'Atlikimo laikas';
$strGeneralRelationFeat = 'Pagrindinės sąryšių sąvybės';
$strGlobalPrivileges = 'Globalios teisės';
$strGlobalValue = 'Globali reikšmė';
$strGo = 'Vykdyti';
$strGrantOption = 'Suteikti';
$strGrants = 'Leisti';
$strGzip = '"gzipped"';

$strHasBeenAltered = 'išplėsta.';
$strHasBeenCreated = 'sukurta.';
$strHaveToShow = 'Pasirinkite bent vieną stulpelį išvedimui';
$strHome = 'Pradinis';
$strHomepageOfficial = 'Oficialus phpMyAdmin tinklapis';
$strHomepageSourceforge = 'Parsisiųsti phpMyAdmin iš Sourceforge tinklapio';
$strHost = 'Serveris';
$strHostEmpty = 'Tuščias prisijungimo adresas!';

$strId = 'ID';
$strIdxFulltext = 'Fulltext';
$strIfYouWish = 'Jei pageidaujate pakrauti keletą lentelės stulpelių, sudarykite laukų sąrašą atskirtą kabliataškiais.';
$strIgnore = 'Ignoruoti';
$strIgnoringFile = 'Ignoruojama byla %s';
$strImportDocSQL = 'Importuoti docSQL bylas';
$strImportFiles = 'Importuoti bylas';
$strImportFinished = 'Importavimas baigtas';
$strInUse = 'šiuo metu naudojama';
$strIndex = 'Indeksas';
$strIndexHasBeenDropped = 'Indeksas %s panaikintas';
$strIndexName = 'Indekso vardas&nbsp;:';
$strIndexType = 'Indekso tipas&nbsp;:';
$strIndexes = 'Indeksai';
$strInsecureMySQL = 'Jūsų konfigūracinėje byloje yra nurodyti standartiniai nustatymai (pvz: root vartotojas be slaptažožio). Taip sukonfiguruotas MySQL serveris yra nesaugus, bei gali būti atviras įsilaužimams, todėl rekomenduojame pakeisti šiuos nustatymus.';
$strInsert = 'Įterpti';
$strInsertAsNewRow = 'Įterpti naują įrašą';
$strInsertNewRow = 'Įterpti naują eilutę';
$strInsertTextfiles = 'Įterpti duomenis iš tekstinio failo į lentelę';
$strInsertedRows = 'Įterptą eilučių:';
$strInstructions = 'Instrukcijos';
$strInvalidName = '"%s" rezervuotas žodis, Jūs negalite šio žodžio naudoti kaip duomenų bazės, lentelės arba laukelio vardo.';

$strJumpToDB = 'Peršokti į &quot;%s&quot; duomenų bazę.';
$strJustDelete = 'tik pašalinti vartotojus iš privilegijų lentelės.';
$strJustDeleteDescr = 'Kol nėra perkrautos privilegijos, &quot;pašalinti&quot; vartotojai gali prisijungti prie serverio.';

$strKeepPass = 'Nekeisti slaptažodžio';
$strKeyname = 'Raktinis žodis';
$strKill = 'Stabdyti procesą';

$strLaTeX = 'LaTeX';
$strLandscape = 'Peizažinis';
$strLength = 'Ilgis';
$strLengthSet = 'Ilgis/reikšmės*';
$strLimitNumRows = 'Eilučių skaičius puslapyje';
$strLineFeed = 'Eilutės: \\n';
$strLines = 'Eilučių';
$strLinesTerminatedBy = 'Eilutės pabaigos žymė';
$strLinkNotFound = 'Sąryšis nerastas';
$strLinksTo = 'Sąryšis su';
$strLocalhost = 'Lokalus serveris';
$strLocationTextfile = 'Tekstiniai SQL užklausų failai';
$strLogPassword = 'Slaptažodis:';
$strLogUsername = 'Vartotojo vardas:';
$strLogin = 'Įsiregistruoti';
$strLoginInformation = 'Prisijungimo informacija';
$strLogout = 'Išsiregistruoti';

$strMissingBracket = 'Trūksta skliausto(ų)';
$strModifications = 'Pakeitimai išsaugoti';
$strModify = 'Keisti';
$strModifyIndexTopic = 'Keisti indeksą';
$strMoreStatusVars = 'Daugiau būsenos kintamųjų';
$strMoveTable = 'Perkelti lentelė į (duomenų bazė<b>.</b>lentelė):';
$strMoveTableOK = 'Lentelė %s perkelta į %s.';
$strMySQLCharset = 'MySQL koduotė';
$strMySQLReloaded = 'MySQL procesas perkrautas.';
$strMySQLSaid = 'MySQL atsakymas: ';
$strMySQLServerProcess = 'MySQL %pma_s1% procesas serveryje %pma_s2%. Įregistruotas vartotojas %pma_s3%';
$strMySQLShowProcess = 'Rodyti procesus';
$strMySQLShowStatus = 'Rodyti MySQL aplinkos būseną';
$strMySQLShowVars = 'Rodyti MySQL sistemos kintamuosius';

$strName = 'Pavadinimas';
$strNext = 'Sekantis';
$strNo = 'Ne';
$strNoDatabases = 'Nėra duomenų bazių';
$strNoDatabasesSelected = 'Nepažymėjote duombazės.';
$strNoDescription = 'Aprašymo nėra';
$strNoDropDatabases = '"DROP DATABASE" komandos įvykdyti negalima.';
$strNoExplain = 'Praleisti SQL užklausos aiškinimą';
$strNoFrames = 'phpMyAdmin draugiškesnis su <b>rėmelius</b> palaikančiomis naršyklėmis.';
$strNoIndex = 'Neaprašyti indeksai!';
$strNoIndexPartsDefined = 'Neaprašytos indekso dalys!';
$strNoModification = 'Nėra pakeitimų';
$strNoPassword = 'Nėra slaptažodžio';
$strNoPhp = 'be PHP kodo';
$strNoPrivileges = 'Nėra privilegijų';
$strNoQuery = 'Nėra SQL užklausos!';
$strNoRights = 'Neturite pakankamai teisių';
$strNoTablesFound = 'Duomenų bazėje nerasta lentelių.';
$strNoUsersFound = 'Nerasta vartotojo(ų).';
$strNoUsersSelected = 'Nepasirinkote vartotojo.';
$strNoValidateSQL = 'Praleisti SQL užklausos tikrinimą';
$strNone = 'Nėra';
$strNotNumber = 'Įveskite skaičių!';
$strNotOK = 'Negerai';
$strNotSet = 'Lentelė <b>%s</b> nerasta arba nenurodyta %s byloje';
$strNotValidNumber = ' netinkamas eilutės numeris!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s atitikmuo(enys) lentelėje <i>%s</i>';
$strNumSearchResultsTotal = '<b>Viso:</b> <i>%s</i> atitikmuo(enys)';
$strNumTables = 'Lentelės';

$strOK = 'Gerai';
$strOftenQuotation = 'Dažnai kartojasi kabutės. Pasirinktinai reiškia, kad tik  char ir varchar laukai yra uždaryti kabutėmis.';
$strOperations = 'Veiksmai';
$strOptimizeTable = 'Optimizuoti';
$strOptionalControls = 'Pasirinktinai. Kontroliuojama kaip skaitoma, rašoma specialiuosius simbolius.';
$strOptionally = 'Pasirinktinai';
$strOptions = 'Parinktys';
$strOr = 'Arba';
$strOverhead = 'Perteklius';

$strPHP40203 = 'Jūs naudojate PHP 4.2.3 versiją, kurioje yra rimta klaida, susiijusi su daugiabaičiais stringais (mbstring). Daugiau informacijos rasite PHP klaidų pranešime Nr.19404. <strong>NEREKOMENDUOJAME naudoti šios PHP versijos su phpMyAdmin</strong>.';
$strPHPVersion = 'PHP versija';
$strPageNumber = 'Puslapis:';
$strPartialText = 'Tekstus rodyti dalinai';
$strPassword = 'Slaptažodis';
$strPasswordChanged = 'Vartotojo %s slaptažodis sėkmingai pakeistas.';
$strPasswordEmpty = 'Tuščias slaptažodis!';
$strPasswordNotSame = 'Slaptažodžiai nesutampa!';
$strPdfDbSchema = 'Duomenų bazės "%s" schema - %s puslapis';
$strPdfInvalidPageNum = 'Nenurodytas PDF puslapio numeris!';
$strPdfInvalidTblName = 'Lentelė "%s" neegzistuoja!';
$strPdfNoTables = 'No tables';
$strPerHour = 'per valandą';
$strPhp = 'PHP kodas';
$strPmaDocumentation = 'phpMyAdmin\'o dokumentacija';
$strPmaUriError = 'Reikia konfigūraciniame faile įrašyti <tt>$cfg[\'PmaAbsoluteUri\']</tt> reikšmę!';
$strPortrait = 'Portretinis';
$strPos1 = 'Pradžia';
$strPrevious = 'Praėjęs';
$strPrimary = 'Pirminis';
$strPrimaryKey = 'Pirminis raktas';
$strPrimaryKeyHasBeenDropped = 'Panaikintas pirminis raktas';
$strPrimaryKeyName = 'Pirminio rakto pavadinimas turi būti "PRIMARY"!';
$strPrimaryKeyWarning = '("PRIMARY" <b>yra vienintelis</b> pirminio rakto tipas!)';
$strPrint = 'Spausdinti';
$strPrintView = 'Spausdinti struktūrą';
$strPrivDescAllPrivileges = 'Įtraukti visas teises, išskyrus GRANT.';
$strPrivDescAlter = 'Leisti keisti jau egzistuojančių lenetelių struktūrą.';
$strPrivDescCreateDb = 'Leisti kurti naujas duomenų bazes ir lenteles.';
$strPrivDescCreateTbl = 'Leisti kurti naujas lenteles.';
$strPrivDescCreateTmpTable = 'Leisti kurti laikinas lenteles.';
$strPrivDescDelete = 'Leisti šalinti duomenis.';
$strPrivDescDropDb = 'Leisti trinti duomenų bazes ir lenteles.';
$strPrivDescDropTbl = 'Leisti trinti lenteles.';
$strPrivDescExecute = 'Leisti vykdyti išsaugotas procedūras; Negalioja šioje MySQL versijoje.';
$strPrivDescFile = 'Leisti įterpti ir eksportuoti duomenis iš bylų.';
$strPrivDescGrant = 'Leisti įterpti naujus vartotojus, bei prisikirti privilegijas, neperkraunant privilegijų lentelės.';
$strPrivDescIndex = 'Leisti įterpti ir modifikuoti indeksus.';
$strPrivDescInsert = 'Leisti įterpti ir modifikuoti duomenis.';
$strPrivDescLockTables = 'Leisti užrakinti lenteles procesų metu.';
$strPrivDescMaxConnections = 'Riboti prisijungimų kiekį per valandą.';
$strPrivDescMaxQuestions = 'Riboti užklausų kiekį per valandą';
$strPrivDescMaxUpdates = 'Riboti komandų (kurios vienaip ar kitaip modifikuoja lenteles ar duomenų bazes) kiekį per valandą.';
$strPrivDescProcess3 = 'Leisti išjungti kitų vartotojų procesus.';
$strPrivDescProcess4 = 'Leisti peržiūrėti procesų sąraše pilną užklausų sąrašą.';
$strPrivDescReferences = ' Negalioja šioje MySQL versijoje.';
$strPrivDescReload = 'Leisti perkrauti serverį, bei išvalyti serverio laikinąją atmintį (cache).';
$strPrivDescReplClient = 'Leisti vartotojo užklausas dėl atstatymo master / slave serverių.';
$strPrivDescReplSlave = 'Reikalinga atstatymo slave serveriui';
$strPrivDescSelect = 'Leisti skaityti duomenis.';
$strPrivDescShowDb = 'Suteikti prieigą prie visų duomenų bazių.';
$strPrivDescShutdown = 'Leisti išjungti serverį.';
$strPrivDescSuper = 'Leisti prisijungti, kai viršytas prisijungimų kiekis; Reikalinga daugumai administratoriaus darbų, tokių kaip globalių reikšmių modifikavimui ar vartotojų atjungimui.';
$strPrivDescUpdate = 'Leisti modifikuoti duomenis.';
$strPrivDescUsage = 'Be teisių.';
$strPrivileges = 'Privilegijos';
$strPrivilegesReloaded = 'Teisės sėkmingai perkrautos.';
$strProcesslist = 'Procesų sąrašas';
$strProperties = 'Nustatymai';
$strPutColNames = 'Stulpelių pavadinimus įrašyti pirmoje eilutėje';

$strQBE = 'SQL&nbsp;užklausa';
$strQBEDel = 'Pakeičiant';
$strQBEIns = 'Įterpiant';
$strQueryOnDb = 'SQL-užklausa duomenų bazėje <b>%s</b>:';
$strQueryStatistics = '<b>Užklausų statistika</b>: nuo paleidimo dienos buvo išsiųsta %s užklausų į serverį.';
$strQueryType = 'Užklausos tipas';

$strReType = 'Įveskite dar kartą';
$strReceived = 'Gauta';
$strRecords = 'Viso įrašų:';
$strReferentialIntegrity = 'Patikrinti sąryšių vientisumą:';
$strRelationNotWorking = 'Nėra PMA lentelių, kurios leidžia dirbti su jungtinėmis MySQL lentelėmis. %sPaaiškinimas%s.';
$strRelationView = 'Peržiūrėti sąryšius';
$strRelationalSchema = 'Ryšių schema';
$strReloadFailed = 'MySQL procesą perkrauti nepavyko.';
$strReloadMySQL = 'Perkrauti MySQL procesą';
$strReloadingThePrivileges = 'Perkraunamos privilegijos';
$strRememberReload = 'Neužmirškite perkrauti serverį.';
$strRemoveSelectedUsers = 'Pašalinti pažymėtus vartotojus';
$strRenameTable = 'Pervadinti lentelę į';
$strRenameTableOK = 'Lentelė %s pervadinta į %s';
$strRepairTable = 'Redaguoti';
$strReplace = 'Pakeisti';
$strReplaceTable = 'Pakeisti lentelės turinį failo duomenimis ';
$strReset = 'Atstatyti į pradinę būseną';
$strResourceLimits = 'Išteklių apribojimai';
$strRevoke = 'Panaikinti';
$strRevokeAndDelete = 'Panaikinti visas aktyvias vartotojų privilegijas ir pašalinti vartotojus.';
$strRevokeAndDeleteDescr = 'Kol nėra perkrautos privilegijos, vartotojai dar turės privilegiją USAGE.';
$strRevokeGrant = 'Panaikinti GRANT privilegiją';
$strRevokeGrantMessage = 'Jūs panaikinote GRANT privilegiją %s';
$strRevokeMessage = 'Jūs panaikinote privilegijas %s';
$strRevokePriv = 'Panaikinti privilegijas';
$strRowLength = 'Eilutės ilgis';
$strRowSize = 'Eilutės dydis';
$strRows = 'Eilutės';
$strRowsFrom = 'eilučių pradedant nuo';
$strRowsModeHorizontal = 'horizontaliai';
$strRowsModeOptions = 'išdėstant  %s pakartoti antraštes kas %s įrašų';
$strRowsModeVertical = 'vertikaliai';
$strRowsStatistic = 'Eilučių statistika';
$strRunQuery = 'Vykdyti užklausą';
$strRunSQLQuery = 'Vykdyti SQL sakinius duomenų bazėje <strong>%s</strong>';
$strRunning = 'adresu %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Klaidą SQL interpretatoriuje. Prašome patikrinti  ar SQL užklausoje teisingai naudojamos kabutės. Kita, galima klaida, jog Jūs bandote atsiųsti dvejetainius (binary) duomenis neapskliaustus kabutėmis. Taip pat Jūs galite pabandyti įvykdyti savo užklausą iš MySQL konsolės. MySQL serverio išvesta informacija apie klaidą (jeigu tokių bus) gali padėti Jums nustatyti klaidos priežastį. Jeigu užklausa sėkmingai įvykdoma konsolėje, o SQL interpretatorius vistiek išveda pranešimus apie klaidas, prašome supaprastinite savo SQL užklausą ir perduodamų duomenų kiekį užklausoje ir praneškite apie klaidą programos kūrėjams su žemiau pateikiama informacija:';
$strSQLParserUserError = 'Klaida SQL užklausoje. Žemiau išvestas MySQL serverio pranešimas (jeigu toks yra), turėtų padėti Jums nustatyti klaidos priežastį';
$strSQLQuery = 'SQL užklausa';
$strSQLResult = 'SQL rezultatas';
$strSQPBugInvalidIdentifer = 'Klaidingas vardas';
$strSQPBugUnclosedQuote = 'Trūksta uždaromosios kabutės';
$strSQPBugUnknownPunctuation = 'Klaidinga skyryba';
$strSave = 'Išsaugoti';
$strScaleFactorSmall = 'Dydžio matas yra per mažas norint sutalpinti vaizdą viename lape.';
$strSearch = 'Paieška';
$strSearchFormTitle = 'Paieška duomenų bazėje';
$strSearchInTables = 'Lentelės(ių) viduje:';
$strSearchNeedle = 'Paieškos žodis(iai) arba reikšmė(ės) (pakaitos simbolis: "%"):';
$strSearchOption1 = 'bent vienas iš žodžių';
$strSearchOption2 = 'visi žodžiai';
$strSearchOption3 = 'ištisa frazė';
$strSearchOption4 = 'kaip reguliarųjį išsireiškimą';
$strSearchResultsFor = 'Paieškos rezultatai frazei "<i>%s</i>" %s:';
$strSearchType = 'Rasti:';
$strSelect = 'Išrinkti';
$strSelectADb = 'Pasirinkite duomenų bazę';
$strSelectAll = 'Išrinkti visas(us)';
$strSelectFields = 'Pasirinkti laukus (nors vieną)';
$strSelectNumRows = 'užklausą vykdoma';
$strSelectTables = 'Pasirinkite lenteles';
$strSend = 'Išsaugoti į failą';
$strSent = 'Siųsta';
$strServer = 'Serveris %s';
$strServerChoice = 'Pasirinkti serverį';
$strServerStatus = 'Veikimo informacija';
$strServerStatusUptime = 'MySQL serverio veikimo trukmė: %s. Serveris pradėjo veikti: %s.';
$strServerTabProcesslist = 'Procesai';
$strServerTabVariables = 'Kintamieji';
$strServerTrafficNotes = '<b>Serverio apkrovimas</b>: šiose lentelėse saugoma statistinė informacija apie MySQL serverio apkrovimą nuo paleidimo dienos.';
$strServerVars = 'Serverio kintamieji ir nustatymai';
$strServerVersion = 'Serverio versija';
$strSessionValue = 'Sesijos reikšmė';
$strSetEnumVal = 'Jeigu laukelio tipas yra "enum" arba "set", tuomet duomenų reikšmes reikia įvesti naudojant šį formatą: \'a\',\'b\',\'c\'...<br />. Jeigu jums reikia įrašyti dešininį įžambųjį brūkšnį ("\") arba kabutes("\'"), tuomet prieš šios simbolius reikia papildomo dešininio įžambaus brūkšnio (pavyzdžiui: \'\\\\xyz\' or \'a\\\'b\').';
$strShow = 'Rodyti';
$strShowAll = 'Rodyti viską';
$strShowColor = 'Rodyti spalvą';
$strShowCols = 'Rodyti stulpelius';
$strShowDatadictAs = 'Duomenų žodyno formatas';
$strShowGrid = 'Rodyti tinklelį';
$strShowPHPInfo = 'Rodyti PHP informaciją';
$strShowTableDimension = 'Rodyti lentelių dydžius';
$strShowTables = 'Rodyti lentelės';
$strShowThisQuery = ' Rodyti šią užklausą vėl ';
$strShowingRecords = 'Rodomi įrašai';
$strSingly = '(pavieniui)';
$strSize = 'Dydis';
$strSort = 'Rūšiuoti';
$strSpaceUsage = 'Vietos naudojimas';
$strSplitWordsWithSpace = 'Žodžiai atskirti tarpo simboliu (" ").';
$strStatement = 'Parametrai';
$strStatus = 'Statusas';
$strStrucCSV = 'Duomenys CSV formatu';
$strStrucData = 'Struktūra ir duomenys';
$strStrucDrop = 'Panaikinti-įterpti lentelę';
$strStrucExcelCSV = 'Duomenys ekselio CSV formatu';
$strStrucOnly = 'Tik struktūrą';
$strStructPropose = 'Analizuoti lentelės struktūrą';
$strStructure = 'Struktūra';
$strSubmit = 'Siųsti';
$strSuccess = 'Jūsų SQL užklausa sėkmingai įvykdyta';
$strSum = 'Sumos';

$strTable = 'Lentelė';
$strTableComments = 'Lentelės komentarai';
$strTableEmpty = 'Tuščias lentelės vardas!';
$strTableHasBeenDropped = 'Lentelė %s panaikinta';
$strTableHasBeenEmptied = 'Lentelės reikšmės %s ištuštintos';
$strTableHasBeenFlushed = 'Lentelės buferis  %s išvalytas';
$strTableMaintenance = 'Lentelės diagnostika';
$strTableOfContents = 'Turinys';
$strTableStructure = 'Sukurta duomenų struktūra lentelei';
$strTableType = 'Lentelės tipas';
$strTables = '%s lentelė(s)';
$strTblPrivileges = 'Specifinės lentelių privilegijos';
$strTextAreaLength = ' Tai yra jo ilgis,<br /> šis laukelis neredaguojamas ';
$strTheContent = 'Jūsų failo turinys įterptas.';
$strTheContents = 'Failo turinys įterpus panaikina išrinktos lentelės ar stulpelio turinį, bet išlieka unikalūs ir pirminiai indeksai.';
$strTheTerminator = 'Laukų pabaigos žymė.';
$strThisHost = 'Dabartinis serveris';
$strThisNotDirectory = 'Tai ne katalogas';
$strThreadSuccessfullyKilled = '%s buvo sėkmingai išjungtas.';
$strTime = 'Laikas';
$strTotal = ' iš viso ';
$strTotalUC = 'Viso';
$strTraffic = 'Apkrovimas';
$strType = 'Tipas';

$strUncheckAll = 'Nepažymėti visus(as)';
$strUnique = 'Unikalus';
$strUnselectAll = 'Nepažymėti visus(as)';
$strUpdatePrivMessage = 'Jūs pakeitėte privilegijas  %s.';
$strUpdateProfile = 'Papildyti profilį:';
$strUpdateProfileMessage = 'Profilis papildytas.';
$strUpdateQuery = 'Atnaujinti užklausą';
$strUsage = 'Išnaudota';
$strUseBackquotes = 'Lentelių ir laukų vardams naudoti šias kabutes ` `';
$strUseTables = 'Naudoti lenteles';
$strUseTextField = 'Naudokite teksto įvedimo lauką';
$strUser = 'Vartotojas';
$strUserAlreadyExists = 'Vartotojas %s jau yra!';
$strUserEmpty = 'Tuščias vartotojo vardas!';
$strUserName = 'Vartotojo vardas';
$strUserNotFound = 'Privilegijų lentelėje pasirinktas vartotojas nerastas.';
$strUserOverview = 'Vartotojų peržiūra';
$strUsers = 'Vartotojai';
$strUsersDeleted = 'Pažymėti vartotojai sėkmingai pašalinti.';

$strValidateSQL = 'Patikrinti SQL užklausą';
$strValidatorError = 'Neveikia SQL interpretatorius. Prašome patikrinkite ar yra suinstaliuoti visi privalomi php moduliai, nurodyti %sdokumentacijoje%s.';
$strValue = 'Reikšmė';
$strVar = 'Kintamasis';
$strViewDump = 'Peržiūrėti lentelės struktūros atvaizdį';
$strViewDumpDB = 'Sukurti, peržiūrėti duomenų bazės atvaizdį';

$strWebServerUploadDirectory = 'web serverio katalogas atsiuntimams';
$strWebServerUploadDirectoryError = 'Nepasiekimas nurodytas www-serverio katalogas atsiuntimams.';
$strWelcome = 'Jūs naudojate %s';
$strWithChecked = 'Pasirinktas lenteles:';
$strWritingCommentNotPossible = 'Negalimas komentavimas';
$strWritingRelationNotPossible = 'Negalimas sąryšis';
$strWrongUser = 'Neteisingas vartotojo vardas arba slaptažodis. Priėjimas uždraustas.';

$strYes = 'Taip';

$strZeroRemovesTheLimit = 'Pastaba: Nėra jokių apribojimų jeigu reikšmė nurodyta lygi 0 (nuliui).';
$strZip = '"zip"';
// To translate

$strGlobal = 'global';  //to translate
$strDbSpecific = 'database-specific';  //to translate
$strUsersHavingAccessToDb = 'Users having access to &quot;%s&quot;';  //to translate
$strChangeCopyUser = 'Change Login Information / Copy User';  //to translate
$strChangeCopyMode = 'Create a new user with the same privileges and ...';  //to translate
$strChangeCopyModeCopy = '... keep the old one.';  //to translate
$strChangeCopyModeJustDelete = ' ... delete the old one from the user tables.';  //to translate
$strChangeCopyModeRevoke = ' ... revoke all active privileges from the old one and delete it afterwards.';  //to translate
$strChangeCopyModeDeleteAndReload = ' ... delete the old one from the user tables and reload the privileges afterwards.';  //to translate
$strWildcard = 'wildcard';  //to translate
$strRowsModeFlippedHorizontal = 'horizontal (rotated headers)';//to translate
$strQueryTime = 'Query took %01.4f sec';//to translate
$strDumpComments = 'Include column comments as inline SQL-comments';//to translate
$strDBComment = 'Database comment: ';//to translate
$strQueryFrame = 'Query window';//to translate
$strQueryFrameDebug = 'Debugging information';//to translate
$strQueryFrameDebugBox = 'Active variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nCurrent variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nOpener location: %s\nFrameset location: %s.';//to translate
$strQuerySQLHistory = 'SQL-history';//to translate
$strMIME_MIMEtype = 'MIME-type';//to translate
$strMIME_transformation = 'Browser transformation';//to translate
$strMIME_transformation_options = 'Transformation options';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';//to translate
$strMIME_available_mime = 'Available MIME-types';//to translate
$strMIME_available_transform = 'Available transformations';//to translate
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';//to translate
$strMIME_description = 'Description';//to translate
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';//to translate
$strMIME_file = 'Filename';//to translate
$strTransformation_image_jpeg__plain = 'Takes an imagefile and outputs a link for it. First options argument is a possible prepended string like http://...';//to translate
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';//to translate
$strTransformation_text_plain__unformatted = 'Displays HTML code as HTML entities. No HTML formatting is shown.';//to translate
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';//to translate
$strInnodbStat = 'InnoDB Status';  //to translate
$updComTab = 'Please see Documentation on how to update your Column_comments Table';  //to translate
$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail; options: width,height in pixels (keeps the original ratio)';  //to translate
$strTransformation_image_png__inline = 'See image/jpeg: inline';  //to translate
$strSQLOptions = 'SQL options';//to translate
$strXML = 'XML';//to translate
$strCSVOptions = 'CSV options';//to translate
$strNoOptions = 'This format has no options';//to translate
$strStatCreateTime = 'Creation';//to translate
$strStatUpdateTime = 'Last update';//to translate
$strStatCheckTime = 'Last check';//to translate
$strPerMinute = 'per minute';//to translate
$strPerSecond = 'per second';//to translate
?>
