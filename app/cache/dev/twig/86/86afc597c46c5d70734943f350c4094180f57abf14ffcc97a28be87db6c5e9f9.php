<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_e383f6fe9ad429bab14cc9760448c00dc1bfcd7c170193274a483b24b9372102 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_650c53350900952e5e63e7f9a92275614b893006ad940c139787ffe0d68e17ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650c53350900952e5e63e7f9a92275614b893006ad940c139787ffe0d68e17ee->enter($__internal_650c53350900952e5e63e7f9a92275614b893006ad940c139787ffe0d68e17ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_650c53350900952e5e63e7f9a92275614b893006ad940c139787ffe0d68e17ee->leave($__internal_650c53350900952e5e63e7f9a92275614b893006ad940c139787ffe0d68e17ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_efaf1305d9701c3200c826002f2230ff87bd1aee89857791e66a0501f39f669a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efaf1305d9701c3200c826002f2230ff87bd1aee89857791e66a0501f39f669a->enter($__internal_efaf1305d9701c3200c826002f2230ff87bd1aee89857791e66a0501f39f669a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_efaf1305d9701c3200c826002f2230ff87bd1aee89857791e66a0501f39f669a->leave($__internal_efaf1305d9701c3200c826002f2230ff87bd1aee89857791e66a0501f39f669a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/var/www/meu-symfoni/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
