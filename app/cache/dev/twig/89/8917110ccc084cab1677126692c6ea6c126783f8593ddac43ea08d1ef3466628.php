<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_aa0516259a8df1d0ac8ded6bafdc94163d602f40cdadd251d908a42b40390cb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76f8808a57b6b1c92bf163efcf4e5937aa7499fface8a7e0595507d89a2a90e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f8808a57b6b1c92bf163efcf4e5937aa7499fface8a7e0595507d89a2a90e3->enter($__internal_76f8808a57b6b1c92bf163efcf4e5937aa7499fface8a7e0595507d89a2a90e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76f8808a57b6b1c92bf163efcf4e5937aa7499fface8a7e0595507d89a2a90e3->leave($__internal_76f8808a57b6b1c92bf163efcf4e5937aa7499fface8a7e0595507d89a2a90e3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_73c7b7cb7f7406b0a61cc903b8c8a9c37c7c6a9f04e4fb883d01f65794d89e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c7b7cb7f7406b0a61cc903b8c8a9c37c7c6a9f04e4fb883d01f65794d89e0c->enter($__internal_73c7b7cb7f7406b0a61cc903b8c8a9c37c7c6a9f04e4fb883d01f65794d89e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_73c7b7cb7f7406b0a61cc903b8c8a9c37c7c6a9f04e4fb883d01f65794d89e0c->leave($__internal_73c7b7cb7f7406b0a61cc903b8c8a9c37c7c6a9f04e4fb883d01f65794d89e0c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0930c81fbfdcb7a7f17abb01ce89a882888c50018948122154414223e7e525cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0930c81fbfdcb7a7f17abb01ce89a882888c50018948122154414223e7e525cb->enter($__internal_0930c81fbfdcb7a7f17abb01ce89a882888c50018948122154414223e7e525cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_0930c81fbfdcb7a7f17abb01ce89a882888c50018948122154414223e7e525cb->leave($__internal_0930c81fbfdcb7a7f17abb01ce89a882888c50018948122154414223e7e525cb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_976f7dc124f9f7c82214c1179ea179dfa9d20fe2916bc0a2c19c7f8995f410ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976f7dc124f9f7c82214c1179ea179dfa9d20fe2916bc0a2c19c7f8995f410ae->enter($__internal_976f7dc124f9f7c82214c1179ea179dfa9d20fe2916bc0a2c19c7f8995f410ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_976f7dc124f9f7c82214c1179ea179dfa9d20fe2916bc0a2c19c7f8995f410ae->leave($__internal_976f7dc124f9f7c82214c1179ea179dfa9d20fe2916bc0a2c19c7f8995f410ae_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/meu-symfoni/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
