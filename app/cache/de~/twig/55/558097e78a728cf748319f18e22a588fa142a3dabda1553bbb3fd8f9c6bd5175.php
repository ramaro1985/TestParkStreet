<?php

/* base.html.twig */
class __TwigTemplate_e7234c6d17e48800e527a8bede3499712998cc502b9b3398defb807a146447f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a982266143f1cde1e4ffc247c4042b3b7eb747ca147412d318c778e25ee29c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a982266143f1cde1e4ffc247c4042b3b7eb747ca147412d318c778e25ee29c2->enter($__internal_8a982266143f1cde1e4ffc247c4042b3b7eb747ca147412d318c778e25ee29c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" ng-app=\"app\">
<head>
\t<meta charset=\"UTF-8\"/>
\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body ng-controller=\"MainCtrl\" class=\"container\">
";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "</body>
</html>";
        
        $__internal_8a982266143f1cde1e4ffc247c4042b3b7eb747ca147412d318c778e25ee29c2->leave($__internal_8a982266143f1cde1e4ffc247c4042b3b7eb747ca147412d318c778e25ee29c2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c1153242a1684b2aecfa7050eeadc8cd3be9757285dca6a3c6d605d0afc4def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1153242a1684b2aecfa7050eeadc8cd3be9757285dca6a3c6d605d0afc4def->enter($__internal_8c1153242a1684b2aecfa7050eeadc8cd3be9757285dca6a3c6d605d0afc4def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8c1153242a1684b2aecfa7050eeadc8cd3be9757285dca6a3c6d605d0afc4def->leave($__internal_8c1153242a1684b2aecfa7050eeadc8cd3be9757285dca6a3c6d605d0afc4def_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7fb1fc71ad8d20c23c4e22003c22b0d2e608ea05dd7767e7c2c3871d33c9868a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb1fc71ad8d20c23c4e22003c22b0d2e608ea05dd7767e7c2c3871d33c9868a->enter($__internal_7fb1fc71ad8d20c23c4e22003c22b0d2e608ea05dd7767e7c2c3871d33c9868a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
\t";
        
        $__internal_7fb1fc71ad8d20c23c4e22003c22b0d2e608ea05dd7767e7c2c3871d33c9868a->leave($__internal_7fb1fc71ad8d20c23c4e22003c22b0d2e608ea05dd7767e7c2c3871d33c9868a_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f17ca0f4933540bc67a21724f0a4d9f99fe604aa25ffabd8b2690a7148ae227a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17ca0f4933540bc67a21724f0a4d9f99fe604aa25ffabd8b2690a7148ae227a->enter($__internal_f17ca0f4933540bc67a21724f0a4d9f99fe604aa25ffabd8b2690a7148ae227a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "\t\t<script src=\"//code.jquery.com/jquery-1.12.0.min.js\"></script>
\t\t<script src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
\t";
        
        $__internal_f17ca0f4933540bc67a21724f0a4d9f99fe604aa25ffabd8b2690a7148ae227a->leave($__internal_f17ca0f4933540bc67a21724f0a4d9f99fe604aa25ffabd8b2690a7148ae227a_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_11484326e7979f084903fd87d58788f199059f3e6225ba14a8b026255426b189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11484326e7979f084903fd87d58788f199059f3e6225ba14a8b026255426b189->enter($__internal_11484326e7979f084903fd87d58788f199059f3e6225ba14a8b026255426b189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "
";
        
        $__internal_11484326e7979f084903fd87d58788f199059f3e6225ba14a8b026255426b189->leave($__internal_11484326e7979f084903fd87d58788f199059f3e6225ba14a8b026255426b189_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 19,  101 => 18,  91 => 11,  85 => 10,  76 => 7,  70 => 6,  58 => 5,  50 => 21,  48 => 18,  41 => 15,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\" ng-app=\"app\">
<head>
\t<meta charset=\"UTF-8\"/>
\t<title>{% block title %}Welcome!{% endblock %}</title>
\t{% block stylesheets %}
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
\t{% endblock %}
\t{% block  javascripts %}
\t\t<script src=\"//code.jquery.com/jquery-1.12.0.min.js\"></script>
\t\t<script src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
\t{% endblock %}
\t<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>
<body ng-controller=\"MainCtrl\" class=\"container\">
{% block body %}

{% endblock %}
</body>
</html>";
    }
}
