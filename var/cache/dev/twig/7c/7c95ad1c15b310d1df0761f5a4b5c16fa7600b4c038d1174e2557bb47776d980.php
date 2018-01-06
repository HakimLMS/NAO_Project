<?php

/* Administration/dashboard.html.twig */
class __TwigTemplate_c4223d61da71dd2291748e6e7b42dbc7d3129c02f2ff3f2561a931aa0ccae969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Administration/dashboard.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61d388ae2147f35d9fa4c12d08c6eed7a8535e7733c6ed78cbadd8e9472d1f6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d388ae2147f35d9fa4c12d08c6eed7a8535e7733c6ed78cbadd8e9472d1f6b->enter($__internal_61d388ae2147f35d9fa4c12d08c6eed7a8535e7733c6ed78cbadd8e9472d1f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/dashboard.html.twig"));

        $__internal_10c3e832a869c7b1534bc6a1dd7de2c6f1722df324502d86dbf261a8bc362c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c3e832a869c7b1534bc6a1dd7de2c6f1722df324502d86dbf261a8bc362c93->enter($__internal_10c3e832a869c7b1534bc6a1dd7de2c6f1722df324502d86dbf261a8bc362c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61d388ae2147f35d9fa4c12d08c6eed7a8535e7733c6ed78cbadd8e9472d1f6b->leave($__internal_61d388ae2147f35d9fa4c12d08c6eed7a8535e7733c6ed78cbadd8e9472d1f6b_prof);

        
        $__internal_10c3e832a869c7b1534bc6a1dd7de2c6f1722df324502d86dbf261a8bc362c93->leave($__internal_10c3e832a869c7b1534bc6a1dd7de2c6f1722df324502d86dbf261a8bc362c93_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b3d538e85386c376e2e2f0cd2d2917c03770d2e4d5bc6f3ed91ef3840cb6dd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b3d538e85386c376e2e2f0cd2d2917c03770d2e4d5bc6f3ed91ef3840cb6dd1->enter($__internal_1b3d538e85386c376e2e2f0cd2d2917c03770d2e4d5bc6f3ed91ef3840cb6dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f7b02e5ab0fcbb9f958ece9e39fdf6034b28c5a937851c7135f38d351f6e31b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b02e5ab0fcbb9f958ece9e39fdf6034b28c5a937851c7135f38d351f6e31b5->enter($__internal_f7b02e5ab0fcbb9f958ece9e39fdf6034b28c5a937851c7135f38d351f6e31b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <table id=\"userstable\">
        <h2 class=\"h2tabdashboard\">Comptes naturalistes à valider</h2> 
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Mail</th>
          <th>Carte Professionnelle</th>
          <th>Action à faire</th>
        </tr>
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 12, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 13
            echo "        <tr>
           <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "procard", array()), "html", null, true);
            echo "</td>
           <td> <button>Valider</button> <button>Rétrograder</button></td>
        </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            ";
        // line 22
        echo "    </table>
            
    <table id=\"observationtable\">
        <h2 class=\"h2tabdashboard\">Observations</h2> 
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Mail</th>
          <th>Carte Professionnelle</th>
          <th>Action à faire</th>
        </tr>
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 33, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 34
            echo "        <tr>
           <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "procard", array()), "html", null, true);
            echo "</td>
           <td> <button>Valider</button> <button>Rétrograder</button></td>
        </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            ";
        // line 43
        echo "    </table>
    
    <table id=\"obsqueudtable\">
        <h2 class=\"h2tabdashboard\">Observations à valider</h2> 
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Mail</th>
          <th>Carte Professionnelle</th>
          <th>Action à faire</th>
        </tr>
            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 54, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 55
            echo "        <tr>
           <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "procard", array()), "html", null, true);
            echo "</td>
           <td> <button>Valider</button> <button>Rétrograder</button></td>
        </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            ";
        // line 64
        echo "    </table>
    
    <table id=\"articletable\">
        <h2 class=\"h2tabdashboard\">Articles du blog</h2> 
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Mail</th>
          <th>Carte Professionnelle</th>
          <th>Action à faire</th>
        </tr>
            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 75, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 76
            echo "        <tr>
           <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "procard", array()), "html", null, true);
            echo "</td>
           <td> <button>Valider</button> <button>Rétrograder</button></td>
        </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "            ";
        // line 85
        echo "    </table>
";
        
        $__internal_f7b02e5ab0fcbb9f958ece9e39fdf6034b28c5a937851c7135f38d351f6e31b5->leave($__internal_f7b02e5ab0fcbb9f958ece9e39fdf6034b28c5a937851c7135f38d351f6e31b5_prof);

        
        $__internal_1b3d538e85386c376e2e2f0cd2d2917c03770d2e4d5bc6f3ed91ef3840cb6dd1->leave($__internal_1b3d538e85386c376e2e2f0cd2d2917c03770d2e4d5bc6f3ed91ef3840cb6dd1_prof);

    }

    public function getTemplateName()
    {
        return "Administration/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 85,  221 => 84,  211 => 80,  207 => 79,  203 => 78,  199 => 77,  196 => 76,  192 => 75,  179 => 64,  177 => 63,  167 => 59,  163 => 58,  159 => 57,  155 => 56,  152 => 55,  148 => 54,  135 => 43,  133 => 42,  123 => 38,  119 => 37,  115 => 36,  111 => 35,  108 => 34,  104 => 33,  91 => 22,  89 => 21,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  64 => 13,  60 => 12,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <table id=\"userstable\">
        <h2 class=\"h2tabdashboard\">Comptes naturalistes à valider</h2> 
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Mail</th>
          <th>Carte Professionnelle</th>
          <th>Action à faire</th>
        </tr>
            {% for user in data %}
        <tr>
           <td>{{user.lastname}}</td>
           <td>{{user.firstname}}</td>
           <td>{{user.email}}</td>
           <td>{{user.procard}}</td>
           <td> <button>Valider</button> <button>Rétrograder</button></td>
        </tr>
            {% endfor %}
            {# wire buttons to actions to validate or not the accounts #}
    </table>
            
    <table id=\"observationtable\">
        <h2 class=\"h2tabdashboard\">Observations</h2> 
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Mail</th>
          <th>Carte Professionnelle</th>
          <th>Action à faire</th>
        </tr>
            {% for user in data %}
        <tr>
           <td>{{user.lastname}}</td>
           <td>{{user.firstname}}</td>
           <td>{{user.email}}</td>
           <td>{{user.procard}}</td>
           <td> <button>Valider</button> <button>Rétrograder</button></td>
        </tr>
            {% endfor %}
            {# wire buttons to actions to validate or not the accounts #}
    </table>
    
    <table id=\"obsqueudtable\">
        <h2 class=\"h2tabdashboard\">Observations à valider</h2> 
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Mail</th>
          <th>Carte Professionnelle</th>
          <th>Action à faire</th>
        </tr>
            {% for user in data %}
        <tr>
           <td>{{user.lastname}}</td>
           <td>{{user.firstname}}</td>
           <td>{{user.email}}</td>
           <td>{{user.procard}}</td>
           <td> <button>Valider</button> <button>Rétrograder</button></td>
        </tr>
            {% endfor %}
            {# wire buttons to actions to validate or not the accounts #}
    </table>
    
    <table id=\"articletable\">
        <h2 class=\"h2tabdashboard\">Articles du blog</h2> 
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Mail</th>
          <th>Carte Professionnelle</th>
          <th>Action à faire</th>
        </tr>
            {% for user in data %}
        <tr>
           <td>{{user.lastname}}</td>
           <td>{{user.firstname}}</td>
           <td>{{user.email}}</td>
           <td>{{user.procard}}</td>
           <td> <button>Valider</button> <button>Rétrograder</button></td>
        </tr>
            {% endfor %}
            {# wire buttons to actions to validate or not the accounts #}
    </table>
{% endblock %}
", "Administration/dashboard.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Administration\\dashboard.html.twig");
    }
}
