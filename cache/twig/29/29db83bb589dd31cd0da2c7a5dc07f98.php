<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* partials/login-status.html.twig */
class __TwigTemplate_a66b2dcfe014b3ae19fbc02b306bd129 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class]->getChecker();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<span class=\"login-status\">
    ";
        // line 2
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "user", [], "any", false, false, true, 2), "authenticated", [], "any", false, false, true, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "        <strong>";
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "user", [], "any", false, false, true, 3), "fullname", [], "any", false, false, true, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "user", [], "any", false, false, true, 3), "fullname", [], "any", false, false, true, 3), 3, $this->source), "html", null, true), 3, $this->source)) : ($this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "user", [], "any", false, false, true, 3), "username", [], "any", false, false, true, 3), 3, $this->source), "html", null, true), 3, $this->source)));
            yield "</strong>, <a class=\"";
            yield (string) (((($tmp = ($context["form_button_classes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->sandbox->ensureToStringAllowed(($context["form_button_classes"] ?? null), 3, $this->source) . " logout"), "html", null, true), 3, $this->source)) : ("logout"));
            yield "\" href=\"";
            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "addNonce", [((($this->sandbox->ensureToStringAllowed(Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "path", [], "any", false, false, true, 3), 3, $this->source), "/"), 3, $this->source) . "/task") . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, true, 3), "param_sep", [], "any", false, false, true, 3), 3, $this->source)) . "login.logout"), "logout-form", "logout-nonce"], "method", false, false, true, 3), 3, $this->source)), 3, $this->source)), 3, $this->source);
            yield "\">";
            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_LOGIN.BTN_LOGOUT"), 3, $this->source), "html", null, true), 3, $this->source);
            yield "</a>
    ";
        }
        // line 5
        yield "</span>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/login-status.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  62 => 5,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<span class=\"login-status\">
    {% if grav.user.authenticated %}
        <strong>{{ grav.user.fullname ?: grav.user.username }}</strong>, <a class=\"{{ form_button_classes ? form_button_classes ~ \x27 logout\x27 : \x27logout\x27 }}\" href=\"{{ url(uri.addNonce((uri.path)|trim(\x27/\x27) ~ \x27/task\x27 ~ config.system.param_sep ~ \x27login.logout\x27, \x27logout-form\x27, \x27logout-nonce\x27))|e }}\">{{ \x27PLUGIN_LOGIN.BTN_LOGOUT\x27|t }}</a>
    {% endif %}
</span>
", "partials/login-status.html.twig", "C:\\laragon\\www\\LARAGON_WORKSPACE\\grav\\user\\plugins\\login\\templates\\partials\\login-status.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 2];
        static $filters = ["escape" => 3, "e" => 3, "trim" => 3, "t" => 3];
        static $functions = ["url" => 3];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if"],
                [0 => "escape", 1 => "e", 2 => "trim", 3 => "t"],
                [0 => "url"],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
