<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_55abb952f0c324661e210d746b7ddf9fa865064ab1381ecdf4128a96e73d7a42 extends Twig_Template
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
        $__internal_7ea5e1f75440e5c6a93f6ea4f08ba2f73e6fa38f52c2007f32b3bda2a5c9ad07 = $this->env->getExtension("native_profiler");
        $__internal_7ea5e1f75440e5c6a93f6ea4f08ba2f73e6fa38f52c2007f32b3bda2a5c9ad07->enter($__internal_7ea5e1f75440e5c6a93f6ea4f08ba2f73e6fa38f52c2007f32b3bda2a5c9ad07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ea5e1f75440e5c6a93f6ea4f08ba2f73e6fa38f52c2007f32b3bda2a5c9ad07->leave($__internal_7ea5e1f75440e5c6a93f6ea4f08ba2f73e6fa38f52c2007f32b3bda2a5c9ad07_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4e153db476a1d72fffff55771e659ec3f3814d66e3c4eb4225b31ba70ee26c92 = $this->env->getExtension("native_profiler");
        $__internal_4e153db476a1d72fffff55771e659ec3f3814d66e3c4eb4225b31ba70ee26c92->enter($__internal_4e153db476a1d72fffff55771e659ec3f3814d66e3c4eb4225b31ba70ee26c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4e153db476a1d72fffff55771e659ec3f3814d66e3c4eb4225b31ba70ee26c92->leave($__internal_4e153db476a1d72fffff55771e659ec3f3814d66e3c4eb4225b31ba70ee26c92_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_644458b20977a45b36ed0ebc91c6378300636521de19a38a0b922afeeddb542d = $this->env->getExtension("native_profiler");
        $__internal_644458b20977a45b36ed0ebc91c6378300636521de19a38a0b922afeeddb542d->enter($__internal_644458b20977a45b36ed0ebc91c6378300636521de19a38a0b922afeeddb542d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_644458b20977a45b36ed0ebc91c6378300636521de19a38a0b922afeeddb542d->leave($__internal_644458b20977a45b36ed0ebc91c6378300636521de19a38a0b922afeeddb542d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_103adfbacf420f8a21df61b614e94394265f9d23186b5d2b5261328e37188d44 = $this->env->getExtension("native_profiler");
        $__internal_103adfbacf420f8a21df61b614e94394265f9d23186b5d2b5261328e37188d44->enter($__internal_103adfbacf420f8a21df61b614e94394265f9d23186b5d2b5261328e37188d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_103adfbacf420f8a21df61b614e94394265f9d23186b5d2b5261328e37188d44->leave($__internal_103adfbacf420f8a21df61b614e94394265f9d23186b5d2b5261328e37188d44_prof);

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
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
