<?php

/* frontend/index.html.twig */
class __TwigTemplate_6d808c8bba4c668b77c0150da3c38f18dcbe719989928408cb142f957ea654df extends Twig_Template
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
        $__internal_05deda6c8af9bdeb8b0603ca1be832a7c87340009405461e63e629320533d35d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05deda6c8af9bdeb8b0603ca1be832a7c87340009405461e63e629320533d35d->enter($__internal_05deda6c8af9bdeb8b0603ca1be832a7c87340009405461e63e629320533d35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05deda6c8af9bdeb8b0603ca1be832a7c87340009405461e63e629320533d35d->leave($__internal_05deda6c8af9bdeb8b0603ca1be832a7c87340009405461e63e629320533d35d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_21587bed6c4a54965c0e44e1c1e2aec15c07e21761edd903d60e44480bda03a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21587bed6c4a54965c0e44e1c1e2aec15c07e21761edd903d60e44480bda03a4->enter($__internal_21587bed6c4a54965c0e44e1c1e2aec15c07e21761edd903d60e44480bda03a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"container-fluid\">
\t\t<h1>Test ParkStreet</h1>
\t\t<p>Resize the browser window to see the effect.</p>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2\" style=\"background-color:lavender;\">Invoice Num</div>
\t\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2\" style=\"background-color:lavender;\">Invoice Date</div>
\t\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2\" style=\"background-color:lavender;\">Qty</div>
\t\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2\" style=\"background-color:lavender;\">Product</div>
\t\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2\" style=\"background-color:lavender;\">Price</div>
\t\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2\" style=\"background-color:lavender;\">Total</div>
\t\t</div>
\t</div>
";
        
        $__internal_21587bed6c4a54965c0e44e1c1e2aec15c07e21761edd903d60e44480bda03a4->leave($__internal_21587bed6c4a54965c0e44e1c1e2aec15c07e21761edd903d60e44480bda03a4_prof);

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
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}
{% block body %}
\t<div class=\"container-fluid\">
\t\t<h1>Test ParkStreet</h1>
\t\t<p>Resize the browser window to see the effect.</p>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2\" style=\"background-color:lavender;\">Invoice Num</div>
\t\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2\" style=\"background-color:lavender;\">Invoice Date</div>
\t\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2\" style=\"background-color:lavender;\">Qty</div>
\t\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2\" style=\"background-color:lavender;\">Product</div>
\t\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2\" style=\"background-color:lavender;\">Price</div>
\t\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2\" style=\"background-color:lavender;\">Total</div>
\t\t</div>
\t</div>
{% endblock %}

";
    }
}
