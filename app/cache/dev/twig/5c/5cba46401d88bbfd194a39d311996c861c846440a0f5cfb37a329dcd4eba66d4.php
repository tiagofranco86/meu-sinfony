<?php

/* rio/list.html.twig */
class __TwigTemplate_8bc3848abcca0ea9bee88a12eda9b2e30ca98bb427c662a47a8a842c1047e0f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rio/list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c041a27108ef9557ab83633e9f913bef227f6836308565a85a5cae821eeede0e = $this->env->getExtension("native_profiler");
        $__internal_c041a27108ef9557ab83633e9f913bef227f6836308565a85a5cae821eeede0e->enter($__internal_c041a27108ef9557ab83633e9f913bef227f6836308565a85a5cae821eeede0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rio/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c041a27108ef9557ab83633e9f913bef227f6836308565a85a5cae821eeede0e->leave($__internal_c041a27108ef9557ab83633e9f913bef227f6836308565a85a5cae821eeede0e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bffb2601a7fc090ae32149a9fbb4c6164d0d73a60b7a31ac69a63366450282d = $this->env->getExtension("native_profiler");
        $__internal_4bffb2601a7fc090ae32149a9fbb4c6164d0d73a60b7a31ac69a63366450282d->enter($__internal_4bffb2601a7fc090ae32149a9fbb4c6164d0d73a60b7a31ac69a63366450282d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Rio";
        
        $__internal_4bffb2601a7fc090ae32149a9fbb4c6164d0d73a60b7a31ac69a63366450282d->leave($__internal_4bffb2601a7fc090ae32149a9fbb4c6164d0d73a60b7a31ac69a63366450282d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0655b64aace66b03b6f0f18a16bea66f703c18aaf4e721545fe9c9590346114 = $this->env->getExtension("native_profiler");
        $__internal_c0655b64aace66b03b6f0f18a16bea66f703c18aaf4e721545fe9c9590346114->enter($__internal_c0655b64aace66b03b6f0f18a16bea66f703c18aaf4e721545fe9c9590346114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " Ola Rio Amazonas";
        
        $__internal_c0655b64aace66b03b6f0f18a16bea66f703c18aaf4e721545fe9c9590346114->leave($__internal_c0655b64aace66b03b6f0f18a16bea66f703c18aaf4e721545fe9c9590346114_prof);

    }

    public function getTemplateName()
    {
        return "rio/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig'%}*/
/* */
/* {% block title%}Rio{% endblock%}*/
/* */
/* {% block body%} Ola Rio Amazonas{% endblock%}*/
