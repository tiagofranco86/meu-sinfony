<?php

/* rio/list.html.twig */
class __TwigTemplate_793acc99347627b5f919194f748c23a7fc78c21c15c599b5e11534607422b392 extends Twig_Template
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
        $__internal_cddd5b80ffb323e2a8bbab36b37f85ba24d74c2e6662c5ef687c07a132d242bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cddd5b80ffb323e2a8bbab36b37f85ba24d74c2e6662c5ef687c07a132d242bb->enter($__internal_cddd5b80ffb323e2a8bbab36b37f85ba24d74c2e6662c5ef687c07a132d242bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rio/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cddd5b80ffb323e2a8bbab36b37f85ba24d74c2e6662c5ef687c07a132d242bb->leave($__internal_cddd5b80ffb323e2a8bbab36b37f85ba24d74c2e6662c5ef687c07a132d242bb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_de9647729d92d9faad5f754cf7b80d8dc7d911b87abae36dca770bc35856e0c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de9647729d92d9faad5f754cf7b80d8dc7d911b87abae36dca770bc35856e0c0->enter($__internal_de9647729d92d9faad5f754cf7b80d8dc7d911b87abae36dca770bc35856e0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Rio";
        
        $__internal_de9647729d92d9faad5f754cf7b80d8dc7d911b87abae36dca770bc35856e0c0->leave($__internal_de9647729d92d9faad5f754cf7b80d8dc7d911b87abae36dca770bc35856e0c0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ef111c2ed1061bf4a96d6b2412cc3880b456f00757ae30ed8580d3fea98cf67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef111c2ed1061bf4a96d6b2412cc3880b456f00757ae30ed8580d3fea98cf67->enter($__internal_2ef111c2ed1061bf4a96d6b2412cc3880b456f00757ae30ed8580d3fea98cf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " Ola Rio Amazonas";
        
        $__internal_2ef111c2ed1061bf4a96d6b2412cc3880b456f00757ae30ed8580d3fea98cf67->leave($__internal_2ef111c2ed1061bf4a96d6b2412cc3880b456f00757ae30ed8580d3fea98cf67_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig'%}

{% block title%}Rio{% endblock%}

{% block body%} Ola Rio Amazonas{% endblock%}", "rio/list.html.twig", "/var/www/meu-symfoni/app/Resources/views/rio/list.html.twig");
    }
}
