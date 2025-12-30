<?php
/**
 * TOWN LYME DISEASE TEMPLATE
 *
 * This template generates Lyme disease information pages for individual towns.
 * It requires $townSlug to be set before including this file.
 *
 * Usage:
 * $townSlug = 'poughkeepsie';
 * include 'town-lyme-disease-template.php';
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
$pageTitle = 'Lyme Disease in ' . $town['name'] . ', NY | Hudson Valley Ticks';
$pageDescription = 'Lyme disease information for ' . $town['name'] . ', ' . $town['county'] . ' County, NY. Learn about symptoms, prevention, and treatment for Lyme disease in the Hudson Valley region.';

// Get risk level display
$riskText = getRiskLevelText($town['risk_level']);
$riskClass = $town['risk_level'] === 'very_high' ? 'warning' : 'highlight';

// Build parks list for context
$parksContext = implode(', ', array_slice($town['parks'], 0, 3));

// Get nearby towns in same county for internal linking
$countyTowns = getTownsByCounty($town['county']);
$nearbyLinks = '';
$count = 0;
foreach ($countyTowns as $slug => $nearbyTown) {
    if ($slug !== $townSlug && $count < 5) {
        $nearbyLinks .= '<li><a href="' . $slug . '-lyme-disease.php">' . $nearbyTown['name'] . ' Lyme Disease Info</a></li>';
        $count++;
    }
}

$pageContent = <<<HTML
    <!-- HERO SECTION -->
    <section class="hero">
        <h1>Lyme Disease in {$town['name']}, NY</h1>
        <p>Essential information for {$town['county']} County residents and visitors</p>
    </section>

    <!-- RISK ASSESSMENT -->
    <section class="section" tabindex="0" id="risk-level">
        <div class="{$riskClass}">
            <strong>Lyme Disease Risk Level for {$town['name']}: {$riskText}</strong><br>
            {$town['county']} County is in the endemic zone for Lyme disease. {$town['description']}
        </div>
    </section>

    <!-- INTRODUCTION -->
    <section class="section" tabindex="0" id="intro">
        <h2>Understanding Lyme Disease in {$town['name']}</h2>
        <p>Lyme disease is the most common vector-borne illness in the United States, and the Hudson Valley region - including {$town['name']} in {$town['county']} County - has among the highest infection rates in the country.</p>

        <p>Lyme disease is caused by the bacterium <em>Borrelia burgdorferi</em>, transmitted through the bite of infected blacklegged ticks (deer ticks). {$town['name']}'s outdoor areas, including {$parksContext}, are home to tick populations that may carry this disease.</p>

        <div class="intro-box">
            <strong>Why {$town['name']} Residents Should Be Informed:</strong>
            <ul>
                <li>New York State reports thousands of Lyme disease cases annually</li>
                <li>{$town['county']} County consistently ranks among high-incidence areas</li>
                <li>Early detection and treatment leads to the best outcomes</li>
                <li>Many infections occur in residential yards, not just wilderness areas</li>
            </ul>
        </div>
    </section>

    <!-- SYMPTOMS -->
    <section class="section" tabindex="0" id="symptoms">
        <h2>Lyme Disease Symptoms</h2>
        <p>Lyme disease symptoms can vary and may appear 3-30 days after a tick bite. {$town['name']} residents should watch for these signs:</p>

        <h3>Early Localized Stage (3-30 days)</h3>
        <ul>
            <li><strong>Erythema Migrans (EM) Rash:</strong> Occurs in 70-80% of cases. An expanding red rash that may look like a bullseye, typically 5+ inches across</li>
            <li><strong>Flu-like Symptoms:</strong> Fever, chills, fatigue, body aches, and headache</li>
            <li><strong>Swollen Lymph Nodes:</strong> Near the bite area</li>
        </ul>

        <div class="warning">
            <strong>Important:</strong> Not everyone with Lyme disease develops a rash. Some rashes don't have the classic bullseye appearance. Don't wait for a rash to seek medical care if you have other symptoms after a tick bite.
        </div>

        <h3>Early Disseminated Stage (days to weeks)</h3>
        <p>If untreated, the infection can spread, causing:</p>
        <ul>
            <li>Multiple EM rashes on other parts of the body</li>
            <li>Facial palsy (drooping on one or both sides)</li>
            <li>Severe headaches and neck stiffness (meningitis)</li>
            <li>Heart palpitations or irregular heartbeat (Lyme carditis)</li>
            <li>Shooting pains, numbness, or tingling</li>
            <li>Eye inflammation</li>
        </ul>

        <h3>Late Disseminated Stage (months to years)</h3>
        <p>Untreated Lyme disease can cause long-term problems:</p>
        <ul>
            <li><strong>Lyme Arthritis:</strong> Severe joint pain and swelling, especially in the knees</li>
            <li><strong>Neurological Problems:</strong> Numbness, tingling, memory issues</li>
            <li><strong>Chronic Symptoms:</strong> Ongoing fatigue, pain, and cognitive difficulties</li>
        </ul>
    </section>

    <!-- DIAGNOSIS -->
    <section class="section" tabindex="0" id="diagnosis">
        <h2>Lyme Disease Diagnosis in {$town['name']}</h2>
        <p>If you suspect Lyme disease, consult a healthcare provider promptly. Diagnosis typically involves:</p>

        <h3>Clinical Evaluation</h3>
        <ul>
            <li>Review of symptoms and their timeline</li>
            <li>Physical examination for rash and other signs</li>
            <li>Assessment of tick exposure history (visiting {$town['name']} outdoor areas, yard work, etc.)</li>
        </ul>

        <h3>Laboratory Testing</h3>
        <p>The CDC recommends a two-tiered testing approach:</p>
        <ol>
            <li><strong>First Tier:</strong> Enzyme immunoassay (EIA) or immunofluorescence assay (IFA)</li>
            <li><strong>Second Tier:</strong> Western blot test to confirm positive or equivocal first-tier results</li>
        </ol>

        <div class="highlight">
            <strong>Testing Considerations:</strong>
            <ul>
                <li>Antibodies may take 2-6 weeks to develop after infection</li>
                <li>Early treatment based on symptoms may begin before tests are positive</li>
                <li>A negative test doesn't rule out early Lyme disease</li>
            </ul>
        </div>

        <h3>Finding Healthcare in {$town['county']} County</h3>
        <p>If you need medical care for a potential tick-borne illness:</p>
        <ul>
            <li>Contact your primary care physician</li>
            <li>Visit an urgent care center for prompt evaluation</li>
            <li>In emergencies, go to the nearest emergency room</li>
            <li>Consider consulting an infectious disease specialist for complex cases</li>
        </ul>
    </section>

    <!-- TREATMENT -->
    <section class="section" tabindex="0" id="treatment">
        <h2>Lyme Disease Treatment</h2>
        <p>The good news: Lyme disease is treatable, especially when caught early. Most patients recover fully with appropriate antibiotic therapy.</p>

        <h3>Early Stage Treatment</h3>
        <ul>
            <li><strong>Doxycycline:</strong> First-line treatment for adults and children over 8</li>
            <li><strong>Amoxicillin:</strong> Alternative for younger children, pregnant women</li>
            <li><strong>Cefuroxime:</strong> Another alternative option</li>
            <li><strong>Duration:</strong> Typically 10-21 days depending on the stage</li>
        </ul>

        <h3>Later Stage Treatment</h3>
        <ul>
            <li>May require longer courses of oral antibiotics</li>
            <li>Some cases (Lyme carditis, neurological Lyme) may need IV antibiotics</li>
            <li>Lyme arthritis may require extended treatment</li>
        </ul>

        <div class="strategy-box">
            <strong>Treatment Success Factors:</strong>
            <ul>
                <li>Earlier treatment generally leads to faster, more complete recovery</li>
                <li>Complete the full course of antibiotics as prescribed</li>
                <li>Follow up with your healthcare provider as recommended</li>
                <li>Report any persistent or new symptoms</li>
            </ul>
        </div>

        <h3>Post-Treatment Lyme Disease Syndrome (PTLDS)</h3>
        <p>Some patients experience ongoing symptoms after treatment, including fatigue, pain, and cognitive difficulties. This is sometimes called chronic Lyme disease or PTLDS. Research into causes and treatments is ongoing.</p>
    </section>

    <!-- PREVENTION -->
    <section class="section" tabindex="0" id="prevention">
        <h2>Preventing Lyme Disease in {$town['name']}</h2>
        <p>Prevention is the best strategy against Lyme disease. When enjoying {$town['name']}'s outdoor areas, take these precautions:</p>

        <h3>Personal Protection</h3>
        <ul>
            <li>Use EPA-registered tick repellents (DEET, picaridin, oil of lemon eucalyptus)</li>
            <li>Treat clothing and gear with 0.5% permethrin</li>
            <li>Wear long pants, long sleeves, and closed-toe shoes</li>
            <li>Tuck pants into socks when hiking</li>
            <li>Stay on marked trails at {$town['name']}'s parks</li>
        </ul>

        <h3>After Outdoor Activities</h3>
        <ul>
            <li>Shower within 2 hours of coming indoors</li>
            <li>Perform a full-body tick check</li>
            <li>Check children and pets</li>
            <li>Tumble dry clothes on high heat</li>
        </ul>

        <h3>Yard and Home</h3>
        <ul>
            <li>Keep lawns mowed short</li>
            <li>Create tick-safe zones with wood chips or gravel</li>
            <li>Remove leaf litter and brush piles</li>
            <li>Discourage deer from entering your yard</li>
        </ul>

        <p>For comprehensive prevention strategies, visit our <a href="{$town['slug']}-tick-prevention.php">{$town['name']} Tick Prevention Guide</a>.</p>
    </section>

    <!-- OTHER TICK-BORNE DISEASES -->
    <section class="section" tabindex="0" id="other-diseases">
        <h2>Other Tick-Borne Diseases in {$town['county']} County</h2>
        <p>While Lyme disease is the most common, {$town['name']} residents should also be aware of other tick-borne illnesses found in New York:</p>

        <h3>Anaplasmosis</h3>
        <p>Transmitted by the same blacklegged tick that spreads Lyme disease. Symptoms include fever, headache, muscle pain, and chills. Treatable with doxycycline.</p>

        <h3>Babesiosis</h3>
        <p>A parasitic infection that can range from asymptomatic to severe. Can be particularly dangerous for elderly or immunocompromised individuals.</p>

        <h3>Ehrlichiosis</h3>
        <p>Causes fever, headache, fatigue, and muscle aches. Treatable with doxycycline.</p>

        <h3>Powassan Virus</h3>
        <p>Rare but serious. Can cause encephalitis. No specific treatment available, so prevention is critical.</p>

        <div class="warning">
            <strong>Co-infections:</strong> It's possible to contract multiple tick-borne diseases from a single tick bite. Report all symptoms to your healthcare provider.
        </div>
    </section>

    <!-- LOCAL RESOURCES -->
    <section class="section" tabindex="0" id="resources">
        <h2>Lyme Disease Resources for {$town['name']} Residents</h2>

        <h3>{$town['county']} County Health Department</h3>
        <p>Your local health department offers tick testing, disease surveillance, and educational resources.</p>

        <h3>New York State Department of Health</h3>
        <p>Provides statewide Lyme disease statistics, prevention information, and healthcare resources. Visit <a href="https://www.health.ny.gov/diseases/communicable/lyme/" target="_blank" rel="noopener">NY DOH Lyme Disease page</a>.</p>

        <h3>CDC Lyme Disease Resources</h3>
        <p>The Centers for Disease Control offers comprehensive information at <a href="https://www.cdc.gov/lyme/" target="_blank" rel="noopener">CDC Lyme Disease</a>.</p>

        <h3>Hudson Valley Ticks Resources</h3>
        <ul>
            <li><a href="{$town['slug']}-tick-prevention.php">{$town['name']} Tick Prevention Guide</a></li>
            <li><a href="early-signs-of-lyme-disease.php">Early Signs of Lyme Disease</a></li>
            <li><a href="how-to-safely-remove-a-tick.php">How to Safely Remove a Tick</a></li>
            <li><a href="tick-types-hudson-valley-identification.php">Tick Identification Guide</a></li>
            <li><a href="tick-prevention-gear.php">Tick Prevention Gear</a></li>
        </ul>
    </section>

    <!-- NEARBY TOWNS -->
    <section class="section" tabindex="0" id="nearby">
        <h2>Lyme Disease Information for Nearby {$town['county']} County Towns</h2>
        <ul>
            {$nearbyLinks}
        </ul>
        <p><a href="blog.php">View all Hudson Valley tick and Lyme disease resources</a></p>
    </section>

    <!-- CLOSING -->
    <section class="section" tabindex="0" id="conclusion">
        <h2>Stay Informed, Stay Protected in {$town['name']}</h2>
        <p>Lyme disease is a serious concern in the Hudson Valley, but with proper awareness and prevention, {$town['name']} residents can safely enjoy the beautiful outdoors that make this region special.</p>

        <div class="highlight">
            <strong>Key Takeaways:</strong>
            <ul>
                <li>Know the symptoms and seek prompt medical care if you suspect Lyme disease</li>
                <li>Early treatment leads to the best outcomes</li>
                <li>Prevention through tick avoidance is your best defense</li>
                <li>Stay informed about tick-borne diseases in {$town['county']} County</li>
            </ul>
        </div>
    </section>
HTML;

// Include the master template
include __DIR__ . '/template.php';
?>
