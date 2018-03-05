<?php

/* base.html.twig */
class __TwigTemplate_0d55546943ffdd829784163fb64bb6aa16f975da1c55c9ddb58b5a431261ca4a extends Twig_Template
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
        $__internal_8e7c90173a83be7691f70155d79f4d3c1883fa10852f94541cf9a001fb949016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7c90173a83be7691f70155d79f4d3c1883fa10852f94541cf9a001fb949016->enter($__internal_8e7c90173a83be7691f70155d79f4d3c1883fa10852f94541cf9a001fb949016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
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
        <nav>
            <ul>
                <li>
                    ";
        // line 36
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 37
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Logout</a>
                    ";
        } else {
            // line 39
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login</a>
                    ";
        }
        // line 41
        echo "
                </li>
            </ul>
        </nav>
        <div class=\"body\">
            <header>
                <nav>Menu</nav>
            </header>
            <div class=\"sidebar\">
               ";
        // line 50
        $this->displayBlock('sidebar', $context, $blocks);
        echo " 
            </div>
            <div class=\"content\">
                ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        echo "    
            </div>
            <footer>
                <small>Tiago Franco 1000</small>
            </footer>
        </div>
        ";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "    </body>
</html>
";
        
        $__internal_8e7c90173a83be7691f70155d79f4d3c1883fa10852f94541cf9a001fb949016->leave($__internal_8e7c90173a83be7691f70155d79f4d3c1883fa10852f94541cf9a001fb949016_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_35f05142cd89b048543fadc3a3c2a5ccaee6913ad4997049e7f12f169a817279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f05142cd89b048543fadc3a3c2a5ccaee6913ad4997049e7f12f169a817279->enter($__internal_35f05142cd89b048543fadc3a3c2a5ccaee6913ad4997049e7f12f169a817279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_35f05142cd89b048543fadc3a3c2a5ccaee6913ad4997049e7f12f169a817279->leave($__internal_35f05142cd89b048543fadc3a3c2a5ccaee6913ad4997049e7f12f169a817279_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b33adfc84dfec9b486e9bd207a90e3ac5865b88f4bc0d0376f3e3bf3c74edc0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b33adfc84dfec9b486e9bd207a90e3ac5865b88f4bc0d0376f3e3bf3c74edc0e->enter($__internal_b33adfc84dfec9b486e9bd207a90e3ac5865b88f4bc0d0376f3e3bf3c74edc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b33adfc84dfec9b486e9bd207a90e3ac5865b88f4bc0d0376f3e3bf3c74edc0e->leave($__internal_b33adfc84dfec9b486e9bd207a90e3ac5865b88f4bc0d0376f3e3bf3c74edc0e_prof);

    }

    // line 50
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7cb2d4e3997eb7da486b6e14ec655b4f3863b5b65f3fe0a33897edc8f8e8176d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb2d4e3997eb7da486b6e14ec655b4f3863b5b65f3fe0a33897edc8f8e8176d->enter($__internal_7cb2d4e3997eb7da486b6e14ec655b4f3863b5b65f3fe0a33897edc8f8e8176d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_7cb2d4e3997eb7da486b6e14ec655b4f3863b5b65f3fe0a33897edc8f8e8176d->leave($__internal_7cb2d4e3997eb7da486b6e14ec655b4f3863b5b65f3fe0a33897edc8f8e8176d_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_047c76c985f2209dbf1d3fae1b8d857de4ec3498df459acd1dccd4fb574ee2a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047c76c985f2209dbf1d3fae1b8d857de4ec3498df459acd1dccd4fb574ee2a8->enter($__internal_047c76c985f2209dbf1d3fae1b8d857de4ec3498df459acd1dccd4fb574ee2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_047c76c985f2209dbf1d3fae1b8d857de4ec3498df459acd1dccd4fb574ee2a8->leave($__internal_047c76c985f2209dbf1d3fae1b8d857de4ec3498df459acd1dccd4fb574ee2a8_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_35a2ed65d6e21ea73672ad3776002be814af9bd1e39100ab097b80a931566981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a2ed65d6e21ea73672ad3776002be814af9bd1e39100ab097b80a931566981->enter($__internal_35a2ed65d6e21ea73672ad3776002be814af9bd1e39100ab097b80a931566981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_35a2ed65d6e21ea73672ad3776002be814af9bd1e39100ab097b80a931566981->leave($__internal_35a2ed65d6e21ea73672ad3776002be814af9bd1e39100ab097b80a931566981_prof);

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
        return array (  168 => 59,  157 => 53,  146 => 50,  135 => 6,  123 => 5,  114 => 60,  112 => 59,  103 => 53,  97 => 50,  86 => 41,  80 => 39,  74 => 37,  72 => 36,  39 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
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
        <nav>
            <ul>
                <li>
                    {% if is_granted('ROLE_USER') %}
                        <a href=\"{{ path('fos_user_security_logout') }}\">Logout</a>
                    {% else %}
                        <a href=\"{{ path('fos_user_security_login') }}\">Login</a>
                    {% endif %}

                </li>
            </ul>
        </nav>
        <div class=\"body\">
            <header>
                <nav>Menu</nav>
            </header>
            <div class=\"sidebar\">
               {% block sidebar%}{% endblock%} 
            </div>
            <div class=\"content\">
                {% block body %}{% endblock %}    
            </div>
            <footer>
                <small>Tiago Franco 1000</small>
            </footer>
        </div>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/meu-symfoni/app/Resources/views/base.html.twig");
    }
}
