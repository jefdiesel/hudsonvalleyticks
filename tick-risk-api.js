// Fetch live tick data from NY State Health Data API
async function fetchTickRiskData() {
    const counties = ['Putnam', 'Dutchess', 'Rockland', 'Westchester', 'Columbia', 'Ulster', 'Orange'];
    
    try {
        // Try CSV endpoint with CORS headers
        const url = "https://health.data.ny.gov/api/views/kibp-u2ip/rows.csv?$limit=10000";
        
        const response = await fetch(url, {
            headers: {
                'Accept': 'text/csv'
            }
        });
        
        if (!response.ok) {
            console.error('API response status:', response.status);
            return null;
        }
        
        const csv = await response.text();
        const lines = csv.split('\n');
        const riskScores = {};
        
        // Parse CSV
        lines.forEach((line, index) => {
            if (index === 0) return; // Skip header
            const cols = line.split(',');
            const county = cols[9]?.trim().replace(/"/g, '');
            const infected = parseInt(cols[13]) || 0;
            const tested = parseInt(cols[12]) || 0;
            
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
        
        console.log('Fetched risk scores:', riskScores);
        return riskScores;
    } catch (error) {
        console.error('Error fetching tick data:', error);
        return null;
    }
}

function calculateRiskLevel(percentInfected) {
    percentInfected = parseFloat(percentInfected);
    if (percentInfected < 5) return {score: 1, label: 'Low', color: '#FFD700'};
    if (percentInfected < 15) return {score: 2, label: 'Moderate', color: '#FFA500'};
    if (percentInfected < 30) return {score: 3, label: 'High', color: '#FF6347'};
    if (percentInfected < 50) return {score: 4, label: 'Very High', color: '#DC143C'};
    return {score: 5, label: 'Extreme', color: '#8B0000'};
}

// Display the data
async function displayRiskScores() {
    const riskData = await fetchTickRiskData();
    const container = document.getElementById('tick-risk-container');
    
    if (!riskData || Object.keys(riskData).length === 0) {
        if (container) {
            container.innerHTML = '<p style="color: #999;">Unable to load live data. Please try refreshing.</p>';
        }
        return;
    }
    
    let html = '<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); gap: 1rem;">';
    
    Object.entries(riskData).forEach(([county, data]) => {
        html += `
            <div style="padding: 1.5rem; border-radius: 8px; text-align: center; color: white; background: ${data.riskLevel.color};">
                <div style="font-weight: 600; margin-bottom: 0.5rem;">${county}</div>
                <div style="font-size: 1.5rem; font-weight: bold; margin-bottom: 0.3rem;">${data.riskLevel.score}</div>
                <div style="font-size: 0.85rem;">${data.riskLevel.label}</div>
                <div style="font-size: 0.75rem; opacity: 0.8; margin-top: 0.5rem;">${data.percentInfected}% infected</div>
            </div>
        `;
    });
    
    html += '</div>';
    
    if (container) {
        container.innerHTML = html;
    }
}

// Run on page load
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', displayRiskScores);
} else {
    displayRiskScores();
}
