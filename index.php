<?php
/**
 * HUDSON VALLEY TICKS HOME PAGE
 * Evidence-based tick information and treatment resources
 */

require_once 'jsonld-helpers.php';

$pageTitle = 'Hudson Valley Ticks | Evidence-Based Tick Information & Treatment Resources';
$pageDescription = 'Tick prevention for Hudson Valley. Learn CDC-approved methods to prevent Lyme disease with expert tips, product reviews, and outdoor safety guides today.';

// Homepage JSON-LD structured data
$jsonLdSchemas = [
    // Organization schema
    generateOrganizationSchema(),
    // WebSite schema with SearchAction
    generateWebSiteSchema(),
    // LocalBusiness schema for Hudson Valley area
    generateLocalBusinessSchema(),
    // Breadcrumb for homepage
    generateBreadcrumbSchema([
        ['name' => 'Home', 'url' => '/']
    ])
];

$pageContent = <<<'HTML'
    <section class="hero">
        <h1>Hudson Valley Tick Bite Information</h1>
        <p>Evidence-based guide to understanding and treating tick bite reactions</p>
    </section>

    <section class="section" tabindex="0">
        <div class="alert">
            <strong>⚠️ If you've been suffering for weeks with itchy hives after outdoor activity in the Hudson Valley, you're not alone.</strong> Tick bites—especially from larval ticks (seed ticks)—trigger prolonged immune reactions that doctors often misdiagnose. This site provides the medical evidence you need to get proper treatment.
        </div>
    </section>

    <section class="section" id="what-are-seed-ticks" tabindex="0">
        <h2>What Are Seed Ticks?</h2>
        <p>Seed ticks are <strong>larval stage ticks</strong> that are nearly microscopic (about the size of a poppy seed or freckle - only 1/32 inch). They have 6 legs instead of the 8 legs that adult ticks have, making them a different life stage entirely.</p>
        
        <div class="highlight">
            <h3>Key Facts:</h3>
            <ul>
                <li><strong>Size:</strong> 0.5-1mm - almost impossible to see without magnification</li>
                <li><strong>Behavior:</strong> Attack in massive clusters (hundreds to thousands at once)</li>
                <li><strong>Season:</strong> Peak activity May through September in Hudson Valley</li>
                <li><strong>Location:</strong> Climb from ground vegetation, stopped by elastic clothing (waistbands, sock lines)</li>
            </ul>
        </div>

        <div class="myth-fact">
            <div class="myth">
                <strong>❌ MYTH:</strong> "Those are chiggers"
            </div>
            <div class="fact">
                <strong>✅ FACT:</strong> There are NO chiggers in New York State. What people call "chiggers" in the Hudson Valley are actually seed ticks (larval Lone Star or blacklegged ticks).
            </div>
        </div>
    </section>

    <section class="section" id="hudson-valley-tick-risks" tabindex="0">
        <h2>Hudson Valley Tick Risks</h2>
        <p>The Hudson Valley has some of the <strong>highest tick-borne disease rates in the United States</strong>. Understanding the local tick species is critical for proper treatment.</p>
        
        <h3>Common Hudson Valley Tick Species:</h3>
        <ul>
            <li><strong>Blacklegged Tick (Ixodes scapularis):</strong> 55% infected with Lyme disease bacteria, 13.3% carry multiple pathogens</li>
            <li><strong>Lone Star Tick (Amblyomma americanum):</strong> Rapidly expanding into region, extremely aggressive, can cause alpha-gal syndrome (red meat allergy)</li>
            <li><strong>Asian Longhorned Tick:</strong> Invasive species documented less than 20 miles from Hudson Valley locations</li>
        </ul>
        
        <h3>High-Risk Counties:</h3>
        <p>Putnam, Dutchess, Ulster, Orange, Rockland, and Westchester counties all have elevated tick populations and disease transmission rates.</p>
        
        <div class="highlight">
            <strong>Peak Season:</strong> Seed ticks are most active May-September, with July-August seeing the highest populations. Adult ticks are active spring and fall (March-May, October-November).
        </div>
    </section>

    <section class="section" id="larval-nymph-adult-ticks" tabindex="0">
        <h2>Larval vs. Nymph vs. Adult Ticks</h2>
        <p>Understanding the difference is crucial because the bite reactions are different:</p>
        
        <table>
            <tr>
                <th>Stage</th>
                <th>Size</th>
                <th>Legs</th>
                <th>Disease Risk</th>
                <th>Reaction</th>
            </tr>
            <tr>
                <td><strong>Larval (seed tick)</strong></td>
                <td>0.5-1mm</td>
                <td>6 legs</td>
                <td>Lower (first blood meal)</td>
                <td>Severe allergic reaction, clusters</td>
            </tr>
            <tr>
                <td><strong>Nymph</strong></td>
                <td>1-2mm</td>
                <td>8 legs</td>
                <td>HIGH (main Lyme transmitter)</td>
                <td>Often unnoticed</td>
            </tr>
            <tr>
                <td><strong>Adult</strong></td>
                <td>3-5mm</td>
                <td>8 legs</td>
                <td>Moderate-High</td>
                <td>Visible, can cause anaphylaxis</td>
            </tr>
        </table>
        
        <div class="highlight">
            <strong>Important:</strong> Seed ticks cause severe localized hypersensitivity reactions but are less likely to transmit disease. Nymph ticks are the main culprits for Lyme disease transmission. Adult ticks can trigger full anaphylactic reactions in sensitized individuals.
        </div>
    </section>

    <section class="section" id="why-reactions-last" tabindex="0">
        <h2>Why Reactions Last 3+ Weeks</h2>
        <p>This is where most doctors get it wrong. Seed tick bites aren't simple insect bites - they trigger a <strong>complex immune cascade</strong> that continues long after the ticks are gone.</p>
        
        <h3>The Science (Plain Talk):</h3>
        <div class="highlight">
            <p><strong>It's NOT about the tick still being there.</strong> When seed ticks feed, they inject proteins into your skin. These proteins act like a slow-release capsule that keeps stimulating your immune system for weeks.</p>
            
            <p>Your body launches two types of immune responses:</p>
            <ul>
                <li><strong>Fast response (IgE):</strong> Happens within hours - causes immediate itching and hives</li>
                <li><strong>Slow response (T-cells):</strong> Builds over days - keeps making new hives even weeks later</li>
            </ul>
            
            <p><strong>New hives appearing weeks later is NORMAL.</strong> This isn't a new infection or new bites - it's your immune system still reacting to proteins left behind from the original bites. Medical literature calls this "id reaction" or "hematogenous dissemination."</p>
        </div>

        <div class="myth-fact">
            <div class="myth">
                <strong>❌ MYTH:</strong> "It's mast cell activation syndrome"
            </div>
            <div class="fact">
                <strong>✅ FACT:</strong> While mast cells ARE involved, this is a normal immune response to tick proteins, not a mast cell disease. The reaction is localized to where antigens are present - it's not systemic MCAS.
            </div>
        </div>
    </section>

    <section class="section" id="disease-risk-prevention" tabindex="0">
        <h2>Disease Risk & Prevention</h2>
        <h3>Disease Transmission Risk:</h3>
        <p>Seed ticks have <strong>lower disease transmission risk</strong> than nymphs and adults because they haven't taken a blood meal yet. However, they can still carry:</p>
        <ul>
            <li>Rocky Mountain Spotted Fever (in some cases)</li>
            <li>Alpha-gal syndrome sensitization (Lone Star tick larvae)</li>
            <li>Very rare Lyme disease transmission</li>
        </ul>
        
        <div class="alert">
            <strong>Watch for these symptoms within 3 weeks of bites:</strong>
            <ul style="margin-top: 0.5rem;">
                <li>Bull's-eye rash (Lyme disease)</li>
                <li>Fever, chills, body aches</li>
                <li>Severe headache</li>
                <li>Joint pain</li>
            </ul>
            <p><strong>If you develop any of these, see a doctor immediately.</strong></p>
        </div>
        
        <h3>Prevention Tips:</h3>
        <ul>
            <li>Wear light-colored clothing to spot ticks easily</li>
            <li>Tuck pants into socks when walking in grassy or wooded areas</li>
            <li>Use permethrin spray on clothing (lasts through multiple washes)</li>
            <li>Apply DEET or picaridin to exposed skin</li>
            <li>Stay on trails, avoid brushing against vegetation</li>
            <li>Do full body tick checks after outdoor activity</li>
            <li>Shower within 2 hours of coming indoors</li>
            <li>Put clothes in dryer on high heat for 10 minutes to kill any ticks</li>
        </ul>
    </section>

    <section class="section" id="treatment-what-works" tabindex="0">
        <h2>Treatment: What Actually Works</h2>
        <p>Standard 6-day steroid packs <strong>consistently fail</strong> for seed tick reactions. Here's the evidence-based protocol:</p>
        
        <div class="treatment-box">
            <h3>🏥 Proper Treatment Protocol:</h3>
            
            <h4>1. Extended Steroid Taper (21+ Days)</h4>
            <p><strong>Prednisone taper example:</strong></p>
            <ul>
                <li>Days 1-5: 40-60mg daily</li>
                <li>Days 6-10: 30-40mg daily</li>
                <li>Days 11-15: 20-30mg daily</li>
                <li>Days 16-21: 10-20mg daily</li>
                <li>Final taper: 5-10mg for 3-5 days</li>
            </ul>
            <p><em>Note: 6-day Medrol dose packs and standard prednisone bursts cause rebound reactions because the immune response is still active when steroids stop.</em></p>
            
            <h4>2. Quadruple Antihistamine Therapy (4x H1/H2)</h4>
            <p>This is the key that most doctors miss. Standard once-daily Zyrtec isn't enough.</p>
            <ul>
                <li><strong>Morning:</strong> Cetirizine 10mg + Famotidine 20mg</li>
                <li><strong>Evening:</strong> Cetirizine 10mg + Famotidine 20mg</li>
                <li><strong>At bedtime (for severe itching):</strong> Hydroxyzine 25-50mg</li>
            </ul>
            <p><strong>Why H1 + H2?</strong> H1 blockers (cetirizine, hydroxyzine) stop itching. H2 blockers (famotidine) reduce inflammation and enhance H1 effectiveness. The combination is more effective than either alone.</p>
            
            <h4>3. Leukotriene Inhibitor</h4>
            <ul>
                <li><strong>Montelukast (Singulair) 10mg</strong> nightly</li>
                <li>Blocks a different inflammatory pathway than antihistamines</li>
                <li>Particularly helpful for persistent reactions</li>
            </ul>
            
            <h4>4. Duration</h4>
            <p>Continue full protocol for minimum 3-4 weeks, then taper antihistamines gradually. Do NOT stop everything suddenly.</p>
        </div>

        <div class="highlight">
            <h3>Why 6-Day Courses Fail:</h3>
            <p>When you stop steroids after only 6 days, your immune system "rebounds" - all the inflammatory cells that were suppressed suddenly become active again, often making reactions worse than before. The tick proteins are STILL in your tissue, so you need to suppress the immune response long enough for them to clear.</p>
        </div>
    </section>

    <section class="section" id="itch-management" tabindex="0">
        <h2>Itch Management Tips</h2>
        <p>Breaking the itch-scratch cycle is crucial for healing:</p>
        
        <div class="myth-fact">
            <div class="fact" style="background: #e8f5e9;">
                <h3>✅ DO:</h3>
                <ul>
                    <li>Apply cold compresses</li>
                    <li>Use colloidal oatmeal baths</li>
                    <li>Apply calamine lotion or hydrocortisone cream</li>
                    <li>Keep nails trimmed short</li>
                    <li>Wear loose, soft cotton clothing</li>
                    <li>Keep skin moisturized</li>
                    <li>Use distraction techniques when urge to scratch hits</li>
                </ul>
            </div>
            <div class="myth" style="background: #ffebee;">
                <h3>❌ DON'T:</h3>
                <ul>
                    <li>Take hot showers (makes itching worse)</li>
                    <li>Use harsh soaps</li>
                    <li>Scratch (causes more histamine release)</li>
                    <li>Drink alcohol (increases histamine)</li>
                    <li>Expose to heat or exercise that causes sweating</li>
                    <li>Wear tight clothing over affected areas</li>
                </ul>
            </div>
        </div>
        
        <div class="alert">
            <strong>💡 Pro Tip:</strong> Keep hydroxyzine available for nighttime. Take it 30-60 minutes before bed. It will make you drowsy (that's the point) and help you sleep through the worst itching.
        </div>
    </section>

    <section class="section" id="doctor-info" tabindex="0">
        <h2>📄 Doctor Information Sheet</h2>
        <p>Most doctors aren't familiar with prolonged papular urticaria from seed tick bites. This page includes:</p>
        <ul>
            <li>Peer-reviewed research citations</li>
            <li>Immunological mechanisms</li>
            <li>Evidence-based treatment protocols</li>
            <li>Differential diagnosis criteria</li>
            <li>Why standard 6-day steroid courses fail</li>
        </ul>
        
        <p style="margin-top: 1rem;"><em>Print this entire webpage or save as PDF (File → Print → Save as PDF) to share with your healthcare provider.</em></p>
    </section>

    <section class="section" id="medical-research" tabindex="0">
        <h2>📚 Published Medical Research</h2>
        <div class="sources">
            <h3>Key References:</h3>
            <ol>
                <li>NY State Health Department - Lyme Disease Risk Score Map:<br>
                <a href="https://www.health.ny.gov/diseases/communicable/lyme/risk_score_map.htm" target="_blank">https://www.health.ny.gov/diseases/communicable/lyme/risk_score_map.htm</a></li>
                
                <li>American Academy of Family Physicians - Arthropod Bite Reactions:<br>
                <a href="https://www.aafp.org/pubs/afp/issues/2013/1215/p841.html" target="_blank">https://www.aafp.org/pubs/afp/issues/2013/1215/p841.html</a></li>
                
                <li>NIH/PubMed Central - Skin Manifestations of Tick Bites in Humans:<br>
                <a href="https://pmc.ncbi.nlm.nih.gov/articles/PMC5916399/" target="_blank">https://pmc.ncbi.nlm.nih.gov/articles/PMC5916399/</a></li>
                
                <li>MDedge Dermatology - Larval Tick Infestation Case Report:<br>
                <a href="https://www.mdedge.com/dermatology/article/209634/infectious-diseases/larval-tick-infestation-causing-eruption-pruritic" target="_blank">https://www.mdedge.com/dermatology/article/209634</a></li>
                
                <li>Dermatology Times - Diagnosing and Treating Urticaria:<br>
                <a href="https://www.dermatologytimes.com/view/tips-diagnosing-treating-urticaria" target="_blank">https://www.dermatologytimes.com/view/tips-diagnosing-treating-urticaria</a></li>
                
                <li>PubMed - Tick Salivary Protein Immunology:<br>
                <a href="https://pubmed.ncbi.nlm.nih.gov/34722347/" target="_blank">https://pubmed.ncbi.nlm.nih.gov/34722347/</a></li>
                
                <li>Frontiers in Immunology - Basophil and Eosinophil Responses:<br>
                <a href="https://www.frontiersin.org/journals/immunology/articles/10.3389/fimmu.2020.601504/full" target="_blank">https://www.frontiersin.org/journals/immunology/articles/10.3389/fimmu.2020.601504/full</a></li>
                
                <li>PestMaster Hudson Valley - Local Tick Information:<br>
                <a href="https://www.pestmaster.com/hudson-valley/blog/what-to-do-about-the-ticks-plaguing-hudson-valley/" target="_blank">https://www.pestmaster.com/hudson-valley/blog/what-to-do-about-the-ticks-plaguing-hudson-valley/</a></li>
            </ol>
            
            <p style="margin-top: 1rem;"><strong>Geographic Confirmation:</strong> Suffolk County Health Department and Rhode Island Natural History Survey confirm NO chiggers exist in New York State. "Chigger" reports are misidentified larval ticks.</p>
        </div>
    </section>

    <section class="section" id="disclaimer" tabindex="0">
        <h2>⚠️ Medical Disclaimer</h2>
        <div class="disclaimer">
            <p><strong>This website provides educational information only and is not a substitute for professional medical advice, diagnosis, or treatment.</strong></p>
            
            <p>The information presented here is compiled from peer-reviewed medical literature and clinical case reports. However:</p>
            <ul style="margin-top: 0.5rem;">
                <li>Always seek the advice of your physician or qualified healthcare provider with any questions about a medical condition</li>
                <li>Never disregard professional medical advice or delay seeking it because of information on this website</li>
                <li>If you think you may have a medical emergency, call your doctor or 911 immediately</li>
                <li>Treatment protocols should be individualized by your healthcare provider based on your specific situation</li>
                <li>This site does not create a doctor-patient relationship</li>
            </ul>
            
            <p style="margin-top: 0.5rem;"><strong>Purpose:</strong> This site exists to help patients communicate more effectively with their healthcare providers by providing evidence-based medical literature on a condition that is frequently misdiagnosed.</p>
        </div>
    </section>
HTML;

include 'template.php';
?>
