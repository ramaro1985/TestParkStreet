<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c875a0a1e655977fbd77c58812fafdb537493bd990d59bd67d985bfb5216d8f9 extends Twig_Template
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
        $__internal_dee910376484411af1b5c37a3a6acb1ff72c2cf5a4c17d6731bed524903da178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dee910376484411af1b5c37a3a6acb1ff72c2cf5a4c17d6731bed524903da178->enter($__internal_dee910376484411af1b5c37a3a6acb1ff72c2cf5a4c17d6731bed524903da178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dee910376484411af1b5c37a3a6acb1ff72c2cf5a4c17d6731bed524903da178->leave($__internal_dee910376484411af1b5c37a3a6acb1ff72c2cf5a4c17d6731bed524903da178_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4afddf876c23841b4f20c9324224c503df7c6b798ebe112b4fcebe990c523cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4afddf876c23841b4f20c9324224c503df7c6b798ebe112b4fcebe990c523cb4->enter($__internal_4afddf876c23841b4f20c9324224c503df7c6b798ebe112b4fcebe990c523cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4afddf876c23841b4f20c9324224c503df7c6b798ebe112b4fcebe990c523cb4->leave($__internal_4afddf876c23841b4f20c9324224c503df7c6b798ebe112b4fcebe990c523cb4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e29171068d4ef008f85cd2a70b32b9e1601c3ceaf4b417998c800ae3de0618f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29171068d4ef008f85cd2a70b32b9e1601c3ceaf4b417998c800ae3de0618f9->enter($__internal_e29171068d4ef008f85cd2a70b32b9e1601c3ceaf4b417998c800ae3de0618f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e29171068d4ef008f85cd2a70b32b9e1601c3ceaf4b417998c800ae3de0618f9->leave($__internal_e29171068d4ef008f85cd2a70b32b9e1601c3ceaf4b417998c800ae3de0618f9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bf97bfe373fac6cb3b375b1a9c5c171ec704091a9e65bdf5742f959ab6b3cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf97bfe373fac6cb3b375b1a9c5c171ec704091a9e65bdf5742f959ab6b3cad->enter($__internal_5bf97bfe373fac6cb3b375b1a9c5c171ec704091a9e65bdf5742f959ab6b3cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5bf97bfe373fac6cb3b375b1a9c5c171ec704091a9e65bdf5742f959ab6b3cad->leave($__internal_5bf97bfe373fac6cb3b375b1a9c5c171ec704091a9e65bdf5742f959ab6b3cad_prof);

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
