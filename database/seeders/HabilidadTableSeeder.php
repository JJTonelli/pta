<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HabilidadTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Habilidad')->delete();
        
        \DB::table('Habilidad')->insert(array (
            0 => 
            array (
                'HabilidadID' => 1,
                'Nombre' => 'Alluring',
            'Efecto' => 'Pokémon who are alluring smell very pleasant. They may attract wild Pokémon easily. Attention is commonly turned toward fragrant, alluring Pokémon by wilds. If a Pokémon learns the move Sweet Scent or Aromatherapy and does not have the alluring skill, they gain Alluring. (attracts others with their aroma)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:02',
                'updated_at' => '2023-03-25 13:54:02',
            ),
            1 => 
            array (
                'HabilidadID' => 2,
                'Nombre' => 'Amorphous',
            'Efecto' => 'Amorphous Pokémon have an inconsistent shape. They can flatten and reform themselves like gel. They can stretch out their body material and condense themselves as well. By doing this, a Pokémon can access places others couldn’t, or bypass a door or two, only to let their non-amorphous friends in afterwards. (can change their body into a liquid-like state)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:02',
                'updated_at' => '2023-03-25 13:54:02',
            ),
            2 => 
            array (
                'HabilidadID' => 3,
                'Nombre' => 'Beached',
            'Efecto' => 'When a Pokémon has the beached skill, they need to stay in water. Beached means the Pokémon cannot battle when not submerged in water. For every round of an encounter the Pokémon is not at least half way submerged in water, they lose 10% of their max HP. If the Pokémon is lowered to -100% HP for more than 10 rounds of combat, make a deaths savings roll as usual. Beached Pokémon can calmly remain out of water. (needs to be in water)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:02',
                'updated_at' => '2023-03-25 13:54:02',
            ),
            3 => 
            array (
                'HabilidadID' => 4,
                'Nombre' => 'Burrow',
            'Efecto' => 'Pokémon with Burrow can quickly dig through solid earth, rock, clay, or even soft sand. When moving through any earth, burrowing Pokémon treat underground as normal terrain, without penalizing their movement speed. If a Pokémon learns the move Dig and does not have the burrow skill, they gain burrow (moves through earth easily)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:02',
                'updated_at' => '2023-03-25 13:54:02',
            ),
            4 => 
            array (
                'HabilidadID' => 5,
                'Nombre' => 'Chilled',
            'Efecto' => 'Chilled Pokémon are always cold to the touch. (always cold)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:02',
                'updated_at' => '2023-03-25 13:54:02',
            ),
            5 => 
            array (
                'HabilidadID' => 6,
                'Nombre' => 'Climber',
            'Efecto' => 'Pokémon with an aptitude for climbing, or just many sticky legs, treat vertical terrain and even ceiling surfaces as normal terrain that they can navigate without affecting their movement speed. (treats walls and ceilings as normal terrain)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:02',
                'updated_at' => '2023-03-25 13:54:02',
            ),
            6 => 
            array (
                'HabilidadID' => 7,
                'Nombre' => 'Dancer',
                'Efecto' => 'Oricorio appearances and types change with the nectars they drink. At least four forms are known: Baile form is Fire-type, Pom-Pom form is Electric-type, Pa’u form is Psychic-type, Sensu form is Ghost-type',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:02',
                'updated_at' => '2023-03-25 13:54:02',
            ),
            7 => 
            array (
                'HabilidadID' => 8,
                'Nombre' => 'Firestarter',
            'Efecto' => 'A Pokémon who has the firestarter skill can produce flames. They can control how lightly or powerfully they produce the fire, creates puffs of fire the size of a lighter or a large burst of fire capable of engulfing a tree. If a Pokémon learns the move Blast Burn, Blaze Kick, Ember, Fiery Dance, Fire Blast, Fire Fang, Fire Lash, Fire Spin, Flame Burst, Flame Charge, Flame Wheel, Flamethrower, Flare Blitz, Heat Crash, Heat Wave, or Incinerate and does not have the firestarter Skill, they gain firestarter. (can create fire)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:02',
                'updated_at' => '2023-03-25 13:54:02',
            ),
            8 => 
            array (
                'HabilidadID' => 9,
                'Nombre' => 'Flopper',
            'Efecto' => 'A Pokémon with the flopper Skill probably doesn’t like being out of water. While it’s not dangerous to move around on, a flopper treats all normal terrain as difficult terrain and all difficult terrain as blocking terrain. (has a hard time moving out of water)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:02',
                'updated_at' => '2023-03-25 13:54:02',
            ),
            9 => 
            array (
                'HabilidadID' => 10,
                'Nombre' => 'Flower Bond',
                'Efecto' => 'Flabébé, Floette, and Florges bond with a flower throughout their lives. Different flowers change how they appear.',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:02',
                'updated_at' => '2023-03-25 13:54:02',
            ),
            10 => 
            array (
                'HabilidadID' => 11,
                'Nombre' => 'Flight',
            'Efecto' => 'Pokémon with flight are not bound to the ground. Through means of wings, or psychic ability, or electromagnetic levitation, these Pokémon can remain in the air for hours at a time, sometimes never needing to return to the ground. These Pokémon can use their movements speeds in the air. (can fly)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:02',
                'updated_at' => '2023-03-25 13:54:02',
            ),
            11 => 
            array (
                'HabilidadID' => 12,
                'Nombre' => 'Fountain',
            'Efecto' => 'A Pokémon who has the fountain skill can produce freshwater. They can control how lightly or powerfully they produce the water, sprinkling water or forcefully shooting water with the strength of a fire hose. If a Pokémon learns the move Hydro Cannon, Hydro Pump, Liquidation, Scald, Soak, Water Gun, Water Pulse, Waterfall, Whirlpool and does not have the fountain Skill, they gain fountain. (can create water)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:02',
                'updated_at' => '2023-03-25 13:54:02',
            ),
            12 => 
            array (
                'HabilidadID' => 13,
                'Nombre' => 'Freezer',
            'Efecto' => 'When a Pokémon has the freezer skill, they can produce ice at a controlled rate. They can make puffs of snow, or ice cubes, or spread icicles across surfaces. As their action, a Pokémon with Freezer can target an area on the ground and slowly turn it into icy, difficult terrain. They can make one 5x5 ft. area into icy, difficult terrain or fluffy, snowy, difficult terrain per 6 seconds. If a Pokémon learns the move Aurora Beam, Blizzard, Freeze-Dry, Frost Breath, Glaciate, Ice Beam, Ice Fang, Icy Wind, Powder Snow, or Sheer Cold, and does not have the freezer skill, they gain freezer. (can create ice)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:02',
                'updated_at' => '2023-03-25 13:54:02',
            ),
            13 => 
            array (
                'HabilidadID' => 14,
                'Nombre' => 'Genetic Relation',
                'Efecto' => 'Can breed to produce Illumise',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:02',
                'updated_at' => '2023-03-25 13:54:02',
            ),
            14 => 
            array (
                'HabilidadID' => 15,
                'Nombre' => 'Gilled',
            'Efecto' => 'A gilled Pokémon can breathe underwater. It never needs to come up for air, remaining underwater for as long as it wants to. (can breathe underwater)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:02',
                'updated_at' => '2023-03-25 13:54:02',
            ),
            15 => 
            array (
                'HabilidadID' => 16,
                'Nombre' => 'Glow',
            'Efecto' => 'A Pokémon with the glow skill can emit light from a part of its body. Depending on the variety of wild Pokémon nearby, it might attract Pokémon or ward them away. If a Pokémon learns the move Flash or Tail Glow and does not have the glow skill, they gain glow. (can produce light)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:02',
                'updated_at' => '2023-03-25 13:54:02',
            ),
            16 => 
            array (
                'HabilidadID' => 17,
                'Nombre' => 'Hover',
            'Efecto' => 'Hovering Pokémon use some force in order to float above the ground, or even over water, without touching the surface. Whether its magnetic, gravitational, air currents, or some other magical power, it’s uncertain what keeps some of these Pokémon in the air, but they can’t go higher than 10 ft off the ground while staying airborne indefinitely. (can hover)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:02',
                'updated_at' => '2023-03-25 13:54:02',
            ),
            17 => 
            array (
                'HabilidadID' => 18,
                'Nombre' => 'Groundshaper',
            'Efecto' => 'A Pokémon with the groundshaper skill can skillfully and precisely transform the terrain around them to create difficult terrain or flatten out rough terrain to create normal terrain. As their action, a Pokémon with groundshaper can target an area on the ground and slowly turn it into sandy, or rock covered difficult terrain, or change difficult terrain into smooth dirtcovered, normal terrain. They can make one 5x5 ft. area into difficult terrain or normal terrain per 6 seconds. If a Pokémon learns the move Bulldoze, Earth Power, Earthquake, Magnitude, Rototiller, Sand Tomb, or Stomping Tantrum and does not have the groundshaper Skill, they gain groundshaper. (can manipulate the ground)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:02',
                'updated_at' => '2023-03-25 13:54:02',
            ),
            18 => 
            array (
                'HabilidadID' => 19,
                'Nombre' => 'Guster',
            'Efecto' => 'The guster can create bursts of wind. The power can vary from a light breeze to a powerful burst of air capable of lifting light objects into the air or providing lift for a chute. If a Pokémon learns the move Gust, Hurricane, or Tailwind and does not have the guster Skill, they gain guster. (can produce wind)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            19 => 
            array (
                'HabilidadID' => 20,
                'Nombre' => 'Heater',
            'Efecto' => 'A Pokémon with the heater skill is always warm when touched. (always warm)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            20 => 
            array (
                'HabilidadID' => 21,
                'Nombre' => 'Inflatable',
            'Efecto' => 'A Pokémon with the skill inflatable can expand its size from small to medium, medium to large, large to huge, or huge to gigantic. While inflated, a Pokémon does not change its weight. A Pokémon can maintain its larger size for up to 5 mins. If a Pokémon learns the move Growth or Stockpile and does not have the inflatable skill, they gain inflatable. (can expand)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            21 => 
            array (
                'HabilidadID' => 22,
                'Nombre' => 'Intelligence',
            'Efecto' => 'Intelligence marks a Pokémon for higher brain function and often these Pokémon can surpass human intellect. While intelligent Pokémon are capable of independent decisions, they still trust your leadership and will usually wait for your instruction. If you are unconscious or otherwise unable to make decisions, an intelligent Pokémon will act on its own accord, once per round if none of your other Pokémon are acting that round. Intelligent Pokémon are problem solvers and can be dangerous foes if encountered in the wild. (very smart)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            22 => 
            array (
                'HabilidadID' => 23,
                'Nombre' => 'Invisibility',
            'Efecto' => 'Pokémon who have the invisibility skill can turn invisible. Pokémon may not perform moves while invisible. While invisible, foes must roll +4 during an accuracy checks to hit you and still need a general idea of where you last were to hit you. When a Pokémon turns invisible, they can only remain invisible for up to 4 minutes. After becoming visible, they must wait two plus the number of minutes they spent invisible before using their invisibility again. (can turn invisible)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            23 => 
            array (
                'HabilidadID' => 24,
                'Nombre' => 'Magnetic',
            'Efecto' => 'Magnetic Pokémon can lightly manipulate magnetic fields. With this, they can repel iron and/or steel or attract iron and/or steel, holding it too their body or pushing it away. Through this magnetic manipulation, they can also feel magnetic fields and discern north. If a Pokémon learns the move Magnet Rise, Magnet Pull or Magnet Bomb and does not have the Magnetic Skill, they gain Magnetic. (controls magnetic fields)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            24 => 
            array (
                'HabilidadID' => 25,
                'Nombre' => 'Mind Lock',
            'Efecto' => 'Pokémon who have the skill mind lock cannot have their minds read. (minds can’t be read)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            25 => 
            array (
                'HabilidadID' => 26,
                'Nombre' => 'Phasing',
            'Efecto' => 'A Pokémon with phasing may move through hindering or blocking terrain without their movement speed being affected. They can turn intangible and move through solid walls or another Pokémon. A Pokémon can remain intangible with phasing for up to 30 seconds. If a Pokémon remains intangible, they may not perform moves during their turn. Attacks that use the Special Attack stat can still target and hit a phasing Pokémon. (can move through solid objects)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            26 => 
            array (
                'HabilidadID' => 27,
                'Nombre' => 'Reach',
            'Efecto' => 'A Pokémon with reach may make melee attacks from up to 25 ft. away. Pokémon with reach are either really large or have a stretchy limb with which they can strike foes from a distance. (melee range is 25 ft.)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            27 => 
            array (
                'HabilidadID' => 28,
                'Nombre' => 'Repulsive',
                'Efecto' => 'This Pokémon can emit an unpleasant odor that Wild Pokémon find repulsive. Wild Pokémon may ignore this smell to protect something precious to them. If a Pokémon learns the move Corrosive Gas, Gastro Acid, Gunk Shot, Poison Gas, Sludge, Sludge Bomb, Sludge Wave, Smog, or Venom Drench and does not have the repulsive Skill, they gain Repulsive.',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            28 => 
            array (
                'HabilidadID' => 29,
                'Nombre' => 'Seasonal',
                'Efecto' => 'Deerling and Sawsbuck change their appearance depending on the season of the year',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            29 => 
            array (
                'HabilidadID' => 30,
                'Nombre' => 'Shrinkable',
            'Efecto' => 'A Pokémon with the skill shrinkable can shrink its size from gigantic to huge, huge to large, large to medium, or medium to small. While shrunken, a Pokémon may not perform any moves and it does not change its weight. A Pokémon can maintain its smaller size for up to 5 mins. If a Pokémon learns the move Minimize and does not have the shrinkable skill, they gain shrinkable. (can shrink)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            30 => 
            array (
                'HabilidadID' => 31,
                'Nombre' => 'Sinker',
            'Efecto' => 'Sinker means the Pokémon cannot swim, or move while submerged in water. For every round of an encounter the Pokémon is in water that is deep enough for them to stand submerged in, they lose 10% of their max HP. If the Pokémon is lowered to -100% HP for more than 10 rounds of combat, make a deaths savings roll as usual. If a Pokémon gains the swimmer skill, they lose their sinker skill. (can’t swim)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            31 => 
            array (
                'HabilidadID' => 32,
                'Nombre' => 'Sprouter',
            'Efecto' => 'A Pokémon with the sprouter skill can rapidly influence the growth of plants and flora around them. Over 6 seconds, a sprouter can grow a plant 5 ft taller or wider than it currently was. Through the use of sprouter, the Pokémon can also make plants grow up to twice of the normal size they would become naturally. If a Pokémon learns the move Frenzy Plant, Grass Knot, Ingrain, Leech Seed, or Synthesis and does not have the sprouter Skill, they gain sprouter. (can manipulate plant life)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            32 => 
            array (
                'HabilidadID' => 33,
                'Nombre' => 'Pumpkin Sized',
                'Efecto' => 'Depending on your size, your stats vary',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            33 => 
            array (
                'HabilidadID' => 34,
                'Nombre' => 'Stealth',
            'Efecto' => 'Not all Pokémon are allowed to make a stealth check. With stealth, Pokémon may roll a stealth check like a human trainer, adding their Speed modifier, calculated like a human’s, to see if they can silently move during or outside of battle without being detected. (can make stealth skill checks)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            34 => 
            array (
                'HabilidadID' => 35,
                'Nombre' => 'Strength',
            'Efecto' => 'A Pokémon with the Strength skill is exceptionally strong, physically. With little effort, they can lift and move things vastly heavier than themselves. If they are featherweight, they can easily lift medium weights; if light weight, they can easily lift heavy weights; if medium weighted, they can easily lift over 400- 600 lbs.; at heavy weight, they can easily lift over 800-1000 lbs.; superweights with strength can lift or push up to 1000-1500 lbs. If a Pokémon learns the move Strength, they gain the strength skill. (very strong)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            35 => 
            array (
                'HabilidadID' => 36,
                'Nombre' => 'Swimmer',
            'Efecto' => 'A swimmer loves the water. They treat knee-deep water as normal terrain as well as anything deeper than that. Swimmers are not always gilled, so make sure they’re coming up for air when they need to. (can swim)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            36 => 
            array (
                'HabilidadID' => 37,
                'Nombre' => 'Tall',
                'Efecto' => 'You are Gigantic sized indoors',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            37 => 
            array (
                'HabilidadID' => 38,
                'Nombre' => 'Telekinetic',
            'Efecto' => 'Telekinetic Pokémon can move objects with their mind. They can lift things that are lighter than themselves. They can move objects up to 25 ft. away. If a Pokémon learns the move Confusion, Extrasensory, Psychic, Telekinesis, or Trick and does not have the telekinetic skill, they gain telekinetic. (can move things with their mind)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            38 => 
            array (
                'HabilidadID' => 39,
                'Nombre' => 'Telepath',
            'Efecto' => 'A telepathic Pokémon can read the minds of people and another Pokémon. Telepathic Pokémon can project their thoughts to humans and Pokémon. The Pokémon can only read surface thoughts. (can read minds)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            39 => 
            array (
                'HabilidadID' => 40,
                'Nombre' => 'Threaded',
            'Efecto' => 'If a Pokémon has the threaded skill they may move around with their threaded skill by shooting out silk webs or strong vines. A threaded movement is when a Pokémon targets an object less than 30 ft. away and shoots a strong, thin line of silk, or extends a vine from themselves, and then quickly retracts that silk, or vine, pulling itself towards the object if the Pokémon is lighter than the object or pulling the object towards the Pokémon if the object is lighter than it is. If you target another Pokémon or person with a threaded movement, roll your accuracy check against their Speed stat. You may still use a move on the same turn you perform a threaded movement. If a Pokémon learns the move Electro Web, Spider Web, String Shot, Vine Whip or Power Whip and does not have the threaded skill, they gain threaded. (can move around on spun threads/vines)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            40 => 
            array (
                'HabilidadID' => 41,
                'Nombre' => 'Tracker',
            'Efecto' => 'Pokémon with the skill tracker have a strong sense of smell that they can use to follow other Pokémon or people using a Investigate skill check, adding their Special Attack modifier. If the Pokémon has smelled whom they want to track in the past day, or one of their personal belongings, they can pursue that prey with a skill check of 11 or better. To pick up a random scent from nothing, a skill check of 16 or better will allow the Pokémon to follow that scent. To pick up a specific scent from nothing, a skill check of 20 will allow the Pokémon to follow that scent. A Pokémon may only make these checks once per hour. If a Pokémon learns the move Odor Sleuth and does not have the tracker Skill, they gain tracker. (can follow scents)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            41 => 
            array (
                'HabilidadID' => 42,
                'Nombre' => 'Wing Pattern',
                'Efecto' => 'Vivillon have different wing patterns based on their global location, each pattern unique. This does not indicate rarity, only where the Vivillon was born.',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            42 => 
            array (
                'HabilidadID' => 43,
                'Nombre' => 'Wired',
            'Efecto' => 'Wired Pokémon have a special relation to electronic devices. They can enter machines and travel through connected electronics through any cords that connect them instantly. While inside machines, they can read data on the machine on a check of daily. While inside machines, they can take control of the machine on a programming skill check adding their Special Attack modifier. (can go into electronics)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
            43 => 
            array (
                'HabilidadID' => 44,
                'Nombre' => 'Zapper',
            'Efecto' => 'Pokémon with the zapper skill can produce controlled electricity or send electrical currents through various conductive materials. If an electrical device is capable of being recharged, a Pokémon with zapper can recharge it to full power slowly. If a Pokémon learns the move Charge, Charge Beam, Discharge, Electrify, Electro Ball, Parabolic Charge, Shock Wave, Spark, Thunder, Thunder Fang, Thunder Shock, Thunder Wave, Thunderbolt, Volt Tackle, Wild Charge, or Zap Cannon and does not have the zapper skill, they gain zapper. (can produce electricity)',
                'deleted_at' => NULL,
                'created_at' => '2023-03-25 13:54:03',
                'updated_at' => '2023-03-25 13:54:03',
            ),
        ));
        
        
    }
}