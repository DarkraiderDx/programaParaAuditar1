// JavaScript Document
$(function(){
				
				//Efectos sobre galerias
				$('#galeria img').animate({
					"opacity" : .5
				});
				
				$('#galeria img').hover(function(){
				
				$(this).stop().animate({ "opacity" : 1 });
				
				}, function(){
					$(this).stop().animate({ "opacity" : .5});
				});
				
				$('#galeria-small img').animate({
					"opacity" : .8
				});
				
				$('#galeria-small img').hover(function(){
				
				$(this).stop().animate({ "opacity" : 1 });
				
				}, function(){
					$(this).stop().animate({ "opacity" : .5});
				});
				
				
				//Cuadro de informacion sobre imagen grande
				$('#masinfo').hover(function(){
					$('#info').fadeIn();
				}, function(){
					$('#info').fadeOut();
				});

				
			});

