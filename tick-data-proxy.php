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
        $riskScores[$county] = ['tested' => 0, 'lyme_percent' => 0, 'count' => 0];
    }
    
    foreach ($lines as $index => $line) {
        if ($index === 0 || empty(trim($line))) continue;
        
        $cols = str_getcsv($line);
        $county = trim($cols[1] ?? '');
        $tested = (int)($cols[5] ?? 0);
        $lyme_percent = floatval($cols[6] ?? 0);
        
        if (in_array($county, $counties) && $tested > 0) {
            $riskScores[$county]['tested'] += $tested;
            $riskScores[$county]['lyme_percent'] += $lyme_percent;
            $riskScores[$county]['count']++;
        }
    }
    
    foreach ($riskScores as $county => $data) {
        if ($data['count'] > 0) {
            $riskScores[$county]['lyme_percent'] = round($data['lyme_percent'] / $data['count'], 1);
        }
        unset($riskScores[$county]['count']);
    }
    
    echo json_encode($riskScores);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
?>
