/**
 * File notice.js.
 */
(function ($) {
  var wpwheels_notification = {
    isLoading: false,

    init: function () {
      if ($(".blockwheels-plugin-inner").length) {
        this.render_actions();
        $(document).on(
          "click",
          ".blockwheels-plugin-inner .notice-dismiss",
          this.dismiss_notice
        );
        $(document).on(
          "click",
          ".blockwheels-plugin-inner .notice-actions button",
          this.main_action
        );
      }
    },

    render_actions: function () {
      $.ajax({
        type: "post",
        url: ajaxurl,
        data: {
          action: "wpwheels_check_notice_actions",
        },
        success: function (response) {
          if (response.data != "") {
            $(".wpwheels-notification-content .content-text-column").append(
              response.data
            );
          }
        },
        complete: function () {},
      });
    },

    dismiss_notice: function (evt) {
      $(evt.target).closest(".notice-blockwheels-plugin").remove();

      $.ajax(ajaxurl, {
        type: "POST",
        data: {
          action: "wpwheels_dismissed_notice",
        },
      });
    },

    main_action: function (evt) {
      wpwheels_notification.isLoading = true;

      var $el = $(evt.target);
      $el.prop("disabled", "disabled");

      if ($el.data("action") == "activate") {
        $(evt.target).text(wpwheels_notice_i18n.activating);
      } else if ($el.data("action") == "install_activate") {
        $(evt.target).text(wpwheels_notice_i18n.installing_activating);
      }

      $(evt.target).append('<i className="dashicons dashicons-update" />');

      $.ajax({
        type: "post",
        url: ajaxurl,
        data: {
          action: "wpwheels_notice_button_click",
        },
        success: function (response) {
          if (response.success) {
            if (response.data.status === "active") {
              location.assign(response.data.pluginUrl);
            }
          }

          wpwheels_notification.isLoading = false;
        },
        complete: function () {},
      });
    },
  };

  wpwheels_notification.init();
})(jQuery);
