<?php

/* base.html.twig */
class __TwigTemplate_230b29bacd6945e2a5b671f0b06d317ef7b0bf507296ff67e086cb61af1fe9a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcec2b4428a56079772414fb2fea26026643cb7c6c7dd552751a6f1c262b4f84 = $this->env->getExtension("native_profiler");
        $__internal_fcec2b4428a56079772414fb2fea26026643cb7c6c7dd552751a6f1c262b4f84->enter($__internal_fcec2b4428a56079772414fb2fea26026643cb7c6c7dd552751a6f1c262b4f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <style type=\"text/css\">
            .sidebar{
                width: 40%;
                float: right;
                background-color: red;
                min-height: 400px;
            }
            .content{
                width: 58%;
                min-height: 400px;
                background-color: green;

            }

            footer{
                height: 40px;
                line-height: 40px;
                text-align: center;
            }
            .body{
                margin: 0 1%;
            }
        </style>
    </head>
    <body>
        <div class=\"body\">
            <header>
                <nav>Menu</nav>
            </header>
            <div class=\"sidebar\">
               ";
        // line 38
        $this->displayBlock('sidebar', $context, $blocks);
        echo " 
            </div>
            <div class=\"content\">
                ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        echo "    
            </div>
            <footer>
                <small>Tiago Franco 1000</small>
            </footer>
        </div>
        ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "    </body>
</html>
";
        
        $__internal_fcec2b4428a56079772414fb2fea26026643cb7c6c7dd552751a6f1c262b4f84->leave($__internal_fcec2b4428a56079772414fb2fea26026643cb7c6c7dd552751a6f1c262b4f84_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_48cf14f0902c8fc620e37e252a75ec4a54cc614028adaf7ef02739921424e634 = $this->env->getExtension("native_profiler");
        $__internal_48cf14f0902c8fc620e37e252a75ec4a54cc614028adaf7ef02739921424e634->enter($__internal_48cf14f0902c8fc620e37e252a75ec4a54cc614028adaf7ef02739921424e634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_48cf14f0902c8fc620e37e252a75ec4a54cc614028adaf7ef02739921424e634->leave($__internal_48cf14f0902c8fc620e37e252a75ec4a54cc614028adaf7ef02739921424e634_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_df9cea95eee0497261dfbaf3aabe8e95c410af30391773e829150b9cdd41fdf9 = $this->env->getExtension("native_profiler");
        $__internal_df9cea95eee0497261dfbaf3aabe8e95c410af30391773e829150b9cdd41fdf9->enter($__internal_df9cea95eee0497261dfbaf3aabe8e95c410af30391773e829150b9cdd41fdf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_df9cea95eee0497261dfbaf3aabe8e95c410af30391773e829150b9cdd41fdf9->leave($__internal_df9cea95eee0497261dfbaf3aabe8e95c410af30391773e829150b9cdd41fdf9_prof);

    }

    // line 38
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8402e2a0d8a0817bf9f8c50f3e516b3087de3ce581d7fc5e33871849604a72ad = $this->env->getExtension("native_profiler");
        $__internal_8402e2a0d8a0817bf9f8c50f3e516b3087de3ce581d7fc5e33871849604a72ad->enter($__internal_8402e2a0d8a0817bf9f8c50f3e516b3087de3ce581d7fc5e33871849604a72ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_8402e2a0d8a0817bf9f8c50f3e516b3087de3ce581d7fc5e33871849604a72ad->leave($__internal_8402e2a0d8a0817bf9f8c50f3e516b3087de3ce581d7fc5e33871849604a72ad_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_afa6ae03d44f11939e498fee01751647da43b7cb6638bf9f8bb8ad2c8f44925b = $this->env->getExtension("native_profiler");
        $__internal_afa6ae03d44f11939e498fee01751647da43b7cb6638bf9f8bb8ad2c8f44925b->enter($__internal_afa6ae03d44f11939e498fee01751647da43b7cb6638bf9f8bb8ad2c8f44925b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_afa6ae03d44f11939e498fee01751647da43b7cb6638bf9f8bb8ad2c8f44925b->leave($__internal_afa6ae03d44f11939e498fee01751647da43b7cb6638bf9f8bb8ad2c8f44925b_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_799440659532a93f62a19f0752d087c360c0551db505fa38d3f230cb2f2b1868 = $this->env->getExtension("native_profiler");
        $__internal_799440659532a93f62a19f0752d087c360c0551db505fa38d3f230cb2f2b1868->enter($__internal_799440659532a93f62a19f0752d087c360c0551db505fa38d3f230cb2f2b1868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_799440659532a93f62a19f0752d087c360c0551db505fa38d3f230cb2f2b1868->leave($__internal_799440659532a93f62a19f0752d087c360c0551db505fa38d3f230cb2f2b1868_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 47,  134 => 41,  123 => 38,  112 => 6,  100 => 5,  91 => 48,  89 => 47,  80 => 41,  74 => 38,  39 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <style type="text/css">*/
/*             .sidebar{*/
/*                 width: 40%;*/
/*                 float: right;*/
/*                 background-color: red;*/
/*                 min-height: 400px;*/
/*             }*/
/*             .content{*/
/*                 width: 58%;*/
/*                 min-height: 400px;*/
/*                 background-color: green;*/
/* */
/*             }*/
/* */
/*             footer{*/
/*                 height: 40px;*/
/*                 line-height: 40px;*/
/*                 text-align: center;*/
/*             }*/
/*             .body{*/
/*                 margin: 0 1%;*/
/*             }*/
/*         </style>*/
/*     </head>*/
/*     <body>*/
/*         <div class="body">*/
/*             <header>*/
/*                 <nav>Menu</nav>*/
/*             </header>*/
/*             <div class="sidebar">*/
/*                {% block sidebar%}{% endblock%} */
/*             </div>*/
/*             <div class="content">*/
/*                 {% block body %}{% endblock %}    */
/*             </div>*/
/*             <footer>*/
/*                 <small>Tiago Franco 1000</small>*/
/*             </footer>*/
/*         </div>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
