<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6065d0bcd6d803ccf478a0b6ef0b34f8036d6c896aad8833a83db040812af491 extends Twig_Template
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
        $__internal_fd58815fb471103ad4141dfe054d1905b28a91b6ab975b55abd17d97c9ec9c6c = $this->env->getExtension("native_profiler");
        $__internal_fd58815fb471103ad4141dfe054d1905b28a91b6ab975b55abd17d97c9ec9c6c->enter($__internal_fd58815fb471103ad4141dfe054d1905b28a91b6ab975b55abd17d97c9ec9c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd58815fb471103ad4141dfe054d1905b28a91b6ab975b55abd17d97c9ec9c6c->leave($__internal_fd58815fb471103ad4141dfe054d1905b28a91b6ab975b55abd17d97c9ec9c6c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e77584ff378f87bb26ee55f5610e4e502851547bfc465644663433cca5a307b2 = $this->env->getExtension("native_profiler");
        $__internal_e77584ff378f87bb26ee55f5610e4e502851547bfc465644663433cca5a307b2->enter($__internal_e77584ff378f87bb26ee55f5610e4e502851547bfc465644663433cca5a307b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e77584ff378f87bb26ee55f5610e4e502851547bfc465644663433cca5a307b2->leave($__internal_e77584ff378f87bb26ee55f5610e4e502851547bfc465644663433cca5a307b2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_230a86a43efebb0d83538f6c2a5be6cfef0894811006a5a9e02f0750894fa5ab = $this->env->getExtension("native_profiler");
        $__internal_230a86a43efebb0d83538f6c2a5be6cfef0894811006a5a9e02f0750894fa5ab->enter($__internal_230a86a43efebb0d83538f6c2a5be6cfef0894811006a5a9e02f0750894fa5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_230a86a43efebb0d83538f6c2a5be6cfef0894811006a5a9e02f0750894fa5ab->leave($__internal_230a86a43efebb0d83538f6c2a5be6cfef0894811006a5a9e02f0750894fa5ab_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a20ddf79b17d262a014dcbd3a1722bfba68ca9932fcf7a4b5df3c15db6daf432 = $this->env->getExtension("native_profiler");
        $__internal_a20ddf79b17d262a014dcbd3a1722bfba68ca9932fcf7a4b5df3c15db6daf432->enter($__internal_a20ddf79b17d262a014dcbd3a1722bfba68ca9932fcf7a4b5df3c15db6daf432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a20ddf79b17d262a014dcbd3a1722bfba68ca9932fcf7a4b5df3c15db6daf432->leave($__internal_a20ddf79b17d262a014dcbd3a1722bfba68ca9932fcf7a4b5df3c15db6daf432_prof);

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
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
