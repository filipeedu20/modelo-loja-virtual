<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* admin/view/template/marketplace/api.twig */
class __TwigTemplate_4aee69311f9dd1f171bc4f48e30ad324 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div id=\"modal-api\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa-solid fa-cog\"></i> ";
        // line 5
        yield ($context["heading_title"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-api\">
          <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 10
        yield ($context["text_signup"] ?? null);
        yield "</div>
          <div class=\"mb-3\">
            <label for=\"input-username\" class=\"form-label\">";
        // line 12
        yield ($context["entry_username"] ?? null);
        yield "</label> <input type=\"text\" name=\"opencart_username\" value=\"\" placeholder=\"";
        yield ($context["entry_username"] ?? null);
        yield "\" id=\"input-username\" class=\"form-control\"/>
            <div id=\"error-username\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-secret\" class=\"form-label\">";
        // line 16
        yield ($context["entry_secret"] ?? null);
        yield "</label> <textarea name=\"opencart_secret\" placeholder=\"";
        yield ($context["entry_secret"] ?? null);
        yield "\" rows=\"8\" id=\"input-secret\" class=\"form-control\"></textarea>
            <div id=\"error-secret\" class=\"invalid-feedback\"></div>
          </div>
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"submit\" form=\"form-api\" id=\"button-save\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 22
        yield ($context["button_save"] ?? null);
        yield "</button>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-api').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=marketplace/api.save&user_token=";
        // line 32
        yield ($context["user_token"] ?? null);
        yield "',
        type: 'post',
        dataType: 'json',
        data: \$('#form-api').serialize(),
        beforeSend: function() {
            \$('#button-save').button('loading');
        },
        complete: function() {
            \$('#button-save').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#modal-api .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#modal-api .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                window.location.reload();
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script> 
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/marketplace/api.twig";
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
        return array (  94 => 32,  81 => 22,  70 => 16,  61 => 12,  56 => 10,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"modal-api\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa-solid fa-cog\"></i> {{ heading_title }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-api\">
          <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> {{ text_signup }}</div>
          <div class=\"mb-3\">
            <label for=\"input-username\" class=\"form-label\">{{ entry_username }}</label> <input type=\"text\" name=\"opencart_username\" value=\"\" placeholder=\"{{ entry_username }}\" id=\"input-username\" class=\"form-control\"/>
            <div id=\"error-username\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-secret\" class=\"form-label\">{{ entry_secret }}</label> <textarea name=\"opencart_secret\" placeholder=\"{{ entry_secret }}\" rows=\"8\" id=\"input-secret\" class=\"form-control\"></textarea>
            <div id=\"error-secret\" class=\"invalid-feedback\"></div>
          </div>
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"submit\" form=\"form-api\" id=\"button-save\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> {{ button_save }}</button>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-api').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=marketplace/api.save&user_token={{ user_token }}',
        type: 'post',
        dataType: 'json',
        data: \$('#form-api').serialize(),
        beforeSend: function() {
            \$('#button-save').button('loading');
        },
        complete: function() {
            \$('#button-save').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#modal-api .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#modal-api .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                window.location.reload();
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script> 
", "admin/view/template/marketplace/api.twig", "C:\\servidor_web\\loja_virtual\\upload\\admin\\view\\template\\marketplace\\api.twig");
    }
}
