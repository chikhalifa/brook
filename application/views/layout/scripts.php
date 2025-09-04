<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<script type="speculationrules">
  {
    "prefetch": [
      {
        "source": "document",
        "where": {
          "and": [
            { "href_matches": "\/*" },
            {
              "not": {
                "href_matches": [
                  "\/wp-*.php",
                  "\/wp-admin\/*",
                  "\/wp-content\/uploads\/*",
                  "\/wp-content\/*",
                  "\/wp-content\/plugins\/*",
                  "\/wp-content\/themes\/brookman\/*",
                  "\/*\\?(.+)"
                ]
              }
            },
            { "not": { "selector_matches": "a[rel~=\"nofollow\"]" } },
            { "not": { "selector_matches": ".no-prefetch, .no-prefetch a" } }
          ]
        },
        "eagerness": "conservative"
      }
    ]
  }
</script>
<script type="text/javascript" id="gforms_recaptcha_recaptcha-js-extra">
  /* <![CDATA[ */
  var gforms_recaptcha_recaptcha_strings = {
    nonce: "9b316613ec",
    disconnect: "Disconnecting",
    change_connection_type: "Resetting",
    spinner:
      "https:\/\/www.brookman.co.uk\/wp-content\/plugins\/gravityforms\/images\/spinner.svg",
    connection_type: "classic",
    disable_badge: "",
    change_connection_type_title: "Change Connection Type",
    change_connection_type_message:
      "Changing the connection type will delete your current settings.  Do you want to proceed?",
    disconnect_title: "Disconnect",
    disconnect_message:
      "Disconnecting from reCAPTCHA will delete your current settings.  Do you want to proceed?",
    site_key: "6Lclz68cAAAAACheMrgvkkiyBadqkHpZif-ziydJ",
  };
  /* ]]> */
</script>
<script
  type="text/javascript"
  data-src="https://www.google.com/recaptcha/api.js?render=6Lclz68cAAAAACheMrgvkkiyBadqkHpZif-ziydJ&amp;ver=1.9.0"
  id="gforms_recaptcha_recaptcha-js"
  defer="defer"
  data-wp-strategy="defer"
></script>
<script
  type="text/javascript"
  src="wp-content/plugins/gravityformsrecaptcha/js/frontend.min8162.js?ver=1.9.0"
  id="gforms_recaptcha_frontend-js"
  defer="defer"
  data-wp-strategy="defer"
></script>
<script
  type="text/javascript"
  src="wp-content/themes/brookman/js/slick.min.js"
  id="ge_slick-js"
></script>
<script
  type="text/javascript"
  src="wp-content/themes/brookman/js/scriptsd8fb.js?ver=2021033102"
  id="ge_scripts-js"
></script>
<script
  type="text/javascript"
  src="wp-includes/js/dist/dom-ready.min5346.js?ver=f77871ff7694fffea381"
  id="wp-dom-ready-js"
></script>
<script
  type="text/javascript"
  src="wp-includes/js/dist/hooks.min4fdd.js?ver=4d63a3d491d11ffd8ac6"
  id="wp-hooks-js"
></script>
<script
  type="text/javascript"
  src="wp-includes/js/dist/i18n.minc33c.js?ver=5e580eb46a90c2b997e6"
  id="wp-i18n-js"
></script>
<script type="text/javascript" id="wp-i18n-js-after">
  /* <![CDATA[ */
  wp.i18n.setLocaleData({
    "text direction\u0004ltr": ["ltr"],
  });
  /* ]]> */
</script>
<script
  type="text/javascript"
  src="wp-includes/js/dist/a11y.min3f73.js?ver=3156534cc54473497e14"
  id="wp-a11y-js"
></script>
<script
  type="text/javascript"
  defer="defer"
  src="wp-content/plugins/gravityforms/js/jquery.json.min3b9a.js?ver=2.9.15"
  id="gform_json-js"
></script>
<script type="text/javascript" id="gform_gravityforms-js-extra">
  /* <![CDATA[ */
  var gform_i18n = {
    datepicker: {
      days: {
        monday: "Mo",
        tuesday: "Tu",
        wednesday: "We",
        thursday: "Th",
        friday: "Fr",
        saturday: "Sa",
        sunday: "Su",
      },
      months: {
        january: "January",
        february: "February",
        march: "March",
        april: "April",
        may: "May",
        june: "June",
        july: "July",
        august: "August",
        september: "September",
        october: "October",
        november: "November",
        december: "December",
      },
      firstDay: 1,
      iconText: "Select date",
    },
  };
  var gf_legacy_multi = [];
  var gform_gravityforms = {
    strings: {
      invalid_file_extension:
        "This type of file is not allowed. Must be one of the following:",
      delete_file: "Delete this file",
      in_progress: "in progress",
      file_exceeds_limit: "File exceeds size limit",
      illegal_extension: "This type of file is not allowed.",
      max_reached: "Maximum number of files reached",
      unknown_error: "There was a problem while saving the file on the server",
      currently_uploading: "Please wait for the uploading to complete",
      cancel: "Cancel",
      cancel_upload: "Cancel this upload",
      cancelled: "Cancelled",
    },
    vars: {
      images_url:
        "https:\/\/www.brookman.co.uk\/wp-content\/plugins\/gravityforms\/images",
    },
  };
  var gf_global = {
    gf_currency_config: {
      name: "Pound Sterling",
      symbol_left: "&#163;",
      symbol_right: "",
      symbol_padding: " ",
      thousand_separator: ",",
      decimal_separator: ".",
      decimals: 2,
      code: "GBP",
    },
    base_url: "https:\/\/www.brookman.co.uk\/wp-content\/plugins\/gravityforms",
    number_formats: [],
    spinnerUrl:
      "https:\/\/www.brookman.co.uk\/wp-content\/plugins\/gravityforms\/images\/spinner.svg",
    version_hash: "470b020575f697d4c442cc0cd6d9ad08",
    strings: {
      newRowAdded: "New row added.",
      rowRemoved: "Row removed",
      formSaved:
        "The form has been saved.  The content contains the link to return and complete the form.",
    },
  };
  var gf_global = {
    gf_currency_config: {
      name: "Pound Sterling",
      symbol_left: "&#163;",
      symbol_right: "",
      symbol_padding: " ",
      thousand_separator: ",",
      decimal_separator: ".",
      decimals: 2,
      code: "GBP",
    },
    base_url: "https:\/\/www.brookman.co.uk\/wp-content\/plugins\/gravityforms",
    number_formats: [],
    spinnerUrl:
      "https:\/\/www.brookman.co.uk\/wp-content\/plugins\/gravityforms\/images\/spinner.svg",
    version_hash: "470b020575f697d4c442cc0cd6d9ad08",
    strings: {
      newRowAdded: "New row added.",
      rowRemoved: "Row removed",
      formSaved:
        "The form has been saved.  The content contains the link to return and complete the form.",
    },
  };
  var gf_global = {
    gf_currency_config: {
      name: "Pound Sterling",
      symbol_left: "&#163;",
      symbol_right: "",
      symbol_padding: " ",
      thousand_separator: ",",
      decimal_separator: ".",
      decimals: 2,
      code: "GBP",
    },
    base_url: "https:\/\/www.brookman.co.uk\/wp-content\/plugins\/gravityforms",
    number_formats: [],
    spinnerUrl:
      "https:\/\/www.brookman.co.uk\/wp-content\/plugins\/gravityforms\/images\/spinner.svg",
    version_hash: "470b020575f697d4c442cc0cd6d9ad08",
    strings: {
      newRowAdded: "New row added.",
      rowRemoved: "Row removed",
      formSaved:
        "The form has been saved.  The content contains the link to return and complete the form.",
    },
  };
  /* ]]> */
</script>
<script
  type="text/javascript"
  defer="defer"
  src="wp-content/plugins/gravityforms/js/gravityforms.min3b9a.js?ver=2.9.15"
  id="gform_gravityforms-js"
></script>
<script
  type="text/javascript"
  defer="defer"
  src="wp-content/plugins/gravityforms/js/placeholders.jquery.min3b9a.js?ver=2.9.15"
  id="gform_placeholder-js"
></script>
<script
  type="text/javascript"
  defer="defer"
  src="wp-content/plugins/gravityforms/assets/js/dist/utils.minf287.js?ver=380b7a5ec0757c78876bc8a59488f2f3"
  id="gform_gravityforms_utils-js"
></script>
<script
  type="text/javascript"
  defer="defer"
  src="wp-content/plugins/gravityforms/assets/js/dist/vendor-theme.min5ae6.js?ver=21e5a4db1670166692ac5745329bfc80"
  id="gform_gravityforms_theme_vendors-js"
></script>
<script type="text/javascript" id="gform_gravityforms_theme-js-extra">
  /* <![CDATA[ */
  var gform_theme_config = {
    common: {
      form: {
        honeypot: {
          version_hash: "470b020575f697d4c442cc0cd6d9ad08",
        },
        ajax: {
          ajaxurl: "https:\/\/www.brookman.co.uk\/wp-admin\/admin-ajax.php",
          ajax_submission_nonce: "ab22e813df",
          i18n: {
            step_announcement: "Step %1$s of %2$s, %3$s",
            unknown_error:
              "There was an unknown error processing your request. Please try again.",
          },
        },
      },
    },
    hmr_dev: "",
    public_path:
      "https:\/\/www.brookman.co.uk\/wp-content\/plugins\/gravityforms\/assets\/js\/dist\/",
    config_nonce: "9146726eab",
  };
  /* ]]> */
</script>
<script
  type="text/javascript"
  defer="defer"
  src="wp-content/plugins/gravityforms/assets/js/dist/scripts-theme.min5670.js?ver=6948abdc7ae7b144f97e36c93fa02605"
  id="gform_gravityforms_theme-js"
></script>
<script type="text/javascript" id="wp-ajax-response-js-extra">
  /* <![CDATA[ */
  var wpAjax = {
    noPerm: "Sorry, you are not allowed to do that.",
    broken:
      "An error occurred while processing your request. Please try again later.",
  };
  /* ]]> */
</script>
<script
  type="text/javascript"
  src="wp-includes/js/wp-ajax-response.min6c2d.js?ver=6.8.2"
  id="wp-ajax-response-js"
></script>
<script type="text/javascript" id="gforms_google_analytics_frontend-js-before">
  /* <![CDATA[ */
  var gforms_google_analytics_frontend_strings = {
    ajaxurl: "https:\/\/www.brookman.co.uk\/wp-admin\/admin-ajax.php",
    nonce: "a441b2875e",
    logging_enabled: false,
    logging_nonce: "de95bcaea1",
    ua_tracker: "",
  };
  /* ]]> */
</script>
<script
  type="text/javascript"
  src="wp-content/plugins/gravityformsgoogleanalytics/js/google-analytics.min8d5a.js?ver=2.4.0"
  id="gforms_google_analytics_frontend-js"
></script>
<script type="text/javascript">
  /* <![CDATA[ */
  gform.initializeOnLoaded(function () {
    jQuery(document).on(
      "gform_post_render",
      function (event, formId, currentPage) {
        if (formId == 14) {
          if (typeof Placeholders != "undefined") {
            Placeholders.enable();
          }
        }
      }
    );
    jQuery(document).on(
      "gform_post_conditional_logic",
      function (event, formId, fields, isInit) {}
    );
  });
  /* ]]> */
</script>
<script type="text/javascript">
  /* <![CDATA[ */
  gform.initializeOnLoaded(function () {
    jQuery(document).trigger("gform_pre_post_render", [
      {
        formId: "14",
        currentPage: "1",
        abort: function () {
          this.preventDefault();
        },
      },
    ]);
    if (event && event.defaultPrevented) {
      return;
    }
    const gformWrapperDiv = document.getElementById("gform_wrapper_14");
    if (gformWrapperDiv) {
      const visibilitySpan = document.createElement("span");
      visibilitySpan.id = "gform_visibility_test_14";
      gformWrapperDiv.insertAdjacentElement("afterend", visibilitySpan);
    }
    const visibilityTestDiv = document.getElementById(
      "gform_visibility_test_14"
    );
    let postRenderFired = false;

    function triggerPostRender() {
      if (postRenderFired) {
        return;
      }
      postRenderFired = true;
      gform.core.triggerPostRenderEvents(14, 1);
      if (visibilityTestDiv) {
        visibilityTestDiv.parentNode.removeChild(visibilityTestDiv);
      }
    }

    function debounce(func, wait, immediate) {
      var timeout;
      return function () {
        var context = this,
          args = arguments;
        var later = function () {
          timeout = null;
          if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
      };
    }
    const debouncedTriggerPostRender = debounce(function () {
      triggerPostRender();
    }, 200);
    if (visibilityTestDiv && visibilityTestDiv.offsetParent === null) {
      const observer = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
          if (
            mutation.type === "attributes" &&
            visibilityTestDiv.offsetParent !== null
          ) {
            debouncedTriggerPostRender();
            observer.disconnect();
          }
        });
      });
      observer.observe(document.body, {
        attributes: true,
        childList: false,
        subtree: true,
        attributeFilter: ["style", "class"],
      });
    } else {
      triggerPostRender();
    }
  });
  /* ]]> */
</script>
<script type="text/javascript">
  /* <![CDATA[ */
  gform.initializeOnLoaded(function () {
    jQuery(document).on(
      "gform_post_render",
      function (event, formId, currentPage) {
        if (formId == 11) {
          if (typeof Placeholders != "undefined") {
            Placeholders.enable();
          }
        }
      }
    );
    jQuery(document).on(
      "gform_post_conditional_logic",
      function (event, formId, fields, isInit) {}
    );
  });
  /* ]]> */
</script>
<script type="text/javascript">
  /* <![CDATA[ */
  gform.initializeOnLoaded(function () {
    jQuery(document).trigger("gform_pre_post_render", [
      {
        formId: "11",
        currentPage: "1",
        abort: function () {
          this.preventDefault();
        },
      },
    ]);
    if (event && event.defaultPrevented) {
      return;
    }
    const gformWrapperDiv = document.getElementById("gform_wrapper_11");
    if (gformWrapperDiv) {
      const visibilitySpan = document.createElement("span");
      visibilitySpan.id = "gform_visibility_test_11";
      gformWrapperDiv.insertAdjacentElement("afterend", visibilitySpan);
    }
    const visibilityTestDiv = document.getElementById(
      "gform_visibility_test_11"
    );
    let postRenderFired = false;

    function triggerPostRender() {
      if (postRenderFired) {
        return;
      }
      postRenderFired = true;
      gform.core.triggerPostRenderEvents(11, 1);
      if (visibilityTestDiv) {
        visibilityTestDiv.parentNode.removeChild(visibilityTestDiv);
      }
    }

    function debounce(func, wait, immediate) {
      var timeout;
      return function () {
        var context = this,
          args = arguments;
        var later = function () {
          timeout = null;
          if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
      };
    }
    const debouncedTriggerPostRender = debounce(function () {
      triggerPostRender();
    }, 200);
    if (visibilityTestDiv && visibilityTestDiv.offsetParent === null) {
      const observer = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
          if (
            mutation.type === "attributes" &&
            visibilityTestDiv.offsetParent !== null
          ) {
            debouncedTriggerPostRender();
            observer.disconnect();
          }
        });
      });
      observer.observe(document.body, {
        attributes: true,
        childList: false,
        subtree: true,
        attributeFilter: ["style", "class"],
      });
    } else {
      triggerPostRender();
    }
  });
  /* ]]> */
</script>
<script type="text/javascript">
  /* <![CDATA[ */
  gform.initializeOnLoaded(function () {
    jQuery(document).on(
      "gform_post_render",
      function (event, formId, currentPage) {
        if (formId == 12) {
          if (typeof Placeholders != "undefined") {
            Placeholders.enable();
          }
        }
      }
    );
    jQuery(document).on(
      "gform_post_conditional_logic",
      function (event, formId, fields, isInit) {}
    );
  });
  /* ]]> */
</script>
<script type="text/javascript">
  /* <![CDATA[ */
  gform.initializeOnLoaded(function () {
    jQuery(document).trigger("gform_pre_post_render", [
      {
        formId: "12",
        currentPage: "1",
        abort: function () {
          this.preventDefault();
        },
      },
    ]);
    if (event && event.defaultPrevented) {
      return;
    }
    const gformWrapperDiv = document.getElementById("gform_wrapper_12");
    if (gformWrapperDiv) {
      const visibilitySpan = document.createElement("span");
      visibilitySpan.id = "gform_visibility_test_12";
      gformWrapperDiv.insertAdjacentElement("afterend", visibilitySpan);
    }
    const visibilityTestDiv = document.getElementById(
      "gform_visibility_test_12"
    );
    let postRenderFired = false;

    function triggerPostRender() {
      if (postRenderFired) {
        return;
      }
      postRenderFired = true;
      gform.core.triggerPostRenderEvents(12, 1);
      if (visibilityTestDiv) {
        visibilityTestDiv.parentNode.removeChild(visibilityTestDiv);
      }
    }

    function debounce(func, wait, immediate) {
      var timeout;
      return function () {
        var context = this,
          args = arguments;
        var later = function () {
          timeout = null;
          if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
      };
    }
    const debouncedTriggerPostRender = debounce(function () {
      triggerPostRender();
    }, 200);
    if (visibilityTestDiv && visibilityTestDiv.offsetParent === null) {
      const observer = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
          if (
            mutation.type === "attributes" &&
            visibilityTestDiv.offsetParent !== null
          ) {
            debouncedTriggerPostRender();
            observer.disconnect();
          }
        });
      });
      observer.observe(document.body, {
        attributes: true,
        childList: false,
        subtree: true,
        attributeFilter: ["style", "class"],
      });
    } else {
      triggerPostRender();
    }
  });
  /* ]]> */
</script>

<script>
  if (window.location.hash) {
    window.scrollBy(0, -80);
  }
</script>

<script>
  (function ($) {
    var $body = $("body");

    ["mouseover", "keydown", "touchmove", "touchstart"].forEach(function (
      event_name
    ) {
      document.addEventListener(event_name, function (event) {
        if ($(event.target).closest("form").length) {
          document
            .querySelectorAll("script[data-src]")
            .forEach(function (element, index) {
              //element.src = element.dataset.src;

              if (!$("#" + element.id + "2").length) {
                var script = document.createElement("script");
                script.type = "text/javascript";
                script.src = element.dataset.src;
                script.id = element.id + "2";

                $body[0].appendChild(script);
              }
            });
        }
      });
    });

    function executeRecaptcha() {
      grecaptcha.ready(function () {
        grecaptcha
          .execute(gforms_recaptcha_recaptcha_strings["site_key"], {
            action: "submit",
          })
          .then(function (token) {
            jQuery("input.gfield_recaptcha_response").val(token);
          });
      });
    }

    var wlcf_interval = setInterval(function () {
      if (typeof grecaptcha !== "undefined") {
        executeRecaptcha();
        clearInterval(wlcf_interval);

        setInterval(function () {
          executeRecaptcha();
        }, 60000);
      }
    }, 500);

    jQuery(document).on(
      "gform_post_render",
      function (event, form_id, current_page) {
        executeRecaptcha();
      }
    );
  })(jQuery);
</script>