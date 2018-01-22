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
        $__internal_7e5a16fed157d49a443b862cb1b2e326619ab84304690c7fb0faa56117f500d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e5a16fed157d49a443b862cb1b2e326619ab84304690c7fb0faa56117f500d2->enter($__internal_7e5a16fed157d49a443b862cb1b2e326619ab84304690c7fb0faa56117f500d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/dashboard.html.twig"));

        $__internal_45ecc8315c749fd1746170bf9c9ab0ad7705165af1ce1f605b75ac686c95be3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ecc8315c749fd1746170bf9c9ab0ad7705165af1ce1f605b75ac686c95be3d->enter($__internal_45ecc8315c749fd1746170bf9c9ab0ad7705165af1ce1f605b75ac686c95be3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e5a16fed157d49a443b862cb1b2e326619ab84304690c7fb0faa56117f500d2->leave($__internal_7e5a16fed157d49a443b862cb1b2e326619ab84304690c7fb0faa56117f500d2_prof);

        
        $__internal_45ecc8315c749fd1746170bf9c9ab0ad7705165af1ce1f605b75ac686c95be3d->leave($__internal_45ecc8315c749fd1746170bf9c9ab0ad7705165af1ce1f605b75ac686c95be3d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a08cf5a551e9751279c8afc885ecedba389f32ae77bf59040d0eb771ad6e0177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a08cf5a551e9751279c8afc885ecedba389f32ae77bf59040d0eb771ad6e0177->enter($__internal_a08cf5a551e9751279c8afc885ecedba389f32ae77bf59040d0eb771ad6e0177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7211fc4be0b516e27e4a19bb8326a4a1df433ece134801f5701d7732a6af818a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7211fc4be0b516e27e4a19bb8326a4a1df433ece134801f5701d7732a6af818a->enter($__internal_7211fc4be0b516e27e4a19bb8326a4a1df433ece134801f5701d7732a6af818a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"usercard\">
        <div class=\"card\" style=\"width: 18rem;\">
            
            <div class=\"card-body\">
              <h5 class=\"card-title\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 7, $this->getSourceContext()); })()), "user", array()), "Surname", array()), "html", null, true);
        echo "</h5>
              <p class=\"card-text\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 8, $this->getSourceContext()); })()), "user", array()), "type", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
        
    </div>
    <div>
        <table id=\"userstable\">
            <h2 class=\"h2tabdashboard\">Comptes naturalistes à valider</h2> 
            <tr>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Mail</th>
              <th>Carte Professionnelle</th>
              <th>Action à faire</th>
            </tr>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 23, $this->getSourceContext()); })()), "user", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 24
            echo "            <form method=\"post\">
                <tr>
                   <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "procard", array()), "html", null, true);
            echo "</td>
                   <input type=\"hidden\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
            echo "\" name=\"_userid\"></input>
                   <td>
                       <button type=\"submit\" value=\"validate\" formaction=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validateuser");
            echo "\">Valider</button>
                       <button type=\"submit\" value=\"downgrade\" formaction=\"";
            // line 33
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
        // line 37
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
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 49, $this->getSourceContext()); })()), "user", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 50
            echo "            <tr>
               <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "procard", array()), "html", null, true);
            echo "</td>
               <td> <button>Valider</button> <button>Rétrograder</button></td>
            </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                ";
        // line 59
        echo "        </table>

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
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 70, $this->getSourceContext()); })()), "user", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 71
            echo "            <tr>
               <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "procard", array()), "html", null, true);
            echo "</td>
               <td> <button>Valider</button> <button>Rétrograder</button></td>
            </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                ";
        // line 80
        echo "        </table>

        <table id=\"articletable\">
            <h2 class=\"h2tabdashboard\">Articles du blog</h2> 
            <tr>
              <th>Titre</th>
              <th>Date</th>
              <th>Texte</th>
              <th>Action à faire</th>

            </tr>
                ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 91, $this->getSourceContext()); })()), "articles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 92
            echo "            <tr>
            <form method=\"post\">
                <td><a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_single", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "title", array()), "html", null, true);
            echo "</a></td>
               <td>";
            // line 95
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "dateArticle", array()), "d/m/Y"), "html", null, true);
            echo "</td>
               <td>";
            // line 96
            echo twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "content", array())), 0, 55);
            echo "</td>
               <input type=\"hidden\" value=\"";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()), "html", null, true);
            echo "\" name=\"_articleid\"></input>
               <td>
                   <button type=\"submit\" formaction=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modify_article", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\">Modifier</button>
                   <button type=\"submit\" formaction=\"";
            // line 100
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
        // line 105
        echo "                ";
        // line 106
        echo "        </table>
    </div>
";
        
        $__internal_7211fc4be0b516e27e4a19bb8326a4a1df433ece134801f5701d7732a6af818a->leave($__internal_7211fc4be0b516e27e4a19bb8326a4a1df433ece134801f5701d7732a6af818a_prof);

        
        $__internal_a08cf5a551e9751279c8afc885ecedba389f32ae77bf59040d0eb771ad6e0177->leave($__internal_a08cf5a551e9751279c8afc885ecedba389f32ae77bf59040d0eb771ad6e0177_prof);

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
        return array (  267 => 106,  265 => 105,  254 => 100,  250 => 99,  245 => 97,  241 => 96,  237 => 95,  231 => 94,  227 => 92,  223 => 91,  210 => 80,  208 => 79,  198 => 75,  194 => 74,  190 => 73,  186 => 72,  183 => 71,  179 => 70,  166 => 59,  164 => 58,  154 => 54,  150 => 53,  146 => 52,  142 => 51,  139 => 50,  135 => 49,  121 => 37,  110 => 33,  106 => 32,  101 => 30,  97 => 29,  93 => 28,  89 => 27,  85 => 26,  81 => 24,  77 => 23,  59 => 8,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"usercard\">
        <div class=\"card\" style=\"width: 18rem;\">
            
            <div class=\"card-body\">
              <h5 class=\"card-title\">{{data.user.Surname}}</h5>
              <p class=\"card-text\">{{data.user.type}}</p>
            </div>
        </div>
        
    </div>
    <div>
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
    </div>
{% endblock %}
", "Administration/dashboard.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Administration\\dashboard.html.twig");
    }
}
