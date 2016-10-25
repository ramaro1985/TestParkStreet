<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a5ab2507aa45cf58c31f3e354e1ab6511da7acbf921aaec8fe1c307d33bdff29 extends Twig_Template
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
        $__internal_f27b6439a9b2d24a8216622e3c0374f3a0745a7cc7400e60e6ed867e21d67e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27b6439a9b2d24a8216622e3c0374f3a0745a7cc7400e60e6ed867e21d67e66->enter($__internal_f27b6439a9b2d24a8216622e3c0374f3a0745a7cc7400e60e6ed867e21d67e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f27b6439a9b2d24a8216622e3c0374f3a0745a7cc7400e60e6ed867e21d67e66->leave($__internal_f27b6439a9b2d24a8216622e3c0374f3a0745a7cc7400e60e6ed867e21d67e66_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3ba4cf4c32fe5e312d2626c7b982b89b8cc5dfcb7a953e43db97111ed66fd457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba4cf4c32fe5e312d2626c7b982b89b8cc5dfcb7a953e43db97111ed66fd457->enter($__internal_3ba4cf4c32fe5e312d2626c7b982b89b8cc5dfcb7a953e43db97111ed66fd457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3ba4cf4c32fe5e312d2626c7b982b89b8cc5dfcb7a953e43db97111ed66fd457->leave($__internal_3ba4cf4c32fe5e312d2626c7b982b89b8cc5dfcb7a953e43db97111ed66fd457_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3241836f1ac88a4189901f9c41887d0625e5e07f9d5885ec7fe89149a7c19a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3241836f1ac88a4189901f9c41887d0625e5e07f9d5885ec7fe89149a7c19a9e->enter($__internal_3241836f1ac88a4189901f9c41887d0625e5e07f9d5885ec7fe89149a7c19a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3241836f1ac88a4189901f9c41887d0625e5e07f9d5885ec7fe89149a7c19a9e->leave($__internal_3241836f1ac88a4189901f9c41887d0625e5e07f9d5885ec7fe89149a7c19a9e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec5cd7fc63bf6beb7f3c6bf5b71c662eb7b517104ec2a1472ac5420f838b50dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5cd7fc63bf6beb7f3c6bf5b71c662eb7b517104ec2a1472ac5420f838b50dd->enter($__internal_ec5cd7fc63bf6beb7f3c6bf5b71c662eb7b517104ec2a1472ac5420f838b50dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ec5cd7fc63bf6beb7f3c6bf5b71c662eb7b517104ec2a1472ac5420f838b50dd->leave($__internal_ec5cd7fc63bf6beb7f3c6bf5b71c662eb7b517104ec2a1472ac5420f838b50dd_prof);

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
