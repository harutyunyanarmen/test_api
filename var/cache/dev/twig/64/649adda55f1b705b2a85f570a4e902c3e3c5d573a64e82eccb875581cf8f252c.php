<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
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
        $__internal_c27de2cd4a7074afe5d8fc4a1261f9e559ff33a461f5fb2c44adcbb7b61eda3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c27de2cd4a7074afe5d8fc4a1261f9e559ff33a461f5fb2c44adcbb7b61eda3a->enter($__internal_c27de2cd4a7074afe5d8fc4a1261f9e559ff33a461f5fb2c44adcbb7b61eda3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c1f78f87612dc0d1f72b2f6c5b8c9df1346daf846eadb265ba7bacec613cae1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f78f87612dc0d1f72b2f6c5b8c9df1346daf846eadb265ba7bacec613cae1b->enter($__internal_c1f78f87612dc0d1f72b2f6c5b8c9df1346daf846eadb265ba7bacec613cae1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c27de2cd4a7074afe5d8fc4a1261f9e559ff33a461f5fb2c44adcbb7b61eda3a->leave($__internal_c27de2cd4a7074afe5d8fc4a1261f9e559ff33a461f5fb2c44adcbb7b61eda3a_prof);

        
        $__internal_c1f78f87612dc0d1f72b2f6c5b8c9df1346daf846eadb265ba7bacec613cae1b->leave($__internal_c1f78f87612dc0d1f72b2f6c5b8c9df1346daf846eadb265ba7bacec613cae1b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5a594fc90b7a62befdde45f508e27d0b187b1e0e77880860cd4df9f16b6144db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a594fc90b7a62befdde45f508e27d0b187b1e0e77880860cd4df9f16b6144db->enter($__internal_5a594fc90b7a62befdde45f508e27d0b187b1e0e77880860cd4df9f16b6144db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b1a43b04112f1d3b3781c338c1cbd714f5b1d73e7d84e17985052bf103b500c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a43b04112f1d3b3781c338c1cbd714f5b1d73e7d84e17985052bf103b500c6->enter($__internal_b1a43b04112f1d3b3781c338c1cbd714f5b1d73e7d84e17985052bf103b500c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b1a43b04112f1d3b3781c338c1cbd714f5b1d73e7d84e17985052bf103b500c6->leave($__internal_b1a43b04112f1d3b3781c338c1cbd714f5b1d73e7d84e17985052bf103b500c6_prof);

        
        $__internal_5a594fc90b7a62befdde45f508e27d0b187b1e0e77880860cd4df9f16b6144db->leave($__internal_5a594fc90b7a62befdde45f508e27d0b187b1e0e77880860cd4df9f16b6144db_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a6eacea4b73225947d07fe84cb4dfc22e302a8d2ce5ff7807a43fd2e6c3db414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6eacea4b73225947d07fe84cb4dfc22e302a8d2ce5ff7807a43fd2e6c3db414->enter($__internal_a6eacea4b73225947d07fe84cb4dfc22e302a8d2ce5ff7807a43fd2e6c3db414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f71f494ecb7bc99bbbad0006022030105761fabc339ce3d35323c177171f5c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f71f494ecb7bc99bbbad0006022030105761fabc339ce3d35323c177171f5c28->enter($__internal_f71f494ecb7bc99bbbad0006022030105761fabc339ce3d35323c177171f5c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f71f494ecb7bc99bbbad0006022030105761fabc339ce3d35323c177171f5c28->leave($__internal_f71f494ecb7bc99bbbad0006022030105761fabc339ce3d35323c177171f5c28_prof);

        
        $__internal_a6eacea4b73225947d07fe84cb4dfc22e302a8d2ce5ff7807a43fd2e6c3db414->leave($__internal_a6eacea4b73225947d07fe84cb4dfc22e302a8d2ce5ff7807a43fd2e6c3db414_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc41fdeffbceb141089769ec2c38db2151710302bbb0be97c49cae5132f2ad41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc41fdeffbceb141089769ec2c38db2151710302bbb0be97c49cae5132f2ad41->enter($__internal_bc41fdeffbceb141089769ec2c38db2151710302bbb0be97c49cae5132f2ad41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_78997698124d608ec714c5ef7f2b6aee8632f7e922a302602563f9a74cc93da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78997698124d608ec714c5ef7f2b6aee8632f7e922a302602563f9a74cc93da8->enter($__internal_78997698124d608ec714c5ef7f2b6aee8632f7e922a302602563f9a74cc93da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_78997698124d608ec714c5ef7f2b6aee8632f7e922a302602563f9a74cc93da8->leave($__internal_78997698124d608ec714c5ef7f2b6aee8632f7e922a302602563f9a74cc93da8_prof);

        
        $__internal_bc41fdeffbceb141089769ec2c38db2151710302bbb0be97c49cae5132f2ad41->leave($__internal_bc41fdeffbceb141089769ec2c38db2151710302bbb0be97c49cae5132f2ad41_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/test_api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
