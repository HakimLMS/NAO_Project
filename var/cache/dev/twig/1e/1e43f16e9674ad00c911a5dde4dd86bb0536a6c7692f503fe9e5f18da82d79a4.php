<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_c4bc26f7203e5f39eb05147e24068f05ee0caf85932ce27b317313b834fe3186 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3af6a473c57e16f7f717519d4cd3e8f9053df3f3110275cdb4fdba4f1de7f913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3af6a473c57e16f7f717519d4cd3e8f9053df3f3110275cdb4fdba4f1de7f913->enter($__internal_3af6a473c57e16f7f717519d4cd3e8f9053df3f3110275cdb4fdba4f1de7f913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_cc219c253adbc402ccf084fe654d9cc78bbb9588aaf30aea75ab4b0e4e92aa1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc219c253adbc402ccf084fe654d9cc78bbb9588aaf30aea75ab4b0e4e92aa1d->enter($__internal_cc219c253adbc402ccf084fe654d9cc78bbb9588aaf30aea75ab4b0e4e92aa1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_3af6a473c57e16f7f717519d4cd3e8f9053df3f3110275cdb4fdba4f1de7f913->leave($__internal_3af6a473c57e16f7f717519d4cd3e8f9053df3f3110275cdb4fdba4f1de7f913_prof);

        
        $__internal_cc219c253adbc402ccf084fe654d9cc78bbb9588aaf30aea75ab4b0e4e92aa1d->leave($__internal_cc219c253adbc402ccf084fe654d9cc78bbb9588aaf30aea75ab4b0e4e92aa1d_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_d3919bae858eae9b354e3b52c0c09aa05e30fff8c4dfa611e8cf9b8463c82e54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3919bae858eae9b354e3b52c0c09aa05e30fff8c4dfa611e8cf9b8463c82e54->enter($__internal_d3919bae858eae9b354e3b52c0c09aa05e30fff8c4dfa611e8cf9b8463c82e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_af0ee3b80267091f57999d1159a89829dcaeb9c51738809199494939e021601d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af0ee3b80267091f57999d1159a89829dcaeb9c51738809199494939e021601d->enter($__internal_af0ee3b80267091f57999d1159a89829dcaeb9c51738809199494939e021601d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_af0ee3b80267091f57999d1159a89829dcaeb9c51738809199494939e021601d->leave($__internal_af0ee3b80267091f57999d1159a89829dcaeb9c51738809199494939e021601d_prof);

        
        $__internal_d3919bae858eae9b354e3b52c0c09aa05e30fff8c4dfa611e8cf9b8463c82e54->leave($__internal_d3919bae858eae9b354e3b52c0c09aa05e30fff8c4dfa611e8cf9b8463c82e54_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_4f3e67a7d5861e3bb44b18f77883bfcc735459f5c420b64076d347ea2c4badf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f3e67a7d5861e3bb44b18f77883bfcc735459f5c420b64076d347ea2c4badf4->enter($__internal_4f3e67a7d5861e3bb44b18f77883bfcc735459f5c420b64076d347ea2c4badf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_165eac6be9e85650cc77be336f004b41dbadf68523637353cc141ac93611df07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165eac6be9e85650cc77be336f004b41dbadf68523637353cc141ac93611df07->enter($__internal_165eac6be9e85650cc77be336f004b41dbadf68523637353cc141ac93611df07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_165eac6be9e85650cc77be336f004b41dbadf68523637353cc141ac93611df07->leave($__internal_165eac6be9e85650cc77be336f004b41dbadf68523637353cc141ac93611df07_prof);

        
        $__internal_4f3e67a7d5861e3bb44b18f77883bfcc735459f5c420b64076d347ea2c4badf4->leave($__internal_4f3e67a7d5861e3bb44b18f77883bfcc735459f5c420b64076d347ea2c4badf4_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_200d9222e2ead7d1b1226649122ba1ada85e6a36e17588df1a72cc6a969a5fc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_200d9222e2ead7d1b1226649122ba1ada85e6a36e17588df1a72cc6a969a5fc0->enter($__internal_200d9222e2ead7d1b1226649122ba1ada85e6a36e17588df1a72cc6a969a5fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_7f9018afd0ca4f6d4dadc52b0665935b07d4c2cfa993b77f0d20e663929c7305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f9018afd0ca4f6d4dadc52b0665935b07d4c2cfa993b77f0d20e663929c7305->enter($__internal_7f9018afd0ca4f6d4dadc52b0665935b07d4c2cfa993b77f0d20e663929c7305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_7f9018afd0ca4f6d4dadc52b0665935b07d4c2cfa993b77f0d20e663929c7305->leave($__internal_7f9018afd0ca4f6d4dadc52b0665935b07d4c2cfa993b77f0d20e663929c7305_prof);

        
        $__internal_200d9222e2ead7d1b1226649122ba1ada85e6a36e17588df1a72cc6a969a5fc0->leave($__internal_200d9222e2ead7d1b1226649122ba1ada85e6a36e17588df1a72cc6a969a5fc0_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_24fe626b654a43801e3e5d465ddac0a63dc88ee6edf7a4912d1796f5ac2e6c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24fe626b654a43801e3e5d465ddac0a63dc88ee6edf7a4912d1796f5ac2e6c5e->enter($__internal_24fe626b654a43801e3e5d465ddac0a63dc88ee6edf7a4912d1796f5ac2e6c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a540abd770039539c798a161077d5f37e518dc8fadf5937bc60ade37f95409b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a540abd770039539c798a161077d5f37e518dc8fadf5937bc60ade37f95409b1->enter($__internal_a540abd770039539c798a161077d5f37e518dc8fadf5937bc60ade37f95409b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_a540abd770039539c798a161077d5f37e518dc8fadf5937bc60ade37f95409b1->leave($__internal_a540abd770039539c798a161077d5f37e518dc8fadf5937bc60ade37f95409b1_prof);

        
        $__internal_24fe626b654a43801e3e5d465ddac0a63dc88ee6edf7a4912d1796f5ac2e6c5e->leave($__internal_24fe626b654a43801e3e5d465ddac0a63dc88ee6edf7a4912d1796f5ac2e6c5e_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_03271b147465a3f97f739520e82c4450867fd49277b451e17509ddc7866fdc21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03271b147465a3f97f739520e82c4450867fd49277b451e17509ddc7866fdc21->enter($__internal_03271b147465a3f97f739520e82c4450867fd49277b451e17509ddc7866fdc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_e48dad39b1b269915b40cca5943621a9fd0b3ce7a300d701db152d13772c3e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48dad39b1b269915b40cca5943621a9fd0b3ce7a300d701db152d13772c3e03->enter($__internal_e48dad39b1b269915b40cca5943621a9fd0b3ce7a300d701db152d13772c3e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_e48dad39b1b269915b40cca5943621a9fd0b3ce7a300d701db152d13772c3e03->leave($__internal_e48dad39b1b269915b40cca5943621a9fd0b3ce7a300d701db152d13772c3e03_prof);

        
        $__internal_03271b147465a3f97f739520e82c4450867fd49277b451e17509ddc7866fdc21->leave($__internal_03271b147465a3f97f739520e82c4450867fd49277b451e17509ddc7866fdc21_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_4007806226fdffee72cd6e1f7e3cc4372d2b01f5272231b5a0ef808ff1eab84c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4007806226fdffee72cd6e1f7e3cc4372d2b01f5272231b5a0ef808ff1eab84c->enter($__internal_4007806226fdffee72cd6e1f7e3cc4372d2b01f5272231b5a0ef808ff1eab84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_159b7f34c6937f1ca0fc0aadaf2d8474027d9255909aa59ed8ec6f548b403fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159b7f34c6937f1ca0fc0aadaf2d8474027d9255909aa59ed8ec6f548b403fe8->enter($__internal_159b7f34c6937f1ca0fc0aadaf2d8474027d9255909aa59ed8ec6f548b403fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_159b7f34c6937f1ca0fc0aadaf2d8474027d9255909aa59ed8ec6f548b403fe8->leave($__internal_159b7f34c6937f1ca0fc0aadaf2d8474027d9255909aa59ed8ec6f548b403fe8_prof);

        
        $__internal_4007806226fdffee72cd6e1f7e3cc4372d2b01f5272231b5a0ef808ff1eab84c->leave($__internal_4007806226fdffee72cd6e1f7e3cc4372d2b01f5272231b5a0ef808ff1eab84c_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_f9014a3f9c81e5c7b2e0ef815f6102507bc436fc56eab4786a63e1e83dbf44f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9014a3f9c81e5c7b2e0ef815f6102507bc436fc56eab4786a63e1e83dbf44f7->enter($__internal_f9014a3f9c81e5c7b2e0ef815f6102507bc436fc56eab4786a63e1e83dbf44f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_007f96fa149f23ebebefb8f32f14180936ff2dd29eec295d78efed225a6c4640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_007f96fa149f23ebebefb8f32f14180936ff2dd29eec295d78efed225a6c4640->enter($__internal_007f96fa149f23ebebefb8f32f14180936ff2dd29eec295d78efed225a6c4640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_007f96fa149f23ebebefb8f32f14180936ff2dd29eec295d78efed225a6c4640->leave($__internal_007f96fa149f23ebebefb8f32f14180936ff2dd29eec295d78efed225a6c4640_prof);

        
        $__internal_f9014a3f9c81e5c7b2e0ef815f6102507bc436fc56eab4786a63e1e83dbf44f7->leave($__internal_f9014a3f9c81e5c7b2e0ef815f6102507bc436fc56eab4786a63e1e83dbf44f7_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_e4bf88c37c14636303d97b828690f969e172b309ebb285268590b21df2e4a57b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4bf88c37c14636303d97b828690f969e172b309ebb285268590b21df2e4a57b->enter($__internal_e4bf88c37c14636303d97b828690f969e172b309ebb285268590b21df2e4a57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_0a1d796d2e299404a7d06a44dd74e1041067bb91d383e0c0f588f721eabf2240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a1d796d2e299404a7d06a44dd74e1041067bb91d383e0c0f588f721eabf2240->enter($__internal_0a1d796d2e299404a7d06a44dd74e1041067bb91d383e0c0f588f721eabf2240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_0a1d796d2e299404a7d06a44dd74e1041067bb91d383e0c0f588f721eabf2240->leave($__internal_0a1d796d2e299404a7d06a44dd74e1041067bb91d383e0c0f588f721eabf2240_prof);

        
        $__internal_e4bf88c37c14636303d97b828690f969e172b309ebb285268590b21df2e4a57b->leave($__internal_e4bf88c37c14636303d97b828690f969e172b309ebb285268590b21df2e4a57b_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
