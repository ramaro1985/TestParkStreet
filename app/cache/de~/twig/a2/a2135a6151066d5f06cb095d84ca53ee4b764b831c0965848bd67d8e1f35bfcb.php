<?php

/* frontend/data.html.twig */
class __TwigTemplate_b413c81dbecf2d641e5187df622985cab0dffe4151016808f15dd2a3cac862ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c96b5585eb783577f2f49cf3acd04d88a1d22e2dd93474ae95c60b1ffebe5190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96b5585eb783577f2f49cf3acd04d88a1d22e2dd93474ae95c60b1ffebe5190->enter($__internal_c96b5585eb783577f2f49cf3acd04d88a1d22e2dd93474ae95c60b1ffebe5190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend/data.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data_list"]) ? $context["data_list"] : $this->getContext($context, "data_list")));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 2
            echo "\t<div class=\"row\" style=\"background-color: lightgray\">
\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2 table-bordered\">";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "getInvoiceNum", array(), "method"), "html", null, true);
            echo "</div>
\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2 table-bordered\">";
            // line 4
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["list"], "getInvoiceDate", array(), "method"), "Y-m-d"), "html", null, true);
            echo "</div>
\t\t<div class=\"col-xs-1 col-sm-2 col-lg-1 table-bordered\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "getQty", array(), "method"), "html", null, true);
            echo "</div>
\t\t<div class=\"col-xs-4 col-sm-2 col-lg-4 table-bordered\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "getProductDescription", array(), "method"), "html", null, true);
            echo "</div>
\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2 table-bordered\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "getPrice", array(), "method"), "html", null, true);
            echo "</div>
\t\t<div class=\"col-xs-1 col-sm-2 col-lg-1 table-bordered\">";
            // line 8
            echo twig_escape_filter($this->env, ($this->getAttribute($context["list"], "getQty", array(), "method") * $this->getAttribute($context["list"], "getPrice", array(), "method")), "html", null, true);
            echo "</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "<div class=\"pagination pull-right\" style=\"margin-top: 15px\">
\t";
        // line 12
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["data_list"]) ? $context["data_list"] : $this->getContext($context, "data_list")));
        echo "
</div>
<script>
\t";
        // line 15
        if (((isset($context["client_id"]) ? $context["client_id"] : $this->getContext($context, "client_id")) != 0)) {
            // line 16
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data_products"]) ? $context["data_products"] : $this->getContext($context, "data_products")));
            foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                // line 17
                echo "\t\t\tjQuery(\"#product_list\").append(\"<li><a href='javascript:void(0)' onClick='ChangeDropDown(this)' id='";
                echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "getProductId", array(), "method"), "html", null, true);
                echo "@product'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "getProductDescription", array(), "method"), "html", null, true);
                echo "</a></li>\");
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t";
        }
        // line 20
        echo "</script>";
        
        $__internal_c96b5585eb783577f2f49cf3acd04d88a1d22e2dd93474ae95c60b1ffebe5190->leave($__internal_c96b5585eb783577f2f49cf3acd04d88a1d22e2dd93474ae95c60b1ffebe5190_prof);

    }

    public function getTemplateName()
    {
        return "frontend/data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  85 => 19,  74 => 17,  69 => 16,  67 => 15,  61 => 12,  58 => 11,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% for list in data_list %}
\t<div class=\"row\" style=\"background-color: lightgray\">
\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2 table-bordered\">{{ list.getInvoiceNum() }}</div>
\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2 table-bordered\">{{ list.getInvoiceDate()|date('Y-m-d') }}</div>
\t\t<div class=\"col-xs-1 col-sm-2 col-lg-1 table-bordered\">{{ list.getQty() }}</div>
\t\t<div class=\"col-xs-4 col-sm-2 col-lg-4 table-bordered\">{{ list.getProductDescription() }}</div>
\t\t<div class=\"col-xs-2 col-sm-2 col-lg-2 table-bordered\">{{ list.getPrice() }}</div>
\t\t<div class=\"col-xs-1 col-sm-2 col-lg-1 table-bordered\">{{ list.getQty() * list.getPrice() }}</div>
\t</div>
{% endfor %}
<div class=\"pagination pull-right\" style=\"margin-top: 15px\">
\t{{ knp_pagination_render(data_list) }}
</div>
<script>
\t{% if (client_id != 0) %}
\t\t{% for prod in data_products %}
\t\t\tjQuery(\"#product_list\").append(\"<li><a href='javascript:void(0)' onClick='ChangeDropDown(this)' id='{{ prod.getProductId() }}@product'>{{ prod.getProductDescription() }}</a></li>\");
\t\t{% endfor %}
\t{% endif %}
</script>";
    }
}
