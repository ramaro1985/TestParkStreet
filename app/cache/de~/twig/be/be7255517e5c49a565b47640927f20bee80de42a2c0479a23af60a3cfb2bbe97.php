<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b351ed2c5ae5bbdcd0d6fd1c2a00842cb1ac9416c36356884b82f313dbecb3fb extends Twig_Template
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
        $__internal_72c13f0979c6b14f6554e5d4eb3bf95f75b37a4e65642e14f36066a2398b9dd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c13f0979c6b14f6554e5d4eb3bf95f75b37a4e65642e14f36066a2398b9dd6->enter($__internal_72c13f0979c6b14f6554e5d4eb3bf95f75b37a4e65642e14f36066a2398b9dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72c13f0979c6b14f6554e5d4eb3bf95f75b37a4e65642e14f36066a2398b9dd6->leave($__internal_72c13f0979c6b14f6554e5d4eb3bf95f75b37a4e65642e14f36066a2398b9dd6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_892a7a37e2a00cbab94186008bbe504faff90464d55275781f04eb82dba25ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892a7a37e2a00cbab94186008bbe504faff90464d55275781f04eb82dba25ab4->enter($__internal_892a7a37e2a00cbab94186008bbe504faff90464d55275781f04eb82dba25ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_892a7a37e2a00cbab94186008bbe504faff90464d55275781f04eb82dba25ab4->leave($__internal_892a7a37e2a00cbab94186008bbe504faff90464d55275781f04eb82dba25ab4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7cfd197ba3321344d875d2badf5aa27707f5de2820dd4fc7dd86701bbc76824c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cfd197ba3321344d875d2badf5aa27707f5de2820dd4fc7dd86701bbc76824c->enter($__internal_7cfd197ba3321344d875d2badf5aa27707f5de2820dd4fc7dd86701bbc76824c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7cfd197ba3321344d875d2badf5aa27707f5de2820dd4fc7dd86701bbc76824c->leave($__internal_7cfd197ba3321344d875d2badf5aa27707f5de2820dd4fc7dd86701bbc76824c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e89dd5f93e347f6896eb606d6163a28c698530f21796f46b8352238d213251f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89dd5f93e347f6896eb606d6163a28c698530f21796f46b8352238d213251f2->enter($__internal_e89dd5f93e347f6896eb606d6163a28c698530f21796f46b8352238d213251f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e89dd5f93e347f6896eb606d6163a28c698530f21796f46b8352238d213251f2->leave($__internal_e89dd5f93e347f6896eb606d6163a28c698530f21796f46b8352238d213251f2_prof);

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
