<?php
/**
 * EARLY SIGNS OF LYME DISEASE PAGE
 *
 * Health guide covering early symptoms and what to watch for
 */

require_once 'jsonld-helpers.php';

// PAGE TITLE - Shows in browser tab and Google search
$pageTitle = 'Early Signs of Lyme Disease: What You Need to Know | Hudson Valley Ticks';

// PAGE DESCRIPTION - Shows under title in Google search results (keep under 160 characters)
$pageDescription = 'Recognize early signs of Lyme disease beyond the bulls-eye rash. Symptoms appear 3-30 days after tick bite. Know when to call your doctor immediately.';

// JSON-LD structured data for medical article
$jsonLdSchemas = [
    // Article schema
    generateArticleSchema(
        'Early Signs of Lyme Disease: What You Need to Know',
        'Recognize early signs of Lyme disease beyond the bulls-eye rash. Symptoms appear 3-30 days after tick bite.',
        '2025-10-18',
        '2025-10-18'
    ),
    // Medical web page schema
    generateMedicalWebPageSchema(
        'Early Signs of Lyme Disease',
        'Complete guide to recognizing early Lyme disease symptoms including the bulls-eye rash, flu-like symptoms, and neurological signs.',
        '2025-10-18',
        '2025-10-18',
        ['Lyme Disease', 'Erythema Migrans', 'Tick-Borne Disease']
    ),
    // FAQ schema for common questions
    generateFAQSchema([
        [
            'question' => 'When do Lyme disease symptoms appear after a tick bite?',
            'answer' => 'Lyme disease symptoms typically appear 3-30 days after a tick bite, with most symptoms developing within 7-14 days.'
        ],
        [
            'question' => 'Does everyone with Lyme disease get a bulls-eye rash?',
            'answer' => 'No, only 60-80% of Lyme disease patients develop the characteristic bulls-eye rash (erythema migrans). The absence of a rash does not mean you do not have Lyme disease.'
        ],
        [
            'question' => 'What are the early flu-like symptoms of Lyme disease?',
            'answer' => 'Early flu-like symptoms include fever (100-102F), chills, fatigue, body aches, headache, joint pain, and muscle pain.'
        ]
    ]),
    // Breadcrumb
    generateBreadcrumbSchema([
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'Blog', 'url' => '/blog.php'],
        ['name' => 'Early Signs of Lyme Disease', 'url' => '/early-signs-of-lyme-disease.php']
    ])
];

// PAGE CONTENT - Everything between the hero section and footer
$pageContent = <<<'HTML'
    <!-- HERO SECTION -->
    <section class="hero">
        <h1>Early Signs of Lyme Disease: What You Need to Know</h1>
        <p>October 18, 2025 • 7 min read • Category: Health</p>
    </section>

    <!-- INTRO SECTION -->
    <section class="section" tabindex="0" id="intro">
        <div class="intro-box">
            <strong>🔴 Critical Fact:</strong> Not everyone gets a bulls-eye rash. Studies show only 60-80% of Lyme disease patients develop the characteristic rash.
        </div>

        <p>You found a tick and removed it. Now you're waiting. What symptoms should you watch for? In the Hudson Valley, where Lyme disease is endemic, knowing what to look for in the first 3-30 days after a tick bite could be lifesaving. Early treatment with antibiotics is highly effective, but only if you recognize the symptoms.</p>
    </section>

    <!-- TIMELINE -->
    <section class="section" tabindex="0" id="timeline">
        <h2>Timeline: When Lyme Symptoms Appear</h2>
        <p>Lyme disease symptoms don't appear immediately. Here's what the CDC tells us about timing:</p>
        <ul>
            <li><strong>3-5 days:</strong> Earliest symptoms may begin (rash, fatigue)</li>
            <li><strong>7-14 days:</strong> Most common window for initial symptoms</li>
            <li><strong>3-30 days:</strong> Full range for early Lyme symptoms to appear</li>
        </ul>

        <div class="warning">
            <strong>⚠️ Common Mistake:</strong> Waiting weeks to see a doctor if you feel fine. Some people carry Lyme disease for months before seeking treatment, leading to more serious complications. If you were bitten and start experiencing ANY symptoms below, seek medical attention immediately—don't wait.
        </div>
    </section>

    <!-- BULLSEYE RASH -->
    <section class="section" tabindex="0" id="bullseye-rash">
        <h2>The Bulls-Eye Rash (Erythema Migrans)</h2>
        <p>The bulls-eye rash is the most recognizable sign of Lyme disease, but it's important to know what it actually looks like:</p>

        <h3>What to Look For</h3>
        <ul>
            <li><strong>Location:</strong> Usually appears at or near the tick bite site</li>
            <li><strong>Shape:</strong> Red expanding ring with a clear center</li>
            <li><strong>Size:</strong> Starts small but expands outward (can reach 12 inches or larger)</li>
            <li><strong>Timeline:</strong> Appears within 3-30 days of infection</li>
            <li><strong>Feel:</strong> Usually flat, not raised or itchy</li>
        </ul>

        <div class="highlight">
            <strong>💡 Pro Tip:</strong> Not everyone gets a bulls-eye rash. So the absence of a rash does NOT mean you don't have Lyme disease. Watch for other symptoms!
        </div>
    </section>

    <!-- SYMPTOMS BEYOND RASH -->
    <section class="section" tabindex="0" id="symptoms-beyond-rash">
        <h2>Early Lyme Symptoms Beyond the Rash</h2>

        <h3>Flu-Like Symptoms</h3>
        <p>The most common early symptoms of Lyme disease mimic the flu:</p>
        <ul>
            <li>Fever (often 100-102°F)</li>
            <li>Chills</li>
            <li>Fatigue and body aches</li>
            <li>Headache</li>
            <li>Joint pain (especially knees, hips, shoulders)</li>
            <li>Muscle pain</li>
        </ul>

        <h3>Neurological Symptoms</h3>
        <p>Early Lyme can affect your nervous system:</p>
        <ul>
            <li>Severe headache or stiff neck</li>
            <li>Meningitis-like symptoms</li>
            <li>Bell's palsy (facial paralysis on one side)</li>
            <li>Numbness or tingling</li>
            <li>Nerve pain</li>
        </ul>

        <h3>Cardiac Symptoms</h3>
        <p>Some people experience heart-related effects (less common but serious):</p>
        <ul>
            <li>Chest pain</li>
            <li>Palpitations</li>
            <li>Shortness of breath</li>
            <li>Heart block (in severe cases)</li>
        </ul>

        <div class="warning">
            <strong>🔴 Critical:</strong> If you experience any chest pain or severe shortness of breath after a tick bite, seek emergency medical care immediately.
        </div>
    </section>

    <!-- POST-LYME -->
    <section class="section" tabindex="0" id="post-lyme">
        <h2>Post-Lyme Disease Syndrome (PLDS)</h2>
        <p>Even with treatment, some people experience persistent symptoms weeks or months later. This is called Post-Lyme Disease Syndrome and may include:</p>
        <ul>
            <li>Persistent fatigue</li>
            <li>Chronic joint pain</li>
            <li>Cognitive difficulties ("brain fog")</li>
            <li>Sleep disturbances</li>
            <li>Concentration problems</li>
        </ul>
    </section>

    <!-- WHAT TO DO -->
    <section class="section" tabindex="0" id="what-to-do">
        <h2>What to Do If You Experience These Symptoms</h2>

        <h3>Step 1: Seek Medical Care</h3>
        <p>Contact your doctor or visit an urgent care facility. Tell them you were potentially exposed to ticks. Lyme disease is diagnosed through clinical presentation and blood tests (though early blood tests may be negative).</p>

        <h3>Step 2: Early Antibiotic Treatment</h3>
        <p>Early Lyme disease is highly treatable with antibiotics, typically doxycycline, amoxicillin, or cefuroxime. Starting treatment within the first 30 days significantly reduces the risk of complications.</p>

        <h3>Step 3: Monitor Closely</h3>
        <p>Keep track of all symptoms and how they progress. Take photos of any rash. Document when symptoms started relative to the tick bite.</p>

        <div class="highlight">
            <strong>💡 Pro Tip:</strong> Find a Lyme-fluent doctor in the Hudson Valley. Not all physicians are equally knowledgeable about tick-borne illness. The right doctor will take your symptoms seriously and provide appropriate treatment.
        </div>
    </section>

    <!-- PREVENTION -->
    <section class="section" tabindex="0" id="prevention">
        <h2>Prevention: Your Best Defense</h2>
        <p>The best treatment for Lyme disease is prevention. Proper tick removal is critical for reducing infection risk:</p>

        <div class="product-card">
            <h3 class="product-name">Tick Twister 2-Pack</h3>
            <div class="product-rating">★★★★★ 4.7/5 (3,200+ reviews)</div>
            <div class="product-price">$6–$8</div>
            <p class="product-description"><strong>Why it works:</strong> The Tick Twister is designed by a French veterinarian specifically for safe tick removal. The unique shape allows you to remove ticks without squeezing them (which can increase Lyme transmission). Quick, effective, and recommended by vets and doctors. Keep one in your home, car, and backpack.</p>
            <a href="https://www.amazon.com/Tick-Twister-Removal-Tool-Pack/dp/B01BECRHEO?linkCode=ll1&tag=hudsonvalleyt-20&linkId=&language=en_US&ref_=as_li_ss_tl" class="amazon-button" target="_blank" rel="noopener noreferrer">View on Amazon →</a>
        </div>
    </section>

    <!-- CONCLUSION -->
    <section class="section" tabindex="0" id="conclusion">
        <h2>Conclusion</h2>
        <p>Knowledge is your first line of defense against Lyme disease. While the bulls-eye rash is a classic sign, don't rely on it—watch for flu-like symptoms, fatigue, joint pain, and neurological symptoms in the weeks after a tick bite.</p>
        <p>If you think you might have Lyme disease, seek medical attention promptly. Early treatment is highly effective and can prevent serious long-term complications.</p>

        <div class="highlight">
            <strong>🛡️ Bottom Line:</strong> In the Hudson Valley, ticks and Lyme disease are a real concern. Stay vigilant, practice prevention, and know the early warning signs. When in doubt, contact your doctor.
        </div>
    </section>
HTML;

// ============================================
// DO NOT EDIT BELOW THIS LINE
// ============================================
// This includes the master template that wraps your content
include 'template.php';
?>
