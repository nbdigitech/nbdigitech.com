/*! Thrive Leads - The ultimate Lead Capture solution for wordpress - 2017-06-28
* https://thrivethemes.com 
* Copyright (c) 2017 * Thrive Themes */

var ThriveLeads=ThriveLeads||{};ThriveLeads.models=ThriveLeads.models||{},ThriveLeads.collections=ThriveLeads.collections||{},function(){ThriveLeads.models.ConversionReport=ThriveLeads.models.Group.extend({defaults:function(){return{id:"",user:"",date:"",lead_group:"",form_type:"",preview_link:""}}}),ThriveLeads.collections.ConversionReport=Backbone.Collection.extend({model:ThriveLeads.models.ConversionReport}),ThriveLeads.objects.ConversionReport=new ThriveLeads.collections.ConversionReport,ThriveLeads.models.ConversionRateReport=ThriveLeads.models.Group.extend({defaults:function(){return{id:"",date:"",rate:""}}}),ThriveLeads.collections.ConversionRateReport=Backbone.Collection.extend({model:ThriveLeads.models.ConversionRateReport}),ThriveLeads.objects.ConversionRateReport=new ThriveLeads.collections.ConversionRateReport,ThriveLeads.models.ComparisonReport=ThriveLeads.models.Group.extend({defaults:function(){return{id:"",lead_group:"",percentage:""}}}),ThriveLeads.collections.ComparisonReport=Backbone.Collection.extend({model:ThriveLeads.models.ComparisonReport}),ThriveLeads.objects.ComparisonReport=new ThriveLeads.collections.ComparisonReport,ThriveLeads.models.LeadReferralReport=ThriveLeads.models.Group.extend({defaults:function(){return{id:"",referring_url:"",conversions:""}}}),ThriveLeads.collections.LeadReferralReport=Backbone.Collection.extend({model:ThriveLeads.models.LeadReferralReport}),ThriveLeads.objects.LeadReferralReport=new ThriveLeads.collections.LeadReferralReport,ThriveLeads.models.LeadTrackingReport=ThriveLeads.models.Group.extend({defaults:function(){return{id:"",source:"",medium:"",name:"",conversions:""}}}),ThriveLeads.collections.LeadTrackingReport=Backbone.Collection.extend({model:ThriveLeads.models.LeadTrackingReport}),ThriveLeads.objects.LeadTrackingReport=new ThriveLeads.collections.LeadTrackingReport,ThriveLeads.models.LeadSourceReport=ThriveLeads.models.Group.extend({defaults:function(){return{id:"",name:"",type:"",conversions:"",impressions:"",conversion_rate:"",leads:""}}}),ThriveLeads.collections.LeadSourceReport=Backbone.Collection.extend({model:ThriveLeads.models.LeadSourceReport}),ThriveLeads.objects.LeadSourceReport=new ThriveLeads.collections.LeadSourceReport,ThriveLeads.models.PageTitle=Backbone.Model.extend({defaults:function(){return{parts:[],separator:" ‹ ",default_title:""}},initialize:function(){this.set("parts",this.get("default_title").split(this.get("separator")))},prepend:function(a,b,c){void 0!==b&&b&&this.get("parts").length>1&&this.get("parts").shift(),void 0!==c&&c&&this.set("parts",this.get("default_title").split(this.get("separator"))),this.get("parts").unshift(a),this.trigger("title_change",this.getTitle())},replaceFirst:function(a){return this.prepend(a,!0)},getTitle:function(){return this.get("parts").join(this.get("separator"))}})}();