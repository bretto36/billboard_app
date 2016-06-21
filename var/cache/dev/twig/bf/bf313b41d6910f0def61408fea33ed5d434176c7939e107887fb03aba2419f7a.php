<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_e77de9d93598ba9fef01ff4e0041dc8e9bd94bebc01d89265adef9272e96a179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7872d4ae97ba92f7ea8f8827ae3f21fca012f8ff23d1211a9ee55c51b254aa08 = $this->env->getExtension("native_profiler");
        $__internal_7872d4ae97ba92f7ea8f8827ae3f21fca012f8ff23d1211a9ee55c51b254aa08->enter($__internal_7872d4ae97ba92f7ea8f8827ae3f21fca012f8ff23d1211a9ee55c51b254aa08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7872d4ae97ba92f7ea8f8827ae3f21fca012f8ff23d1211a9ee55c51b254aa08->leave($__internal_7872d4ae97ba92f7ea8f8827ae3f21fca012f8ff23d1211a9ee55c51b254aa08_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd0c6c5ddbe523def976589f4cff8ae6a8b6dc862f79545b0e51b1cb6fe64b4d = $this->env->getExtension("native_profiler");
        $__internal_dd0c6c5ddbe523def976589f4cff8ae6a8b6dc862f79545b0e51b1cb6fe64b4d->enter($__internal_dd0c6c5ddbe523def976589f4cff8ae6a8b6dc862f79545b0e51b1cb6fe64b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_dd0c6c5ddbe523def976589f4cff8ae6a8b6dc862f79545b0e51b1cb6fe64b4d->leave($__internal_dd0c6c5ddbe523def976589f4cff8ae6a8b6dc862f79545b0e51b1cb6fe64b4d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
