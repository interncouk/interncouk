/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!*************************************************************************!*\
  !*** ./platform/plugins/job-board/resources/assets/js/account-admin.js ***!
  \*************************************************************************/


$(document).ready(function () {
  $(document).on('click', '#is_change_password', function (event) {
    if ($(event.currentTarget).is(':checked')) {
      $('input[type=password]').closest('.form-group').removeClass('hidden').fadeIn();
    } else {
      $('input[type=password]').closest('.form-group').addClass('hidden').fadeOut();
    }
  });
  $(document).on('click', '.btn-trigger-add-credit', function (event) {
    event.preventDefault();
    $('#add-credit-modal').modal('show');
  });
  $(document).on('click', '.btn-trigger-add-education', function (event) {
    event.preventDefault();
    $('#add-education-modal').modal('show');
  });
  $(document).on('click', '.btn-trigger-edit-education', function (event) {
    event.preventDefault();
    var _self = $(event.currentTarget);
    $.ajax({
      type: 'GET',
      cache: false,
      url: _self.data('section'),
      success: function success(res) {
        if (!res.error) {
          $('#edit-education-modal .modal-body').html('');
          $('#edit-education-modal .modal-body').append(res);
          $('#edit-education-modal').modal('show');
        } else {
          Botble.showNotice('error', res.message);
        }
        _self.removeClass('button-loading');
      },
      error: function error(res) {
        Botble.handleError(res);
        _self.removeClass('button-loading');
      }
    });
  });
  $(document).on('click', '#confirm-edit-education-button', function (event) {
    event.preventDefault();
    var _self = $(event.currentTarget);
    _self.addClass('button-loading');
    $.ajax({
      type: 'POST',
      cache: false,
      url: _self.closest('.modal-content').find('form').prop('action'),
      data: _self.closest('.modal-content').find('form').serialize(),
      success: function success(res) {
        if (!res.error) {
          Botble.showNotice('success', res.message);
          $('#edit-education-modal').modal('hide');
          _self.closest('.modal-content').find('form').get(0).reset();
          $('#education-histories').load($('.page-content form').prop('action') + ' #education-histories > *');
        } else {
          Botble.showNotice('error', res.message);
        }
        _self.removeClass('button-loading');
      },
      error: function error(res) {
        Botble.handleError(res);
        _self.removeClass('button-loading');
      }
    });
  });
  $(document).on('click', '#confirm-add-education-button', function (event) {
    event.preventDefault();
    var _self = $(event.currentTarget);
    _self.addClass('button-loading');
    $.ajax({
      type: 'POST',
      cache: false,
      url: _self.closest('.modal-content').find('form').prop('action'),
      data: _self.closest('.modal-content').find('form').serialize(),
      success: function success(res) {
        if (!res.error) {
          Botble.showNotice('success', res.message);
          $('#add-education-modal').modal('hide');
          _self.closest('.modal-content').find('form').get(0).reset();
          $('#education-histories').load($('.page-content form').prop('action') + ' #education-histories > *');
        } else {
          Botble.showNotice('error', res.message);
        }
        _self.removeClass('button-loading');
      },
      error: function error(res) {
        Botble.handleError(res);
        _self.removeClass('button-loading');
      }
    });
  });
  $(document).on('click', '#confirm-add-credit-button', function (event) {
    event.preventDefault();
    var _self = $(event.currentTarget);
    _self.addClass('button-loading');
    $.ajax({
      type: 'POST',
      cache: false,
      url: _self.closest('.modal-content').find('form').prop('action'),
      data: _self.closest('.modal-content').find('form').serialize(),
      success: function success(res) {
        if (!res.error) {
          Botble.showNotice('success', res.message);
          $('#add-credit-modal').modal('hide');
          _self.closest('.modal-content').find('form').get(0).reset();
          $('#credit-histories').load($('.page-content form').prop('action') + ' #credit-histories > *');
        } else {
          Botble.showNotice('error', res.message);
        }
        _self.removeClass('button-loading');
      },
      error: function error(res) {
        Botble.handleError(res);
        _self.removeClass('button-loading');
      }
    });
  });
  $(document).on('click', '.show-timeline-dropdown', function (event) {
    event.preventDefault();
    $($(event.currentTarget).data('target')).slideToggle();
    $(event.currentTarget).closest('.comment-log-item').toggleClass('bg-white');
  });
  $(document).on('click', '.deleteDialog', function (event) {
    event.preventDefault();
    var _self = $(event.currentTarget);
    $('.delete-crud-entry').data('section', _self.data('section'));
    $('.modal-confirm-delete').modal('show');
  });
  $('.delete-crud-entry').on('click', function (event) {
    event.preventDefault();
    var _self = $(event.currentTarget);
    _self.addClass('button-loading');
    var deleteURL = _self.data('section');
    $.ajax({
      url: deleteURL,
      type: 'POST',
      data: {
        '_method': 'DELETE'
      },
      success: function success(data) {
        if (data.error) {
          Botble.showError(data.message);
        } else {
          Botble.showSuccess(data.message);
          $('#education-histories').load($('.page-content form').prop('action') + ' #education-histories > *');
          $('#experience-histories').load($('.page-content form').prop('action') + ' #experience-histories > *');
        }
        _self.closest('.modal').modal('hide');
        _self.removeClass('button-loading');
      },
      error: function error(data) {
        Botble.handleError(data);
        _self.removeClass('button-loading');
      }
    });
  });
  $(document).on('click', '.btn-trigger-add-experience', function (event) {
    event.preventDefault();
    $('#add-experience-modal').modal('show');
    Botble.initResources();
  });
  $(document).on('click', '#confirm-add-experience-button', function (event) {
    event.preventDefault();
    var _self = $(event.currentTarget);
    _self.addClass('button-loading');
    $.ajax({
      type: 'POST',
      cache: false,
      url: _self.closest('.modal-content').find('form').prop('action'),
      data: _self.closest('.modal-content').find('form').serialize(),
      success: function success(res) {
        if (!res.error) {
          Botble.showNotice('success', res.message);
          $('#add-experience-modal').modal('hide');
          _self.closest('.modal-content').find('form').get(0).reset();
          $('#experience-histories').load($('.page-content form').prop('action') + ' #experience-histories > *');
        } else {
          Botble.showNotice('error', res.message);
        }
        _self.removeClass('button-loading');
      },
      error: function error(res) {
        Botble.handleError(res);
        _self.removeClass('button-loading');
      }
    });
  });
  $(document).on('click', '.btn-trigger-edit-experience', function (event) {
    event.preventDefault();
    var _self = $(event.currentTarget);
    $.ajax({
      type: 'GET',
      cache: false,
      url: _self.data('section'),
      success: function success(res) {
        if (!res.error) {
          $('#edit-experience-modal .modal-body').html('');
          $('#edit-experience-modal .modal-body').append(res);
          $('#edit-experience-modal').modal('show');
        } else {
          Botble.showNotice('error', res.message);
        }
        _self.removeClass('button-loading');
      },
      error: function error(res) {
        Botble.handleError(res);
        _self.removeClass('button-loading');
      }
    });
  });
  $(document).on('click', '#confirm-edit-experience-button', function (event) {
    event.preventDefault();
    var _self = $(event.currentTarget);
    _self.addClass('button-loading');
    $.ajax({
      type: 'POST',
      cache: false,
      url: _self.closest('.modal-content').find('form').prop('action'),
      data: _self.closest('.modal-content').find('form').serialize(),
      success: function success(res) {
        if (!res.error) {
          Botble.showNotice('success', res.message);
          $('#edit-experience-modal').modal('hide');
          _self.closest('.modal-content').find('form').get(0).reset();
          $('#experience-histories').load($('.page-content form').prop('action') + ' #experience-histories > *');
        } else {
          Botble.showNotice('error', res.message);
        }
        _self.removeClass('button-loading');
      },
      error: function error(res) {
        Botble.handleError(res);
        _self.removeClass('button-loading');
      }
    });
  });
});
/******/ })()
;