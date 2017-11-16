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
        $__internal_9fdbc210d885efce42468fdc970a9a6ee86ff457392421c1279df2ef0b1d944c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fdbc210d885efce42468fdc970a9a6ee86ff457392421c1279df2ef0b1d944c->enter($__internal_9fdbc210d885efce42468fdc970a9a6ee86ff457392421c1279df2ef0b1d944c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_451f42a1afc62ebfc257c1c369ed7ebe99fb49a81bf0c69be2a4406a695954a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451f42a1afc62ebfc257c1c369ed7ebe99fb49a81bf0c69be2a4406a695954a4->enter($__internal_451f42a1afc62ebfc257c1c369ed7ebe99fb49a81bf0c69be2a4406a695954a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fdbc210d885efce42468fdc970a9a6ee86ff457392421c1279df2ef0b1d944c->leave($__internal_9fdbc210d885efce42468fdc970a9a6ee86ff457392421c1279df2ef0b1d944c_prof);

        
        $__internal_451f42a1afc62ebfc257c1c369ed7ebe99fb49a81bf0c69be2a4406a695954a4->leave($__internal_451f42a1afc62ebfc257c1c369ed7ebe99fb49a81bf0c69be2a4406a695954a4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9b4f497c909c371bee620f8e274b171a054a1a06539d3ff172e90f40bc723543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b4f497c909c371bee620f8e274b171a054a1a06539d3ff172e90f40bc723543->enter($__internal_9b4f497c909c371bee620f8e274b171a054a1a06539d3ff172e90f40bc723543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3b7fcdbf22c2a8d6fc9e985f28e11146ad997bec281b4227ccb11165db09c446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7fcdbf22c2a8d6fc9e985f28e11146ad997bec281b4227ccb11165db09c446->enter($__internal_3b7fcdbf22c2a8d6fc9e985f28e11146ad997bec281b4227ccb11165db09c446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3b7fcdbf22c2a8d6fc9e985f28e11146ad997bec281b4227ccb11165db09c446->leave($__internal_3b7fcdbf22c2a8d6fc9e985f28e11146ad997bec281b4227ccb11165db09c446_prof);

        
        $__internal_9b4f497c909c371bee620f8e274b171a054a1a06539d3ff172e90f40bc723543->leave($__internal_9b4f497c909c371bee620f8e274b171a054a1a06539d3ff172e90f40bc723543_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c5f86add4e5410beced9d502c3903a81ab6eb29fe19447baae9fa0f63891679a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5f86add4e5410beced9d502c3903a81ab6eb29fe19447baae9fa0f63891679a->enter($__internal_c5f86add4e5410beced9d502c3903a81ab6eb29fe19447baae9fa0f63891679a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_187d08b84705dd12e6dec7579efadf70178bc5439b92a6d8a6854ae637246b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_187d08b84705dd12e6dec7579efadf70178bc5439b92a6d8a6854ae637246b17->enter($__internal_187d08b84705dd12e6dec7579efadf70178bc5439b92a6d8a6854ae637246b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_187d08b84705dd12e6dec7579efadf70178bc5439b92a6d8a6854ae637246b17->leave($__internal_187d08b84705dd12e6dec7579efadf70178bc5439b92a6d8a6854ae637246b17_prof);

        
        $__internal_c5f86add4e5410beced9d502c3903a81ab6eb29fe19447baae9fa0f63891679a->leave($__internal_c5f86add4e5410beced9d502c3903a81ab6eb29fe19447baae9fa0f63891679a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f0ee79322c21d48dc41c32eea9ced84dca845f32b4045862baae03a28f749b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f0ee79322c21d48dc41c32eea9ced84dca845f32b4045862baae03a28f749b3->enter($__internal_5f0ee79322c21d48dc41c32eea9ced84dca845f32b4045862baae03a28f749b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_45eff066a9548c36921488d813433fb2a4d9f4e98f58b72fc88b5c092cbf9509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45eff066a9548c36921488d813433fb2a4d9f4e98f58b72fc88b5c092cbf9509->enter($__internal_45eff066a9548c36921488d813433fb2a4d9f4e98f58b72fc88b5c092cbf9509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_45eff066a9548c36921488d813433fb2a4d9f4e98f58b72fc88b5c092cbf9509->leave($__internal_45eff066a9548c36921488d813433fb2a4d9f4e98f58b72fc88b5c092cbf9509_prof);

        
        $__internal_5f0ee79322c21d48dc41c32eea9ced84dca845f32b4045862baae03a28f749b3->leave($__internal_5f0ee79322c21d48dc41c32eea9ced84dca845f32b4045862baae03a28f749b3_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/hurricane/Documents/Workspace/Atelier/atelier symfony/myproject/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
