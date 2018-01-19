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
        $__internal_2c12d2687f269d25cc20ac4c0fc26eb8412e81ec2442181b5d1974a1fb0216db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c12d2687f269d25cc20ac4c0fc26eb8412e81ec2442181b5d1974a1fb0216db->enter($__internal_2c12d2687f269d25cc20ac4c0fc26eb8412e81ec2442181b5d1974a1fb0216db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/dashboard.html.twig"));

        $__internal_8b46e495f91ad69bccbec50e240eeea53de4cd6bae20d332980aa8427c633ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b46e495f91ad69bccbec50e240eeea53de4cd6bae20d332980aa8427c633ea0->enter($__internal_8b46e495f91ad69bccbec50e240eeea53de4cd6bae20d332980aa8427c633ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c12d2687f269d25cc20ac4c0fc26eb8412e81ec2442181b5d1974a1fb0216db->leave($__internal_2c12d2687f269d25cc20ac4c0fc26eb8412e81ec2442181b5d1974a1fb0216db_prof);

        
        $__internal_8b46e495f91ad69bccbec50e240eeea53de4cd6bae20d332980aa8427c633ea0->leave($__internal_8b46e495f91ad69bccbec50e240eeea53de4cd6bae20d332980aa8427c633ea0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_84f0d583db6b5175b592f6a188b6e3ebfd921726dd89b9cbf33e9cf635d007f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f0d583db6b5175b592f6a188b6e3ebfd921726dd89b9cbf33e9cf635d007f3->enter($__internal_84f0d583db6b5175b592f6a188b6e3ebfd921726dd89b9cbf33e9cf635d007f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d601ec61d7c24a123a7f710fea44dfdce1c255142207e427ecf6e8be80e89590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d601ec61d7c24a123a7f710fea44dfdce1c255142207e427ecf6e8be80e89590->enter($__internal_d601ec61d7c24a123a7f710fea44dfdce1c255142207e427ecf6e8be80e89590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 12, $this->getSourceContext()); })()), "user", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 13
            echo "        <form method=\"post\">
            <tr>
               <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "procard", array()), "html", null, true);
            echo "</td>
               <input type=\"hidden\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
            echo "\" name=\"_userid\"></input>
               <td>
                   <button type=\"submit\" value=\"validate\" formaction=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validateuser");
            echo "\">Valider</button>
                   <button type=\"submit\" value=\"downgrade\" formaction=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("downgradeuser");
            echo "\">Rétrograder</button>
               </td>
            </tr>
        </form>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    
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
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 38, $this->getSourceContext()); })()), "user", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 39
            echo "        <tr>
           <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "procard", array()), "html", null, true);
            echo "</td>
           <td> <button>Valider</button> <button>Rétrograder</button></td>
        </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            ";
        // line 48
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
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 59, $this->getSourceContext()); })()), "user", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 60
            echo "        <tr>
           <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "procard", array()), "html", null, true);
            echo "</td>
           <td> <button>Valider</button> <button>Rétrograder</button></td>
        </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            ";
        // line 69
        echo "    </table>
    
    <table id=\"articletable\">
        <h2 class=\"h2tabdashboard\">Articles du blog</h2> 
        <tr>
          <th>Titre</th>
          <th>Date</th>
          <th>Texte</th>
          <th>Action à faire</th>
          
        </tr>
            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 80, $this->getSourceContext()); })()), "articles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 81
            echo "        <tr>
        <form method=\"post\">
            <td><a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_single", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "title", array()), "html", null, true);
            echo "</a></td>
           <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "dateArticle", array()), "d/m/Y"), "html", null, true);
            echo "</td>
           <td>";
            // line 85
            echo twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "content", array())), 0, 55);
            echo "</td>
           <input type=\"hidden\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()), "html", null, true);
            echo "\" name=\"_articleid\"></input>
           <td>
               <button type=\"submit\" formaction=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modify_article", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\">Modifier</button>
               <button type=\"submit\" formaction=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_article", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\">Supprimer</button>
           </td>
        </form>   
        </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "            ";
        // line 95
        echo "    </table>
";
        
        $__internal_d601ec61d7c24a123a7f710fea44dfdce1c255142207e427ecf6e8be80e89590->leave($__internal_d601ec61d7c24a123a7f710fea44dfdce1c255142207e427ecf6e8be80e89590_prof);

        
        $__internal_84f0d583db6b5175b592f6a188b6e3ebfd921726dd89b9cbf33e9cf635d007f3->leave($__internal_84f0d583db6b5175b592f6a188b6e3ebfd921726dd89b9cbf33e9cf635d007f3_prof);

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
        return array (  250 => 95,  248 => 94,  237 => 89,  233 => 88,  228 => 86,  224 => 85,  220 => 84,  214 => 83,  210 => 81,  206 => 80,  193 => 69,  191 => 68,  181 => 64,  177 => 63,  173 => 62,  169 => 61,  166 => 60,  162 => 59,  149 => 48,  147 => 47,  137 => 43,  133 => 42,  129 => 41,  125 => 40,  122 => 39,  118 => 38,  104 => 26,  93 => 22,  89 => 21,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 13,  60 => 12,  49 => 3,  40 => 2,  11 => 1,);
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
            {% for user in data.user %}
        <form method=\"post\">
            <tr>
               <td>{{user.lastname}}</td>
               <td>{{user.firstname}}</td>
               <td>{{user.email}}</td>
               <td>{{user.procard}}</td>
               <input type=\"hidden\" value=\"{{user.id}}\" name=\"_userid\"></input>
               <td>
                   <button type=\"submit\" value=\"validate\" formaction=\"{{path('validateuser')}}\">Valider</button>
                   <button type=\"submit\" value=\"downgrade\" formaction=\"{{path('downgradeuser')}}\">Rétrograder</button>
               </td>
            </tr>
        </form>
            {% endfor %}    
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
            {% for user in data.user %}
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
            {% for user in data.user %}
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
          <th>Titre</th>
          <th>Date</th>
          <th>Texte</th>
          <th>Action à faire</th>
          
        </tr>
            {% for article in data.articles %}
        <tr>
        <form method=\"post\">
            <td><a href=\"{{path('article_single', {'id': article.id})}}\">{{article.title}}</a></td>
           <td>{{article.dateArticle|date(\"d/m/Y\")}}</td>
           <td>{{article.content|striptags|slice(0, 55)|raw}}</td>
           <input type=\"hidden\" value=\"{{article.id}}\" name=\"_articleid\"></input>
           <td>
               <button type=\"submit\" formaction=\"{{path('modify_article', {'id' : article.id})}}\">Modifier</button>
               <button type=\"submit\" formaction=\"{{path('delete_article', {'id' : article.id})}}\">Supprimer</button>
           </td>
        </form>   
        </tr>
            {% endfor %}
            {# wire buttons to actions to validate or not the accounts #}
    </table>
{% endblock %}
", "Administration/dashboard.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Administration\\dashboard.html.twig");
    }
}
