<?php

/* base.html.twig */
class __TwigTemplate_3fe6ae848feefb883239cced74db25e4925fb03046e9376243d44fcc2f01d359 extends Twig_Template
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
        $__internal_2a08de1480f90be85bbc261c65b51bf8bcb4fb84e1c45b1626fb7ea35158a4d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a08de1480f90be85bbc261c65b51bf8bcb4fb84e1c45b1626fb7ea35158a4d7->enter($__internal_2a08de1480f90be85bbc261c65b51bf8bcb4fb84e1c45b1626fb7ea35158a4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2a08de1480f90be85bbc261c65b51bf8bcb4fb84e1c45b1626fb7ea35158a4d7->leave($__internal_2a08de1480f90be85bbc261c65b51bf8bcb4fb84e1c45b1626fb7ea35158a4d7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec85a1eff9aa2214f0e3f66edd23aa1b2edf53fcfa35f3e50b583cd7bcbf9a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec85a1eff9aa2214f0e3f66edd23aa1b2edf53fcfa35f3e50b583cd7bcbf9a59->enter($__internal_ec85a1eff9aa2214f0e3f66edd23aa1b2edf53fcfa35f3e50b583cd7bcbf9a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ec85a1eff9aa2214f0e3f66edd23aa1b2edf53fcfa35f3e50b583cd7bcbf9a59->leave($__internal_ec85a1eff9aa2214f0e3f66edd23aa1b2edf53fcfa35f3e50b583cd7bcbf9a59_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1e082262bcaa1aa921b00e631318082358a63a8553b5f12d322576c1d25e807c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e082262bcaa1aa921b00e631318082358a63a8553b5f12d322576c1d25e807c->enter($__internal_1e082262bcaa1aa921b00e631318082358a63a8553b5f12d322576c1d25e807c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
\t";
        
        $__internal_1e082262bcaa1aa921b00e631318082358a63a8553b5f12d322576c1d25e807c->leave($__internal_1e082262bcaa1aa921b00e631318082358a63a8553b5f12d322576c1d25e807c_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_299f03481e220ebc5695405c7acb0b12be1e209704b49e4c077f8e245945efcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299f03481e220ebc5695405c7acb0b12be1e209704b49e4c077f8e245945efcb->enter($__internal_299f03481e220ebc5695405c7acb0b12be1e209704b49e4c077f8e245945efcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "\t\t<script src=\"//code.jquery.com/jquery-1.12.0.min.js\"></script>
\t\t<script src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
\t";
        
        $__internal_299f03481e220ebc5695405c7acb0b12be1e209704b49e4c077f8e245945efcb->leave($__internal_299f03481e220ebc5695405c7acb0b12be1e209704b49e4c077f8e245945efcb_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_101d47f3c851bfe7028578bdb38971502bfce212d3e96731d56fbf51bee49fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_101d47f3c851bfe7028578bdb38971502bfce212d3e96731d56fbf51bee49fbc->enter($__internal_101d47f3c851bfe7028578bdb38971502bfce212d3e96731d56fbf51bee49fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "
";
        
        $__internal_101d47f3c851bfe7028578bdb38971502bfce212d3e96731d56fbf51bee49fbc->leave($__internal_101d47f3c851bfe7028578bdb38971502bfce212d3e96731d56fbf51bee49fbc_prof);

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
