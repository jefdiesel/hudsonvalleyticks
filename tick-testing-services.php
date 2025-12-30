<?php
require_once 'jsonld-helpers.php';

$pageTitle = 'Tick Testing Services | Get Your Tick Tested for Lyme Disease';
$pageDescription = 'Send your tick to a lab to test for Lyme disease and other tick-borne illnesses. Fast results, accurate testing, peace of mind.';
$ogType = 'article';

$jsonLdSchemas = [
    generateArticleSchema(
        'Tick Testing Services - Should You Get Your Tick Tested?',
        'Complete guide to tick testing services. Learn when to test, which labs to use, and how to interpret results.',
        '2025-01-01',
        '2025-01-01'
    ),
    generateFAQSchema([
        [
            'question' => 'Should I get a tick tested after a bite?',
            'answer' => 'Testing a tick can provide peace of mind and early warning. If the tick tests positive, you can discuss prophylactic treatment with your doctor before symptoms appear.'
        ],
        [
            'question' => 'How much does tick testing cost?',
            'answer' => 'Basic tick testing costs $50-75 for Lyme disease only. Comprehensive panels testing for multiple pathogens cost $150-200.'
        ],
        [
            'question' => 'How long does tick testing take?',
            'answer' => 'Most labs return results within 1-3 business days after receiving your tick sample.'
        ],
        [
            'question' => 'Can you test a dead tick?',
            'answer' => 'Yes, dead ticks can be tested as long as they are relatively intact and not decomposed. Place the tick in a sealed bag or container.'
        ]
    ]),
    generateBreadcrumbSchema([
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'Tick Testing Services', 'url' => '/tick-testing-services.php']
    ])
];

$pageContent = <<<'HTML'
<section class="hero">
    <h1>Tick Testing Services</h1>
    <p>Get your tick tested for Lyme disease and other tick-borne pathogens</p>
</section>

<section class="section">
    <div class="intro-box">
        <strong>🔬 Why Test a Tick?</strong><br>
        Testing the tick that bit you can provide early warning of infection—often before symptoms appear. If the tick tests positive, your doctor can consider prophylactic treatment.
    </div>

    <h2>Top Tick Testing Labs</h2>
    <p>We recommend these accredited labs based on accuracy, speed, and price:</p>

    <div class="product-grid">
        <article class="product-card">
            <span class="product-number">1</span>
            <h3 class="product-name">TickCheck (Recommended)</h3>
            <div class="product-rating">★★★★★ 4.8/5 (2,000+ reviews)</div>
            <div class="product-price">$50 - $200</div>
            <p class="product-description">The most popular tick testing service in the US. Fast 1-3 day results with DNA-based PCR testing. Tests for Lyme, Anaplasma, Babesia, Bartonella, Ehrlichia, and more.</p>
            <ul class="product-features">
                <li>DNA PCR testing (most accurate)</li>
                <li>Results in 1-3 business days</li>
                <li>Tests for 10+ pathogens</li>
                <li>Free tick identification</li>
                <li>Doctor consultation available</li>
            </ul>
            <a href="https://www.tickcheck.com/?ref=hudsonvalleyticks" class="amazon-button" target="_blank" rel="noopener sponsored">Get Your Tick Tested →</a>
        </article>

        <article class="product-card">
            <span class="product-number">2</span>
            <h3 class="product-name">TickReport (UMass)</h3>
            <div class="product-rating">★★★★★ 4.7/5</div>
            <div class="product-price">$50 - $200</div>
            <p class="product-description">University of Massachusetts Amherst's tick testing laboratory. Academic-quality PCR testing with detailed pathogen reports.</p>
            <ul class="product-features">
                <li>University laboratory standards</li>
                <li>PCR molecular testing</li>
                <li>Detailed pathogen report</li>
                <li>Research-backed protocols</li>
            </ul>
            <a href="https://www.tickreport.com" class="amazon-button" target="_blank" rel="noopener">Visit TickReport →</a>
        </article>

        <article class="product-card">
            <span class="product-number">3</span>
            <h3 class="product-name">IGeneX Laboratory</h3>
            <div class="product-rating">★★★★☆ 4.5/5</div>
            <div class="product-price">$75 - $300</div>
            <p class="product-description">Specialized Lyme disease laboratory offering the most comprehensive tick-borne disease testing. Preferred by Lyme-literate doctors.</p>
            <ul class="product-features">
                <li>Most comprehensive panel</li>
                <li>Tests for rare co-infections</li>
                <li>ImmunoBlot technology</li>
                <li>CLIA-certified laboratory</li>
            </ul>
            <a href="https://igenex.com" class="amazon-button" target="_blank" rel="noopener">Visit IGeneX →</a>
        </article>
    </div>
</section>

<section class="section">
    <h2>When Should You Test a Tick?</h2>

    <div class="highlight">
        <strong>Consider testing if:</strong>
        <ul>
            <li>The tick was attached for more than 24 hours</li>
            <li>The tick was engorged (swollen with blood)</li>
            <li>You live in a high-risk area like the Hudson Valley</li>
            <li>You want peace of mind before waiting for symptoms</li>
            <li>You're considering prophylactic antibiotics</li>
        </ul>
    </div>

    <h3>What Pathogens Can Be Tested?</h3>
    <ul>
        <li><strong>Borrelia burgdorferi</strong> - Lyme disease</li>
        <li><strong>Anaplasma phagocytophilum</strong> - Anaplasmosis</li>
        <li><strong>Babesia microti</strong> - Babesiosis</li>
        <li><strong>Ehrlichia species</strong> - Ehrlichiosis</li>
        <li><strong>Bartonella species</strong> - Bartonellosis</li>
        <li><strong>Rickettsia species</strong> - Rocky Mountain Spotted Fever</li>
        <li><strong>Powassan virus</strong> - Powassan encephalitis</li>
        <li><strong>Borrelia miyamotoi</strong> - Relapsing fever</li>
    </ul>
</section>

<section class="section">
    <h2>How to Submit a Tick for Testing</h2>

    <ol>
        <li><strong>Remove the tick carefully</strong> - Use fine-tipped tweezers, grasp close to the skin, pull straight up</li>
        <li><strong>Save the tick</strong> - Place in a sealed plastic bag or small container</li>
        <li><strong>Keep it moist</strong> - Add a damp cotton ball or paper towel (don't submerge)</li>
        <li><strong>Store properly</strong> - Refrigerate if mailing within 72 hours; freeze if longer</li>
        <li><strong>Order your test kit</strong> - Labs provide prepaid mailers and instructions</li>
        <li><strong>Mail the tick</strong> - Use the provided packaging and send via regular mail</li>
        <li><strong>Get results</strong> - Typically 1-3 business days after the lab receives your tick</li>
    </ol>

    <div class="warning">
        <strong>⚠️ Important:</strong> Tick testing tells you what the tick was carrying—not whether you were infected. A positive result means the tick could have transmitted disease. A negative result doesn't guarantee you're safe. Always monitor for symptoms and consult a doctor.
    </div>
</section>

<section class="section">
    <h2>Understanding Your Results</h2>

    <h3>If the Tick Tests Positive</h3>
    <ul>
        <li>Contact your healthcare provider immediately</li>
        <li>Discuss prophylactic antibiotic treatment (single dose of doxycycline)</li>
        <li>Monitor for symptoms over the next 30 days</li>
        <li>Consider follow-up blood testing at 4-6 weeks</li>
    </ul>

    <h3>If the Tick Tests Negative</h3>
    <ul>
        <li>Lower risk but not zero risk (testing isn't 100% sensitive)</li>
        <li>Still monitor for symptoms: fever, rash, joint pain, fatigue</li>
        <li>Seek medical attention if any symptoms develop</li>
    </ul>
</section>

<section class="section">
    <h2>Free Tick Identification</h2>
    <p>Not sure what kind of tick bit you? Many labs offer free tick identification. You can also use these resources:</p>
    <ul>
        <li><a href="https://www.cdc.gov/ticks/tickbornediseases/tickID.html" target="_blank" rel="noopener">CDC Tick Identification Guide</a></li>
        <li><a href="https://www.tickencounter.org/tick_identification" target="_blank" rel="noopener">TickEncounter Resource Center</a></li>
    </ul>

    <h3>Common Hudson Valley Ticks</h3>
    <ul>
        <li><strong>Blacklegged tick (deer tick)</strong> - Primary carrier of Lyme disease</li>
        <li><strong>American dog tick</strong> - Can carry Rocky Mountain Spotted Fever</li>
        <li><strong>Lone star tick</strong> - Increasingly common in the region</li>
    </ul>
</section>

<section class="section">
    <h2>Frequently Asked Questions</h2>

    <div class="faq-item">
        <h3>Should I get a tick tested after a bite?</h3>
        <p>Testing a tick can provide peace of mind and early warning. If the tick tests positive, you can discuss prophylactic treatment with your doctor before symptoms appear.</p>
    </div>

    <div class="faq-item">
        <h3>How much does tick testing cost?</h3>
        <p>Basic tick testing costs $50-75 for Lyme disease only. Comprehensive panels testing for multiple pathogens cost $150-200.</p>
    </div>

    <div class="faq-item">
        <h3>How long does tick testing take?</h3>
        <p>Most labs return results within 1-3 business days after receiving your tick sample.</p>
    </div>

    <div class="faq-item">
        <h3>Can you test a dead tick?</h3>
        <p>Yes, dead ticks can be tested as long as they are relatively intact and not decomposed. Place the tick in a sealed bag or container.</p>
    </div>
</section>

<section class="section">
    <div class="highlight">
        <h2>Quick Action Guide</h2>
        <ol>
            <li>Remove and save the tick</li>
            <li>Take a photo for identification</li>
            <li>Order a test kit from <a href="https://www.tickcheck.com/?ref=hudsonvalleyticks" target="_blank" rel="noopener sponsored">TickCheck</a></li>
            <li>Mail the tick using the prepaid packaging</li>
            <li>Get results in 1-3 days</li>
            <li>Share results with your doctor</li>
        </ol>
    </div>
</section>
HTML;

include 'template.php';
?>
