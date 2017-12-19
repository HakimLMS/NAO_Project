<?php

/* form_table_layout.html.twig */
class __TwigTemplate_96cd836cbe473a3f65e139ab813b74ca4bd2b8959a08b3bb3171c48130d4be69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ef368ea73d3db4f21b27fd154dacb71fc32c7a797e64a53accf2317981daba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ef368ea73d3db4f21b27fd154dacb71fc32c7a797e64a53accf2317981daba9->enter($__internal_3ef368ea73d3db4f21b27fd154dacb71fc32c7a797e64a53accf2317981daba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_9ddf06497aed2a3dd8aa17f48bf9d3f0e3983e824e738fc04c40c859821afb43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ddf06497aed2a3dd8aa17f48bf9d3f0e3983e824e738fc04c40c859821afb43->enter($__internal_9ddf06497aed2a3dd8aa17f48bf9d3f0e3983e824e738fc04c40c859821afb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_3ef368ea73d3db4f21b27fd154dacb71fc32c7a797e64a53accf2317981daba9->leave($__internal_3ef368ea73d3db4f21b27fd154dacb71fc32c7a797e64a53accf2317981daba9_prof);

        
        $__internal_9ddf06497aed2a3dd8aa17f48bf9d3f0e3983e824e738fc04c40c859821afb43->leave($__internal_9ddf06497aed2a3dd8aa17f48bf9d3f0e3983e824e738fc04c40c859821afb43_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c74eda77fe8d2e1dee54b9a0502e22b23fd0197640382eb6736339029d3c0b40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c74eda77fe8d2e1dee54b9a0502e22b23fd0197640382eb6736339029d3c0b40->enter($__internal_c74eda77fe8d2e1dee54b9a0502e22b23fd0197640382eb6736339029d3c0b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f6d20fca97db3f3c09bf2ebd86836a0366db145a70932a9d5aad6698b3c94be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d20fca97db3f3c09bf2ebd86836a0366db145a70932a9d5aad6698b3c94be3->enter($__internal_f6d20fca97db3f3c09bf2ebd86836a0366db145a70932a9d5aad6698b3c94be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_f6d20fca97db3f3c09bf2ebd86836a0366db145a70932a9d5aad6698b3c94be3->leave($__internal_f6d20fca97db3f3c09bf2ebd86836a0366db145a70932a9d5aad6698b3c94be3_prof);

        
        $__internal_c74eda77fe8d2e1dee54b9a0502e22b23fd0197640382eb6736339029d3c0b40->leave($__internal_c74eda77fe8d2e1dee54b9a0502e22b23fd0197640382eb6736339029d3c0b40_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_7bffa3c12e4cf68e881ccfba9fcef3c08b330dd811a8f8aad18b1793dced76cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bffa3c12e4cf68e881ccfba9fcef3c08b330dd811a8f8aad18b1793dced76cc->enter($__internal_7bffa3c12e4cf68e881ccfba9fcef3c08b330dd811a8f8aad18b1793dced76cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_31b902f9a47751f6e17f1b672abac914e9c820f27e95526594b409a39c203bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b902f9a47751f6e17f1b672abac914e9c820f27e95526594b409a39c203bd3->enter($__internal_31b902f9a47751f6e17f1b672abac914e9c820f27e95526594b409a39c203bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_31b902f9a47751f6e17f1b672abac914e9c820f27e95526594b409a39c203bd3->leave($__internal_31b902f9a47751f6e17f1b672abac914e9c820f27e95526594b409a39c203bd3_prof);

        
        $__internal_7bffa3c12e4cf68e881ccfba9fcef3c08b330dd811a8f8aad18b1793dced76cc->leave($__internal_7bffa3c12e4cf68e881ccfba9fcef3c08b330dd811a8f8aad18b1793dced76cc_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_7d4b282d0ea3ccb49be3f826347764e3c747e44ac64e15fddf205aa9893c0750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d4b282d0ea3ccb49be3f826347764e3c747e44ac64e15fddf205aa9893c0750->enter($__internal_7d4b282d0ea3ccb49be3f826347764e3c747e44ac64e15fddf205aa9893c0750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_9547ce463a95aceb3d53a498a26e037e6cce0099125756cd0d3a5db8c4147794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9547ce463a95aceb3d53a498a26e037e6cce0099125756cd0d3a5db8c4147794->enter($__internal_9547ce463a95aceb3d53a498a26e037e6cce0099125756cd0d3a5db8c4147794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_9547ce463a95aceb3d53a498a26e037e6cce0099125756cd0d3a5db8c4147794->leave($__internal_9547ce463a95aceb3d53a498a26e037e6cce0099125756cd0d3a5db8c4147794_prof);

        
        $__internal_7d4b282d0ea3ccb49be3f826347764e3c747e44ac64e15fddf205aa9893c0750->leave($__internal_7d4b282d0ea3ccb49be3f826347764e3c747e44ac64e15fddf205aa9893c0750_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_3cbcb05d363538264ac19663f5626a021ba7d4774f3af862316144e7eeef7925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cbcb05d363538264ac19663f5626a021ba7d4774f3af862316144e7eeef7925->enter($__internal_3cbcb05d363538264ac19663f5626a021ba7d4774f3af862316144e7eeef7925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_371cb1de18a0c1a3c7b7e3b84e08c63e863bed30b7379fe38ac9911713772867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371cb1de18a0c1a3c7b7e3b84e08c63e863bed30b7379fe38ac9911713772867->enter($__internal_371cb1de18a0c1a3c7b7e3b84e08c63e863bed30b7379fe38ac9911713772867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_371cb1de18a0c1a3c7b7e3b84e08c63e863bed30b7379fe38ac9911713772867->leave($__internal_371cb1de18a0c1a3c7b7e3b84e08c63e863bed30b7379fe38ac9911713772867_prof);

        
        $__internal_3cbcb05d363538264ac19663f5626a021ba7d4774f3af862316144e7eeef7925->leave($__internal_3cbcb05d363538264ac19663f5626a021ba7d4774f3af862316144e7eeef7925_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
