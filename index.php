<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Who wants to be a millionaire? [PHP version]</title>
<link rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/millionaire.js"></script>
<script type="text/javascript">var QA = {Q:2,QID:0,LEVEL:1}</script>
</head>

<body>
<div id="container">
	<div class="left" id="lBox">
    	<div id="main">
        	<div id="header">Who wants to be a millionaire?!</div>
            <div id="lifeline">
            	<div id="lifelabel">Your Life Line</div>
            	<div id="lifegauge">&nbsp;</div>
           	</div>            
            <div id="q">
            	<span id="qno"></span>
            	<span id="question"></span>
           	</div>
            <div id="ans"></div>
        </div>
        <div id="complete"></div>
       	<ul id="choices">
			<li id="choice_a">&nbsp;</li>
			<li id="choice_b">&nbsp;</li>
			<li id="choice_c">&nbsp;</li>
			<li id="choice_d">&nbsp;</li>
		</ul>
    </div>
    <div class="right" id="rBox">    	
        <ul id="level">        	
            <li id="l10">$1 Million</li>
            <li id="l9">$500,000</li>
            <li id="l8">$300,000</li>
            <li id="l7">$200,000</li>
            <li id="l6">$100,000</li>
            <li id="l5">$50,000</li>
            <li id="l4">$10,000</li>
            <li id="l3">$1,000</li>
            <li id="l2">$500</li>
            <li id="l1">$100</li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
</body>
</html>