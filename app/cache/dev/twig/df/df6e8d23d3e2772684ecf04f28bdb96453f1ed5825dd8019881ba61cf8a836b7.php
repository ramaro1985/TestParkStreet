<?php

/* frontend/index.html.twig */
class __TwigTemplate_54f0a5e3f13c9c3541c517db144f2d882dd312e2e23a6c866fee358bf2aac345 extends Twig_Template
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
        $__internal_806ed7c1d5c3f3daf0f171138860dab3729dd7fef39bd9fdcbe13fccdc0d36aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806ed7c1d5c3f3daf0f171138860dab3729dd7fef39bd9fdcbe13fccdc0d36aa->enter($__internal_806ed7c1d5c3f3daf0f171138860dab3729dd7fef39bd9fdcbe13fccdc0d36aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_806ed7c1d5c3f3daf0f171138860dab3729dd7fef39bd9fdcbe13fccdc0d36aa->leave($__internal_806ed7c1d5c3f3daf0f171138860dab3729dd7fef39bd9fdcbe13fccdc0d36aa_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_14821883a40f95a1c9da0c09c6d4c2ec015a541eee5fa10839db0c43ab9cbdc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14821883a40f95a1c9da0c09c6d4c2ec015a541eee5fa10839db0c43ab9cbdc5->enter($__internal_14821883a40f95a1c9da0c09c6d4c2ec015a541eee5fa10839db0c43ab9cbdc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"container-fluid\">
\t\t<h1>Test ParkStreet</h1>
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
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 48
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" id=\"";
            // line 49
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
        // line 52
        echo "
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-4 col-sm-4 col-lg-4\">
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
\t\t\t<div class=\"col-xs-1 col-sm-1 col-lg-1 hide\" id=\"loadingOff\">
\t\t\t\t<div style=\"margin-top: 30px\">
\t\t\t\t\t<img id=\"loading\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("frontend/images/loading.gif"), "html", null, true);
        echo "\" style=\"border: 0 none;\">
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
        // line 90
        echo twig_include($this->env, $context, "frontend/data.html.twig");
        echo "
\t\t</div>
\t</div>
\t<input type=\"hidden\" id=\"client_id\" value=\"0\">
\t<input type=\"hidden\" id=\"product_id\" value=\"0\">
\t<input type=\"hidden\" id=\"date_id\" value=\"0\">
\t<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("frontend/js/lib/test.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_14821883a40f95a1c9da0c09c6d4c2ec015a541eee5fa10839db0c43ab9cbdc5->leave($__internal_14821883a40f95a1c9da0c09c6d4c2ec015a541eee5fa10839db0c43ab9cbdc5_prof);

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
        return array (  156 => 96,  147 => 90,  131 => 77,  104 => 52,  93 => 49,  90 => 48,  86 => 47,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}
{% block body %}
\t<div class=\"container-fluid\">
\t\t<h1>Test ParkStreet</h1>
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
\t\t\t<div class=\"col-xs-4 col-sm-4 col-lg-4\">
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
\t\t\t<div class=\"col-xs-1 col-sm-1 col-lg-1 hide\" id=\"loadingOff\">
\t\t\t\t<div style=\"margin-top: 30px\">
\t\t\t\t\t<img id=\"loading\" src=\"{{ asset('frontend/images/loading.gif') }}\" style=\"border: 0 none;\">
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
\t<script src=\"{{ asset('frontend/js/lib/test.js') }}\"></script>
{% endblock %}";
    }
}
