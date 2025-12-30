<?php
/**
 * TOWNS DATA FILE - towns-data.php
 *
 * Comprehensive data for all Hudson Valley towns for programmatic SEO pages.
 * This file contains town information, parks, trails, and local context
 * for tick prevention and Lyme disease pages.
 *
 * Usage:
 * include 'towns-data.php';
 * $town = $towns['poughkeepsie'];
 * echo $town['name']; // Poughkeepsie
 */

$towns = [
    // ============================================
    // DUTCHESS COUNTY
    // ============================================
    'poughkeepsie' => [
        'name' => 'Poughkeepsie',
        'county' => 'Dutchess',
        'slug' => 'poughkeepsie',
        'parks' => ['Walkway Over the Hudson', 'Bowdoin Park', 'Victor C. Waryas Park', 'Pulaski Park', 'College Hill Park'],
        'trails' => ['Walkway Loop Trail', 'Dutchess Rail Trail', 'Bowdoin Park Trails'],
        'outdoor_areas' => ['Marist College grounds', 'Vassar Farm and Ecological Preserve', 'Locust Grove Estate'],
        'risk_level' => 'high',
        'population' => '32,736',
        'description' => 'As the county seat of Dutchess County, Poughkeepsie sits along the Hudson River with numerous parks and the famous Walkway Over the Hudson. The urban-suburban mix creates varied tick habitats along wooded park edges.',
    ],
    'beacon' => [
        'name' => 'Beacon',
        'county' => 'Dutchess',
        'slug' => 'beacon',
        'parks' => ['Mount Beacon Park', 'Dennings Point State Park', 'Long Dock Park', 'Madam Brett Park', 'Memorial Park'],
        'trails' => ['Mount Beacon Trail', 'Casino Trail', 'Fishkill Ridge Trail', 'Dennings Point Trail'],
        'outdoor_areas' => ['Dia:Beacon grounds', 'Beacon waterfront', 'Pete and Toshi Seeger Riverfront Park'],
        'risk_level' => 'high',
        'population' => '13,769',
        'description' => 'Beacon is a hiking hotspot with Mount Beacon offering challenging terrain and spectacular views. The city\'s proximity to Hudson Highlands preserves means abundant deer populations and high tick activity.',
    ],
    'fishkill' => [
        'name' => 'Fishkill',
        'county' => 'Dutchess',
        'slug' => 'fishkill',
        'parks' => ['Fishkill Ridge Conservation Area', 'Geering Park', 'Van Wyck Homestead'],
        'trails' => ['Fishkill Ridge Trail', 'Wilkinson Memorial Trail', 'Bald Hill Trail'],
        'outdoor_areas' => ['Fishkill Creek', 'Rombout Middle School fields', 'Blodgett Memorial Library grounds'],
        'risk_level' => 'high',
        'population' => '2,171',
        'description' => 'Fishkill sits at the base of Fishkill Ridge, offering extensive hiking opportunities through heavily wooded terrain where ticks thrive. The town\'s historic character and natural beauty attract outdoor enthusiasts year-round.',
    ],
    'wappingers-falls' => [
        'name' => 'Wappingers Falls',
        'county' => 'Dutchess',
        'slug' => 'wappingers-falls',
        'parks' => ['Bowdoin Park', 'Mesier Park', 'Wappingers Lake Park', 'Reese Park'],
        'trails' => ['Wappinger Greenway Trail', 'Bowdoin Park Nature Trail'],
        'outdoor_areas' => ['Wappinger Creek', 'Wappingers Falls waterfall area', 'Dutchess Stadium surroundings'],
        'risk_level' => 'high',
        'population' => '5,522',
        'description' => 'Wappingers Falls combines suburban living with access to beautiful natural areas along Wappinger Creek. The extensive park system and greenway trails create ideal tick habitat in transitional zones.',
    ],
    'hyde-park' => [
        'name' => 'Hyde Park',
        'county' => 'Dutchess',
        'slug' => 'hyde-park',
        'parks' => ['FDR Presidential Library and Museum grounds', 'Vanderbilt Mansion grounds', 'Eleanor Roosevelt National Historic Site', 'Top Cottage'],
        'trails' => ['Hyde Park Trail', 'Roosevelt Farm Lane', 'Val-Kill trails'],
        'outdoor_areas' => ['Culinary Institute of America grounds', 'Mills Mansion State Historic Site', 'Staatsburgh State Historic Site'],
        'risk_level' => 'high',
        'population' => '21,571',
        'description' => 'Hyde Park is home to the Roosevelt and Vanderbilt estates with extensive grounds along the Hudson River. The historic estates\' manicured lawns meet forested areas, creating edge habitat where ticks are most active.',
    ],
    'rhinebeck' => [
        'name' => 'Rhinebeck',
        'county' => 'Dutchess',
        'slug' => 'rhinebeck',
        'parks' => ['Poets\' Walk Park', 'Ferncliff Forest', 'Burger Hill Park', 'Montgomery Place Orchards'],
        'trails' => ['Poets\' Walk Trail', 'Ferncliff Forest trails', 'River Road nature areas'],
        'outdoor_areas' => ['Dutchess County Fairgrounds', 'Wilderstein Historic Site', 'Old Aerodrome'],
        'risk_level' => 'high',
        'population' => '2,657',
        'description' => 'Rhinebeck\'s charming village is surrounded by rolling farmland and forests. Poets\' Walk and Ferncliff Forest are beloved hiking destinations where tick awareness is essential.',
    ],
    'red-hook' => [
        'name' => 'Red Hook',
        'county' => 'Dutchess',
        'slug' => 'red-hook',
        'parks' => ['Tivoli Bays Wildlife Management Area', 'Poets\' Walk Park', 'Red Hook Town Park'],
        'trails' => ['Tivoli Bays trails', 'Bard College trails', 'Ward Manor Road trails'],
        'outdoor_areas' => ['Bard College campus', 'Montgomery Place', 'Clermont State Historic Site'],
        'risk_level' => 'high',
        'population' => '11,319',
        'description' => 'Red Hook offers a quintessential Hudson Valley experience with farms, forests, and the Tivoli Bays wetlands. Bard College\'s extensive campus provides numerous walking paths through tick-prone areas.',
    ],
    'millbrook' => [
        'name' => 'Millbrook',
        'county' => 'Dutchess',
        'slug' => 'millbrook',
        'parks' => ['Innisfree Garden', 'Cary Institute of Ecosystem Studies', 'Trevor Zoo'],
        'trails' => ['Innisfree Garden paths', 'Cary Institute trails', 'Hunt Country nature areas'],
        'outdoor_areas' => ['Millbrook Vineyards', 'Bennett Park', 'Thorne Building grounds'],
        'risk_level' => 'very_high',
        'population' => '1,452',
        'description' => 'Millbrook is known for its equestrian estates and the renowned Cary Institute of Ecosystem Studies, which actually conducts Lyme disease research. The rural character means abundant tick habitat.',
    ],
    'pawling' => [
        'name' => 'Pawling',
        'county' => 'Dutchess',
        'slug' => 'pawling',
        'parks' => ['Pawling Nature Reserve', 'Appalachian Trail section', 'Lakeside Park'],
        'trails' => ['Appalachian Trail', 'Pawling Nature Reserve trails', 'Lakeside Park loop'],
        'outdoor_areas' => ['Green Mountain Club', 'Trinity-Pawling School grounds', 'Quaker Hill'],
        'risk_level' => 'very_high',
        'population' => '8,463',
        'description' => 'Pawling is a major Appalachian Trail town where thru-hikers resupply. The extensive wilderness areas and nature preserves mean tick exposure is a significant concern for hikers.',
    ],
    'dover-plains' => [
        'name' => 'Dover Plains',
        'county' => 'Dutchess',
        'slug' => 'dover-plains',
        'parks' => ['Dover Stone Church Cave', 'Nellie Hill Preserve', 'Great Swamp'],
        'trails' => ['Stone Church Trail', 'Appalachian Trail section', 'Harlem Valley Rail Trail'],
        'outdoor_areas' => ['Great Swamp wetlands', 'Dover Plains hamlet area', 'Tabor-Wing House grounds'],
        'risk_level' => 'very_high',
        'population' => '8,699',
        'description' => 'Dover Plains is gateway to dramatic natural features like Stone Church Cave. The town\'s rural character and proximity to large wetlands and forest tracts mean high tick populations.',
    ],
    'amenia' => [
        'name' => 'Amenia',
        'county' => 'Dutchess',
        'slug' => 'amenia',
        'parks' => ['Wassaic Project grounds', 'Webutuck Creek Preserve'],
        'trails' => ['Harlem Valley Rail Trail', 'Appalachian Trail nearby'],
        'outdoor_areas' => ['Amenia Farm Distillery fields', 'Troutbeck estate grounds', 'Silo Ridge'],
        'risk_level' => 'very_high',
        'population' => '4,436',
        'description' => 'Amenia lies in the rural eastern portion of Dutchess County, with rolling farmland and forests. The area\'s agricultural character means regular wildlife movement and tick activity.',
    ],
    'pleasant-valley' => [
        'name' => 'Pleasant Valley',
        'county' => 'Dutchess',
        'slug' => 'pleasant-valley',
        'parks' => ['James Baird State Park', 'Pleasant Valley Town Park', 'Crum Elbow Creek areas'],
        'trails' => ['James Baird State Park trails', 'Dutchess Rail Trail section'],
        'outdoor_areas' => ['Salt Point', 'Pleasant Valley Free Library grounds', 'Smithfield Valley'],
        'risk_level' => 'high',
        'population' => '9,066',
        'description' => 'Pleasant Valley is centered around James Baird State Park, a popular destination for hiking, golf, and picnicking. The park\'s wooded trails require vigilant tick prevention.',
    ],
    'lagrange' => [
        'name' => 'LaGrange',
        'county' => 'Dutchess',
        'slug' => 'lagrange',
        'parks' => ['Freedom Park', 'Wilcox Memorial Park', 'Overlook Park'],
        'trails' => ['Dutchess Rail Trail', 'Freedom Park trails', 'Overlook Road nature areas'],
        'outdoor_areas' => ['LaGrange Town Center', 'Taconic State Parkway corridors', 'Wappinger Creek'],
        'risk_level' => 'high',
        'population' => '15,730',
        'description' => 'LaGrange is a suburban town with excellent access to the Dutchess Rail Trail. The mix of residential areas and preserved open space creates diverse tick habitats.',
    ],
    'clinton' => [
        'name' => 'Clinton',
        'county' => 'Dutchess',
        'slug' => 'clinton',
        'parks' => ['Peach Hill Park', 'Fran Mark Park', 'Clinton Town Park'],
        'trails' => ['Dutchess Rail Trail section', 'Clinton Road trails'],
        'outdoor_areas' => ['Clinton Corners', 'Bulls Head', 'Schultzville'],
        'risk_level' => 'high',
        'population' => '4,312',
        'description' => 'Clinton is a quiet, rural town with significant farmland and forested areas. The town\'s pastoral character means extensive edge habitat where ticks thrive.',
    ],
    'milan' => [
        'name' => 'Milan',
        'county' => 'Dutchess',
        'slug' => 'milan',
        'parks' => ['Wilcox Memorial Park', 'Milan Town Park'],
        'trails' => ['Taconic State Park trails nearby', 'Rural road walks'],
        'outdoor_areas' => ['Lafayetteville area', 'Rock City', 'Milan Hollow'],
        'risk_level' => 'high',
        'population' => '2,370',
        'description' => 'Milan is a small, rural town with extensive forests and wetlands. The quiet country roads and preserved natural areas are home to significant tick populations.',
    ],

    // ============================================
    // COLUMBIA COUNTY
    // ============================================
    'hudson' => [
        'name' => 'Hudson',
        'county' => 'Columbia',
        'slug' => 'hudson',
        'parks' => ['Promenade Hill Park', 'Oakdale Lake Park', 'Henry Hudson Riverfront Park'],
        'trails' => ['Hudson Riverwalk', 'Greenport Conservation Area trails', 'Olana trails nearby'],
        'outdoor_areas' => ['Warren Street antique district edges', 'FASNY Museum grounds', 'Hudson City Cemetery'],
        'risk_level' => 'high',
        'population' => '6,042',
        'description' => 'Hudson is the charming county seat of Columbia County, known for antique shops and Victorian architecture. The city\'s parks and proximity to Olana State Historic Site mean tick awareness is essential.',
    ],
    'catskill-columbia' => [
        'name' => 'Catskill',
        'county' => 'Columbia',
        'slug' => 'catskill-columbia',
        'parks' => ['Rip Van Winkle Bridge area', 'Catskill Creek', 'Dutchman\'s Landing Park'],
        'trails' => ['Catskill Scenic Trail nearby', 'Catskill Creek trails'],
        'outdoor_areas' => ['Main Street village area', 'Catskill Marina', 'Leeds area'],
        'risk_level' => 'high',
        'population' => '4,093',
        'description' => 'Catskill Village serves as a gateway to the Catskill Mountains. The town\'s location at the base of the mountains means access to extensive hiking with significant tick exposure.',
    ],
    'kinderhook' => [
        'name' => 'Kinderhook',
        'county' => 'Columbia',
        'slug' => 'kinderhook',
        'parks' => ['Martin Van Buren National Historic Site', 'Kinderhook Lake', 'Luykas Van Alen House'],
        'trails' => ['Van Buren Nature Trail', 'Kinderhook Creek trails', 'Stuyvesant Falls trails nearby'],
        'outdoor_areas' => ['Kinderhook Village green', 'Ichabod Crane Central School fields', 'Kinderhook Creek'],
        'risk_level' => 'high',
        'population' => '8,462',
        'description' => 'Kinderhook is a historic village that was home to President Martin Van Buren. The national historic site and surrounding farmland create ideal tick habitat in the rural landscape.',
    ],
    'chatham' => [
        'name' => 'Chatham',
        'county' => 'Columbia',
        'slug' => 'chatham',
        'parks' => ['Crellin Park', 'Chatham Center Park', 'New Forge State Forest nearby'],
        'trails' => ['Albany-Hudson Electric Trail', 'Austerlitz trails nearby'],
        'outdoor_areas' => ['Chatham Center village', 'East Chatham area', 'North Chatham farmland'],
        'risk_level' => 'high',
        'population' => '4,128',
        'description' => 'Chatham is a quaint village with a vibrant downtown and surrounding agricultural land. The town\'s mix of village center and rural periphery creates varied tick exposure zones.',
    ],
    'claverack' => [
        'name' => 'Claverack',
        'county' => 'Columbia',
        'slug' => 'claverack',
        'parks' => ['Lake Taghkanic State Park nearby', 'Claverack Creek areas'],
        'trails' => ['Greenport Conservation Area', 'Rural walking routes'],
        'outdoor_areas' => ['Claverack hamlet', 'Mellenville', 'Claverack Creek'],
        'risk_level' => 'high',
        'population' => '6,327',
        'description' => 'Claverack is a rural town east of Hudson with rolling farmland and forests. The agricultural landscape and proximity to Lake Taghkanic mean abundant wildlife and tick populations.',
    ],
    'germantown' => [
        'name' => 'Germantown',
        'county' => 'Columbia',
        'slug' => 'germantown',
        'parks' => ['Clermont State Historic Site', 'Palatine Park', 'Lasher Park'],
        'trails' => ['Clermont trails', 'Hudson River shoreline trails'],
        'outdoor_areas' => ['Germantown village', 'Cheviot area', 'Hudson River waterfront'],
        'risk_level' => 'high',
        'population' => '1,954',
        'description' => 'Germantown sits along the Hudson River with beautiful views and historic estates. Clermont State Historic Site offers hiking through grounds where tick activity is high.',
    ],
    'livingston' => [
        'name' => 'Livingston',
        'county' => 'Columbia',
        'slug' => 'livingston',
        'parks' => ['Lake Taghkanic State Park', 'Livingston Town Park'],
        'trails' => ['Lake Taghkanic trails', 'Rural road walks'],
        'outdoor_areas' => ['Linlithgo area', 'Livingston hamlet', 'Taconic State Parkway corridor'],
        'risk_level' => 'high',
        'population' => '3,474',
        'description' => 'Livingston is gateway to Lake Taghkanic State Park, one of the region\'s most popular outdoor destinations. The extensive forests and lake areas harbor significant tick populations.',
    ],
    'copake' => [
        'name' => 'Copake',
        'county' => 'Columbia',
        'slug' => 'copake',
        'parks' => ['Taconic State Park - Copake Falls area', 'Bash Bish Falls State Park nearby', 'Copake Lake'],
        'trails' => ['South Taconic Trail', 'Bash Bish Falls Trail', 'Copake Falls trails'],
        'outdoor_areas' => ['Copake Lake', 'Copake Falls iron works', 'Taconic ridgeline'],
        'risk_level' => 'very_high',
        'population' => '3,615',
        'description' => 'Copake is home to spectacular natural areas including access to Bash Bish Falls and the South Taconic Trail. The heavily wooded terrain makes tick prevention essential for all outdoor activities.',
    ],
    'hillsdale' => [
        'name' => 'Hillsdale',
        'county' => 'Columbia',
        'slug' => 'hillsdale',
        'parks' => ['Taconic State Park', 'Catamount Ski Area', 'Harvey Mountain State Forest'],
        'trails' => ['South Taconic Trail', 'Alander Mountain Trail', 'Catamount summer trails'],
        'outdoor_areas' => ['Hillsdale hamlet', 'Roeliff Jansen Kill', 'Catamount area'],
        'risk_level' => 'very_high',
        'population' => '1,901',
        'description' => 'Hillsdale sits at the base of the Taconic Range with excellent access to wilderness hiking. The mountainous terrain and extensive forests mean very high tick activity.',
    ],
    'ancram' => [
        'name' => 'Ancram',
        'county' => 'Columbia',
        'slug' => 'ancram',
        'parks' => ['Taconic State Park nearby', 'Ancram Paper Mill Museum grounds'],
        'trails' => ['Roeliff Jansen Kill trails', 'Rural walking routes'],
        'outdoor_areas' => ['Ancram hamlet', 'Ancramdale', 'Roeliff Jansen Kill'],
        'risk_level' => 'high',
        'population' => '1,573',
        'description' => 'Ancram is a quiet rural town with rolling farmland and forests. The agricultural landscape and wildlife corridors along streams create ideal tick habitat.',
    ],
    'taghkanic' => [
        'name' => 'Taghkanic',
        'county' => 'Columbia',
        'slug' => 'taghkanic',
        'parks' => ['Lake Taghkanic State Park', 'Rudd Pond Area'],
        'trails' => ['Lake Taghkanic trails', 'West Taghkanic Creek trails'],
        'outdoor_areas' => ['West Taghkanic', 'Churchtown', 'Lake Taghkanic'],
        'risk_level' => 'high',
        'population' => '1,118',
        'description' => 'Taghkanic is a rural town centered around Lake Taghkanic State Park. The extensive park lands and surrounding forests are home to significant tick populations.',
    ],
    'ghent' => [
        'name' => 'Ghent',
        'county' => 'Columbia',
        'slug' => 'ghent',
        'parks' => ['Town of Ghent park', 'Ghent Playhouse grounds'],
        'trails' => ['Harlem Valley Rail Trail extension nearby', 'Rural road walks'],
        'outdoor_areas' => ['Ghent village', 'West Ghent', 'Chatham Center nearby'],
        'risk_level' => 'high',
        'population' => '5,407',
        'description' => 'Ghent is a rural farming community with extensive agricultural land. The mix of farmland, hedgerows, and woodlots creates diverse tick habitats throughout the town.',
    ],
    'stockport' => [
        'name' => 'Stockport',
        'county' => 'Columbia',
        'slug' => 'stockport',
        'parks' => ['Stockport Creek area', 'Columbiaville waterfront'],
        'trails' => ['Hudson River shoreline trails', 'Stockport Creek trails'],
        'outdoor_areas' => ['Stockport hamlet', 'Columbiaville', 'Hudson River waterfront'],
        'risk_level' => 'high',
        'population' => '2,933',
        'description' => 'Stockport lies along the Hudson River with views of the Catskill Mountains. The riverside location and rural character mean consistent tick activity throughout the season.',
    ],

    // ============================================
    // ULSTER COUNTY
    // ============================================
    'kingston' => [
        'name' => 'Kingston',
        'county' => 'Ulster',
        'slug' => 'kingston',
        'parks' => ['Forsyth Nature Center', 'Kingston Point Beach and Park', 'Dietz Stadium Park', 'Hasbrouck Park'],
        'trails' => ['Kingston Greenline', 'Rondout Creek trails', 'Forsyth trails'],
        'outdoor_areas' => ['Stockade District', 'Kingston Waterfront', 'Rondout Creek area', 'Hutton Brickyards'],
        'risk_level' => 'high',
        'population' => '23,887',
        'description' => 'Kingston, New York\'s first capital, combines urban amenities with access to natural areas. The historic Stockade District borders wooded areas where tick awareness is important.',
    ],
    'new-paltz' => [
        'name' => 'New Paltz',
        'county' => 'Ulster',
        'slug' => 'new-paltz',
        'parks' => ['Minnewaska State Park Preserve', 'Mohonk Preserve', 'Sam\'s Point Area', 'River-to-Ridge Trail'],
        'trails' => ['Shawangunk Ridge Trail', 'Mohonk trails', 'Wallkill Valley Rail Trail'],
        'outdoor_areas' => ['SUNY New Paltz campus', 'Huguenot Street', 'Wallkill River'],
        'risk_level' => 'very_high',
        'population' => '7,324',
        'description' => 'New Paltz is a premier hiking destination with access to the Shawangunk Ridge. The Mohonk Preserve and Minnewaska State Park offer spectacular but tick-heavy terrain.',
    ],
    'saugerties' => [
        'name' => 'Saugerties',
        'county' => 'Ulster',
        'slug' => 'saugerties',
        'parks' => ['Saugerties Lighthouse', 'Falling Waters Preserve', 'Esopus Bend Nature Preserve', 'Seamon Park'],
        'trails' => ['Falling Waters trails', 'Esopus Bend trails', 'Lighthouse Trail'],
        'outdoor_areas' => ['Partition Street village area', 'Esopus Creek', 'HITS horse show grounds'],
        'risk_level' => 'high',
        'population' => '19,482',
        'description' => 'Saugerties offers charming village life with access to beautiful nature preserves. The Esopus Creek area and nearby forests are popular destinations requiring tick awareness.',
    ],
    'woodstock' => [
        'name' => 'Woodstock',
        'county' => 'Ulster',
        'slug' => 'woodstock',
        'parks' => ['Overlook Mountain Wild Forest', 'Catskill Park', 'Zena Cornfield'],
        'trails' => ['Overlook Mountain Trail', 'Echo Lake Trail', 'Millstream trails'],
        'outdoor_areas' => ['Woodstock village green', 'Byrdcliffe Art Colony', 'Comeau Property'],
        'risk_level' => 'very_high',
        'population' => '5,884',
        'description' => 'Woodstock is a legendary arts community at the base of Overlook Mountain. The town\'s wooded character and popular hiking trails mean very high tick exposure.',
    ],
    'rosendale' => [
        'name' => 'Rosendale',
        'county' => 'Ulster',
        'slug' => 'rosendale',
        'parks' => ['Widow Jane Mine', 'Joppenbergh Mountain', 'Rosendale Cement Mines'],
        'trails' => ['Wallkill Valley Rail Trail', 'Joppenbergh Mountain Trail', 'Rosendale Trestle'],
        'outdoor_areas' => ['Main Street village area', 'Rondout Creek', 'Cement mines area'],
        'risk_level' => 'high',
        'population' => '6,075',
        'description' => 'Rosendale is known for its historic cement mines and the famous Rosendale Trestle. The Wallkill Valley Rail Trail passes through town, requiring tick precautions.',
    ],
    'marlboro' => [
        'name' => 'Marlboro',
        'county' => 'Ulster',
        'slug' => 'marlboro',
        'parks' => ['Cluett Schantz Memorial Park', 'Old Man\'s Creek Nature Trail'],
        'trails' => ['Hudson Valley Rail Trail nearby', 'Creek trails'],
        'outdoor_areas' => ['Marlboro hamlet', 'Hudson River waterfront', 'Orchard areas'],
        'risk_level' => 'high',
        'population' => '8,808',
        'description' => 'Marlboro is a river town known for its orchards and wineries. The agricultural landscape and Hudson River access provide varied outdoor experiences with tick exposure.',
    ],
    'highland' => [
        'name' => 'Highland',
        'county' => 'Ulster',
        'slug' => 'highland',
        'parks' => ['Walkway Over the Hudson (west side)', 'Franny Reese State Park', 'Johnson-Iorio Memorial Park'],
        'trails' => ['Walkway Loop Trail', 'Franny Reese trails', 'Hudson Valley Rail Trail'],
        'outdoor_areas' => ['Highland Landing', 'Illinois Mountain', 'Tony Williams Park'],
        'risk_level' => 'high',
        'population' => '12,803',
        'description' => 'Highland offers access to the western side of the Walkway Over the Hudson. Franny Reese State Park provides river views but requires tick awareness.',
    ],
    'ellenville' => [
        'name' => 'Ellenville',
        'county' => 'Ulster',
        'slug' => 'ellenville',
        'parks' => ['Sam\'s Point Area', 'Ice Caves Mountain', 'Verkeerderkill Falls'],
        'trails' => ['Sam\'s Point trails', 'Shawangunk Ridge Trail', 'Ice Caves Trail'],
        'outdoor_areas' => ['Canal Street village area', 'Hang gliding launch sites', 'Shawangunk Ridge'],
        'risk_level' => 'very_high',
        'population' => '4,081',
        'description' => 'Ellenville sits at the southern end of the Shawangunk Ridge with access to Sam\'s Point and the Ice Caves. The wilderness character means very high tick populations.',
    ],
    'phoenicia' => [
        'name' => 'Phoenicia',
        'county' => 'Ulster',
        'slug' => 'phoenicia',
        'parks' => ['Catskill Park', 'Slide Mountain Wilderness', 'Big Indian Wilderness'],
        'trails' => ['Giant Ledge Trail', 'Slide Mountain Trail', 'Phoenicia Trail'],
        'outdoor_areas' => ['Esopus Creek', 'Phoenicia hamlet', 'Empire State Railway Museum'],
        'risk_level' => 'very_high',
        'population' => '309',
        'description' => 'Phoenicia is a quintessential Catskill Mountain village and tubing destination. Access to high peaks hiking means significant tick exposure in mountain terrain.',
    ],
    'shokan' => [
        'name' => 'Shokan',
        'county' => 'Ulster',
        'slug' => 'shokan',
        'parks' => ['Ashokan Reservoir', 'Catskill Park', 'Bluestone Wild Forest'],
        'trails' => ['Ashokan Rail Trail', 'Ashokan High Point Trail', 'Bluestone Wild Forest trails'],
        'outdoor_areas' => ['Ashokan Reservoir promenade', 'Olive Bridge', 'Glenford area'],
        'risk_level' => 'very_high',
        'population' => '1,300',
        'description' => 'Shokan is gateway to the Ashokan Reservoir and surrounding Catskill wilderness. The extensive forests and trails harbor very high tick populations.',
    ],

    // ============================================
    // ORANGE COUNTY
    // ============================================
    'newburgh' => [
        'name' => 'Newburgh',
        'county' => 'Orange',
        'slug' => 'newburgh',
        'parks' => ['Washington\'s Headquarters State Historic Site', 'Downing Park', 'Delano-Hitch Recreation Park', 'Safe Harbors Green'],
        'trails' => ['Downing Park trails', 'Broadway waterfront area', 'Newburgh-Beacon ferry area'],
        'outdoor_areas' => ['Liberty Street waterfront', 'East End Historic District', 'Crawford House grounds'],
        'risk_level' => 'high',
        'population' => '28,856',
        'description' => 'Newburgh is a historic city with Washington\'s Revolutionary War headquarters. Downing Park and waterfront areas offer urban nature experiences with tick awareness needed.',
    ],
    'middletown' => [
        'name' => 'Middletown',
        'county' => 'Orange',
        'slug' => 'middletown',
        'parks' => ['Fancher-Davidge Park', 'Highland Lakes State Park nearby', 'Recreation Park'],
        'trails' => ['Heritage Trail', 'O&W Rail Trail'],
        'outdoor_areas' => ['SUNY Orange campus', 'Run 4 Downtown area', 'Industrial areas with greenspace'],
        'risk_level' => 'high',
        'population' => '28,086',
        'description' => 'Middletown is Orange County\'s largest city with excellent rail trail access. The Heritage Trail and surrounding parks require tick precautions.',
    ],
    'warwick' => [
        'name' => 'Warwick',
        'county' => 'Orange',
        'slug' => 'warwick',
        'parks' => ['Warwick Town Park', 'Wawayanda State Park', 'Sterling Forest State Park'],
        'trails' => ['Appalachian Trail section', 'Sterling Ridge Trail', 'Wawayanda trails'],
        'outdoor_areas' => ['Main Street village area', 'Bellvale Farms', 'Warwick Valley Winery'],
        'risk_level' => 'very_high',
        'population' => '6,712',
        'description' => 'Warwick is a picturesque village with access to major wilderness areas. Sterling Forest and Wawayanda State Park offer extensive hiking with very high tick activity.',
    ],
    'monroe' => [
        'name' => 'Monroe',
        'county' => 'Orange',
        'slug' => 'monroe',
        'parks' => ['Goosepond Mountain State Park', 'Crane Park', 'Museum Village'],
        'trails' => ['Goosepond Mountain trails', 'Heritage Trail section'],
        'outdoor_areas' => ['Lake Street area', 'Museum Village grounds', 'Mombasha Lake'],
        'risk_level' => 'high',
        'population' => '9,006',
        'description' => 'Monroe offers suburban living with access to Goosepond Mountain State Park. The forested parklands and nearby lakes create significant tick habitat.',
    ],
    'cornwall' => [
        'name' => 'Cornwall',
        'county' => 'Orange',
        'slug' => 'cornwall',
        'parks' => ['Storm King State Park', 'Black Rock Forest', 'Schunemunk Mountain State Park', 'Cornwall Waterfront Park'],
        'trails' => ['Storm King trails', 'Black Rock Forest trails', 'Schunemunk trails'],
        'outdoor_areas' => ['Cornwall-on-Hudson village', 'Storm King Art Center', 'Moodna Creek'],
        'risk_level' => 'very_high',
        'population' => '12,646',
        'description' => 'Cornwall is home to Storm King and Black Rock Forest, premier Hudson Valley hiking destinations. The extensive wilderness areas mean very high tick exposure.',
    ],
    'highland-falls' => [
        'name' => 'Highland Falls',
        'county' => 'Orange',
        'slug' => 'highland-falls',
        'parks' => ['West Point grounds', 'Bear Mountain State Park nearby', 'Roe Park'],
        'trails' => ['Bear Mountain trails', 'West Point hiking trails', 'Bull Hill nearby'],
        'outdoor_areas' => ['Main Street village', 'West Point visitor areas', 'Constitution Island'],
        'risk_level' => 'very_high',
        'population' => '3,899',
        'description' => 'Highland Falls is the gateway to West Point and Bear Mountain. The Hudson Highlands terrain offers spectacular views but very high tick populations.',
    ],
    'goshen' => [
        'name' => 'Goshen',
        'county' => 'Orange',
        'slug' => 'goshen',
        'parks' => ['Harness Racing Museum grounds', 'Goose Pond Park', 'Goshen Historic Track'],
        'trails' => ['Heritage Trail', 'O&W Rail Trail section'],
        'outdoor_areas' => ['Village center', 'Salesian Park', 'Orange County Fairgrounds'],
        'risk_level' => 'high',
        'population' => '5,454',
        'description' => 'Goshen is the Orange County seat known for harness racing heritage. The Heritage Trail passes through town, providing tick-aware recreation opportunities.',
    ],
    'chester' => [
        'name' => 'Chester',
        'county' => 'Orange',
        'slug' => 'chester',
        'parks' => ['Goosepond Mountain State Park', 'Carpenter Road Park', 'Chester Commons'],
        'trails' => ['Heritage Trail section', 'Goosepond Mountain trails'],
        'outdoor_areas' => ['Main Street village', 'Sugar Loaf crafts village nearby', 'Chester Agricultural Center'],
        'risk_level' => 'high',
        'population' => '12,140',
        'description' => 'Chester is a quaint village with excellent Heritage Trail access. The surrounding farmland and Goosepond Mountain provide varied outdoor recreation with tick exposure.',
    ],
    'washingtonville' => [
        'name' => 'Washingtonville',
        'county' => 'Orange',
        'slug' => 'washingtonville',
        'parks' => ['Round Hill Park', 'Moodna Creek trails', 'Blooming Grove area parks'],
        'trails' => ['Heritage Trail nearby', 'Rural walking routes'],
        'outdoor_areas' => ['Brotherhood Winery grounds', 'Main Street village', 'Moodna Creek'],
        'risk_level' => 'high',
        'population' => '5,889',
        'description' => 'Washingtonville is home to America\'s oldest winery, Brotherhood. The village\'s rural character and creek corridors create tick habitat throughout.',
    ],

    // ============================================
    // PUTNAM COUNTY
    // ============================================
    'carmel' => [
        'name' => 'Carmel',
        'county' => 'Putnam',
        'slug' => 'carmel',
        'parks' => ['Clarence Fahnestock Memorial State Park', 'Carmel Town Park', 'Ninham Mountain Multiple Use Area'],
        'trails' => ['Appalachian Trail section', 'Fahnestock trails', 'Ninham Mountain trails'],
        'outdoor_areas' => ['Lake Gleneida', 'Putnam County seat area', 'Kent Cliffs'],
        'risk_level' => 'very_high',
        'population' => '34,305',
        'description' => 'Carmel, the Putnam County seat, offers access to Fahnestock State Park and the Appalachian Trail. The extensive wilderness areas harbor very high tick populations.',
    ],
    'brewster' => [
        'name' => 'Brewster',
        'county' => 'Putnam',
        'slug' => 'brewster',
        'parks' => ['Wells Park', 'Brewster Heights Park', 'Great Swamp'],
        'trails' => ['Putnam Trailway', 'Great Swamp trails', 'Thunder Ridge trails'],
        'outdoor_areas' => ['Main Street village', 'Tonetta Lake', 'Brewster Heights'],
        'risk_level' => 'high',
        'population' => '2,390',
        'description' => 'Brewster is a village with excellent rail trail access via the Putnam Trailway. The nearby Great Swamp and wooded areas require tick awareness.',
    ],
    'cold-spring' => [
        'name' => 'Cold Spring',
        'county' => 'Putnam',
        'slug' => 'cold-spring',
        'parks' => ['Hudson Highlands State Park', 'Little Stony Point', 'Foundry Dock Park'],
        'trails' => ['Breakneck Ridge Trail', 'Bull Hill (Mt. Taurus) Trail', 'Cornish Estate Trail'],
        'outdoor_areas' => ['Main Street village', 'Cold Spring waterfront', 'Constitution Marsh'],
        'risk_level' => 'very_high',
        'population' => '1,983',
        'description' => 'Cold Spring is one of the Hudson Valley\'s most popular hiking destinations. Breakneck Ridge and Bull Hill attract thousands of hikers to very tick-heavy terrain.',
    ],
    'mahopac' => [
        'name' => 'Mahopac',
        'county' => 'Putnam',
        'slug' => 'mahopac',
        'parks' => ['Mahopac Lake Park', 'Veterans Memorial Park', 'Sycamore Park'],
        'trails' => ['Putnam Trailway section', 'Lake Mahopac shoreline trails'],
        'outdoor_areas' => ['Lake Mahopac', 'Kirk Lake', 'Downtown Mahopac'],
        'risk_level' => 'high',
        'population' => '8,478',
        'description' => 'Mahopac is centered around beautiful Lake Mahopac. The lakeside parks and surrounding wooded areas create ideal tick habitat throughout the community.',
    ],
    'patterson' => [
        'name' => 'Patterson',
        'county' => 'Putnam',
        'slug' => 'patterson',
        'parks' => ['Great Swamp', 'Wonder Lake State Park', 'Patterson Town Park'],
        'trails' => ['Appalachian Trail section nearby', 'Wonder Lake trails'],
        'outdoor_areas' => ['Patterson hamlet', 'Great Swamp wetlands', 'Haviland Hollow'],
        'risk_level' => 'very_high',
        'population' => '12,023',
        'description' => 'Patterson borders the Great Swamp and offers access to wilderness areas. The wetlands and extensive forests mean very high tick activity throughout.',
    ],
    'southeast' => [
        'name' => 'Southeast',
        'county' => 'Putnam',
        'slug' => 'southeast',
        'parks' => ['Cranberry Mountain Preserve', 'Diverting Reservoir area', 'Southeast Town Park'],
        'trails' => ['Putnam Trailway', 'Cranberry Mountain trails'],
        'outdoor_areas' => ['Brewster hamlet area', 'Towners area', 'Croton Falls'],
        'risk_level' => 'high',
        'population' => '18,404',
        'description' => 'Southeast is Putnam County\'s easternmost town with beautiful reservoirs and preserves. The protected watershed areas harbor significant tick populations.',
    ],

    // ============================================
    // GREENE COUNTY
    // ============================================
    'catskill-greene' => [
        'name' => 'Catskill',
        'county' => 'Greene',
        'slug' => 'catskill-greene',
        'parks' => ['RamsHorn-Livingston Sanctuary', 'Rip Van Winkle Lake', 'Athens State Boat Launch'],
        'trails' => ['Catskill Creek trails', 'RamsHorn marsh trails'],
        'outdoor_areas' => ['Main Street village', 'Catskill Marina', 'Hudson River waterfront'],
        'risk_level' => 'high',
        'population' => '11,775',
        'description' => 'Catskill is the Greene County seat and gateway to the Catskill Mountains. The village combines Hudson River access with mountain adventure, both requiring tick awareness.',
    ],
    'athens' => [
        'name' => 'Athens',
        'county' => 'Greene',
        'slug' => 'athens',
        'parks' => ['Riverfront Park', 'Athens State Boat Launch', 'Sleepy Hollow Lake'],
        'trails' => ['Hudson River Greenway section', 'Village walking routes'],
        'outdoor_areas' => ['Athens Lighthouse area', 'Second Street village', 'Hudson River waterfront'],
        'risk_level' => 'high',
        'population' => '4,080',
        'description' => 'Athens is a historic village along the Hudson River with Victorian architecture. The riverfront parks and surrounding areas require tick precautions.',
    ],
    'coxsackie' => [
        'name' => 'Coxsackie',
        'county' => 'Greene',
        'slug' => 'coxsackie',
        'parks' => ['Coxsackie Riverside Park', 'Bronck Museum grounds', 'Coxsackie Creek area'],
        'trails' => ['Riverside trails', 'Rural walking routes'],
        'outdoor_areas' => ['Reed Street village', 'Mansion Street historic area', 'Hudson River shoreline'],
        'risk_level' => 'high',
        'population' => '8,884',
        'description' => 'Coxsackie features beautiful Hudson River views and the historic Bronck Museum. The riverside location and surrounding farmland create tick habitat.',
    ],
    'windham' => [
        'name' => 'Windham',
        'county' => 'Greene',
        'slug' => 'windham',
        'parks' => ['Windham Mountain Resort', 'Windham Path', 'Catskill Park'],
        'trails' => ['Windham High Peak Trail', 'Escarpment Trail section', 'Elm Ridge trails'],
        'outdoor_areas' => ['Main Street village', 'Ski resort base area', 'Batavia Kill'],
        'risk_level' => 'very_high',
        'population' => '1,660',
        'description' => 'Windham is a four-season mountain resort town in the Northern Catskills. High-elevation hiking and mountain biking trails have significant tick populations.',
    ],
    'hunter' => [
        'name' => 'Hunter',
        'county' => 'Greene',
        'slug' => 'hunter',
        'parks' => ['Catskill Park', 'Hunter Mountain', 'Kaaterskill Falls area'],
        'trails' => ['Hunter Mountain trails', 'Kaaterskill Falls Trail', 'Escarpment Trail'],
        'outdoor_areas' => ['Hunter Village', 'Tannersville nearby', 'Schoharie Creek'],
        'risk_level' => 'very_high',
        'population' => '2,738',
        'description' => 'Hunter is home to legendary Kaaterskill Falls and Hunter Mountain. The Catskill high peaks terrain harbors very high tick populations in peak season.',
    ],
    'tannersville' => [
        'name' => 'Tannersville',
        'county' => 'Greene',
        'slug' => 'tannersville',
        'parks' => ['North-South Lake Campground', 'Catskill Park', 'Mountain Top Arboretum'],
        'trails' => ['North-South Lake trails', 'Escarpment Trail', 'Kaaterskill Falls Trail'],
        'outdoor_areas' => ['Main Street village', 'Haines Falls', 'Twilight Park'],
        'risk_level' => 'very_high',
        'population' => '539',
        'description' => 'Tannersville is a colorful mountain village with access to North-South Lake and the famous Escarpment Trail. The mountain environment has very high tick activity.',
    ],
];

/**
 * Helper function to get a town by slug
 */
function getTown($slug) {
    global $towns;
    return $towns[$slug] ?? null;
}

/**
 * Helper function to get all towns in a county
 */
function getTownsByCounty($county) {
    global $towns;
    return array_filter($towns, function($town) use ($county) {
        return $town['county'] === $county;
    });
}

/**
 * Helper function to generate URL slug
 */
function generateSlug($name) {
    return strtolower(str_replace([' ', "'"], ['-', ''], $name));
}

/**
 * Helper function to get risk level display text
 */
function getRiskLevelText($level) {
    $levels = [
        'moderate' => 'Moderate',
        'high' => 'High',
        'very_high' => 'Very High'
    ];
    return $levels[$level] ?? 'High';
}

/**
 * Helper function to get risk level color class
 */
function getRiskLevelClass($level) {
    $classes = [
        'moderate' => 'risk-moderate',
        'high' => 'risk-high',
        'very_high' => 'risk-very-high'
    ];
    return $classes[$level] ?? 'risk-high';
}

/**
 * Get all town slugs for sitemap generation
 */
function getAllTownSlugs() {
    global $towns;
    return array_keys($towns);
}

/**
 * Get counties with their towns for navigation
 */
function getCountiesWithTowns() {
    global $towns;
    $counties = [];
    foreach ($towns as $slug => $town) {
        $county = $town['county'];
        if (!isset($counties[$county])) {
            $counties[$county] = [];
        }
        $counties[$county][$slug] = $town['name'];
    }
    return $counties;
}
?>
