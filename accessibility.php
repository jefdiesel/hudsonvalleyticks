<?php
/**
 * ACCESSIBILITY STATEMENT
 * Hudson Valley Ticks accessibility commitment and features
 */

$pageTitle = 'Accessibility Statement - Hudson Valley Ticks';
$pageDescription = 'Our commitment to WCAG 2.1 AA accessibility standards and the accessibility features built into Hudson Valley Ticks website.';

$pageContent = <<<'HTML'
    <section class="hero">
        <h1>Accessibility Statement</h1>
        <p><strong style="color: #2c5f2d;">Last updated:</strong> October 22, 2025</p>
    </section>

    <section class="section" tabindex="0" id="commitment">
        <h2>Our Commitment</h2>
        <p>Hudson Valley Ticks is committed to ensuring digital accessibility for people with disabilities. We are continually improving the user experience for everyone and applying the relevant accessibility standards.</p>
    </section>

    <section class="section" tabindex="0" id="conformance">
        <h2>Conformance Status</h2>
        <p><strong style="color: #2c5f2d;">Target Conformance Level:</strong> WCAG 2.1 Level AA</p>
        <p>This website aims to comply with Web Content Accessibility Guidelines (WCAG) 2.1 Level AA standards. As of October 2025, we have achieved substantial conformance with most critical accessibility requirements.</p>
    </section>

    <section class="section" tabindex="0" id="features">
        <h2>Accessibility Features</h2>
        <ul>
            <li>Keyboard navigation support throughout the site</li>
            <li>Skip links for easy navigation to main content</li>
            <li>Proper heading hierarchy for screen readers</li>
            <li>High contrast color schemes (WCAG AA compliant)</li>
            <li>Alt text for all images</li>
            <li>Form labels and instructions clearly associated</li>
            <li>Focus indicators on all interactive elements</li>
            <li>Semantic HTML structure with proper landmarks</li>
            <li>External links properly styled and accessible</li>
        </ul>
    </section>

    <section class="section" tabindex="0" id="limitations">
        <h2>Known Limitations</h2>
        <ul>
            <li>Some older blog posts may not fully conform to accessibility standards</li>
            <li>PDF documents on the site may have limited accessibility features</li>
            <li>Embedded third-party content may have accessibility limitations</li>
        </ul>
    </section>

    <section class="section" tabindex="0" id="feedback">
        <h2>Feedback and Contact Information</h2>
        <p>If you experience difficulty accessing any content on our website, please contact us:</p>
        <ul>
            <li><strong style="color: #2c5f2d;">Email:</strong> <a href="mailto:accessibility@hudsonvalleyticks.com">accessibility@hudsonvalleyticks.com</a></li>
        </ul>
        <p>We will respond to accessibility inquiries within 5 business days.</p>
    </section>

    <section class="section" tabindex="0" id="timeline">
        <h2>Remediation Timeline</h2>
        <ul>
            <li><strong style="color: #2c5f2d;">October 2025:</strong> Initial audit and identification of issues</li>
            <li><strong style="color: #2c5f2d;">Ongoing:</strong> Quarterly accessibility audits and continuous improvement</li>
        </ul>
    </section>

    <section class="section" tabindex="0" id="standards">
        <h2>Standards and Guidelines</h2>
        <p>This website is designed to be compliant with:</p>
        <ul>
            <li><a href="https://www.w3.org/WAI/WCAG21/quickref/">Web Content Accessibility Guidelines (WCAG) 2.1</a></li>
            <li><a href="https://www.section508.gov/">Section 508 of the Rehabilitation Act</a></li>
            <li><a href="https://www.ada.gov/">Americans with Disabilities Act (ADA)</a></li>
        </ul>
    </section>
HTML;

include 'template.php';
?>
