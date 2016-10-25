<?php

/* frontend/index.html.twig */
class __TwigTemplate_ddc31413c88fe6192d9869f60d754bbed9f9d324b5372ee5894286d4f35dba7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "frontend/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc3ae1c309cd93a49b721c4af23e0172284af5bd2d00b535eb090bc887ab8cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc3ae1c309cd93a49b721c4af23e0172284af5bd2d00b535eb090bc887ab8cdd->enter($__internal_dc3ae1c309cd93a49b721c4af23e0172284af5bd2d00b535eb090bc887ab8cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc3ae1c309cd93a49b721c4af23e0172284af5bd2d00b535eb090bc887ab8cdd->leave($__internal_dc3ae1c309cd93a49b721c4af23e0172284af5bd2d00b535eb090bc887ab8cdd_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b97161bfa5965d52e8c4e5fd26e6fdd2f5e6a60bd293d5138edd43ed6a47bf6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97161bfa5965d52e8c4e5fd26e6fdd2f5e6a60bd293d5138edd43ed6a47bf6a->enter($__internal_b97161bfa5965d52e8c4e5fd26e6fdd2f5e6a60bd293d5138edd43ed6a47bf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"container-fluid\">
\t\t<h1>Test ParkStreet</h1>
\t\t<p>Resize the browser window to see the effect.</p>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-3 col-sm-3 col-lg-3\">
\t\t\t\t<div class=\"list-group\" style=\"margin-top: 30px\">
\t\t\t\t\t<div id=\"date_filter\" class=\"list-group-item\" data-toggle=\"tooltip\" data-placement=\"left\">
\t\t\t\t\t\t<div class=\"panel-body\" style=\"padding: 0px 0px \">
\t\t\t\t\t\t\t<li class=\"dropdown list-group-item-text\">
\t\t\t\t\t\t\t\t<a id=\"date_id\" href=\"#\" class=\"dropdown-toggle text-right\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<span id=\"0\" class=\"pull-left minimum_text\">Fill by date</span>
\t\t\t\t\t\t\t\t\t<b class=\"caret\" style=\"color: #000000\"></b>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu pre-scrollable date_list\" id=\"date_list\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" id=\"1@date\">Last Month To Date</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" id=\"2@date\">This Month</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" id=\"3@date\">This Year</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" id=\"4@date\">Last Year</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-3 col-sm-3 col-lg-3\">
\t\t\t\t<div class=\"list-group\" style=\"margin-top: 30px\">
\t\t\t\t\t<div id=\"client_filter\" class=\"list-group-item\" data-toggle=\"tooltip\" data-placement=\"left\">
\t\t\t\t\t\t<div class=\"panel-body\" style=\"padding: 0px 0px \">
\t\t\t\t\t\t\t<li class=\"dropdown list-group-item-text\">
\t\t\t\t\t\t\t\t<a id=\"client_id\" href=\"#\" class=\"dropdown-toggle text-right\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<span id=\"0\" class=\"pull-left minimum_text\">All Clients</span>
\t\t\t\t\t\t\t\t\t<b class=\"caret\" style=\"color: #000000\"></b>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu pre-scrollable client_list\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" id=\"0@client\">All Clients</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 49
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" id=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "getClientId", array()), "html", null, true);
            echo "@client\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "getClientName", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6 col-sm-6 col-lg-6\">
\t\t\t\t<div class=\"list-group\" style=\"margin-top: 30px\">
\t\t\t\t\t<div id=\"product_filter\" class=\"list-group-item\" data-toggle=\"tooltip\" data-placement=\"left\">
\t\t\t\t\t\t<div class=\"panel-body\" style=\"padding: 0px 0px \">
\t\t\t\t\t\t\t<li class=\"dropdown list-group-item-text\">
\t\t\t\t\t\t\t\t<a id=\"product_id\" href=\"#\" class=\"dropdown-toggle text-right\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<span id=\"0\" class=\"pull-left minimum_text\">Products</span>
\t\t\t\t\t\t\t\t\t<b class=\"caret\" style=\"color: #000000\"></b>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu pre-scrollable product_list\" id=\"product_list\">
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\" style=\"background-color:lavender;\">
\t\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2 table-bordered\">Invoice Num</div>
\t\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2 table-bordered\">Invoice Date</div>
\t\t\t<div class=\"col-xs-1 col-sm-2 col-lg-1 table-bordered\">Qty</div>
\t\t\t<div class=\"col-xs-4 col-sm-2 col-lg-4 table-bordered\">Product</div>
\t\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2 table-bordered\">Price</div>
\t\t\t<div class=\"col-xs-1 col-sm-2 col-lg-1 table-bordered\">Total</div>
\t\t</div>
\t\t<div id=\"all_content\">
\t\t\t";
        // line 86
        echo twig_include($this->env, $context, "frontend/data.html.twig");
        echo "
\t\t</div>
\t</div>
\t<input type=\"hidden\" id=\"client_id\" value=\"0\">
\t<input type=\"hidden\" id=\"product_id\" value=\"0\">
\t<input type=\"hidden\" id=\"date_id\" value=\"0\">
\t<script type=\"text/javascript\">
\t\tvar start = 1;
\t\tfunction ChangeDropDown(element)
\t\t{
\t\t\tjQuery(element).parents(\".dropdown\").find(\".dropdown-toggle\").find(\"span\").text(jQuery(element).text());
\t\t\tvar fill = element.id.split('@');

\t\t\tif (fill[1] == \"client\") {
\t\t\t\tjQuery(\"#client_id\").val(fill[0]);
\t\t\t\tjQuery(\"#product_list\").empty()
\t\t\t}

\t\t\tif (fill[1] == \"product\") {
\t\t\t\tjQuery(\"#product_id\").val(fill[0]);
\t\t\t\tGetSearchValues();
\t\t\t}
\t\t\tif (fill[1] == \"date\") {
\t\t\t\tjQuery(\"#date_id\").val(fill[0]);
\t\t\t}
\t\t}
\t\tfunction GetSearchValues()
\t\t{
\t\t\tjQuery.ajax({
\t\t\t\turl: '";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "',
\t\t\t\ttype: \"POST\",
\t\t\t\tdata: {
\t\t\t\t\tstart: start,
\t\t\t\t\tclient_id: jQuery(\"#client_id\").val(),
\t\t\t\t\tproduct_id: jQuery(\"#product_id\").val(),
\t\t\t\t\tdate_id: jQuery(\"#date_id\").val()

\t\t\t\t},
\t\t\t\tsuccess: function (response)
\t\t\t\t{
\t\t\t\t\tjQuery('#all_content').empty();
\t\t\t\t\tjQuery('#product_list').empty();
\t\t\t\t\tjQuery('#all_content').html(response);
\t\t\t\t},
\t\t\t\terror: function (response)
\t\t\t\t{
\t\t\t\t\talert(response);
\t\t\t\t}
\t\t\t});
\t\t}
\t\tjQuery(document).ready(function ()
\t\t{
\t\t\tjQuery(\".dropdown\").find(\".dropdown-menu li a\").click(function ()
\t\t\t{
\t\t\t\tChangeDropDown(this);
\t\t\t\tGetSearchValues();
\t\t\t});

\t\t\tjQuery(\"#all_content\").on(\"click\", \".pagination span a\", function ()
\t\t\t{
\t\t\t\tvar url = jQuery(this).attr(\"href\");
\t\t\t\tvar currentvalue = url.split(\"page=\")[1];
\t\t\t\tstart = currentvalue;
\t\t\t\tGetSearchValues();
\t\t\t\treturn false;
\t\t\t});
\t\t})
\t</script>
";
        
        $__internal_b97161bfa5965d52e8c4e5fd26e6fdd2f5e6a60bd293d5138edd43ed6a47bf6a->leave($__internal_b97161bfa5965d52e8c4e5fd26e6fdd2f5e6a60bd293d5138edd43ed6a47bf6a_prof);

    }

    public function getTemplateName()
    {
        return "frontend/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 115,  140 => 86,  105 => 53,  94 => 50,  91 => 49,  87 => 48,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}
{% block body %}
\t<div class=\"container-fluid\">
\t\t<h1>Test ParkStreet</h1>
\t\t<p>Resize the browser window to see the effect.</p>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-3 col-sm-3 col-lg-3\">
\t\t\t\t<div class=\"list-group\" style=\"margin-top: 30px\">
\t\t\t\t\t<div id=\"date_filter\" class=\"list-group-item\" data-toggle=\"tooltip\" data-placement=\"left\">
\t\t\t\t\t\t<div class=\"panel-body\" style=\"padding: 0px 0px \">
\t\t\t\t\t\t\t<li class=\"dropdown list-group-item-text\">
\t\t\t\t\t\t\t\t<a id=\"date_id\" href=\"#\" class=\"dropdown-toggle text-right\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<span id=\"0\" class=\"pull-left minimum_text\">Fill by date</span>
\t\t\t\t\t\t\t\t\t<b class=\"caret\" style=\"color: #000000\"></b>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu pre-scrollable date_list\" id=\"date_list\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" id=\"1@date\">Last Month To Date</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" id=\"2@date\">This Month</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" id=\"3@date\">This Year</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" id=\"4@date\">Last Year</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-3 col-sm-3 col-lg-3\">
\t\t\t\t<div class=\"list-group\" style=\"margin-top: 30px\">
\t\t\t\t\t<div id=\"client_filter\" class=\"list-group-item\" data-toggle=\"tooltip\" data-placement=\"left\">
\t\t\t\t\t\t<div class=\"panel-body\" style=\"padding: 0px 0px \">
\t\t\t\t\t\t\t<li class=\"dropdown list-group-item-text\">
\t\t\t\t\t\t\t\t<a id=\"client_id\" href=\"#\" class=\"dropdown-toggle text-right\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<span id=\"0\" class=\"pull-left minimum_text\">All Clients</span>
\t\t\t\t\t\t\t\t\t<b class=\"caret\" style=\"color: #000000\"></b>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu pre-scrollable client_list\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" id=\"0@client\">All Clients</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% for client in clients %}
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" id=\"{{ client.getClientId }}@client\">{{ client.getClientName }}</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6 col-sm-6 col-lg-6\">
\t\t\t\t<div class=\"list-group\" style=\"margin-top: 30px\">
\t\t\t\t\t<div id=\"product_filter\" class=\"list-group-item\" data-toggle=\"tooltip\" data-placement=\"left\">
\t\t\t\t\t\t<div class=\"panel-body\" style=\"padding: 0px 0px \">
\t\t\t\t\t\t\t<li class=\"dropdown list-group-item-text\">
\t\t\t\t\t\t\t\t<a id=\"product_id\" href=\"#\" class=\"dropdown-toggle text-right\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<span id=\"0\" class=\"pull-left minimum_text\">Products</span>
\t\t\t\t\t\t\t\t\t<b class=\"caret\" style=\"color: #000000\"></b>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu pre-scrollable product_list\" id=\"product_list\">
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\" style=\"background-color:lavender;\">
\t\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2 table-bordered\">Invoice Num</div>
\t\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2 table-bordered\">Invoice Date</div>
\t\t\t<div class=\"col-xs-1 col-sm-2 col-lg-1 table-bordered\">Qty</div>
\t\t\t<div class=\"col-xs-4 col-sm-2 col-lg-4 table-bordered\">Product</div>
\t\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2 table-bordered\">Price</div>
\t\t\t<div class=\"col-xs-1 col-sm-2 col-lg-1 table-bordered\">Total</div>
\t\t</div>
\t\t<div id=\"all_content\">
\t\t\t{{ include('frontend/data.html.twig') }}
\t\t</div>
\t</div>
\t<input type=\"hidden\" id=\"client_id\" value=\"0\">
\t<input type=\"hidden\" id=\"product_id\" value=\"0\">
\t<input type=\"hidden\" id=\"date_id\" value=\"0\">
\t<script type=\"text/javascript\">
\t\tvar start = 1;
\t\tfunction ChangeDropDown(element)
\t\t{
\t\t\tjQuery(element).parents(\".dropdown\").find(\".dropdown-toggle\").find(\"span\").text(jQuery(element).text());
\t\t\tvar fill = element.id.split('@');

\t\t\tif (fill[1] == \"client\") {
\t\t\t\tjQuery(\"#client_id\").val(fill[0]);
\t\t\t\tjQuery(\"#product_list\").empty()
\t\t\t}

\t\t\tif (fill[1] == \"product\") {
\t\t\t\tjQuery(\"#product_id\").val(fill[0]);
\t\t\t\tGetSearchValues();
\t\t\t}
\t\t\tif (fill[1] == \"date\") {
\t\t\t\tjQuery(\"#date_id\").val(fill[0]);
\t\t\t}
\t\t}
\t\tfunction GetSearchValues()
\t\t{
\t\t\tjQuery.ajax({
\t\t\t\turl: '{{ path('index') }}',
\t\t\t\ttype: \"POST\",
\t\t\t\tdata: {
\t\t\t\t\tstart: start,
\t\t\t\t\tclient_id: jQuery(\"#client_id\").val(),
\t\t\t\t\tproduct_id: jQuery(\"#product_id\").val(),
\t\t\t\t\tdate_id: jQuery(\"#date_id\").val()

\t\t\t\t},
\t\t\t\tsuccess: function (response)
\t\t\t\t{
\t\t\t\t\tjQuery('#all_content').empty();
\t\t\t\t\tjQuery('#product_list').empty();
\t\t\t\t\tjQuery('#all_content').html(response);
\t\t\t\t},
\t\t\t\terror: function (response)
\t\t\t\t{
\t\t\t\t\talert(response);
\t\t\t\t}
\t\t\t});
\t\t}
\t\tjQuery(document).ready(function ()
\t\t{
\t\t\tjQuery(\".dropdown\").find(\".dropdown-menu li a\").click(function ()
\t\t\t{
\t\t\t\tChangeDropDown(this);
\t\t\t\tGetSearchValues();
\t\t\t});

\t\t\tjQuery(\"#all_content\").on(\"click\", \".pagination span a\", function ()
\t\t\t{
\t\t\t\tvar url = jQuery(this).attr(\"href\");
\t\t\t\tvar currentvalue = url.split(\"page=\")[1];
\t\t\t\tstart = currentvalue;
\t\t\t\tGetSearchValues();
\t\t\t\treturn false;
\t\t\t});
\t\t})
\t</script>
{% endblock %}";
    }
}
