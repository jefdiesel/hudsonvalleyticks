<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

try {
    $url = "https://health.data.ny.gov/api/views/kibp-u2ip/rows.csv?$limit=10000";
    
    $context = stream_context_create([
        'http' => [
            'timeout' => 10,
            'user_agent' => 'Mozilla/5.0'
        ]
    ]);
    
    $csv = file_get_contents($url, false, $context);
    
    if ($csv === false) {
        throw new Exception('Failed to fetch data');
    }
    
    $lines = explode("\n", $csv);
    $counties = ['Putnam', 'Dutchess', 'Rockland', 'Westchester', 'Columbia', 'Ulster', 'Orange'];
    $riskScores = [];
    
    foreach ($counties as $county) {
        $riskScores[$county] = ['infected' => 0, 'tested' => 0];
    }
    
    foreach ($lines as $index => $line) {
        if ($index === 0 || empty(trim($line))) continue;
        
        $cols = str_getcsv($line);
        $county = trim($cols[9] ?? '');
        $infected = (int)($cols[13] ?? 0);
        $tested = (int)($cols[12] ?? 0);
        
        if (in_array($county, $counties)) {
            $riskScores[$county]['infected'] += $infected;
            $riskScores[$county]['tested'] += $tested;
        }
    }
    
    echo json_encode($riskScores);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
?>
