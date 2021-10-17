<html>
<head><title>Calculation Result</title></head>
<body>
    <?php
        # test if input is_numeric
        if(1){
            # test if calc is not null
            if(1){
                # switch statement for value of calc
                switch(1){
          
                    
                }
                echo "Calculation result: $result";
            }
        }
        else{ echo "Invalid entry - please retry"; }
    ?>
</body>
</html>

<style> 
#group {
	animation-fill-mode: forwards; /*animation will stop at last frame and won't reset to start!!!*/
    -webkit-animation: mymove 5s 1; /* Safari 4.0 - 8.0 */
    animation: mymove 5s 1;
	  position: absolute;
       left: 5px;
}

/*#get {
	
	 position: absolute;
     left: 5px;
}*/

div {
    width: 100px;
    height: 50px;
    background-color: red;
    font-weight: bold;
    position: relative;
	/*position: absolute;*/
    left: 5px;
}

/* Safari 4.0 - 8.0 */
#div1 {-webkit-animation-timing-function: linear;}
#div2 {-webkit-animation-timing-function: ease;}
#div3 {-webkit-animation-timing-function: ease-in;}
#div4 {-webkit-animation-timing-function: ease-out;}
#div5 {-webkit-animation-timing-function: ease-in-out;}

/* Standard syntax */
#div1 {animation-timing-function: linear;}
#div2 {animation-timing-function: ease;}
#div3 {animation-timing-function: ease-in;}
#div4 {animation-timing-function: ease-out;}
#div5 {animation-timing-function: ease-in-out;}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes mymove {
    from {left: 0px;}
    to {left: 300px;}
}

/* Standard syntax */
@keyframes mymove {
    from {left: 0px;}
    to {left: 300px;}
}
</style>
</head>
<body>

<p><strong>Note:</strong> The animation-timing-funtion property is not supported in Internet Explorer 9 and earlier versions.</p>

<!--<div id="div1">linear</div>
<div id="div2">ease</div>
<div id="div3">ease-in</div>
<div id="div4">ease-out</div>
<div id="div5">ease-in-out</div>-->

<div id="get">
		<form method="post" action="BasicCalculator.php">
<div id="group">        
<div id="div1">Enter 1st number: <input type="text" name="number1" value="<? if(1){
            # test if calc is not null " > </div></br> </br>
        <div id="div2">Enter 2nd number: <input type="text" name="number2"  value="<?if(1){
                # switch statement for value of calc
                switch(1){
          " ></div> </br> </br>
Select Operation: </br></br>
                        <div id="div3"><input type="radio" name="g" value="+"> Addition</div> <br/>
                        <div id="div4"><input type="radio" name="g" value="-"> Subtraction</div></br>
                        <div id="div1"><input type="radio" name="g" value="*">Multiplication</div> <br/>
                        <div id="div2"><input type="radio" name="g" value="/">Division</div> </br>
                        <div id="div3"><input type="radio" name="g" value="%">Modulo</div> <br/><br/>
                        <div id="div4"><input type="submit" name="submit"></div><br/><br/>
                        <div id="div5"><h2 style="color:blue"> Output: <?php echo $result; ?> </h2></div>
        </div>
</form>

</div>


<script>
//Your Javascript Code

for(let i =5; i < window.width(); i++)
{
    document.getElementById('YOURELEMENT').left = i + 'px';
}

</script



</body>
</html>
