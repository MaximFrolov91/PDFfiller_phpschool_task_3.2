<?php
$sum = $argv[1];
$filter_options = array(
    'options' => array( 'min_range' => 1,
                        'max_range' => 100000 )
);
if ($sum >= 100000) 
{
	echo "TOO MUCH!!! Max value - 100 000";
}
elseif ($argc == 2 && (filter_var($argv[1], FILTER_VALIDATE_INT, $filter_options) !== FALSE)) //&& is_int($sum) && $sum < 100000)
{
	if ($sum >= 500)
	{
		$b_500 = intdiv($sum, 500);
		$sum %= 500;
		if($b_500 > 0)
			echo '500: ', $b_500, PHP_EOL;
	}
	if ($sum >= 200)
	{
		$b_200 = intdiv($sum, 200);
		$sum %= 200;
		if($b_200 > 0)
			echo '200: ', $b_200, PHP_EOL;
	}
	if ($sum >= 100)
	{
		$b_100 = intdiv($sum, 100);
		$sum %= 100;
		if($b_100 > 0)
			echo '100: ', $b_100, PHP_EOL;
	}
	if ($sum >= 50)
	{
		$b_50 = intdiv($sum, 50);
		$sum %= 50;
		if($b_50 > 0)
			echo '50: ', $b_50, PHP_EOL;
	}
	if ($sum >= 20)
	{
		$b_20 = intdiv($sum, 20);
		$sum %= 20;
		if($b_20 > 0)
			echo '20: ', $b_20, PHP_EOL;
	}
	if ($sum >= 10)
	{
		$b_10 = intdiv($sum, 10);
		$sum %= 10;
		if($b_10 > 0)
			echo '10: ', $b_10, PHP_EOL;
	}
	if ($sum >= 5)
	{
		$b_5 = intdiv($sum, 5);
		$sum %= 5;
		if($b_5 > 0)
			echo '5: ', $b_5, PHP_EOL;
	}
	if ($sum >= 2)
	{
		$b_2 = intdiv($sum, 2);
		$sum %= 2;
		if($b_2 > 0)
			echo '2: ', $b_2, PHP_EOL;
	}
	if ($sum == 1)
		echo "1: 1";
}
else
	echo "Сумма введена не верно";