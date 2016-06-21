<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_7dbd972cabf9f5affa80dde2bd42c2537cd7480c969ba2ef508e5eb5c818e87d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cce0ab3d01b69ce65e7b46c7bab99827cc2eebe5f34be04838122b1d15fdea68 = $this->env->getExtension("native_profiler");
        $__internal_cce0ab3d01b69ce65e7b46c7bab99827cc2eebe5f34be04838122b1d15fdea68->enter($__internal_cce0ab3d01b69ce65e7b46c7bab99827cc2eebe5f34be04838122b1d15fdea68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cce0ab3d01b69ce65e7b46c7bab99827cc2eebe5f34be04838122b1d15fdea68->leave($__internal_cce0ab3d01b69ce65e7b46c7bab99827cc2eebe5f34be04838122b1d15fdea68_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b60a666b2c7c6bad0753f37918dfb031b76693402ca5932803411965b9e743ca = $this->env->getExtension("native_profiler");
        $__internal_b60a666b2c7c6bad0753f37918dfb031b76693402ca5932803411965b9e743ca->enter($__internal_b60a666b2c7c6bad0753f37918dfb031b76693402ca5932803411965b9e743ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b60a666b2c7c6bad0753f37918dfb031b76693402ca5932803411965b9e743ca->leave($__internal_b60a666b2c7c6bad0753f37918dfb031b76693402ca5932803411965b9e743ca_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_77d088c809beda2a1631098de06a0b45cc2c348e57a5c87caead5d94b53bfda0 = $this->env->getExtension("native_profiler");
        $__internal_77d088c809beda2a1631098de06a0b45cc2c348e57a5c87caead5d94b53bfda0->enter($__internal_77d088c809beda2a1631098de06a0b45cc2c348e57a5c87caead5d94b53bfda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_77d088c809beda2a1631098de06a0b45cc2c348e57a5c87caead5d94b53bfda0->leave($__internal_77d088c809beda2a1631098de06a0b45cc2c348e57a5c87caead5d94b53bfda0_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_69e4ba52d36adcd592288cdf902d3361a5f1b56e45875a5dd4f0721ded61ff99 = $this->env->getExtension("native_profiler");
        $__internal_69e4ba52d36adcd592288cdf902d3361a5f1b56e45875a5dd4f0721ded61ff99->enter($__internal_69e4ba52d36adcd592288cdf902d3361a5f1b56e45875a5dd4f0721ded61ff99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_69e4ba52d36adcd592288cdf902d3361a5f1b56e45875a5dd4f0721ded61ff99->leave($__internal_69e4ba52d36adcd592288cdf902d3361a5f1b56e45875a5dd4f0721ded61ff99_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
