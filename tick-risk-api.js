// Fetch live tick data from NY State Health Data API
async function fetchTickRiskData() {
    const counties = ['Putnam', 'Dutchess', 'Rockland', 'Westchester', 'Columbia', 'Ulster', 'Orange'];
    
    try {
        // Nymph tick data API endpoint
        const nymphUrl = "https://health.data.ny.gov/api/views/kibp-u2ip/rows.json?$limit=5000";
        const response = await fetch(nymphUrl);
        const data = await response.json();
        
        const riskScores = {};
        
        // Process the data to get latest scores per county
        data.data.forEach(row => {
            const county = row[10]?.trim(); // County name column
            const infected = parseInt(row[14]) || 0; // # infected
            const tested = parseInt(row[13]) || 0; // # tested
            
            if (counties.includes(county) && tested > 0) {
                const percentInfected = (infected / tested * 100).toFixed(1);
                riskScores[county] = {
                    infected: infected,
                    tested: tested,
                    percentInfected: percentInfected,
                    riskLevel: calculateRiskLevel(percentInfected)
                };
            }
        });
        
        return riskScores;
    } catch (error) {
        console.error('Error fetching tick data:', error);
        return null;
    }
}

function calculateRiskLevel(percentInfected) {
    if (percentInfected < 5) return {score: 1, label: 'Low', color: '#FFD700'};
    if (percentInfected < 15) return {score: 2, label: 'Moderate', color: '#FFA500'};
    if (percentInfected < 30) return {score: 3, label: 'High', color: '#FF6347'};
    if (percentInfected < 50) return {score: 4, label: 'Very High', color: '#DC143C'};
    return {score: 5, label: 'Extreme', color: '#8B0000'};
}

// Display the data
async function displayRiskScores() {
    const riskData = await fetchTickRiskData();
    if (!riskData) return;
    
    let html = '<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); gap: 1rem;">';
    
    Object.entries(riskData).forEach(([county, data]) => {
        html += `
            <div style="padding: 1.5rem; border-radius: 8px; text-align: center; color: white; background: ${data.riskLevel.color};">
                <div style="font-weight: 600; margin-bottom: 0.5rem;">${county} County</div>
                <div style="font-size: 1.5rem; font-weight: bold; margin-bottom: 0.3rem;">${data.riskLevel.score}</div>
                <div style="font-size: 0.85rem;">${data.riskLevel.label}</div>
                <div style="font-size: 0.75rem; opacity: 0.8; margin-top: 0.5rem;">${data.percentInfected}% infected</div>
            </div>
        `;
    });
    
    html += '</div>';
    
    const container = document.getElementById('tick-risk-container');
    if (container) {
        container.innerHTML = html;
    }
}

// Run on page load
document.addEventListener('DOMContentLoaded', displayRiskScores);
