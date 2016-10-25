<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4edc570d3f7fec1b91aa30d0a1f2337d989518195d618d029c173153603b0ddb extends Twig_Template
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
        $__internal_48639c6a19c30c3027c1a1e296827407247cc8e871998699bc05729ca4e16711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48639c6a19c30c3027c1a1e296827407247cc8e871998699bc05729ca4e16711->enter($__internal_48639c6a19c30c3027c1a1e296827407247cc8e871998699bc05729ca4e16711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48639c6a19c30c3027c1a1e296827407247cc8e871998699bc05729ca4e16711->leave($__internal_48639c6a19c30c3027c1a1e296827407247cc8e871998699bc05729ca4e16711_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_61fc778a65908f546b9a611df931bfafe9394c2d39b38c1ae36c5cdbf3fc1280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61fc778a65908f546b9a611df931bfafe9394c2d39b38c1ae36c5cdbf3fc1280->enter($__internal_61fc778a65908f546b9a611df931bfafe9394c2d39b38c1ae36c5cdbf3fc1280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_61fc778a65908f546b9a611df931bfafe9394c2d39b38c1ae36c5cdbf3fc1280->leave($__internal_61fc778a65908f546b9a611df931bfafe9394c2d39b38c1ae36c5cdbf3fc1280_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_465a001a0d0211c5ae5027125fd3b5b11d8c19e8ab425fc3563fe19690d24ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465a001a0d0211c5ae5027125fd3b5b11d8c19e8ab425fc3563fe19690d24ae4->enter($__internal_465a001a0d0211c5ae5027125fd3b5b11d8c19e8ab425fc3563fe19690d24ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_465a001a0d0211c5ae5027125fd3b5b11d8c19e8ab425fc3563fe19690d24ae4->leave($__internal_465a001a0d0211c5ae5027125fd3b5b11d8c19e8ab425fc3563fe19690d24ae4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c9d2e2930fa9fc0d2efc6573a4a8a0a4ad4c990ec83c67315420a52548737fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c9d2e2930fa9fc0d2efc6573a4a8a0a4ad4c990ec83c67315420a52548737fd->enter($__internal_0c9d2e2930fa9fc0d2efc6573a4a8a0a4ad4c990ec83c67315420a52548737fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0c9d2e2930fa9fc0d2efc6573a4a8a0a4ad4c990ec83c67315420a52548737fd->leave($__internal_0c9d2e2930fa9fc0d2efc6573a4a8a0a4ad4c990ec83c67315420a52548737fd_prof);

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
