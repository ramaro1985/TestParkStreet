<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_59951d39aacd2517aa634110a8ba8c6fbfc6bf725bdb4dcdb0538207c9a4d189 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cccc4e871f7853f842e58a34afafa8aa3605928b9f7f30437f95ef378279c6f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cccc4e871f7853f842e58a34afafa8aa3605928b9f7f30437f95ef378279c6f5->enter($__internal_cccc4e871f7853f842e58a34afafa8aa3605928b9f7f30437f95ef378279c6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cccc4e871f7853f842e58a34afafa8aa3605928b9f7f30437f95ef378279c6f5->leave($__internal_cccc4e871f7853f842e58a34afafa8aa3605928b9f7f30437f95ef378279c6f5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5915affadb29af621008850e118a2796d1d15b40a5f41f44ce277094d8ba7257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5915affadb29af621008850e118a2796d1d15b40a5f41f44ce277094d8ba7257->enter($__internal_5915affadb29af621008850e118a2796d1d15b40a5f41f44ce277094d8ba7257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5915affadb29af621008850e118a2796d1d15b40a5f41f44ce277094d8ba7257->leave($__internal_5915affadb29af621008850e118a2796d1d15b40a5f41f44ce277094d8ba7257_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_570589871ad312e6755c69e24673250ee498bcc905ab5b8cd95d592680617034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570589871ad312e6755c69e24673250ee498bcc905ab5b8cd95d592680617034->enter($__internal_570589871ad312e6755c69e24673250ee498bcc905ab5b8cd95d592680617034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_570589871ad312e6755c69e24673250ee498bcc905ab5b8cd95d592680617034->leave($__internal_570589871ad312e6755c69e24673250ee498bcc905ab5b8cd95d592680617034_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ba7fd076944c92fd46fac2a00fce6747b15c97ace6a70a9df3388509e2304b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba7fd076944c92fd46fac2a00fce6747b15c97ace6a70a9df3388509e2304b3->enter($__internal_4ba7fd076944c92fd46fac2a00fce6747b15c97ace6a70a9df3388509e2304b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4ba7fd076944c92fd46fac2a00fce6747b15c97ace6a70a9df3388509e2304b3->leave($__internal_4ba7fd076944c92fd46fac2a00fce6747b15c97ace6a70a9df3388509e2304b3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
