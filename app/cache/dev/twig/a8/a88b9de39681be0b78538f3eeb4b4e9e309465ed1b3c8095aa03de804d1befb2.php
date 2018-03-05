<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8213ed5419d265065358b2647b68f7e3f16cbb5918f0c8e8130190ebfd78f140 extends Twig_Template
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
        $__internal_f751fb24b80af76a873c4422b3f88e6178f03f560ccb4e930e0da68f27f83039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f751fb24b80af76a873c4422b3f88e6178f03f560ccb4e930e0da68f27f83039->enter($__internal_f751fb24b80af76a873c4422b3f88e6178f03f560ccb4e930e0da68f27f83039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f751fb24b80af76a873c4422b3f88e6178f03f560ccb4e930e0da68f27f83039->leave($__internal_f751fb24b80af76a873c4422b3f88e6178f03f560ccb4e930e0da68f27f83039_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_09c72b2a4a8e29f75a4be204699882935a6b9f5429d659640834789267b4469e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09c72b2a4a8e29f75a4be204699882935a6b9f5429d659640834789267b4469e->enter($__internal_09c72b2a4a8e29f75a4be204699882935a6b9f5429d659640834789267b4469e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_09c72b2a4a8e29f75a4be204699882935a6b9f5429d659640834789267b4469e->leave($__internal_09c72b2a4a8e29f75a4be204699882935a6b9f5429d659640834789267b4469e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_52cef052cccd6d7b794a16e1fe4db2f99a3d7d8306efc8d95587213c2dc9b12c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52cef052cccd6d7b794a16e1fe4db2f99a3d7d8306efc8d95587213c2dc9b12c->enter($__internal_52cef052cccd6d7b794a16e1fe4db2f99a3d7d8306efc8d95587213c2dc9b12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_52cef052cccd6d7b794a16e1fe4db2f99a3d7d8306efc8d95587213c2dc9b12c->leave($__internal_52cef052cccd6d7b794a16e1fe4db2f99a3d7d8306efc8d95587213c2dc9b12c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ecd081bee37e52a80fd13bb35a82e30ce2fc03218dbba2311c807d1841963af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd081bee37e52a80fd13bb35a82e30ce2fc03218dbba2311c807d1841963af3->enter($__internal_ecd081bee37e52a80fd13bb35a82e30ce2fc03218dbba2311c807d1841963af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ecd081bee37e52a80fd13bb35a82e30ce2fc03218dbba2311c807d1841963af3->leave($__internal_ecd081bee37e52a80fd13bb35a82e30ce2fc03218dbba2311c807d1841963af3_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/meu-symfoni/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
