<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4cf19d22f6e66c8449e43f71dc8a99e7e3aaeb957345555f8811b2accde43a52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09ad659e19094aaf9b053d0206fbb2cf74a200cb7ffcf1dee4297252eae716a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ad659e19094aaf9b053d0206fbb2cf74a200cb7ffcf1dee4297252eae716a5->enter($__internal_09ad659e19094aaf9b053d0206fbb2cf74a200cb7ffcf1dee4297252eae716a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09ad659e19094aaf9b053d0206fbb2cf74a200cb7ffcf1dee4297252eae716a5->leave($__internal_09ad659e19094aaf9b053d0206fbb2cf74a200cb7ffcf1dee4297252eae716a5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e1a7cfcc2126266fb12584c4267617e6bbc22299c44d254561bef60c937f9ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a7cfcc2126266fb12584c4267617e6bbc22299c44d254561bef60c937f9ac5->enter($__internal_e1a7cfcc2126266fb12584c4267617e6bbc22299c44d254561bef60c937f9ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e1a7cfcc2126266fb12584c4267617e6bbc22299c44d254561bef60c937f9ac5->leave($__internal_e1a7cfcc2126266fb12584c4267617e6bbc22299c44d254561bef60c937f9ac5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_064cb0ca9518cc0fa43b0c973163d8a5ec918cb4034ffd9f03bbbe91ed44ba59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064cb0ca9518cc0fa43b0c973163d8a5ec918cb4034ffd9f03bbbe91ed44ba59->enter($__internal_064cb0ca9518cc0fa43b0c973163d8a5ec918cb4034ffd9f03bbbe91ed44ba59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_064cb0ca9518cc0fa43b0c973163d8a5ec918cb4034ffd9f03bbbe91ed44ba59->leave($__internal_064cb0ca9518cc0fa43b0c973163d8a5ec918cb4034ffd9f03bbbe91ed44ba59_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ff8fb6eca55cc0c5b58762a92144fc26bdb35442f0b1c0458005107a0ab8199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff8fb6eca55cc0c5b58762a92144fc26bdb35442f0b1c0458005107a0ab8199->enter($__internal_7ff8fb6eca55cc0c5b58762a92144fc26bdb35442f0b1c0458005107a0ab8199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7ff8fb6eca55cc0c5b58762a92144fc26bdb35442f0b1c0458005107a0ab8199->leave($__internal_7ff8fb6eca55cc0c5b58762a92144fc26bdb35442f0b1c0458005107a0ab8199_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
