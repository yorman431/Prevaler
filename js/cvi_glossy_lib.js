/**
 * cvi_glossy_lib.js 1.5 (10-Sep-2008)
 * (c) by Christian Effenberger 
 * All Rights Reserved
 * Source: corner.netzgesta.de
 * Distributed under Netzgestade Software License Agreement
 * http://www.netzgesta.de/cvi/LICENSE.txt
 * License permits free of charge
 * use on non-commercial and 
 * private web sites only 
 * syntax:
	cvi_glossy.defaultRadius = 25;		//INT 10-50 (%)
	cvi_glossy.defaultColor = 0;		//STR '#000000'-'#ffffff' or 0
	cvi_glossy.defaultColor2 = 0;		//STR '#000000'-'#ffffff' or 0
	cvi_glossy.defaultGradient = 'v';	//STR  'd|h|v'-'diagonally|horizontal|vertical'
	cvi_glossy.defaultShade = 50;		//INT 20-66 (% opacity)
	cvi_glossy.defaultShadow = 40;		//INT 0-100 (% opacity)
	cvi_glossy.defaultNoshadow = false;	//BOOLEAN
	cvi_glossy.defaultNoradius = false;	//BOOLEAN
	cvi_glossy.remove( image );
	cvi_glossy.add( image, options );
	cvi_glossy.modify( image, options );
	cvi_glossy.add( image, { radius: value, color: value, color2: value, gradient: value, shadow: value, shade: value, noshadow: value, noradius: value } );
	cvi_glossy.modify( image, { radius: value, color: value, color2: value, gradient: value, shadow: value, shade: value, noshadow: value, noradius: value } );
 *
**/

function roundedRect(ctx,x,y,width,height,radius,nopath){
	if (!nopath) ctx.beginPath();
	ctx.moveTo(x,y+radius);
	ctx.lineTo(x,y+height-radius);
	ctx.quadraticCurveTo(x,y+height,x+radius,y+height);
	ctx.lineTo(x+width-radius,y+height);
	ctx.quadraticCurveTo(x+width,y+height,x+width,y+height-radius);
	ctx.lineTo(x+width,y+radius);
	ctx.quadraticCurveTo(x+width,y,x+width-radius,y);
	ctx.lineTo(x+radius,y);
	ctx.quadraticCurveTo(x,y,x,y+radius);
	if (!nopath) ctx.closePath();
}
function addRadialStyle(ctx,x1,y1,r1,x2,y2,r2,opacity) {
	var tmp = ctx.createRadialGradient(x1,y1,r1,x2,y2,r2);
	var opt = Math.min(parseFloat(opacity+0.1),1.0);
	tmp.addColorStop(0,'rgba(0,0,0,'+opt+')');
	tmp.addColorStop(0.25,'rgba(0,0,0,'+opacity+')');
	tmp.addColorStop(1,'rgba(0,0,0,0)');
	return tmp;
}
function addLinearStyle(ctx,x,y,w,h,opacity) {
	var tmp = ctx.createLinearGradient(x,y,w,h);
	var opt = Math.min(parseFloat(opacity+0.1),1.0);
	tmp.addColorStop(0,'rgba(0,0,0,'+opt+')');
	tmp.addColorStop(0.25,'rgba(0,0,0,'+opacity+')');
	tmp.addColorStop(1,'rgba(0,0,0,0)');
	return tmp;
}
function addBright(ctx,x,y,width,height,radius,opacity) {
	var style = ctx.createLinearGradient(0,y,0,y+height);
	style.addColorStop(0,'rgba(254,254,254,'+opacity+')');
	style.addColorStop(1,'rgba(254,254,254,0.1)');
	ctx.beginPath(); ctx.moveTo(x,y+radius); ctx.lineTo(x,y+height-radius);
	ctx.quadraticCurveTo(x,y+height,x+radius,y+height); ctx.lineTo(x+width-radius,y+height);
	ctx.quadraticCurveTo(x+width,y+height,x+width,y+height-radius);
	ctx.lineTo(x+width,y+radius); ctx.quadraticCurveTo(x+width,y,x+width-radius,y);
	ctx.lineTo(x+radius,y); ctx.quadraticCurveTo(x,y,x,y+radius); ctx.closePath();
	ctx.fillStyle = style; ctx.fill();
}
function addDark(ctx,x,y,width,height,radius,opacity) {
	var style = ctx.createLinearGradient(0,y,0,y+height);
	style.addColorStop(0,'rgba(0,0,0,0)');
	style.addColorStop(1,'rgba(0,0,0,'+opacity+')');
	ctx.beginPath(); ctx.moveTo(x,y); ctx.lineTo(x,y+height-radius);
	ctx.quadraticCurveTo(x,y+height,x+radius,y+height); ctx.lineTo(x+width-radius,y+height);
	ctx.quadraticCurveTo(x+width,y+height,x+width,y+height-radius);
	ctx.lineTo(x+width,y); ctx.lineTo(x,y); ctx.closePath();
	ctx.fillStyle = style; ctx.fill();
}
function addFrame(ctx,x,y,width,height,radius,opacity) {
	roundedRect(ctx,x,y,width,height,radius);
	var style = ctx.createLinearGradient(0,0,0,height);
	style.addColorStop(0,'rgba(254,254,254,'+opacity+')');
	style.addColorStop(1,'rgba(0,0,0,'+opacity+')');
	ctx.lineWidth = (radius+x)/2;
	ctx.strokeStyle = style;
	ctx.stroke();
}
function glossyShadow(ctx,x,y,width,height,radius,opacity){
	var style; var os = radius/2;
	ctx.beginPath(); ctx.rect(x+radius,y,width-(radius*2),y+os); ctx.closePath();
	style = addLinearStyle(ctx,x+radius,y+os,x+radius,y,opacity);
	ctx.fillStyle = style; ctx.fill();
	ctx.beginPath(); ctx.rect(x,y,radius,radius); ctx.closePath();
	style = addRadialStyle(ctx,x+radius,y+radius,radius-os,x+radius,y+radius,radius,opacity);
	ctx.fillStyle = style; ctx.fill();
	ctx.beginPath(); ctx.rect(x,y+radius,os,height-(radius*2)); ctx.closePath();
	style = addLinearStyle(ctx,x+os,y+radius,x,y+radius,opacity);
	ctx.fillStyle = style; ctx.fill();
	ctx.beginPath(); ctx.rect(x,y+height-radius,radius,radius); ctx.closePath();
	style = addRadialStyle(ctx,x+radius,y+height-radius,radius-os,x+radius,y+height-radius,radius,opacity);
	ctx.fillStyle = style; ctx.fill();
	ctx.beginPath(); ctx.rect(x+radius,y+height-os,width-(radius*2),os); ctx.closePath();
	style = addLinearStyle(ctx,x+radius,y+height-os,x+radius,y+height,opacity);
	ctx.fillStyle = style; ctx.fill();
	ctx.beginPath(); ctx.rect(x+width-radius,y+height-radius,radius,radius); ctx.closePath();
	style = addRadialStyle(ctx,x+width-radius,y+height-radius,radius-os,x+width-radius,y+height-radius,radius,opacity);
	ctx.fillStyle = style; ctx.fill();
	ctx.beginPath(); ctx.rect(x+width-os,y+radius,os,height-(radius*2)); ctx.closePath();
	style = addLinearStyle(ctx,x+width-os,y+radius,x+width,y+radius,opacity);
	ctx.fillStyle = style; ctx.fill();
	ctx.beginPath(); ctx.rect(x+width-radius,y,radius,radius); ctx.closePath();
	style = addRadialStyle(ctx,x+width-radius,y+radius,radius-os,x+width-radius,y+radius,radius,opacity);
	ctx.fillStyle = style; ctx.fill();
}

var cvi_glossy = {
	defaultRadius : 25,
	defaultColor : 0,
	defaultColor2 : 0,
	defaultGradient : 'v',
	defaultShade : 50,
	defaultShadow : 40,
	defaultNoshadow : false,
	defaultNoradius : false,
	add: function(image, options) {
		if(image.tagName.toUpperCase() == "IMG") {
			var defopts = { "radius" : cvi_glossy.defaultRadius, "color" : cvi_glossy.defaultColor, "color2" : cvi_glossy.defaultColor2, "gradient" : cvi_glossy.defaultGradient, "shadow" : cvi_glossy.defaultShadow, "shade" : cvi_glossy.defaultShade, "noshadow" : cvi_glossy.defaultNoshadow, "noradius" : cvi_glossy.defaultNoradius }
			if(options) {
				for(var i in defopts) { if(!options[i]) { options[i] = defopts[i]; }}
			}else {
				options = defopts;
			}
			var imageWidth  = ('iwidth'  in options) ? parseInt(options.iwidth)  : image.width;
			var imageHeight = ('iheight' in options) ? parseInt(options.iheight) : image.height;
			try {
				var object = image.parentNode; 
				if(document.all && document.namespaces && !window.opera) {
					if(document.namespaces['v'] == null) {
						var stl = document.createStyleSheet();
						stl.addRule("v\\:*", "behavior: url(#default#VML);"); 
						document.namespaces.add("v", "urn:schemas-microsoft-com:vml");
					}
					var display = (image.currentStyle.display.toLowerCase()=='block')?'block':'inline-block';        
					var canvas = document.createElement(['<var style="zoom:1;overflow:hidden;display:'+display+';width:'+imageWidth+'px;height:'+imageHeight+'px;padding:0;">'].join(''));
					var flt =  image.currentStyle.styleFloat.toLowerCase();
					display = (flt=='left'||flt=='right')?'inline':display;
					canvas.options = options;
					canvas.dpl = display;
					canvas.id = image.id;
					canvas.alt = image.alt;
					canvas.title = image.title;
					canvas.source = image.src;
					canvas.className = image.className;
					canvas.style.cssText = image.style.cssText;
					canvas.height = imageHeight;
					canvas.width = imageWidth;
					object.replaceChild(canvas,image);
					cvi_glossy.modify(canvas, options);
				}else {
					var canvas = document.createElement('canvas');
					if(canvas.getContext("2d")) {
						canvas.options = options;
						canvas.id = image.id;
						canvas.alt = image.alt;
						canvas.title = image.title;
						canvas.source = image.src;
						canvas.className = image.className;
						canvas.style.cssText = image.style.cssText;
						canvas.style.height = imageHeight+'px';
						canvas.style.width = imageWidth+'px';
						canvas.height = imageHeight;
						canvas.width = imageWidth;
						object.replaceChild(canvas,image);
						cvi_glossy.modify(canvas, options);
					}
				}
			} catch (e) {
			}
		}
	},
	
	modify: function(canvas, options) {
		try {			
			var iradius = (typeof options['radius']=='number'?options['radius']:canvas.options['radius']); canvas.options['radius'] = iradius;
			var color = (typeof options['color']=='string'?options['color']:canvas.options['color']); canvas.options['color']=color;
			var color2 = (typeof options['color2']=='string'?options['color2']:canvas.options['color2']); canvas.options['color2']=color2;
			var gradient = (typeof options['gradient']=='string'?options['gradient']:canvas.options['gradient']); canvas.options['gradient']=gradient;
			var shadow = (typeof options['shadow']=='number'?options['shadow']:canvas.options['shadow']); canvas.options['shadow'] = shadow;
			var shade = (typeof options['shade']=='number'?options['shade']:canvas.options['shade']); canvas.options['shade'] = shade;
			var noshadow = (typeof options['noshadow']=='boolean'?options['noshadow']:canvas.options['noshadow']); canvas.options['noshadow']=noshadow;
			var noradius = (typeof options['noradius']=='boolean'?options['noradius']:canvas.options['noradius']); canvas.options['noradius']=noradius;
			var icolor = 0; if(isNaN(color)) var icolor = (color.match(/^#[0-9a-f][0-9a-f][0-9a-f][0-9a-f][0-9a-f][0-9a-f]$/i)?color:0);
			var icolor2 = 0; if(isNaN(color2)) var icolor2 = (color2.match(/^#[0-9a-f][0-9a-f][0-9a-f][0-9a-f][0-9a-f][0-9a-f]$/i)?color2:0);
			var igradient = (gradient.match(/^[dhv]/i)?gradient.substr(0,1):'v');
			var iw = canvas.width; var ih = canvas.height; var f = 0.25; var ishadow = shadow==0?0.0:shadow/100;
			var ishade = shade==0?0.5:Math.max(Math.min(shade,66),20)/100;
			var angle = 0, xr = 0, sr, r, os, is, style, head, foot, fill = '', shine = '', tmp = '';
			var IE = (document.all&&document.namespaces&&!window.opera?true:false);
			f = iradius>0?Math.min(Math.max(iradius,1),50)/100:f;
			if(IE==true) {
				iradius = Math.round(45*f); xr = Math.round(Math.max(Math.round((Math.min(iw,ih)/2)*f),4)/4)*4;
			}else {
				iradius = Math.max(Math.round((Math.min(iw,ih)/2)*f),4);
			}
			if(noshadow==false) {
				iradius = (IE==true?iradius:Math.round(iradius/4)*4); os = (IE==true?xr/4:iradius/4); sr = iradius*0.75; is = os; r = sr; sr = r*0.75;
				shine = '<v:roundrect arcsize="'+r+'%" strokeweight="0" filled="t" stroked="f" fillcolor="#000000" style="filter:Alpha(opacity='+(ishadow*100)+'), progid:dxImageTransform.Microsoft.Blur(PixelRadius='+is+', MakeShadow=false); zoom:1;margin:0;padding:0;display:block;position:absolute;top:'+is+'px;left:0px;width:'+(iw-(2*is))+'px;height:'+(ih-(3*is))+'px;"><v:fill color="#000000" opacity="1" /></v:roundrect>';
				tmp = '<v:rect strokeweight="0" filled="t" stroked="f" fillcolor="#ffffff" style="zoom:1;margin:0;padding:0;display:block;position:absolute;top:0px;left:0px;width:'+iw+'px;height:'+ih+'px;"><v:fill color="#ffffff" opacity="0" /></v:rect>';
			}else {
				os = (IE==true?xr/4:iradius/4); r = iradius; is = 0; sr = iradius*0.75;
			}
			if(noradius==true) {r = 0; sr = 0; os = 0; is = 0; shine = ''; tmp = '';}
			if(document.all && document.namespaces && !window.opera) {
				if(canvas.tagName.toUpperCase() == "VAR") {
					if(isNaN(icolor)) {
						fill = '<v:roundrect arcsize="'+r+'%" strokeweight="0" filled="t" stroked="f" fillcolor="#ffffff" style="zoom:1;margin:0;padding:0;display:block;position:absolute;top:0px;left:'+is+'px;width:'+(iw-(2*is))+'px;height:'+(ih-(2*is))+'px;">';
						if(isNaN(icolor2)) {
							if(igradient=='h') {angle = 90;}else if(igradient=='d') {angle = 45;}
							fill = fill + '<v:fill method="sigma" type="gradient" angle="'+angle+'" color="'+icolor2+'" color2="'+icolor+'" /></v:roundrect>';
						}else {
							fill = fill + '<v:fill color="'+icolor+'" /></v:roundrect>';
						}
					}
					head = '<v:group style="zoom:1;display:'+canvas.dpl+';margin:0;padding:0;position:relative;width:'+iw+'px;height:'+ih+'px;" coordsize="'+iw+','+ih+'">' + tmp;
					foot = '<v:roundrect arcsize="'+r+'%" strokeweight="0" filled="t" stroked="f" fillcolor="#ffffff" style="zoom:1;margin:0;padding:0;display:block;position:absolute;top:0px;left:'+is+'px;width:'+(iw-(2*is))+'px;height:'+(ih-(2*is))+'px;"><v:fill src="'+canvas.source+'" type="frame" /></v:roundrect><v:roundrect arcsize="'+(sr*2)+'%" strokeweight="0" filled="t" stroked="f" fillcolor="#ffffff" style="zoom:1;margin:0;padding:0;display:block;position:absolute;top:'+os+'px;left:'+(os+is)+'px;width:'+(iw-(2*os)-(2*is))+'px;height:'+((ih/2)-os-is)+'px;"><v:fill method="linear" type="gradient" angle="0" color="#ffffff" opacity="'+(ishade*0.25)+'" color2="#ffffff" o:opacity2="'+(ishade*1.5)+'" /></v:roundrect><v:roundrect arcsize="'+(r*2)+'%" strokeweight="0" filled="t" stroked="f" fillcolor="#000000" style="zoom:1;margin:0;padding:0;display:block;position:absolute;top:'+((ih/2)-is)+'px;left:'+is+'px;width:'+(iw-(2*is))+'px;height:'+((ih/2)-is)+'px;"><v:fill method="sigma" type="gradient" angle="180" color="#000000" opacity="0" color2="#000000" o:opacity2="'+ishade+'" /></v:roundrect></v:group>';
					canvas.innerHTML = head+shine+fill+foot;
				}
			}else {
				if(canvas.tagName.toUpperCase() == "CANVAS" && canvas.getContext("2d")) {
					var context = canvas.getContext("2d");
					var img = new Image();
					img.onload = function() {
						context.clearRect(0,0,iw,ih);
						if(noshadow==false) glossyShadow(context,0,0,iw,ih,iradius,ishadow);
						context.save();
						if(!isNaN(icolor)&&window.opera) {
							context.globalCompositeOperation = "destination-out";
							context.save();
							roundedRect(context,is,0,iw-(is*2),ih-(is*2),r);
							context.fillStyle='rgba(0,0,0,1)'; context.fill(); context.clip(); 
							context.clearRect(0,0,iw,ih);
							context.restore();
							roundedRect(context,is,0,iw-(is*2),ih-(is*2),r);
							context.clip(); context.globalCompositeOperation = "source-over";
						}else {
							roundedRect(context,is,0,iw-(is*2),ih-(is*2),r);
							context.clip();
						}
						if(isNaN(icolor)) {
							if(isNaN(icolor2)) {
								if(igradient=='h') {
									style = context.createLinearGradient(0,0,iw,0);
								}else if(igradient=='d') {
									style = context.createLinearGradient(0,0,iw-(is*2),ih-(is*2));
								}else {
									style = context.createLinearGradient(0,0,0,ih-(is*2));
								}
								style.addColorStop(0,icolor); 
								style.addColorStop(1,icolor2);
								context.beginPath();
								context.rect(0,0,iw,ih-(is*2));
								context.closePath();
								context.fillStyle = style;
								context.fill();
							}else {
								context.fillStyle = icolor;
								context.fillRect(0,0,iw,ih-(is*2));
							}
						}else {
							context.clearRect(0,0,iw,ih);
						}
						context.drawImage(img,is,0,iw-(is*2),ih-(is*2));
						addBright(context,os+is,os,iw-(2*(os+is)),(ih/2)-os,sr,ishade*1.5);
						addDark(context,is,(ih/2)-is,iw-(2*is),(ih/2)-is,sr,ishade);
						if(noradius==false) addFrame(context,is,0,iw-(is*2),ih-(is*2),r,ishade*0.5)
						context.restore();
					}
					img.src = canvas.source;
				}
			}
		} catch (e) {
		}
	},

	replace : function(canvas) {
		var object = canvas.parentNode; 
		var img = document.createElement('img');
		img.id = canvas.id;
		img.alt = canvas.alt;
		img.title = canvas.title;
		img.src = canvas.source;
		img.className = canvas.className;
		img.style.cssText = canvas.style.cssText;
		img.style.height = canvas.height+'px';
		img.style.width = canvas.width+'px';
		object.replaceChild(img,canvas);
	},

	remove : function(canvas) {
		if(document.all && document.namespaces && !window.opera) {
			if(canvas.tagName.toUpperCase() == "VAR") {
				cvi_glossy.replace(canvas);
			}
		}else {
			if(canvas.tagName.toUpperCase() == "CANVAS") {
				cvi_glossy.replace(canvas);
			}
		}
	}
}
