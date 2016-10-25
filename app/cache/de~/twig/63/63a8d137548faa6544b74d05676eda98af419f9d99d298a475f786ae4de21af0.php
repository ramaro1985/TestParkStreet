<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d78cf20ba3c6544c96c010b464a78b5a6e39317871239a98f78ae9247cbba6db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_14b80c00da9b0472d080170b6068dca826a636f66c5c05b36e3d979ad64ba2d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14b80c00da9b0472d080170b6068dca826a636f66c5c05b36e3d979ad64ba2d6->enter($__internal_14b80c00da9b0472d080170b6068dca826a636f66c5c05b36e3d979ad64ba2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14b80c00da9b0472d080170b6068dca826a636f66c5c05b36e3d979ad64ba2d6->leave($__internal_14b80c00da9b0472d080170b6068dca826a636f66c5c05b36e3d979ad64ba2d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9225f180d68445251029b0490e7c4b192a503e2b4d5675f088cb8f60a8fcadb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9225f180d68445251029b0490e7c4b192a503e2b4d5675f088cb8f60a8fcadb7->enter($__internal_9225f180d68445251029b0490e7c4b192a503e2b4d5675f088cb8f60a8fcadb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9225f180d68445251029b0490e7c4b192a503e2b4d5675f088cb8f60a8fcadb7->leave($__internal_9225f180d68445251029b0490e7c4b192a503e2b4d5675f088cb8f60a8fcadb7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_828d70dd93c0242da23e918b4f83ac03bdbf98d5bf19bff9325d88a5a9d91cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828d70dd93c0242da23e918b4f83ac03bdbf98d5bf19bff9325d88a5a9d91cb7->enter($__internal_828d70dd93c0242da23e918b4f83ac03bdbf98d5bf19bff9325d88a5a9d91cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_828d70dd93c0242da23e918b4f83ac03bdbf98d5bf19bff9325d88a5a9d91cb7->leave($__internal_828d70dd93c0242da23e918b4f83ac03bdbf98d5bf19bff9325d88a5a9d91cb7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_af9a8b684813f81659b6d785d191adda4ac8be5ded404aa1b50c80f2efdcd631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af9a8b684813f81659b6d785d191adda4ac8be5ded404aa1b50c80f2efdcd631->enter($__internal_af9a8b684813f81659b6d785d191adda4ac8be5ded404aa1b50c80f2efdcd631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_af9a8b684813f81659b6d785d191adda4ac8be5ded404aa1b50c80f2efdcd631->leave($__internal_af9a8b684813f81659b6d785d191adda4ac8be5ded404aa1b50c80f2efdcd631_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
