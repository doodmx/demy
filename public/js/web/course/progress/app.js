(window.webpackJsonp=window.webpackJsonp||[]).push([[10],{218:function(i,t,e){i.exports=e(219)},219:function(i,t,e){(function(i){e(220),$((function(){var t={lineWidth:2,lineSpacerWidth:15,lineColour:i.colors.primary,canvasElm:".canvas"};$(".object").SimpleFlow(t)}))}).call(this,e(58))},220:function(i,t){!function(i,t,e,n){"use strict";var r={lineWidth:2,lineSpacerWidth:15,lineColour:"#91acb3",canvasElm:".canvas"};function o(t,e){this.element=t,this.settings=i.extend({},r,e),this._defaults=r,this._name="SimpleFlow",this.init()}i.extend(o.prototype,{init:function(){this.drawLines();var e=this;i(t).resize((function(){e.drawLines()}))},drawLines:function(){i("svg.simple-flow-line").remove();for(var t=i(this.element),e=0;e<t.length;e++){var n=t.eq(e),r=t.eq(e+1);this.drawLine(n,r)}},drawLine:function(t,e){var n=t.parent(),r=e.parent();if(void 0!==e.position()){var o=t.outerHeight(!0)/2,s=e.outerHeight(!0)/2,a=o+n.position().top+40,l=s+r.position().top+40,h=(n.outerWidth(!0)-n.width())/2,c=(r.outerWidth(!0)-r.width())/2,d=n.position().left+t.outerWidth(!0)+h,p=r.position().left+c,u=p-this.settings.lineSpacerWidth,f=d+this.settings.lineSpacerWidth,w=(a+l)/2-30;if(a==l)var m=d+","+a+" "+p+","+l;else m=d+","+a+" "+f+","+a+" "+f+","+w+" "+u+","+w+" "+u+","+l+" "+p+","+l;var v='<svg class="simple-flow-line"><defs><marker id="markerCircle" markerWidth="8" markerHeight="8" refX="5" refY="5"><circle cx="5" cy="5" r="3" style="stroke: none; fill:'+this.settings.lineColour+';"/></marker> <marker id="arrowhead" viewBox="0 0 10 10" refX="8" refY="5"markerUnits="strokeWidth" markerWidth="8" markerHeight="6" orient="auto"><path d="M 0 0 L 10 5 L 0 10 z" stroke="none" fill="'+this.settings.lineColour+'"/></marker></defs><path d="M'+m+'"style="fill:none;stroke:'+this.settings.lineColour+";stroke-width:"+this.settings.lineWidth+';marker-end:url(#markerCircle);" /></svg>';i(this.settings.canvasElm).append(v)}}}),i.fn.SimpleFlow=function(t){i.data(this,"plugin_SimpleFlow")||i.data(this,"plugin_SimpleFlow",new o(this,t))}}(jQuery,window,document)},58:function(i,t){var e;e=function(){return this}();try{e=e||new Function("return this")()}catch(i){"object"==typeof window&&(e=window)}i.exports=e}},[[218,0]]]);