<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f734dac648580e5ef44f1ef63c3671957c2b037bdb8ab061fbf8c70c0e82617e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f734dac648580e5ef44f1ef63c3671957c2b037bdb8ab061fbf8c70c0e82617e->enter($__internal_f734dac648580e5ef44f1ef63c3671957c2b037bdb8ab061fbf8c70c0e82617e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_16f7d5a206c23967b4b84fde247436af1c831fb597528e5dfeeecba748b9629a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f7d5a206c23967b4b84fde247436af1c831fb597528e5dfeeecba748b9629a->enter($__internal_16f7d5a206c23967b4b84fde247436af1c831fb597528e5dfeeecba748b9629a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_f734dac648580e5ef44f1ef63c3671957c2b037bdb8ab061fbf8c70c0e82617e->leave($__internal_f734dac648580e5ef44f1ef63c3671957c2b037bdb8ab061fbf8c70c0e82617e_prof);

        
        $__internal_16f7d5a206c23967b4b84fde247436af1c831fb597528e5dfeeecba748b9629a->leave($__internal_16f7d5a206c23967b4b84fde247436af1c831fb597528e5dfeeecba748b9629a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0dd3e2b9ac6bf3df92bc41d73da9fe7aee320482cd50872059afe738217db2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0dd3e2b9ac6bf3df92bc41d73da9fe7aee320482cd50872059afe738217db2c->enter($__internal_b0dd3e2b9ac6bf3df92bc41d73da9fe7aee320482cd50872059afe738217db2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f236005669fc1308628008332647ad5a91647da0af0a5160e7a6e769f9ea8bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f236005669fc1308628008332647ad5a91647da0af0a5160e7a6e769f9ea8bc->enter($__internal_6f236005669fc1308628008332647ad5a91647da0af0a5160e7a6e769f9ea8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f236005669fc1308628008332647ad5a91647da0af0a5160e7a6e769f9ea8bc->leave($__internal_6f236005669fc1308628008332647ad5a91647da0af0a5160e7a6e769f9ea8bc_prof);

        
        $__internal_b0dd3e2b9ac6bf3df92bc41d73da9fe7aee320482cd50872059afe738217db2c->leave($__internal_b0dd3e2b9ac6bf3df92bc41d73da9fe7aee320482cd50872059afe738217db2c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c011aa258cff52765b2ea2415c1b0774c46e4845c7aa712f43548a65fcf31b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c011aa258cff52765b2ea2415c1b0774c46e4845c7aa712f43548a65fcf31b9->enter($__internal_9c011aa258cff52765b2ea2415c1b0774c46e4845c7aa712f43548a65fcf31b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4c92a46db426159f84356eef97d647673165951f46e902611c516aa4132518d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c92a46db426159f84356eef97d647673165951f46e902611c516aa4132518d3->enter($__internal_4c92a46db426159f84356eef97d647673165951f46e902611c516aa4132518d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4c92a46db426159f84356eef97d647673165951f46e902611c516aa4132518d3->leave($__internal_4c92a46db426159f84356eef97d647673165951f46e902611c516aa4132518d3_prof);

        
        $__internal_9c011aa258cff52765b2ea2415c1b0774c46e4845c7aa712f43548a65fcf31b9->leave($__internal_9c011aa258cff52765b2ea2415c1b0774c46e4845c7aa712f43548a65fcf31b9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d305f722af82e2ff72c00d5294e780b6e49a2ece3229a4f2445af0d237234576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d305f722af82e2ff72c00d5294e780b6e49a2ece3229a4f2445af0d237234576->enter($__internal_d305f722af82e2ff72c00d5294e780b6e49a2ece3229a4f2445af0d237234576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_92583c6567b9f144743320810527761da070b5cb53c74ecb7b9e421c3c20e3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92583c6567b9f144743320810527761da070b5cb53c74ecb7b9e421c3c20e3a8->enter($__internal_92583c6567b9f144743320810527761da070b5cb53c74ecb7b9e421c3c20e3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_92583c6567b9f144743320810527761da070b5cb53c74ecb7b9e421c3c20e3a8->leave($__internal_92583c6567b9f144743320810527761da070b5cb53c74ecb7b9e421c3c20e3a8_prof);

        
        $__internal_d305f722af82e2ff72c00d5294e780b6e49a2ece3229a4f2445af0d237234576->leave($__internal_d305f722af82e2ff72c00d5294e780b6e49a2ece3229a4f2445af0d237234576_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/test_api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
