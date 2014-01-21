{% extends "layout.tpl" %}
{% block content %}
<h2><img src="{{ DESIGNPATH }}_images_panel/icons/modules/clientgroup-edit.png" alt=""/>{% trans %}TXT_EDIT_CLIENT_GROUP{% endtrans %}</h2>
<ul class="possibilities">
	<li><a href="{{ URL }}clientgroup" class="button return" title="{% trans %}TXT_RETURN_TO_PREVIOUS_SCREEN{% endtrans %}"><span><img src="{{ DESIGNPATH }}_images_panel/icons/buttons/arrow-left-gray.png" title="{% trans %}TXT_CLIENT_GROUPS_LIST{% endtrans %}" alt="{% trans %}TXT_CLIENT_GROUPS_LIST{% endtrans %}"/></span></a></li>
	<!-- <li><a href="#clientgroup" rel="reset" class="button" title="{% trans %}TXT_START_AGAIN{% endtrans %}"><span><img src="{{ DESIGNPATH }}_images_panel/icons/buttons/clean.png" alt=""/>{% trans %}TXT_START_AGAIN{% endtrans %}</span></a></li> -->
	<li><a href="#clientgroup" rel="submit" class="button" title="{% trans %}TXT_SAVE{% endtrans %}"><span><img src="{{ DESIGNPATH }}_images_panel/icons/buttons/check.png" alt=""/>{% trans %}TXT_SAVE{% endtrans %}</span></a></li>
</ul>
{{ form }}
{% endblock %}