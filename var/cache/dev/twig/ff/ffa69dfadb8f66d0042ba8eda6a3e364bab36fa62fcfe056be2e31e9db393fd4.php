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
        $__internal_8d262e7a4b25dc0535cca3aa097f02b2e278006e12b4d5e4c255221f55d45f75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d262e7a4b25dc0535cca3aa097f02b2e278006e12b4d5e4c255221f55d45f75->enter($__internal_8d262e7a4b25dc0535cca3aa097f02b2e278006e12b4d5e4c255221f55d45f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_7b52a744b22f33f92c75ad72884208ca3cd85f4d235f75c505180aa1a1d6e195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b52a744b22f33f92c75ad72884208ca3cd85f4d235f75c505180aa1a1d6e195->enter($__internal_7b52a744b22f33f92c75ad72884208ca3cd85f4d235f75c505180aa1a1d6e195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_8d262e7a4b25dc0535cca3aa097f02b2e278006e12b4d5e4c255221f55d45f75->leave($__internal_8d262e7a4b25dc0535cca3aa097f02b2e278006e12b4d5e4c255221f55d45f75_prof);

        
        $__internal_7b52a744b22f33f92c75ad72884208ca3cd85f4d235f75c505180aa1a1d6e195->leave($__internal_7b52a744b22f33f92c75ad72884208ca3cd85f4d235f75c505180aa1a1d6e195_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_617a6cf9fda3b9ea723aaf45792dabf10e6d9b6ddbe2f949f129921eb4aa3517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_617a6cf9fda3b9ea723aaf45792dabf10e6d9b6ddbe2f949f129921eb4aa3517->enter($__internal_617a6cf9fda3b9ea723aaf45792dabf10e6d9b6ddbe2f949f129921eb4aa3517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ec23f4c81f5f46c0b6019356dc111be7c09165721bcfb52096aefd12d3c19064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec23f4c81f5f46c0b6019356dc111be7c09165721bcfb52096aefd12d3c19064->enter($__internal_ec23f4c81f5f46c0b6019356dc111be7c09165721bcfb52096aefd12d3c19064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ec23f4c81f5f46c0b6019356dc111be7c09165721bcfb52096aefd12d3c19064->leave($__internal_ec23f4c81f5f46c0b6019356dc111be7c09165721bcfb52096aefd12d3c19064_prof);

        
        $__internal_617a6cf9fda3b9ea723aaf45792dabf10e6d9b6ddbe2f949f129921eb4aa3517->leave($__internal_617a6cf9fda3b9ea723aaf45792dabf10e6d9b6ddbe2f949f129921eb4aa3517_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_684d098cf74be5760a71fb27274cfc80adab8502b50f3194f2750ce47186fc20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_684d098cf74be5760a71fb27274cfc80adab8502b50f3194f2750ce47186fc20->enter($__internal_684d098cf74be5760a71fb27274cfc80adab8502b50f3194f2750ce47186fc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_32ae358ca2e947ede1d77f772922d5737ead4d569c74fe0a4eac16f4361053a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ae358ca2e947ede1d77f772922d5737ead4d569c74fe0a4eac16f4361053a4->enter($__internal_32ae358ca2e947ede1d77f772922d5737ead4d569c74fe0a4eac16f4361053a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_32ae358ca2e947ede1d77f772922d5737ead4d569c74fe0a4eac16f4361053a4->leave($__internal_32ae358ca2e947ede1d77f772922d5737ead4d569c74fe0a4eac16f4361053a4_prof);

        
        $__internal_684d098cf74be5760a71fb27274cfc80adab8502b50f3194f2750ce47186fc20->leave($__internal_684d098cf74be5760a71fb27274cfc80adab8502b50f3194f2750ce47186fc20_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4fd088ffa1009938368d583711b9f28608752f5a7f0f8f30fc454f3055cf1cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4fd088ffa1009938368d583711b9f28608752f5a7f0f8f30fc454f3055cf1cc->enter($__internal_b4fd088ffa1009938368d583711b9f28608752f5a7f0f8f30fc454f3055cf1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db0118559d87b129e0ad9114ef5386b10e43f39d54ba43389ba0876a1d0c50f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db0118559d87b129e0ad9114ef5386b10e43f39d54ba43389ba0876a1d0c50f2->enter($__internal_db0118559d87b129e0ad9114ef5386b10e43f39d54ba43389ba0876a1d0c50f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_db0118559d87b129e0ad9114ef5386b10e43f39d54ba43389ba0876a1d0c50f2->leave($__internal_db0118559d87b129e0ad9114ef5386b10e43f39d54ba43389ba0876a1d0c50f2_prof);

        
        $__internal_b4fd088ffa1009938368d583711b9f28608752f5a7f0f8f30fc454f3055cf1cc->leave($__internal_b4fd088ffa1009938368d583711b9f28608752f5a7f0f8f30fc454f3055cf1cc_prof);

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
", "@Twig/layout.html.twig", "/home/hurricane/Documents/Workspace/Atelier/atelier symfony/myproject/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
