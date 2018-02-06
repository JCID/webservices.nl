<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarOptions StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarOptions extends AbstractStructBase
{
    /**
     * The car_id
     * @var string
     */
    public $car_id;
    /**
     * The merk
     * @var string
     */
    public $merk;
    /**
     * The serie
     * @var string
     */
    public $serie;
    /**
     * The serie_jaar_van
     * @var int
     */
    public $serie_jaar_van;
    /**
     * The serie_jaar_tot
     * @var int
     */
    public $serie_jaar_tot;
    /**
     * The model
     * @var string
     */
    public $model;
    /**
     * The model_maand_van
     * @var int
     */
    public $model_maand_van;
    /**
     * The model_jaar_van
     * @var int
     */
    public $model_jaar_van;
    /**
     * The model_maand_tot
     * @var int
     */
    public $model_maand_tot;
    /**
     * The model_jaar_tot
     * @var int
     */
    public $model_jaar_tot;
    /**
     * The belasting_min
     * @var string
     */
    public $belasting_min;
    /**
     * The belasting_max
     * @var string
     */
    public $belasting_max;
    /**
     * The algemene_garantie
     * @var string
     */
    public $algemene_garantie;
    /**
     * The algemene_garantie_km
     * @var string
     */
    public $algemene_garantie_km;
    /**
     * The carrosserie_garantie
     * @var string
     */
    public $carrosserie_garantie;
    /**
     * The deuren
     * @var string
     */
    public $deuren;
    /**
     * The carrosserietype
     * @var string
     */
    public $carrosserietype;
    /**
     * The aantal_versnellingen
     * @var string
     */
    public $aantal_versnellingen;
    /**
     * The soort_schakeling
     * @var string
     */
    public $soort_schakeling;
    /**
     * The aandrijving
     * @var string
     */
    public $aandrijving;
    /**
     * The brandstoftype
     * @var string
     */
    public $brandstoftype;
    /**
     * The aantal_cilinders
     * @var string
     */
    public $aantal_cilinders;
    /**
     * The bouwwijze
     * @var string
     */
    public $bouwwijze;
    /**
     * The kleppen_per_cilinder
     * @var string
     */
    public $kleppen_per_cilinder;
    /**
     * The cilinderinhoud
     * @var string
     */
    public $cilinderinhoud;
    /**
     * The boring
     * @var string
     */
    public $boring;
    /**
     * The slag
     * @var string
     */
    public $slag;
    /**
     * The compressieverhouding
     * @var string
     */
    public $compressieverhouding;
    /**
     * The vermogen_kw
     * @var string
     */
    public $vermogen_kw;
    /**
     * The vermogen_pk
     * @var string
     */
    public $vermogen_pk;
    /**
     * The vermogen_tpm
     * @var string
     */
    public $vermogen_tpm;
    /**
     * The koppel
     * @var string
     */
    public $koppel;
    /**
     * The koppel_tpm
     * @var string
     */
    public $koppel_tpm;
    /**
     * The katalysator
     * @var string
     */
    public $katalysator;
    /**
     * The brandstofsysteem
     * @var string
     */
    public $brandstofsysteem;
    /**
     * The klepbediening
     * @var string
     */
    public $klepbediening;
    /**
     * The turbo
     * @var string
     */
    public $turbo;
    /**
     * The wielophanging_voor
     * @var string
     */
    public $wielophanging_voor;
    /**
     * The wielophanging_achter
     * @var string
     */
    public $wielophanging_achter;
    /**
     * The vering_voor
     * @var string
     */
    public $vering_voor;
    /**
     * The vering_achter
     * @var string
     */
    public $vering_achter;
    /**
     * The stabilisator_voor
     * @var string
     */
    public $stabilisator_voor;
    /**
     * The stabilisator_achter
     * @var string
     */
    public $stabilisator_achter;
    /**
     * The remmen_voor
     * @var string
     */
    public $remmen_voor;
    /**
     * The remmen_voor_mm
     * @var string
     */
    public $remmen_voor_mm;
    /**
     * The remmen_achter
     * @var string
     */
    public $remmen_achter;
    /**
     * The remmen_achter_mm
     * @var string
     */
    public $remmen_achter_mm;
    /**
     * The cw_waarde
     * @var string
     */
    public $cw_waarde;
    /**
     * The lengte
     * @var string
     */
    public $lengte;
    /**
     * The breedte
     * @var string
     */
    public $breedte;
    /**
     * The hoogte
     * @var string
     */
    public $hoogte;
    /**
     * The wielbasis
     * @var string
     */
    public $wielbasis;
    /**
     * The spoorbreedte_voor
     * @var string
     */
    public $spoorbreedte_voor;
    /**
     * The spoorbreedte_achter
     * @var string
     */
    public $spoorbreedte_achter;
    /**
     * The draaicirkel
     * @var string
     */
    public $draaicirkel;
    /**
     * The bandenmaat_voor
     * @var string
     */
    public $bandenmaat_voor;
    /**
     * The bandenmaat_achter
     * @var string
     */
    public $bandenmaat_achter;
    /**
     * The massa
     * @var string
     */
    public $massa;
    /**
     * The max_toelaatbare_massa
     * @var string
     */
    public $max_toelaatbare_massa;
    /**
     * The max_aanhanger_geremd
     * @var string
     */
    public $max_aanhanger_geremd;
    /**
     * The max_aanhanger_ongeremd
     * @var string
     */
    public $max_aanhanger_ongeremd;
    /**
     * The max_kogeldruk
     * @var string
     */
    public $max_kogeldruk;
    /**
     * The max_dakbelasting
     * @var string
     */
    public $max_dakbelasting;
    /**
     * The koffer_min
     * @var string
     */
    public $koffer_min;
    /**
     * The koffer_max
     * @var string
     */
    public $koffer_max;
    /**
     * The tankinhoud
     * @var string
     */
    public $tankinhoud;
    /**
     * The topsnelheid
     * @var string
     */
    public $topsnelheid;
    /**
     * The acceleratie
     * @var string
     */
    public $acceleratie;
    /**
     * The verbruik_binnen_bebouwde_kom
     * @var string
     */
    public $verbruik_binnen_bebouwde_kom;
    /**
     * The verbruik_buiten_bebouwde_kom
     * @var string
     */
    public $verbruik_buiten_bebouwde_kom;
    /**
     * The verbruik_gecombineerd
     * @var string
     */
    public $verbruik_gecombineerd;
    /**
     * The co2_uitstoot
     * @var string
     */
    public $co2_uitstoot;
    /**
     * The verbruik_gemiddeld
     * @var string
     */
    public $verbruik_gemiddeld;
    /**
     * The abs
     * @var \Webservices\StructType\CarOption
     */
    public $abs;
    /**
     * The remkrachtverdeling
     * @var \Webservices\StructType\CarOption
     */
    public $remkrachtverdeling;
    /**
     * The brakeassist
     * @var \Webservices\StructType\CarOption
     */
    public $brakeassist;
    /**
     * The tractiecontrole
     * @var \Webservices\StructType\CarOption
     */
    public $tractiecontrole;
    /**
     * The sperdifferentieel
     * @var \Webservices\StructType\CarOption
     */
    public $sperdifferentieel;
    /**
     * The stabiliteitsregeling
     * @var \Webservices\StructType\CarOption
     */
    public $stabiliteitsregeling;
    /**
     * The regelbare_schokdemping
     * @var \Webservices\StructType\CarOption
     */
    public $regelbare_schokdemping;
    /**
     * The niveauregeling
     * @var \Webservices\StructType\CarOption
     */
    public $niveauregeling;
    /**
     * The airbag_bestuurder
     * @var \Webservices\StructType\CarOption
     */
    public $airbag_bestuurder;
    /**
     * The airbag_passagier
     * @var \Webservices\StructType\CarOption
     */
    public $airbag_passagier;
    /**
     * The airbag_opzijvoor
     * @var \Webservices\StructType\CarOption
     */
    public $airbag_opzijvoor;
    /**
     * The airbag_opzijachter
     * @var \Webservices\StructType\CarOption
     */
    public $airbag_opzijachter;
    /**
     * The airbag_hoofdvoor
     * @var \Webservices\StructType\CarOption
     */
    public $airbag_hoofdvoor;
    /**
     * The airbag_hoofdachter
     * @var \Webservices\StructType\CarOption
     */
    public $airbag_hoofdachter;
    /**
     * The gordelspanners
     * @var \Webservices\StructType\CarOption
     */
    public $gordelspanners;
    /**
     * The verstelbare_gordelhoogte
     * @var \Webservices\StructType\CarOption
     */
    public $verstelbare_gordelhoogte;
    /**
     * The startonderbreker
     * @var \Webservices\StructType\CarOption
     */
    public $startonderbreker;
    /**
     * The inbraakalarm
     * @var \Webservices\StructType\CarOption
     */
    public $inbraakalarm;
    /**
     * The centrale_deurvergrendeling
     * @var \Webservices\StructType\CarOption
     */
    public $centrale_deurvergrendeling;
    /**
     * The afstandbediening_deurvergrendeling
     * @var \Webservices\StructType\CarOption
     */
    public $afstandbediening_deurvergrendeling;
    /**
     * The automatische_vergrendeling
     * @var \Webservices\StructType\CarOption
     */
    public $automatische_vergrendeling;
    /**
     * The keyless_entry
     * @var \Webservices\StructType\CarOption
     */
    public $keyless_entry;
    /**
     * The elektrische_ramen_voor
     * @var \Webservices\StructType\CarOption
     */
    public $elektrische_ramen_voor;
    /**
     * The elektrische_ramen_achter
     * @var \Webservices\StructType\CarOption
     */
    public $elektrische_ramen_achter;
    /**
     * The stuurbekrachtiging
     * @var \Webservices\StructType\CarOption
     */
    public $stuurbekrachtiging;
    /**
     * The stuurschakeling
     * @var \Webservices\StructType\CarOption
     */
    public $stuurschakeling;
    /**
     * The cruise_control
     * @var \Webservices\StructType\CarOption
     */
    public $cruise_control;
    /**
     * The radar_cruise_control
     * @var \Webservices\StructType\CarOption
     */
    public $radar_cruise_control;
    /**
     * The airconditioning
     * @var \Webservices\StructType\CarOption
     */
    public $airconditioning;
    /**
     * The klimaatregeling
     * @var \Webservices\StructType\CarOption
     */
    public $klimaatregeling;
    /**
     * The gescheiden_temperatuurregeling
     * @var \Webservices\StructType\CarOption
     */
    public $gescheiden_temperatuurregeling;
    /**
     * The pollenfilter
     * @var \Webservices\StructType\CarOption
     */
    public $pollenfilter;
    /**
     * The parkeersensor
     * @var \Webservices\StructType\CarOption
     */
    public $parkeersensor;
    /**
     * The hoofdsteunen_voor
     * @var \Webservices\StructType\CarOption
     */
    public $hoofdsteunen_voor;
    /**
     * The hoofdsteunen_achter
     * @var \Webservices\StructType\CarOption
     */
    public $hoofdsteunen_achter;
    /**
     * The verstelbare_hoofdsteunen_achter
     * @var \Webservices\StructType\CarOption
     */
    public $verstelbare_hoofdsteunen_achter;
    /**
     * The derde_hoofdsteun_achter
     * @var \Webservices\StructType\CarOption
     */
    public $derde_hoofdsteun_achter;
    /**
     * The derde_driepuntsgordel_achter
     * @var \Webservices\StructType\CarOption
     */
    public $derde_driepuntsgordel_achter;
    /**
     * The verstelbare_lendensteun_bestuurder
     * @var \Webservices\StructType\CarOption
     */
    public $verstelbare_lendensteun_bestuurder;
    /**
     * The verstelbare_lendensteun_passagier
     * @var \Webservices\StructType\CarOption
     */
    public $verstelbare_lendensteun_passagier;
    /**
     * The hoogteverstelling_bestuurder
     * @var \Webservices\StructType\CarOption
     */
    public $hoogteverstelling_bestuurder;
    /**
     * The hoogteverstelling_passagier
     * @var \Webservices\StructType\CarOption
     */
    public $hoogteverstelling_passagier;
    /**
     * The elektrische_stoelverstelling
     * @var \Webservices\StructType\CarOption
     */
    public $elektrische_stoelverstelling;
    /**
     * The geheugen_stoelverstelling
     * @var \Webservices\StructType\CarOption
     */
    public $geheugen_stoelverstelling;
    /**
     * The verwarmde_zitplaatsen_voor
     * @var \Webservices\StructType\CarOption
     */
    public $verwarmde_zitplaatsen_voor;
    /**
     * The verwarmde_zitplaatsen_achter
     * @var \Webservices\StructType\CarOption
     */
    public $verwarmde_zitplaatsen_achter;
    /**
     * The sportstoelen
     * @var \Webservices\StructType\CarOption
     */
    public $sportstoelen;
    /**
     * The bekledingstof_leer
     * @var \Webservices\StructType\CarOption
     */
    public $bekledingstof_leer;
    /**
     * The lerenbekleding
     * @var \Webservices\StructType\CarOption
     */
    public $lerenbekleding;
    /**
     * The hoogteverstelling_stuur
     * @var \Webservices\StructType\CarOption
     */
    public $hoogteverstelling_stuur;
    /**
     * The diepteverstelling_stuur
     * @var \Webservices\StructType\CarOption
     */
    public $diepteverstelling_stuur;
    /**
     * The elektrische_stuurverstelling
     * @var \Webservices\StructType\CarOption
     */
    public $elektrische_stuurverstelling;
    /**
     * The leer_bekleed_stuur
     * @var \Webservices\StructType\CarOption
     */
    public $leer_bekleed_stuur;
    /**
     * The middenarmsteun_voor
     * @var \Webservices\StructType\CarOption
     */
    public $middenarmsteun_voor;
    /**
     * The middenarmsteun_achter
     * @var \Webservices\StructType\CarOption
     */
    public $middenarmsteun_achter;
    /**
     * The neerklapbare_achterbank
     * @var \Webservices\StructType\CarOption
     */
    public $neerklapbare_achterbank;
    /**
     * The in_delen_neerklapbaar_achterbank
     * @var \Webservices\StructType\CarOption
     */
    public $in_delen_neerklapbaar_achterbank;
    /**
     * The opbergvak_linkerportier
     * @var \Webservices\StructType\CarOption
     */
    public $opbergvak_linkerportier;
    /**
     * The bekerhouder_voor
     * @var \Webservices\StructType\CarOption
     */
    public $bekerhouder_voor;
    /**
     * The bekerhouder_achter
     * @var \Webservices\StructType\CarOption
     */
    public $bekerhouder_achter;
    /**
     * The zonnescherm_achterruit
     * @var \Webservices\StructType\CarOption
     */
    public $zonnescherm_achterruit;
    /**
     * The dagteller
     * @var \Webservices\StructType\CarOption
     */
    public $dagteller;
    /**
     * The toerenteller
     * @var \Webservices\StructType\CarOption
     */
    public $toerenteller;
    /**
     * The temperatuurmeter
     * @var \Webservices\StructType\CarOption
     */
    public $temperatuurmeter;
    /**
     * The oliepeilmeter
     * @var \Webservices\StructType\CarOption
     */
    public $oliepeilmeter;
    /**
     * The oliedrukmeter
     * @var \Webservices\StructType\CarOption
     */
    public $oliedrukmeter;
    /**
     * The olietemperatuurmeter
     * @var \Webservices\StructType\CarOption
     */
    public $olietemperatuurmeter;
    /**
     * The voltmeter
     * @var \Webservices\StructType\CarOption
     */
    public $voltmeter;
    /**
     * The verbruiksmeter
     * @var \Webservices\StructType\CarOption
     */
    public $verbruiksmeter;
    /**
     * The turbodrukmeter
     * @var \Webservices\StructType\CarOption
     */
    public $turbodrukmeter;
    /**
     * The buitentemperatuurmeter
     * @var \Webservices\StructType\CarOption
     */
    public $buitentemperatuurmeter;
    /**
     * The klokje
     * @var \Webservices\StructType\CarOption
     */
    public $klokje;
    /**
     * The boardcomputer
     * @var \Webservices\StructType\CarOption
     */
    public $boardcomputer;
    /**
     * The luidsprekers
     * @var \Webservices\StructType\CarOption
     */
    public $luidsprekers;
    /**
     * The stereoinstallatie
     * @var \Webservices\StructType\CarOption
     */
    public $stereoinstallatie;
    /**
     * The cdspeler
     * @var \Webservices\StructType\CarOption
     */
    public $cdspeler;
    /**
     * The cdwisselaar
     * @var \Webservices\StructType\CarOption
     */
    public $cdwisselaar;
    /**
     * The audiostuurbediening
     * @var \Webservices\StructType\CarOption
     */
    public $audiostuurbediening;
    /**
     * The bandenspanningssensor
     * @var \Webservices\StructType\CarOption
     */
    public $bandenspanningssensor;
    /**
     * The navigatiesysteem
     * @var \Webservices\StructType\CarOption
     */
    public $navigatiesysteem;
    /**
     * The televisie
     * @var \Webservices\StructType\CarOption
     */
    public $televisie;
    /**
     * The telefoonvoorbereiding
     * @var \Webservices\StructType\CarOption
     */
    public $telefoonvoorbereiding;
    /**
     * The telefoon
     * @var \Webservices\StructType\CarOption
     */
    public $telefoon;
    /**
     * The intervalruitenwisser
     * @var \Webservices\StructType\CarOption
     */
    public $intervalruitenwisser;
    /**
     * The regelbare_interval
     * @var \Webservices\StructType\CarOption
     */
    public $regelbare_interval;
    /**
     * The regensensor
     * @var \Webservices\StructType\CarOption
     */
    public $regensensor;
    /**
     * The ruitenwisser_achter
     * @var \Webservices\StructType\CarOption
     */
    public $ruitenwisser_achter;
    /**
     * The achterruitverwarming
     * @var \Webservices\StructType\CarOption
     */
    public $achterruitverwarming;
    /**
     * The voorruitverwarming
     * @var \Webservices\StructType\CarOption
     */
    public $voorruitverwarming;
    /**
     * The verwarmde_ruitensproeiers
     * @var \Webservices\StructType\CarOption
     */
    public $verwarmde_ruitensproeiers;
    /**
     * The gelaagde_voorruit
     * @var \Webservices\StructType\CarOption
     */
    public $gelaagde_voorruit;
    /**
     * The getintglas
     * @var \Webservices\StructType\CarOption
     */
    public $getintglas;
    /**
     * The schuifdak
     * @var \Webservices\StructType\CarOption
     */
    public $schuifdak;
    /**
     * The elektrisch_schuifdak
     * @var \Webservices\StructType\CarOption
     */
    public $elektrisch_schuifdak;
    /**
     * The beschermstrips_opzij
     * @var \Webservices\StructType\CarOption
     */
    public $beschermstrips_opzij;
    /**
     * The bumpers_meegespoten
     * @var \Webservices\StructType\CarOption
     */
    public $bumpers_meegespoten;
    /**
     * The metallic_lak
     * @var \Webservices\StructType\CarOption
     */
    public $metallic_lak;
    /**
     * The lichtmetalen_velgen
     * @var \Webservices\StructType\CarOption
     */
    public $lichtmetalen_velgen;
    /**
     * The rechter_buitenspiegel
     * @var \Webservices\StructType\CarOption
     */
    public $rechter_buitenspiegel;
    /**
     * The binnenuit_verstelbare_buitenspiegel
     * @var \Webservices\StructType\CarOption
     */
    public $binnenuit_verstelbare_buitenspiegel;
    /**
     * The elektrische_spiegels
     * @var \Webservices\StructType\CarOption
     */
    public $elektrische_spiegels;
    /**
     * The verwarmde_spiegels
     * @var \Webservices\StructType\CarOption
     */
    public $verwarmde_spiegels;
    /**
     * The inklapbare_spiegels
     * @var \Webservices\StructType\CarOption
     */
    public $inklapbare_spiegels;
    /**
     * The meegespoten_spiegels
     * @var \Webservices\StructType\CarOption
     */
    public $meegespoten_spiegels;
    /**
     * The dodehoekspiegel_bestuurder
     * @var \Webservices\StructType\CarOption
     */
    public $dodehoekspiegel_bestuurder;
    /**
     * The dimmende_binnenspiegel
     * @var \Webservices\StructType\CarOption
     */
    public $dimmende_binnenspiegel;
    /**
     * The dimmende_buitenspiegel
     * @var \Webservices\StructType\CarOption
     */
    public $dimmende_buitenspiegel;
    /**
     * The dakrails
     * @var \Webservices\StructType\CarOption
     */
    public $dakrails;
    /**
     * The binnenuit_te_openen_tankklep
     * @var \Webservices\StructType\CarOption
     */
    public $binnenuit_te_openen_tankklep;
    /**
     * The binnenuit_te_openen_bagageklep
     * @var \Webservices\StructType\CarOption
     */
    public $binnenuit_te_openen_bagageklep;
    /**
     * The op_afstand_te_openen_bagageklep
     * @var \Webservices\StructType\CarOption
     */
    public $op_afstand_te_openen_bagageklep;
    /**
     * The halogeen_koplampen
     * @var \Webservices\StructType\CarOption
     */
    public $halogeen_koplampen;
    /**
     * The xenon_koplampen
     * @var \Webservices\StructType\CarOption
     */
    public $xenon_koplampen;
    /**
     * The verstelbare_koplampen
     * @var \Webservices\StructType\CarOption
     */
    public $verstelbare_koplampen;
    /**
     * The koplampsproeiers
     * @var \Webservices\StructType\CarOption
     */
    public $koplampsproeiers;
    /**
     * The automatisch_inschakelende_koplampen
     * @var \Webservices\StructType\CarOption
     */
    public $automatisch_inschakelende_koplampen;
    /**
     * The verstralers
     * @var \Webservices\StructType\CarOption
     */
    public $verstralers;
    /**
     * The mistlampen_voor
     * @var \Webservices\StructType\CarOption
     */
    public $mistlampen_voor;
    /**
     * The mistlampen_achter
     * @var \Webservices\StructType\CarOption
     */
    public $mistlampen_achter;
    /**
     * The zoemer_vergeten_verlichting
     * @var \Webservices\StructType\CarOption
     */
    public $zoemer_vergeten_verlichting;
    /**
     * The verlichte_bagageruimte
     * @var \Webservices\StructType\CarOption
     */
    public $verlichte_bagageruimte;
    /**
     * The verlichte_motorruimte
     * @var \Webservices\StructType\CarOption
     */
    public $verlichte_motorruimte;
    /**
     * The verlicht_dashboardkastje
     * @var \Webservices\StructType\CarOption
     */
    public $verlicht_dashboardkastje;
    /**
     * The regelbare_dashboardverlichting
     * @var \Webservices\StructType\CarOption
     */
    public $regelbare_dashboardverlichting;
    /**
     * The leeslampje_voor
     * @var \Webservices\StructType\CarOption
     */
    public $leeslampje_voor;
    /**
     * The leeslampje_achter
     * @var \Webservices\StructType\CarOption
     */
    public $leeslampje_achter;
    /**
     * The verlichte_makeupspiegel
     * @var \Webservices\StructType\CarOption
     */
    public $verlichte_makeupspiegel;
    /**
     * The vertraging_interieurverlichting
     * @var \Webservices\StructType\CarOption
     */
    public $vertraging_interieurverlichting;
    /**
     * The portierverlichting
     * @var \Webservices\StructType\CarOption
     */
    public $portierverlichting;
    /**
     * Constructor method for CarOptions
     * @uses CarOptions::setCar_id()
     * @uses CarOptions::setMerk()
     * @uses CarOptions::setSerie()
     * @uses CarOptions::setSerie_jaar_van()
     * @uses CarOptions::setSerie_jaar_tot()
     * @uses CarOptions::setModel()
     * @uses CarOptions::setModel_maand_van()
     * @uses CarOptions::setModel_jaar_van()
     * @uses CarOptions::setModel_maand_tot()
     * @uses CarOptions::setModel_jaar_tot()
     * @uses CarOptions::setBelasting_min()
     * @uses CarOptions::setBelasting_max()
     * @uses CarOptions::setAlgemene_garantie()
     * @uses CarOptions::setAlgemene_garantie_km()
     * @uses CarOptions::setCarrosserie_garantie()
     * @uses CarOptions::setDeuren()
     * @uses CarOptions::setCarrosserietype()
     * @uses CarOptions::setAantal_versnellingen()
     * @uses CarOptions::setSoort_schakeling()
     * @uses CarOptions::setAandrijving()
     * @uses CarOptions::setBrandstoftype()
     * @uses CarOptions::setAantal_cilinders()
     * @uses CarOptions::setBouwwijze()
     * @uses CarOptions::setKleppen_per_cilinder()
     * @uses CarOptions::setCilinderinhoud()
     * @uses CarOptions::setBoring()
     * @uses CarOptions::setSlag()
     * @uses CarOptions::setCompressieverhouding()
     * @uses CarOptions::setVermogen_kw()
     * @uses CarOptions::setVermogen_pk()
     * @uses CarOptions::setVermogen_tpm()
     * @uses CarOptions::setKoppel()
     * @uses CarOptions::setKoppel_tpm()
     * @uses CarOptions::setKatalysator()
     * @uses CarOptions::setBrandstofsysteem()
     * @uses CarOptions::setKlepbediening()
     * @uses CarOptions::setTurbo()
     * @uses CarOptions::setWielophanging_voor()
     * @uses CarOptions::setWielophanging_achter()
     * @uses CarOptions::setVering_voor()
     * @uses CarOptions::setVering_achter()
     * @uses CarOptions::setStabilisator_voor()
     * @uses CarOptions::setStabilisator_achter()
     * @uses CarOptions::setRemmen_voor()
     * @uses CarOptions::setRemmen_voor_mm()
     * @uses CarOptions::setRemmen_achter()
     * @uses CarOptions::setRemmen_achter_mm()
     * @uses CarOptions::setCw_waarde()
     * @uses CarOptions::setLengte()
     * @uses CarOptions::setBreedte()
     * @uses CarOptions::setHoogte()
     * @uses CarOptions::setWielbasis()
     * @uses CarOptions::setSpoorbreedte_voor()
     * @uses CarOptions::setSpoorbreedte_achter()
     * @uses CarOptions::setDraaicirkel()
     * @uses CarOptions::setBandenmaat_voor()
     * @uses CarOptions::setBandenmaat_achter()
     * @uses CarOptions::setMassa()
     * @uses CarOptions::setMax_toelaatbare_massa()
     * @uses CarOptions::setMax_aanhanger_geremd()
     * @uses CarOptions::setMax_aanhanger_ongeremd()
     * @uses CarOptions::setMax_kogeldruk()
     * @uses CarOptions::setMax_dakbelasting()
     * @uses CarOptions::setKoffer_min()
     * @uses CarOptions::setKoffer_max()
     * @uses CarOptions::setTankinhoud()
     * @uses CarOptions::setTopsnelheid()
     * @uses CarOptions::setAcceleratie()
     * @uses CarOptions::setVerbruik_binnen_bebouwde_kom()
     * @uses CarOptions::setVerbruik_buiten_bebouwde_kom()
     * @uses CarOptions::setVerbruik_gecombineerd()
     * @uses CarOptions::setCo2_uitstoot()
     * @uses CarOptions::setVerbruik_gemiddeld()
     * @uses CarOptions::setAbs()
     * @uses CarOptions::setRemkrachtverdeling()
     * @uses CarOptions::setBrakeassist()
     * @uses CarOptions::setTractiecontrole()
     * @uses CarOptions::setSperdifferentieel()
     * @uses CarOptions::setStabiliteitsregeling()
     * @uses CarOptions::setRegelbare_schokdemping()
     * @uses CarOptions::setNiveauregeling()
     * @uses CarOptions::setAirbag_bestuurder()
     * @uses CarOptions::setAirbag_passagier()
     * @uses CarOptions::setAirbag_opzijvoor()
     * @uses CarOptions::setAirbag_opzijachter()
     * @uses CarOptions::setAirbag_hoofdvoor()
     * @uses CarOptions::setAirbag_hoofdachter()
     * @uses CarOptions::setGordelspanners()
     * @uses CarOptions::setVerstelbare_gordelhoogte()
     * @uses CarOptions::setStartonderbreker()
     * @uses CarOptions::setInbraakalarm()
     * @uses CarOptions::setCentrale_deurvergrendeling()
     * @uses CarOptions::setAfstandbediening_deurvergrendeling()
     * @uses CarOptions::setAutomatische_vergrendeling()
     * @uses CarOptions::setKeyless_entry()
     * @uses CarOptions::setElektrische_ramen_voor()
     * @uses CarOptions::setElektrische_ramen_achter()
     * @uses CarOptions::setStuurbekrachtiging()
     * @uses CarOptions::setStuurschakeling()
     * @uses CarOptions::setCruise_control()
     * @uses CarOptions::setRadar_cruise_control()
     * @uses CarOptions::setAirconditioning()
     * @uses CarOptions::setKlimaatregeling()
     * @uses CarOptions::setGescheiden_temperatuurregeling()
     * @uses CarOptions::setPollenfilter()
     * @uses CarOptions::setParkeersensor()
     * @uses CarOptions::setHoofdsteunen_voor()
     * @uses CarOptions::setHoofdsteunen_achter()
     * @uses CarOptions::setVerstelbare_hoofdsteunen_achter()
     * @uses CarOptions::setDerde_hoofdsteun_achter()
     * @uses CarOptions::setDerde_driepuntsgordel_achter()
     * @uses CarOptions::setVerstelbare_lendensteun_bestuurder()
     * @uses CarOptions::setVerstelbare_lendensteun_passagier()
     * @uses CarOptions::setHoogteverstelling_bestuurder()
     * @uses CarOptions::setHoogteverstelling_passagier()
     * @uses CarOptions::setElektrische_stoelverstelling()
     * @uses CarOptions::setGeheugen_stoelverstelling()
     * @uses CarOptions::setVerwarmde_zitplaatsen_voor()
     * @uses CarOptions::setVerwarmde_zitplaatsen_achter()
     * @uses CarOptions::setSportstoelen()
     * @uses CarOptions::setBekledingstof_leer()
     * @uses CarOptions::setLerenbekleding()
     * @uses CarOptions::setHoogteverstelling_stuur()
     * @uses CarOptions::setDiepteverstelling_stuur()
     * @uses CarOptions::setElektrische_stuurverstelling()
     * @uses CarOptions::setLeer_bekleed_stuur()
     * @uses CarOptions::setMiddenarmsteun_voor()
     * @uses CarOptions::setMiddenarmsteun_achter()
     * @uses CarOptions::setNeerklapbare_achterbank()
     * @uses CarOptions::setIn_delen_neerklapbaar_achterbank()
     * @uses CarOptions::setOpbergvak_linkerportier()
     * @uses CarOptions::setBekerhouder_voor()
     * @uses CarOptions::setBekerhouder_achter()
     * @uses CarOptions::setZonnescherm_achterruit()
     * @uses CarOptions::setDagteller()
     * @uses CarOptions::setToerenteller()
     * @uses CarOptions::setTemperatuurmeter()
     * @uses CarOptions::setOliepeilmeter()
     * @uses CarOptions::setOliedrukmeter()
     * @uses CarOptions::setOlietemperatuurmeter()
     * @uses CarOptions::setVoltmeter()
     * @uses CarOptions::setVerbruiksmeter()
     * @uses CarOptions::setTurbodrukmeter()
     * @uses CarOptions::setBuitentemperatuurmeter()
     * @uses CarOptions::setKlokje()
     * @uses CarOptions::setBoardcomputer()
     * @uses CarOptions::setLuidsprekers()
     * @uses CarOptions::setStereoinstallatie()
     * @uses CarOptions::setCdspeler()
     * @uses CarOptions::setCdwisselaar()
     * @uses CarOptions::setAudiostuurbediening()
     * @uses CarOptions::setBandenspanningssensor()
     * @uses CarOptions::setNavigatiesysteem()
     * @uses CarOptions::setTelevisie()
     * @uses CarOptions::setTelefoonvoorbereiding()
     * @uses CarOptions::setTelefoon()
     * @uses CarOptions::setIntervalruitenwisser()
     * @uses CarOptions::setRegelbare_interval()
     * @uses CarOptions::setRegensensor()
     * @uses CarOptions::setRuitenwisser_achter()
     * @uses CarOptions::setAchterruitverwarming()
     * @uses CarOptions::setVoorruitverwarming()
     * @uses CarOptions::setVerwarmde_ruitensproeiers()
     * @uses CarOptions::setGelaagde_voorruit()
     * @uses CarOptions::setGetintglas()
     * @uses CarOptions::setSchuifdak()
     * @uses CarOptions::setElektrisch_schuifdak()
     * @uses CarOptions::setBeschermstrips_opzij()
     * @uses CarOptions::setBumpers_meegespoten()
     * @uses CarOptions::setMetallic_lak()
     * @uses CarOptions::setLichtmetalen_velgen()
     * @uses CarOptions::setRechter_buitenspiegel()
     * @uses CarOptions::setBinnenuit_verstelbare_buitenspiegel()
     * @uses CarOptions::setElektrische_spiegels()
     * @uses CarOptions::setVerwarmde_spiegels()
     * @uses CarOptions::setInklapbare_spiegels()
     * @uses CarOptions::setMeegespoten_spiegels()
     * @uses CarOptions::setDodehoekspiegel_bestuurder()
     * @uses CarOptions::setDimmende_binnenspiegel()
     * @uses CarOptions::setDimmende_buitenspiegel()
     * @uses CarOptions::setDakrails()
     * @uses CarOptions::setBinnenuit_te_openen_tankklep()
     * @uses CarOptions::setBinnenuit_te_openen_bagageklep()
     * @uses CarOptions::setOp_afstand_te_openen_bagageklep()
     * @uses CarOptions::setHalogeen_koplampen()
     * @uses CarOptions::setXenon_koplampen()
     * @uses CarOptions::setVerstelbare_koplampen()
     * @uses CarOptions::setKoplampsproeiers()
     * @uses CarOptions::setAutomatisch_inschakelende_koplampen()
     * @uses CarOptions::setVerstralers()
     * @uses CarOptions::setMistlampen_voor()
     * @uses CarOptions::setMistlampen_achter()
     * @uses CarOptions::setZoemer_vergeten_verlichting()
     * @uses CarOptions::setVerlichte_bagageruimte()
     * @uses CarOptions::setVerlichte_motorruimte()
     * @uses CarOptions::setVerlicht_dashboardkastje()
     * @uses CarOptions::setRegelbare_dashboardverlichting()
     * @uses CarOptions::setLeeslampje_voor()
     * @uses CarOptions::setLeeslampje_achter()
     * @uses CarOptions::setVerlichte_makeupspiegel()
     * @uses CarOptions::setVertraging_interieurverlichting()
     * @uses CarOptions::setPortierverlichting()
     * @param string $car_id
     * @param string $merk
     * @param string $serie
     * @param int $serie_jaar_van
     * @param int $serie_jaar_tot
     * @param string $model
     * @param int $model_maand_van
     * @param int $model_jaar_van
     * @param int $model_maand_tot
     * @param int $model_jaar_tot
     * @param string $belasting_min
     * @param string $belasting_max
     * @param string $algemene_garantie
     * @param string $algemene_garantie_km
     * @param string $carrosserie_garantie
     * @param string $deuren
     * @param string $carrosserietype
     * @param string $aantal_versnellingen
     * @param string $soort_schakeling
     * @param string $aandrijving
     * @param string $brandstoftype
     * @param string $aantal_cilinders
     * @param string $bouwwijze
     * @param string $kleppen_per_cilinder
     * @param string $cilinderinhoud
     * @param string $boring
     * @param string $slag
     * @param string $compressieverhouding
     * @param string $vermogen_kw
     * @param string $vermogen_pk
     * @param string $vermogen_tpm
     * @param string $koppel
     * @param string $koppel_tpm
     * @param string $katalysator
     * @param string $brandstofsysteem
     * @param string $klepbediening
     * @param string $turbo
     * @param string $wielophanging_voor
     * @param string $wielophanging_achter
     * @param string $vering_voor
     * @param string $vering_achter
     * @param string $stabilisator_voor
     * @param string $stabilisator_achter
     * @param string $remmen_voor
     * @param string $remmen_voor_mm
     * @param string $remmen_achter
     * @param string $remmen_achter_mm
     * @param string $cw_waarde
     * @param string $lengte
     * @param string $breedte
     * @param string $hoogte
     * @param string $wielbasis
     * @param string $spoorbreedte_voor
     * @param string $spoorbreedte_achter
     * @param string $draaicirkel
     * @param string $bandenmaat_voor
     * @param string $bandenmaat_achter
     * @param string $massa
     * @param string $max_toelaatbare_massa
     * @param string $max_aanhanger_geremd
     * @param string $max_aanhanger_ongeremd
     * @param string $max_kogeldruk
     * @param string $max_dakbelasting
     * @param string $koffer_min
     * @param string $koffer_max
     * @param string $tankinhoud
     * @param string $topsnelheid
     * @param string $acceleratie
     * @param string $verbruik_binnen_bebouwde_kom
     * @param string $verbruik_buiten_bebouwde_kom
     * @param string $verbruik_gecombineerd
     * @param string $co2_uitstoot
     * @param string $verbruik_gemiddeld
     * @param \Webservices\StructType\CarOption $abs
     * @param \Webservices\StructType\CarOption $remkrachtverdeling
     * @param \Webservices\StructType\CarOption $brakeassist
     * @param \Webservices\StructType\CarOption $tractiecontrole
     * @param \Webservices\StructType\CarOption $sperdifferentieel
     * @param \Webservices\StructType\CarOption $stabiliteitsregeling
     * @param \Webservices\StructType\CarOption $regelbare_schokdemping
     * @param \Webservices\StructType\CarOption $niveauregeling
     * @param \Webservices\StructType\CarOption $airbag_bestuurder
     * @param \Webservices\StructType\CarOption $airbag_passagier
     * @param \Webservices\StructType\CarOption $airbag_opzijvoor
     * @param \Webservices\StructType\CarOption $airbag_opzijachter
     * @param \Webservices\StructType\CarOption $airbag_hoofdvoor
     * @param \Webservices\StructType\CarOption $airbag_hoofdachter
     * @param \Webservices\StructType\CarOption $gordelspanners
     * @param \Webservices\StructType\CarOption $verstelbare_gordelhoogte
     * @param \Webservices\StructType\CarOption $startonderbreker
     * @param \Webservices\StructType\CarOption $inbraakalarm
     * @param \Webservices\StructType\CarOption $centrale_deurvergrendeling
     * @param \Webservices\StructType\CarOption $afstandbediening_deurvergrendeling
     * @param \Webservices\StructType\CarOption $automatische_vergrendeling
     * @param \Webservices\StructType\CarOption $keyless_entry
     * @param \Webservices\StructType\CarOption $elektrische_ramen_voor
     * @param \Webservices\StructType\CarOption $elektrische_ramen_achter
     * @param \Webservices\StructType\CarOption $stuurbekrachtiging
     * @param \Webservices\StructType\CarOption $stuurschakeling
     * @param \Webservices\StructType\CarOption $cruise_control
     * @param \Webservices\StructType\CarOption $radar_cruise_control
     * @param \Webservices\StructType\CarOption $airconditioning
     * @param \Webservices\StructType\CarOption $klimaatregeling
     * @param \Webservices\StructType\CarOption $gescheiden_temperatuurregeling
     * @param \Webservices\StructType\CarOption $pollenfilter
     * @param \Webservices\StructType\CarOption $parkeersensor
     * @param \Webservices\StructType\CarOption $hoofdsteunen_voor
     * @param \Webservices\StructType\CarOption $hoofdsteunen_achter
     * @param \Webservices\StructType\CarOption $verstelbare_hoofdsteunen_achter
     * @param \Webservices\StructType\CarOption $derde_hoofdsteun_achter
     * @param \Webservices\StructType\CarOption $derde_driepuntsgordel_achter
     * @param \Webservices\StructType\CarOption $verstelbare_lendensteun_bestuurder
     * @param \Webservices\StructType\CarOption $verstelbare_lendensteun_passagier
     * @param \Webservices\StructType\CarOption $hoogteverstelling_bestuurder
     * @param \Webservices\StructType\CarOption $hoogteverstelling_passagier
     * @param \Webservices\StructType\CarOption $elektrische_stoelverstelling
     * @param \Webservices\StructType\CarOption $geheugen_stoelverstelling
     * @param \Webservices\StructType\CarOption $verwarmde_zitplaatsen_voor
     * @param \Webservices\StructType\CarOption $verwarmde_zitplaatsen_achter
     * @param \Webservices\StructType\CarOption $sportstoelen
     * @param \Webservices\StructType\CarOption $bekledingstof_leer
     * @param \Webservices\StructType\CarOption $lerenbekleding
     * @param \Webservices\StructType\CarOption $hoogteverstelling_stuur
     * @param \Webservices\StructType\CarOption $diepteverstelling_stuur
     * @param \Webservices\StructType\CarOption $elektrische_stuurverstelling
     * @param \Webservices\StructType\CarOption $leer_bekleed_stuur
     * @param \Webservices\StructType\CarOption $middenarmsteun_voor
     * @param \Webservices\StructType\CarOption $middenarmsteun_achter
     * @param \Webservices\StructType\CarOption $neerklapbare_achterbank
     * @param \Webservices\StructType\CarOption $in_delen_neerklapbaar_achterbank
     * @param \Webservices\StructType\CarOption $opbergvak_linkerportier
     * @param \Webservices\StructType\CarOption $bekerhouder_voor
     * @param \Webservices\StructType\CarOption $bekerhouder_achter
     * @param \Webservices\StructType\CarOption $zonnescherm_achterruit
     * @param \Webservices\StructType\CarOption $dagteller
     * @param \Webservices\StructType\CarOption $toerenteller
     * @param \Webservices\StructType\CarOption $temperatuurmeter
     * @param \Webservices\StructType\CarOption $oliepeilmeter
     * @param \Webservices\StructType\CarOption $oliedrukmeter
     * @param \Webservices\StructType\CarOption $olietemperatuurmeter
     * @param \Webservices\StructType\CarOption $voltmeter
     * @param \Webservices\StructType\CarOption $verbruiksmeter
     * @param \Webservices\StructType\CarOption $turbodrukmeter
     * @param \Webservices\StructType\CarOption $buitentemperatuurmeter
     * @param \Webservices\StructType\CarOption $klokje
     * @param \Webservices\StructType\CarOption $boardcomputer
     * @param \Webservices\StructType\CarOption $luidsprekers
     * @param \Webservices\StructType\CarOption $stereoinstallatie
     * @param \Webservices\StructType\CarOption $cdspeler
     * @param \Webservices\StructType\CarOption $cdwisselaar
     * @param \Webservices\StructType\CarOption $audiostuurbediening
     * @param \Webservices\StructType\CarOption $bandenspanningssensor
     * @param \Webservices\StructType\CarOption $navigatiesysteem
     * @param \Webservices\StructType\CarOption $televisie
     * @param \Webservices\StructType\CarOption $telefoonvoorbereiding
     * @param \Webservices\StructType\CarOption $telefoon
     * @param \Webservices\StructType\CarOption $intervalruitenwisser
     * @param \Webservices\StructType\CarOption $regelbare_interval
     * @param \Webservices\StructType\CarOption $regensensor
     * @param \Webservices\StructType\CarOption $ruitenwisser_achter
     * @param \Webservices\StructType\CarOption $achterruitverwarming
     * @param \Webservices\StructType\CarOption $voorruitverwarming
     * @param \Webservices\StructType\CarOption $verwarmde_ruitensproeiers
     * @param \Webservices\StructType\CarOption $gelaagde_voorruit
     * @param \Webservices\StructType\CarOption $getintglas
     * @param \Webservices\StructType\CarOption $schuifdak
     * @param \Webservices\StructType\CarOption $elektrisch_schuifdak
     * @param \Webservices\StructType\CarOption $beschermstrips_opzij
     * @param \Webservices\StructType\CarOption $bumpers_meegespoten
     * @param \Webservices\StructType\CarOption $metallic_lak
     * @param \Webservices\StructType\CarOption $lichtmetalen_velgen
     * @param \Webservices\StructType\CarOption $rechter_buitenspiegel
     * @param \Webservices\StructType\CarOption $binnenuit_verstelbare_buitenspiegel
     * @param \Webservices\StructType\CarOption $elektrische_spiegels
     * @param \Webservices\StructType\CarOption $verwarmde_spiegels
     * @param \Webservices\StructType\CarOption $inklapbare_spiegels
     * @param \Webservices\StructType\CarOption $meegespoten_spiegels
     * @param \Webservices\StructType\CarOption $dodehoekspiegel_bestuurder
     * @param \Webservices\StructType\CarOption $dimmende_binnenspiegel
     * @param \Webservices\StructType\CarOption $dimmende_buitenspiegel
     * @param \Webservices\StructType\CarOption $dakrails
     * @param \Webservices\StructType\CarOption $binnenuit_te_openen_tankklep
     * @param \Webservices\StructType\CarOption $binnenuit_te_openen_bagageklep
     * @param \Webservices\StructType\CarOption $op_afstand_te_openen_bagageklep
     * @param \Webservices\StructType\CarOption $halogeen_koplampen
     * @param \Webservices\StructType\CarOption $xenon_koplampen
     * @param \Webservices\StructType\CarOption $verstelbare_koplampen
     * @param \Webservices\StructType\CarOption $koplampsproeiers
     * @param \Webservices\StructType\CarOption $automatisch_inschakelende_koplampen
     * @param \Webservices\StructType\CarOption $verstralers
     * @param \Webservices\StructType\CarOption $mistlampen_voor
     * @param \Webservices\StructType\CarOption $mistlampen_achter
     * @param \Webservices\StructType\CarOption $zoemer_vergeten_verlichting
     * @param \Webservices\StructType\CarOption $verlichte_bagageruimte
     * @param \Webservices\StructType\CarOption $verlichte_motorruimte
     * @param \Webservices\StructType\CarOption $verlicht_dashboardkastje
     * @param \Webservices\StructType\CarOption $regelbare_dashboardverlichting
     * @param \Webservices\StructType\CarOption $leeslampje_voor
     * @param \Webservices\StructType\CarOption $leeslampje_achter
     * @param \Webservices\StructType\CarOption $verlichte_makeupspiegel
     * @param \Webservices\StructType\CarOption $vertraging_interieurverlichting
     * @param \Webservices\StructType\CarOption $portierverlichting
     */
    public function __construct($car_id = null, $merk = null, $serie = null, $serie_jaar_van = null, $serie_jaar_tot = null, $model = null, $model_maand_van = null, $model_jaar_van = null, $model_maand_tot = null, $model_jaar_tot = null, $belasting_min = null, $belasting_max = null, $algemene_garantie = null, $algemene_garantie_km = null, $carrosserie_garantie = null, $deuren = null, $carrosserietype = null, $aantal_versnellingen = null, $soort_schakeling = null, $aandrijving = null, $brandstoftype = null, $aantal_cilinders = null, $bouwwijze = null, $kleppen_per_cilinder = null, $cilinderinhoud = null, $boring = null, $slag = null, $compressieverhouding = null, $vermogen_kw = null, $vermogen_pk = null, $vermogen_tpm = null, $koppel = null, $koppel_tpm = null, $katalysator = null, $brandstofsysteem = null, $klepbediening = null, $turbo = null, $wielophanging_voor = null, $wielophanging_achter = null, $vering_voor = null, $vering_achter = null, $stabilisator_voor = null, $stabilisator_achter = null, $remmen_voor = null, $remmen_voor_mm = null, $remmen_achter = null, $remmen_achter_mm = null, $cw_waarde = null, $lengte = null, $breedte = null, $hoogte = null, $wielbasis = null, $spoorbreedte_voor = null, $spoorbreedte_achter = null, $draaicirkel = null, $bandenmaat_voor = null, $bandenmaat_achter = null, $massa = null, $max_toelaatbare_massa = null, $max_aanhanger_geremd = null, $max_aanhanger_ongeremd = null, $max_kogeldruk = null, $max_dakbelasting = null, $koffer_min = null, $koffer_max = null, $tankinhoud = null, $topsnelheid = null, $acceleratie = null, $verbruik_binnen_bebouwde_kom = null, $verbruik_buiten_bebouwde_kom = null, $verbruik_gecombineerd = null, $co2_uitstoot = null, $verbruik_gemiddeld = null, \Webservices\StructType\CarOption $abs = null, \Webservices\StructType\CarOption $remkrachtverdeling = null, \Webservices\StructType\CarOption $brakeassist = null, \Webservices\StructType\CarOption $tractiecontrole = null, \Webservices\StructType\CarOption $sperdifferentieel = null, \Webservices\StructType\CarOption $stabiliteitsregeling = null, \Webservices\StructType\CarOption $regelbare_schokdemping = null, \Webservices\StructType\CarOption $niveauregeling = null, \Webservices\StructType\CarOption $airbag_bestuurder = null, \Webservices\StructType\CarOption $airbag_passagier = null, \Webservices\StructType\CarOption $airbag_opzijvoor = null, \Webservices\StructType\CarOption $airbag_opzijachter = null, \Webservices\StructType\CarOption $airbag_hoofdvoor = null, \Webservices\StructType\CarOption $airbag_hoofdachter = null, \Webservices\StructType\CarOption $gordelspanners = null, \Webservices\StructType\CarOption $verstelbare_gordelhoogte = null, \Webservices\StructType\CarOption $startonderbreker = null, \Webservices\StructType\CarOption $inbraakalarm = null, \Webservices\StructType\CarOption $centrale_deurvergrendeling = null, \Webservices\StructType\CarOption $afstandbediening_deurvergrendeling = null, \Webservices\StructType\CarOption $automatische_vergrendeling = null, \Webservices\StructType\CarOption $keyless_entry = null, \Webservices\StructType\CarOption $elektrische_ramen_voor = null, \Webservices\StructType\CarOption $elektrische_ramen_achter = null, \Webservices\StructType\CarOption $stuurbekrachtiging = null, \Webservices\StructType\CarOption $stuurschakeling = null, \Webservices\StructType\CarOption $cruise_control = null, \Webservices\StructType\CarOption $radar_cruise_control = null, \Webservices\StructType\CarOption $airconditioning = null, \Webservices\StructType\CarOption $klimaatregeling = null, \Webservices\StructType\CarOption $gescheiden_temperatuurregeling = null, \Webservices\StructType\CarOption $pollenfilter = null, \Webservices\StructType\CarOption $parkeersensor = null, \Webservices\StructType\CarOption $hoofdsteunen_voor = null, \Webservices\StructType\CarOption $hoofdsteunen_achter = null, \Webservices\StructType\CarOption $verstelbare_hoofdsteunen_achter = null, \Webservices\StructType\CarOption $derde_hoofdsteun_achter = null, \Webservices\StructType\CarOption $derde_driepuntsgordel_achter = null, \Webservices\StructType\CarOption $verstelbare_lendensteun_bestuurder = null, \Webservices\StructType\CarOption $verstelbare_lendensteun_passagier = null, \Webservices\StructType\CarOption $hoogteverstelling_bestuurder = null, \Webservices\StructType\CarOption $hoogteverstelling_passagier = null, \Webservices\StructType\CarOption $elektrische_stoelverstelling = null, \Webservices\StructType\CarOption $geheugen_stoelverstelling = null, \Webservices\StructType\CarOption $verwarmde_zitplaatsen_voor = null, \Webservices\StructType\CarOption $verwarmde_zitplaatsen_achter = null, \Webservices\StructType\CarOption $sportstoelen = null, \Webservices\StructType\CarOption $bekledingstof_leer = null, \Webservices\StructType\CarOption $lerenbekleding = null, \Webservices\StructType\CarOption $hoogteverstelling_stuur = null, \Webservices\StructType\CarOption $diepteverstelling_stuur = null, \Webservices\StructType\CarOption $elektrische_stuurverstelling = null, \Webservices\StructType\CarOption $leer_bekleed_stuur = null, \Webservices\StructType\CarOption $middenarmsteun_voor = null, \Webservices\StructType\CarOption $middenarmsteun_achter = null, \Webservices\StructType\CarOption $neerklapbare_achterbank = null, \Webservices\StructType\CarOption $in_delen_neerklapbaar_achterbank = null, \Webservices\StructType\CarOption $opbergvak_linkerportier = null, \Webservices\StructType\CarOption $bekerhouder_voor = null, \Webservices\StructType\CarOption $bekerhouder_achter = null, \Webservices\StructType\CarOption $zonnescherm_achterruit = null, \Webservices\StructType\CarOption $dagteller = null, \Webservices\StructType\CarOption $toerenteller = null, \Webservices\StructType\CarOption $temperatuurmeter = null, \Webservices\StructType\CarOption $oliepeilmeter = null, \Webservices\StructType\CarOption $oliedrukmeter = null, \Webservices\StructType\CarOption $olietemperatuurmeter = null, \Webservices\StructType\CarOption $voltmeter = null, \Webservices\StructType\CarOption $verbruiksmeter = null, \Webservices\StructType\CarOption $turbodrukmeter = null, \Webservices\StructType\CarOption $buitentemperatuurmeter = null, \Webservices\StructType\CarOption $klokje = null, \Webservices\StructType\CarOption $boardcomputer = null, \Webservices\StructType\CarOption $luidsprekers = null, \Webservices\StructType\CarOption $stereoinstallatie = null, \Webservices\StructType\CarOption $cdspeler = null, \Webservices\StructType\CarOption $cdwisselaar = null, \Webservices\StructType\CarOption $audiostuurbediening = null, \Webservices\StructType\CarOption $bandenspanningssensor = null, \Webservices\StructType\CarOption $navigatiesysteem = null, \Webservices\StructType\CarOption $televisie = null, \Webservices\StructType\CarOption $telefoonvoorbereiding = null, \Webservices\StructType\CarOption $telefoon = null, \Webservices\StructType\CarOption $intervalruitenwisser = null, \Webservices\StructType\CarOption $regelbare_interval = null, \Webservices\StructType\CarOption $regensensor = null, \Webservices\StructType\CarOption $ruitenwisser_achter = null, \Webservices\StructType\CarOption $achterruitverwarming = null, \Webservices\StructType\CarOption $voorruitverwarming = null, \Webservices\StructType\CarOption $verwarmde_ruitensproeiers = null, \Webservices\StructType\CarOption $gelaagde_voorruit = null, \Webservices\StructType\CarOption $getintglas = null, \Webservices\StructType\CarOption $schuifdak = null, \Webservices\StructType\CarOption $elektrisch_schuifdak = null, \Webservices\StructType\CarOption $beschermstrips_opzij = null, \Webservices\StructType\CarOption $bumpers_meegespoten = null, \Webservices\StructType\CarOption $metallic_lak = null, \Webservices\StructType\CarOption $lichtmetalen_velgen = null, \Webservices\StructType\CarOption $rechter_buitenspiegel = null, \Webservices\StructType\CarOption $binnenuit_verstelbare_buitenspiegel = null, \Webservices\StructType\CarOption $elektrische_spiegels = null, \Webservices\StructType\CarOption $verwarmde_spiegels = null, \Webservices\StructType\CarOption $inklapbare_spiegels = null, \Webservices\StructType\CarOption $meegespoten_spiegels = null, \Webservices\StructType\CarOption $dodehoekspiegel_bestuurder = null, \Webservices\StructType\CarOption $dimmende_binnenspiegel = null, \Webservices\StructType\CarOption $dimmende_buitenspiegel = null, \Webservices\StructType\CarOption $dakrails = null, \Webservices\StructType\CarOption $binnenuit_te_openen_tankklep = null, \Webservices\StructType\CarOption $binnenuit_te_openen_bagageklep = null, \Webservices\StructType\CarOption $op_afstand_te_openen_bagageklep = null, \Webservices\StructType\CarOption $halogeen_koplampen = null, \Webservices\StructType\CarOption $xenon_koplampen = null, \Webservices\StructType\CarOption $verstelbare_koplampen = null, \Webservices\StructType\CarOption $koplampsproeiers = null, \Webservices\StructType\CarOption $automatisch_inschakelende_koplampen = null, \Webservices\StructType\CarOption $verstralers = null, \Webservices\StructType\CarOption $mistlampen_voor = null, \Webservices\StructType\CarOption $mistlampen_achter = null, \Webservices\StructType\CarOption $zoemer_vergeten_verlichting = null, \Webservices\StructType\CarOption $verlichte_bagageruimte = null, \Webservices\StructType\CarOption $verlichte_motorruimte = null, \Webservices\StructType\CarOption $verlicht_dashboardkastje = null, \Webservices\StructType\CarOption $regelbare_dashboardverlichting = null, \Webservices\StructType\CarOption $leeslampje_voor = null, \Webservices\StructType\CarOption $leeslampje_achter = null, \Webservices\StructType\CarOption $verlichte_makeupspiegel = null, \Webservices\StructType\CarOption $vertraging_interieurverlichting = null, \Webservices\StructType\CarOption $portierverlichting = null)
    {
        $this
            ->setCar_id($car_id)
            ->setMerk($merk)
            ->setSerie($serie)
            ->setSerie_jaar_van($serie_jaar_van)
            ->setSerie_jaar_tot($serie_jaar_tot)
            ->setModel($model)
            ->setModel_maand_van($model_maand_van)
            ->setModel_jaar_van($model_jaar_van)
            ->setModel_maand_tot($model_maand_tot)
            ->setModel_jaar_tot($model_jaar_tot)
            ->setBelasting_min($belasting_min)
            ->setBelasting_max($belasting_max)
            ->setAlgemene_garantie($algemene_garantie)
            ->setAlgemene_garantie_km($algemene_garantie_km)
            ->setCarrosserie_garantie($carrosserie_garantie)
            ->setDeuren($deuren)
            ->setCarrosserietype($carrosserietype)
            ->setAantal_versnellingen($aantal_versnellingen)
            ->setSoort_schakeling($soort_schakeling)
            ->setAandrijving($aandrijving)
            ->setBrandstoftype($brandstoftype)
            ->setAantal_cilinders($aantal_cilinders)
            ->setBouwwijze($bouwwijze)
            ->setKleppen_per_cilinder($kleppen_per_cilinder)
            ->setCilinderinhoud($cilinderinhoud)
            ->setBoring($boring)
            ->setSlag($slag)
            ->setCompressieverhouding($compressieverhouding)
            ->setVermogen_kw($vermogen_kw)
            ->setVermogen_pk($vermogen_pk)
            ->setVermogen_tpm($vermogen_tpm)
            ->setKoppel($koppel)
            ->setKoppel_tpm($koppel_tpm)
            ->setKatalysator($katalysator)
            ->setBrandstofsysteem($brandstofsysteem)
            ->setKlepbediening($klepbediening)
            ->setTurbo($turbo)
            ->setWielophanging_voor($wielophanging_voor)
            ->setWielophanging_achter($wielophanging_achter)
            ->setVering_voor($vering_voor)
            ->setVering_achter($vering_achter)
            ->setStabilisator_voor($stabilisator_voor)
            ->setStabilisator_achter($stabilisator_achter)
            ->setRemmen_voor($remmen_voor)
            ->setRemmen_voor_mm($remmen_voor_mm)
            ->setRemmen_achter($remmen_achter)
            ->setRemmen_achter_mm($remmen_achter_mm)
            ->setCw_waarde($cw_waarde)
            ->setLengte($lengte)
            ->setBreedte($breedte)
            ->setHoogte($hoogte)
            ->setWielbasis($wielbasis)
            ->setSpoorbreedte_voor($spoorbreedte_voor)
            ->setSpoorbreedte_achter($spoorbreedte_achter)
            ->setDraaicirkel($draaicirkel)
            ->setBandenmaat_voor($bandenmaat_voor)
            ->setBandenmaat_achter($bandenmaat_achter)
            ->setMassa($massa)
            ->setMax_toelaatbare_massa($max_toelaatbare_massa)
            ->setMax_aanhanger_geremd($max_aanhanger_geremd)
            ->setMax_aanhanger_ongeremd($max_aanhanger_ongeremd)
            ->setMax_kogeldruk($max_kogeldruk)
            ->setMax_dakbelasting($max_dakbelasting)
            ->setKoffer_min($koffer_min)
            ->setKoffer_max($koffer_max)
            ->setTankinhoud($tankinhoud)
            ->setTopsnelheid($topsnelheid)
            ->setAcceleratie($acceleratie)
            ->setVerbruik_binnen_bebouwde_kom($verbruik_binnen_bebouwde_kom)
            ->setVerbruik_buiten_bebouwde_kom($verbruik_buiten_bebouwde_kom)
            ->setVerbruik_gecombineerd($verbruik_gecombineerd)
            ->setCo2_uitstoot($co2_uitstoot)
            ->setVerbruik_gemiddeld($verbruik_gemiddeld)
            ->setAbs($abs)
            ->setRemkrachtverdeling($remkrachtverdeling)
            ->setBrakeassist($brakeassist)
            ->setTractiecontrole($tractiecontrole)
            ->setSperdifferentieel($sperdifferentieel)
            ->setStabiliteitsregeling($stabiliteitsregeling)
            ->setRegelbare_schokdemping($regelbare_schokdemping)
            ->setNiveauregeling($niveauregeling)
            ->setAirbag_bestuurder($airbag_bestuurder)
            ->setAirbag_passagier($airbag_passagier)
            ->setAirbag_opzijvoor($airbag_opzijvoor)
            ->setAirbag_opzijachter($airbag_opzijachter)
            ->setAirbag_hoofdvoor($airbag_hoofdvoor)
            ->setAirbag_hoofdachter($airbag_hoofdachter)
            ->setGordelspanners($gordelspanners)
            ->setVerstelbare_gordelhoogte($verstelbare_gordelhoogte)
            ->setStartonderbreker($startonderbreker)
            ->setInbraakalarm($inbraakalarm)
            ->setCentrale_deurvergrendeling($centrale_deurvergrendeling)
            ->setAfstandbediening_deurvergrendeling($afstandbediening_deurvergrendeling)
            ->setAutomatische_vergrendeling($automatische_vergrendeling)
            ->setKeyless_entry($keyless_entry)
            ->setElektrische_ramen_voor($elektrische_ramen_voor)
            ->setElektrische_ramen_achter($elektrische_ramen_achter)
            ->setStuurbekrachtiging($stuurbekrachtiging)
            ->setStuurschakeling($stuurschakeling)
            ->setCruise_control($cruise_control)
            ->setRadar_cruise_control($radar_cruise_control)
            ->setAirconditioning($airconditioning)
            ->setKlimaatregeling($klimaatregeling)
            ->setGescheiden_temperatuurregeling($gescheiden_temperatuurregeling)
            ->setPollenfilter($pollenfilter)
            ->setParkeersensor($parkeersensor)
            ->setHoofdsteunen_voor($hoofdsteunen_voor)
            ->setHoofdsteunen_achter($hoofdsteunen_achter)
            ->setVerstelbare_hoofdsteunen_achter($verstelbare_hoofdsteunen_achter)
            ->setDerde_hoofdsteun_achter($derde_hoofdsteun_achter)
            ->setDerde_driepuntsgordel_achter($derde_driepuntsgordel_achter)
            ->setVerstelbare_lendensteun_bestuurder($verstelbare_lendensteun_bestuurder)
            ->setVerstelbare_lendensteun_passagier($verstelbare_lendensteun_passagier)
            ->setHoogteverstelling_bestuurder($hoogteverstelling_bestuurder)
            ->setHoogteverstelling_passagier($hoogteverstelling_passagier)
            ->setElektrische_stoelverstelling($elektrische_stoelverstelling)
            ->setGeheugen_stoelverstelling($geheugen_stoelverstelling)
            ->setVerwarmde_zitplaatsen_voor($verwarmde_zitplaatsen_voor)
            ->setVerwarmde_zitplaatsen_achter($verwarmde_zitplaatsen_achter)
            ->setSportstoelen($sportstoelen)
            ->setBekledingstof_leer($bekledingstof_leer)
            ->setLerenbekleding($lerenbekleding)
            ->setHoogteverstelling_stuur($hoogteverstelling_stuur)
            ->setDiepteverstelling_stuur($diepteverstelling_stuur)
            ->setElektrische_stuurverstelling($elektrische_stuurverstelling)
            ->setLeer_bekleed_stuur($leer_bekleed_stuur)
            ->setMiddenarmsteun_voor($middenarmsteun_voor)
            ->setMiddenarmsteun_achter($middenarmsteun_achter)
            ->setNeerklapbare_achterbank($neerklapbare_achterbank)
            ->setIn_delen_neerklapbaar_achterbank($in_delen_neerklapbaar_achterbank)
            ->setOpbergvak_linkerportier($opbergvak_linkerportier)
            ->setBekerhouder_voor($bekerhouder_voor)
            ->setBekerhouder_achter($bekerhouder_achter)
            ->setZonnescherm_achterruit($zonnescherm_achterruit)
            ->setDagteller($dagteller)
            ->setToerenteller($toerenteller)
            ->setTemperatuurmeter($temperatuurmeter)
            ->setOliepeilmeter($oliepeilmeter)
            ->setOliedrukmeter($oliedrukmeter)
            ->setOlietemperatuurmeter($olietemperatuurmeter)
            ->setVoltmeter($voltmeter)
            ->setVerbruiksmeter($verbruiksmeter)
            ->setTurbodrukmeter($turbodrukmeter)
            ->setBuitentemperatuurmeter($buitentemperatuurmeter)
            ->setKlokje($klokje)
            ->setBoardcomputer($boardcomputer)
            ->setLuidsprekers($luidsprekers)
            ->setStereoinstallatie($stereoinstallatie)
            ->setCdspeler($cdspeler)
            ->setCdwisselaar($cdwisselaar)
            ->setAudiostuurbediening($audiostuurbediening)
            ->setBandenspanningssensor($bandenspanningssensor)
            ->setNavigatiesysteem($navigatiesysteem)
            ->setTelevisie($televisie)
            ->setTelefoonvoorbereiding($telefoonvoorbereiding)
            ->setTelefoon($telefoon)
            ->setIntervalruitenwisser($intervalruitenwisser)
            ->setRegelbare_interval($regelbare_interval)
            ->setRegensensor($regensensor)
            ->setRuitenwisser_achter($ruitenwisser_achter)
            ->setAchterruitverwarming($achterruitverwarming)
            ->setVoorruitverwarming($voorruitverwarming)
            ->setVerwarmde_ruitensproeiers($verwarmde_ruitensproeiers)
            ->setGelaagde_voorruit($gelaagde_voorruit)
            ->setGetintglas($getintglas)
            ->setSchuifdak($schuifdak)
            ->setElektrisch_schuifdak($elektrisch_schuifdak)
            ->setBeschermstrips_opzij($beschermstrips_opzij)
            ->setBumpers_meegespoten($bumpers_meegespoten)
            ->setMetallic_lak($metallic_lak)
            ->setLichtmetalen_velgen($lichtmetalen_velgen)
            ->setRechter_buitenspiegel($rechter_buitenspiegel)
            ->setBinnenuit_verstelbare_buitenspiegel($binnenuit_verstelbare_buitenspiegel)
            ->setElektrische_spiegels($elektrische_spiegels)
            ->setVerwarmde_spiegels($verwarmde_spiegels)
            ->setInklapbare_spiegels($inklapbare_spiegels)
            ->setMeegespoten_spiegels($meegespoten_spiegels)
            ->setDodehoekspiegel_bestuurder($dodehoekspiegel_bestuurder)
            ->setDimmende_binnenspiegel($dimmende_binnenspiegel)
            ->setDimmende_buitenspiegel($dimmende_buitenspiegel)
            ->setDakrails($dakrails)
            ->setBinnenuit_te_openen_tankklep($binnenuit_te_openen_tankklep)
            ->setBinnenuit_te_openen_bagageklep($binnenuit_te_openen_bagageklep)
            ->setOp_afstand_te_openen_bagageklep($op_afstand_te_openen_bagageklep)
            ->setHalogeen_koplampen($halogeen_koplampen)
            ->setXenon_koplampen($xenon_koplampen)
            ->setVerstelbare_koplampen($verstelbare_koplampen)
            ->setKoplampsproeiers($koplampsproeiers)
            ->setAutomatisch_inschakelende_koplampen($automatisch_inschakelende_koplampen)
            ->setVerstralers($verstralers)
            ->setMistlampen_voor($mistlampen_voor)
            ->setMistlampen_achter($mistlampen_achter)
            ->setZoemer_vergeten_verlichting($zoemer_vergeten_verlichting)
            ->setVerlichte_bagageruimte($verlichte_bagageruimte)
            ->setVerlichte_motorruimte($verlichte_motorruimte)
            ->setVerlicht_dashboardkastje($verlicht_dashboardkastje)
            ->setRegelbare_dashboardverlichting($regelbare_dashboardverlichting)
            ->setLeeslampje_voor($leeslampje_voor)
            ->setLeeslampje_achter($leeslampje_achter)
            ->setVerlichte_makeupspiegel($verlichte_makeupspiegel)
            ->setVertraging_interieurverlichting($vertraging_interieurverlichting)
            ->setPortierverlichting($portierverlichting);
    }
    /**
     * Get car_id value
     * @return string|null
     */
    public function getCar_id()
    {
        return $this->car_id;
    }
    /**
     * Set car_id value
     * @param string $car_id
     * @return \Webservices\StructType\CarOptions
     */
    public function setCar_id($car_id = null)
    {
        // validation for constraint: string
        if (!is_null($car_id) && !is_string($car_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($car_id)), __LINE__);
        }
        $this->car_id = $car_id;
        return $this;
    }
    /**
     * Get merk value
     * @return string|null
     */
    public function getMerk()
    {
        return $this->merk;
    }
    /**
     * Set merk value
     * @param string $merk
     * @return \Webservices\StructType\CarOptions
     */
    public function setMerk($merk = null)
    {
        // validation for constraint: string
        if (!is_null($merk) && !is_string($merk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($merk)), __LINE__);
        }
        $this->merk = $merk;
        return $this;
    }
    /**
     * Get serie value
     * @return string|null
     */
    public function getSerie()
    {
        return $this->serie;
    }
    /**
     * Set serie value
     * @param string $serie
     * @return \Webservices\StructType\CarOptions
     */
    public function setSerie($serie = null)
    {
        // validation for constraint: string
        if (!is_null($serie) && !is_string($serie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serie)), __LINE__);
        }
        $this->serie = $serie;
        return $this;
    }
    /**
     * Get serie_jaar_van value
     * @return int|null
     */
    public function getSerie_jaar_van()
    {
        return $this->serie_jaar_van;
    }
    /**
     * Set serie_jaar_van value
     * @param int $serie_jaar_van
     * @return \Webservices\StructType\CarOptions
     */
    public function setSerie_jaar_van($serie_jaar_van = null)
    {
        // validation for constraint: int
        if (!is_null($serie_jaar_van) && !is_numeric($serie_jaar_van)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($serie_jaar_van)), __LINE__);
        }
        $this->serie_jaar_van = $serie_jaar_van;
        return $this;
    }
    /**
     * Get serie_jaar_tot value
     * @return int|null
     */
    public function getSerie_jaar_tot()
    {
        return $this->serie_jaar_tot;
    }
    /**
     * Set serie_jaar_tot value
     * @param int $serie_jaar_tot
     * @return \Webservices\StructType\CarOptions
     */
    public function setSerie_jaar_tot($serie_jaar_tot = null)
    {
        // validation for constraint: int
        if (!is_null($serie_jaar_tot) && !is_numeric($serie_jaar_tot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($serie_jaar_tot)), __LINE__);
        }
        $this->serie_jaar_tot = $serie_jaar_tot;
        return $this;
    }
    /**
     * Get model value
     * @return string|null
     */
    public function getModel()
    {
        return $this->model;
    }
    /**
     * Set model value
     * @param string $model
     * @return \Webservices\StructType\CarOptions
     */
    public function setModel($model = null)
    {
        // validation for constraint: string
        if (!is_null($model) && !is_string($model)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($model)), __LINE__);
        }
        $this->model = $model;
        return $this;
    }
    /**
     * Get model_maand_van value
     * @return int|null
     */
    public function getModel_maand_van()
    {
        return $this->model_maand_van;
    }
    /**
     * Set model_maand_van value
     * @param int $model_maand_van
     * @return \Webservices\StructType\CarOptions
     */
    public function setModel_maand_van($model_maand_van = null)
    {
        // validation for constraint: int
        if (!is_null($model_maand_van) && !is_numeric($model_maand_van)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($model_maand_van)), __LINE__);
        }
        $this->model_maand_van = $model_maand_van;
        return $this;
    }
    /**
     * Get model_jaar_van value
     * @return int|null
     */
    public function getModel_jaar_van()
    {
        return $this->model_jaar_van;
    }
    /**
     * Set model_jaar_van value
     * @param int $model_jaar_van
     * @return \Webservices\StructType\CarOptions
     */
    public function setModel_jaar_van($model_jaar_van = null)
    {
        // validation for constraint: int
        if (!is_null($model_jaar_van) && !is_numeric($model_jaar_van)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($model_jaar_van)), __LINE__);
        }
        $this->model_jaar_van = $model_jaar_van;
        return $this;
    }
    /**
     * Get model_maand_tot value
     * @return int|null
     */
    public function getModel_maand_tot()
    {
        return $this->model_maand_tot;
    }
    /**
     * Set model_maand_tot value
     * @param int $model_maand_tot
     * @return \Webservices\StructType\CarOptions
     */
    public function setModel_maand_tot($model_maand_tot = null)
    {
        // validation for constraint: int
        if (!is_null($model_maand_tot) && !is_numeric($model_maand_tot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($model_maand_tot)), __LINE__);
        }
        $this->model_maand_tot = $model_maand_tot;
        return $this;
    }
    /**
     * Get model_jaar_tot value
     * @return int|null
     */
    public function getModel_jaar_tot()
    {
        return $this->model_jaar_tot;
    }
    /**
     * Set model_jaar_tot value
     * @param int $model_jaar_tot
     * @return \Webservices\StructType\CarOptions
     */
    public function setModel_jaar_tot($model_jaar_tot = null)
    {
        // validation for constraint: int
        if (!is_null($model_jaar_tot) && !is_numeric($model_jaar_tot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($model_jaar_tot)), __LINE__);
        }
        $this->model_jaar_tot = $model_jaar_tot;
        return $this;
    }
    /**
     * Get belasting_min value
     * @return string|null
     */
    public function getBelasting_min()
    {
        return $this->belasting_min;
    }
    /**
     * Set belasting_min value
     * @param string $belasting_min
     * @return \Webservices\StructType\CarOptions
     */
    public function setBelasting_min($belasting_min = null)
    {
        // validation for constraint: string
        if (!is_null($belasting_min) && !is_string($belasting_min)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($belasting_min)), __LINE__);
        }
        $this->belasting_min = $belasting_min;
        return $this;
    }
    /**
     * Get belasting_max value
     * @return string|null
     */
    public function getBelasting_max()
    {
        return $this->belasting_max;
    }
    /**
     * Set belasting_max value
     * @param string $belasting_max
     * @return \Webservices\StructType\CarOptions
     */
    public function setBelasting_max($belasting_max = null)
    {
        // validation for constraint: string
        if (!is_null($belasting_max) && !is_string($belasting_max)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($belasting_max)), __LINE__);
        }
        $this->belasting_max = $belasting_max;
        return $this;
    }
    /**
     * Get algemene_garantie value
     * @return string|null
     */
    public function getAlgemene_garantie()
    {
        return $this->algemene_garantie;
    }
    /**
     * Set algemene_garantie value
     * @param string $algemene_garantie
     * @return \Webservices\StructType\CarOptions
     */
    public function setAlgemene_garantie($algemene_garantie = null)
    {
        // validation for constraint: string
        if (!is_null($algemene_garantie) && !is_string($algemene_garantie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($algemene_garantie)), __LINE__);
        }
        $this->algemene_garantie = $algemene_garantie;
        return $this;
    }
    /**
     * Get algemene_garantie_km value
     * @return string|null
     */
    public function getAlgemene_garantie_km()
    {
        return $this->algemene_garantie_km;
    }
    /**
     * Set algemene_garantie_km value
     * @param string $algemene_garantie_km
     * @return \Webservices\StructType\CarOptions
     */
    public function setAlgemene_garantie_km($algemene_garantie_km = null)
    {
        // validation for constraint: string
        if (!is_null($algemene_garantie_km) && !is_string($algemene_garantie_km)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($algemene_garantie_km)), __LINE__);
        }
        $this->algemene_garantie_km = $algemene_garantie_km;
        return $this;
    }
    /**
     * Get carrosserie_garantie value
     * @return string|null
     */
    public function getCarrosserie_garantie()
    {
        return $this->carrosserie_garantie;
    }
    /**
     * Set carrosserie_garantie value
     * @param string $carrosserie_garantie
     * @return \Webservices\StructType\CarOptions
     */
    public function setCarrosserie_garantie($carrosserie_garantie = null)
    {
        // validation for constraint: string
        if (!is_null($carrosserie_garantie) && !is_string($carrosserie_garantie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrosserie_garantie)), __LINE__);
        }
        $this->carrosserie_garantie = $carrosserie_garantie;
        return $this;
    }
    /**
     * Get deuren value
     * @return string|null
     */
    public function getDeuren()
    {
        return $this->deuren;
    }
    /**
     * Set deuren value
     * @param string $deuren
     * @return \Webservices\StructType\CarOptions
     */
    public function setDeuren($deuren = null)
    {
        // validation for constraint: string
        if (!is_null($deuren) && !is_string($deuren)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deuren)), __LINE__);
        }
        $this->deuren = $deuren;
        return $this;
    }
    /**
     * Get carrosserietype value
     * @return string|null
     */
    public function getCarrosserietype()
    {
        return $this->carrosserietype;
    }
    /**
     * Set carrosserietype value
     * @param string $carrosserietype
     * @return \Webservices\StructType\CarOptions
     */
    public function setCarrosserietype($carrosserietype = null)
    {
        // validation for constraint: string
        if (!is_null($carrosserietype) && !is_string($carrosserietype)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrosserietype)), __LINE__);
        }
        $this->carrosserietype = $carrosserietype;
        return $this;
    }
    /**
     * Get aantal_versnellingen value
     * @return string|null
     */
    public function getAantal_versnellingen()
    {
        return $this->aantal_versnellingen;
    }
    /**
     * Set aantal_versnellingen value
     * @param string $aantal_versnellingen
     * @return \Webservices\StructType\CarOptions
     */
    public function setAantal_versnellingen($aantal_versnellingen = null)
    {
        // validation for constraint: string
        if (!is_null($aantal_versnellingen) && !is_string($aantal_versnellingen)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aantal_versnellingen)), __LINE__);
        }
        $this->aantal_versnellingen = $aantal_versnellingen;
        return $this;
    }
    /**
     * Get soort_schakeling value
     * @return string|null
     */
    public function getSoort_schakeling()
    {
        return $this->soort_schakeling;
    }
    /**
     * Set soort_schakeling value
     * @param string $soort_schakeling
     * @return \Webservices\StructType\CarOptions
     */
    public function setSoort_schakeling($soort_schakeling = null)
    {
        // validation for constraint: string
        if (!is_null($soort_schakeling) && !is_string($soort_schakeling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($soort_schakeling)), __LINE__);
        }
        $this->soort_schakeling = $soort_schakeling;
        return $this;
    }
    /**
     * Get aandrijving value
     * @return string|null
     */
    public function getAandrijving()
    {
        return $this->aandrijving;
    }
    /**
     * Set aandrijving value
     * @param string $aandrijving
     * @return \Webservices\StructType\CarOptions
     */
    public function setAandrijving($aandrijving = null)
    {
        // validation for constraint: string
        if (!is_null($aandrijving) && !is_string($aandrijving)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aandrijving)), __LINE__);
        }
        $this->aandrijving = $aandrijving;
        return $this;
    }
    /**
     * Get brandstoftype value
     * @return string|null
     */
    public function getBrandstoftype()
    {
        return $this->brandstoftype;
    }
    /**
     * Set brandstoftype value
     * @param string $brandstoftype
     * @return \Webservices\StructType\CarOptions
     */
    public function setBrandstoftype($brandstoftype = null)
    {
        // validation for constraint: string
        if (!is_null($brandstoftype) && !is_string($brandstoftype)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brandstoftype)), __LINE__);
        }
        $this->brandstoftype = $brandstoftype;
        return $this;
    }
    /**
     * Get aantal_cilinders value
     * @return string|null
     */
    public function getAantal_cilinders()
    {
        return $this->aantal_cilinders;
    }
    /**
     * Set aantal_cilinders value
     * @param string $aantal_cilinders
     * @return \Webservices\StructType\CarOptions
     */
    public function setAantal_cilinders($aantal_cilinders = null)
    {
        // validation for constraint: string
        if (!is_null($aantal_cilinders) && !is_string($aantal_cilinders)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aantal_cilinders)), __LINE__);
        }
        $this->aantal_cilinders = $aantal_cilinders;
        return $this;
    }
    /**
     * Get bouwwijze value
     * @return string|null
     */
    public function getBouwwijze()
    {
        return $this->bouwwijze;
    }
    /**
     * Set bouwwijze value
     * @param string $bouwwijze
     * @return \Webservices\StructType\CarOptions
     */
    public function setBouwwijze($bouwwijze = null)
    {
        // validation for constraint: string
        if (!is_null($bouwwijze) && !is_string($bouwwijze)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bouwwijze)), __LINE__);
        }
        $this->bouwwijze = $bouwwijze;
        return $this;
    }
    /**
     * Get kleppen_per_cilinder value
     * @return string|null
     */
    public function getKleppen_per_cilinder()
    {
        return $this->kleppen_per_cilinder;
    }
    /**
     * Set kleppen_per_cilinder value
     * @param string $kleppen_per_cilinder
     * @return \Webservices\StructType\CarOptions
     */
    public function setKleppen_per_cilinder($kleppen_per_cilinder = null)
    {
        // validation for constraint: string
        if (!is_null($kleppen_per_cilinder) && !is_string($kleppen_per_cilinder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($kleppen_per_cilinder)), __LINE__);
        }
        $this->kleppen_per_cilinder = $kleppen_per_cilinder;
        return $this;
    }
    /**
     * Get cilinderinhoud value
     * @return string|null
     */
    public function getCilinderinhoud()
    {
        return $this->cilinderinhoud;
    }
    /**
     * Set cilinderinhoud value
     * @param string $cilinderinhoud
     * @return \Webservices\StructType\CarOptions
     */
    public function setCilinderinhoud($cilinderinhoud = null)
    {
        // validation for constraint: string
        if (!is_null($cilinderinhoud) && !is_string($cilinderinhoud)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cilinderinhoud)), __LINE__);
        }
        $this->cilinderinhoud = $cilinderinhoud;
        return $this;
    }
    /**
     * Get boring value
     * @return string|null
     */
    public function getBoring()
    {
        return $this->boring;
    }
    /**
     * Set boring value
     * @param string $boring
     * @return \Webservices\StructType\CarOptions
     */
    public function setBoring($boring = null)
    {
        // validation for constraint: string
        if (!is_null($boring) && !is_string($boring)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($boring)), __LINE__);
        }
        $this->boring = $boring;
        return $this;
    }
    /**
     * Get slag value
     * @return string|null
     */
    public function getSlag()
    {
        return $this->slag;
    }
    /**
     * Set slag value
     * @param string $slag
     * @return \Webservices\StructType\CarOptions
     */
    public function setSlag($slag = null)
    {
        // validation for constraint: string
        if (!is_null($slag) && !is_string($slag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($slag)), __LINE__);
        }
        $this->slag = $slag;
        return $this;
    }
    /**
     * Get compressieverhouding value
     * @return string|null
     */
    public function getCompressieverhouding()
    {
        return $this->compressieverhouding;
    }
    /**
     * Set compressieverhouding value
     * @param string $compressieverhouding
     * @return \Webservices\StructType\CarOptions
     */
    public function setCompressieverhouding($compressieverhouding = null)
    {
        // validation for constraint: string
        if (!is_null($compressieverhouding) && !is_string($compressieverhouding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($compressieverhouding)), __LINE__);
        }
        $this->compressieverhouding = $compressieverhouding;
        return $this;
    }
    /**
     * Get vermogen_kw value
     * @return string|null
     */
    public function getVermogen_kw()
    {
        return $this->vermogen_kw;
    }
    /**
     * Set vermogen_kw value
     * @param string $vermogen_kw
     * @return \Webservices\StructType\CarOptions
     */
    public function setVermogen_kw($vermogen_kw = null)
    {
        // validation for constraint: string
        if (!is_null($vermogen_kw) && !is_string($vermogen_kw)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vermogen_kw)), __LINE__);
        }
        $this->vermogen_kw = $vermogen_kw;
        return $this;
    }
    /**
     * Get vermogen_pk value
     * @return string|null
     */
    public function getVermogen_pk()
    {
        return $this->vermogen_pk;
    }
    /**
     * Set vermogen_pk value
     * @param string $vermogen_pk
     * @return \Webservices\StructType\CarOptions
     */
    public function setVermogen_pk($vermogen_pk = null)
    {
        // validation for constraint: string
        if (!is_null($vermogen_pk) && !is_string($vermogen_pk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vermogen_pk)), __LINE__);
        }
        $this->vermogen_pk = $vermogen_pk;
        return $this;
    }
    /**
     * Get vermogen_tpm value
     * @return string|null
     */
    public function getVermogen_tpm()
    {
        return $this->vermogen_tpm;
    }
    /**
     * Set vermogen_tpm value
     * @param string $vermogen_tpm
     * @return \Webservices\StructType\CarOptions
     */
    public function setVermogen_tpm($vermogen_tpm = null)
    {
        // validation for constraint: string
        if (!is_null($vermogen_tpm) && !is_string($vermogen_tpm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vermogen_tpm)), __LINE__);
        }
        $this->vermogen_tpm = $vermogen_tpm;
        return $this;
    }
    /**
     * Get koppel value
     * @return string|null
     */
    public function getKoppel()
    {
        return $this->koppel;
    }
    /**
     * Set koppel value
     * @param string $koppel
     * @return \Webservices\StructType\CarOptions
     */
    public function setKoppel($koppel = null)
    {
        // validation for constraint: string
        if (!is_null($koppel) && !is_string($koppel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($koppel)), __LINE__);
        }
        $this->koppel = $koppel;
        return $this;
    }
    /**
     * Get koppel_tpm value
     * @return string|null
     */
    public function getKoppel_tpm()
    {
        return $this->koppel_tpm;
    }
    /**
     * Set koppel_tpm value
     * @param string $koppel_tpm
     * @return \Webservices\StructType\CarOptions
     */
    public function setKoppel_tpm($koppel_tpm = null)
    {
        // validation for constraint: string
        if (!is_null($koppel_tpm) && !is_string($koppel_tpm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($koppel_tpm)), __LINE__);
        }
        $this->koppel_tpm = $koppel_tpm;
        return $this;
    }
    /**
     * Get katalysator value
     * @return string|null
     */
    public function getKatalysator()
    {
        return $this->katalysator;
    }
    /**
     * Set katalysator value
     * @param string $katalysator
     * @return \Webservices\StructType\CarOptions
     */
    public function setKatalysator($katalysator = null)
    {
        // validation for constraint: string
        if (!is_null($katalysator) && !is_string($katalysator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($katalysator)), __LINE__);
        }
        $this->katalysator = $katalysator;
        return $this;
    }
    /**
     * Get brandstofsysteem value
     * @return string|null
     */
    public function getBrandstofsysteem()
    {
        return $this->brandstofsysteem;
    }
    /**
     * Set brandstofsysteem value
     * @param string $brandstofsysteem
     * @return \Webservices\StructType\CarOptions
     */
    public function setBrandstofsysteem($brandstofsysteem = null)
    {
        // validation for constraint: string
        if (!is_null($brandstofsysteem) && !is_string($brandstofsysteem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brandstofsysteem)), __LINE__);
        }
        $this->brandstofsysteem = $brandstofsysteem;
        return $this;
    }
    /**
     * Get klepbediening value
     * @return string|null
     */
    public function getKlepbediening()
    {
        return $this->klepbediening;
    }
    /**
     * Set klepbediening value
     * @param string $klepbediening
     * @return \Webservices\StructType\CarOptions
     */
    public function setKlepbediening($klepbediening = null)
    {
        // validation for constraint: string
        if (!is_null($klepbediening) && !is_string($klepbediening)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($klepbediening)), __LINE__);
        }
        $this->klepbediening = $klepbediening;
        return $this;
    }
    /**
     * Get turbo value
     * @return string|null
     */
    public function getTurbo()
    {
        return $this->turbo;
    }
    /**
     * Set turbo value
     * @param string $turbo
     * @return \Webservices\StructType\CarOptions
     */
    public function setTurbo($turbo = null)
    {
        // validation for constraint: string
        if (!is_null($turbo) && !is_string($turbo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($turbo)), __LINE__);
        }
        $this->turbo = $turbo;
        return $this;
    }
    /**
     * Get wielophanging_voor value
     * @return string|null
     */
    public function getWielophanging_voor()
    {
        return $this->wielophanging_voor;
    }
    /**
     * Set wielophanging_voor value
     * @param string $wielophanging_voor
     * @return \Webservices\StructType\CarOptions
     */
    public function setWielophanging_voor($wielophanging_voor = null)
    {
        // validation for constraint: string
        if (!is_null($wielophanging_voor) && !is_string($wielophanging_voor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($wielophanging_voor)), __LINE__);
        }
        $this->wielophanging_voor = $wielophanging_voor;
        return $this;
    }
    /**
     * Get wielophanging_achter value
     * @return string|null
     */
    public function getWielophanging_achter()
    {
        return $this->wielophanging_achter;
    }
    /**
     * Set wielophanging_achter value
     * @param string $wielophanging_achter
     * @return \Webservices\StructType\CarOptions
     */
    public function setWielophanging_achter($wielophanging_achter = null)
    {
        // validation for constraint: string
        if (!is_null($wielophanging_achter) && !is_string($wielophanging_achter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($wielophanging_achter)), __LINE__);
        }
        $this->wielophanging_achter = $wielophanging_achter;
        return $this;
    }
    /**
     * Get vering_voor value
     * @return string|null
     */
    public function getVering_voor()
    {
        return $this->vering_voor;
    }
    /**
     * Set vering_voor value
     * @param string $vering_voor
     * @return \Webservices\StructType\CarOptions
     */
    public function setVering_voor($vering_voor = null)
    {
        // validation for constraint: string
        if (!is_null($vering_voor) && !is_string($vering_voor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vering_voor)), __LINE__);
        }
        $this->vering_voor = $vering_voor;
        return $this;
    }
    /**
     * Get vering_achter value
     * @return string|null
     */
    public function getVering_achter()
    {
        return $this->vering_achter;
    }
    /**
     * Set vering_achter value
     * @param string $vering_achter
     * @return \Webservices\StructType\CarOptions
     */
    public function setVering_achter($vering_achter = null)
    {
        // validation for constraint: string
        if (!is_null($vering_achter) && !is_string($vering_achter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vering_achter)), __LINE__);
        }
        $this->vering_achter = $vering_achter;
        return $this;
    }
    /**
     * Get stabilisator_voor value
     * @return string|null
     */
    public function getStabilisator_voor()
    {
        return $this->stabilisator_voor;
    }
    /**
     * Set stabilisator_voor value
     * @param string $stabilisator_voor
     * @return \Webservices\StructType\CarOptions
     */
    public function setStabilisator_voor($stabilisator_voor = null)
    {
        // validation for constraint: string
        if (!is_null($stabilisator_voor) && !is_string($stabilisator_voor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stabilisator_voor)), __LINE__);
        }
        $this->stabilisator_voor = $stabilisator_voor;
        return $this;
    }
    /**
     * Get stabilisator_achter value
     * @return string|null
     */
    public function getStabilisator_achter()
    {
        return $this->stabilisator_achter;
    }
    /**
     * Set stabilisator_achter value
     * @param string $stabilisator_achter
     * @return \Webservices\StructType\CarOptions
     */
    public function setStabilisator_achter($stabilisator_achter = null)
    {
        // validation for constraint: string
        if (!is_null($stabilisator_achter) && !is_string($stabilisator_achter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stabilisator_achter)), __LINE__);
        }
        $this->stabilisator_achter = $stabilisator_achter;
        return $this;
    }
    /**
     * Get remmen_voor value
     * @return string|null
     */
    public function getRemmen_voor()
    {
        return $this->remmen_voor;
    }
    /**
     * Set remmen_voor value
     * @param string $remmen_voor
     * @return \Webservices\StructType\CarOptions
     */
    public function setRemmen_voor($remmen_voor = null)
    {
        // validation for constraint: string
        if (!is_null($remmen_voor) && !is_string($remmen_voor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($remmen_voor)), __LINE__);
        }
        $this->remmen_voor = $remmen_voor;
        return $this;
    }
    /**
     * Get remmen_voor_mm value
     * @return string|null
     */
    public function getRemmen_voor_mm()
    {
        return $this->remmen_voor_mm;
    }
    /**
     * Set remmen_voor_mm value
     * @param string $remmen_voor_mm
     * @return \Webservices\StructType\CarOptions
     */
    public function setRemmen_voor_mm($remmen_voor_mm = null)
    {
        // validation for constraint: string
        if (!is_null($remmen_voor_mm) && !is_string($remmen_voor_mm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($remmen_voor_mm)), __LINE__);
        }
        $this->remmen_voor_mm = $remmen_voor_mm;
        return $this;
    }
    /**
     * Get remmen_achter value
     * @return string|null
     */
    public function getRemmen_achter()
    {
        return $this->remmen_achter;
    }
    /**
     * Set remmen_achter value
     * @param string $remmen_achter
     * @return \Webservices\StructType\CarOptions
     */
    public function setRemmen_achter($remmen_achter = null)
    {
        // validation for constraint: string
        if (!is_null($remmen_achter) && !is_string($remmen_achter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($remmen_achter)), __LINE__);
        }
        $this->remmen_achter = $remmen_achter;
        return $this;
    }
    /**
     * Get remmen_achter_mm value
     * @return string|null
     */
    public function getRemmen_achter_mm()
    {
        return $this->remmen_achter_mm;
    }
    /**
     * Set remmen_achter_mm value
     * @param string $remmen_achter_mm
     * @return \Webservices\StructType\CarOptions
     */
    public function setRemmen_achter_mm($remmen_achter_mm = null)
    {
        // validation for constraint: string
        if (!is_null($remmen_achter_mm) && !is_string($remmen_achter_mm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($remmen_achter_mm)), __LINE__);
        }
        $this->remmen_achter_mm = $remmen_achter_mm;
        return $this;
    }
    /**
     * Get cw_waarde value
     * @return string|null
     */
    public function getCw_waarde()
    {
        return $this->cw_waarde;
    }
    /**
     * Set cw_waarde value
     * @param string $cw_waarde
     * @return \Webservices\StructType\CarOptions
     */
    public function setCw_waarde($cw_waarde = null)
    {
        // validation for constraint: string
        if (!is_null($cw_waarde) && !is_string($cw_waarde)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cw_waarde)), __LINE__);
        }
        $this->cw_waarde = $cw_waarde;
        return $this;
    }
    /**
     * Get lengte value
     * @return string|null
     */
    public function getLengte()
    {
        return $this->lengte;
    }
    /**
     * Set lengte value
     * @param string $lengte
     * @return \Webservices\StructType\CarOptions
     */
    public function setLengte($lengte = null)
    {
        // validation for constraint: string
        if (!is_null($lengte) && !is_string($lengte)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lengte)), __LINE__);
        }
        $this->lengte = $lengte;
        return $this;
    }
    /**
     * Get breedte value
     * @return string|null
     */
    public function getBreedte()
    {
        return $this->breedte;
    }
    /**
     * Set breedte value
     * @param string $breedte
     * @return \Webservices\StructType\CarOptions
     */
    public function setBreedte($breedte = null)
    {
        // validation for constraint: string
        if (!is_null($breedte) && !is_string($breedte)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($breedte)), __LINE__);
        }
        $this->breedte = $breedte;
        return $this;
    }
    /**
     * Get hoogte value
     * @return string|null
     */
    public function getHoogte()
    {
        return $this->hoogte;
    }
    /**
     * Set hoogte value
     * @param string $hoogte
     * @return \Webservices\StructType\CarOptions
     */
    public function setHoogte($hoogte = null)
    {
        // validation for constraint: string
        if (!is_null($hoogte) && !is_string($hoogte)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hoogte)), __LINE__);
        }
        $this->hoogte = $hoogte;
        return $this;
    }
    /**
     * Get wielbasis value
     * @return string|null
     */
    public function getWielbasis()
    {
        return $this->wielbasis;
    }
    /**
     * Set wielbasis value
     * @param string $wielbasis
     * @return \Webservices\StructType\CarOptions
     */
    public function setWielbasis($wielbasis = null)
    {
        // validation for constraint: string
        if (!is_null($wielbasis) && !is_string($wielbasis)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($wielbasis)), __LINE__);
        }
        $this->wielbasis = $wielbasis;
        return $this;
    }
    /**
     * Get spoorbreedte_voor value
     * @return string|null
     */
    public function getSpoorbreedte_voor()
    {
        return $this->spoorbreedte_voor;
    }
    /**
     * Set spoorbreedte_voor value
     * @param string $spoorbreedte_voor
     * @return \Webservices\StructType\CarOptions
     */
    public function setSpoorbreedte_voor($spoorbreedte_voor = null)
    {
        // validation for constraint: string
        if (!is_null($spoorbreedte_voor) && !is_string($spoorbreedte_voor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($spoorbreedte_voor)), __LINE__);
        }
        $this->spoorbreedte_voor = $spoorbreedte_voor;
        return $this;
    }
    /**
     * Get spoorbreedte_achter value
     * @return string|null
     */
    public function getSpoorbreedte_achter()
    {
        return $this->spoorbreedte_achter;
    }
    /**
     * Set spoorbreedte_achter value
     * @param string $spoorbreedte_achter
     * @return \Webservices\StructType\CarOptions
     */
    public function setSpoorbreedte_achter($spoorbreedte_achter = null)
    {
        // validation for constraint: string
        if (!is_null($spoorbreedte_achter) && !is_string($spoorbreedte_achter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($spoorbreedte_achter)), __LINE__);
        }
        $this->spoorbreedte_achter = $spoorbreedte_achter;
        return $this;
    }
    /**
     * Get draaicirkel value
     * @return string|null
     */
    public function getDraaicirkel()
    {
        return $this->draaicirkel;
    }
    /**
     * Set draaicirkel value
     * @param string $draaicirkel
     * @return \Webservices\StructType\CarOptions
     */
    public function setDraaicirkel($draaicirkel = null)
    {
        // validation for constraint: string
        if (!is_null($draaicirkel) && !is_string($draaicirkel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($draaicirkel)), __LINE__);
        }
        $this->draaicirkel = $draaicirkel;
        return $this;
    }
    /**
     * Get bandenmaat_voor value
     * @return string|null
     */
    public function getBandenmaat_voor()
    {
        return $this->bandenmaat_voor;
    }
    /**
     * Set bandenmaat_voor value
     * @param string $bandenmaat_voor
     * @return \Webservices\StructType\CarOptions
     */
    public function setBandenmaat_voor($bandenmaat_voor = null)
    {
        // validation for constraint: string
        if (!is_null($bandenmaat_voor) && !is_string($bandenmaat_voor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bandenmaat_voor)), __LINE__);
        }
        $this->bandenmaat_voor = $bandenmaat_voor;
        return $this;
    }
    /**
     * Get bandenmaat_achter value
     * @return string|null
     */
    public function getBandenmaat_achter()
    {
        return $this->bandenmaat_achter;
    }
    /**
     * Set bandenmaat_achter value
     * @param string $bandenmaat_achter
     * @return \Webservices\StructType\CarOptions
     */
    public function setBandenmaat_achter($bandenmaat_achter = null)
    {
        // validation for constraint: string
        if (!is_null($bandenmaat_achter) && !is_string($bandenmaat_achter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bandenmaat_achter)), __LINE__);
        }
        $this->bandenmaat_achter = $bandenmaat_achter;
        return $this;
    }
    /**
     * Get massa value
     * @return string|null
     */
    public function getMassa()
    {
        return $this->massa;
    }
    /**
     * Set massa value
     * @param string $massa
     * @return \Webservices\StructType\CarOptions
     */
    public function setMassa($massa = null)
    {
        // validation for constraint: string
        if (!is_null($massa) && !is_string($massa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($massa)), __LINE__);
        }
        $this->massa = $massa;
        return $this;
    }
    /**
     * Get max_toelaatbare_massa value
     * @return string|null
     */
    public function getMax_toelaatbare_massa()
    {
        return $this->max_toelaatbare_massa;
    }
    /**
     * Set max_toelaatbare_massa value
     * @param string $max_toelaatbare_massa
     * @return \Webservices\StructType\CarOptions
     */
    public function setMax_toelaatbare_massa($max_toelaatbare_massa = null)
    {
        // validation for constraint: string
        if (!is_null($max_toelaatbare_massa) && !is_string($max_toelaatbare_massa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($max_toelaatbare_massa)), __LINE__);
        }
        $this->max_toelaatbare_massa = $max_toelaatbare_massa;
        return $this;
    }
    /**
     * Get max_aanhanger_geremd value
     * @return string|null
     */
    public function getMax_aanhanger_geremd()
    {
        return $this->max_aanhanger_geremd;
    }
    /**
     * Set max_aanhanger_geremd value
     * @param string $max_aanhanger_geremd
     * @return \Webservices\StructType\CarOptions
     */
    public function setMax_aanhanger_geremd($max_aanhanger_geremd = null)
    {
        // validation for constraint: string
        if (!is_null($max_aanhanger_geremd) && !is_string($max_aanhanger_geremd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($max_aanhanger_geremd)), __LINE__);
        }
        $this->max_aanhanger_geremd = $max_aanhanger_geremd;
        return $this;
    }
    /**
     * Get max_aanhanger_ongeremd value
     * @return string|null
     */
    public function getMax_aanhanger_ongeremd()
    {
        return $this->max_aanhanger_ongeremd;
    }
    /**
     * Set max_aanhanger_ongeremd value
     * @param string $max_aanhanger_ongeremd
     * @return \Webservices\StructType\CarOptions
     */
    public function setMax_aanhanger_ongeremd($max_aanhanger_ongeremd = null)
    {
        // validation for constraint: string
        if (!is_null($max_aanhanger_ongeremd) && !is_string($max_aanhanger_ongeremd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($max_aanhanger_ongeremd)), __LINE__);
        }
        $this->max_aanhanger_ongeremd = $max_aanhanger_ongeremd;
        return $this;
    }
    /**
     * Get max_kogeldruk value
     * @return string|null
     */
    public function getMax_kogeldruk()
    {
        return $this->max_kogeldruk;
    }
    /**
     * Set max_kogeldruk value
     * @param string $max_kogeldruk
     * @return \Webservices\StructType\CarOptions
     */
    public function setMax_kogeldruk($max_kogeldruk = null)
    {
        // validation for constraint: string
        if (!is_null($max_kogeldruk) && !is_string($max_kogeldruk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($max_kogeldruk)), __LINE__);
        }
        $this->max_kogeldruk = $max_kogeldruk;
        return $this;
    }
    /**
     * Get max_dakbelasting value
     * @return string|null
     */
    public function getMax_dakbelasting()
    {
        return $this->max_dakbelasting;
    }
    /**
     * Set max_dakbelasting value
     * @param string $max_dakbelasting
     * @return \Webservices\StructType\CarOptions
     */
    public function setMax_dakbelasting($max_dakbelasting = null)
    {
        // validation for constraint: string
        if (!is_null($max_dakbelasting) && !is_string($max_dakbelasting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($max_dakbelasting)), __LINE__);
        }
        $this->max_dakbelasting = $max_dakbelasting;
        return $this;
    }
    /**
     * Get koffer_min value
     * @return string|null
     */
    public function getKoffer_min()
    {
        return $this->koffer_min;
    }
    /**
     * Set koffer_min value
     * @param string $koffer_min
     * @return \Webservices\StructType\CarOptions
     */
    public function setKoffer_min($koffer_min = null)
    {
        // validation for constraint: string
        if (!is_null($koffer_min) && !is_string($koffer_min)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($koffer_min)), __LINE__);
        }
        $this->koffer_min = $koffer_min;
        return $this;
    }
    /**
     * Get koffer_max value
     * @return string|null
     */
    public function getKoffer_max()
    {
        return $this->koffer_max;
    }
    /**
     * Set koffer_max value
     * @param string $koffer_max
     * @return \Webservices\StructType\CarOptions
     */
    public function setKoffer_max($koffer_max = null)
    {
        // validation for constraint: string
        if (!is_null($koffer_max) && !is_string($koffer_max)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($koffer_max)), __LINE__);
        }
        $this->koffer_max = $koffer_max;
        return $this;
    }
    /**
     * Get tankinhoud value
     * @return string|null
     */
    public function getTankinhoud()
    {
        return $this->tankinhoud;
    }
    /**
     * Set tankinhoud value
     * @param string $tankinhoud
     * @return \Webservices\StructType\CarOptions
     */
    public function setTankinhoud($tankinhoud = null)
    {
        // validation for constraint: string
        if (!is_null($tankinhoud) && !is_string($tankinhoud)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tankinhoud)), __LINE__);
        }
        $this->tankinhoud = $tankinhoud;
        return $this;
    }
    /**
     * Get topsnelheid value
     * @return string|null
     */
    public function getTopsnelheid()
    {
        return $this->topsnelheid;
    }
    /**
     * Set topsnelheid value
     * @param string $topsnelheid
     * @return \Webservices\StructType\CarOptions
     */
    public function setTopsnelheid($topsnelheid = null)
    {
        // validation for constraint: string
        if (!is_null($topsnelheid) && !is_string($topsnelheid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($topsnelheid)), __LINE__);
        }
        $this->topsnelheid = $topsnelheid;
        return $this;
    }
    /**
     * Get acceleratie value
     * @return string|null
     */
    public function getAcceleratie()
    {
        return $this->acceleratie;
    }
    /**
     * Set acceleratie value
     * @param string $acceleratie
     * @return \Webservices\StructType\CarOptions
     */
    public function setAcceleratie($acceleratie = null)
    {
        // validation for constraint: string
        if (!is_null($acceleratie) && !is_string($acceleratie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($acceleratie)), __LINE__);
        }
        $this->acceleratie = $acceleratie;
        return $this;
    }
    /**
     * Get verbruik_binnen_bebouwde_kom value
     * @return string|null
     */
    public function getVerbruik_binnen_bebouwde_kom()
    {
        return $this->verbruik_binnen_bebouwde_kom;
    }
    /**
     * Set verbruik_binnen_bebouwde_kom value
     * @param string $verbruik_binnen_bebouwde_kom
     * @return \Webservices\StructType\CarOptions
     */
    public function setVerbruik_binnen_bebouwde_kom($verbruik_binnen_bebouwde_kom = null)
    {
        // validation for constraint: string
        if (!is_null($verbruik_binnen_bebouwde_kom) && !is_string($verbruik_binnen_bebouwde_kom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($verbruik_binnen_bebouwde_kom)), __LINE__);
        }
        $this->verbruik_binnen_bebouwde_kom = $verbruik_binnen_bebouwde_kom;
        return $this;
    }
    /**
     * Get verbruik_buiten_bebouwde_kom value
     * @return string|null
     */
    public function getVerbruik_buiten_bebouwde_kom()
    {
        return $this->verbruik_buiten_bebouwde_kom;
    }
    /**
     * Set verbruik_buiten_bebouwde_kom value
     * @param string $verbruik_buiten_bebouwde_kom
     * @return \Webservices\StructType\CarOptions
     */
    public function setVerbruik_buiten_bebouwde_kom($verbruik_buiten_bebouwde_kom = null)
    {
        // validation for constraint: string
        if (!is_null($verbruik_buiten_bebouwde_kom) && !is_string($verbruik_buiten_bebouwde_kom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($verbruik_buiten_bebouwde_kom)), __LINE__);
        }
        $this->verbruik_buiten_bebouwde_kom = $verbruik_buiten_bebouwde_kom;
        return $this;
    }
    /**
     * Get verbruik_gecombineerd value
     * @return string|null
     */
    public function getVerbruik_gecombineerd()
    {
        return $this->verbruik_gecombineerd;
    }
    /**
     * Set verbruik_gecombineerd value
     * @param string $verbruik_gecombineerd
     * @return \Webservices\StructType\CarOptions
     */
    public function setVerbruik_gecombineerd($verbruik_gecombineerd = null)
    {
        // validation for constraint: string
        if (!is_null($verbruik_gecombineerd) && !is_string($verbruik_gecombineerd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($verbruik_gecombineerd)), __LINE__);
        }
        $this->verbruik_gecombineerd = $verbruik_gecombineerd;
        return $this;
    }
    /**
     * Get co2_uitstoot value
     * @return string|null
     */
    public function getCo2_uitstoot()
    {
        return $this->co2_uitstoot;
    }
    /**
     * Set co2_uitstoot value
     * @param string $co2_uitstoot
     * @return \Webservices\StructType\CarOptions
     */
    public function setCo2_uitstoot($co2_uitstoot = null)
    {
        // validation for constraint: string
        if (!is_null($co2_uitstoot) && !is_string($co2_uitstoot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($co2_uitstoot)), __LINE__);
        }
        $this->co2_uitstoot = $co2_uitstoot;
        return $this;
    }
    /**
     * Get verbruik_gemiddeld value
     * @return string|null
     */
    public function getVerbruik_gemiddeld()
    {
        return $this->verbruik_gemiddeld;
    }
    /**
     * Set verbruik_gemiddeld value
     * @param string $verbruik_gemiddeld
     * @return \Webservices\StructType\CarOptions
     */
    public function setVerbruik_gemiddeld($verbruik_gemiddeld = null)
    {
        // validation for constraint: string
        if (!is_null($verbruik_gemiddeld) && !is_string($verbruik_gemiddeld)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($verbruik_gemiddeld)), __LINE__);
        }
        $this->verbruik_gemiddeld = $verbruik_gemiddeld;
        return $this;
    }
    /**
     * Get abs value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getAbs()
    {
        return $this->abs;
    }
    /**
     * Set abs value
     * @param \Webservices\StructType\CarOption $abs
     * @return \Webservices\StructType\CarOptions
     */
    public function setAbs(\Webservices\StructType\CarOption $abs = null)
    {
        $this->abs = $abs;
        return $this;
    }
    /**
     * Get remkrachtverdeling value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getRemkrachtverdeling()
    {
        return $this->remkrachtverdeling;
    }
    /**
     * Set remkrachtverdeling value
     * @param \Webservices\StructType\CarOption $remkrachtverdeling
     * @return \Webservices\StructType\CarOptions
     */
    public function setRemkrachtverdeling(\Webservices\StructType\CarOption $remkrachtverdeling = null)
    {
        $this->remkrachtverdeling = $remkrachtverdeling;
        return $this;
    }
    /**
     * Get brakeassist value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getBrakeassist()
    {
        return $this->brakeassist;
    }
    /**
     * Set brakeassist value
     * @param \Webservices\StructType\CarOption $brakeassist
     * @return \Webservices\StructType\CarOptions
     */
    public function setBrakeassist(\Webservices\StructType\CarOption $brakeassist = null)
    {
        $this->brakeassist = $brakeassist;
        return $this;
    }
    /**
     * Get tractiecontrole value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getTractiecontrole()
    {
        return $this->tractiecontrole;
    }
    /**
     * Set tractiecontrole value
     * @param \Webservices\StructType\CarOption $tractiecontrole
     * @return \Webservices\StructType\CarOptions
     */
    public function setTractiecontrole(\Webservices\StructType\CarOption $tractiecontrole = null)
    {
        $this->tractiecontrole = $tractiecontrole;
        return $this;
    }
    /**
     * Get sperdifferentieel value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getSperdifferentieel()
    {
        return $this->sperdifferentieel;
    }
    /**
     * Set sperdifferentieel value
     * @param \Webservices\StructType\CarOption $sperdifferentieel
     * @return \Webservices\StructType\CarOptions
     */
    public function setSperdifferentieel(\Webservices\StructType\CarOption $sperdifferentieel = null)
    {
        $this->sperdifferentieel = $sperdifferentieel;
        return $this;
    }
    /**
     * Get stabiliteitsregeling value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getStabiliteitsregeling()
    {
        return $this->stabiliteitsregeling;
    }
    /**
     * Set stabiliteitsregeling value
     * @param \Webservices\StructType\CarOption $stabiliteitsregeling
     * @return \Webservices\StructType\CarOptions
     */
    public function setStabiliteitsregeling(\Webservices\StructType\CarOption $stabiliteitsregeling = null)
    {
        $this->stabiliteitsregeling = $stabiliteitsregeling;
        return $this;
    }
    /**
     * Get regelbare_schokdemping value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getRegelbare_schokdemping()
    {
        return $this->regelbare_schokdemping;
    }
    /**
     * Set regelbare_schokdemping value
     * @param \Webservices\StructType\CarOption $regelbare_schokdemping
     * @return \Webservices\StructType\CarOptions
     */
    public function setRegelbare_schokdemping(\Webservices\StructType\CarOption $regelbare_schokdemping = null)
    {
        $this->regelbare_schokdemping = $regelbare_schokdemping;
        return $this;
    }
    /**
     * Get niveauregeling value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getNiveauregeling()
    {
        return $this->niveauregeling;
    }
    /**
     * Set niveauregeling value
     * @param \Webservices\StructType\CarOption $niveauregeling
     * @return \Webservices\StructType\CarOptions
     */
    public function setNiveauregeling(\Webservices\StructType\CarOption $niveauregeling = null)
    {
        $this->niveauregeling = $niveauregeling;
        return $this;
    }
    /**
     * Get airbag_bestuurder value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getAirbag_bestuurder()
    {
        return $this->airbag_bestuurder;
    }
    /**
     * Set airbag_bestuurder value
     * @param \Webservices\StructType\CarOption $airbag_bestuurder
     * @return \Webservices\StructType\CarOptions
     */
    public function setAirbag_bestuurder(\Webservices\StructType\CarOption $airbag_bestuurder = null)
    {
        $this->airbag_bestuurder = $airbag_bestuurder;
        return $this;
    }
    /**
     * Get airbag_passagier value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getAirbag_passagier()
    {
        return $this->airbag_passagier;
    }
    /**
     * Set airbag_passagier value
     * @param \Webservices\StructType\CarOption $airbag_passagier
     * @return \Webservices\StructType\CarOptions
     */
    public function setAirbag_passagier(\Webservices\StructType\CarOption $airbag_passagier = null)
    {
        $this->airbag_passagier = $airbag_passagier;
        return $this;
    }
    /**
     * Get airbag_opzijvoor value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getAirbag_opzijvoor()
    {
        return $this->airbag_opzijvoor;
    }
    /**
     * Set airbag_opzijvoor value
     * @param \Webservices\StructType\CarOption $airbag_opzijvoor
     * @return \Webservices\StructType\CarOptions
     */
    public function setAirbag_opzijvoor(\Webservices\StructType\CarOption $airbag_opzijvoor = null)
    {
        $this->airbag_opzijvoor = $airbag_opzijvoor;
        return $this;
    }
    /**
     * Get airbag_opzijachter value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getAirbag_opzijachter()
    {
        return $this->airbag_opzijachter;
    }
    /**
     * Set airbag_opzijachter value
     * @param \Webservices\StructType\CarOption $airbag_opzijachter
     * @return \Webservices\StructType\CarOptions
     */
    public function setAirbag_opzijachter(\Webservices\StructType\CarOption $airbag_opzijachter = null)
    {
        $this->airbag_opzijachter = $airbag_opzijachter;
        return $this;
    }
    /**
     * Get airbag_hoofdvoor value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getAirbag_hoofdvoor()
    {
        return $this->airbag_hoofdvoor;
    }
    /**
     * Set airbag_hoofdvoor value
     * @param \Webservices\StructType\CarOption $airbag_hoofdvoor
     * @return \Webservices\StructType\CarOptions
     */
    public function setAirbag_hoofdvoor(\Webservices\StructType\CarOption $airbag_hoofdvoor = null)
    {
        $this->airbag_hoofdvoor = $airbag_hoofdvoor;
        return $this;
    }
    /**
     * Get airbag_hoofdachter value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getAirbag_hoofdachter()
    {
        return $this->airbag_hoofdachter;
    }
    /**
     * Set airbag_hoofdachter value
     * @param \Webservices\StructType\CarOption $airbag_hoofdachter
     * @return \Webservices\StructType\CarOptions
     */
    public function setAirbag_hoofdachter(\Webservices\StructType\CarOption $airbag_hoofdachter = null)
    {
        $this->airbag_hoofdachter = $airbag_hoofdachter;
        return $this;
    }
    /**
     * Get gordelspanners value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getGordelspanners()
    {
        return $this->gordelspanners;
    }
    /**
     * Set gordelspanners value
     * @param \Webservices\StructType\CarOption $gordelspanners
     * @return \Webservices\StructType\CarOptions
     */
    public function setGordelspanners(\Webservices\StructType\CarOption $gordelspanners = null)
    {
        $this->gordelspanners = $gordelspanners;
        return $this;
    }
    /**
     * Get verstelbare_gordelhoogte value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getVerstelbare_gordelhoogte()
    {
        return $this->verstelbare_gordelhoogte;
    }
    /**
     * Set verstelbare_gordelhoogte value
     * @param \Webservices\StructType\CarOption $verstelbare_gordelhoogte
     * @return \Webservices\StructType\CarOptions
     */
    public function setVerstelbare_gordelhoogte(\Webservices\StructType\CarOption $verstelbare_gordelhoogte = null)
    {
        $this->verstelbare_gordelhoogte = $verstelbare_gordelhoogte;
        return $this;
    }
    /**
     * Get startonderbreker value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getStartonderbreker()
    {
        return $this->startonderbreker;
    }
    /**
     * Set startonderbreker value
     * @param \Webservices\StructType\CarOption $startonderbreker
     * @return \Webservices\StructType\CarOptions
     */
    public function setStartonderbreker(\Webservices\StructType\CarOption $startonderbreker = null)
    {
        $this->startonderbreker = $startonderbreker;
        return $this;
    }
    /**
     * Get inbraakalarm value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getInbraakalarm()
    {
        return $this->inbraakalarm;
    }
    /**
     * Set inbraakalarm value
     * @param \Webservices\StructType\CarOption $inbraakalarm
     * @return \Webservices\StructType\CarOptions
     */
    public function setInbraakalarm(\Webservices\StructType\CarOption $inbraakalarm = null)
    {
        $this->inbraakalarm = $inbraakalarm;
        return $this;
    }
    /**
     * Get centrale_deurvergrendeling value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getCentrale_deurvergrendeling()
    {
        return $this->centrale_deurvergrendeling;
    }
    /**
     * Set centrale_deurvergrendeling value
     * @param \Webservices\StructType\CarOption $centrale_deurvergrendeling
     * @return \Webservices\StructType\CarOptions
     */
    public function setCentrale_deurvergrendeling(\Webservices\StructType\CarOption $centrale_deurvergrendeling = null)
    {
        $this->centrale_deurvergrendeling = $centrale_deurvergrendeling;
        return $this;
    }
    /**
     * Get afstandbediening_deurvergrendeling value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getAfstandbediening_deurvergrendeling()
    {
        return $this->afstandbediening_deurvergrendeling;
    }
    /**
     * Set afstandbediening_deurvergrendeling value
     * @param \Webservices\StructType\CarOption $afstandbediening_deurvergrendeling
     * @return \Webservices\StructType\CarOptions
     */
    public function setAfstandbediening_deurvergrendeling(\Webservices\StructType\CarOption $afstandbediening_deurvergrendeling = null)
    {
        $this->afstandbediening_deurvergrendeling = $afstandbediening_deurvergrendeling;
        return $this;
    }
    /**
     * Get automatische_vergrendeling value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getAutomatische_vergrendeling()
    {
        return $this->automatische_vergrendeling;
    }
    /**
     * Set automatische_vergrendeling value
     * @param \Webservices\StructType\CarOption $automatische_vergrendeling
     * @return \Webservices\StructType\CarOptions
     */
    public function setAutomatische_vergrendeling(\Webservices\StructType\CarOption $automatische_vergrendeling = null)
    {
        $this->automatische_vergrendeling = $automatische_vergrendeling;
        return $this;
    }
    /**
     * Get keyless_entry value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getKeyless_entry()
    {
        return $this->keyless_entry;
    }
    /**
     * Set keyless_entry value
     * @param \Webservices\StructType\CarOption $keyless_entry
     * @return \Webservices\StructType\CarOptions
     */
    public function setKeyless_entry(\Webservices\StructType\CarOption $keyless_entry = null)
    {
        $this->keyless_entry = $keyless_entry;
        return $this;
    }
    /**
     * Get elektrische_ramen_voor value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getElektrische_ramen_voor()
    {
        return $this->elektrische_ramen_voor;
    }
    /**
     * Set elektrische_ramen_voor value
     * @param \Webservices\StructType\CarOption $elektrische_ramen_voor
     * @return \Webservices\StructType\CarOptions
     */
    public function setElektrische_ramen_voor(\Webservices\StructType\CarOption $elektrische_ramen_voor = null)
    {
        $this->elektrische_ramen_voor = $elektrische_ramen_voor;
        return $this;
    }
    /**
     * Get elektrische_ramen_achter value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getElektrische_ramen_achter()
    {
        return $this->elektrische_ramen_achter;
    }
    /**
     * Set elektrische_ramen_achter value
     * @param \Webservices\StructType\CarOption $elektrische_ramen_achter
     * @return \Webservices\StructType\CarOptions
     */
    public function setElektrische_ramen_achter(\Webservices\StructType\CarOption $elektrische_ramen_achter = null)
    {
        $this->elektrische_ramen_achter = $elektrische_ramen_achter;
        return $this;
    }
    /**
     * Get stuurbekrachtiging value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getStuurbekrachtiging()
    {
        return $this->stuurbekrachtiging;
    }
    /**
     * Set stuurbekrachtiging value
     * @param \Webservices\StructType\CarOption $stuurbekrachtiging
     * @return \Webservices\StructType\CarOptions
     */
    public function setStuurbekrachtiging(\Webservices\StructType\CarOption $stuurbekrachtiging = null)
    {
        $this->stuurbekrachtiging = $stuurbekrachtiging;
        return $this;
    }
    /**
     * Get stuurschakeling value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getStuurschakeling()
    {
        return $this->stuurschakeling;
    }
    /**
     * Set stuurschakeling value
     * @param \Webservices\StructType\CarOption $stuurschakeling
     * @return \Webservices\StructType\CarOptions
     */
    public function setStuurschakeling(\Webservices\StructType\CarOption $stuurschakeling = null)
    {
        $this->stuurschakeling = $stuurschakeling;
        return $this;
    }
    /**
     * Get cruise_control value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getCruise_control()
    {
        return $this->cruise_control;
    }
    /**
     * Set cruise_control value
     * @param \Webservices\StructType\CarOption $cruise_control
     * @return \Webservices\StructType\CarOptions
     */
    public function setCruise_control(\Webservices\StructType\CarOption $cruise_control = null)
    {
        $this->cruise_control = $cruise_control;
        return $this;
    }
    /**
     * Get radar_cruise_control value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getRadar_cruise_control()
    {
        return $this->radar_cruise_control;
    }
    /**
     * Set radar_cruise_control value
     * @param \Webservices\StructType\CarOption $radar_cruise_control
     * @return \Webservices\StructType\CarOptions
     */
    public function setRadar_cruise_control(\Webservices\StructType\CarOption $radar_cruise_control = null)
    {
        $this->radar_cruise_control = $radar_cruise_control;
        return $this;
    }
    /**
     * Get airconditioning value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getAirconditioning()
    {
        return $this->airconditioning;
    }
    /**
     * Set airconditioning value
     * @param \Webservices\StructType\CarOption $airconditioning
     * @return \Webservices\StructType\CarOptions
     */
    public function setAirconditioning(\Webservices\StructType\CarOption $airconditioning = null)
    {
        $this->airconditioning = $airconditioning;
        return $this;
    }
    /**
     * Get klimaatregeling value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getKlimaatregeling()
    {
        return $this->klimaatregeling;
    }
    /**
     * Set klimaatregeling value
     * @param \Webservices\StructType\CarOption $klimaatregeling
     * @return \Webservices\StructType\CarOptions
     */
    public function setKlimaatregeling(\Webservices\StructType\CarOption $klimaatregeling = null)
    {
        $this->klimaatregeling = $klimaatregeling;
        return $this;
    }
    /**
     * Get gescheiden_temperatuurregeling value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getGescheiden_temperatuurregeling()
    {
        return $this->gescheiden_temperatuurregeling;
    }
    /**
     * Set gescheiden_temperatuurregeling value
     * @param \Webservices\StructType\CarOption $gescheiden_temperatuurregeling
     * @return \Webservices\StructType\CarOptions
     */
    public function setGescheiden_temperatuurregeling(\Webservices\StructType\CarOption $gescheiden_temperatuurregeling = null)
    {
        $this->gescheiden_temperatuurregeling = $gescheiden_temperatuurregeling;
        return $this;
    }
    /**
     * Get pollenfilter value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getPollenfilter()
    {
        return $this->pollenfilter;
    }
    /**
     * Set pollenfilter value
     * @param \Webservices\StructType\CarOption $pollenfilter
     * @return \Webservices\StructType\CarOptions
     */
    public function setPollenfilter(\Webservices\StructType\CarOption $pollenfilter = null)
    {
        $this->pollenfilter = $pollenfilter;
        return $this;
    }
    /**
     * Get parkeersensor value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getParkeersensor()
    {
        return $this->parkeersensor;
    }
    /**
     * Set parkeersensor value
     * @param \Webservices\StructType\CarOption $parkeersensor
     * @return \Webservices\StructType\CarOptions
     */
    public function setParkeersensor(\Webservices\StructType\CarOption $parkeersensor = null)
    {
        $this->parkeersensor = $parkeersensor;
        return $this;
    }
    /**
     * Get hoofdsteunen_voor value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getHoofdsteunen_voor()
    {
        return $this->hoofdsteunen_voor;
    }
    /**
     * Set hoofdsteunen_voor value
     * @param \Webservices\StructType\CarOption $hoofdsteunen_voor
     * @return \Webservices\StructType\CarOptions
     */
    public function setHoofdsteunen_voor(\Webservices\StructType\CarOption $hoofdsteunen_voor = null)
    {
        $this->hoofdsteunen_voor = $hoofdsteunen_voor;
        return $this;
    }
    /**
     * Get hoofdsteunen_achter value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getHoofdsteunen_achter()
    {
        return $this->hoofdsteunen_achter;
    }
    /**
     * Set hoofdsteunen_achter value
     * @param \Webservices\StructType\CarOption $hoofdsteunen_achter
     * @return \Webservices\StructType\CarOptions
     */
    public function setHoofdsteunen_achter(\Webservices\StructType\CarOption $hoofdsteunen_achter = null)
    {
        $this->hoofdsteunen_achter = $hoofdsteunen_achter;
        return $this;
    }
    /**
     * Get verstelbare_hoofdsteunen_achter value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getVerstelbare_hoofdsteunen_achter()
    {
        return $this->verstelbare_hoofdsteunen_achter;
    }
    /**
     * Set verstelbare_hoofdsteunen_achter value
     * @param \Webservices\StructType\CarOption $verstelbare_hoofdsteunen_achter
     * @return \Webservices\StructType\CarOptions
     */
    public function setVerstelbare_hoofdsteunen_achter(\Webservices\StructType\CarOption $verstelbare_hoofdsteunen_achter = null)
    {
        $this->verstelbare_hoofdsteunen_achter = $verstelbare_hoofdsteunen_achter;
        return $this;
    }
    /**
     * Get derde_hoofdsteun_achter value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getDerde_hoofdsteun_achter()
    {
        return $this->derde_hoofdsteun_achter;
    }
    /**
     * Set derde_hoofdsteun_achter value
     * @param \Webservices\StructType\CarOption $derde_hoofdsteun_achter
     * @return \Webservices\StructType\CarOptions
     */
    public function setDerde_hoofdsteun_achter(\Webservices\StructType\CarOption $derde_hoofdsteun_achter = null)
    {
        $this->derde_hoofdsteun_achter = $derde_hoofdsteun_achter;
        return $this;
    }
    /**
     * Get derde_driepuntsgordel_achter value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getDerde_driepuntsgordel_achter()
    {
        return $this->derde_driepuntsgordel_achter;
    }
    /**
     * Set derde_driepuntsgordel_achter value
     * @param \Webservices\StructType\CarOption $derde_driepuntsgordel_achter
     * @return \Webservices\StructType\CarOptions
     */
    public function setDerde_driepuntsgordel_achter(\Webservices\StructType\CarOption $derde_driepuntsgordel_achter = null)
    {
        $this->derde_driepuntsgordel_achter = $derde_driepuntsgordel_achter;
        return $this;
    }
    /**
     * Get verstelbare_lendensteun_bestuurder value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getVerstelbare_lendensteun_bestuurder()
    {
        return $this->verstelbare_lendensteun_bestuurder;
    }
    /**
     * Set verstelbare_lendensteun_bestuurder value
     * @param \Webservices\StructType\CarOption $verstelbare_lendensteun_bestuurder
     * @return \Webservices\StructType\CarOptions
     */
    public function setVerstelbare_lendensteun_bestuurder(\Webservices\StructType\CarOption $verstelbare_lendensteun_bestuurder = null)
    {
        $this->verstelbare_lendensteun_bestuurder = $verstelbare_lendensteun_bestuurder;
        return $this;
    }
    /**
     * Get verstelbare_lendensteun_passagier value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getVerstelbare_lendensteun_passagier()
    {
        return $this->verstelbare_lendensteun_passagier;
    }
    /**
     * Set verstelbare_lendensteun_passagier value
     * @param \Webservices\StructType\CarOption $verstelbare_lendensteun_passagier
     * @return \Webservices\StructType\CarOptions
     */
    public function setVerstelbare_lendensteun_passagier(\Webservices\StructType\CarOption $verstelbare_lendensteun_passagier = null)
    {
        $this->verstelbare_lendensteun_passagier = $verstelbare_lendensteun_passagier;
        return $this;
    }
    /**
     * Get hoogteverstelling_bestuurder value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getHoogteverstelling_bestuurder()
    {
        return $this->hoogteverstelling_bestuurder;
    }
    /**
     * Set hoogteverstelling_bestuurder value
     * @param \Webservices\StructType\CarOption $hoogteverstelling_bestuurder
     * @return \Webservices\StructType\CarOptions
     */
    public function setHoogteverstelling_bestuurder(\Webservices\StructType\CarOption $hoogteverstelling_bestuurder = null)
    {
        $this->hoogteverstelling_bestuurder = $hoogteverstelling_bestuurder;
        return $this;
    }
    /**
     * Get hoogteverstelling_passagier value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getHoogteverstelling_passagier()
    {
        return $this->hoogteverstelling_passagier;
    }
    /**
     * Set hoogteverstelling_passagier value
     * @param \Webservices\StructType\CarOption $hoogteverstelling_passagier
     * @return \Webservices\StructType\CarOptions
     */
    public function setHoogteverstelling_passagier(\Webservices\StructType\CarOption $hoogteverstelling_passagier = null)
    {
        $this->hoogteverstelling_passagier = $hoogteverstelling_passagier;
        return $this;
    }
    /**
     * Get elektrische_stoelverstelling value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getElektrische_stoelverstelling()
    {
        return $this->elektrische_stoelverstelling;
    }
    /**
     * Set elektrische_stoelverstelling value
     * @param \Webservices\StructType\CarOption $elektrische_stoelverstelling
     * @return \Webservices\StructType\CarOptions
     */
    public function setElektrische_stoelverstelling(\Webservices\StructType\CarOption $elektrische_stoelverstelling = null)
    {
        $this->elektrische_stoelverstelling = $elektrische_stoelverstelling;
        return $this;
    }
    /**
     * Get geheugen_stoelverstelling value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getGeheugen_stoelverstelling()
    {
        return $this->geheugen_stoelverstelling;
    }
    /**
     * Set geheugen_stoelverstelling value
     * @param \Webservices\StructType\CarOption $geheugen_stoelverstelling
     * @return \Webservices\StructType\CarOptions
     */
    public function setGeheugen_stoelverstelling(\Webservices\StructType\CarOption $geheugen_stoelverstelling = null)
    {
        $this->geheugen_stoelverstelling = $geheugen_stoelverstelling;
        return $this;
    }
    /**
     * Get verwarmde_zitplaatsen_voor value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getVerwarmde_zitplaatsen_voor()
    {
        return $this->verwarmde_zitplaatsen_voor;
    }
    /**
     * Set verwarmde_zitplaatsen_voor value
     * @param \Webservices\StructType\CarOption $verwarmde_zitplaatsen_voor
     * @return \Webservices\StructType\CarOptions
     */
    public function setVerwarmde_zitplaatsen_voor(\Webservices\StructType\CarOption $verwarmde_zitplaatsen_voor = null)
    {
        $this->verwarmde_zitplaatsen_voor = $verwarmde_zitplaatsen_voor;
        return $this;
    }
    /**
     * Get verwarmde_zitplaatsen_achter value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getVerwarmde_zitplaatsen_achter()
    {
        return $this->verwarmde_zitplaatsen_achter;
    }
    /**
     * Set verwarmde_zitplaatsen_achter value
     * @param \Webservices\StructType\CarOption $verwarmde_zitplaatsen_achter
     * @return \Webservices\StructType\CarOptions
     */
    public function setVerwarmde_zitplaatsen_achter(\Webservices\StructType\CarOption $verwarmde_zitplaatsen_achter = null)
    {
        $this->verwarmde_zitplaatsen_achter = $verwarmde_zitplaatsen_achter;
        return $this;
    }
    /**
     * Get sportstoelen value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getSportstoelen()
    {
        return $this->sportstoelen;
    }
    /**
     * Set sportstoelen value
     * @param \Webservices\StructType\CarOption $sportstoelen
     * @return \Webservices\StructType\CarOptions
     */
    public function setSportstoelen(\Webservices\StructType\CarOption $sportstoelen = null)
    {
        $this->sportstoelen = $sportstoelen;
        return $this;
    }
    /**
     * Get bekledingstof_leer value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getBekledingstof_leer()
    {
        return $this->bekledingstof_leer;
    }
    /**
     * Set bekledingstof_leer value
     * @param \Webservices\StructType\CarOption $bekledingstof_leer
     * @return \Webservices\StructType\CarOptions
     */
    public function setBekledingstof_leer(\Webservices\StructType\CarOption $bekledingstof_leer = null)
    {
        $this->bekledingstof_leer = $bekledingstof_leer;
        return $this;
    }
    /**
     * Get lerenbekleding value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getLerenbekleding()
    {
        return $this->lerenbekleding;
    }
    /**
     * Set lerenbekleding value
     * @param \Webservices\StructType\CarOption $lerenbekleding
     * @return \Webservices\StructType\CarOptions
     */
    public function setLerenbekleding(\Webservices\StructType\CarOption $lerenbekleding = null)
    {
        $this->lerenbekleding = $lerenbekleding;
        return $this;
    }
    /**
     * Get hoogteverstelling_stuur value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getHoogteverstelling_stuur()
    {
        return $this->hoogteverstelling_stuur;
    }
    /**
     * Set hoogteverstelling_stuur value
     * @param \Webservices\StructType\CarOption $hoogteverstelling_stuur
     * @return \Webservices\StructType\CarOptions
     */
    public function setHoogteverstelling_stuur(\Webservices\StructType\CarOption $hoogteverstelling_stuur = null)
    {
        $this->hoogteverstelling_stuur = $hoogteverstelling_stuur;
        return $this;
    }
    /**
     * Get diepteverstelling_stuur value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getDiepteverstelling_stuur()
    {
        return $this->diepteverstelling_stuur;
    }
    /**
     * Set diepteverstelling_stuur value
     * @param \Webservices\StructType\CarOption $diepteverstelling_stuur
     * @return \Webservices\StructType\CarOptions
     */
    public function setDiepteverstelling_stuur(\Webservices\StructType\CarOption $diepteverstelling_stuur = null)
    {
        $this->diepteverstelling_stuur = $diepteverstelling_stuur;
        return $this;
    }
    /**
     * Get elektrische_stuurverstelling value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getElektrische_stuurverstelling()
    {
        return $this->elektrische_stuurverstelling;
    }
    /**
     * Set elektrische_stuurverstelling value
     * @param \Webservices\StructType\CarOption $elektrische_stuurverstelling
     * @return \Webservices\StructType\CarOptions
     */
    public function setElektrische_stuurverstelling(\Webservices\StructType\CarOption $elektrische_stuurverstelling = null)
    {
        $this->elektrische_stuurverstelling = $elektrische_stuurverstelling;
        return $this;
    }
    /**
     * Get leer_bekleed_stuur value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getLeer_bekleed_stuur()
    {
        return $this->leer_bekleed_stuur;
    }
    /**
     * Set leer_bekleed_stuur value
     * @param \Webservices\StructType\CarOption $leer_bekleed_stuur
     * @return \Webservices\StructType\CarOptions
     */
    public function setLeer_bekleed_stuur(\Webservices\StructType\CarOption $leer_bekleed_stuur = null)
    {
        $this->leer_bekleed_stuur = $leer_bekleed_stuur;
        return $this;
    }
    /**
     * Get middenarmsteun_voor value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getMiddenarmsteun_voor()
    {
        return $this->middenarmsteun_voor;
    }
    /**
     * Set middenarmsteun_voor value
     * @param \Webservices\StructType\CarOption $middenarmsteun_voor
     * @return \Webservices\StructType\CarOptions
     */
    public function setMiddenarmsteun_voor(\Webservices\StructType\CarOption $middenarmsteun_voor = null)
    {
        $this->middenarmsteun_voor = $middenarmsteun_voor;
        return $this;
    }
    /**
     * Get middenarmsteun_achter value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getMiddenarmsteun_achter()
    {
        return $this->middenarmsteun_achter;
    }
    /**
     * Set middenarmsteun_achter value
     * @param \Webservices\StructType\CarOption $middenarmsteun_achter
     * @return \Webservices\StructType\CarOptions
     */
    public function setMiddenarmsteun_achter(\Webservices\StructType\CarOption $middenarmsteun_achter = null)
    {
        $this->middenarmsteun_achter = $middenarmsteun_achter;
        return $this;
    }
    /**
     * Get neerklapbare_achterbank value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getNeerklapbare_achterbank()
    {
        return $this->neerklapbare_achterbank;
    }
    /**
     * Set neerklapbare_achterbank value
     * @param \Webservices\StructType\CarOption $neerklapbare_achterbank
     * @return \Webservices\StructType\CarOptions
     */
    public function setNeerklapbare_achterbank(\Webservices\StructType\CarOption $neerklapbare_achterbank = null)
    {
        $this->neerklapbare_achterbank = $neerklapbare_achterbank;
        return $this;
    }
    /**
     * Get in_delen_neerklapbaar_achterbank value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getIn_delen_neerklapbaar_achterbank()
    {
        return $this->in_delen_neerklapbaar_achterbank;
    }
    /**
     * Set in_delen_neerklapbaar_achterbank value
     * @param \Webservices\StructType\CarOption $in_delen_neerklapbaar_achterbank
     * @return \Webservices\StructType\CarOptions
     */
    public function setIn_delen_neerklapbaar_achterbank(\Webservices\StructType\CarOption $in_delen_neerklapbaar_achterbank = null)
    {
        $this->in_delen_neerklapbaar_achterbank = $in_delen_neerklapbaar_achterbank;
        return $this;
    }
    /**
     * Get opbergvak_linkerportier value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getOpbergvak_linkerportier()
    {
        return $this->opbergvak_linkerportier;
    }
    /**
     * Set opbergvak_linkerportier value
     * @param \Webservices\StructType\CarOption $opbergvak_linkerportier
     * @return \Webservices\StructType\CarOptions
     */
    public function setOpbergvak_linkerportier(\Webservices\StructType\CarOption $opbergvak_linkerportier = null)
    {
        $this->opbergvak_linkerportier = $opbergvak_linkerportier;
        return $this;
    }
    /**
     * Get bekerhouder_voor value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getBekerhouder_voor()
    {
        return $this->bekerhouder_voor;
    }
    /**
     * Set bekerhouder_voor value
     * @param \Webservices\StructType\CarOption $bekerhouder_voor
     * @return \Webservices\StructType\CarOptions
     */
    public function setBekerhouder_voor(\Webservices\StructType\CarOption $bekerhouder_voor = null)
    {
        $this->bekerhouder_voor = $bekerhouder_voor;
        return $this;
    }
    /**
     * Get bekerhouder_achter value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getBekerhouder_achter()
    {
        return $this->bekerhouder_achter;
    }
    /**
     * Set bekerhouder_achter value
     * @param \Webservices\StructType\CarOption $bekerhouder_achter
     * @return \Webservices\StructType\CarOptions
     */
    public function setBekerhouder_achter(\Webservices\StructType\CarOption $bekerhouder_achter = null)
    {
        $this->bekerhouder_achter = $bekerhouder_achter;
        return $this;
    }
    /**
     * Get zonnescherm_achterruit value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getZonnescherm_achterruit()
    {
        return $this->zonnescherm_achterruit;
    }
    /**
     * Set zonnescherm_achterruit value
     * @param \Webservices\StructType\CarOption $zonnescherm_achterruit
     * @return \Webservices\StructType\CarOptions
     */
    public function setZonnescherm_achterruit(\Webservices\StructType\CarOption $zonnescherm_achterruit = null)
    {
        $this->zonnescherm_achterruit = $zonnescherm_achterruit;
        return $this;
    }
    /**
     * Get dagteller value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getDagteller()
    {
        return $this->dagteller;
    }
    /**
     * Set dagteller value
     * @param \Webservices\StructType\CarOption $dagteller
     * @return \Webservices\StructType\CarOptions
     */
    public function setDagteller(\Webservices\StructType\CarOption $dagteller = null)
    {
        $this->dagteller = $dagteller;
        return $this;
    }
    /**
     * Get toerenteller value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getToerenteller()
    {
        return $this->toerenteller;
    }
    /**
     * Set toerenteller value
     * @param \Webservices\StructType\CarOption $toerenteller
     * @return \Webservices\StructType\CarOptions
     */
    public function setToerenteller(\Webservices\StructType\CarOption $toerenteller = null)
    {
        $this->toerenteller = $toerenteller;
        return $this;
    }
    /**
     * Get temperatuurmeter value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getTemperatuurmeter()
    {
        return $this->temperatuurmeter;
    }
    /**
     * Set temperatuurmeter value
     * @param \Webservices\StructType\CarOption $temperatuurmeter
     * @return \Webservices\StructType\CarOptions
     */
    public function setTemperatuurmeter(\Webservices\StructType\CarOption $temperatuurmeter = null)
    {
        $this->temperatuurmeter = $temperatuurmeter;
        return $this;
    }
    /**
     * Get oliepeilmeter value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getOliepeilmeter()
    {
        return $this->oliepeilmeter;
    }
    /**
     * Set oliepeilmeter value
     * @param \Webservices\StructType\CarOption $oliepeilmeter
     * @return \Webservices\StructType\CarOptions
     */
    public function setOliepeilmeter(\Webservices\StructType\CarOption $oliepeilmeter = null)
    {
        $this->oliepeilmeter = $oliepeilmeter;
        return $this;
    }
    /**
     * Get oliedrukmeter value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getOliedrukmeter()
    {
        return $this->oliedrukmeter;
    }
    /**
     * Set oliedrukmeter value
     * @param \Webservices\StructType\CarOption $oliedrukmeter
     * @return \Webservices\StructType\CarOptions
     */
    public function setOliedrukmeter(\Webservices\StructType\CarOption $oliedrukmeter = null)
    {
        $this->oliedrukmeter = $oliedrukmeter;
        return $this;
    }
    /**
     * Get olietemperatuurmeter value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getOlietemperatuurmeter()
    {
        return $this->olietemperatuurmeter;
    }
    /**
     * Set olietemperatuurmeter value
     * @param \Webservices\StructType\CarOption $olietemperatuurmeter
     * @return \Webservices\StructType\CarOptions
     */
    public function setOlietemperatuurmeter(\Webservices\StructType\CarOption $olietemperatuurmeter = null)
    {
        $this->olietemperatuurmeter = $olietemperatuurmeter;
        return $this;
    }
    /**
     * Get voltmeter value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getVoltmeter()
    {
        return $this->voltmeter;
    }
    /**
     * Set voltmeter value
     * @param \Webservices\StructType\CarOption $voltmeter
     * @return \Webservices\StructType\CarOptions
     */
    public function setVoltmeter(\Webservices\StructType\CarOption $voltmeter = null)
    {
        $this->voltmeter = $voltmeter;
        return $this;
    }
    /**
     * Get verbruiksmeter value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getVerbruiksmeter()
    {
        return $this->verbruiksmeter;
    }
    /**
     * Set verbruiksmeter value
     * @param \Webservices\StructType\CarOption $verbruiksmeter
     * @return \Webservices\StructType\CarOptions
     */
    public function setVerbruiksmeter(\Webservices\StructType\CarOption $verbruiksmeter = null)
    {
        $this->verbruiksmeter = $verbruiksmeter;
        return $this;
    }
    /**
     * Get turbodrukmeter value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getTurbodrukmeter()
    {
        return $this->turbodrukmeter;
    }
    /**
     * Set turbodrukmeter value
     * @param \Webservices\StructType\CarOption $turbodrukmeter
     * @return \Webservices\StructType\CarOptions
     */
    public function setTurbodrukmeter(\Webservices\StructType\CarOption $turbodrukmeter = null)
    {
        $this->turbodrukmeter = $turbodrukmeter;
        return $this;
    }
    /**
     * Get buitentemperatuurmeter value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getBuitentemperatuurmeter()
    {
        return $this->buitentemperatuurmeter;
    }
    /**
     * Set buitentemperatuurmeter value
     * @param \Webservices\StructType\CarOption $buitentemperatuurmeter
     * @return \Webservices\StructType\CarOptions
     */
    public function setBuitentemperatuurmeter(\Webservices\StructType\CarOption $buitentemperatuurmeter = null)
    {
        $this->buitentemperatuurmeter = $buitentemperatuurmeter;
        return $this;
    }
    /**
     * Get klokje value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getKlokje()
    {
        return $this->klokje;
    }
    /**
     * Set klokje value
     * @param \Webservices\StructType\CarOption $klokje
     * @return \Webservices\StructType\CarOptions
     */
    public function setKlokje(\Webservices\StructType\CarOption $klokje = null)
    {
        $this->klokje = $klokje;
        return $this;
    }
    /**
     * Get boardcomputer value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getBoardcomputer()
    {
        return $this->boardcomputer;
    }
    /**
     * Set boardcomputer value
     * @param \Webservices\StructType\CarOption $boardcomputer
     * @return \Webservices\StructType\CarOptions
     */
    public function setBoardcomputer(\Webservices\StructType\CarOption $boardcomputer = null)
    {
        $this->boardcomputer = $boardcomputer;
        return $this;
    }
    /**
     * Get luidsprekers value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getLuidsprekers()
    {
        return $this->luidsprekers;
    }
    /**
     * Set luidsprekers value
     * @param \Webservices\StructType\CarOption $luidsprekers
     * @return \Webservices\StructType\CarOptions
     */
    public function setLuidsprekers(\Webservices\StructType\CarOption $luidsprekers = null)
    {
        $this->luidsprekers = $luidsprekers;
        return $this;
    }
    /**
     * Get stereoinstallatie value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getStereoinstallatie()
    {
        return $this->stereoinstallatie;
    }
    /**
     * Set stereoinstallatie value
     * @param \Webservices\StructType\CarOption $stereoinstallatie
     * @return \Webservices\StructType\CarOptions
     */
    public function setStereoinstallatie(\Webservices\StructType\CarOption $stereoinstallatie = null)
    {
        $this->stereoinstallatie = $stereoinstallatie;
        return $this;
    }
    /**
     * Get cdspeler value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getCdspeler()
    {
        return $this->cdspeler;
    }
    /**
     * Set cdspeler value
     * @param \Webservices\StructType\CarOption $cdspeler
     * @return \Webservices\StructType\CarOptions
     */
    public function setCdspeler(\Webservices\StructType\CarOption $cdspeler = null)
    {
        $this->cdspeler = $cdspeler;
        return $this;
    }
    /**
     * Get cdwisselaar value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getCdwisselaar()
    {
        return $this->cdwisselaar;
    }
    /**
     * Set cdwisselaar value
     * @param \Webservices\StructType\CarOption $cdwisselaar
     * @return \Webservices\StructType\CarOptions
     */
    public function setCdwisselaar(\Webservices\StructType\CarOption $cdwisselaar = null)
    {
        $this->cdwisselaar = $cdwisselaar;
        return $this;
    }
    /**
     * Get audiostuurbediening value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getAudiostuurbediening()
    {
        return $this->audiostuurbediening;
    }
    /**
     * Set audiostuurbediening value
     * @param \Webservices\StructType\CarOption $audiostuurbediening
     * @return \Webservices\StructType\CarOptions
     */
    public function setAudiostuurbediening(\Webservices\StructType\CarOption $audiostuurbediening = null)
    {
        $this->audiostuurbediening = $audiostuurbediening;
        return $this;
    }
    /**
     * Get bandenspanningssensor value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getBandenspanningssensor()
    {
        return $this->bandenspanningssensor;
    }
    /**
     * Set bandenspanningssensor value
     * @param \Webservices\StructType\CarOption $bandenspanningssensor
     * @return \Webservices\StructType\CarOptions
     */
    public function setBandenspanningssensor(\Webservices\StructType\CarOption $bandenspanningssensor = null)
    {
        $this->bandenspanningssensor = $bandenspanningssensor;
        return $this;
    }
    /**
     * Get navigatiesysteem value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getNavigatiesysteem()
    {
        return $this->navigatiesysteem;
    }
    /**
     * Set navigatiesysteem value
     * @param \Webservices\StructType\CarOption $navigatiesysteem
     * @return \Webservices\StructType\CarOptions
     */
    public function setNavigatiesysteem(\Webservices\StructType\CarOption $navigatiesysteem = null)
    {
        $this->navigatiesysteem = $navigatiesysteem;
        return $this;
    }
    /**
     * Get televisie value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getTelevisie()
    {
        return $this->televisie;
    }
    /**
     * Set televisie value
     * @param \Webservices\StructType\CarOption $televisie
     * @return \Webservices\StructType\CarOptions
     */
    public function setTelevisie(\Webservices\StructType\CarOption $televisie = null)
    {
        $this->televisie = $televisie;
        return $this;
    }
    /**
     * Get telefoonvoorbereiding value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getTelefoonvoorbereiding()
    {
        return $this->telefoonvoorbereiding;
    }
    /**
     * Set telefoonvoorbereiding value
     * @param \Webservices\StructType\CarOption $telefoonvoorbereiding
     * @return \Webservices\StructType\CarOptions
     */
    public function setTelefoonvoorbereiding(\Webservices\StructType\CarOption $telefoonvoorbereiding = null)
    {
        $this->telefoonvoorbereiding = $telefoonvoorbereiding;
        return $this;
    }
    /**
     * Get telefoon value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getTelefoon()
    {
        return $this->telefoon;
    }
    /**
     * Set telefoon value
     * @param \Webservices\StructType\CarOption $telefoon
     * @return \Webservices\StructType\CarOptions
     */
    public function setTelefoon(\Webservices\StructType\CarOption $telefoon = null)
    {
        $this->telefoon = $telefoon;
        return $this;
    }
    /**
     * Get intervalruitenwisser value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getIntervalruitenwisser()
    {
        return $this->intervalruitenwisser;
    }
    /**
     * Set intervalruitenwisser value
     * @param \Webservices\StructType\CarOption $intervalruitenwisser
     * @return \Webservices\StructType\CarOptions
     */
    public function setIntervalruitenwisser(\Webservices\StructType\CarOption $intervalruitenwisser = null)
    {
        $this->intervalruitenwisser = $intervalruitenwisser;
        return $this;
    }
    /**
     * Get regelbare_interval value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getRegelbare_interval()
    {
        return $this->regelbare_interval;
    }
    /**
     * Set regelbare_interval value
     * @param \Webservices\StructType\CarOption $regelbare_interval
     * @return \Webservices\StructType\CarOptions
     */
    public function setRegelbare_interval(\Webservices\StructType\CarOption $regelbare_interval = null)
    {
        $this->regelbare_interval = $regelbare_interval;
        return $this;
    }
    /**
     * Get regensensor value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getRegensensor()
    {
        return $this->regensensor;
    }
    /**
     * Set regensensor value
     * @param \Webservices\StructType\CarOption $regensensor
     * @return \Webservices\StructType\CarOptions
     */
    public function setRegensensor(\Webservices\StructType\CarOption $regensensor = null)
    {
        $this->regensensor = $regensensor;
        return $this;
    }
    /**
     * Get ruitenwisser_achter value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getRuitenwisser_achter()
    {
        return $this->ruitenwisser_achter;
    }
    /**
     * Set ruitenwisser_achter value
     * @param \Webservices\StructType\CarOption $ruitenwisser_achter
     * @return \Webservices\StructType\CarOptions
     */
    public function setRuitenwisser_achter(\Webservices\StructType\CarOption $ruitenwisser_achter = null)
    {
        $this->ruitenwisser_achter = $ruitenwisser_achter;
        return $this;
    }
    /**
     * Get achterruitverwarming value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getAchterruitverwarming()
    {
        return $this->achterruitverwarming;
    }
    /**
     * Set achterruitverwarming value
     * @param \Webservices\StructType\CarOption $achterruitverwarming
     * @return \Webservices\StructType\CarOptions
     */
    public function setAchterruitverwarming(\Webservices\StructType\CarOption $achterruitverwarming = null)
    {
        $this->achterruitverwarming = $achterruitverwarming;
        return $this;
    }
    /**
     * Get voorruitverwarming value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getVoorruitverwarming()
    {
        return $this->voorruitverwarming;
    }
    /**
     * Set voorruitverwarming value
     * @param \Webservices\StructType\CarOption $voorruitverwarming
     * @return \Webservices\StructType\CarOptions
     */
    public function setVoorruitverwarming(\Webservices\StructType\CarOption $voorruitverwarming = null)
    {
        $this->voorruitverwarming = $voorruitverwarming;
        return $this;
    }
    /**
     * Get verwarmde_ruitensproeiers value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getVerwarmde_ruitensproeiers()
    {
        return $this->verwarmde_ruitensproeiers;
    }
    /**
     * Set verwarmde_ruitensproeiers value
     * @param \Webservices\StructType\CarOption $verwarmde_ruitensproeiers
     * @return \Webservices\StructType\CarOptions
     */
    public function setVerwarmde_ruitensproeiers(\Webservices\StructType\CarOption $verwarmde_ruitensproeiers = null)
    {
        $this->verwarmde_ruitensproeiers = $verwarmde_ruitensproeiers;
        return $this;
    }
    /**
     * Get gelaagde_voorruit value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getGelaagde_voorruit()
    {
        return $this->gelaagde_voorruit;
    }
    /**
     * Set gelaagde_voorruit value
     * @param \Webservices\StructType\CarOption $gelaagde_voorruit
     * @return \Webservices\StructType\CarOptions
     */
    public function setGelaagde_voorruit(\Webservices\StructType\CarOption $gelaagde_voorruit = null)
    {
        $this->gelaagde_voorruit = $gelaagde_voorruit;
        return $this;
    }
    /**
     * Get getintglas value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getGetintglas()
    {
        return $this->getintglas;
    }
    /**
     * Set getintglas value
     * @param \Webservices\StructType\CarOption $getintglas
     * @return \Webservices\StructType\CarOptions
     */
    public function setGetintglas(\Webservices\StructType\CarOption $getintglas = null)
    {
        $this->getintglas = $getintglas;
        return $this;
    }
    /**
     * Get schuifdak value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getSchuifdak()
    {
        return $this->schuifdak;
    }
    /**
     * Set schuifdak value
     * @param \Webservices\StructType\CarOption $schuifdak
     * @return \Webservices\StructType\CarOptions
     */
    public function setSchuifdak(\Webservices\StructType\CarOption $schuifdak = null)
    {
        $this->schuifdak = $schuifdak;
        return $this;
    }
    /**
     * Get elektrisch_schuifdak value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getElektrisch_schuifdak()
    {
        return $this->elektrisch_schuifdak;
    }
    /**
     * Set elektrisch_schuifdak value
     * @param \Webservices\StructType\CarOption $elektrisch_schuifdak
     * @return \Webservices\StructType\CarOptions
     */
    public function setElektrisch_schuifdak(\Webservices\StructType\CarOption $elektrisch_schuifdak = null)
    {
        $this->elektrisch_schuifdak = $elektrisch_schuifdak;
        return $this;
    }
    /**
     * Get beschermstrips_opzij value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getBeschermstrips_opzij()
    {
        return $this->beschermstrips_opzij;
    }
    /**
     * Set beschermstrips_opzij value
     * @param \Webservices\StructType\CarOption $beschermstrips_opzij
     * @return \Webservices\StructType\CarOptions
     */
    public function setBeschermstrips_opzij(\Webservices\StructType\CarOption $beschermstrips_opzij = null)
    {
        $this->beschermstrips_opzij = $beschermstrips_opzij;
        return $this;
    }
    /**
     * Get bumpers_meegespoten value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getBumpers_meegespoten()
    {
        return $this->bumpers_meegespoten;
    }
    /**
     * Set bumpers_meegespoten value
     * @param \Webservices\StructType\CarOption $bumpers_meegespoten
     * @return \Webservices\StructType\CarOptions
     */
    public function setBumpers_meegespoten(\Webservices\StructType\CarOption $bumpers_meegespoten = null)
    {
        $this->bumpers_meegespoten = $bumpers_meegespoten;
        return $this;
    }
    /**
     * Get metallic_lak value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getMetallic_lak()
    {
        return $this->metallic_lak;
    }
    /**
     * Set metallic_lak value
     * @param \Webservices\StructType\CarOption $metallic_lak
     * @return \Webservices\StructType\CarOptions
     */
    public function setMetallic_lak(\Webservices\StructType\CarOption $metallic_lak = null)
    {
        $this->metallic_lak = $metallic_lak;
        return $this;
    }
    /**
     * Get lichtmetalen_velgen value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getLichtmetalen_velgen()
    {
        return $this->lichtmetalen_velgen;
    }
    /**
     * Set lichtmetalen_velgen value
     * @param \Webservices\StructType\CarOption $lichtmetalen_velgen
     * @return \Webservices\StructType\CarOptions
     */
    public function setLichtmetalen_velgen(\Webservices\StructType\CarOption $lichtmetalen_velgen = null)
    {
        $this->lichtmetalen_velgen = $lichtmetalen_velgen;
        return $this;
    }
    /**
     * Get rechter_buitenspiegel value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getRechter_buitenspiegel()
    {
        return $this->rechter_buitenspiegel;
    }
    /**
     * Set rechter_buitenspiegel value
     * @param \Webservices\StructType\CarOption $rechter_buitenspiegel
     * @return \Webservices\StructType\CarOptions
     */
    public function setRechter_buitenspiegel(\Webservices\StructType\CarOption $rechter_buitenspiegel = null)
    {
        $this->rechter_buitenspiegel = $rechter_buitenspiegel;
        return $this;
    }
    /**
     * Get binnenuit_verstelbare_buitenspiegel value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getBinnenuit_verstelbare_buitenspiegel()
    {
        return $this->binnenuit_verstelbare_buitenspiegel;
    }
    /**
     * Set binnenuit_verstelbare_buitenspiegel value
     * @param \Webservices\StructType\CarOption $binnenuit_verstelbare_buitenspiegel
     * @return \Webservices\StructType\CarOptions
     */
    public function setBinnenuit_verstelbare_buitenspiegel(\Webservices\StructType\CarOption $binnenuit_verstelbare_buitenspiegel = null)
    {
        $this->binnenuit_verstelbare_buitenspiegel = $binnenuit_verstelbare_buitenspiegel;
        return $this;
    }
    /**
     * Get elektrische_spiegels value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getElektrische_spiegels()
    {
        return $this->elektrische_spiegels;
    }
    /**
     * Set elektrische_spiegels value
     * @param \Webservices\StructType\CarOption $elektrische_spiegels
     * @return \Webservices\StructType\CarOptions
     */
    public function setElektrische_spiegels(\Webservices\StructType\CarOption $elektrische_spiegels = null)
    {
        $this->elektrische_spiegels = $elektrische_spiegels;
        return $this;
    }
    /**
     * Get verwarmde_spiegels value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getVerwarmde_spiegels()
    {
        return $this->verwarmde_spiegels;
    }
    /**
     * Set verwarmde_spiegels value
     * @param \Webservices\StructType\CarOption $verwarmde_spiegels
     * @return \Webservices\StructType\CarOptions
     */
    public function setVerwarmde_spiegels(\Webservices\StructType\CarOption $verwarmde_spiegels = null)
    {
        $this->verwarmde_spiegels = $verwarmde_spiegels;
        return $this;
    }
    /**
     * Get inklapbare_spiegels value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getInklapbare_spiegels()
    {
        return $this->inklapbare_spiegels;
    }
    /**
     * Set inklapbare_spiegels value
     * @param \Webservices\StructType\CarOption $inklapbare_spiegels
     * @return \Webservices\StructType\CarOptions
     */
    public function setInklapbare_spiegels(\Webservices\StructType\CarOption $inklapbare_spiegels = null)
    {
        $this->inklapbare_spiegels = $inklapbare_spiegels;
        return $this;
    }
    /**
     * Get meegespoten_spiegels value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getMeegespoten_spiegels()
    {
        return $this->meegespoten_spiegels;
    }
    /**
     * Set meegespoten_spiegels value
     * @param \Webservices\StructType\CarOption $meegespoten_spiegels
     * @return \Webservices\StructType\CarOptions
     */
    public function setMeegespoten_spiegels(\Webservices\StructType\CarOption $meegespoten_spiegels = null)
    {
        $this->meegespoten_spiegels = $meegespoten_spiegels;
        return $this;
    }
    /**
     * Get dodehoekspiegel_bestuurder value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getDodehoekspiegel_bestuurder()
    {
        return $this->dodehoekspiegel_bestuurder;
    }
    /**
     * Set dodehoekspiegel_bestuurder value
     * @param \Webservices\StructType\CarOption $dodehoekspiegel_bestuurder
     * @return \Webservices\StructType\CarOptions
     */
    public function setDodehoekspiegel_bestuurder(\Webservices\StructType\CarOption $dodehoekspiegel_bestuurder = null)
    {
        $this->dodehoekspiegel_bestuurder = $dodehoekspiegel_bestuurder;
        return $this;
    }
    /**
     * Get dimmende_binnenspiegel value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getDimmende_binnenspiegel()
    {
        return $this->dimmende_binnenspiegel;
    }
    /**
     * Set dimmende_binnenspiegel value
     * @param \Webservices\StructType\CarOption $dimmende_binnenspiegel
     * @return \Webservices\StructType\CarOptions
     */
    public function setDimmende_binnenspiegel(\Webservices\StructType\CarOption $dimmende_binnenspiegel = null)
    {
        $this->dimmende_binnenspiegel = $dimmende_binnenspiegel;
        return $this;
    }
    /**
     * Get dimmende_buitenspiegel value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getDimmende_buitenspiegel()
    {
        return $this->dimmende_buitenspiegel;
    }
    /**
     * Set dimmende_buitenspiegel value
     * @param \Webservices\StructType\CarOption $dimmende_buitenspiegel
     * @return \Webservices\StructType\CarOptions
     */
    public function setDimmende_buitenspiegel(\Webservices\StructType\CarOption $dimmende_buitenspiegel = null)
    {
        $this->dimmende_buitenspiegel = $dimmende_buitenspiegel;
        return $this;
    }
    /**
     * Get dakrails value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getDakrails()
    {
        return $this->dakrails;
    }
    /**
     * Set dakrails value
     * @param \Webservices\StructType\CarOption $dakrails
     * @return \Webservices\StructType\CarOptions
     */
    public function setDakrails(\Webservices\StructType\CarOption $dakrails = null)
    {
        $this->dakrails = $dakrails;
        return $this;
    }
    /**
     * Get binnenuit_te_openen_tankklep value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getBinnenuit_te_openen_tankklep()
    {
        return $this->binnenuit_te_openen_tankklep;
    }
    /**
     * Set binnenuit_te_openen_tankklep value
     * @param \Webservices\StructType\CarOption $binnenuit_te_openen_tankklep
     * @return \Webservices\StructType\CarOptions
     */
    public function setBinnenuit_te_openen_tankklep(\Webservices\StructType\CarOption $binnenuit_te_openen_tankklep = null)
    {
        $this->binnenuit_te_openen_tankklep = $binnenuit_te_openen_tankklep;
        return $this;
    }
    /**
     * Get binnenuit_te_openen_bagageklep value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getBinnenuit_te_openen_bagageklep()
    {
        return $this->binnenuit_te_openen_bagageklep;
    }
    /**
     * Set binnenuit_te_openen_bagageklep value
     * @param \Webservices\StructType\CarOption $binnenuit_te_openen_bagageklep
     * @return \Webservices\StructType\CarOptions
     */
    public function setBinnenuit_te_openen_bagageklep(\Webservices\StructType\CarOption $binnenuit_te_openen_bagageklep = null)
    {
        $this->binnenuit_te_openen_bagageklep = $binnenuit_te_openen_bagageklep;
        return $this;
    }
    /**
     * Get op_afstand_te_openen_bagageklep value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getOp_afstand_te_openen_bagageklep()
    {
        return $this->op_afstand_te_openen_bagageklep;
    }
    /**
     * Set op_afstand_te_openen_bagageklep value
     * @param \Webservices\StructType\CarOption $op_afstand_te_openen_bagageklep
     * @return \Webservices\StructType\CarOptions
     */
    public function setOp_afstand_te_openen_bagageklep(\Webservices\StructType\CarOption $op_afstand_te_openen_bagageklep = null)
    {
        $this->op_afstand_te_openen_bagageklep = $op_afstand_te_openen_bagageklep;
        return $this;
    }
    /**
     * Get halogeen_koplampen value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getHalogeen_koplampen()
    {
        return $this->halogeen_koplampen;
    }
    /**
     * Set halogeen_koplampen value
     * @param \Webservices\StructType\CarOption $halogeen_koplampen
     * @return \Webservices\StructType\CarOptions
     */
    public function setHalogeen_koplampen(\Webservices\StructType\CarOption $halogeen_koplampen = null)
    {
        $this->halogeen_koplampen = $halogeen_koplampen;
        return $this;
    }
    /**
     * Get xenon_koplampen value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getXenon_koplampen()
    {
        return $this->xenon_koplampen;
    }
    /**
     * Set xenon_koplampen value
     * @param \Webservices\StructType\CarOption $xenon_koplampen
     * @return \Webservices\StructType\CarOptions
     */
    public function setXenon_koplampen(\Webservices\StructType\CarOption $xenon_koplampen = null)
    {
        $this->xenon_koplampen = $xenon_koplampen;
        return $this;
    }
    /**
     * Get verstelbare_koplampen value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getVerstelbare_koplampen()
    {
        return $this->verstelbare_koplampen;
    }
    /**
     * Set verstelbare_koplampen value
     * @param \Webservices\StructType\CarOption $verstelbare_koplampen
     * @return \Webservices\StructType\CarOptions
     */
    public function setVerstelbare_koplampen(\Webservices\StructType\CarOption $verstelbare_koplampen = null)
    {
        $this->verstelbare_koplampen = $verstelbare_koplampen;
        return $this;
    }
    /**
     * Get koplampsproeiers value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getKoplampsproeiers()
    {
        return $this->koplampsproeiers;
    }
    /**
     * Set koplampsproeiers value
     * @param \Webservices\StructType\CarOption $koplampsproeiers
     * @return \Webservices\StructType\CarOptions
     */
    public function setKoplampsproeiers(\Webservices\StructType\CarOption $koplampsproeiers = null)
    {
        $this->koplampsproeiers = $koplampsproeiers;
        return $this;
    }
    /**
     * Get automatisch_inschakelende_koplampen value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getAutomatisch_inschakelende_koplampen()
    {
        return $this->automatisch_inschakelende_koplampen;
    }
    /**
     * Set automatisch_inschakelende_koplampen value
     * @param \Webservices\StructType\CarOption $automatisch_inschakelende_koplampen
     * @return \Webservices\StructType\CarOptions
     */
    public function setAutomatisch_inschakelende_koplampen(\Webservices\StructType\CarOption $automatisch_inschakelende_koplampen = null)
    {
        $this->automatisch_inschakelende_koplampen = $automatisch_inschakelende_koplampen;
        return $this;
    }
    /**
     * Get verstralers value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getVerstralers()
    {
        return $this->verstralers;
    }
    /**
     * Set verstralers value
     * @param \Webservices\StructType\CarOption $verstralers
     * @return \Webservices\StructType\CarOptions
     */
    public function setVerstralers(\Webservices\StructType\CarOption $verstralers = null)
    {
        $this->verstralers = $verstralers;
        return $this;
    }
    /**
     * Get mistlampen_voor value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getMistlampen_voor()
    {
        return $this->mistlampen_voor;
    }
    /**
     * Set mistlampen_voor value
     * @param \Webservices\StructType\CarOption $mistlampen_voor
     * @return \Webservices\StructType\CarOptions
     */
    public function setMistlampen_voor(\Webservices\StructType\CarOption $mistlampen_voor = null)
    {
        $this->mistlampen_voor = $mistlampen_voor;
        return $this;
    }
    /**
     * Get mistlampen_achter value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getMistlampen_achter()
    {
        return $this->mistlampen_achter;
    }
    /**
     * Set mistlampen_achter value
     * @param \Webservices\StructType\CarOption $mistlampen_achter
     * @return \Webservices\StructType\CarOptions
     */
    public function setMistlampen_achter(\Webservices\StructType\CarOption $mistlampen_achter = null)
    {
        $this->mistlampen_achter = $mistlampen_achter;
        return $this;
    }
    /**
     * Get zoemer_vergeten_verlichting value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getZoemer_vergeten_verlichting()
    {
        return $this->zoemer_vergeten_verlichting;
    }
    /**
     * Set zoemer_vergeten_verlichting value
     * @param \Webservices\StructType\CarOption $zoemer_vergeten_verlichting
     * @return \Webservices\StructType\CarOptions
     */
    public function setZoemer_vergeten_verlichting(\Webservices\StructType\CarOption $zoemer_vergeten_verlichting = null)
    {
        $this->zoemer_vergeten_verlichting = $zoemer_vergeten_verlichting;
        return $this;
    }
    /**
     * Get verlichte_bagageruimte value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getVerlichte_bagageruimte()
    {
        return $this->verlichte_bagageruimte;
    }
    /**
     * Set verlichte_bagageruimte value
     * @param \Webservices\StructType\CarOption $verlichte_bagageruimte
     * @return \Webservices\StructType\CarOptions
     */
    public function setVerlichte_bagageruimte(\Webservices\StructType\CarOption $verlichte_bagageruimte = null)
    {
        $this->verlichte_bagageruimte = $verlichte_bagageruimte;
        return $this;
    }
    /**
     * Get verlichte_motorruimte value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getVerlichte_motorruimte()
    {
        return $this->verlichte_motorruimte;
    }
    /**
     * Set verlichte_motorruimte value
     * @param \Webservices\StructType\CarOption $verlichte_motorruimte
     * @return \Webservices\StructType\CarOptions
     */
    public function setVerlichte_motorruimte(\Webservices\StructType\CarOption $verlichte_motorruimte = null)
    {
        $this->verlichte_motorruimte = $verlichte_motorruimte;
        return $this;
    }
    /**
     * Get verlicht_dashboardkastje value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getVerlicht_dashboardkastje()
    {
        return $this->verlicht_dashboardkastje;
    }
    /**
     * Set verlicht_dashboardkastje value
     * @param \Webservices\StructType\CarOption $verlicht_dashboardkastje
     * @return \Webservices\StructType\CarOptions
     */
    public function setVerlicht_dashboardkastje(\Webservices\StructType\CarOption $verlicht_dashboardkastje = null)
    {
        $this->verlicht_dashboardkastje = $verlicht_dashboardkastje;
        return $this;
    }
    /**
     * Get regelbare_dashboardverlichting value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getRegelbare_dashboardverlichting()
    {
        return $this->regelbare_dashboardverlichting;
    }
    /**
     * Set regelbare_dashboardverlichting value
     * @param \Webservices\StructType\CarOption $regelbare_dashboardverlichting
     * @return \Webservices\StructType\CarOptions
     */
    public function setRegelbare_dashboardverlichting(\Webservices\StructType\CarOption $regelbare_dashboardverlichting = null)
    {
        $this->regelbare_dashboardverlichting = $regelbare_dashboardverlichting;
        return $this;
    }
    /**
     * Get leeslampje_voor value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getLeeslampje_voor()
    {
        return $this->leeslampje_voor;
    }
    /**
     * Set leeslampje_voor value
     * @param \Webservices\StructType\CarOption $leeslampje_voor
     * @return \Webservices\StructType\CarOptions
     */
    public function setLeeslampje_voor(\Webservices\StructType\CarOption $leeslampje_voor = null)
    {
        $this->leeslampje_voor = $leeslampje_voor;
        return $this;
    }
    /**
     * Get leeslampje_achter value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getLeeslampje_achter()
    {
        return $this->leeslampje_achter;
    }
    /**
     * Set leeslampje_achter value
     * @param \Webservices\StructType\CarOption $leeslampje_achter
     * @return \Webservices\StructType\CarOptions
     */
    public function setLeeslampje_achter(\Webservices\StructType\CarOption $leeslampje_achter = null)
    {
        $this->leeslampje_achter = $leeslampje_achter;
        return $this;
    }
    /**
     * Get verlichte_makeupspiegel value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getVerlichte_makeupspiegel()
    {
        return $this->verlichte_makeupspiegel;
    }
    /**
     * Set verlichte_makeupspiegel value
     * @param \Webservices\StructType\CarOption $verlichte_makeupspiegel
     * @return \Webservices\StructType\CarOptions
     */
    public function setVerlichte_makeupspiegel(\Webservices\StructType\CarOption $verlichte_makeupspiegel = null)
    {
        $this->verlichte_makeupspiegel = $verlichte_makeupspiegel;
        return $this;
    }
    /**
     * Get vertraging_interieurverlichting value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getVertraging_interieurverlichting()
    {
        return $this->vertraging_interieurverlichting;
    }
    /**
     * Set vertraging_interieurverlichting value
     * @param \Webservices\StructType\CarOption $vertraging_interieurverlichting
     * @return \Webservices\StructType\CarOptions
     */
    public function setVertraging_interieurverlichting(\Webservices\StructType\CarOption $vertraging_interieurverlichting = null)
    {
        $this->vertraging_interieurverlichting = $vertraging_interieurverlichting;
        return $this;
    }
    /**
     * Get portierverlichting value
     * @return \Webservices\StructType\CarOption|null
     */
    public function getPortierverlichting()
    {
        return $this->portierverlichting;
    }
    /**
     * Set portierverlichting value
     * @param \Webservices\StructType\CarOption $portierverlichting
     * @return \Webservices\StructType\CarOptions
     */
    public function setPortierverlichting(\Webservices\StructType\CarOption $portierverlichting = null)
    {
        $this->portierverlichting = $portierverlichting;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarOptions
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
