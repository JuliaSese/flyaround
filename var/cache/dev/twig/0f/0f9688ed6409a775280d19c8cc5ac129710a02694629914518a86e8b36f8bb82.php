<?php

/* planemodel/new.html.twig */
class __TwigTemplate_22ddac317a4ce63c3419b34e3e9043fc34009e2564fcea61ab054b07b6574837 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "planemodel/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23149b3b9022bc349a7767167a783da7a7785505dd4da9da39ca6935a7cf651f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23149b3b9022bc349a7767167a783da7a7785505dd4da9da39ca6935a7cf651f->enter($__internal_23149b3b9022bc349a7767167a783da7a7785505dd4da9da39ca6935a7cf651f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planemodel/new.html.twig"));

        $__internal_d593c4708c9ddc998b26bee0c51d687d8945413bc46c0cf372e5209cd77d183c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d593c4708c9ddc998b26bee0c51d687d8945413bc46c0cf372e5209cd77d183c->enter($__internal_d593c4708c9ddc998b26bee0c51d687d8945413bc46c0cf372e5209cd77d183c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planemodel/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23149b3b9022bc349a7767167a783da7a7785505dd4da9da39ca6935a7cf651f->leave($__internal_23149b3b9022bc349a7767167a783da7a7785505dd4da9da39ca6935a7cf651f_prof);

        
        $__internal_d593c4708c9ddc998b26bee0c51d687d8945413bc46c0cf372e5209cd77d183c->leave($__internal_d593c4708c9ddc998b26bee0c51d687d8945413bc46c0cf372e5209cd77d183c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b19b4304bf9c4c5661b121139416178cc84737f06e65d73b8e1cd28c5ad55d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b19b4304bf9c4c5661b121139416178cc84737f06e65d73b8e1cd28c5ad55d6->enter($__internal_8b19b4304bf9c4c5661b121139416178cc84737f06e65d73b8e1cd28c5ad55d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_add9693209eb6f1952910e4d5a56f4a0a22e18db6e7abb0a8769b2af397a1dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add9693209eb6f1952910e4d5a56f4a0a22e18db6e7abb0a8769b2af397a1dbc->enter($__internal_add9693209eb6f1952910e4d5a56f4a0a22e18db6e7abb0a8769b2af397a1dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planemodel creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_add9693209eb6f1952910e4d5a56f4a0a22e18db6e7abb0a8769b2af397a1dbc->leave($__internal_add9693209eb6f1952910e4d5a56f4a0a22e18db6e7abb0a8769b2af397a1dbc_prof);

        
        $__internal_8b19b4304bf9c4c5661b121139416178cc84737f06e65d73b8e1cd28c5ad55d6->leave($__internal_8b19b4304bf9c4c5661b121139416178cc84737f06e65d73b8e1cd28c5ad55d6_prof);

    }

    public function getTemplateName()
    {
        return "planemodel/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Planemodel creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('planemodel_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "planemodel/new.html.twig", "/var/www/html/flyaround_seb/app/Resources/views/planemodel/new.html.twig");
    }
}
