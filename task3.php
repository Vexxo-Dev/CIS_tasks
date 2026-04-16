<?php
function calculateAverageGrade(array $grades): float
{
	if (count($grades) === 0) {
		return 0.0;
	}

	$sum = 0.0;
	$count = 0;

	foreach ($grades as $grade) {
		if (!is_numeric($grade)) {
			continue;
		}

		$value = (float) $grade;

		if ($value < 0 || $value > 100) {
			continue;
		}

		$sum += $value;
		$count++;
	}

	if ($count === 0) {
		return 0.0;
	}

	return round($sum / $count, 2);
}


echo "Enter grades separated by spaces or commas: ";
$line = (string) fgets(STDIN);

$parts = preg_split('/[\s,]+/', $line, -1);
$grades = $parts === false ? [] : $parts;

$average = calculateAverageGrade($grades);
echo "Average grade: " . $average . "\n";