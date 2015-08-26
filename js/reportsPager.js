// JavaScript Document
$(function reportsPager(){
	$("#report2").hide();
	$("#report3").hide();
	$("#report4").hide();
	$("#report5").hide();	
	
	$("#tile-full").css("height","432");
	
	

	$("#next").click(function(evt){
	$("#report1" ).hide();	
	
	$("#report2" ).show(); 		
	evt.preventDefault();		
	})

	$("#next1").click(function(evt){
	$("#report2" ).hide();	
	
	$("#report3" ).show(); 		
	evt.preventDefault();		
	})

	$("#next2").click(function(evt){
	$("#report3" ).hide();	
	
	$("#report4" ).show(); 		
	evt.preventDefault();		
	})

	$("#next3").click(function(evt){
	$("#report4" ).hide();	
	
	$("#report5" ).show(); 		
	evt.preventDefault();		
	})

	$("#prev").click(function(evt){
	$("#report5" ).hide();	
	
	$("#report4" ).show(); 		
	evt.preventDefault();		
	})

	$("#prev1").click(function(evt){
	$("#report4" ).hide();	
	
	$("#report3" ).show(); 		
	evt.preventDefault();		
	})

	$("#prev2").click(function(evt){
	$("#report3" ).hide();	
	
	$("#report2" ).show(); 		
	evt.preventDefault();		
	})

	$("#prev3").click(function(evt){
	$("#report2" ).hide();	
	
	$("#report1" ).show(); 		
	evt.preventDefault();		
	})
	
})
