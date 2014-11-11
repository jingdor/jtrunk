<!DOCTYPE html>
<html>
    <head>
        <title>{{title | default('title')}}</title>
{% block meta %}{% endblock %}

{{stylesheetLink("css/normalize.css")}}
{{stylesheetLink("css/animate.css")}}
{{stylesheetLink("css/1140.css")}}

{% block link %}{% endblock %}


{{stylesheetLink("css/all.css")}}
{{ javascript_include("js/jquery-2.1.1.min.js") }}
{{ javascript_include("js/underscore-min.js") }}
{{ javascript_include("js/backbone-min.js") }}
{% block script %}
{% endblock %}
    </head>
    <body>
    {{ partial("part/_header") }}
    <div id="container">
        {% block content %}{% endblock %}
    </div>
    {{ partial("part/_footer") }}
    </body>
  {{ javascript_include("js/all.js") }}  
{% block style %}{% endblock %}
{% block js %}{% endblock %}
</html>