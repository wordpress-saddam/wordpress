/*!**************************************!*\
  !*** ./src/admin/js/ilj_keywords.js ***!
  \**************************************/
(function ($) {
  $.fn.ilj_keywords = function (options) {
    var elem = this;

    // Default options
    var settings = $.extend({
      inputField: '',
      errorMessage: '',
      duplicate_notice: '',
      requiresPro: false,
      sortable: true
    }, options);
    var tipsoConfig = {
      width: '',
      maxWidth: '200',
      useTitle: true,
      delay: 100,
      speed: 500,
      background: '#32373c',
      color: '#eeeeee',
      size: 'small'
    };
    var keyword = {
      keywords: [],
      /**
       * Init function for the object
       */
      init: function () {
        var that = this;
        if (settings.sortable) {
          elem.find('ul.keyword-view').sortable({
            opacity: 0.5,
            helper: "clone",
            forceHelperSize: true,
            forcePlaceholderSize: true,
            cursor: "move",
            placeholder: "placeholder",
            update: function (event, ui) {
              that.reorderKeywords();
            }
          });
        }
        elem.find('ul.keyword-view').disableSelection();
        elem.find('.tip').iljtipso(tipsoConfig);
        elem.on('keypress', 'input.keywordInput', function (e) {
          if (e.keyCode === 13) {
            elem.find('a.add-keyword').click();
          }
          return e.keyCode != 13;
        });

        /**
         * All interactions of the input GUI
         */
        elem.on('click', 'a.add-keyword', function (e) {
          e.preventDefault();
          var keyword_input = $(this).siblings('input.keywordInput');
          var id = null;
          var type = null;
          var sub_type = null;
          var url_params = new URLSearchParams(window.location.search);
          var is_for_blacklisted_keyword = false;
          if ($(this).attr('blacklist-keyword') === 'true') {
            is_for_blacklisted_keyword = true;
          }
          if ($('#post_ID').length) {
            id = $('#post_ID').val();
            sub_type = $('#post_type').val();
            if ('ilj_customlinks' !== sub_type) {
              type = 'post';
            } else {
              type = sub_type;
            }
          } else if (url_params.get('tag_ID')) {
            id = url_params.get('tag_ID');
            sub_type = url_params.get('taxonomy');
            type = 'term';
          }
          if (keyword_input.val().indexOf(',') !== -1) {
            var keywords = keyword_input.val().split(',');
            keywords.forEach(function (keyword, index) {
              keyword_value = that.sanitizeKeyword(keyword);
              valid = that.validateKeyword(keyword_value);
              if (!valid.is_valid) {
                return;
              }
              that.addKeyword(keyword_value);
            });
          } else {
            keyword_value = that.sanitizeKeyword(keyword_input.val());
            valid = that.validateKeyword(keyword_value);
            if (!valid.is_valid) {
              that.setError(valid.message);
              return;
            }
            that.addKeyword(keyword_value);
          }
          /**
           * Initializing
           */
          keyword_input.val('');
          that.clearError();
          that.syncGui();
          that.syncField();
        });
        this.initKeywords();
        this.syncGui();

        /**
         * All interactions of the keyword view GUI
         */
        elem.on('click', '.keyword a.remove', function (e) {
          e.preventDefault();
          var index = $(this).parent('.keyword').data('id');
          that.keywords.splice(index, 1);
          that.syncGui();
          that.syncField();
        });
        return this.keywords;
      },
      /**
       * Initializing the keyword list
       */
      initKeywords: function () {
        that = this;
        var input_data = $('<textarea/>').text(settings.inputField.val()).html();
        if (input_data != '' && input_data != null) {
          var input_keywords = input_data.split(',');
          input_keywords.forEach(function (keyword, index) {
            that.addKeyword(keyword);
          });
        }
      },
      /**
      * Add a Keyword to the keyword list
      */
      addKeyword: function (keyword) {
        that = this;
        this.keywords.push(keyword);
      },
      /**
       * Cleans a given keyword
       */
      sanitizeKeyword: function (keyword) {
        var keyword_sanitized = keyword.replace(/\s*\{\s*/gu, " {").replace(/\s*\}\s*/gu, "} ").replace(/\s{2,}/gu, " ").replace(/^\s+|\s+$/gu, "").replace(/</g, "&lt;").replace(/>/g, "&gt;");
        return keyword_sanitized;
      },
      /**
       * Checks if a keyword is valid
       */
      validateKeyword: function (keyword) {
        var status = {
          is_valid: false,
          message: "Unknown error"
        };
        var min_length = 2;
        var keyword_valid_check = keyword.replace(/\{.*?\}/gu, "").replace(/\s/gu, "");
        for (var i = 0; i < this.keywords.length; i++) {
          if (keyword.toLowerCase() == this.keywords[i].toLowerCase()) {
            status.message = ilj_editor_translation.message_keyword_exists;
            return status;
          }
        }
        if (keyword_valid_check === "") {
          status.message = ilj_editor_translation.message_no_keyword;
          return status;
        }
        if (keyword_valid_check.length < min_length) {
          status.message = ilj_editor_translation.message_length_not_valid;
          return status;
        }
        if (/(\s?\{[+-]*\d+\}\s?){2,}/.test(keyword)) {
          status.message = ilj_editor_translation.message_multiple_placeholder;
          return status;
        }
        var keywords_count = this.keywords.length;
        if (settings.requiresPro == true && ilj_editor_basic_restriction.is_active == true) {
          if (keywords_count >= ilj_editor_basic_restriction.blacklist_limit) {
            status.message = '<p>' + ilj_editor_translation.message_limited_blacklist_keyword + '</p>';
            status.message += '<p>' + ilj_editor_translation.message_limited_blacklist_keyword_upgrade + '.</p>';
            return status;
          }
        }
        status.is_valid = true;
        status.message = "";
        return status;
      },
      /**
       * Synchronizes the keyword view gui with the keyword list
       */
      syncGui: function () {
        var that = this;
        elem.find('ul.keyword-view li').remove();
        if (this.keywords.length > 0) {
          this.keywords.forEach(function (keyword, index) {
            elem.find('ul.keyword-view').append($(that.renderKeyword(keyword, index)));
          });
          elem.find('.tip').iljtipso(tipsoConfig);
        } else {
          elem.find('ul.keyword-view').append($('<li>' + ilj_editor_translation.no_keywords + '</li>'));
        }
      },
      /**
       * Synchronizes the hidden input, that gets sent to the backend
       */
      syncField: function () {
        settings.inputField.val(this.keywords.join(','));
      },
      /**
       * Renders a single keyword to the keyword view GUI
       */
      renderKeyword: function (keyword, index) {
        keyword_print = keyword.replace(/\{(\d+)\}/g, '<span class="exact tip" title="' + ilj_editor_translation.gap_hover_exact + ' $1">$1</span>').replace(/\{\-(\d+)\}/g, '<span class="max tip" title="' + ilj_editor_translation.gap_hover_max + ' $1">$1</span>').replace(/\{\+(\d+)\}/g, '<span class="min tip" title="' + ilj_editor_translation.gap_hover_min + ' $1">$1</span>');
        return '<li class="keyword" data-id="' + index + '"><a class="dashicons dashicons-dismiss remove"></a>' + keyword_print + '</li>';
      },
      /**
       * Re-orders the keywords-list depending on the order
       * of the <li> -elements in the GUI
       */
      reorderKeywords: function () {
        order = [];
        var that = this;
        elem.find('li').each(function () {
          var id = $(this).data('id');
          if (id === undefined) {
            return;
          }
          order.push(id);
        });
        new_keywords = [];
        $.each(order, function (key, position) {
          new_keywords.push(that.keywords[position]);
        });
        that.keywords = new_keywords;
        that.syncGui();
        that.syncField();
        return true;
      },
      /**
       * Displays an error message
       */
      setError: function (message) {
        settings.errorMessage.html(message);
        settings.errorMessage.show();
      },
      /**
       * Clears the error message
       */
      clearError: function () {
        settings.errorMessage.html('');
        settings.errorMessage.hide();
      }
    };

    //Initializing the ILJ keyword object
    keyword.init();
  };
})(jQuery);
