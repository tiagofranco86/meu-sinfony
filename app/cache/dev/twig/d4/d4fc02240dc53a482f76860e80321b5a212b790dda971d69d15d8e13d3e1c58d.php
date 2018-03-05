<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_098062237170bcf1c758b6fbde70fd9a9830656487037dbd3344b952c0d432e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_64c582639efaf44a987e837f2d8f00df9f0d4fcb633f99db459aefa1ed36db7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c582639efaf44a987e837f2d8f00df9f0d4fcb633f99db459aefa1ed36db7a->enter($__internal_64c582639efaf44a987e837f2d8f00df9f0d4fcb633f99db459aefa1ed36db7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64c582639efaf44a987e837f2d8f00df9f0d4fcb633f99db459aefa1ed36db7a->leave($__internal_64c582639efaf44a987e837f2d8f00df9f0d4fcb633f99db459aefa1ed36db7a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6880cb3850bb326946cda7355fd154163bd059ca33bf0bfd061791589970ff62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6880cb3850bb326946cda7355fd154163bd059ca33bf0bfd061791589970ff62->enter($__internal_6880cb3850bb326946cda7355fd154163bd059ca33bf0bfd061791589970ff62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6880cb3850bb326946cda7355fd154163bd059ca33bf0bfd061791589970ff62->leave($__internal_6880cb3850bb326946cda7355fd154163bd059ca33bf0bfd061791589970ff62_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/meu-symfoni/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
