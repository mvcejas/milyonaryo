// JavaScript Document
$(function(){$('#level li').css({'color':'#039'});});
$(document).ready(function(){	
	$.when(levelize()).then(function(){question()});
	$('#choices a').live('click',function(){
		var ans = this.id;
		$.ajax({
			url: 'answer.php',
			data: {id:QA.QID,a:ans},
			type: 'post',
			dataType:'json',
			beforeSend: function(){$('#ans').html('<span id="getready">Submitting your answer...</span>').fadeIn()},
			success: function(response){
				$.when($('#ans').html(response.message+'<br/><span id="getready">prepare for the next question...<span>').fadeIn()).then(function(){
					setTimeout(function(){$('#ans').fadeOut(function(){question()});},3000);
				});
			}
		});
		$('#choices a').each(function(i,d){
			if(this.id==ans){
				$(this).css({'background':'#FF9','color':'black'});
			}else{
				$(this).css({'background':'#039','color':'white'}).removeAttr('id');
			}
		});		
		return false;
	});
});
function question(){
	$.ajax({
		url: 'question.php',
		dataType: 'json',
		data: {q:QA.Q},
		type: 'post',
		success: function(response){
			QA.QID = response.id;
			$('#q').fadeOut().fadeIn();
			$('#qno').html('Question...');
			$('#question').html(response.question);
			$.each(response.choices,function(c,d){$('#choice_'+c).html('<a href="" id='+c+'>'+c.toUpperCase()+'. '+d+'</a>');});
			$('#l'+response.level).fadeOut().css({'background':'#0C6'}).fadeIn();
			$('#choices a').removeAttr('style');
			if(response.level==10){$('#complete').show();$('#ans').html('Congratulations!<br/>You have won $1,000,000.00!').fadeIn();}
			if(response.mistake==1){$('#lifegauge').css('width','262px');}
			if(response.mistake==2){$('#lifegauge').css('width','131px');}
			if(response.mistake>=3){$('#lifegauge').css('width','0px');}
		}
	})
}
function levelize(){
	$($('#level li').get().reverse()).each(function(i){$(this).animate({backgroundColor:'#039',color:'white'},100*(i+1),function(){$(this).fadeOut('fast').fadeIn('fast')})});
}