// JavaScript Document
/* Image w/ description tooltip v2.0
* Created: April 23rd, 2010. This notice must stay intact for usage 
* Author: Dynamic Drive at http://www.dynamicdrive.com/
* Visit http://www.dynamicdrive.com/ for full source code
*/

var ddimgtooltip={

	tiparray:function(){
		var tooltips=[]
		//define each tooltip below: tooltip[inc]=['path_to_image', 'optional desc', optional_CSS_object]
		//For desc parameter, backslash any special characters inside your text such as apotrophes ('). Example: "I\'m the king of the world"
		//For CSS object, follow the syntax: {property1:"cssvalue1", property2:"cssvalue2", etc}

		
		tooltips[1]=["","<div style='color:#000000;  font-size:11px;'>Ckochas</div> <div style='font-size:11px; color:#000000; '>tercera sección de la provincia José María Linares</div>", {background:"#D08A8E", width:"150px"}]
		tooltips[2]=[""]
		tooltips[3]=["", "Bridge to somewhere.", {background:"#F8876B", font:"bold 12px Arial"}]
		tooltips[6]=["","<div style='color:#000000; font-size:11px;'>Betanzos</div><div style='font-size:11px; color:#000000; '>  Primera Sección   de la provincia Cornelio Saavedra</div>", {background:"#AAA937", width:"150px"}]
		tooltips[7]=["","<div style='color:#000000; font-size:11px; '>Potosi</div> <div style=' color:#000000; font-size:11px;'> Sección Capital  de la provincia Tomás Frías</div>", {background:"#9A589B", width:"150px"}]
		tooltips[8]=["","<div style='color:#000000; font-size:11px;'>Chaquí</div><div style=' color:#000000; font-size:11px;'>   Segunda Sección  de la provincia Cornelio Saavedra</div>", {background:"#818E61", width:"150px"}]
		tooltips[9]=["","<div style='color:#000000; font-size:11px;'>Puna</div><div style=' color:#000000; font-size:11px;'>   Primera Sección  de la provincia José María Linares</div>", {background:"#9F652E", width:"150px"}]
		tooltips[10]=["","<div style='color:#000000; font-size:11px;'>Caiza 'D'</div> <div style=' color:#FFFFFF;font-size:11px;'>  Segunda Sección  de la provincia José María Linares </div>", {background:"#BF8B68", width:"150px"}]
		tooltips[11]=["","<div style='color:#000000; font-size:11px;'>Porco</div><div style=' color:#000000; font-size:11px;'>   Tercera Sección  de la provincia Antonio Quijarro</div>", {background:"#EDE19C", width:"150px"}]
		tooltips[12]=["","<div style='color:#000000; font-size:11px;'>Yocalla</div><div style=' color:#000000; font-size:11px;'>  Segunda Sección  de la provincia Tomás Frías</div>", {background:"#EDC7DA", width:"150px"}]
		tooltips[13]=["","<div style='color:#000000; font-size:11px;'>Tinguipaya</div> <div style=' color:#000000; font-size:11px;'> Primera Sección de la provincia Tomás Frías</div>", {background:"#999966", width:"150px"}]
		tooltips[14]=["","<div style='color:#000000; font-size:11px;'>Urmiri </div><div style=' color:#000000; font-size:11px;'>  Tercera Sección de la provincia Tomás Frías</div>", {background:"#F7DD00", width:"150px"}]
		tooltips[15]=["","<div style='color:#000000; font-size:11px;'>Tomave  </div><div style=' color:#000000; font-size:11px;'>  Segunda Sección de la provincia Antonio Quijarro</div>", {background:"#9B612F", width:"150px"}]
		tooltips[16]=["","<div style='color:#000000;font-size:11px;'>Mojinete   </div><div style=' color:#000000; font-size:11px;'>  Segunda Sección de la provincia Sud Lípez </div>", {background:"#F5F5A3", width:"150px"}]
		return tooltips //do not remove/change this line
	}(),

	tooltipoffsets: [20, -30], //additional x and y offset from mouse cursor for tooltips

	//***** NO NEED TO EDIT BEYOND HERE

	tipprefix: 'imgtip', //tooltip ID prefixes

	createtip:function($, tipid, tipinfo){
		if ($('#'+tipid).length==0){ //if this tooltip doesn't exist yet
			return $('<div id="' + tipid + '" class="ddimgtooltip" />').html(
				'<div style="text-align:center"></div>'
				+ ((tipinfo[1])? '<div style="text-align:left; margin-top:5px">'+tipinfo[1]+'</div>' : '')
				)
			.css(tipinfo[2] || {})
			.appendTo(document.body)
		}
		return null
	},

	positiontooltip:function($, $tooltip, e){
		var x=e.pageX+this.tooltipoffsets[0], y=e.pageY+this.tooltipoffsets[1]
		var tipw=$tooltip.outerWidth(), tiph=$tooltip.outerHeight(), 
		x=(x+tipw>$(document).scrollLeft()+$(window).width())? x-tipw-(ddimgtooltip.tooltipoffsets[0]*2) : x
		y=(y+tiph>$(document).scrollTop()+$(window).height())? $(document).scrollTop()+$(window).height()-tiph-10 : y
		$tooltip.css({left:x, top:y})
	},
	
	showbox:function($, $tooltip, e){
		$tooltip.show()
		this.positiontooltip($, $tooltip, e)
	},

	hidebox:function($, $tooltip){
		$tooltip.hide()
	},


	init:function(targetselector){
		jQuery(document).ready(function($){
			var tiparray=ddimgtooltip.tiparray
			var $targets=$(targetselector)
			if ($targets.length==0)
				return
			var tipids=[]
			$targets.each(function(){
				var $target=$(this)
				$target.attr('rel').match(/\[(\d+)\]/) //match d of attribute rel="imgtip[d]"
				var tipsuffix=parseInt(RegExp.$1) //get d as integer
				var tipid=this._tipid=ddimgtooltip.tipprefix+tipsuffix //construct this tip's ID value and remember it
				var $tooltip=ddimgtooltip.createtip($, tipid, tiparray[tipsuffix])
				$target.mouseenter(function(e){
					var $tooltip=$("#"+this._tipid)
					ddimgtooltip.showbox($, $tooltip, e)
				})
				$target.mouseleave(function(e){
					var $tooltip=$("#"+this._tipid)
					ddimgtooltip.hidebox($, $tooltip)
				})
				$target.mousemove(function(e){
					var $tooltip=$("#"+this._tipid)
					ddimgtooltip.positiontooltip($, $tooltip, e)
				})
				if ($tooltip){ //add mouseenter to this tooltip (only if event hasn't already been added)
					$tooltip.mouseenter(function(){
						ddimgtooltip.hidebox($, $(this))
					})
				}
			})

		}) //end dom ready
	}
}

//ddimgtooltip.init("targetElementSelector")
ddimgtooltip.init("*[rel^=imgtip]")