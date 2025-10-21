async function fetchTickRiskData() {
    try {
        const response = await fetch('/tick-data-proxy.php');
        if (!response.ok) {
            console.error('Proxy response status:', response.status);
            return null;
        }
        const riskData = await response.json();
        Object.keys(riskData).forEach(county => {
            const data = riskData[county];
            data.riskLevel = calculateRiskLevel(data.lyme_percent);
        });
        console.log('Fetched risk scores:', riskData);
        return riskData;
    } catch (error) {
        console.error('Error fetching tick data:', error);
        return null;
    }
}

function calculateRiskLevel(percent) {
    if (percent < 15) return {score: 1, label: 'Low', color: '#FFD700'};
    if (percent < 18) return {score: 2, label: 'Moderate', color: '#FFA500'};
    if (percent < 22) return {score: 3, label: 'High', color: '#FF6347'};
    if (percent < 30) return {score: 4, label: 'Very High', color: '#DC143C'};
    return {score: 5, label: 'Extreme', color: '#8B0000'};
}

async function displayRiskScores() {
    const riskData = await fetchTickRiskData();
    const container = document.getElementById('tick-risk-container');
    if (!riskData) {
        if (container) {
            container.innerHTML = '<p style="color: #999;">Unable to load live data. Please try refreshing.</p>';
        }
        return;
    }
    let html = '<div style="display: flex; gap: 0.5rem; justify-content: center; flex-wrap: wrap;">';
    Object.entries(riskData).forEach(([county, data]) => {
        const color = data.riskLevel?.color || '#ccc';
        html += `
            <div style="padding: 0.5rem 0.75rem; border-radius: 4px; text-align: center; color: white; background: ${color}; width: 65px;">
                <div style="font-weight: 600; font-size: 0.75rem;">${county}</div>
                <div style="font-size: 1rem; font-weight: bold;">${data.riskLevel?.score}</div>
                <div style="font-size: 0.65rem; opacity: 0.9;">${data.lyme_percent}%</div>
            </div>
        `;
    });
    html += '</div>';
    if (container) {
        container.innerHTML = html;
    }
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', displayRiskScores);
} else {
    displayRiskScores();
}
