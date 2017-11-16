<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30b327b33da147adc1d3158c456600481157e9535e0f7717dd392de4fadacc88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30b327b33da147adc1d3158c456600481157e9535e0f7717dd392de4fadacc88->enter($__internal_30b327b33da147adc1d3158c456600481157e9535e0f7717dd392de4fadacc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f67586e3154e7403fdf6c90569adb869ab84a3871af4fe071f133769d4603dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f67586e3154e7403fdf6c90569adb869ab84a3871af4fe071f133769d4603dba->enter($__internal_f67586e3154e7403fdf6c90569adb869ab84a3871af4fe071f133769d4603dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_30b327b33da147adc1d3158c456600481157e9535e0f7717dd392de4fadacc88->leave($__internal_30b327b33da147adc1d3158c456600481157e9535e0f7717dd392de4fadacc88_prof);

        
        $__internal_f67586e3154e7403fdf6c90569adb869ab84a3871af4fe071f133769d4603dba->leave($__internal_f67586e3154e7403fdf6c90569adb869ab84a3871af4fe071f133769d4603dba_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_099462a4bd48c04733c6c176e868daefa61c3c1d30b28725452eafbe9fcdac8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099462a4bd48c04733c6c176e868daefa61c3c1d30b28725452eafbe9fcdac8e->enter($__internal_099462a4bd48c04733c6c176e868daefa61c3c1d30b28725452eafbe9fcdac8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_109a9288067ee65e6cc6a69a64f7e0f3acb58e2c92ab869b9dfe0a3794211399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_109a9288067ee65e6cc6a69a64f7e0f3acb58e2c92ab869b9dfe0a3794211399->enter($__internal_109a9288067ee65e6cc6a69a64f7e0f3acb58e2c92ab869b9dfe0a3794211399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_109a9288067ee65e6cc6a69a64f7e0f3acb58e2c92ab869b9dfe0a3794211399->leave($__internal_109a9288067ee65e6cc6a69a64f7e0f3acb58e2c92ab869b9dfe0a3794211399_prof);

        
        $__internal_099462a4bd48c04733c6c176e868daefa61c3c1d30b28725452eafbe9fcdac8e->leave($__internal_099462a4bd48c04733c6c176e868daefa61c3c1d30b28725452eafbe9fcdac8e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3b404a48ac8905cd46131c8c4c8abff13930d1a1894ca1bd65c8b8da075f65b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b404a48ac8905cd46131c8c4c8abff13930d1a1894ca1bd65c8b8da075f65b7->enter($__internal_3b404a48ac8905cd46131c8c4c8abff13930d1a1894ca1bd65c8b8da075f65b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_80f685abd604d6ad97331875608666e50523fc6f1010d0cedfebcf7775145d63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f685abd604d6ad97331875608666e50523fc6f1010d0cedfebcf7775145d63->enter($__internal_80f685abd604d6ad97331875608666e50523fc6f1010d0cedfebcf7775145d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_80f685abd604d6ad97331875608666e50523fc6f1010d0cedfebcf7775145d63->leave($__internal_80f685abd604d6ad97331875608666e50523fc6f1010d0cedfebcf7775145d63_prof);

        
        $__internal_3b404a48ac8905cd46131c8c4c8abff13930d1a1894ca1bd65c8b8da075f65b7->leave($__internal_3b404a48ac8905cd46131c8c4c8abff13930d1a1894ca1bd65c8b8da075f65b7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9970bd091d6651fbe1aeac9432fed5358952838f297eee1cff44fbd932fe750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9970bd091d6651fbe1aeac9432fed5358952838f297eee1cff44fbd932fe750->enter($__internal_e9970bd091d6651fbe1aeac9432fed5358952838f297eee1cff44fbd932fe750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_227aee0869d24c24098fec79ec5b041f60cf587fe9e80dd16c68122baae6eaff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_227aee0869d24c24098fec79ec5b041f60cf587fe9e80dd16c68122baae6eaff->enter($__internal_227aee0869d24c24098fec79ec5b041f60cf587fe9e80dd16c68122baae6eaff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_227aee0869d24c24098fec79ec5b041f60cf587fe9e80dd16c68122baae6eaff->leave($__internal_227aee0869d24c24098fec79ec5b041f60cf587fe9e80dd16c68122baae6eaff_prof);

        
        $__internal_e9970bd091d6651fbe1aeac9432fed5358952838f297eee1cff44fbd932fe750->leave($__internal_e9970bd091d6651fbe1aeac9432fed5358952838f297eee1cff44fbd932fe750_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1559f80b3ea3212ee0c15ca5ad59b6faac665c7467588438685d28c9002cbbf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1559f80b3ea3212ee0c15ca5ad59b6faac665c7467588438685d28c9002cbbf8->enter($__internal_1559f80b3ea3212ee0c15ca5ad59b6faac665c7467588438685d28c9002cbbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_15bb121b21cc97c70e58be44183c2ffd6444087331d4bbdf37869ab9782347c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15bb121b21cc97c70e58be44183c2ffd6444087331d4bbdf37869ab9782347c2->enter($__internal_15bb121b21cc97c70e58be44183c2ffd6444087331d4bbdf37869ab9782347c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_15bb121b21cc97c70e58be44183c2ffd6444087331d4bbdf37869ab9782347c2->leave($__internal_15bb121b21cc97c70e58be44183c2ffd6444087331d4bbdf37869ab9782347c2_prof);

        
        $__internal_1559f80b3ea3212ee0c15ca5ad59b6faac665c7467588438685d28c9002cbbf8->leave($__internal_1559f80b3ea3212ee0c15ca5ad59b6faac665c7467588438685d28c9002cbbf8_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/hurricane/Documents/Workspace/Atelier/atelier symfony/myproject/app/Resources/views/base.html.twig");
    }
}
