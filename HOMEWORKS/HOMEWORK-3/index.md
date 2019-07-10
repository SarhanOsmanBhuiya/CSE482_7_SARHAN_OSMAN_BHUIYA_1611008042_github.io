<html>
<head>
	<title>Sample Calculator</title>
</head>

<style>

.abc{
  width: 13%;
	margin-left: 16cm;
	margin-top: 4cm;
  border: 2px solid black;
  padding: 5px;
  text-align: center;
  background-color: #43423E;
  border-radius: 5px;
}

.box{
  padding-left: 14px;
  padding-right: 15px;
  padding-bottom: 10px;
  padding-top: 10px;
  border-radius: 4px;
  margin-bottom: 2px;
  font-weight: bolder;
}

.inputbox{
  padding-top: 5px;
  padding-bottom: 5px;
  margin-bottom: 15px;
  border-radius: 2px;
  font-weight: bold;
  width: 98%;
}

p{
  font-weight: bold;
  background-color: #DB5A2E;
  color: white;
  border-radius: 4px;
  font-size: 16px;
  padding: 3px;
}

.box1{
  padding-left: 14px;
  padding-right: 14px;
  padding-bottom: 10px;
  padding-top: 10px;
  border-radius: 4px;
  margin-bottom: 2px;
  font-weight: bolder;
  background-color: #B37F8B;
}

.box2{
  padding-left: 16px;
  padding-right: 17px;
  padding-bottom: 10px;
  padding-top: 10px;
  border-radius: 4px;
  margin-bottom: 2px;
  font-weight: bolder;
}

</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<body>


<div class="abc" id='calc-contain'>
  <div id="agh">
    <p>SAMPLE CALCULATOR</p>
  </div>
	<form name="Calculator">
	  <input class="inputbox" type="text" name="answer" placeholder="">
	  <br>
	  <input class="box" type="button" value="1" onclick="Calculator.answer.value +='1'"/>
  	  <input class="box" type="button" value="2" onclick="Calculator.answer.value +='2'"/>
   	  <input class="box" type="button" value="3" onclick="Calculator.answer.value +='3'"/>
   	  <input class="box" type="button" value="+" onclick="Calculator.answer.value +='+'"/>
   	  <br>
  	  <input class="box" type="button" value="4" onclick="Calculator.answer.value +='4'"/>
   	  <input class="box" type="button" value="5" onclick="Calculator.answer.value +='5'"/>
   	  <input class="box" type="button" value="6" onclick="Calculator.answer.value +='6'"/>
   	  <input class="box2" type="button" value="-" onclick="Calculator.answer.value +='-'"/>
   	  <br>
   	  <input class="box" type="button" value="7" onclick="Calculator.answer.value +='7'"/>
   	  <input class="box" type="button" value="8" onclick="Calculator.answer.value +='8'"/>
   	  <input class="box" type="button" value="9" onclick="Calculator.answer.value +='9'"/>
   	  <input class="box" type="button" value="x" onclick="Calculator.answer.value +='*'"/>
   	  <br>
   	  <input class="box1" type="button" value="C" onclick="Calculator.answer.value =''"/>
   	  <input class="box" type="button" value="0" onclick="Calculator.answer.value +='0'"/>
   	  <input class="box" type="button" value="=" onclick="Calculator.answer.value = eval(Calculator.answer.value)"/>
   	  <input class="box" type="button" value="/" onclick="Calculator.answer.value +='/'"/>
   	  <br>
	</form>

</div>


</body>
</html>
