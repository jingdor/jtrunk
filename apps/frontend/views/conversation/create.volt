{% extends "layout/master.volt" %}


{% block content %}

	<div class="container16 conversation-create-box">
	 <div class="row title">
	 	<input placeholder=" Conversation title"/>
	 </div>
	 <div class="row content">
		<textarea id="editor" placeholder=" Conversation content" autofocus></textarea>
 	 </div>
 	 	<div>
 	 		<button class="btn btn-6 btn-6i">submit</button>
 	 	<div>
	<div>



{% endblock %}



{% block link %}
{{stylesheetLink("css/font-awesome.css")}}
{{stylesheetLink("css/simditor.css")}}
{{stylesheetLink("css/default.css")}}
{{stylesheetLink("css/component.css")}}
{% endblock %}

{% block script %}
{{ javascript_include("js/module.js") }}
{{ javascript_include("js/uploader.js") }}
{{ javascript_include("js/simditor.js") }}
{{ javascript_include("js/modernizr.custom.js") }}

{% endblock %}

{% block title %}{% endblock %}
{% block js %}
<script>
var editor = new Simditor({
  textarea: $('#editor')
});
</script>
{% endblock %}








