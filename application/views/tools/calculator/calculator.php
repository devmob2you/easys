<html>
	<head>
		<title>Mob2Calc v1.0</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/calc/css3calculator.css'); ?>" />
	</head>
	<body>
    <div class="container" style="margin: 0 auto; width: 320px; height: 320px;">
		<div style="width:235px;height:300px" id="css3calculator"><!-- CHANGE THIS TO RESIZE -->
			<form name="calc">
				<p><a href="#">Calculadora </a> MOB2CALC</p>
				<input type="text" name="input" size="16">
				<span>888888888888888888888888888888888888</span>
				<div>
					<input type="button" name="one"   value="  1  " onclick="calc.input.value += '1'">
					<input type="button" name="two"   value="  2  " onclick="calc.input.value += '2'">
					<input type="button" name="three" value="  3  " onclick="calc.input.value += '3'">
					<input class="last function" type="button" name="plus"  value="  +  " onclick="calc.input.value += ' + '">
		
					<input type="button" name="four"  value="  4  " onclick="calc.input.value += '4'">
					<input type="button" name="five"  value="  5  " onclick="calc.input.value += '5'">
					<input type="button" name="six"   value="  6  " onclick="calc.input.value += '6'">
					<input class="last function" type="button" name="minus" value="  -  " onclick="calc.input.value += ' - '">
		
					<input type="button" name="seven" value="  7  " onclick="calc.input.value += '7'">
					<input type="button" name="eight" value="  8  " onclick="calc.input.value += '8'">
					<input type="button" name="nine"  value="  9  " onclick="calc.input.value += '9'">
					<input class="last function" type="button" name="times" value="  x  " onclick="calc.input.value += ' * '">
		
					<input class="clearButton" type="button" name="clear" value="  c  " onclick="calc.input.value = ''">
					<input type="button" name="zero"  value="  0  " onclick="calc.input.value += '0'">
					<input class="function" type="button" name="doit"  value="  =  " onclick="calc.input.value = eval(calc.input.value)">
					<input class="last function" type="button" name="div"   value="  /  " onclick="calc.input.value += ' / '">
					<hr size="0"/>
				</div>
				<hr size="0"/>
			</form>
		</div>
    </div>
	</body>
</html>