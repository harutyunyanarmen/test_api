<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
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
        $__internal_bad5ec98da35190769f0d051c0f7749e75a79ee43e7ab91c8feb27902961ef30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bad5ec98da35190769f0d051c0f7749e75a79ee43e7ab91c8feb27902961ef30->enter($__internal_bad5ec98da35190769f0d051c0f7749e75a79ee43e7ab91c8feb27902961ef30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cad8d4aa2f2157f0bfc780a1f6314267abcc733249d9d10065edc0320cde679b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad8d4aa2f2157f0bfc780a1f6314267abcc733249d9d10065edc0320cde679b->enter($__internal_cad8d4aa2f2157f0bfc780a1f6314267abcc733249d9d10065edc0320cde679b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bad5ec98da35190769f0d051c0f7749e75a79ee43e7ab91c8feb27902961ef30->leave($__internal_bad5ec98da35190769f0d051c0f7749e75a79ee43e7ab91c8feb27902961ef30_prof);

        
        $__internal_cad8d4aa2f2157f0bfc780a1f6314267abcc733249d9d10065edc0320cde679b->leave($__internal_cad8d4aa2f2157f0bfc780a1f6314267abcc733249d9d10065edc0320cde679b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d20df53d9e09a0c122e06ad1c0d3a1ef6732efff40c8e60a7803596d9afdd944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d20df53d9e09a0c122e06ad1c0d3a1ef6732efff40c8e60a7803596d9afdd944->enter($__internal_d20df53d9e09a0c122e06ad1c0d3a1ef6732efff40c8e60a7803596d9afdd944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_16b0352d306a5e4d18ec99127394585a09c5cafdc25b5c0749381635fa014bb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b0352d306a5e4d18ec99127394585a09c5cafdc25b5c0749381635fa014bb7->enter($__internal_16b0352d306a5e4d18ec99127394585a09c5cafdc25b5c0749381635fa014bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_16b0352d306a5e4d18ec99127394585a09c5cafdc25b5c0749381635fa014bb7->leave($__internal_16b0352d306a5e4d18ec99127394585a09c5cafdc25b5c0749381635fa014bb7_prof);

        
        $__internal_d20df53d9e09a0c122e06ad1c0d3a1ef6732efff40c8e60a7803596d9afdd944->leave($__internal_d20df53d9e09a0c122e06ad1c0d3a1ef6732efff40c8e60a7803596d9afdd944_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_81cc7aac24272296cc6f8219e54727440ff6e809f68a7d5e3c142c3fb2d9a3b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81cc7aac24272296cc6f8219e54727440ff6e809f68a7d5e3c142c3fb2d9a3b3->enter($__internal_81cc7aac24272296cc6f8219e54727440ff6e809f68a7d5e3c142c3fb2d9a3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_040c73265bb998e0610f8a2b6a67781e33f4c57317c0eb775598511f882e96bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040c73265bb998e0610f8a2b6a67781e33f4c57317c0eb775598511f882e96bf->enter($__internal_040c73265bb998e0610f8a2b6a67781e33f4c57317c0eb775598511f882e96bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_040c73265bb998e0610f8a2b6a67781e33f4c57317c0eb775598511f882e96bf->leave($__internal_040c73265bb998e0610f8a2b6a67781e33f4c57317c0eb775598511f882e96bf_prof);

        
        $__internal_81cc7aac24272296cc6f8219e54727440ff6e809f68a7d5e3c142c3fb2d9a3b3->leave($__internal_81cc7aac24272296cc6f8219e54727440ff6e809f68a7d5e3c142c3fb2d9a3b3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d2bd621a2e231a28158d70b4c9dd4674dde6ca2f37576f4d08121537d509fcd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2bd621a2e231a28158d70b4c9dd4674dde6ca2f37576f4d08121537d509fcd5->enter($__internal_d2bd621a2e231a28158d70b4c9dd4674dde6ca2f37576f4d08121537d509fcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7ef3c03d046b906e5407352b2d8545c74ba91a038dc4c95d518e0e7043559565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef3c03d046b906e5407352b2d8545c74ba91a038dc4c95d518e0e7043559565->enter($__internal_7ef3c03d046b906e5407352b2d8545c74ba91a038dc4c95d518e0e7043559565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7ef3c03d046b906e5407352b2d8545c74ba91a038dc4c95d518e0e7043559565->leave($__internal_7ef3c03d046b906e5407352b2d8545c74ba91a038dc4c95d518e0e7043559565_prof);

        
        $__internal_d2bd621a2e231a28158d70b4c9dd4674dde6ca2f37576f4d08121537d509fcd5->leave($__internal_d2bd621a2e231a28158d70b4c9dd4674dde6ca2f37576f4d08121537d509fcd5_prof);

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
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/test_api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
