<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<!-- Echo dari Laravel '{{}}' -->
	<script>alert("HI YOU JOLLY");</script>
	<h1>HI</h1>

	<?php 
		$arr = [1,2,3,4,5]; 
		$scroll = "blood";
		$scroll2 = "dragon";
		$nilai = 80;
	?>

	<h1>Statement</h1>

	<!-- Format Statement If Native -->
	<h2>Native</h2>
	<?php if (1+1 ==2) { ?>
		<h4>Halo</h4>
	<?php }; ?>

	<!-- Format Statement IF dengan format Laravel -->
	<h2>Blade</h2>
	@if (1+1 == 2) 
		<h4>{{'Guten Morgen !'}}</h4>
	@endif

	<hr>

	<h1>Loop</h1>

	<!-- Format Loop For Native -->
	<h2>Native</h2>
	<?php for ($i = 0; $i < count($arr); $i++) { ?>
		<h4>Halo {{$arr[$i]}}</h4>
	<?php } ?>

	<!-- Format Loop For Laravel -->
	<h2>
		Blade
	</h2>
	@for ($i = 0; $i < count($arr); $i++)
		<h4>Helo {{$arr[$i]}}</h4>
	@endfor

	<hr>

	<h1>Statement Percabangan</h1>

	<!-- Format Statement percabangan if Laravel -->
	@if ($scroll == "blood") 
		<h5>{{"This Is One of the Elder Scrolls"}}</h5>
	@else
		<h5>{{"This Is NOT One of the Elder Scrolls"}}</h5>
	@endif

	@if ($scroll2 == "dragon")
		<h5>{{"$scroll2 Scroll Is One of the Elder Scrolls"}}</h5>
	@elseif ($scroll2 == "sun")
		<h5>{{"This Is Also One of the Elder Scrolls"}}</h5>
	@else
		<h5>{{"This Is NOT One of the Elder Scrolls"}}</h5>
	@endif

	<hr> 

	<h1>Statement Switch</h1>

	<h2>Native</h2>
	<?php 

	switch ($nilai){
		Case 90:
			echo "Nilai anda A";
		break;

		Case 80:
			echo "Nilai anda B";
		break;

		Case 70:
			echo "Nilai anda C";
		break;

		Default:
			echo "Nilai anda D";
		break;
	}

	 ?>

	 <h2>
	 	Blade
	 </h2>
	<!-- Format Native -->
	@switch($nilai)
		@case(90)
			{{"Nilai anda A"}}
			@break

		@case(80)
			{{"Nilai anda B"}}
			@break

		@case(70)
			{{"Nilai anda C"}}
			@break

		@default
			{{"Nilai Anda D"}}
			@break
	@endswitch
</body>
</html>

