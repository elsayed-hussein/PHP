<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Php</title>
</head>

<body>
    <a href="./Rock-Paper-Scissors/index.php">Test PHP</a>
    <br />

    <hr />
    <?php
    $companyNames = [
        "test1",
        "test2",
        "test3",
        "test4",
        "test5",
        "test6",
        "test7",
        "test8",
        "test9",
        "test10",
        "test11",
        "test12",
        "test13",
        "test14",
        "test15",
        "test16",
        "test17",
        "test18",
        "test19",
        "test20",
    ];
    $successRate = 50;
    function successfulCompanies($companyNames, $successRate)
    {
        $Companies = [];
        foreach ($companyNames as $company) {
            $successValue = rand(0, 100);
            if ($successValue <= $successRate) {
                $Companies += [$company => $successValue];
            };
        };
        if (count($Companies) >= 1) {
            echo "Stage 1 50% <pre/>";
            print_r($Companies);
            echo "<br/>winier company :" . min(array_keys($Companies));
            echo "<hr/><br/>";
        };
        $Companies50 = [];
        foreach ($Companies as $k => $v) {
            $successValue = rand(0, 100);
            if ($successValue <= $successRate / 2) {
                $Companies50 += [$k => $successValue];
            };
        };
        if (count($Companies50) >= 1) {
            echo "Stage 2 25% <pre/>";
            print_r($Companies50);
            echo "<br/>winier company :" . min(array_keys($Companies50));
            echo "<hr/><br/>";
        };
        $Companies25 = [];
        foreach ($Companies50 as $k => $v) {
            $successValue = rand(0, 100);
            if ($successValue <= $successRate / 4) {
                $Companies25 += [$k => $successValue];
            };
        };
        if (count($Companies25) >= 1) {
            echo "Stage 3 12.5% <pre/>";
            print_r($Companies25);
            echo "<br/>winier company :" . min(array_keys($Companies25));
            echo "<hr/><br/>";
        };
    };
    successfulCompanies($companyNames, $successRate);
    ?>
</body>

</html>