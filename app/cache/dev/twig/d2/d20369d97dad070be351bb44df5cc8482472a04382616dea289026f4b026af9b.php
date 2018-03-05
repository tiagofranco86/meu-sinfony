<?php

/* lucky/number.html.twig */
class __TwigTemplate_773ee2d0fcfd12fa9ae20187686723a274c2ddcf99e4ee81f89cce55b9f07774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73d6d7eff73357e3be6be08b5227048ea265f26f356c37af9ef3a2ac500e5692 = $this->env->getExtension("native_profiler");
        $__internal_73d6d7eff73357e3be6be08b5227048ea265f26f356c37af9ef3a2ac500e5692->enter($__internal_73d6d7eff73357e3be6be08b5227048ea265f26f356c37af9ef3a2ac500e5692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        // line 1
        echo "<h1>Your lucky number is ";
        echo twig_escape_filter($this->env, (isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")), "html", null, true);
        echo "</h1>



";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 6
            echo "    <div class=\"flash-notice\">
        ";
            // line 7
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_73d6d7eff73357e3be6be08b5227048ea265f26f356c37af9ef3a2ac500e5692->leave($__internal_73d6d7eff73357e3be6be08b5227048ea265f26f356c37af9ef3a2ac500e5692_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  34 => 6,  30 => 5,  22 => 1,);
    }
}
/* <h1>Your lucky number is {{ number }}</h1>*/
/* */
/* */
/* */
/* {% for flash_message in app.session.flashBag.get('notice') %}*/
/*     <div class="flash-notice">*/
/*         {{ flash_message }}*/
/*     </div>*/
/* {% endfor %}*/
