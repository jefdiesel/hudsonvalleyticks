<?php
/**
 * TOWN TICK PREVENTION TEMPLATE
 *
 * This template generates tick prevention pages for individual towns.
 * It requires $townSlug to be set before including this file.
 *
 * Usage:
 * $townSlug = 'poughkeepsie';
 * include 'town-tick-prevention-template.php';
 */

// Include town data
include_once __DIR__ . '/towns-data.php';

// Get town data
$town = getTown($townSlug);

if (!$town) {
    header('HTTP/1.0 404 Not Found');
    echo 'Town not found';
    exit;
}

// Generate page variables
$pageTitle = $town['name'] . ' Tick Prevention Guide | Hudson Valley Ticks';
$pageDescription = 'Complete tick prevention guide for ' . $town['name'] . ', ' . $town['county'] . ' County, NY. Learn how to protect yourself from ticks at local parks and trails including ' . implode(', ', array_slice($town['parks'], 0, 2)) . '.';

// Get risk level display
$riskText = getRiskLevelText($town['risk_level']);
$riskClass = $town['risk_level'] === 'very_high' ? 'warning' : 'highlight';

// Build parks list
$parksList = '';
foreach ($town['parks'] as $park) {
    $parksList .= '<li>' . htmlspecialchars($park) . '</li>';
}

// Build trails list
$trailsList = '';
foreach ($town['trails'] as $trail) {
    $trailsList .= '<li>' . htmlspecialchars($trail) . '</li>';
}

// Build outdoor areas list
$outdoorList = '';
foreach ($town['outdoor_areas'] as $area) {
    $outdoorList .= '<li>' . htmlspecialchars($area) . '</li>';
}

// Get nearby towns in same county for internal linking
$countyTowns = getTownsByCounty($town['county']);
$nearbyLinks = '';
$count = 0;
foreach ($countyTowns as $slug => $nearbyTown) {
    if ($slug !== $townSlug && $count < 5) {
        $nearbyLinks .= '<li><a href="' . $slug . '-tick-prevention.php">' . $nearbyTown['name'] . ' Tick Prevention</a></li>';
        $count++;
    }
}

$pageContent = <<<HTML
    <!-- HERO SECTION -->
    <section class="hero">
        <h1>{$town['name']} Tick Prevention Guide</h1>
        <p>Protecting {$town['county']} County residents and visitors from tick-borne diseases</p>
    </section>

    <!-- RISK ASSESSMENT -->
    <section class="section" tabindex="0" id="risk-level">
        <div class="{$riskClass}">
            <strong>Tick Risk Level for {$town['name']}: {$riskText}</strong><br>
            {$town['description']}
        </div>
    </section>

    <!-- INTRODUCTION -->
    <section class="section" tabindex="0" id="intro">
        <h2>Tick Prevention in {$town['name']}, NY</h2>
        <p>{$town['name']} is located in {$town['county']} County in the Hudson Valley region of New York State. Like all Hudson Valley communities, {$town['name']} residents face significant exposure to ticks, particularly the blacklegged tick (deer tick) that transmits Lyme disease.</p>

        <p>This guide provides {$town['name']}-specific information about tick prevention, including details about local parks, trails, and outdoor areas where tick awareness is essential.</p>

        <div class="intro-box">
            <strong>Key Facts for {$town['name']} Residents:</strong>
            <ul>
                <li>Peak tick season runs from April through November</li>
                <li>{$town['county']} County has one of the highest Lyme disease rates in New York State</li>
                <li>Adult deer ticks are most active in fall and early spring</li>
                <li>Nymphal ticks (spring/summer) cause most human infections due to their small size</li>
            </ul>
        </div>
    </section>

    <!-- LOCAL PARKS AND TRAILS -->
    <section class="section" tabindex="0" id="local-areas">
        <h2>Parks and Trails in {$town['name']}</h2>
        <p>These popular outdoor destinations in and around {$town['name']} require tick prevention awareness:</p>

        <h3>Parks</h3>
        <ul>
            {$parksList}
        </ul>

        <h3>Trails</h3>
        <ul>
            {$trailsList}
        </ul>

        <h3>Other Outdoor Areas</h3>
        <ul>
            {$outdoorList}
        </ul>

        <div class="strategy-box">
            <strong>Before Visiting Any {$town['name']} Outdoor Area:</strong>
            <ol>
                <li>Apply EPA-registered insect repellent (DEET, picaridin, or oil of lemon eucalyptus)</li>
                <li>Wear long pants and long sleeves, preferably light-colored</li>
                <li>Treat clothing and gear with permethrin (0.5%)</li>
                <li>Stay on marked trails and avoid brushing against vegetation</li>
                <li>Perform a thorough tick check after returning home</li>
            </ol>
        </div>
    </section>

    <!-- PREVENTION STRATEGIES -->
    <section class="section" tabindex="0" id="prevention">
        <h2>Tick Prevention Strategies for {$town['name']} Residents</h2>

        <h3>Personal Protection</h3>
        <p>When enjoying the outdoors in {$town['name']}, these prevention strategies are essential:</p>

        <ul>
            <li><strong>Use EPA-Registered Repellents:</strong> Apply DEET (20-30%), picaridin (20%), or oil of lemon eucalyptus to exposed skin</li>
            <li><strong>Treat Clothing with Permethrin:</strong> Spray or purchase pre-treated clothing that kills ticks on contact</li>
            <li><strong>Dress Appropriately:</strong> Wear long pants tucked into socks, long sleeves, and closed-toe shoes</li>
            <li><strong>Choose Light Colors:</strong> Makes it easier to spot ticks before they attach</li>
            <li><strong>Stay on Trails:</strong> Avoid walking through tall grass and leaf litter</li>
        </ul>

        <h3>After Outdoor Activities</h3>
        <ul>
            <li><strong>Shower Within 2 Hours:</strong> Reduces risk of Lyme disease transmission</li>
            <li><strong>Perform a Full Body Check:</strong> Use a mirror to check hard-to-see areas</li>
            <li><strong>Check Pets:</strong> Dogs can bring ticks into your home</li>
            <li><strong>Tumble Dry Clothes:</strong> High heat for 10 minutes kills ticks</li>
        </ul>

        <div class="highlight">
            <strong>Tick Check Priority Areas:</strong> Scalp, behind ears, underarms, belly button, groin, behind knees, and between toes.
        </div>
    </section>

    <!-- YARD PROTECTION -->
    <section class="section" tabindex="0" id="yard">
        <h2>Protecting Your {$town['name']} Property</h2>
        <p>Many tick bites occur in residential yards. {$town['name']} homeowners can reduce tick populations with these strategies:</p>

        <ul>
            <li><strong>Create a Tick-Safe Zone:</strong> Keep lawns mowed short and remove leaf litter</li>
            <li><strong>Install Barriers:</strong> Use wood chips or gravel between lawns and wooded areas</li>
            <li><strong>Remove Brush:</strong> Clear tall grasses and brush around the home</li>
            <li><strong>Manage Wildlife:</strong> Fence gardens to discourage deer; relocate woodpiles away from the home</li>
            <li><strong>Consider Professional Treatment:</strong> Yard sprays can reduce tick populations</li>
        </ul>

        <p>For detailed yard protection strategies, see our <a href="protecting-your-yard-tick-control.php">complete yard tick control guide</a>.</p>
    </section>

    <!-- SEASONAL INFORMATION -->
    <section class="section" tabindex="0" id="seasonal">
        <h2>Seasonal Tick Activity in {$town['name']}</h2>

        <h3>Spring (March-May)</h3>
        <p>As temperatures rise, both adult deer ticks from fall and newly active nymphs become active. Nymphs are particularly dangerous due to their small size (poppy seed). {$town['name']} residents should be especially vigilant during spring outdoor activities.</p>

        <h3>Summer (June-August)</h3>
        <p>Peak nymph season continues through early summer. The warm weather in {$town['county']} County brings more people outdoors, increasing tick encounter risk at {$town['name']}'s parks and trails.</p>

        <h3>Fall (September-November)</h3>
        <p>Adult deer ticks are most active in fall. Leaf peeping, apple picking, and hiking at {$town['name']}'s outdoor areas all carry tick exposure risk.</p>

        <h3>Winter (December-February)</h3>
        <p>While tick activity decreases, adult deer ticks can remain active on warmer winter days (above 35°F). Don't let your guard down completely during {$town['name']} winter hikes.</p>
    </section>

    <!-- WHAT TO DO IF BITTEN -->
    <section class="section" tabindex="0" id="if-bitten">
        <h2>What to Do If You Find a Tick in {$town['name']}</h2>

        <div class="warning">
            <strong>If You Find an Attached Tick:</strong>
            <ol>
                <li>Use fine-tipped tweezers to grasp the tick as close to the skin as possible</li>
                <li>Pull upward with steady, even pressure - do not twist or jerk</li>
                <li>Clean the bite area and your hands with rubbing alcohol or soap and water</li>
                <li>Save the tick in a sealed container for identification if needed</li>
                <li>Monitor for symptoms for 30 days</li>
            </ol>
        </div>

        <h3>When to Seek Medical Care</h3>
        <p>Contact a healthcare provider if you experience any of these symptoms after a tick bite:</p>
        <ul>
            <li>Expanding red rash (may look like a bullseye)</li>
            <li>Fever, chills, or body aches</li>
            <li>Fatigue or headache</li>
            <li>Joint pain or swelling</li>
            <li>Facial palsy (drooping)</li>
        </ul>

        <p>For complete tick removal instructions, see our <a href="how-to-safely-remove-a-tick.php">guide to safe tick removal</a>.</p>
    </section>

    <!-- LOCAL RESOURCES -->
    <section class="section" tabindex="0" id="resources">
        <h2>Tick Prevention Resources for {$town['name']}</h2>

        <h3>{$town['county']} County Health Department</h3>
        <p>Your local health department provides tick testing, Lyme disease information, and prevention resources for {$town['county']} County residents.</p>

        <h3>Recommended Gear</h3>
        <p>Visit our <a href="tick-prevention-gear.php">tick prevention gear guide</a> for product recommendations including:</p>
        <ul>
            <li>EPA-registered repellents</li>
            <li>Permethrin spray for clothing</li>
            <li>Tick removal tools</li>
            <li>Protective clothing options</li>
        </ul>

        <h3>Learn More About Lyme Disease</h3>
        <p>Read our <a href="{$town['slug']}-lyme-disease.php">{$town['name']} Lyme Disease Guide</a> for information specific to Lyme disease in your community.</p>
    </section>

    <!-- NEARBY TOWNS -->
    <section class="section" tabindex="0" id="nearby">
        <h2>Tick Prevention Guides for Nearby {$town['county']} County Towns</h2>
        <ul>
            {$nearbyLinks}
        </ul>
        <p><a href="blog.php">View all Hudson Valley tick prevention resources</a></p>
    </section>

    <!-- CLOSING -->
    <section class="section" tabindex="0" id="conclusion">
        <h2>Stay Safe Outdoors in {$town['name']}</h2>
        <p>The Hudson Valley offers incredible outdoor opportunities, and {$town['name']} is no exception. By following these tick prevention strategies, you can safely enjoy all that {$town['name']} and {$town['county']} County have to offer.</p>

        <div class="highlight">
            <strong>Remember:</strong> The best tick bite is the one that never happens. Prevention is always easier than treatment.
        </div>
    </section>
HTML;

// Include the master template
include __DIR__ . '/template.php';
?>
