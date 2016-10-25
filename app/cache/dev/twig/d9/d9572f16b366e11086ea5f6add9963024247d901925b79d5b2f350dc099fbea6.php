<?php

/* base.html.twig */
class __TwigTemplate_64336bc8b5f35efffbcd53c12e8d7e07f62e9d028b15b7ed0e672c9c42a8fa0f extends Twig_Template
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
        $__internal_359b29fe24719083f5e6c693e1ffb66170a502e728d7a7149cd87fc10003feb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359b29fe24719083f5e6c693e1ffb66170a502e728d7a7149cd87fc10003feb0->enter($__internal_359b29fe24719083f5e6c693e1ffb66170a502e728d7a7149cd87fc10003feb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_359b29fe24719083f5e6c693e1ffb66170a502e728d7a7149cd87fc10003feb0->leave($__internal_359b29fe24719083f5e6c693e1ffb66170a502e728d7a7149cd87fc10003feb0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b28f866f60071f69e84d068b9286a8fa9a6b7898c17db5e933a7fa8ee5f81e9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b28f866f60071f69e84d068b9286a8fa9a6b7898c17db5e933a7fa8ee5f81e9d->enter($__internal_b28f866f60071f69e84d068b9286a8fa9a6b7898c17db5e933a7fa8ee5f81e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b28f866f60071f69e84d068b9286a8fa9a6b7898c17db5e933a7fa8ee5f81e9d->leave($__internal_b28f866f60071f69e84d068b9286a8fa9a6b7898c17db5e933a7fa8ee5f81e9d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b7b7c05b2827f6b7eb040474f1d90bc095dfaab2fb52a15761c9fa50ad1f3739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b7c05b2827f6b7eb040474f1d90bc095dfaab2fb52a15761c9fa50ad1f3739->enter($__internal_b7b7c05b2827f6b7eb040474f1d90bc095dfaab2fb52a15761c9fa50ad1f3739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
\t";
        
        $__internal_b7b7c05b2827f6b7eb040474f1d90bc095dfaab2fb52a15761c9fa50ad1f3739->leave($__internal_b7b7c05b2827f6b7eb040474f1d90bc095dfaab2fb52a15761c9fa50ad1f3739_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fce3b6094957d724b5f524a2c89eff94d71b480f9de255596a7eda79f8d70f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce3b6094957d724b5f524a2c89eff94d71b480f9de255596a7eda79f8d70f4f->enter($__internal_fce3b6094957d724b5f524a2c89eff94d71b480f9de255596a7eda79f8d70f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "\t\t<script src=\"//code.jquery.com/jquery-1.12.0.min.js\"></script>
\t\t<script src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
\t";
        
        $__internal_fce3b6094957d724b5f524a2c89eff94d71b480f9de255596a7eda79f8d70f4f->leave($__internal_fce3b6094957d724b5f524a2c89eff94d71b480f9de255596a7eda79f8d70f4f_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_95c3c75b784751fc88329c73b3ce1efe8b45ecf0c916b6d1539a7813d276e153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c3c75b784751fc88329c73b3ce1efe8b45ecf0c916b6d1539a7813d276e153->enter($__internal_95c3c75b784751fc88329c73b3ce1efe8b45ecf0c916b6d1539a7813d276e153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "
";
        
        $__internal_95c3c75b784751fc88329c73b3ce1efe8b45ecf0c916b6d1539a7813d276e153->leave($__internal_95c3c75b784751fc88329c73b3ce1efe8b45ecf0c916b6d1539a7813d276e153_prof);

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
